<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fati</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .dog-container {
            border: 2px solid #333;
            padding: 15px;
            margin-bottom: 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .dog-name {
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .dog-origin {
            color: #888;
            font-size: 16px;
        }

        .dog-life-span {
            font-size: 16px;
        }

        .iphone {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 2px solid #333;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .iphone .info {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .grade {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 2px solid #333;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php
    $dogs = [
        array("Husky", "Siberia", 15),
        array("Bulldog", "England", 10),
        array("Chihuahua", "Mexico", 20)
    ];

    foreach ($dogs as $dog) {
        echo '<div class="dog-container">';
        echo '  <div class="dog-name">' . $dog[0] . '</div>';
        echo '  <div class="dog-origin">Origin: ' . $dog[1] . '</div>';
        echo '  <div class="dog-life-span">Life Span: ' . $dog[2] . ' years</div>';
        echo '</div>';
    }

    $phones = [
        array(
            'name' => 'iphone',
            'stock' => 5,
            'sold' => 2
        ),
        array(
            'name' => 'iphone',
            'stock' => 10,
            'sold' => 5
        ),
        array(
            'name' => 'iphone',
            'stock' => 0,
            'sold' => 10
        )
    ];

    foreach ($phones as $phone) {
        echo '<div class="iphone">';
        echo '  <div class="info">';
        echo '    <div>' . $phone['name'] . '</div>';
        echo '    <div>Stock: ' . $phone['stock'] . '</div>';
        echo '    <div>Sold: ' . $phone['sold'] . '</div>';
        echo '  </div>';
        echo '</div>';
    }

    $grades = [
        "Matematike" => 3,
        "Biologji" => 2,
        "Histori" => 5,
        "Muzik" => 4
    ];

    foreach ($grades as $subject => $grade) {
        echo '<div class="grade">';
        echo '  <div>' . $subject . '</div>';
        echo '  <div>' . $grade . '</div>';
        echo '</div>';
    }
    ?>
</body>
</html>