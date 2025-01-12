
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Attendance</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/studattend.css">
</head>
<body>
  
<!--Sidebar-->
<?php 
 include("components/navbar.php");
 ?>

  <div class="content">
    <h1>Student Attendance</h1>
    <p>Content for Student Attendance will go here.</p>
    <div class="container mt-5">
      <div class="row">
      <div class="main">
        <!--dropdowns-->
         <div class="fordate mt-2">
              <button>Date</button>
            </div>
            <div class="forclass mt-2">
              <button>Class</button>
            </div>
          </div>
          <!--table details-->
          <div class="tablediv">
            <table>
              <thead>
                <th>Name</th>
                <th>Status</th>
              </thead>

              <tbody>

              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
