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
              <h1>Messages</h1>
              <table class="content-table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
              $sql = pg_query(sprintf("SELECT * FROM public.messages ORDER BY sno DESC;"));
              while ($row = pg_fetch_assoc($sql)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['name']) . " </td>";
                echo "<td>" . htmlspecialchars($row['email']) . " </td>";
                echo "<td>" . htmlspecialchars($row['message']) . " </td>";
                echo "</tr>";
              }
              pg_close($db); ?>
            </tbody>
          </table>
    </article>
  <footer class="page-footer">
  </footer>
</section>
</body>