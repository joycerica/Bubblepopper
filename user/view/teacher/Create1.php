<?php
          include 'questiondb.php';
          $code = uniqid();
          session_start();
          $user = $_SESSION['username'];
        if(isset($_POST['done'])){
            // Create connection
            $conn = new mysqli("localhost", "root","");
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
           $mamama = $_POST['ccode'];
        
        $_SESSION['coode'] = $mamama;
           // Create database
           $sql = "CREATE DATABASE $mamama"; 
           if ($conn->query($sql) === TRUE) {
            echo '<script type="text/javascript">' .
            'console.log("Database created successfully");</script>';
          } else {
            echo '<script type="text/javascript">' .
            'console.log(""Error creating database: "");</script>'. $conn->error;
          }
          // CONNECT DB FOR TABLES
          $mysqli= mysqli_connect ('localhost', 'root' , '', $mamama);  
          // CREATE TABLES
           $sql = "CREATE TABLE quiz (
             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             Question MEDIUMTEXT NOT NULL,
             A MEDIUMTEXT , B MEDIUMTEXT ,
             C MEDIUMTEXT , D MEDIUMTEXT ,
             Answer VARCHAR(50)
             )";
           if ($mysqli->query($sql) === TRUE) {
             echo '<script type="text/javascript">' .
           'console.log("Table quiz created successfully");</script>';
           } else {
             echo '<script type="text/javascript">' .
           'console.log("Error creating table: ");</script>'. $mysqli->error;
           }
           $sql = "CREATE TABLE SCORES (
             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             NAMES MEDIUMTEXT, N1 VARCHAR(6), N2 VARCHAR(6), N3 VARCHAR(6), N4 VARCHAR(6), N5 VARCHAR(6),
             SCORE MEDIUMTEXT 
             )";
           if ($mysqli->query($sql) === TRUE) {
             echo '<script type="text/javascript">' .
           'console.log("Table SCORES created successfully");</script>';
           } else {
             echo '<script type="text/javascript">' .
           'console.log("Error creating table SCORES ");</script>'. $mysqli->error;
           }
        

           $Question=$_POST['question1'];
           $A=$_POST['1A'];
           $B=$_POST['1B'];
           $C=$_POST['1C'];
           $D=$_POST['1D'];
           $ans=$_POST['flexRadioDefault1'];
           
         $result =mysqli_query($mysqli,"INSERT into quiz(Question,	A,	B,	C,	D, Answer)
         VALUES('$Question', '$A','$B','$C','$D', '$ans')");
        
           $Question=$_POST['question2'];
           $A=$_POST['2A'];
           $B=$_POST['2B'];
           $C=$_POST['2C'];
           $D=$_POST['2D'];
           $ans=$_POST['flexRadioDefault2'];
           
         $result =mysqli_query($mysqli,"INSERT into quiz(Question,	A,	B,	C,	D, Answer)
         VALUES('$Question', '$A','$B','$C','$D', '$ans')");
        
         $Question=$_POST['question3'];
           $A=$_POST['3A'];
           $B=$_POST['3B'];
           $C=$_POST['3C'];
           $D=$_POST['3D'];
           $ans=$_POST['flexRadioDefault3'];
           
         $result =mysqli_query($mysqli,"INSERT into quiz(Question,	A,	B,	C,	D, Answer)
         VALUES('$Question', '$A','$B','$C','$D', '$ans')");
         
         $Question=$_POST['question4'];
           $A=$_POST['4A'];
           $B=$_POST['4B'];
           $C=$_POST['4C'];
           $D=$_POST['4D'];
           $ans=$_POST['flexRadioDefault4'];
           
         $result =mysqli_query($mysqli,"INSERT into quiz(Question,	A,	B,	C,	D, Answer)
         VALUES('$Question', '$A','$B','$C','$D', '$ans')");
        
         $Question=$_POST['question5'];
           $A=$_POST['5A'];
           $B=$_POST['5B'];
           $C=$_POST['5C'];
           $D=$_POST['5D'];
           $ans=$_POST['flexRadioDefault5'];
           
         $result =mysqli_query($mysqli,"INSERT into quiz(Question,	A,	B,	C,	D, Answer)
         VALUES('$Question', '$A','$B','$C','$D', '$ans')");
        
        $subject=$_POST['subjects'];
        $_SESSION['SUBJECTname']=$subject;
        $name = $_POST['name'];
        $_SESSION['GAMENAME']=$name;
        include 'questiondb.php';
           $ques= mysqli_connect ('localhost', 'root' , '', 'question');  
           $result =mysqli_query($ques,"INSERT into tanong(CODE ,  USER, SUBJ, GAMENAME)
           VALUES('$mamama','$user','$subject','$name')");

         //$url = "CreateCode.php";
         //header('location' . $url);
         echo '<script type="text/javascript">' . 'window.location = "CreateCode.php"'.'</script>'  ;
        }
        
  

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Create Quiz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../asset/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <!---CREATE CSS-->
    <link rel="stylesheet" href="../../css/teacher/Create.css">
  </head>
  <body>
  
  <form method='post' action='Create1.php'>    
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
              <div class="container mt-3">
                <div class="row">
                  <div class="list col-sm-5 col-md-6">
                  <label>Enter a game name:</lable>
                  <input class="game" type="text" id="name" name='name'></input>
                  </div>
                  <div class="Name col-sm-5 col-md-6">
                    <label for="subjects">Choose a subject:</label>
                    <select name="subjects" id="sub">
                      <option value="None">None</option default>
                      <option value="Math">Math</option>
                      <option value="Science">Science</option>
                      <option value="English">English</option>
                      <option value="Filipino">Filipino</option>
                    </select>
                   </div>
                </div>
              </div>
          <div class="form-floating m-2">
            <textarea class="form-control" name="question1"placeholder="Leave a comment here" id="floatingTextarea12" style="height: 100px"></textarea>
            <label for="floatingTextarea2">1. </label>
          </div>
          <!----RADIO BUTTONS-->
          <div class="container m-2">
            <div class="row">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="A"name="flexRadioDefault1" id="flexRadioDefault11" >
                A.)
                <input class="answer"type="text"id="ans1" name="1A">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="B" name="flexRadioDefault1" id="flexRadioDefault12" >
                B.)
                <input class="answer"type="text"id="ans2" name="1B">
              </input>
              </div>
            </div>
            <div class="row ">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="C" name="flexRadioDefault1" id="flexRadioDefault13">
                C.)
                <input class="answer"type="text"id="ans3" name="1C">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="D" name="flexRadioDefault1" id="flexRadioDefault14"  >
                D.)
                <input class="answer"type="text"id="ans4" name="1D">
              </input>
              </div>
          </div>
          </div>
          <!---RADIOT BUTTON ENDS-->
                    <!----CONTENT START------->
                    <div class="form-floating m-2">
            <textarea class="form-control" name="question2"placeholder="Leave a comment here" id="floatingTextarea22" style="height: 100px"></textarea>
            <label for="floatingTextarea2">2. </label>
          </div>
          <!----RADIO BUTTONS-->
          <div class="container m-2">
            <div class="row">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="A"name="flexRadioDefault2" id="flexRadioDefault21" >
                A.)
                <input class="answer"type="text"id="ans1" name="2A">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="B" name="flexRadioDefault2" id="flexRadioDefault22" >
                B.)
                <input class="answer"type="text"id="ans2" name="2B">
              </input>
              </div>
            </div>
            <div class="row ">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="C" name="flexRadioDefault2" id="flexRadioDefault23">
                C.)
                <input class="answer"type="text"id="ans3" name="2C">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="D" name="flexRadioDefault2" id="flexRadioDefault24" >
                D.)
                <input class="answer"type="text"id="ans4" name="2D">
              </input>
              </div>
          </div>
          </div>
          <!---RADIOT BUTTON ENDS-->

                    <!----CONTENT START------->
                    <div class="form-floating m-2">
            <textarea class="form-control" name="question3"placeholder="Leave a comment here" id="floatingTextarea32" style="height: 100px"></textarea>
            <label for="floatingTextarea2">3. </label>
          </div>
          <!----RADIO BUTTONS-->
          <div class="container m-2">
            <div class="row">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="A"name="flexRadioDefault3" id="flexRadioDefault31" >
                A.)
                <input class="answer"type="text"id="ans1" name="3A">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="B" name="flexRadioDefault3" id="flexRadioDefault32" >
                B.)
                <input class="answer"type="text"id="ans2" name="3B">
              </input>
              </div>
            </div>
            <div class="row ">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="C" name="flexRadioDefault3" id="flexRadioDefault33">
                C.)
                <input class="answer"type="text"id="ans3" name="3C">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="D" name="flexRadioDefault3" id="flexRadioDefault34"  >
                D.)
                <input class="answer"type="text"id="ans4" name="3D">
              </input>
              </div>
            </div>
          </div>
          <!---RADIOT BUTTON ENDS-->

                    <!----CONTENT START------->
                    <div class="form-floating m-2">
            <textarea class="form-control" name="question4"placeholder="Leave a comment here" id="floatingTextarea52" style="height: 100px"></textarea>
            <label for="floatingTextarea2">4. </label>
          </div>
          <!----RADIO BUTTONS-->
          <div class="container m-2">
            <div class="row">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="A"name="flexRadioDefault4" id="flexRadioDefault51" >
                A.)
                <input class="answer"type="text"id="ans1" name="4A">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="B" name="flexRadioDefault4" id="flexRadioDefault52" >
                B.)
                <input class="answer"type="text"id="ans2" name="4B">
              </input>
              </div>
            </div>
            <div class="row ">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="C" name="flexRadioDefault4" id="flexRadioDefault53">
                C.)
                <input class="answer"type="text"id="ans3" name="4C">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="D" name="flexRadioDefault4" id="flexRadioDefault54"  >
                D.)
                <input class="answer"type="text"id="ans4" name="4D">
              </input>
            </div>
            </div>
          </div>
          <!---RADIOT BUTTON ENDS-->

                    <!----CONTENT START------->
                    <div class="form-floating m-2">
            <textarea class="form-control" name="question5"placeholder="Leave a comment here" id="floatingTextarea42" style="height: 100px"></textarea>
            <label for="floatingTextarea2">5. </label>
          </div>
          <!----RADIO BUTTONS-->
          <div class="container m-2">
            <div class="row">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="A"name="flexRadioDefault5" id="flexRadioDefault41" >
                A.)
                <input class="answer"type="text"id="ans1" name="5A">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="B" name="flexRadioDefault5" id="flexRadioDefault42" >
                B.)
                <input class="answer"type="text"id="ans2" name="5B">
              </input>
              </div>
            </div>
            <div class="row ">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="C" name="flexRadioDefault5" id="flexRadioDefault43">
                C.)
                <input class="answer"type="text"id="ans3" name="5C">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="D" name="flexRadioDefault5" id="flexRadioDefault44"  >
                D.)
                <input class="answer"type="text"id="ans4" name="5D">
              </input>
              
            </div><div></div>
          </div>
          <!---RADIOT BUTTON ENDS-->
          <div class="container d-flex justify-content-end">
          <button type="submit" name="done" class="btn btn-outline-secondary me-2">Done</button>
          <label class="hidden" name="ccode"></label>
          </div>
        </div>
        <input type="hidden" name="ccode" value="<?php echo $code; ?>"></input>
       
<?php

   ?> 
      </div>
    </form>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../../asset/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/teacher/Create.js"></script>

  </body>
</html>