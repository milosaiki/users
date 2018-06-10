<?php include_once 'header.php'; ?>
  <div class="main-page-content container text-center content">
    <h1 class="main-title">Welcome</h1>
    <?php if (isset($this->user)) { ?>
      <h3><a href="/user"><?php echo $this->user['name']; ?></a></h3>
    <?php } else { ?>
      <p>Please register to our site</p>
    <?php } ?>
  </div>

  <div id="loginModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="error-holder none">
      <p class="error">Wrong email or password</p>
    </div>
    <form action="/log-in" id="loginForm" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="required form-control">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="required form-control">
      </div>
      <input type="submit" value="Login" class="btn btn-primary" id="loginSubmitBtn">
    </form>
  </div>

</div>
  

<?php include_once 'footer.php'; ?>