<?php
       session_start();
       $user = $_SESSION['username'];
       $code = $_SESSION['decode'];
       $subj = $_SESSION['subj'];
       $conn = mysqli_connect('localhost','root','', $code);

       
  
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../asset/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <!---CREATE CSS-->
    <link rel="stylesheet" href="../css/Edit.css">
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
                <div class="log p-2 bd-highlight">
                    <a href="../view/Sign_in.php">Log Out
                    <img src="../img/box-arrow-right.svg">
                    </a>
                </div>
                                    
            </div>
          <!----NAVIGATION BAR END-->
          <!----CONTENT START------->
          <div class="list container mt-3">
          <label for="subjects">Choose a subject:</label>
          <select name="subjects" id="sub">
            <option value="None"<?php if($subj == "None"){echo "selected";}?>>None</option>
            <option value="Math"<?php if($subj == "Math"){echo "selected";}?>>Math</option>
            <option value="Science"<?php if($subj == "Science"){echo "selected";}?>>Science</option>
            <option value="English"<?php if($subj == "English"){echo "selected";}?>>English</option>
            <option value="Filipino"<?php if($subj == "Filipino"){echo "selected";}?>>Filipino</option>
          </select>
          </div>
          <?php
    
          $count =1;
           $result = mysqli_query($conn,"SELECT * from quiz ORDER BY id ;");
           while(($row = mysqli_fetch_assoc($result))){?>
           
          <div class="form-floating m-2">
            <input type="text" class="form-control" name="question<?php echo$row['id']?>" value ="<?php  echo $row["Question"];?>" id="floatingTextarea<?php echo $row['id']?>2" style="height: 100px"></input>
            <label for="floatingTextarea2"><?php echo$row['id']?>.) </label>
          </div>
          <!----RADIO BUTTONS-->
          <div class="container m-2">
            <div class="row">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="A"name="flexRadioDefault<?php echo$row['id']?>" id="flexRadioDefault<?php echo$row['id']?>1" <?php if ($row['Answer']=="A"){echo "checked";}?> >
                A.)
                <input class="answer"type="text"id="ans1" name="<?php echo$row['id']?>A" value="<?php echo $row["A"];?>">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="B" name="flexRadioDefault<?php echo$row['id']?>" id="flexRadioDefault<?php echo$row['id']?>2" <?php if ($row['Answer']=="B"){echo "checked";}?>>
                B.)
                <input class="answer"type="text"id="ans2" name="<?php echo$row['id']?>B" value ="<?php echo $row["B"];?>">
              </input>
              </div>
            </div>
            <div class="row ">
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="C" name="flexRadioDefault<?php echo$row['id']?>" id="flexRadioDefault<?php echo$row['id']?>3" <?php if ($row['Answer']=="C"){echo "checked";}?>>
                C.)
                <input class="answer"type="text"id="ans3" name="<?php echo$row['id']?>C" value = "<?php echo $row["C"];?>">
              </input>
              </div>
              <div class="form-check col-sm">
                <input class="form-check-input" type="radio" value="D" name="flexRadioDefault<?php echo$row['id']?>" id="flexRadioDefault<?php echo$row['id']?>4" <?php if ($row['Answer']=="D"){echo "checked";}?>>
                D.)
                <input class="answer"type="text"id="ans4" name="<?php echo$row['id']?>D" value = "<?php echo $row["D"];?>">
              </input>
              </div>
          </div>
          </div>
          <!---RADIOT BUTTON ENDS-->
          <?php $count++; }?>
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
    <script src="../../asset/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/Edit.js"></script>
  </body>
</html>