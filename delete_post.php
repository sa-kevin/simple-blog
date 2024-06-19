<?php include 'db.php'; ?>

<?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM posts WHERE id=$id";
    if($conn->query($sql) === TRUE) {
        echo "Post deleted succesfully.";
    } else {
        echo "Error:" . $sql > "<br>" . $conn->error;
    }
} else {
    echo "Invalid post ID.";
}
?>