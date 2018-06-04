<?php include_once 'header.php'; ?>
  <div class="main-page-content container text-center content">
    <h1 class="main-title">Welcome</h1>
    <?php if (isset($this->user)) { ?>
      <h3><a href="/user"><?php echo $this->user['name']; ?></a></h3>
    <?php } else { ?>
      <p>Please register to our site</p>
    <?php } ?>
  </div>
  

<?php include_once 'footer.php'; ?>