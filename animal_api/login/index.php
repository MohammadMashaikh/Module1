<?php
session_start();

if (isset($_SESSION['user']))
    header('Location: ./home.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Login Page</title>
</head>

<h1 class="text-center mt-5">Login Page</h1>
<hr>



<body>


<?php if(!empty($_SESSION) && isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>

<div class='alert alert-danger' role='alert'>
    <?= $_SESSION['error'] ?>
</div>

<?php endif; ?>



    <div class="d-flex justify-content-center">
        <form class="mt-5 w-25" method="POST" action="./form_validation.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1"  name="email" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <div id="btn_id">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

</body>

</html>