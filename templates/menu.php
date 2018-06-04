<?php

?>
<nav class="navigation navbar navbar-expand-lg navbar-light bg-light">
  <div class="brand">
    <a href="/">Users</a>
  </div>
  <div class="menu container">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>            
      <?php if (!isset($_SESSION['user'])) { ?>
        <li class="nav-item"><a class="nav-link" href="/user">Login</a></li>
      <?php 
      } else { ?>
          <li class="nav-item">
            <a href="#" id="openSubmenuBtn" class="open-submenu-btn"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
            <ul class="submenu none">
              <li>
                <a class="nav-link" href="/user">Profile</a>
              </li>
              <li>
                <a class="nav-link" href="/logout">Logout</a>
              </li>
            </ul>
          </li>
        <?php 
      } ?>
      <li class="nav-item">
        <form action="/search" method="get" class="form-inline my-2 my-lg-0">
          <input type="text" name="search" id="search" class="form-control mr-sm-2" placeholder="Search">
          <input type="submit" name="submitSearch" id="searchBtn" value="Search" class="btn btn-outline-success my-2 my-sm-0">
        </form>
      </li>
    </ul>
  </div>
</nav>