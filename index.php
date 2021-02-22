<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/opticalStyle.css">
    <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet">
    <script src="js/jscript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>ABC Optical</title>

</head>

<body>
    <header>
        <div class="topBar">
            <div class="companyLogo">
                <img src="./images/logo-edited.png" alt="Company logo of black glasses">
            </div>
        </div>
    </header>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <ul class="top-nav">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="pages/tablePage.php">Services</a></li>
            <li><a href="pages/blogPage.php">Blog</a></li>
            <li><a href="pages/formPage.php">Contact Us</a></li>
            <li><a href="pages/browsePage.php">Browse Lenses</a></li>
        </ul>
    </nav>
    <div class="overlayImage"></div>
    <main>
        <div class="mainContainer">
            <section class="contentSection">
                <article class="aboutContent">
                    <h1>About Us</h1>
                    <p class="paraContent">We sell ophthalmic glasses, sunglasses and contact lenses. We specialise in
                        optical requirements
                        for
                        children. We are a Brisbane based company which is well regarded locally. We are recognised as
                        being
                        able to manage children’s needs with a professional caring approach. We employ two full-time,
                        in-store
                        qualified optometrists able to diagnose and treat a number of eye related problems. Our
                        optometrists
                        strive to make a positive difference to the health and well-being of our customers, endeavouring
                        to
                        obtain the best visual outcome so that customers realise their full potential in work, study,
                        sport
                        and
                        leisure.
                    </p>
                    <figure class="imageColumn">
                        <div class="kidPortrait">
                            <img src="images/portraitGirl.jpg" alt="Happy girl posing wearing cateye glasses in front of pink background">
                            <figcaption>Caption</figcaption>
                        </div>
                        <div class="kidPortrait">
                            <img src="images/portraitYellowBoy.jpg" alt="Excited boy smiling in front of yellow background wearing round glasses">
                            <figcaption>Caption</figcaption>
                        </div>
                        <div class="kidPortrait">
                            <img src="images/portraitBlueBoy.jpg" alt="Boy smiling in front of light blue background wearing black glasses">
                            <figcaption>Caption</figcaption>
                        </div>
                    </figure>
                </article>
            </section>
            <section class="contentSection">
                <div class="eyewearBrands">
                    <h2>Eyewear</h2>
                    <p>We stock a comprehensive range of frames from the following brands:</p>
                    <img src="images/brands.jpg" alt="List of all brands ABC Optical does">
                </div>
            </section>
        </div>
    </main>
    <?php include('./includes/footer.php'); ?>
</body>

</html>