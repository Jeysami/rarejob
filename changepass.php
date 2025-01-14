<!DOCTYPE html>
<html>

<?php session_start(); include('includes/header.php'); include('includes/session.php'); 

$whataccess='changepass';
?>
<br>
<html>
  <body>
    <div class="wrapper">
      <?php include('includes/top.php'); ?>   
      <?php include('includes/sidebar.php'); ?>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="login-panel panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Change Password</h3>
            </div>
            <div class="panel-body">
              <form role="form" id="passwordupdate">
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" placeholder="Old Password" id="oldpassword" name="oldpassword" type="password">
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="New Password" id="newpassword" name="newpassword" type="password" value="">
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Re-enter Password" id="re_enterpassword" name="re_enterpassword" type="password" value="">
                  </div>
                  <!-- Change this to a button or input when using this as a form -->
                  <center><input type='submit' id="changepass" class="btn btn-primary" value='Change'/></center>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/modalpopup.css">
<script src="assets/plugins/jquery-ui.js"></script>
<script src="assets/plugins/jquery.maskedinput.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.mask.js"></script>

<!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>

  </body>
</html>

<script type="text/javascript">
  $( document ).ready(function() {
    $("#changepass").click(function(){
      var passupdate = $("#passwordupdate").serialize();
      var oldpass=$("#oldpassword").val();
      var newpass=$("#newpassword").val();
      var newpass2=$("#re_enterpassword").val();
      var errmsg="";
      if(oldpass==''){ errmsg+='Enter Old Password! \n'; }
      if(newpass==''){ errmsg+='Enter New Password! \n'; }
      if(newpass2==''){ errmsg+='Re-enter New Password! \n'; }
      if(errmsg==''){
        $.ajax({ 
          type: 'POST', 
          url: 'changepassquery.php', 
          data: 'action=changepasswordq&'+decodeURIComponent(passupdate),
          success: function (data) { 
            alert(data);
            location.reload();
          }
        });
      }else{
        alert(errmsg)
      }
    });
  });
</script>