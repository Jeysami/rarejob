<!-- navbar side -->
<nav class="navbar-default navbar-static-side" role="navigation">
  <!-- sidebar-collapse -->
  <div class="sidebar-collapse">
    <!-- side-menu -->
    <ul class="nav" id="side-menu">
      <li>
        <!-- user image section-->
        <div class="user-section"> 
          <div class="user-text-online">
            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Welcome
          </div>
          <div class="user-info">
            <div><strong><?php echo $sessionFullname;?></strong></div>
          </div>
        </div>
        <!--end user image section-->
      </li>
      <?php
      echo" 
        <li class=''><a href='../home.php'><i class='fa fa-table fa-fw'></i>Home<span class=''></span></a></li>
        <li class=''><a href='blogpost/blogpost.php'><i class='fa fa-camera fa-fw'></i>Post<span class=''></span></a></li>
        <li class=''><a href='#''><i class='fa fa-envelope fa-fw'></i>Messages<span class='fa arrow'></span></a></li>
        <li class=''><a href='#''><i class='fa fa-circle fa-fw'></i>Notification<span class='fa arrow'></span></a></li>";
    echo"</ul>";
    ?>
    <!-- end side-menu -->
  </div>
  <!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->