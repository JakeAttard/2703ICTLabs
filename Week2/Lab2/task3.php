<?php
    include 'classes/postSeeder.php';
    $posts = wap\PostSeeder::seed();
    $posts[0] ->addComment("Josh", "Welcome to the social media!");
    $posts[0] ->addComment("Fred", "Welcome! About time you joined!");
    $posts[1] ->addComment("Brady", "Lets have some beers!");
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
                    <?= $post->getMessage() ?> <br>
                    <img src="<?= $post->getImage() ?>" width="100px" height="80" alt="User Profile Image"> <br>
                    <?= $post->getDate() ?> <br>
                    <strong>Comments:</strong> <br>
                    <?php $comments = $post->getComment();
                    foreach($comments as $comment) {?>
                        <?= $comment["user"] ?> said <?= $comment["comment"] ?> <br>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </body>
</html>