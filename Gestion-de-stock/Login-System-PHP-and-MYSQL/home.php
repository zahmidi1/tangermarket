<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

?>
     <?php

     include "./db_conn.php";

     $sql = "SELECT DISTINCT catagorie FROM produit ";
     $res = mysqli_query($conn, $sql);

     ?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="style1.css">
     </head>

     <body>

          <h1 class="logout">Hello <?php echo $_SESSION['name']; ?></h1>
          <div class="d-flex">
               <a href="logout.php" class="logout">Logout</a>
               <a href="./add_product.php" class="logout">Add product</a>

          </div>




          <div class="container">

               <h1 class="text-center">category</h1>
               <div class="row ">
                    <?php if (mysqli_num_rows($res)) { ?>



                         <?php
                         $i = 0;
                         while ($rows = mysqli_fetch_assoc($res)) {
                              $i++;
                         ?>
                              <br>
                              <div class="col-lg-4 text-center ">
                                   <div class="card" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
                                              0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <img src="./les images/bg4.jpg" class="img-fluid" alt="">
                                        <h5 class="font-weight-bold px-3"><?= $rows['catagorie'] ?> </h5>

                                        <a href="./produit.php?produit=<?php echo $rows['catagorie']; ?>" class="font-weight-bold  A ">Show More</a>




                                   </div>
                              </div>




                         <?php } ?>
                    <?php } ?>



               </div>

          </div>



     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>