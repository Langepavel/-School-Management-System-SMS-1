<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../style/css/css/index.css">
     <link rel="stylesheet" href="../style/css/css/about.css">
</head>
<body>
    <!--TOPBAR 1-->
<?php 
 include("component/Topbar1.php");
?>
<!--TOPBAR 2-->
<?php 
 include("component/Topbar2.php");
?>
    <!--About us-->
    <div class="container-fluid mt-5 mb-4">
       <!--ROW of about us-->
        <div class="row">
            <!--About us-->
            <div class="col-md-6 mb-4">
                <h4>ABOUT US</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt nisi tempora magnam id perferendis, corporis, doloribus asperiores molestiae iste facilis
                 sapiente molestias quidem cumque recusandae dolore provident repellat quod. Aliquam.</p>
            </div>
            <!--About us image-->
            <div class="col-md-6 mb-4">
                <div class="img-div">

                </div>
            </div>
        </div>
        <!--ROW of our mission-->
        <div class="row mt-5 mb-4">
             <!--Our mission image-->
             <div class="col-md-6 mb-4">
                <div class="img-div">

                </div>
            </div>
            <!--Our mission-->
            <div class="col-md-6 mb-4">
              
                <h4>OUR MISSION</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt nisi tempora magnam id perferendis, corporis, doloribus asperiores molestiae iste facilis
                 sapiente molestias quidem cumque recusandae dolore provident repellat quod. Aliquam.</p>
            </div>
        </div>
    </div>
 
    

          <!-- Footer -->
     <?php 
     include("component/Footer.php");
     ?>

          <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>