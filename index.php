<?php include "config.php"; ?>
<?php
if (!isset($_SESSION['username'])) {
    header('location:signup.php');
} else {
?>
    <?php include "header.php"; ?>
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/top.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">


    <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mr-auto text-center text-lg-left">
                    <span class="d-block subheading">Covid-19 Awareness</span>
                    <h1 class="heading mb-3">Stay Safe. Stay Home.</h1>
                    <p class="mb-5">Social distancing is the best medicine for Corona.</p>
                    <p class="mb-4"><a href="#bg-prevention" class="btn btn-primary">How to prevent</a></p>
                </div>
                <div class="col-lg-6">
                    <figure class="illustration">
                        <img src="images/illustration.png" alt="Image" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>


    <!--Tag line section-->

    <!--tagline section end-->
    <!-- About Section -->
    <div id="bg-about" class="container-fluid text-white py-5">
        <div class="section-header text-center mb-5 mt-4">
            <h1 class="head-text">About Covid-19(Corona Virus)</h1>
        </div>
        <div class="row pt-4">
            <div class="col-lg-6 col-md-6 col-12">
                <img id="info-gif" src="./images/gif/info.gif" alt="" srcset="">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="text-center col-my-2"><strong>What is Covid-19 ?</strong></h2>
                <h5 class="my-2">Covid-19 is the infectious disease caused by the most recently discovered coronavirus.
                </h5>
                <br>
                <h5>This new virus and disease were unknown before the outbreak began in Wuhan,China,in December
                    2019.</h5>
                <br>
                <h5>Coronaviruses a large family of viruses which cause illness in animals or humans.In humans,several
                    coronaviruses are known to cause respiratory infections ranging from the common cold to more severe
                    diseases such as Middle East Respiratory Syndrome(MERS) and Severe Acute Respiratory
                    Syndrome(SARS).The most recently discovered causes coronavirus disease Covid-19.</h5>
            </div>
        </div>
    </div>
    <!-- About Section End -->
    <!-- Symptoms Section-->
    <div id="bg-symptoms" class="container-fluid py-5" id="symptomsid">
        <div class="section_header text-center mb-5">
            <h1 class="head-text text-white">Coronavirus symptoms</h1>
        </div>
        <div class="container text-white">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="./images/symptoms/cough.png" class="img-fluid" alt="" height="120" width="120">
                        <figcaption>Cough</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="./images/symptoms/nose.png" class="img-fluid" alt="" height="120" width="120">
                        <figcaption>Runny Nose</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="./images/symptoms/fever.png" class="img-fluid" alt="" height="120" width="120">
                        <figcaption>Fever</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="./images/symptoms/cold.png" class="img-fluid" alt="" height="120" width="120">
                        <figcaption>Cold</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="./images/symptoms/tiredness.png" class="img-fluid" alt="" height="120" width="120">
                        <figcaption>Tiredness</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="./images/symptoms/shortbreath.png" class="img-fluid" alt="" height="120" width="120">
                        <figcaption>difficulty breathing (severe cases)</figcaption>
                    </figure>
                </div>
            </div>
        </div>

    </div>

    <!-- Symptoms Section End -->

    <!-- Prevention Section  -->
    <div id="bg-prevention" class="container-fluid sub_section py-5">
        <div class="section_header text-center mb-5">
            <h1 class="head-text text-white">6 Step Prevention Against CoronaVirus</h1>
        </div>
        <div class="container text-white">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="./images/prevention/handwash.png" class="img-fluid" alt="" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Wash your hands regularyly for 20 seconds,with soap and water or alcohol-based hand rub.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="./images/prevention/mask.png" class="img-fluid" alt="" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you Cough or
                                sneeze.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="./images/prevention/socialdistance.png" class="img-fluid" alt="" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Avoid close contact(1 meter or 3 feet) with people who are unwell.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="./images/prevention/stayhome.png" class="img-fluid" alt="" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay home and self-isolate from others in the household if you feel unwell.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="./images/prevention/tv.png" class="img-fluid" alt="" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay information by watching news & follow the recommended practices.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="./images/prevention/cough.png" class="img-fluid" alt="" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>If you've fever,cough,and difficulty breathing,seek medical care early.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Prevention Section End-->
    </div>










<?php
}
?>

<?php include "footer.php"; ?>