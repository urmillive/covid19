<?php include "header.php"; ?>
<?php
if (!isset($_SESSION['username'])) {
    header('location:signup.php');
}
?>
<?php
if (isset($_POST['contact'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $reason = $_POST['reason'];

    //  Real Escape Streing

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $mobile = mysqli_real_escape_string($conn, $mobile);
    $reason = mysqli_real_escape_string($conn, $reason);

    if ($name == '' || $email == '' || $mobile == '' || $reason == '') {
        echo "Please Enter All Data!";
    } else {

        $query = "INSERT INTO `contactus` (`id`, `name`, `email`, `mobile`, `reason`) VALUES (NULL, '$name', '$email', '$mobile', '$reason');";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header('location:index.php');
        } else {
            echo mysqli_error($conn);
        }
    }
}

?>

<link rel="stylesheet" href="css/contact.css">
<div class="imgbox">
    <img id="contact-img" src="./images/svg/" alt="Stay Safe">
</div>

<div class="container text-center my-5">
    <form class="needs-validation" novalidate method="post" action="contactus.php">
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationCustom01">Name</label>
                <input type="text" name="name" class="form-control" id="validationCustom01" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
        </div>
        <!--reason  -->

        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationCustom01">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="validationCustom01" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group green-border-focus">
                    <label for="exampleFormControlTextarea5">Project Details</label>
                    <textarea class="form-control" id="exampleFormControlTextarea5" name="reason" rows="3" required></textarea>
                </div>
            </div>
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
        <button class="btn btn-primary" name="contact" type="submit">Submit</button>
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

<?php include 'footer.php'; ?>