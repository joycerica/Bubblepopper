<?php
       session_start();
       $user = $_SESSION['username'];
       $conn = new mysqli ('localhost','root','');

       if(isset($_POST['submit'])){
        $code = $_POST['ccode'];
        if($conn->select_db($code)=== false){
          echo '<script type="text/javascript">'.'alert("Please enter a valid code.");</script>';
        }
        else{
          $db = new mysqli('localhost','root','','question');
          $result = mysqli_query($db,"SELECT * FROM tanong WHERE CODE='$code' AND USER='$user'");
          if (mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['decode']=$code;
            $subj = $row['SUBJ'];
            $_SESSION['subj'] = $subj;
            $name = $row['GAMENAME'];
            $_SESSION['GN'] = $name;
            echo '<script type="text/javascript">'.'window.location="Edit.php"'.'</script>';
          }else{
            echo"<script>alert('You cannot access this quiz.')</script>";
          }
          }
       }

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../asset/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <!---CREATE CSS-->
    <link rel="stylesheet" href="../../css/teacher/EditCode.css">
  </head>
  <body>
    <div class="Main container border border-dark">
    <form method='post' action = 'EditCode.php'>
        <!-----CONTENT IN CONTAINER-->
        <div class="Box container border border-secondary mt-5 p-0">
            <!---NAVIGATION BAR START-->
              <div class="top container p-3 border-bottom border-secondary d-flex bd-highlight">        
                <div class=" me-auto p-2 bd-highlight">Diwa</div>
                  <div class=" p-2 bd-highlight">Admin
                    <img src="../img/person-fill.svg">
                  </div>
              </div>
            <!----NAVIGATION BAR END-->
            <!----CONTENT START------->
            <h1>Enter a code</h1>
            <div class="code_edit container">
                <input type="text" name ='ccode'></input>
            </div> 
            <div class="container d-flex justify-content-end">
                <a href="Main_menu.php?teacher=<?php echo $user;?>" type="button" class="btn btn-outline-secondary me-2">Back</a>
                <button type="submit" name ='submit' class="btn btn-outline-secondary me-2">Submit</button>
            </div> 
        </div>
    </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../../asset/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/teacher/EditCode.js"></script>
  </body>
</html>