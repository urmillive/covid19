<?php include "config.php"; ?>
<?php
if (!isset($_SESSION['username'])) {
    header('location:signup.php');
}
?>
<?php include "header.php"; ?>
<?php
$data = file_get_contents("https://api.covid19india.org/data.json");
$coronadata = json_decode($data, true); // true use for associative array from object
$totalcase = count($coronadata['statewise']);

?>
<div class="container-fluid my-5 text-center">
    <div class="table-responsive">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Last-Update-Time</th>
                    <th scope="col">State</th>
                    <th scope="col">confirmed</th>
                    <th scope="col">Active</th>
                    <th scope="col">Recovered</th>
                    <th scope="col">Deaths</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $i = 1;
                while ($i < $totalcase) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo $coronadata['statewise'][$i]['lastupdatedtime'] ?></td>
                        <td class="text-center"><?php echo $coronadata['statewise'][$i]['state'] ?></td>
                        <td class="text-center"><?php echo $coronadata['statewise'][$i]['confirmed'] ?></td>
                        <td class="text-center"><?php echo $coronadata['statewise'][$i]['active'] ?></td>
                        <td class="text-center"><?php echo $coronadata['statewise'][$i]['recovered'] ?></td>
                        <td class="text-center"><?php echo $coronadata['statewise'][$i]['deaths'] ?></td>

                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "footer.php"; ?>