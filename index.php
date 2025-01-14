<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/login/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/login/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/login/css/style.css" rel="stylesheet">

    <title>RAREJOB</title>
  </head>
  <body>
    <section class="form-01-main">
      <div class="form-cover">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-sub-main">
              <div class="_main_head_as">
                <a href="#">
                  <img src="assets/login/images/vector.png">
                </a>
              </div>
              <form action='loginaccess.php' method='post'>
                <div class="form-group">
                    <input id="uid" name="uid" class="form-control _ge_de_ol" type="text" placeholder="ID" required="" aria-required="true">
                </div>

                <div class="form-group">
                    <input id="uemail" name="uemail" class="form-control _ge_de_ol" type="text" placeholder="Email" required="" aria-required="true">
                </div>

                <div class="form-group">                                              
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="required">
                  <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                </div>

                <div class="form-group">                                              
                  <input id="uname" type="text" class="form-control" name="uname" placeholder="Name" required="required"></div>

                <div class="form-group">                                              
                  <input id="ubday" type="date" class="form-control" name="ubday" placeholder="Birthday" required="required">
                </div>

                <div class="form-group">
                  <div class="check_box_main">
                    <!-- <a href="#" class="pas-text">Forgot Password</a> -->
                  </div>
                </div>

                <center><input type='submit' name='submit' class="btn btn_uy" value='LogIn'/></center>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </body>
</html>