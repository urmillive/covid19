<?php include "config.php"; ?>
<?php
if (!isset($_SESSION['username'])) {
  header('location:signup.php');
}
?>

<?php include "header.php"; ?>
<?php
$query = "SELECT * FROM `questions`";
$result = mysqli_query($conn, $query);

if (isset($_POST['subqna'])) {
  $postans = $_POST["ans"];
  $query = "SELECT * FROM `questions`";
  $result = mysqli_query($conn, $query);
  $answers = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $answers[$row["qid"]] = $row["ans_id"];
  }
  $total_points = count($postans);
  $obtain_points = 0;
  foreach ($postans as $que => $ans) {
    if ($ans == $answers[$que]) {
      $obtain_points += 1;
    }
  }

  $yourtotal = ($obtain_points * 100)/$total_points;


?>

  <!-- Show Answer -->

  <div class="jumbotron text-center">
    <h1 class="display-4">Your Total</h1>
    <p class="lead">If your score in less than 60% then you should follow these instructions..</p>
    <a class="btn btn-primary btn-lg" href="./blogs.php" role="button">Instructions</a>
    <h1 class="mt-4"><?php echo $yourtotal."%";
    ?>
    <?php include "footer.php";
     exit;
    ?>
     </h1>
    <hr class="my-4">
  </div>

<?php
}

?>
<!-- Question Section start -->
<div class="container-fluid">
  <div class="jumbotron bg-dark my-5  text-center">
    <h1 class="display-4 text-warning head-text">Questions for you</h1>
    <p class="lead text-white">give this Simple Test and you'll get your results..</p>
    <hr class="my-4 bg-primary">
    <p class="text-primary">If you wanna give this test then all Questions are necessary.</p>
    <a class="btn btn-primary btn-lg" href="dailycases.php" role="button">Today's Live</a>
  </div>
</div>

<!-- Questions -->
<div class="container my-5 text-center">
  <div class="row">
    <div class="col-md-12">
      <form class="form-check" method="POST">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <div class="jumbotron">
            <h5 class="my-3"><?php echo $row['questions'] ?></h5>
            <?php
            if ($row['a1'] != "") {
            ?>
              <div class="custom-control custom-radio">
                <input type="radio" id="ans-<?php echo $row['qid']; ?>-1" class="custom-control-input" name="ans[<?php echo $row['qid'] ?>]" value="1" required>
                <label class="custom-control-label" for="ans-<?php echo $row['qid']; ?>-1"><?php echo $row['a1']; ?></label>
              </div>
            <?php
            }
            ?>

            <?php
            if ($row['a2'] != "") {
            ?>
              <div class="custom-control custom-radio">
                <input type="radio" id="ans-<?php echo $row['qid']; ?>-2" class="custom-control-input" name="ans[<?php echo $row['qid'] ?>]" value="2" required>
                <label class="custom-control-label" for="ans-<?php echo $row['qid']; ?>-2"><?php echo $row['a2']; ?></label>
              </div>
            <?php
            }
            ?>


            <?php
            if ($row['a3'] != "") {
            ?>
              <div class="custom-control custom-radio">
                <input type="radio" id="ans-<?php echo $row['qid']; ?>-3" class="custom-control-input" name="ans[<?php echo $row['qid'] ?>]" value="3">
                <label class="custom-control-label" for="ans-<?php echo $row['qid']; ?>-3"><?php echo $row['a3']; ?></label>
              </div>
            <?php
            }
            ?>


            <?php
            if ($row['a4'] != "") {
            ?>
              <div class="custom-control custom-radio">
                <input type="radio" id="ans-<?php echo $row['qid']; ?>-4" class="custom-control-input" name="ans[<?php echo $row['qid'] ?>]" value="4">
                <label class="custom-control-label" for="ans-<?php echo $row['qid']; ?>-4"><?php echo $row['a4']; ?></label>
              </div>
            <?php
            }
            ?>
          </div>
        <?php
        }
        ?>
        <button type="submit" name="subqna" class="btn btn-success my-5">Submit</button>
      </form>
    </div>
  </div>
</div>


<?php include "footer.php"; ?>