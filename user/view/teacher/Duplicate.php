<?php
      
    session_start();
    $user= $_SESSION['username'];
    $decode = $_SESSION['decode'];
    $code = $_SESSION['cccode'];
    $conn = new mysqli ('localhost', 'root', '') or die($conn->error);
    $tables = $conn->query( "SHOW TABLES FROM $decode" ) or die( $conn->error );

    while( $table = $tables->fetch_array() ): $TABLE = $table[0];


        // Copy table and contents in destination database

        $conn->query( "CREATE TABLE $code.$TABLE LIKE $decode.$TABLE" ) or die( $conn->error );
        $conn->query( "INSERT INTO $code.$TABLE SELECT * FROM $decode.$TABLE" ) or die( $conn->error );


    endwhile;
    include 'questiondb.php';
    $ques= mysqli_connect ('localhost', 'root' , '', 'question');  
    $result = mysqli_query($ques,"SELECT * FROM tanong WHERE CODE='$decode'");
    $row = mysqli_fetch_assoc($result);
    $name = $row['GAMENAME'];
    $subj = $row['SUBJ'];
    $result =mysqli_query($ques,"INSERT into tanong(CODE ,  USER, SUBJ, GAMENAME)
    VALUES('$code','$user','$subj','$name')");
      
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Duplicate Game</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../asset/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <!---CREATE CSS-->
    <link rel="stylesheet" href="../../css/teacher/Duplicate.css">
  </head> 
  <body>
  <form method='post' action='Duplicate.php'>
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
            <h1>Copy this code</h1>
            <div class="code container">
                <label><?php echo $code; ?></label>
            </div> 
            <div class="container d-flex justify-content-end">
                <a href="Main_menu.php?teacher=<?php echo $user;?>" type ="button" class="btn btn-outline-secondary me-3 mt-5">Done</a>
            </div> 
        </div>
    </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../../asset/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/teacher/Duplicate.js"></script>
  </body>
</html>