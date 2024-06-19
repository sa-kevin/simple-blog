<?php include 'db.php'; ?>
<?php include 'templates/header.php'; ?>

<?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<article>";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . $row['content'] . "</p>";
        echo "</article>";
    } else {
        echo "Post not found.";
    }
} else {
    echo "Invalid poat ID";
}
?>

<?php include 'templates/footer.php' ?>