// $.validator.setDefaults({
// 	submitHandler: function(){
// 		alert('submitted');
// 	},
// });
// submitHandler: function(form){
//  		alert('submitted');
// }
$(document).ready(function(){
	$('#signupForm').validate({
		rules: {
			username: {required: true, minlength: 5},
			password: {required: true, minlength: 5, maxlength: 8},
			confirmpassword: {
				required: true,
				minlength: 5,
				maxlength: 8,
				equalTo: '#password',
			},
			name: { required: false, minlength: 1},
			address: { required: false, minlength: 5},
			email: { required: false, email: true},
			// agree: 'required',
		},
		messages: {
			username: {
				required: 'Bạn chưa nhập vào tên đăng nhập',
				minlength: 'Tên đăng nhập phải có ít nhất 5 ký tự',
			},
			password: {
				required: 'Bạn chưa nhập mật khẩu',
				minlength: 'Mật khẩu phải có ít nhất 5 ký tự',
				maxlength: 'Mật khẩu tối đa 8 ký tự',
			},
			confirmpassword: {
				required: 'Bạn chưa nhập mật khẩu',
				minlength: 'Mật khẩu phải có ít nhất 5 ký tự',
				maxlength: 'Mật khẩu tối đa 8 ký tự',
				equalTo:
					'Mật khẩu không trùng khớp với mật khẩu đã nhập',
			},
			email:'Hộp thư điện tử không hợp lệ',
			name: {
				minlength: 'Tên phải có ít nhất 1 ký tự',
			},
			address: {
				minlength: 'Địa chỉ phải có ít nhất 5 ký tự',
			},
			// agree: 'Bạn phải đồng ý với các quy định của chúng tôi',
		},
		errorElement: 'div',
		errorPlacement: function(error, element){
			error.addClass('invalid-feedback');
			// if(element.prop('type') == 'checkbox' ){
			// 	error.insertAfter(element.siblings('label'));
			// } else{
			// 	error.insertAfter(element);
			// }
			error.insertAfter(element);
		},
		highlight: function(element, errorClass, validClass){
			$(element)
				.addClass('is-invalid')
				.removeClass('is-valid');
		},
		unhighlight: function(element, errorClass, validClass){
			$(element)
				.addClass('is-valid')
				.removeClass('is-invalid');
		},
	});
});


function myFunction() {
  alert("Bạn phải đăng nhập trước!");
}