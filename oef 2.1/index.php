<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>Leuke plekken in Europa</h1>
    <p>Tips voor citytrips voor vrolijke vakantiegangers</p>
</div>

<div class="container">
    <div class="row">

        <?php

        $rows = GetData( "select * from images" );

        //loop over de afbeeldingen
        foreach ( $rows as $row )
        {
            $link_image = "img/" . $row['img_filename'];

            //de kolom met de titel en de afbeelding erin
            print '<div class="col-sm-4">';
            print '<h3>' . $row['img_title'] . '</h3>';
            print '<p>' .  $row['img_width'] . " x " . $row['img_height'] . ' pixels</p>';
            print '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>';
            print '<img class="img-fluid" src="' . $link_image . '">';
            print '</div>' ;
        }

        ?>

    </div>
</div>

</body>
</html>