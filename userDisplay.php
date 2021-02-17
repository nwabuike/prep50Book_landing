<?php
include_once './php/db_connection.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!--Import materialize.css-->
    <link
      type="text/css"
      rel="stylesheet"
      href="css/materialize.min.css"
      media="screen,projection"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="css/style.css"
      media="screen,projection"
    />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prep50 | Books</title>

    <!-- <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery-2.2.2.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </head>
  <body>
    <nav style="margin-bottom: 20px; margin-top: 10px">
      <div class="nav-wrapper">
        <h3 class="center">Prep50 Books</h3>
      </div>
    </nav>
    <?php
if (mysqli_num_rows($result) >
    0) { ?>
    <div class="container" style="margin-bottom: 50px">
      <div class="">
        <table class="table">
          <thead>
            <tr>
              <th data-field="id">S/N</th>
              <th data-field="name">Name</th>
              <th data-field="email">Email</th>
              <th data-field="phone">Phone Number</th>
              <th data-field="address">Address</th>
              <th data-field="waec">Waec Bundle</th>
              <th data-field="jamb">Jamb Bundle</th>
              <th data-field="jamb">Date and Time</th>
            </tr>
          </thead>
          <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

          <tbody>
            <tr>
              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["fullname"]; ?></td>
              <td><?php echo $row["email"]; ?>r</td>
              <td><?php echo $row["phone"]; ?></td>
              <td><?php echo $row["address"]; ?></td>
              <td><?php echo $row["jambSoftSciBundle"]; ?></td>
              <td><?php echo $row["jambSoftArtBundle"]; ?></td>
              <td><?php echo $row["created_at"]; ?></td>
            </tr>
          </tbody>
          <?php
$i++;
}
?>
        </table>
        <?php
            }
            else{
                echo "<h3>No result found</h3>";
            }
            ?>
      </div>
    </div>
    <footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">© 2021 Copyright Prep50Books</div>
      </div>
    </footer>
  </body>
</html>
