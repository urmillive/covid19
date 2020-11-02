<?php include "header.php"; ?>
<?php
if (!isset($_SESSION['username'])) {
    header('location:signup.php');
}
?>
<?php
if (isset($_POST['save'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $reason = $_POST['reason'];
    
    // Real Escape String
    $fname = mysqli_real_escape_string($conn,$fname);
    $lname = mysqli_real_escape_string($conn,$lname);
    $username = mysqli_real_escape_string($conn,$username);
    $email = mysqli_real_escape_string($conn,$email);
    $city = mysqli_real_escape_string($conn,$city);
    $zip = mysqli_real_escape_string($conn,$zip);
    $reason = mysqli_real_escape_string($conn,$reason);

    if ($fname == '' || $lname == '' || $username == '' || $email == '' || $city == '' || $zip == '' || $reason == '') {
        echo "Please Enter All Data!";
    } else {

        $query = "INSERT INTO `contra` (`id`, `fname`, `lname`, `username`,`email`, `city`, `zip`, `reason`) VALUES (NULL, '$fname', '$lname', '$username','$email', '$city','$zip', '$reason');";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header('location:index.php');
        } else {
            echo mysqli_error($conn);
        }
    }
}

?>


<div class="container text-center my-5">
    <form class="needs-validation" novalidate method="post" action="contribution.php">
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom01">First name</label>
                <input type="text" name="fname" class="form-control" id="validationCustom01" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom02">Last name</label>
                <input type="text" name="lname" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustomUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" name="username" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">City</label>
                <input type="text" name="city" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationTooltip05">Zip</label>
                <input type="text" name="zip" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
        </div>

        <!--reason  -->
        <div class="form-group green-border-focus">
            <label for="exampleFormControlTextarea5">Project Details</label>
            <textarea class="form-control" id="exampleFormControlTextarea5" name="reason" rows="3" required></textarea>
        </div>

        <!-- //reason -->
        <div class="form-group">
            <div class="form-check custom-control custom-checkbox form-check">
                <input class="form-check-input custom-control-input" type="checkbox" id="invalidCheck" required>
                <label class="custom-control-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
            </div>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
        <button class="btn btn-primary" name="save" type="submit">Submit</button>
</div>
</form>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>


</div>

<?php include './footer.php'; ?>