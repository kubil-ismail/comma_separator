<?php
  if (isset($_POST['input'])) {
    $datas = $_POST['input'];
    $pemisah = $_POST['pemisah'];
    
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

    <title>Tool 1 | Positive Republik</title>

    <style>
      .active {
        border-bottom: 2px solid white;
      }
      .nav-link:hover {
        transition: 0.2s;
        border-bottom: 2px solid white; 
      }
      .textarea {
        height: 200px;
      }
      .card {
        height: 200px;
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
            <a class="nav-item nav-link active" href="index.php">Tool 1</a>
            <a class="nav-item nav-link" href="tool2.php">Tool 2</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Of Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid mt-5">
      <div class="container">
        <h1 class="display-4">Comma Separator Tool</h1>
        <hr class="my-4">
        <p class="lead">An easy delimiter inserting tool can be very useful when it comes to automatically adding commas, semicolons, quotation marks or other characters to separate each field of data.</p>
      </div>
    </div>
    <!-- End Of Jumbotron -->
<br><br>
    <!-- Main ode -->
    <section class="main" id="main">
      <form method="post">
      <div class="container">
        <div class="row">
          <!-- Value -->
          <div class="col-sm-8">
            <div class="input-group textarea">
              <textarea class="form-control" id="input" name="input" placeholder="Input Here.."></textarea>
            </div>
          </div>
          <!-- End Of Value -->
          <!-- SideBar -->
          <div class="col-sm-4">
            <div class="card bg-dark">
              <div class="container">
                <p class="text-white mt-3">Masukan pemisah yang kamu inginkan</p>
                <div class="input-group mb-3 mt-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="pemisah" name="pemisah">Pemisah</label>
                  </div>
                  <select class="custom-select" id="pemisah" name="pemisah">
                    <option value=",">,</option>
                    <option value=".">.</option>
                    <option value="|">|</option>
                  </select>
                </div>
                <!-- Button -->
                <hr class="bg-white">
                <button type="submit" name="submit" class="btn btn-primary mb-3"><img class="mr-2" src="img/icon/transfer.png" width="20" height="20">Convert</button>
                <button type="submit" class="btn btn-primary mb-3" onclick="document.location.reload(true)"><img class="mr-2" src="img/icon/refresh.png" width="15" height="15">Refresh</button>
              </div>
            </div>
          </div>
          <!-- End Of SideBar -->
        </div>
      </div>
      </form>
    </section>
    <!-- End Of Main Code -->
    <br>
    <!-- Hasil -->
    <section class="hasil" id="hasil">
      <div class="container">
        <hr>
        <?php if (isset($_POST['input'])) : ?>
        <div class="alert alert-dark" role="alert">
          <?php 
              foreach ($explode as $key) {
                $result=trim($key);
                echo $result.$pemisah." ";
              }
          ?>
        </div>
       <?php endif; ?>
      </div>
    </section>
    <!-- End Of Hasil -->
    <br><br>
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