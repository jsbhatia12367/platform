<!DOCTYPE html>
<html lang="en-CA" class="no-js">
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='../css/studentStyle.css' rel='stylesheet' type="text/css"/>
<link href='../css/admin_table.css' rel='stylesheet' type="text/css"/>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<svg style="display:none;">
</svg>
</head>

<body>
<header class="page-header">
  <?php include 'LeftMenu.php';?>
</header>
<section class="page-content">
  <section class ="grid">
    <article style="height: 800px">
      <div class="main__container">
        <div class="main__title">
            <div class="main__greeting">
              <h1>Student Information</h1>
            </div>
             <a href="AddNewStudent.php" target="_blank" class="btn btn-danger btn-xs"> Add New Student</a>
            </div>
        <table class="content-table">
            <thead>
              <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             
          
              <tr>
                <td>id</td>
                <td>name</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
        
            </tbody>
          </table>
    </article>
    </SECTION>
  <footer class="page-footer">
  </footer>
</section>
</body>