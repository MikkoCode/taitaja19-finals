
<?php
require 'header.php';
?>


<section id="page-breadcrumb">
    <div class="vertical-center sun">
       <div class="container">
        <div class="row">
            <div class="action">
                <div class="col-sm-9">
                  <a href="/admin.php">
                    <h1 class="title">Ylläpito</h1>
                  </a>
                </div>
                <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
                <div class="col-sm-3">
                  <a href="/logout.php">
                    <h4>Kirjaudu ulos (<?php echo $_SESSION['username']; ?>) </h4>
                  </a>
                </div>
              <?php }?>
            </div>
        </div>
    </div>
</div>
</section>
<hr>
<?php
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>

<section class="section-white">
  <div class="container">

      <?php
        if (isset($_GET['success'])) {
          echo '<div class="alert alert-success text-center" role="alert">Tiedot tallennettu tietokantaan onnistuneesti</div>';
        }
      ?>

        <div class="row">
          <div class="col-sm">
            <a href="/lisaatoiminto.php">
              <h4>Lisää toiminto</h4>
            </a>
          </div>
        </div>
        <h4>Toimintolista</h4>
        <?php
          $sql="SELECT * FROM mikko_toiminnot ORDER BY id";
          $results = $conn->query($sql);
          if ($results===false) {
              // Query failed
              echo "Failed to read the database table 'mikko_toiminnot'<br />";
          }

          $output = "
        <table class=\"table table-bordered table-hover table-striped\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nimi</th>
                    <th>Kuvaus</th>
                    <th>Poista</th>
                </tr>
            </thead>
        <tbody>
";
while($row = $results->fetch_assoc()) {
    $output .= ' <tr>';
    $output .= '   <td>'.$row['id'].'</td>';
    $output .= '   <td>'.$row['name'].'</td>';
    $output .= '   <td>'.$row['descr'].'</td>';
    if ($row['deletable'] == 1){
      $output .= '   <td><a href="/delete.php?id='.$row['id'].'">Poista</a> </td>';
    } else {
      $output .= '<td style="color:gray;">Ei voida poistaa</td>';
    }
    $output .= ' </tr>';
}
$output .="      </tbody>
    </table>    
</body>
</html>
";

$results->free();

echo $output; ?>


    <hr>
    <h2>Robotin ohjaus</h2>
    <div id="shared-lists" class="row">
      <h4 class="col-12">Valitse toiminnot</h4>
      <div id="example2-left" class="list-group col">
        <?php

        $sql="SELECT * FROM mikko_toiminnot ORDER BY id";
          $results = $conn->query($sql);
          if ($results===false) {
              // Query failed
              echo "Failed to read the database table 'mikko_toiminnot'<br />";
          }
          $output = "";
          while($row = $results->fetch_assoc()) {
          $output .= '<div class="list-group-item">'.$row['descr'].'</div>';
      }

      $results->free();

      echo $output; 

        ?>
      </div>

      <h4 class="col-12">Valitut toiminnot</h4>
      <button type="button" class="btn btn-secondary" style="margin-bottom: 10px;" id="tyhjenna">Tyhjennä</button>
      <div id="example2-right" class="list-group col" style="border: 1px solid black;">
      </div>
      <p><i class="fas fa-long-arrow-alt-up"></i> Siirrä ylhäältä toimintoja tähän ikkunaan drag&drop menetelmällä</p>
      <form action="laheta.php" method="post" id="siirraform">
            <div class="form-row">
              <div class="col-md-6">
                <label for="kayttoaika">Käyttöaika (min)</label>
                <input type="number" style="margin-bottom: 10px;" class="form-control" id="kayttoaika" placeholder="Käyttöaika" name="kayttoaika" value="10">
                <button type="submit" name="siirra" class="btn btn-primary btn-md" id="siirra" style="margin-bottom: 25px;">Siirrä toiminnot</button>
              </div>
            </div>
          <hr>
    </form>

  </div>
</section>


<?php  
} else {
?>


<section id="login">
  <?php
    $msg = '';
    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = stripslashes($_POST['username']);
        $password = stripslashes($_POST['password']);
        $query = mysqli_query($conn, "SELECT * FROM mikko_users WHERE password='$password' AND username='$username'");
        $rows = mysqli_num_rows($query);
        if($rows == 1){
          $_SESSION['username'] = $username;
        } else {
          ?>
          <div class="alert alert-danger text-center" role="alert">
          This is a danger alert—check it out!
          </div>
          <?php
        }
    }
  ?>

<div class="container">

    <form action="admin.php" method="post">
            <div class="form-row">
              <h4><b>Kirjaudu sisään jatkaaksesi.</b></h4>
              <div class="col-md-6">

                <div class="md-form form-group">
                  <input type="username" class="form-control" id="username" placeholder="Käyttäjätunnus" name="username">
                  <label for="username">Käyttäjätunnus</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form form-group">
                  <input type="password" class="form-control" id="password" placeholder="Salasana" name="password">
                  <label for="password">Salasana</label>
                </div>
              </div>
              <div class="col-md-6">
                <button type="submit" name="login" class="btn btn-primary btn-md" style="margin-bottom: 25px;">Kirjaudu sisään</button>
              </div>
            </div>
          <hr>
    </form>

</div>
    
</section>

<?php }?>


  <?php
  require 'footer.php';
  ?>

</body>
</html>
