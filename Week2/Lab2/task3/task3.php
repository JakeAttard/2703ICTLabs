<?php namespace jakeattard;
    require_once 'classes/postSeeder.php';
    #require_once 'classes/commentSeeder.php';

    $posts = PostSeeder::seed();
    #$comments = CommentSeeder::seed();

    $posts[0] ->addComment("Josh", "Welcome to the social media!", "23/07/2019");
    $posts[0] ->addComment("Fred", "Welcome! About time you joined!", "23/07/2019");
    $posts[1] ->addComment("Brady", "Lets have some beers!", "23/07/2019");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Social Media Application</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="task3.css">
    </head>
    <body>
        <!-- NavBar-->
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <a class="navbar-brand ml-4" href="#">Social Network</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link mr-5" href="#">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-5" href="#">Friends</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-5" href="#">Login</a>
                    </li>
                </ul>
            </div>
            </nav>

        <!-- Content Area -->
        <div id="content">
            <h1>Social Media</h1>

            <?php foreach($posts as $post) {?>

                <h4 id="post-title">Post:</h4>

                <div id="post">
                    <strong><?= $post->getUser() ?></strong> <br>
                    <?= $post->getMessage() ?> <br>
                    <img src="<?= $post->getImage() ?>" width="100px" height="80" alt="User Profile Image"> <br>
                    <?= $post->getDate() ?> <br>
                    </div>

                    <hr>

                    <div id="comment-title">
                        <strong>Comments:</strong> <br>
                    </div>
                    
                    <?php foreach($post->getComments() as $comment) {?>
                        <div id="comment">
                            <strong><?= $comment->getUser() ?></strong> <br>
                            <?= $comment->getMessage() ?> <br>
                            <?= $comment->getDate() ?> <br>
                        </div>
                    <?php } ?>
                    <hr>
                
            <?php } ?>
        </div>
    </body>
</html>