$(document).ready(function() {
  $('#registrationForm').validate({
    rules: {
      name: { 
        required: true 
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true
      },
      repeat_password:{
        equalTo: '#password'
      }
    }
  });

  /* $('#registrationForm').on('submit', function (e) {
    
  }); */

});