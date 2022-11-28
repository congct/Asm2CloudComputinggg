
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <title></title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">ADMIN</h2>

      <div class="table-responsive">

        <table class="table custom-table">
          <thead>
           
          </thead>
          <tbody>
            <tr>


                    <?php 
    $connect = mysqli_connect('3.128.54.48','thanhcong','123@123a','music');
    if(!$connect)
    {
      echo "Connection failed!";
    }
  ?> <tr>

              <th scope="col">User ID</th>
              <th scope="col">Song ID</th>
              <th scope="col">Date Added</th>
            </tr>
     <?php
         $sql = "SELECT * FROM cart";
        $result = mysqli_query($connect, $sql);
        while($row= mysqli_fetch_array($result)){
               $user_id = $row['user_id'];
               $song_id  = $row['song_id'];
               $dateAdded = $row['dateAdded'];
            ?>
            <td> <?php echo $user_id ?></td>

            <td> <?php echo $song_id ?></td>
            <td> <?php echo $dateAdded ?></td>
            <td style=" display:flex"> 
                <a style=" padding-right:10px" href="editsong.php?id=<?php echo $song_id ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="30" height="30"
viewBox="0 0 30 30"
style=" fill:#000000;">    <path d="M 22.828125 3 C 22.316375 3 21.804562 3.1954375 21.414062 3.5859375 L 19 6 L 24 11 L 26.414062 8.5859375 C 27.195062 7.8049375 27.195062 6.5388125 26.414062 5.7578125 L 24.242188 3.5859375 C 23.851688 3.1954375 23.339875 3 22.828125 3 z M 17 8 L 5.2597656 19.740234 C 5.2597656 19.740234 6.1775313 19.658 6.5195312 20 C 6.8615312 20.342 6.58 22.58 7 23 C 7.42 23.42 9.6438906 23.124359 9.9628906 23.443359 C 10.281891 23.762359 10.259766 24.740234 10.259766 24.740234 L 22 13 L 17 8 z M 4 23 L 3.0566406 25.671875 A 1 1 0 0 0 3 26 A 1 1 0 0 0 4 27 A 1 1 0 0 0 4.328125 26.943359 A 1 1 0 0 0 4.3378906 26.939453 L 4.3632812 26.931641 A 1 1 0 0 0 4.3691406 26.927734 L 7 26 L 5.5 24.5 L 4 23 z"></path></svg></a><a href="?id=<?php echo $song_id ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="30" height="30"
viewBox="0 0 30 30"
style=" fill:#000000;">    <path d="M 14.984375 2.4863281 A 1.0001 1.0001 0 0 0 14 3.5 L 14 4 L 8.5 4 A 1.0001 1.0001 0 0 0 7.4863281 5 L 6 5 A 1.0001 1.0001 0 1 0 6 7 L 24 7 A 1.0001 1.0001 0 1 0 24 5 L 22.513672 5 A 1.0001 1.0001 0 0 0 21.5 4 L 16 4 L 16 3.5 A 1.0001 1.0001 0 0 0 14.984375 2.4863281 z M 6 9 L 7.7929688 24.234375 C 7.9109687 25.241375 8.7633438 26 9.7773438 26 L 20.222656 26 C 21.236656 26 22.088031 25.241375 22.207031 24.234375 L 24 9 L 6 9 z"></path></svg> </a>
            </td>
        </tr>
             <?php
             }
             ?>
</table>
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql="DELETE FROM cart where song_id = $id";
    $result=mysqli_query($connect,$sql);
    if($result) {
        echo "<script> alert ('Delete successfully!')</script>";
    }
} else{
    echo"";
}
?>





            </tr>
          


            
            
          </tbody>
        </table>
      </div>


    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

