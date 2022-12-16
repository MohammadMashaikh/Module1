<?php




function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "oop1";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);


    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}
function send_info_db()
{
    $email = $_POST['email'];
    $student = $_POST['student'];
    $phone = $_POST['phone'];
    $weight = $_POST['weight'];
    $dob = $_POST['dob'];

    $sql = "INSERT INTO form_oop (student_name, email, phone, weight, dob) VALUES ('$student', '$email', '$phone', '$weight', '$dob')";
    mysqli_query(connect(), $sql);
}

function get_student()
{
    $sql = "SELECT * FROM form_oop";
    $result = mysqli_query(connect(), $sql);


    $students = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $students[] = $row;
        }
    }

    return $students;
}
