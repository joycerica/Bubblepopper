<?php
       session_start();
       $user = $_SESSION['username'];
       $conn = mysqli_connect('localhost','root','','question');

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
                <th scope="col">Code</th>
                <th scope="col">Game Name</th>
                <th scope="col">Subject</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $result = mysqli_query($conn,"SELECT * from tanong WHERE USER='$user'");
            while($row=mysqli_fetch_assoc($result)){
              ?>
              <tr><a href = "View.php" class="row-link">
                  <td name="code"><a href="View.php?code=<?php echo $row["CODE"];?>"  class="row-link"><?php  echo $row["CODE"];?> </a></td>
                  <td name="gn"><a href="View.php?code=<?php echo $row["CODE"];?>" class="row-link"><?php  echo $row["GAMENAME"];?></a></td>
                  <td name="sub"><a href="View.php?code=<?php echo $row["CODE"];?>"  class="row-link"><?php  echo $row["SUBJ"];?> </a></td>
              
            </a>
              </tr>
              
              <?php 
            }?>
            </tbody>
          </table>
          <div class="container d-flex justify-content-end">
            <a href="Main_menu.php?teacher=<?php echo $user;?>" type="button" class="btn btn-outline-secondary me-2">Back</a>
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