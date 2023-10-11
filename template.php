<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if (isset($title)) {
                echo $title;
            } else {
                echo "Advanced Web Programming";
            }
        ?>
    </title>
</head>
<body>
    <h1>
        <?php
            if (isset($heading)) {
                echo $heading;
            } else {
                echo "Advanced Web Programming";
            }
        ?>
    </h1>
    <p>
        <?php
            if (isset($content)) {
                echo $content;
            } else {
                echo "This is the content of the page";
            }
        ?>
    </p>
    
</body>
</html>