<?php include "navbar.php"; ?>
<?php 
session_start();
if(isset($_SESSION['perrors'])){
  foreach($_SESSION['perrors'] as $perror){
    ?>
<div class="w-75 m-auto my-2 alert alert-danger"><?= $perror ?></div>
    <?php 
  }
  unset($_SESSION['perrors']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <form action="main.php" method="post" class="w-75 m-auto my-4 ">
      <h1>Update Your Profile</h1>

      
                        <!-- Username -->
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" 
                                   name="username" placeholder="Enter username">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" 
                                   name="password" placeholder="Enter password">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" 
                                   name="email" placeholder="example@gmail.com">
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control" 
                                   name="phone" placeholder="01xxxxxxxxx">
                        </div>

                        <!-- Facebook URL -->
                        <div class="mb-3">
                            <label class="form-label">Facebook Account URL</label>
                            <input type="text" class="form-control" 
                                   name="facebook" 
                                   placeholder="https://facebook.com/username">
                        </div>

                        <!-- Twitter URL -->
                        <div class="mb-3">
                            <label class="form-label">Twitter Account URL</label>
                            <input type="text" class="form-control" 
                                   name="twitter" 
                                   placeholder="https://twitter.com/username">
                        </div>

                        <!-- Instagram URL -->
                        <div class="mb-3">
                            <label class="form-label">Instagram Account URL</label>
                            <input type="text" class="form-control" 
                                   name="instagram" 
                                   placeholder="https://instagram.com/username">
                        </div>
 
  
  <button type="submit" name="Save" class="btn btn-primary">Save changes</button>
</form>
</body>
</html>