<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "dsa_database";

$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn){

      die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['save']))
{
    $name = $_POST['name']; 
    $number = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql_query = "INSERT INTO dsa_students(std_name, phone_number, mail, gender)
    VALUES ('$name','$number','$email','$gender')";

}
    if (mysqli_query($conn, $sql_query))
    { 
        print("<h2 style='color:cyan;text-align:center;margin-top:20%;'>Successfully Registered.....</h2>" );
    }

    else
    {
        echo "Error: " . $sql. "". mysqli_error($conn);
    mysqli_close($conn);
}
?>

