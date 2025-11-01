<?php 
    $number = filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <title>Multiplication Flash Cards</title>
    </head> 
    
    <body>
        <?php require("./view/header.php"); ?>
        <?php 
            if ($number) {
                require("view/results.php");
            } else {
                require("view/form.php");
            }
        ?>
        <?php require("./view/footer.php"); ?>
    </body>
</html>