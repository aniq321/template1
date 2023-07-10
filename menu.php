<a href="index.php">index</a>
<a href="page.php">page</a>
<?php
if (isset($_SESSION['name'])) {
    echo "Hello " . $_SESSION['name'] . " | ";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "<a href='login.php'>Login</a>";
}
