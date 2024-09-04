<?php


$text = $_GET["text"];
$word = $_GET["word"];

$new_text =  str_replace($word, "***", $text);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-request</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <p>vecchio testo:<?php echo $text ?></p>
                        <h5>La lunghezza del testo è <?php echo strlen($text) ?></h5>
                    </div>
                    <div class="col-6">
                        <p>testo nuovo:<?php echo $new_text ?></p>
                        <h5>La lunghezza del testo è <?php echo strlen($new_text) ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>