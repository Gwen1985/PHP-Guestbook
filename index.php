<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="Style/style.css">
</head>
<body>

<div class="container">
    <?php
    require 'header.php';
    ?>
    <div class="row">
        <div class="col-xl">
            <div class="content">
                <div class="inputfields">
                    <form action="" method="post">
                        Name: <input type="text" name="name" placeholder="Enter name here">
                        E-mail: <input type="text" name="email" placeholder="Enter E-mail here"><br>
                        Message: <br><input class="msgField" type="text" placeholder="Enter Message Here"><br>
                        <input type="submit" formaction="post"><br>
                    </form>
                </div>
                <div class="row">
                    <div class="col-xl">
                        <div class="showMsg">
                            <?php
                            require 'viewMsg.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require 'footer.php';
    ?>

</div>

<footer>
</footer>
</body>
</html>