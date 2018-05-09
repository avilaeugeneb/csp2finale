$(document).ready(function(){

	/*
	 * Register.php validation
	 */

	$('#username').on('keyup',function(){
		var username = $(this).val();

		$.ajax({
			url:"./lib/validate_reg_user.php",
			method:"POST",
			data:{"username":username}
		}).done(function(data){
			$('span.reg-error-username').html(data);
		});
	});

	$('#usermail').on('keyup',function(){
		var usermail = $(this).val();

		$.ajax({
			url:"./lib/validate_reg_email.php",
			method:"POST",
			data:{"usermail":usermail}
		}).done(function(data){
			$('span.reg-error-email').html(data);
		});
	});

	$('#userpassword').on('blur',function(){
		var userpw = $(this).val();

		if((userpw.length > 0) &&(userpw.length <=8)){
			$('span.reg-error-pw').html('Password is too short');
		}
		else{
			$('span.reg-error-pw').html('');
		}
	});

	$('#confirmpassword').on('keyup',function(){
		var userpw = $('#userpassword').val();
		var confpw = $('#confirmpassword').val();

		if(userpw != confpw){
			$('span.reg-error-cpw').html('Password Mismatched');
		}
		else{
			$('span.reg-error-cpw').html('');
		}
	});

	//Disable spaces for input form
	$("form div input").on("keydown",function(e){
		if (e.which === 32)
	      return false;
	});

	$('form.register div input').on('keydown',function(){
		var spanname = $('span.reg-error-username').html();
		var spanmail = $('span.reg-error-email').html();
		var spanpw = $('span.reg-error-pw').html();
		var spancpw = $('span.reg-error-cpw').html();

		if(isEmpty(spanname) && isEmpty(spanmail) && isEmpty(spanpw) && isEmpty(spancpw)){
			console.log('Fuck');
		}
		else{
			console.log('you');
		}
	});

});

function isEmpty(str) {
    return (!str || " " === str);
}