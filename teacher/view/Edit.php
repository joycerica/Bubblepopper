<?php
          session_start();
          $code = $_GET['code'];
          $user = $_SESSION['username'];
          $conn = mysqli_connect('localhost','root','',$code);
          $db= mysqli_connect('localhost','root','','question');
           
           $result1 = mysqli_query($conn,"SELECT * FROM quiz WHERE id='1'");
           $row1 = mysqli_fetch_assoc($result1);
           $result2 = mysqli_query($conn,"SELECT * FROM quiz WHERE id='2'");
           $row2 = mysqli_fetch_assoc($result2);
           $result3 = mysqli_query($conn,"SELECT * FROM quiz WHERE id='3'");
           $row3 = mysqli_fetch_assoc($result3);
           $result4 = mysqli_query($conn,"SELECT * FROM quiz WHERE id='4'");
           $row4 = mysqli_fetch_assoc($result4);
           $result5 = mysqli_query($conn,"SELECT * FROM quiz WHERE id='5'");
           $row5 = mysqli_fetch_assoc($result5);
           $result6 = mysqli_query($db,"SELECT * FROM tanong WHERE CODE='$code'");
           $row6 = mysqli_fetch_assoc($result6);
?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $row6['GAMENAME']; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../asset/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <!---CREATE CSS-->
    <link rel="stylesheet" href="../css/Edit.css?v=<?php echo time(); ?>">
  </head>
  <body>
  
  <form method='post'>    
     <!----MAIN CONTAINER-->
    <div class="Main container">
      <!-----CONTENT IN CONTAINER-->
        <div class="Box container mt-5 p-0">
          <!---NAVIGATION BAR START-->
          <?php 

          include '../includes/navbar.php'
         
          ;?>
           <!----NAVIGATION BAR END-->
          <!----CONTENT START------->
          <div class="blocks container pt-4">
          <div class="container">
                <div class="row">
                  <div class="list col-sm-5 col-md-6">
                  <label>Enter a game name:</lable>
                  <input class="game" type="text" name="name" id="name" value="<?php echo $row6['GAMENAME'];?>">
                    </input>
                  </div>
                  <div class="Name col-sm-5 col-md-6">
          <label for="subjects">Choose a subject:</label>
          <select name="subjects" id="subjects">
            <option value="None" <?php if($row6['SUBJ'] == "None"){echo "selected";}?>>None</option>
            <option value="Math"<?php if($row6['SUBJ'] == "Math"){echo "selected";}?>>Math</option>
            <option value="Science"<?php if($row6['SUBJ'] == "Science"){echo "selected";}?>>Science</option>
            <option value="English"<?php if($row6['SUBJ'] == "English"){echo "selected";}?>>English</option>
            <option value="Filipino"<?php if($row6['SUBJ'] == "Filipino"){echo "selected";}?>>Filipino</option>
          </select>
          </div>

          <div class="form-floating m-2">
            <input type="text" class="form-control" name="question1" value="<?php echo $row1["Question"];?>" id="question1" style="height: 100px"></input>
            <label for="floatingTextarea2">1. </label>
          </div>
          <!----RADIO BUTTONS-->
          <div class="container m-2">
            <div class="row">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="A"name="flexRadioDefault1" id="flexRadioDefault1" <?php if ($row1['Answer']=="A"){echo "checked";}?>>
                A.)
                <input class="answer"type="text"value="<?php echo $row1['A'];?>"id="1A" name="1A">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="B" name="flexRadioDefault1" id="flexRadioDefault1"<?php if ($row1['Answer']=="B"){echo "checked";}?> >
                B.)
                <input class="answer"type="text"id="1B" name="1B" value="<?php echo $row1['B'];?>">
              </input>
              </div>
            </div>
            <div class="row ">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="C" name="flexRadioDefault1" id="flexRadioDefault1"<?php if ($row1['Answer']=="C"){echo "checked";}?>>
                C.)
                <input class="answer"type="text"id="1D" name="1C" value="<?php echo $row1['C'];?>">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="D" name="flexRadioDefault1" id="flexRadioDefault1" <?php if ($row1['Answer']=="D"){echo "checked";}?> >
                D.)
                <input class="answer"type="text"id="1D" name="1D"value="<?php echo $row1['D'];?>">
              </input>
              </div>
          </div>
          </div>
          <!---RADIOT BUTTON ENDS-->
        <!----CONTENT START------->
        <div class="form-floating m-2">
            <input type="text" class="form-control" name="question2" value="<?php echo $row2['Question'];?>" id="question2" style="height: 100px"></input>
            <label for="floatingTextarea2">2. </label>
          </div>
          <!----RADIO BUTTONS-->
          <div class="container m-2">
            <div class="row">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="A"name="flexRadioDefault2" id="flexRadioDefault2" <?php if ($row2['Answer']=="A"){echo "checked";}?>>
                A.)
                <input class="answer"type="text"value="<?php echo $row2['A'];?>"id="2A" name="2A">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="B" name="flexRadioDefault2" id="flexRadioDefault2" <?php if ($row2['Answer']=="B"){echo "checked";}?>>
                B.)
                <input class="answer"type="text"id="2B" name="2B"value="<?php echo $row2['B'];?>">
              </input>
              </div>
            </div>
            <div class="row ">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="C" name="flexRadioDefault2" id="flexRadioDefault2"<?php if ($row2['Answer']=="C"){echo "checked";}?>>
                C.)
                <input class="answer"type="text"id="2D" name="2C"value="<?php echo $row2['C'];?>">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="D" name="flexRadioDefault2" id="flexRadioDefault2" <?php if ($row2['Answer']=="D"){echo "checked";}?>>
                D.)
                <input class="answer"type="text"id="2D" name="2D"value="<?php echo $row2['D'];?>">
              </input>
              </div>
          </div>
          </div>
          <!---RADIOT BUTTON ENDS-->

                    <!----CONTENT START------->
                    <div class="form-floating m-2">
            <input type="text" class="form-control" name="question3"value="<?php echo $row3['Question'];?>" id="question3" style="height: 100px"></input>
            <label for="floatingTextarea2">3. </label>
          </div>
          <!----RADIO BUTTONS-->
          <div class="container m-2">
            <div class="row">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="A"name="flexRadioDefault3" id="flexRadioDefault3" <?php if ($row3['Answer']=="A"){echo "checked";}?>>
                A.)
                <input class="answer"type="text"value="<?php echo $row3['A'];?>"id="3A" name="3A">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="B" name="flexRadioDefault3" id="flexRadioDefault3" <?php if ($row3['Answer']=="B"){echo "checked";}?>>
                B.)
                <input class="answer"type="text"id="3B" name="3B" value="<?php echo $row3['B'];?>">
              </input>
              </div>
            </div>
            <div class="row ">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="C" name="flexRadioDefault3" id="flexRadioDefault3"<?php if ($row3['Answer']=="C"){echo "checked";}?>>
                C.)
                <input class="answer"type="text"id="3C" name="3C"value="<?php echo $row3['C'];?>">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="D" name="flexRadioDefault3" id="flexRadioDefault3"  <?php if ($row3['Answer']=="D"){echo "checked";}?>>
                D.)
                <input class="answer"type="text"id="3D" name="3D"value="<?php echo $row3['D'];?>">
              </input>
              </div>
            </div>
          </div>
          <!---RADIOT BUTTON ENDS-->

                    <!----CONTENT START------->
                    <div class="form-floating m-2">
            <input type="text" class="form-control" name="question4"value="<?php echo $row4['Question'];?>" id="question4" style="height: 100px"></input>
            <label for="floatingTextarea2">4. </label>
          </div>
          <!----RADIO BUTTONS-->
          <div class="container m-2">
            <div class="row">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="A"name="flexRadioDefault4" id="flexRadioDefault4" <?php if ($row4['Answer']=="A"){echo "checked";}?>>
                A.)
                <input class="answer"type="text"id="4A" name="4A"value="<?php echo $row4['A'];?>">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="B" name="flexRadioDefault4" id="flexRadioDefault4" <?php if ($row4['Answer']=="B"){echo "checked";}?>>
                B.)
                <input class="answer"type="text"id="4B" name="4B" value="<?php echo $row4['B'];?>">
              </input>
              </div>
            </div>
            <div class="row ">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="C" name="flexRadioDefault4" id="flexRadioDefault4"<?php if ($row4['Answer']=="C"){echo "checked";}?>>
                C.)
                <input class="answer"type="text"id="4C" name="4C"value="<?php echo $row4['C'];?>">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="D" name="flexRadioDefault4" id="flexRadioDefault4" <?php if ($row4['Answer']=="D"){echo "checked";}?> >
                D.)
                <input class="answer"type="text"id="4D" name="4D"value="<?php echo $row4['D'];?>">
              </input>
            </div>
            </div>
          </div>
          <!---RADIOT BUTTON ENDS-->

                    <!----CONTENT START------->
                    <div class="form-floating m-2">
            <input type="text" class="form-control" name="question5"value="<?php echo $row5['Question'];?>" id="question5" style="height: 100px"></input>
            <label for="floatingTextarea2">5. </label>
          </div>
          <!----RADIO BUTTONS-->
          <div class="container m-2">
            <div class="row">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="A"name="flexRadioDefault5" id="flexRadioDefault5" <?php if ($row5['Answer']=="A"){echo "checked";}?>>
                A.)
                <input class="answer"type="text"id="5A" name="5A"value="<?php echo $row5['A'];?>">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="B" name="flexRadioDefault5" id="flexRadioDefault5" <?php if ($row5['Answer']=="B"){echo "checked";}?>>
                B.)
                <input class="answer"type="text"id="5B" name="5B" value="<?php echo $row5['B'];?>">
              </input>
              </div>
            </div>
            <div class="row ">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="C" name="flexRadioDefault5" id="flexRadioDefault5"<?php if ($row5['Answer']=="C"){echo "checked";}?>>
                C.)
                <input class="answer"type="text"id="5C" name="5C"value="<?php echo $row5['C'];?>">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="D" name="flexRadioDefault5" id="flexRadioDefault5"  <?php if ($row5['Answer']=="D"){echo "checked";}?>>
                D.)
                <input class="answer"type="text"id="5D" name="5D"value="<?php echo $row5['D'];?>">
              </input>
              
            </div><div></div>
          </div>
          <!---RADIOT BUTTON ENDS-->

          <div class="container d-flex justify-content-end mb-5">
          <button type="submit" name="done" class="button" id="button">
            Save
            <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
          </button>
          </div>
        </div>
