
$(function () {
	$("#regForm").validate({
		// Specify the validation rules
		rules: {
			name: "required",
            phone: {
				required: true,
				minlength: 11,
				maxlength: 18
			},
            username: "required",
			email: {
				required: true,
				email: true
			},
            pass: "required",
            repass: {
                required: true,
                equalTo: "#pw"
            }
		},
		// Specify the validation error messages
		messages: {
			name: "Please enter your name",
            phone: {
				required: "Please enter phone number",
				minlength: "Your Phone Number Invalid",
				maxlength: "Your Phone Number Invalid"
			},
            username: "Please enter username",
			email:{
				required: "Please enter a valid email address"
			},
            pass: "Please enter password",
            repass: {
                required: 'Please enter confirm password',
                equalTo: "Password didn't match!"
            }

		},
		submitHandler: function (form) {
			form.submit();
		}
	});
});
