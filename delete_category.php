<?php
include 'config.php';

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $query = "DELETE FROM categories WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        echo "Category deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>
