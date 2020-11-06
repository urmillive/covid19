<?php include "config.php"; ?>
<?php
if(!isset($_SESSION['username']))
{
    header('location:signup.php');
}
?>

<?php include "header.php"; ?>
<section class="corona_update container-fluid">
    <div class="my-3">
        <h3 class="text-uppercase text-center head-text">Covid-19 Live Daily Updates India</h3>
    </div>
    <div class="table-responsive">
        <table class="table text-center" id="tb1">

            <?php
            $data = file_get_contents("https://api.covid19india.org/data.json");

            $coronadata = json_decode($data, true); // true perameter use for assciated array
            // echo "<pre>";
            // print_r($dailyreport);
            // echo "</pre>";
            $totalcount=1;
            // echo $coronadata['cases_time_series'][201]['date'];
            $totalcount = count($coronadata['cases_time_series'])-$totalcount;
            // echo $totalcount;
            // exit;
            $i = 0;
            while ($totalcount >=$i) {
            ?>

                <tr>
                    <th class="text-left" colspan="6">Date & Month</th>
                </tr>
                <tr>
                    <td colspan="6" class="text-left"><?php echo $coronadata['cases_time_series'][$totalcount]['date'] . "<br>" ?></td>
                </tr>
                <tr class="text-capitalize text-white">
                    <th style="color: #fff; background: #2196f3;">total Confirmed</th>
                    <th style="color: #fff; background: #ffc107;">daily deceased</th>
                    <th style="color: #fff; background: #008C76FF;">daily Confirmed</th>
                    <th style="color: #fff; background: #e91e7f;">daily recovered</th>
                    <th style="color: #fff; background: #4caf50;">total recovered</th>
                    <th style="color: #fff; background: #EE2737FF;">total deceased</th>
                </tr>
                <tr>
                    <td style="background: #bed2f3;"><?php echo $coronadata['cases_time_series'][$totalcount]['totalconfirmed'] . "<br>"; ?></td>
                    <td style="background: #ffe493;"><?php echo $coronadata['cases_time_series'][$totalcount]['dailydeceased'] . "<br>"; ?></td>
                    <td style="background: #9ED9CCFF;"><?php echo $coronadata['cases_time_series'][$totalcount]['dailyconfirmed'] . "<br>"; ?></td>
                    <td style="background: #fc95c6;"><?php echo $coronadata['cases_time_series'][$totalcount]['dailyrecovered'] . "<br>"; ?></td>
                    <td style="background: #88d28b;"><?php echo $coronadata['cases_time_series'][$totalcount]['totalrecovered'] . "<br>"; ?></td>
                    <td style="background: #fb99a1;"><?php echo $coronadata['cases_time_series'][$totalcount]['totaldeceased'] . "<br>"; ?></td>
                </tr>
            <?php
                $totalcount--;

                // echo $dailyreport['cases_time_series'][$i]['dailyconfirmed'];
                // echo $dailyreport['cases_time_series'][$i]['dailydeceased'];
                // echo $dailyreport['cases_time_series'][$i]['dailyrecovered'];
                // echo $dailyreport['cases_time_series'][$i]['date'];
                // echo $dailyreport['cases_time_series'][$i]['totalconfirmed'];
                // echo $dailyreport['cases_time_series'][$i]['totaldeceased'];
                // echo $dailyreport['cases_time_series'][$i]['totalrecovered']."<br>";
            }

            ?>

        </table>
    </div>
</section>

<?php include "footer.php"; ?>