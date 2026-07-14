<?php
session_start();
$products= [
'laptop1' => [
          'price' => '10000',
          'img' => 'images/alex-ghizila-vUjJztdX4H0-unsplash.jpg',
          'desc' => 'laptop'
        ],
'pc1' => [
          'price' => '6500',
          'img' => 'images/anthony-roberts-5WJhuXkqCkc-unsplash.jpg',
          'desc' => 'pc'
        ],
'laptop2' => [
          'price' => '15000',
          'img' => 'images/dell-yNvVnPcurD8-unsplash.jpg',
          'desc' => 'laptop'
        ],
'laptop3' => [
          'price' => '8500',
          'img' => 'images/howard.jpg',
          'desc' => 'laptop'
        ],
'pc2' => [
          'price' => '21500',
          'img' => 'images/nubelson-fernandes-JurI1OmGRRo-unsplash.jpg',
          'desc' => 'pc'
        ],
'laptop4' => [
          'price' => '26500',
          'img' => 'images/sebastian-bednarek-x2Z0uNj-Quo-unsplash.jpg',
          'desc' => 'laptop'
        ],
        
    ];?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="css/style.css">
    
    </head>
    <body>
        <?php include "navbar.php"; ?>
        <h1 class="title" >Our products</h1>
        <div class="row">
         <?php foreach($products as $product =>$value){
        ?>
        <div class="col-md-4 mb-4">
<div class="card h-100">
       <div class="card" style="width: 18rem;">
             <img src="<?=$value['img']?>" class="card-img-top" alt="...">
             <div class="card-body">
                 <h5 class="card-title"><?=$product?></h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <h3 class="card-title"><?=$value['price'];echo"$";?></h3>

                 
                 
                 <?php if(isset($_SESSION['email'], $_SESSION['password'])): ?>

    <a href="profile.php" class="btn btn-primary">Buy</a>

<?php else: ?>

    <a href="account.php" class="btn btn-primary">Buy</a>

<?php endif; ?>
             </div>
         </div>
         </div>
         </div>
    
<?php
    }
?>
</div>
    </body>
    </html>

   