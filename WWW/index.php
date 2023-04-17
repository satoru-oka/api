<?php

// Entering a name returns the age.
if (!empty($_GET["name"])) {
    $response = file_get_contents("https://api.agify.io?name={$_GET['name']}");
    $data = json_decode($response, true);
    $age = $data["age"];
}

// $response = file_get_contents("https://example.com");
// $response = file_get_contents("https://randomuser.me/api");

// $data = json_decode($response, true);

// accessing arrays
// echo $data["results"][0]["name"]["first"], "\n";
// array
// var_dump($data);
// json
// echo $response;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<body>

    <?php if (isset($age)): ?>
        Age: <?= $age ?>
    <?php endif; ?>
    
    <form action="">
        <label for="name">Name</label>
        <input name="name" id="name">

        <button>Guess age</button>
    </form>

</body>
</html>