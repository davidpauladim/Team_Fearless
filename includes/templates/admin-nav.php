    <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Fearless</a>
      <?php if(isset($_SESSION['adminId'])){ ?>
      <ul class="right hide-on-med-and-down">
       
        <li><a href="admin-profile.php?id=<?php echo $admin['id']; ?>"><?php echo $admin['username']; ?></a></li>
        <li><a href="admin-logout.php">Logout</a></li>
        <li><a href="downloads.php">Downloads</a></li>
        

      
      </ul>
        <?php }else{?>
             <ul class="right hide-on-med-and-down">
       
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      
      </ul>

        <?php } ?>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

        