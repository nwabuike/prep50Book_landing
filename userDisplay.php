<?php
include_once './php/db_connection.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prep50 | Books</title>

  </head>
  <body>
  <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo red-text text-lighten-2">Prep50</a>
        </div>
    </nav>
    <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-fixed-item center">
            <p class="white-text">Smash Your Jamb With Prep50 Past Questions</p>
        </div>
        <div class="carousel-item red white-text" href="#one!">
            <h2>Prep50 Books</h2>
            <p class="white-text">This is your Where Your success is Assured</p>
        </div>
        <div class="carousel-item amber white-text" href="#two!">
            <h2>Prep50 Books</h2>
            <p class="white-text">This is your Where Your success is Assured</p>
        </div>
        <div class="carousel-item green white-text" href="#three!">
            <h2>Prep50 Books</h2>
            <p class="white-text">This is your Where Your success is Assured</p>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
            <h2>Prep50 Books</h2>
            <p class="white-text">This is your Where Your success is Assured</p>
        </div>
    </div>
    <br>
    <?php
if (mysqli_num_rows($result) >
    0) { ?>
    <div class="container" style="margin-bottom: 50px">
      <div class="section">
        <table class="striped">
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
         $(document).ready(function(){
            $('.carousel.carousel-slider').carousel({
                fullWidth: true
            });
    });
    </script>
  </body>
</html>
