
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/addstud.css">
</head>
<body>
  
<!-- Sidebar -->
<?php 
 include("components/navbar.php");
 ?>

  <div class="content">
    <h1>Add Student</h1>

    <div class="container mt-5">
      <div class="row justify-content-center">

      <div class="col-md-10">
          <div class="add_stud">
             <form action="#">
                <div class="container">
                  <div class="row justify-content-center">
                    <!---input 1: inputname-->
                     <div class="col-md-6 col-6">
                       <div class="inputname">
                        <label for="#">Full Names</label>
                         <input type="text" placeholder="Enter your full names" name="fname" class="form-control" required>
                       </div>
                     </div>
                     <!---input 2: inputclass-->
                     <div class="col-md-6 col-6">
                       <div class="inputclass">
                        <label for="#">Choose your class</label>

                       </div>
                     </div>
                  </div>
                  <!--form row 2-->
                  <div class="row mt-4 justify-content-center">
                    <!---input 1: Subjects-->
                     <div class="col-md-6 col-6">
                       <div class="inputsubject">
                        <label for="#">Choose your subjects</label>
                         
                       </div>
                     </div>
                     <!---input 2: date of birth-->
                     <div class="col-md-6 col-6">
                       <div class="inputdob">
                        <label for="#">Date of birth</label>
                         <input type="date" placeholder="Enter your date of birth" name="dob" class="form-control" required>
                       </div>
                     </div>
                  </div>
                    <!--form row 3-->
                    <div class="row">
                    <!---input 1: password-->
                     <div class="col-md-6">
                       <div class="inputpassword">
                        <label for="#">Create a password</label>
                         <input type="password" placeholder="Create a password" name="password" class="form-control" required>
                       </div>
                       <p class="mt-4"><button class="btn btn-success ">Add</button></p>
                     </div>
                  </div>
                </div>
             </form>
          </div>
      </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
