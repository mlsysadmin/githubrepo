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
            background-color: #f0f8ff;
        }
        h1 {
            color: #ff69b4;
        }
        img {
            width: 300px;
            height: auto;
            border-radius: 15px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        p {
            font-size: 18px;
            color: #333;
        }
        .cat-fact {
            margin: 20px;
            padding: 10px;
            background-color: #f8f8f8;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>🐾 Meet Our Cute Cats 🐾</h1>

    <?php
    $catFacts = [
        "Cats sleep for 70% of their lives.",
        "A group of cats is called a clowder.",
        "Cats can make over 100 different sounds.",
        "The oldest cat lived for 38 years.",
        "Cats’ noses are as unique as human fingerprints."
    ];

    // Pick a random fact
    $randomFact = $catFacts[array_rand($catFacts)];

    // Display cat fact
    echo "<div class='cat-fact'><p>$randomFact</p></div>";
    ?>

    <img src="https://placekitten.com/300/300" alt="Cute Cat Image">

    <p>Here's a random cute cat fact just for you! 😺</p>
</body>
</html>
