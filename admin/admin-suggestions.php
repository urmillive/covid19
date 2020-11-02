<?php include "admin-header.php";?>
<?php
if(!isset($_SESSION["admin_id"]))
{
    header('location:admin-login.php');
}
?>

<?php

// Delete Suggestions

if (isset($_GET['sdid'])) {
    $sdid = $_GET['sdid'];
    $query = "DELETE FROM `suggestions` WHERE `id` = $sdid";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('location:admin-suggestions.php');
    }
}

$query = "SELECT * FROM `suggestions`";
$result = mysqli_query($conn, $query);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Users</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item">Suggestions</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Suggestions
                </div>
                <div class="card-body">
                    <div class="table-responsive text-center">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>POST</th>
                                    <th>Time</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>POST</th>
                                    <th>Time</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['post']; ?></td>
                                    <td><?php echo $row['ttmp']; ?></td>
                                    <td><a href="admin-suggestions.php?sdid=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
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