<?php
session_start();
if(isset($_SESSION['errors'])){
  foreach($_SESSION['errors'] as $error){
    ?>
<div class="alert alert-danger w-75 m-auto mt-3" >
    <?php echo $error ."<br>";?>
</div>

<?php
  }
  unset($_SESSION['errors']);
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" class="w-75 m-auto my-5  "  >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Price Of Product</label>
    <input type="text" name="num1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Number of peice</label>
    <input type="text" name="num2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">calculate</button>
</form>
</body>
</html>