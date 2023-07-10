<?php 
include "header.php";
// when user click submit button then this code will execute where name email get submit to database using connection $connection from connection.php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO `user` (`name`, `email`) VALUES ('$name', '$email')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Data not inserted";
    }
}
?>
    <h1>Page Input</h1>
    <p>User Input</p>
    <form method="post">
        <label for="">name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <label for="">email</label>
        <input type="text"  name="email" id="email" placeholder="Enter your email">
        <input type="submit" value="Submit"> 
<?php 
include "footer.php";
?>