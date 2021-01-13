<?php

// fetch data fro pdo
require_once "lib/pdo.php";

//fetch data from html functions
require_once "lib/html_fucntion.php";

// print head function
PrintHead();

// print jumbo function
PrintJumbo( $title = "City Dreams" ,
    $subtitle = "Beste steden om naartoe te reizen!" );


?>

<div class="container">
    <div class="row">
        <?php

        $rows = GetData( "select * from images" );
        $template = file_get_contents("templates/columnsteden.html");

        $html = MergeViewWithData( $template, $rows );
        print $html;

        ?>
    </div>
</div>

</body>
</html>