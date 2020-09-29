<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php
require 'header.php';
?>
<div class="container sticky-top">
    <div class="row">
        <div class="col col-l">
            <form method="post">
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname">
                <label for="lname">Last name:</label>
                <input required type="text" id="lname" name="lname">
                <label for="msgBox">Message:</label><br>
                <input required type="text" class="bg-primary d-block " id="msgBox" name="msgBox">
                <input type="submit" value="Post Message" class="btn btn-primary rounded-pill"><br>
            </form>
        </div>
        <div class="col col-l">
            <div class="showMsg">
                <?php
                session_start();
                require 'ViewMsg.php';
                ?>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>

</body>
</html>

