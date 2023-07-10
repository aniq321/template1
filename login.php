<?php 
include "header.php";
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM `user` WHERE `name` = '$name' AND `email` = '$email'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['isadmin'] == "admin") {
        $_SESSION['name'] = $name;
        $_SESSION['isadmin'] = 1;
        header("Location: index.php");
    } else {
        $_SESSION['name'] = $name;
        $_SESSION['isadmin'] = 0;
        header("Location: guest.php");
    }
}
?>
<h1>Page Login</h1>
<p>User Login</p>
<form method="post">
    <label for="">name</label>
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <label for="">email</label>
    <input type="email"  name="email" id="email" placeholder="Enter your email">
    <input type="submit" value="Submit">
</form>
<?php 
include "footer.php";
?>