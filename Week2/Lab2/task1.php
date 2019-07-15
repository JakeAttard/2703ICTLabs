<?php
    $posts = array();
    $posts[] = array(
        'name' => 'Jake',
        'message' => 'This is my first post',
        'image' => 'images/p1.jpg',
        'date' => '15/07/2019'
    );
    $posts[] = array(
        'name' => 'Mary',
        'message' => 'Its a cold evening',
        'image' => 'images/p2.png',
        'date' => '16/07/2019'
    );
    $posts[] = array(
        'name' => 'Luke',
        'message' => 'Winter arrived',
        'image' => 'images/p3.png',
        'date' => '17/07/2019'
    );

    //var_dump($posts);
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
                    <img src="<?= $post['image'] ?>" width="100px" height="80" alt="User Profile Image"> <br>
                    <?= $post['name'] ?> <br>
                    <?= $post['message'] ?> <br>
                    <?= $post['date'] ?> <br>
                </div>
            <?php } ?>
        </div>
    </body>
</html>