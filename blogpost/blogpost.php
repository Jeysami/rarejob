<?php

session_start(); 
include('includes/session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAREJOB</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
         <?php include('includes/top.php'); ?>  
        <!-- end navbar top -->

        <!-- navbar side -->
                <?php include('includes/sidebar.php'); ?>
        <!-- end navbar side -->


        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Feed</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <b>&nbsp;Post a Blog! </b>
                    </div>
                </div>
                <!--end  Welcome -->
                <div class="col-lg-12">
                    <form action="blogpostQry.php" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>Title: </td>
                                <td><textarea cols='50' rows='10' id='titleblog' name='titleblog' ></textarea></td>
                            </tr>
                            <tr>
                                <td>Description: </td>
                                <td><textarea cols='50' rows='10' id='descblog' name='descblog' ></textarea></td>
                            </tr>
                            <tr><input type="file" name="fileToUpload" id="fileToUpload"></tr>
                        </table>    
                        
                        
                        <input type="submit" value="Post" name="submit">
                    </form>
                </div>
            </div>


               

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>


?>