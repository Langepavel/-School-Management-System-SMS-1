<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/css/css/index.css">
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


    <div class="container-fluid mt-5">
        <div class="row">
            <!--part 1-->
            <div class="col-md-6 mt-3 mb-4">
              <!--Address content-->
              <div class="address">
                <h5>Address</h5>
                <p class="mt-3">icon and location</p>
                <p>icon and number</p>
                <p>icon and email</p>
              </div>
            </div>
            <!--part 2-->
            <div class="col-md-6 mt-3 mb-4">
               <!--contact form-->
                <div class="contactForm">
                    <h5>Contact Us</h5>
                    <form action="#">
                      <input type="text" name="name" placeholder="Your name" class="form-control w-100 mt-3">
                      <input type="text" name="email" placeholder="Your email" class="form-control w-100 mt-3">
                      <textarea name="description" name="descrip" placeholder="Not more than 700 characters" class="form-control w-100 mt-3"></textarea>
                      <button class="btn btn-success mt-3">Submit</button>
                    </form>
                </div>
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