<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.css">
    <title>Composing csv</title>
</head>
<body>
<div class="ui container">

<h1> Computer science figures </h1>

<div class="ui three column grid link cards">
    <?php

    $f = array_map('str_getcsv', file('./cs_figures.csv'));

    for($i = 1;$i<sizeof($f);$i++){
        include './data.php';
    }
    ?>
    </div>
    </div>
</body>
</html>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.js"></script>