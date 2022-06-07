<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>

    <?php
    $text = "I do solemnly swear by Almighty God and His Name, and in free and voluntary desire, to serve as a Knight of Malta of the most holy Order of Saint John of Jerusalem. I do swear by the Eternal Power of the Trinity, to be both a true and chivalric Knight, to obey my Commanders and to aid my bretheren. I also swear by all that is holy and dear unto me, to aid those less fortunate than I, to relieve the distress of the world and to fulfill my knightly obligations. This oath do I give of my own free and independent will, so help me God! Amen !";
    $text_lenght = strlen($text);
    $bad_word = $_GET['word'];
    $censured_text = str_replace($bad_word, "***", $text);
    ?>

    <h2> <?php echo $text ?> <br> Lunghezza: <?php echo $text_lenght ?> </h2>
    <h2> <?php echo $censured_text ?> <br> Lunghezza: <?php echo $text_lenght ?> </h2>

</body>

</html>