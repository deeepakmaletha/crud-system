<?php
    include 'conn.php';

    if(isset($_POST['done'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $q = "SELECT * FROM crud";
        
        $query = mysqli_query($conn,$q);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <title>display</title>
</head>
<body>
    <div class="container">
     <div class="col-lg-12">
         <br><br>

         <h1 class = "text-warning text-center ">Display Table Data</h1>
         <br>
         <table class="table table-striped table-hover table-bordered">
             <tr class="text-center">
                 <th>Id</th>
                 <th>Username</th>
                 <th>Password</th>
                 <th>Delete</th>
                 <th>Update</th>
              </tr>
              <?php
        include 'conn.php';

      
        
           $q = "SELECT * FROM crud";
        
          $query = mysqli_query($conn,$q);

          while($res = mysqli_fetch_array($query)){

          
    

?>
            

             <tr class="text-center">
                 <td><?php echo $res['id'] ?></td>
                 <td><?php echo $res['username'] ?></td>
                 <td><?php echo $res['password'] ?></td>

                 <td> <button class="btn-danger btn"> <a href="
                 delete.php?id= <?php echo $res['id']; ?>"class="text-white">Delete</a></button></td>

                 <td> <button class="btn-primary btn"> <a href="
                 update.php?id= <?php echo $res['id']; ?>"class="text-white">Update</a></button></td>
             </tr>
             <?php
          }
             ?>
         </table>
     </div>
     </div>
</body>
</html>