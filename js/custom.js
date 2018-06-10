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

  var viewData = $('#viewData');
  var edit = $('#edit');
  var userDataTable = $('.user-data-table');
  var editForm = $('#editForm');

  editForm.validate();
  
  edit.on('click', function(e) {
    e.preventDefault();
    userDataTable.hide();
    editForm.show();
  });

  viewData.on('click', function (e) {
    e.preventDefault();
    userDataTable.show();
    editForm.hide();
  });

  var openSubmenuBtn = $('#openSubmenuBtn');
  openSubmenuBtn.on('click', function(e) {
    e.preventDefault();
    $('.submenu').toggleClass('none');
  });

  var loginBtn = $('#loginBtn');
  var close = $('.close');
  var loginModal = $('#loginModal');

  loginBtn.on('click', function(e) {
    e.preventDefault();
    loginModal.slideDown('slow');
  });

  close.on('click', function() {
    loginModal.slideUp('slow');
  });

  var loginSubmitBtn = $('#loginSubmitBtn');
  loginSubmitBtn.on('click', function(e) {
    e.preventDefault();
    var email = $('#email').val();
    var password = $('#password').val();
    var data = {
      'email' : email,
      'password': password
    };
    var url = '/log-in';
    $.post(url, data, function(res) {
      var result = JSON.parse(res);
      if (result.success == 1) {
        window.location.href = '/user';
      } else {
        $('.error-holder').show();
      }
    });
  });

});