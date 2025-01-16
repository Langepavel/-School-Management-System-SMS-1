<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/home.css">
</head>
<body>
  <!-- Sidebar -->
  <?php 
 include("components/navbar.php");
 ?>

  <!-- Main Content -->
  <div class="content">
    <div class="container">
      <!--ROW 1-->
    <div class="row mb-4">
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Total Income</h5>
          <p class="fs-3 fw-bold">$68,0590</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Total Exams</h5>
          <p class="fs-3 fw-bold">250,736</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 text-center">
          <h5>Students</h5>
          <div class="pie-chart"></div>
          <p class="mt-2">Total: 15,000</p>
        </div>
      </div>
    </div>
    <!--ROW 2-->
    <div class="row">
      <div class="col-md-8">
        <div class="card p-3">
          <h5>Star Students</h5>
          <table class="table">
            <thead>
              <tr>
                <th><input type="checkbox"></th>
                <th>Name</th>
                <th>ID</th>
                <th>Marks</th>
                <th>Year</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox"></td>
                <td>Evelyn Harper</td>
                <td>PRE43178</td>
                <td>98%</td>
                <td>2014</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>Diana Plenty</td>
                <td>PRE43174</td>
                <td>91%</td>
                <td>2014</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>John Millar</td>
                <td>PRE43187</td>
                <td>93%</td>
                <td>2014</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Notifications</h5>
          <div class="notifications">
            <p>Emergency School Closure - 4:00 PM</p>
            <p>School Picture Day Tomorrow! - 5:00 PM</p>
            <p>Opportunities for School Events - 3:00 PM</p>
            <p>School Calendar Updates - 4:25 PM</p>
            <p>New Extracurricular Clubs - 5:30 PM</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    
   
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>