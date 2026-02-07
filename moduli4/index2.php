<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 20px;
    }

    h1 {
        color: #333;
    }

    hr {
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, #f3578e, #ff6f00, #f3578e);
        margin: 20px 0;
    }

    span {
        display: block;
        margin-bottom: 10px;
        padding: 10px;
        background-color: #f3578e;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(243, 87, 142, 0.5);
        color: #fff;
    }

    span.blue {
        background-color: #ff6f00;
        box-shadow: 0 2px 5px rgba(255, 111, 0, 0.5);
    }
</style>

<h1>Sports</h1>

<?php
$sport=["football","basketball","tennis"];

echo "<span class='red'>".$sport[0]."</span><hr>";


for ($i= 0; $i < count($sport); $i++) {
    echo "<span class='blue'>".$sport[$i]."</span><hr>";
}

array_push($sport,"volleyball");

for ($i= 0; $i < count($sport); $i++) {
    echo "<span class='blue'>".$sport[$i]."</span><hr>";
}


array_push($sport,"volleyball","baseball","cricket");

var_dump($sport);
array_pop($sport);

array_unshift($sport,"cricket");

for ($i= 0; $i < count($sport); $i++) {
    echo "<span class='blue'>".$sport[$i]."</span><hr>";
}

$numbers = []
?>