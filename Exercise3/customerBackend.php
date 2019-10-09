<?php
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $qty1 = $_POST["q1"];
    $qty2 = $_POST["q2"];
    $qty3 = $_POST["q3"];
    $ship = $_POST["shipping"];

    echo "
        <head>
        <title>Recipt</title>
            <style>
                body {
                    text-align: center;
                }
            </style>
        </head>
    ";

    if ($ship == "$5.00 three day"){
        $cost = 5;
    }

    if ($ship == "$50.00 over night"){
        $cost = 50;
    }

    echo "<body>";
    echo "Welcome " . $user . ", your password is " . $pass . "." . "<br>";
    echo "<br><br>";
    echo "iPhone qty: " . $qty1 . "  Total: $" . ((int)$qty1 * 600) . "<br>";
    echo "iPad qty: " . $qty2 . "  Total: $" . ((int)$qty2 * 400) . "<br>";
    echo "Mac qty: " . $qty3 . "  Total: $" . ((int)$qty3 * 1000) . "<br>";
    echo "Shipping: " . $ship . "<br>";
    echo "Total Bill: $" . ($cost + (int)$qty1 * 600 + (int)$qty2 * 400 + (int)$qty3 * 1000);
    echo "<body>";

?>