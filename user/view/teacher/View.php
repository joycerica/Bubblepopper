<?php
       session_start();
       $user = $_SESSION['username'];
       $code = $_GET['code'];
       $conn = mysqli_connect('localhost','root','',$code);

?>
<!doctype html>
<html lang="en">
<form method='post'>
  <head>
    <title>Student's Score</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../asset/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <!--Main menu CSS-->
    <link rel="stylesheet" href="../../css/teacher/View.css">
  </head>
  <body>
     <!----MAIN CONTAINER-->
    <div class="Main container border border-dark">
      <!-----CONTENT IN CONTAINER-->
        <div class="Box container border border-secondary mt-5 p-0">
          <!---NAVIGATION BAR START-->
            <div class="top container p-3 border-bottom border-secondary d-flex bd-highlight">        
              <div class=" me-auto p-2 bd-highlight">Diwa</div>
                <div class=" p-2 bd-highlight"><?php echo $user?>
                  <img src="../img/person-fill.svg">
                </div>
               
                      
            </div>
          <!----NAVIGATION BAR END-->
          <!----CONTENT START------->
          <h1>Leaderboards</h1>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Score</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $result = mysqli_query($conn,"SELECT * from scores ORDER BY 'id'");
            while($row=mysqli_fetch_assoc($result)){
              ?>
              <tr>
                  <td name="ID"  class="row-link"><?php  echo $row["id"];?> </a></td>
                  <td name="name" class="row-link"><?php  echo $row["NAMES"];?></a></td>
                  <td name="score" class="row-link"><?php  echo $row["SCORE"];?> </a></td>
            </a>
              </tr>
              
              <?php 
            }?>
            </tbody>
          </table>
          <div class="container d-flex justify-content-end">
            <a href="viewscore.php" type="button" class="btn btn-outline-secondary me-2">Back</a>
        </div> 
        </div>
      </div>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../../asset/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/teacher/View.js"></script>
  </body>
</html>