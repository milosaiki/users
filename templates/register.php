<?php include_once 'header.php'; ?>

  <div class="registration-page container">
    <div class="title">
      <h1>Registration</h1>
    </div>
    <div class="registration-form">
      <form action="/save" method="post" id="registrationForm">
        <div class="form-group">
          <label for="name">Name: </label>
          <input type="name" name="name" id="name" class=" form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="email" name="email" id="email" class=" form-control" required>
        </div>
        <div class="form-group">
          <label for="password">Password: </label>
          <input type="password" name="password" id="password" class=" form-control" required>
        </div>
        <div class="form-group">
          <label for="repeat_password">Repeat password: </label>
          <input type="password" name="repeat_password" id="repeat_password" class=" form-control" required>
        </div>
        <input class="btn btn-primary" type="submit" name="registerBtn" id ="registerBtn" value="Register">
      </form>
    </div>
  </div>


<?php include_once 'footer.php'; ?>