<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/opticalStyle.css">
    <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet">
    <script src="../js/jscript.js"></script>
    <title>Form</title>
</head>

<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/navigation.php'); ?>
    <main>
        <div class="mainContainer">
            <div class="formContent">
                <h1>Contact Us</h1>
                <form class="contactForm">
                    <label for="fname"><i class="fa fa-user"></i>Full Name:</label><br>
                    <input type="text" name="name"><br>
                    <label for="email"><i class="fas fa-envelope"></i>Email:</label><br>
                    <input type="text" name="email"><br>
                    <label for="comments">Comments:</label><br>
                    <textarea name="comments" cols="30" rows="10"></textarea><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </main>
    <?php include('../includes/footer.php'); ?>
</body>

</html>