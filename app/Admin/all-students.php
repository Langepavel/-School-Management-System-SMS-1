
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Students</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/allstud.css">
</head>
<body>
  
<!-- Sidebar -->
<?php 
 include("components/navbar.php");
 ?>

  <div class="content">
    <h1>All Students</h1>

    <div class="container">
      <div class="row justify-content-center">
         <div class="allstudtable">
          <div class="main">
            <div class="forclass">
              <button>Class</button>
            </div>
          </div>
          <div class="tabledetail mt-4">
          <table>
             <thead>
              <th>Name</th>
              <th>Age</th>
              <th>Fee</th>
              <th>Status</th>
             </thead>

             <tbody>
              
             </tbody>
           </table>
          </div>         
         </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