</div>

<?php
    if(isset($_POST['done'])){
    
    
    $result1= "UPDATE quiz SET Question='" . $_POST['question1']."', A='". $_POST['1A'] ."', 
    B='". $_POST['1B'] ."', C='". $_POST['1C'] ."', D='". $_POST['1D'] ."', Answer='".$_POST['flexRadioDefault1']."' WHERE id=1";
    if($conn->query($result1)===TRUE){
      echo '<script type="text/javascript">' .
      'console.log("Q1 updated successfully");</script>';
    }else{
      echo '<script type="text/javascript">' .
      'console.log("FAILED!");</script>';
    }
    $result2="UPDATE quiz SET Question='". $_POST['question2'] ."', A='". $_POST['2A'] ."', 
    B='". $_POST['2B'] ."', C='". $_POST['2C'] ."', D='". $_POST['2D'] ."', Answer='". $_POST['flexRadioDefault2'] ."' where id=2";
    if($conn->query($result2)===TRUE){
      echo '<script type="text/javascript">' .
      'console.log("Q2 updated successfully");</script>';
    }else{
      echo '<script type="text/javascript">' .
      'console.log("FAILED!");</script>';
    }
    $result3= "UPDATE quiz SET Question='" . $_POST['question3']."', A='". $_POST['3A'] ."', 
    B='". $_POST['3B'] ."', C='". $_POST['3C'] ."', D='". $_POST['3D'] ."', Answer='".$_POST['flexRadioDefault3']."' WHERE id=3";
    if($conn->query($result3)===TRUE){
      echo '<script type="text/javascript">' .
      'console.log("Q1 updated successfully");</script>';
    }else{
      echo '<script type="text/javascript">' .
      'console.log("FAILED!");</script>';
    }
    $result4="UPDATE quiz SET Question='". $_POST['question4'] ."', A='". $_POST['4A'] ."', 
    B='". $_POST['4B'] ."', C='". $_POST['4C'] ."', D='". $_POST['4D'] ."', Answer='". $_POST['flexRadioDefault4'] ."' where id=4";
    if($conn->query($result4)===TRUE){
      echo '<script type="text/javascript">' .
      'console.log("Q2 updated successfully");</script>';
    }else{
      echo '<script type="text/javascript">' .
      'console.log("FAILED!");</script>';
    }
    $result5= "UPDATE quiz SET Question='" . $_POST['question5']."', A='". $_POST['5A'] ."', 
    B='". $_POST['5B'] ."', C='". $_POST['5C'] ."', D='". $_POST['5D'] ."', Answer='".$_POST['flexRadioDefault5']."' WHERE id=5";
    if($conn->query($result5)===TRUE){
      echo '<script type="text/javascript">' .
      'console.log("Q1 updated successfully");</script>';
    }else{
      echo '<script type="text/javascript">' .
      'console.log("FAILED!");</script>';
    }
      
      $result6="UPDATE tanong SET SUBJ='".$_POST['subjects']."', GAMENAME='".$_POST['name']."' where CODE = '$code'";
      if($db->query($result6)===TRUE){
        echo '<script type="text/javascript">' .
        'console.log("Q1 updated successfully");</script>';
      }else{
        echo '<script type="text/javascript">' .
        'console.log("FAILED!");</script>';
      }
      echo"<script>alert('Quiz Updated!')</script>";
      echo '<script type="text/javascript">' .'window.location = "EditView.php"' . '</script>';
    }
   ?> 
      </div>
    </form>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../asset/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/Create.js"></script>
  </body>
</html>