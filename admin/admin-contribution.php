<?php include "admin-header.php"; ?>
<?php
if (!isset($_SESSION["admin_id"])) {
    header('location:admin-login.php');
}
?>

<?php

// Delete Suggetions

if (isset($_GET['cdid'])) {
    $cdid = $_GET['cdid'];
    $query = "DELETE FROM `contra` WHERE `id` = $cdid";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('location:admin-contribution.php');
    }
}

$query = "SELECT * FROM `contra`";
$result = mysqli_query($conn, $query);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Users</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item">Contribution</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Contribution
                </div>
                <div class="card-body">
                    <div class="table-responsive text-center">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Fname</th>
                                    <th>Lname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>zip</th>
                                    <th>Reason</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>Fname</th>
                                    <th>Lname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>zip</th>
                                    <th>Reason</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['lname']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['city']; ?></td>
                                        <td><?php echo $row['zip']; ?></td>
                                        <td><?php echo $row['reason']; ?></td>
                                        <td><a href="admin-contribution.php?cdid=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
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