<?php
  if (isset($_POST['keyword'])) {
    $datas = $_POST['keyword'];
    $prefix = $_POST['prefix'];
    $surffix = $_POST['surffix'];
    $explode = explode("\n", $datas);
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image" href="img/logo.png">

    <title>Tool 2 | Positive Republik</title>

    <style>
      .active {
        border-bottom: 2px solid white;
      }
      .nav-link:hover {
        transition: 0.2s;
        border-bottom: 2px solid white; 
      }
      .textarea {
        height: 300px;
      }
      .card {
        height: 420px;
      }
      .hasil hr {
        border: 1px solid #343a40;
      }
      footer {
        height: 70px;
      }
    </style>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" width="40" height="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="https://www.positiverepublikgroup.com/">Home</a>
            <a class="nav-item nav-link" href="index.php">Tool 1</a>
            <a class="nav-item nav-link active" href="tool2.php">Tool 2</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Of Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid mt-5">
      <div class="container">
        <h1 class="display-4">Bulk Add Prefix or Suffix</h1>
        <hr class="my-4">
        <p class="lead">Bulk add suffix / prefix to keywords is a FREE online tool that will help you add any given prefix or suffix to any batch of keywords that you are working with. Just copy pate the keyword list in the text area , add a suffix or prefix ( or both ) and the tool will generate a new list of keywords with the suffix and/or prefix that you have provided.</p>
      </div>
    </div>
    <!-- End Of Jumbotron -->
    <br><br>
    <!-- Main ode -->
    <section class="main" id="main">
      <div class="container">
        <div class="row">
          <!-- SideBar -->
          <div class="col-sm-4">
            <div class="card bg-dark">
              <div class="container">
                <form method="post">
                <!-- Prefix -->
                <p class="text-white mt-3">Masukan keyword disini</p>
                <div class="input-group mb-3">
                <?php if (!isset($_POST['keyword'])) : ?>
                  <textarea class="form-control" id="keyword" name="keyword" placeholder="Input Here.."></textarea>
                <?php endif; ?>
                <?php if (isset($_POST['keyword'])) : ?>
                 <textarea class="form-control" id="keyword" name="keyword" placeholder="Input Here.."><?= $_POST['keyword']; ?></textarea>
                <?php endif ?>
                </div>
                <!-- Prefix -->
                <p class="text-white mt-3">Masukan prefix disini</p>
                <div class="input-group mb-3">
                  <?php if (!isset($_POST['prefix'])) : ?>
                  <input type="text" class="form-control" placeholder="Prefix" name="prefix">
                  <?php endif; ?>
                  <?php if (isset($_POST['prefix'])) : ?>
                  <input type="text" class="form-control" placeholder="Prefix" name="prefix" value=" <?= $_POST['prefix']; ?>">
                  <?php endif;?>
                </div>
                <!-- Surffix -->
                <p class="text-white mt-3">Masukan surffix disini</p>
                <div class="input-group mb-3">
                  <?php if (!isset($_POST['prefix'])) : ?>
                  <input type="text" class="form-control" placeholder="Surffix" name="surffix">
                  <?php endif; ?>
                  <?php if (isset($_POST['prefix'])) : ?>
                  <input type="text" class="form-control" placeholder="Surffix" name="surffix" value="<?= $_POST['surffix']; ?>">
                  <?php endif; ?>
                </div>
                <!-- Button -->
                <hr class="bg-white">
                <button type="submit" name="submit" class="btn btn-primary mb-3"><img class="mr-2" src="img/icon/transfer.png" width="20" height="20">Convert</button>
                <button type="submit" class="btn btn-primary mb-3" onclick="document.location.reload(true)"><img class="mr-2" src="img/icon/refresh.png" width="15" height="15">Refresh</button>
                </form>
              </div>
            </div>
          </div>
          <!-- End Of SideBar -->
          <!-- Value -->
          <div class="col-sm-8">
            <div class="alert alert-dark" role="alert">
              <?php if (isset($_POST['keyword'])) : ?>
                <?php 
                    foreach ($explode as $key) {
                      $result=$key;
                      echo $prefix.$result.$surffix."</br>";
                    }
                ?>
              <?php endif; ?>
            </div>
          </div>
          <!-- End Of Value -->
        </div>
      </div>
    </section>
    <!-- End Of Main Code -->
    <br><br><br><br>
    <!-- Footer -->
    <footer class="bg-dark">
      <div class="container">
        <br>
        <p class="text-white text-center">Positive Republik Group</p>
      </div>
    </footer>
    <!-- End Of Footer -->
    <!-- Optional JavaScript -->
    <script>
      function reloadpage()
      {
        location.reload();
      }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>