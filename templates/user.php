<?php include_once 'header.php'; ?>

  <div class="container text-center">
    <?php if(isset($this->user)) { ?>
      <h1>Welcome <?php echo $this->user['name']; ?></h1>
    <?php } else { ?>
      <?php if(isset($this->error)) { ?>
      <div class="alert alert-danger">
        <h3 class="danger"><?php echo $this->error; ?></h3>
      </div>
      <?php } ?>
      <div class="login-form col-lg-6 col-md-6 col-sm-12 col-xs-12 offset-lg-3 offset-md-3">
        <form action="/log-in" id="loginForm" method="post">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="required form-control">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="required form-control">
          </div>
          <input type="submit" value="Login" class="btn btn-primary">
        </form>
      </div>
    <?php } ?>
  </div>

<?php include_once 'footer.php'; ?>