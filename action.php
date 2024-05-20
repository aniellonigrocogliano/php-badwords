<?php
$text=$_GET["text"];
$word=$_GET["word"];
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Badwords - Risultato</title>
</head>

<body class="container">
    <h2>Questo è il testo inserito <?php echo $text; ?> </h2>
   <p>Il testo inserito è lungo: <?php echo strlen($text); ?> caratteri</p>
   <h3>Questo è il testo censurato: <?php echo str_replace($word,"...",$text); ?> </h3>
    <p>Il testo censurato è lungo: <?php echo strlen(str_replace($word,"...",$text)); ?> caratteri</p>
</body>

</html>