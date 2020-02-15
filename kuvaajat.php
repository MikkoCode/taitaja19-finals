
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
        <h1>Kuvaajat<h1>
        <h3>Akun lataustiedot</h3>
        <canvas id="lataus" width="1600" height="900"></canvas>
        <h3>Toimintojen kokonaiskäyttöajat [min]</h3>
        <canvas id="kokonaiskaytto" width="1600" height="900"></canvas>
        <h3>Päivittäinen käyttöaika tunneissa</h3>
        <label for="daterange">Valitse ensin aikaväli: </label>
        <input type="text" name="daterange"/>
        <canvas id="kayttoaika" width="1600" height="900"></canvas>

  </div>
</section>

<?php  
} else {
?>


<section id="login">
  
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


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" src="js/charts.js"></script>   

</body>
</html>
