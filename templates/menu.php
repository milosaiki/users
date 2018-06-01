<nav class="navigation navbar navbar-expand-lg navbar-light bg-light">
  <div class="brand">
    <a href="/">Users</a>
  </div>
  <div class="menu container">
    <ul class="navbar-nav mr-auto">
      <?php if(!isset($_COOKIE['user'])) {?>
      <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
      <?php } ?>
      <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
      <li class="nav-item">
        <form action="/search" method="get" class="form-inline my-2 my-lg-0">
          <input type="text" name="search" id="search" class="form-control mr-sm-2">
          <input type="submit" name="submitSearch" id="searchBtn" class="btn btn-outline-success my-2 my-sm-0">
        </form>
      </li>
      <?php if (isset($_COOKIE['user'])) { ?>
        <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
      <?php 
    } ?>
    </ul>
  </div>
</nav>