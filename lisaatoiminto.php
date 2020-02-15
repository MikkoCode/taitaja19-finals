
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
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { 

  if (isset($_POST['name']) && isset($_POST['desc'])) {
        $name = stripslashes($_POST['name']);
        $desc = stripslashes($_POST['desc']);
        mysqli_query($conn, "INSERT INTO mikko_toiminnot(name, deletable, descr) VALUES ('$name', 1, '$desc')");
        header("Location: /toiminnot.php");
    }

?>
<section class="section-white">
  <div class="container">
        <div class="row">
          <div class="col-sm">
            <a href="/toiminnot.php">
              <h4>Toiminnot</h4>
            </a>
          </div>
        </div>
        <h4>Lisää toiminto</h4>
        <div class="container">
            <form action="lisaatoiminto.php" method="post">
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="md-form form-group">
                          <input type="text" class="form-control" id="name" placeholder="Nimi" name="name">
                          <label for="name">Nimi</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="md-form form-group">
                          <input type="text" class="form-control" id="desc" placeholder="Kuvaus" name="desc">
                          <label for="desc">Kuvaus</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <button type="submit" name="add" class="btn btn-primary btn-md" style="margin-bottom: 25px;">Lisää</button>
                      </div>
                    </div>
                  <hr>
            </form>

        </div>
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
