<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '.\dbconnect.php';

    $name = $_POST['name'];
    $mobile1 = $_POST['mobile1'];
    $mobile2 = $_POST['mobile2'];
    $pin = $_POST['pin'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $state = $_POST['selected'];
    $landmark = $_POST['landmark'];

    $sql = "INSERT INTO `delivery`(`id`, `name`, `number1`, `number2`, `pin`, `district`, `city`, `address`, `state`, `landmark`) VALUES ('', '$name','$mobile1', '$mobile2', '$pin', '$district', '$city', '$address', '$state', '$landmark')";
    $execute = mysqli_query($conn, $sql);

    if ($execute) {
        // echo "<h1> your data is inserted in table</h1>";
        header("location:..\conformed.html");
    } else {
        die("error: datais not inserted" . mysqli_connect_error());
    }
}
