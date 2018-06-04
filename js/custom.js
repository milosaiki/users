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

});