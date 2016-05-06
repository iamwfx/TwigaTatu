<?php
ob_start();
session_start();
include('database/connection.php');
$name=$_SESSION['names'];
$fetch =  <<<EOF
SELECT * FROM users WHERE name='$name';
EOF;
$query = pg_query($db, $fetch);
$rs = pg_fetch_array($query);
?>
  <header class="main-header">
    <?php include_once("analyticstracking.php") ?>
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TWIGA</b>TATU</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src='<?php echo"$rs[picture]";?>' class="user-image" alt'<?php echo"$rs[name]";?>'>
              <?php echo"$rs[name]&nbsp$rs[xname]";?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src='<?php echo"$rs[picture]";?>' class="img-circle" alt='<?php echo"$rs[name]";?>'>

                <p>
              <?php echo"$rs[name]";?>
                  <small>Member since <?php echo"$rs[created]";?></small>
                </p>
              </li>
                            <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="login/account.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="login/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  <!--  Google Analytics Tracker -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77225730-1', 'auto');
  ga('send', 'pageview');

</script>
  </header>
  