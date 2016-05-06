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
<!--  Google Analytics Tracker -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77225730-1', 'auto');
  ga('send', 'pageview');

</script>

<aside class="main-sidebar">
  <?php include_once("analyticstracking.php") ?>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src='<?php echo"$rs[picture]";?>' class="img-circle" alt='<?php echo"$rs[name]";?>'>
        </div>
        <div class="pull-left info">
          <p><?php echo"$rs[name]";?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"></li>
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          
        </li>
        <li class="treeview">
          <a href="fare.php">
            <i class="fa fa-dollar"></i>
            <span>Fare Information</span>
             <i class="fa fa-angle-left pull-right"></i>

          </a>
        
        </li>
        <li class="treeview">
          <a href="aboutus.php">
            <i class="fa fa-user"></i> <span>About Us</span>
            <i class="fa fa-angle-left pull-right"></i>

          </a>
        </li>
        <li class="treeview">
          <a href="team.php">
            <i class="fa fa-users"></i>
            <span>Team</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
         
        </li>
      
        <li class="treeview">
          <a href="contactus.php">
            <i class="fa fa-envelope-o"></i> <span>Contact Us</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>