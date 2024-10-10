<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cute Cats</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #6F4E37;
        }
        h1 {
            color: #FAF5EF;
        }
        img {
            width: 300px;
            height: auto;
            border-radius: 15px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        p {
            font-size: 14px;
            color: #FAF5EF;
        }
        .cat-fact {
            margin: 0px;
            padding: 0px;
            background-color: #6F4E37;
            border-radius: 2px;
            display: inline-block;
            box-shadow: 20px 20px 24px rgba(0, 0, 0, 0.1);
        }
        .big-emoji {
            font-size: 60px; /* Adjust this size for bigger emoji */
        }
    </style>
</head>
<body>
    <h1 class="big-emoji">🐾🐈🐾</h1> <!-- Big Cat Emoji -->

    <?php
    $catFacts = [
        "Cats sleep for 70% of their lives.",
        "A group of cats is called a clowder.",
        "Cats can make over 100 different sounds.",
        "The oldest cat lived for 38 years.",
        "Kate is a cutie.",
        "Rexyl is juts.",
        "Regan is gay.",
        "Regan has a crush on ma'am shek.",
        "Regan always snore.",
        "Regan didn't brush his teeth this morning.",
        "Regan farts a lot.",
        "Regan likes men.",
        "Regan iniwan.",
        "Oscar is scared of Beyonce.",
        "Cats’ noses are as unique as human fingerprints."
    ];

    // Pick a random fact
    $randomFact = $catFacts[array_rand($catFacts)];

    // Display cat fact
    echo "<div class='cat-fact'><p>$randomFact</p></div>";
    ?>
