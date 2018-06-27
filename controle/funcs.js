$(document).ready(function(){

	$('#form').submit(function(){
		var nome = $('#nome');
	var email = $('#email');

	if (nome.val() == '') {
		alert('Informe o nome');
		nome.focus();
		return false;
	}

	if (email.val() == '') {
		alert('Informe o email');
		email.focus();
		return false;
	}
	});
});