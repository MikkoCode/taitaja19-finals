
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
          Käyttäjätunnus / Salasana on virheellinen.
          </div>
          <?php
        }
    }
  ?>

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
    
        <h3>Navigointi<h3>
          <ul>
            <li>
              <a href="/toiminnot.php">
              <h5><i class="fas fa-wrench"></i> Toiminnot</h5>
              </a>
              <a href="/kuvaajat.php">
              <h5><i class="fas fa-chart-bar"></i> Graafiset kuvaajat</h5>
              </a>
            </li>
          </ul>
        
    
    <?php 

    ?>
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

</body>
</html>
