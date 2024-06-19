<?php include 'db.php'; ?>
<?php include 'templates/header.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Post updated successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $sql = "SELECT * FROM posts WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <h2>Edit Post</h2>
            <form method="post" action="">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" required>
                <label for="content">Content:</label>
                <textarea id="content" name="content" required><?php echo $row['content']; ?></textarea>
                <button type="submit">Submit</button>
            </form>
            <?php
        } else {
            echo "Post not found.";
        }
    }
} else {
    echo "Invalid post ID.";
}
?>

<?php include 'templates/footer.php'; ?>