<?php 
include "header.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `user` WHERE id='$id'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "UPDATE `user` SET `name`='$name',`email`='$email' WHERE id='$id'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo "Data updated successfully";
    } else {
        echo "Data not updated";
    }
}
?>
    <h1>Page Update</h1>
    <p>User Update <?php echo $row['name'] ?></p>
    <form method="post">
        <label for="">name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <label for="">email</label>
        <input type="text"  name="email" id="email" placeholder="Enter your email">
        <input type="submit" value="Submit">
    </form>
<?php
include "footer.php";
?>