<?php
    include 'classes/postSeeder.php';
    $posts = wap\PostSeeder::seed();
    // var_dump($posts);
    // exit;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Social Media Application</title>
        <link rel="stylesheet" href="task1.css">
    </head>
    <body>
        <div id="content">
            <h1>Social Media</h1>
            <?php foreach($posts as $post) {?>
                <div id="post">
                    
                    <?= $post->getUser() ?> <br>
                    <?= $post->getMessage()?> <br>
                    
                </div>
            <?php } ?>
        </div>
    </body>
</html>