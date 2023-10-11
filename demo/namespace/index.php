<?php
    namespace fub;
    include 'demo/animate.php';
    include 'demo/cat.php';
    include 'demo/dog.php';
    use foo as feline;
    use bar as canine;
    use animate;
    echo feline\Cat::says(), "<br />\n";
    echo canine\Dog::says(), "<br />\n";
    echo animate\Animal::breathes(), "<br />\n";
?>
