function validaDadosForm(){
	var modelo = $("#nameContact").val().length;
	var telContact = $("#telContact").val().length;
	var emailContact = $("#emailContact").val().length;
	var message = $("#message").val().length;
	if (modelo > 0 & telContact > 0 &  emailContact > 0  & message > 0) {
		return true;
	}else{
		$("#retorno").html("All fields are mandatory");
		return false;

	}
}

jQuery(document).ready(function($) {

	$("#btnContact").click(function(event) {
		event.preventDefault();

		if (validaDadosForm()) {
			var name = $("#nameContact").val();
			var phone = $("#telContact").val();
			var email = $("#emailContact").val();
			var subject = $("#subjectContact").val();
			var message = $("#message").val();

			var url ='./email';
			$.post(url, {
				name: name,
				phone: phone,
				email: email,
				subject: subject,
				message: message

			}, function(data) {
				$("#retorno").html(data);

				$("#nameContact").val('');
				$("#telContact").val('');
				$("#emailContact").val('');
				$("#subjectContact").val('');
				$("#message").val('');
			});
		}
		
	});
});
