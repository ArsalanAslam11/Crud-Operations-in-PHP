<?php
include 'connection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM crud WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: show.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
