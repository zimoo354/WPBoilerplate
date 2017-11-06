$(document).ready(function(){
	$(document).foundation();
	$('.menu-mobile-trigger').sidr();
});

function sendContacto(){
	var f = $('#form-contacto');
	if (validate(f)) {
		var data = getFormData(f);
		var msg = "Mensaje de contacto de Whatever\n\nNombre: " + data.nombre + '\nEmail: ' + data.email + '\nMensaje:\n\n' + data.mensaje;
		sendMail('no-reply@whatever.com', 'contacto@uniplea.com', 'Mensaje de Contacto', msg, 
			function(){
				// Do your stuff here
				swal('Exito', 'Tu mensaje ha sido enviado', 'success');
			});
	}
}

function getFormData($form){
	var unindexed_array = $form.serializeArray();
	var indexed_array = {};

	$.map(unindexed_array, function(n, i){
		indexed_array[n['name']] = n['value'];
	});

	return indexed_array;
}

function validate($form) {
	if (!$form[0].checkValidity()) {
		$form.find('input[type="submit"]').click();
		return false;
	}
	return true;
}


function sendMail(from, to, subject, msg, callback) {
	var m = new mandrill.Mandrill('lFwDXkU9JM-pHtBjKKUV9g');
	var params = {
		"message": {
			"from_email": from,
			"to":[{"email": to},
                  // {'email': _mailDestino, 'type': 'bcc'}
                  // {"email": "carlos@iw.digital", "type": "bcc"},
                  // {"email": "ricardo@iw.digital", "type": "bcc"},
                  ],
                  "subject": subject,
                  "text": msg
              }
          };
          m.messages.send(params, function(r) {
          	console.log(r);
          	callback();
          }, function(e) {
          	console.log(e);
          });   
      }