<?php
       session_start();
       $conn = mysqli_connect('localhost','root','','quiz');
       $teacher = '';
       

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Teacher Accounts</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../asset/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <!---CREATE CSS-->
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
                <div class=" p-2 bd-highlight">Admin
                  <img src="../img/person-fill.svg">
                </div>
                          
                        
            </div>
          <!----NAVIGATION BAR END-->
          <!----CONTENT START------->
          <h2>Teacher Accounts</h2>
          <form method = 'post' action = ''>
            
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">USERNAME</th>
                <th scope="col">PASSWORD</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $result = mysqli_query($conn,"SELECT * from accounts ORDER BY 'ID' ");
            while($row=mysqli_fetch_assoc($result)){
              ?>
              <tr><a href = "Created.php" class="row-link">
                  <td name="id"><a href="Main_menu.php?teacher=<?php echo $row["username"];?>" class="row-link"><?php  echo $row["ID"];?></a></td>
                  <td name="username"><a href="Main_menu.php?teacher=<?php echo $row["username"];?>"  class="row-link"><?php  echo $row["username"];?> </a></td>
                  <td name="pw"><?php  echo $row["passwords"];?></a></td>
                  <input type="hidden" name="teach" value="<?php echo $row["username"]; ?>"></input>
            </a>
              </tr>
              
              <?php 
            }?>
            </tbody>
          </table>
          <div class="container d-flex justify-content-end">
            <a href="../option.php" type="button" class="btn btn-outline-secondary me-2">Back</a>
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