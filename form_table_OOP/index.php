<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Student Form</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Students</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Form Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./table.php">Table Page</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<h1 class="text-center mt-5">Student Form</h1>
<hr>

<body>
    <div class="container w-25">
        <form action="./process_input.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="exampleInputText" name="student" required>

            </div>
            <div class=" mb-3">
                <label for="exampleInputText1" class="form-label">Phone</label>
                <input type="text" class="form-control" id="exampleInputText1" name="phone" required>
            </div>
            <div class=" mb-3">
                <label for="exampleInputText1" class="form-label">Weight</label>
                <input type="text" class="form-control" id="exampleInputText1" name="weight">
            </div>

            <div class=" mb-3">
                <label for="exampleInputText1" class="form-label">DOB</label>
                <input type="text" class="form-control" id="exampleInputText1" name="dob">
            </div>

            <button type="submit" class="btn btn-success mx-5">Submit</button>
        </form>


    </div>

</body>

</html>