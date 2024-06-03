<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Related Human- Contact</title>
     <meta name="description" content="Explore the services of Related Motion - Your gateway to exceptional media excellence. Join us for a journey through TV & Commercial, Events & Concerts, Films & Documentaries.">
        <meta name="keywords" content="Related Motion, media excellence, TV & Commercial, Events & Concerts, Films & Documentaries">
        <link href="asset/favicon.ico" rel="icon">
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://relatedmotion.com/">
        <meta property="og:title" content="Related Motion">
        <meta property="og:description" content="Explore the services of Related Motion - Your gateway to exceptional media excellence. Join us for a journey through TV & Commercial, Events & Concerts, Films & Documentaries.">
        <meta property="og:image" content="https://relatedmotion.com/img/relatedLogo.png">
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://relatedmotion.com/">
        <meta property="twitter:title" content="Related Motion">
        <meta property="twitter:description" content="Explore the services of Related Motion - Your gateway to exceptional media excellence. Join us for a journey through TV & Commercial, Events & Concerts, Films & Documentaries.">
        <meta property="twitter:image" content="https://relatedmotion.com/img/relatedLogo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/submission.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Futura:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@400;500;700&display=swap">

</head>
<body>

    <?php $currentPage = "submission"; ?>
    <!-- navigation bar -->
    <?php require "./partials/nav.php" ?>

    <!-- first section -->
    <div class="first-section">
        <!-- container -->
        <div class="container">
            <div class="content">
                <span class="span-one">Media Challenge</span>
                <span class="span-two">CREATE THE FUTURE</span>
            </div>
        </div>
    </div>

    <!-- second -section -->
    <div class="second-section">
        <?php include('mail.php'); ?>
        <form method="POST" enctype="multipart/form-data" >
            <div class="container">
                <p class="bata">We would love to hear from you</p>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-one">
                                <p class="one">Full Name</p>
                                <input type="text" name="fullname" placeholder="First Name and Last Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-one">
                                <p class="one">Areas of Interest</p>
                                <!-- <input type="text" placeholder="Select your areas of interest"> -->
                                <select name="area_of_interest" id="" style="
                                width: 100%; 
                                height: 50px; 
                                padding: 10px, 10px, 10px, 15px;
                                border-radius: 6px;
                                outline: none;
                                border: 0.5px solid #707070;
                                box-shadow: 1px 1px 3px 0.5px lightgray;
                                font-family: Nunito;
                                font-size: 14px;
                                font-weight: 400;
                                line-height: 19px;
                                letter-spacing: 0em;
                                text-align: left;
                                "
                                >
                                    <option value="cinematography">Cinematography</option>
                                    <option value="photography">Photography</option>
                                    <option value="editing">Editing</option>
                                    <option value="directing">Directing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-one">
                                <p class="one">Upload A Photo</p>
                                <input class="move_down" name="photo" type="file" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-one">
                                <p class="one">Upload A Valid ID</p>
                                <input class="move_down" name="id" type="file" required>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="box-one">
                                <p class="one">Upload CV</p>
                                <input class="move_down" name="cv" type="file" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="box-one">
                                <p class="one">Profession</p>
                                <!-- <input type="text" placeholder="Select your areas of interest"> -->
                                <select name="profession" id="" style="
                                width: 100%; 
                                height: 50px; 
                                padding: 10px, 10px, 10px, 15px;
                                border-radius: 6px;
                                outline: none;
                                border: 0.5px solid #707070;
                                box-shadow: 1px 1px 3px 0.5px lightgray;
                                font-family: Nunito;
                                font-size: 14px;
                                font-weight: 400;
                                line-height: 19px;
                                letter-spacing: 0em;
                                text-align: left;
                                "
                                >
                                    <option value="cinematographer">Cinematographer</option>
                                    <option value="photographer">Photographer</option>
                                    <option value="editor">Editor</option>
                                    <option value="director">Director</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box-one">
                                <p class="one">links to your portfolio</p>
                                <input type="text" name="portfolio_link" placeholder="www.yourportfoliolink.com">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-area">
                    <p>Short bio (Tell us something unique about you)</p>
                    <textarea name="bio" id="" cols="30" rows="10" placeholder="Type your message here"></textarea>
                </div>
                <div class="text-area">
                    <p>Why do you want to participate in this challenge?</p>
                    <textarea name="why_participating" id="" cols="30" rows="10" placeholder="Type your message here"></textarea>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box-one">
                                <p class="one">Address (Current Location)</p>
                                <input type="text" name="address" placeholder="No. example street, Lagos Nigeria.">
                            </div>
                        </div>
                    </div>
                </div>
                <p>N.B.  shortlisted applicants must be available in Lagos for during the duration of the challenge</p>
                <div class="button">
                    <button type="submit" name="proceed">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- third section -->
    <div class="third-section">
        <div class="container">
            <p class="bata">Reach out to Us directly</p>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="box-one">
                            <div class="image">
                                <img style="filter: grayscale(100%) brightness(0%);" src="./asset/contact-two.png" alt="human-related-image">
                            </div>
                            <p class="one">Office Address</p>
                            <p class="two">32 Theophilus Orji Street, off Fola Osibo Street, Lekki, Lagos</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box-one">
                            <div class="image">
                                <img style="filter: grayscale(100%) brightness(0%);" src="./asset/contact-three.png" alt="human-related-image">
                            </div>
                            <p class="one">Email Address</p>
                            <p class="two">Info@relatedmotion.com</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box-one">
                            <div class="image">
                                <img style="filter: grayscale(100%) brightness(0%);" src="./asset/contact-four.png" alt="human-related-image">
                            </div>
                            <p class="one">Phone number</p>
                            <p class="two">+234 909 367 8040</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- fourth section -->
    <div class="fourth-section mt-5 mb-5">
        <div class="container">
            <div class="content">
                <img style="filter: grayscale(100%) brightness(0%);" src="./asset/about-facebook.png" alt="related-human-about">
                <img style="filter: grayscale(100%) brightness(0%);" src="./asset/about-instagram.png" alt="related-human-about">
                <img style="filter: grayscale(100%) brightness(0%);" src="./asset/about-link.png" alt="related-human-about">
                <img style="filter: grayscale(100%) brightness(0%);" src="./asset/about-twitter.png" alt="related-human-about">
            </div>
        </div>
    </div>




    <!-- footer -->
    <?php require './partials/footer.php' ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
</body>
</html>