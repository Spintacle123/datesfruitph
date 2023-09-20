<?php
include 'config.php';

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $query = "UPDATE categories SET deleted_at = NOW() WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        echo "Category soft-deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>

