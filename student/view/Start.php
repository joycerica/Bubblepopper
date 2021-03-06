<?php
    session_start();
    include "conn.php";
    $game = $_SESSION['game'];

    if(isset($_POST['done'])){
      $_SESSION['user']= $_POST['user'];
      echo '<script type="text/javascript">' .'window.location = "Carousel.html"' . '</script>';

    } 

?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $game;?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../asset/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <!---CREATE CSS-->
    <link rel="stylesheet" href="../css/Start.css">
    <link rel="stylesheet" href="../includes/common.css">
  </head>
  <body>
    <div class="Main container">
      <!-----CONTENT IN CONTAINER-->
    <form method='post' action = ''>
        <!-----CONTENT IN CONTAINER-->
        <div class="Box container">
            <!----CONTENT START------->
          <div class="blocks container mt-5 p-0">
            <div class="username form-floating ">
                <input type="text" name="user"class="form-control" id="floatingInput" placeholder="Username">
                <label for="floatingInput">Username</label>
              </div>
            <div class="container d-flex justify-content-center">
              <button  type="submit" class="button btn-bubble1"name="done">Enter</button >
            </div>
          </div> 
        </div>
    </div>
  </div>
  </div>
    <canvas></canvas>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../asset/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/Start.js"></script>
    <script src="../includes/background.js"></script>
  </body>
</html>