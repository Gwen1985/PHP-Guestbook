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

<div class="container">
    <?php
    require 'header.php';
    ?>
    <div class="row">
        <div class="col-xl">
            <div class="content">
                <div class="inputfields">
                    <form action="" method="post">
                        <label for="input">
                            TITLE: <input type="text" name="title" placeholder="Enter name here">
                            E-mail: <input type="text" name="email" placeholder="Enter E-mail here"><br>
                            Message: <input class="msgField" name="msgField" type="text" placeholder="Enter Message Here"><br>
                            <button type="submit" name="Send">Send</button><br>
                        </label>
                    </form>
                </div>
                <div class="row">
                    <div class="col-xl">
                        <div class="showMsg">
                            <?php
                            require 'ViewMsg.php';

                            if (isset($_POST["title"])) {
                                echo $_POST["title"] . "<br>";
                            }

                            if (isset($_POST["email"])) {
                                echo $_POST["email"] . "<br>";
                            }

                            if (isset($_POST["msgField"])) {
                                echo  $_POST["msgField"];
                            }
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