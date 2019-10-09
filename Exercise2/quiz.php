<?php
    $question1 = $_POST["question1"];    
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $question4 = $_POST["question4"];
    $question5 = $_POST["question5"];
    $pts = 0;
    $total = 0;

    echo "Question1: What is the capital of Kansas?" . "<br>";
    echo "You answered: " . $question1 . "<br>";
    echo "Correct answer: topeka" . "<br><br>";

    echo "Question1: What is the capital of Georgia?" . "<br>";
    echo "You answered: " . $question2 . "<br>";
    echo "Correct answer: atlanta" . "<br><br>";

    echo "Question1: What is the capital of Florida?" . "<br>";
    echo "You answered: " . $question3 . "<br>";
    echo "Correct answer: tallahassee" . "<br><br>";

    echo "Question1: What is the capital of Tennessee?" . "<br>";
    echo "You answered: " . $question4 . "<br>";
    echo "Correct answer: nashville" . "<br><br>";

    echo "Question1: What is the capital of Hawaii?" . "<br>";
    echo "You answered: " . $question5 . "<br>";
    echo "Correct answer: honolulu" . "<br><br>";


    if ($question1 == "topeka"){
        $pts = $pts + 25;
        $total = $total + 1;
    }
    if ($question2 == "atlanta"){
        $pts = $pts + 25;
        $total = $total + 1;
    }
    if ($question3 == "tallahassee"){
        $pts = $pts + 25;
        $total = $total + 1;
    }
    if ($question4 == "nashville"){
        $pts = $pts + 25;
        $total = $total + 1;
    }
    if ($question5 == "honolulu"){
        $pts = $pts + 25;
        $total = $total + 1;
    }

    echo "You answered " . $total . " out of 5 Questions Correctly." . "<br>";
    echo "Score: " . (($pts / 125) * 100) . "%";
?>