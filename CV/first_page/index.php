<?php

session_start();

$_SESSION['regName'] = $regValue;

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

<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">CV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">First Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../second_page/index.php">Second Page</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<h1 class="text-center mt-5">Fill Your information</h1>
<hr>

<?php
$my_cv = file_get_contents('../cv_json/information.json');
$my_cv = json_decode($my_cv);
?>

<body>

    <div id="my_form">
        <form class="mt-5 w-25" action="../second_page/index.php" method="POST">
            <div class="mb-3">
                <label for="text" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="text" value="<?= $my_cv->basics->name ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $my_cv->basics->email ?>">
                <div class="mb-3">
                    <label for="text1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="text1" value="<?= $my_cv->basics->phone ?>">
                </div>
                <div class="mb-3">
                    <label for="text1" class="form-label">Education</label>
                    <input type="text" class="form-control" id="text1" value="<?= $my_cv->basics->education ?>">
                </div>
                <div class="mb-3">
                    <label for="text2" class="form-label">Working Experience</label>
                    <input type="text" class="form-control" id="text2" value="<?= $my_cv->basics->work_name ?>">
                </div>
                <div class="mb-3">
                    <label for="text3" class="form-label">Skills</label>
                    <input type="text" class="form-control" id="text3" value="<?= $my_cv->basics->skills_name1 ?>">
                </div>


                <button type="submit" class="btn btn-primary mx-5">Submit</button>
        </form>

    </div>


</body>

</html>