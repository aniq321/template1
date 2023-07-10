<?php 
include "header.php";
//check if session is admin or not isadmin= 1 or 0
//if not admin then redirect to login.php
if ($_SESSION['isadmin'] == 0) {
    header("Location: guest.php");
}
?>
    <!-- // this is page for all list user from database
    // this will loop all data from database
    // on the side of each data there is a link to delete and update data -->
    <h1>Page List</h1>
    <p>User List</p>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>action</th>
        </tr>
        <?php 
        $sql = "SELECT * FROM `user`";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">delete</a>
                    <a href="update.php?id=<?php echo $row['id']; ?>">update</a>
                </td>
            </tr>
            <?php
        }
        ?>
<?php 
include "footer.php";
?>