

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
     <header>
        <div class="logo">
            <h1>E-Mora</h1>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="home.php">Home</a></li>
            </ul>
            <ul>
                <li><a href="products.php">All Products</a></li>
            </ul>
            <ul>
                <?php 
                
                if(isset($_SESSION['email'], $_SESSION['password'])): ?>
    <li><a href="profile.php">Account</a></li>

<?php else: ?>
    <li><a href="account.php">Account</a></li>
    

<?php endif; ?>
            </ul>

            <ul>
                <li>
                    <a href="logout.php"  class="btn btn-primary" style="background-color:rgb(61, 119, 146);
                    border:none;">Logout</a>
                </li>
            </ul>

        </nav>
    </header>
</body>
</html>


