<?php include "admin-header.php"; ?>
<?php
if (!isset($_SESSION["admin_id"])) {
    header('location:admin-login.php');
}
?>
<div id="layoutSidenav_content">
    <main>
        <?php
        
        //Insert Question
        if (isset($_POST['add_question'])) {
            $questions = $_POST['questions'];
            $ans_id = $_POST['ans_id'];
            $a1 = $_POST['a1'];
            $a2 = $_POST['a2'];
            $a3 = $_POST['a3'];
            $a4 = $_POST['a4'];
            $query = "INSERT INTO `questions` (`qid`, `questions`,`ans_id`, `a1`, `a2`, `a3`, `a4`) VALUES (NULL, '$questions', '$ans_id', '$a1', '$a2', '$a3', '$a4');";
            $result = mysqli_query($conn, $query);
            if ($result) {
                header('location:admin-questions.php');
            }
        }

        // Delete Question

        if (isset($_GET['qdid'])) {

            $qdid = $_GET['qdid'];
            $query = "DELETE FROM `questions` WHERE `qid` = $qdid";
            $result = mysqli_query($conn, $query);
            if ($result) {
                header('location:admin-questions.php');
            }
        }

        // Update Question

        if (isset($_POST['update-question'])) {
            $questions = $_POST['questions'];
            $ans_id = $_POST['ans_id'];
            $qeid = $_POST['qid'];
            $a1 = $_POST['a1'];
            $a2 = $_POST['a2'];
            $a3 = $_POST['a3'];
            $a4 = $_POST['a4'];
            $query = "UPDATE `questions` SET `questions`='$questions',`ans_id`='$ans_id',`a1`='$a1',`a2`='$a2',`a3`='$a3',`a4`='$a4' WHERE `qid` = $qeid";
            $result = mysqli_query($conn, $query);
            if ($result) {
                header('location:admin-questions.php');
            }
        }

        if (isset($_GET['qeid'])) {
            $qeid = $_GET['qeid'];
            $update = true;
            $query = "SELECT * FROM `questions` WHERE qid=$qeid";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            $_SESSION['update'] = true;
            // if ($count == 1) {   
            //     $questions = $row['questions'];
            //     $ans_id = $row['ans_id'];
            //     $a1 = $_POST['a1'];
            //     $a2 = $_POST['a2'];
            //     $a3 = $_POST['a3'];
            //     $a4 = $_POST['a4'];
            // }
        ?>

            <!-- Adding & Updating Questions -->
            <div class="container mt-5 text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h2>update Your Question</h2>
                        <form action="admin-questions.php" method="POST">
                            <input type="hidden" name="qid" value="<?php echo $row['qid']; ?>">
                            <div class="form-group">
                                <label for="title">update Question</label>
                                <input type="text" value="<?php echo $row['questions']; ?>" class="form-control" id="a1" name="questions" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Anser-id</label>
                                <input type="text" value="<?php echo $row['ans_id']; ?>" class="form-control" id="ansid" name="ans_id" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Answer-1</label>
                                <input type="text" value="<?php echo $row['a1']; ?>" class="form-control" id="ansid" name="a1" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Answer-2</label>
                                <input type="text" value="<?php echo $row['a2'];  ?>" class="form-control" id="ansid" name="a2" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Answer-3</label>
                                <input type="text" value="<?php echo $row['a3'];  ?>" class="form-control" id="ansid" name="a3">
                            </div>
                            <div class="form-group">
                                <label for="title">Answer-4</label>
                                <input type="text" value="<?php echo $row['a4'];  ?>" class="form-control" id="ansid" name="a4">
                            </div>
                            <button type="submit" name="update-question" class="btn btn-warning">Update Question</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Add Your Question</h2>
                        <form action="admin-questions.php" method="post">
                            <div class="form-group">
                                <label for="title">Add Question</label>
                                <input type="text" class="form-control" id="a1" name="questions" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Anser-id</label>
                                <input type="text" class="form-control" id="ansid" name="ans_id" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Answer-1</label>
                                <input type="text" class="form-control" id="ansid" name="a1" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Answer-2</label>
                                <input type="text" class="form-control" id="ansid" name="a2" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Answer-3</label>
                                <input type="text" class="form-control" id="ansid" name="a3">
                            </div>
                            <div class="form-group">
                                <label for="title">Answer-4</label>
                                <input type="text" class="form-control" id="ansid" name="a4">
                            </div>
                            <button type="submit" name="add_question" class="btn btn-primary">Add Question</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>



        <!-- Data Table Display Data -->
        <?php
        $query = "SELECT * FROM `questions`";
        $result = mysqli_query($conn, $query);
        ?>
        <div class="container-fluid">
            <h1 class="mt-4">Questions</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item">Questions</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Questions
                </div>
                <div class="card-body">
                    <div class="table-responsive text-center">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Qid</th>
                                    <th>Question</th>
                                    <th>Ans-id</th>
                                    <th>A-1</th>
                                    <th>A-2</th>
                                    <th>A-3</th>
                                    <th>A-4</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Qid</th>
                                    <th>Question</th>
                                    <th>Ans-id</th>
                                    <th>A-1</th>
                                    <th>A-2</th>
                                    <th>A-3</th>
                                    <th>A-4</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['qid']; ?></td>
                                        <td><?php echo $row['questions']; ?></td>
                                        <td><?php echo $row['ans_id']; ?></td>
                                        <td><?php echo $row['a1']; ?></td>
                                        <td><?php echo $row['a2']; ?></td>
                                        <td><?php echo $row['a3']; ?></td>
                                        <td><?php echo $row['a4']; ?></td>
                                        <td><a href="admin-questions.php?qeid=<?php echo $row['qid']; ?>"><button type="button" class="btn btn-primary">Edit</button></a></th>
                                        <td><a href="admin-questions.php?qdid=<?php echo $row['qid']; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "admin-footer.php"; ?>