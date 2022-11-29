<?php
session_start();

if (!isset($_SESSION['user']))
    header('Location: ./');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Home Page</title>

</head>



<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Home Page</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               
                        <div>
                            <span class="me-3"><?= $_SESSION['user']['display_name'] ?></span>
                            <a href="./logout.php" class="btn btn-danger">Logout</a>
                        </div>            
        </nav>
    </header>

    <h1 class="text-center m-5">Home Page</h1>
    <hr>

    <?php
    if(isset ($_SESSION['user'])) : 
      $animals = file_get_contents('../api_data/fav_animals.json');
      $animals = json_decode($animals);

?>

     <?php foreach($animals as $animal) : ?>
      
        <div class="row d-flex justify-content-center ">
    <div class="card" style="width: 18rem;">
  <img src="<?= $animal->image_link ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $animal->name ?> </h5>
    <p class="card-text"><?= $animal-> latin_name ?> </p>
    <a href="./animal.php" class="btn btn-primary">Animal Page</a>
  </div>
  
</div>


 </div>

<?php endforeach; ?>
<?php endif; ?>



</body>


</html>