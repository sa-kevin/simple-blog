<?php include 'db.php'; ?>
<?php include 'templates/header.php'; ?>

<h2>Blog Posts</h2>

<?php
$sql = "SELECT * FROM posts ORDER BY create_at DESC";
$result = $conn->query($sql);

if ($result -> num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "article";
        echo "<h3><a href='post.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></h3>";
        echo "<p>" . substr($row['content'], 0, 100) . "...</p>";
        echo "</article>";
    }
} else {
    echo "No posts found.";
}
?>

<?php include 'templates/footer.php'; ?>