<?php include "config.php"; ?>
<?php
if (!isset($_SESSION['username'])) {
    header('location:signup.php');
}
?>

<?php

if (isset($_POST['post'])) {

    $sname = $_SESSION['username'];
    $comment = $_POST['comment'];

    // Real Escape String
    $comment = mysqli_real_escape_string($conn, $comment);
    $sname = mysqli_real_escape_string($conn, $sname);
    $query = "INSERT INTO `suggestions` (`id`, `post`, `ttmp`,`sname`) VALUES (NULL, '$comment', current_timestamp(),'$sname');";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('location:suggestions.php');
    }
}

$query = "SELECT * FROM `suggestions` ORDER BY id DESC;";
$result = mysqli_query($conn, $query);
?>
<?php include "header.php"; ?>


<body>

    <div id="comments" class="container mt-5">
        <form action="suggestions.php" method="post">
            <div class="form-group">
                <h2><label for="inputAddress">Post Your suggestions</label></h2>
                <textarea type="text" name="comment" class="form-control" id="comment" placeholder="Write a comment..." name="comment" required></textarea>
            </div>
            <button type="submit" name="post" class="btn btn-success">Post</button>
        </form>

        <!-- show suggestions -->
        <div class="container-fluid my-4">
            <div class="col-sm-10 mt-2">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="my-2">
                        <b><?php echo $row['sname']; ?></b> at <?php echo $row["ttmp"]; ?> says<br>
                        <?php echo htmlspecialchars($row['post']); ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php include "./footer.php"; ?>