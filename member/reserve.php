<?php
require "../db_connect.php";
require "../message_display.php";
require "verify_member.php";
require "header_member.php";

?>

<html>

<head>
    <meta charset="utf-8">
    <title>Book Reservation</title>
    <<link rel="stylesheet" href="css/reserve_style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>

    <div class="container">
        <form class="r_form" action="#" method="post">
            <div class="row">
                <h4>Book Reservation</h4>
                <div class="input-group input-group-icon"><input type="text" placeholder="User Name" name="uname" required />
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group input-group-icon"><input type="email" placeholder="Email Address" name="email" required />
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="input-group input-group-icon"><input type="text" placeholder="ISBN" name="isbn" required />
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
                <div class="input-duration in">
                    <h4>Duration (1-5) Days</h4>
                    <input type="number" id="duration" name="duration" min="1" max="5" required>



                </div>
            </div>

            <div class="button">

                <a href="my_books.php">
                    <input type="button" value="Back" name="b_back" />
                </a>
                <input type="submit" href="#" name="b_reserve" value="Reserve">

            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['b_reserve'])) {
        $uName = $_POST['uname'];
        $uMail = $_POST['email'];
        $uIsbn = $_POST['isbn'];
        $bDuration = $_POST['duration'];

        $sql = "INSERT INTO reservation(uname, email, isbn, duration) VALUES('$uName','$uMail','$uIsbn','$bDuration') ";

        if (mysqli_query($con, $sql)) {
            echo "Successfully ! ";
        }
    }

    ?>

</body>

</html>