<?php
namespace wap;

use wap\Post;
include 'post.php';

class PostSeeder {
    public static function seed() {
        $posts = [];
        $posts[] = new Post("Jake", "I just joined! Add me", "images/p1.jpg", "15/07/2019");
        $posts[] = new Post("Luke", "I just joined! How do i use this?", "images/p3.png", "16/07/2019");
        $posts[] = new Post("Mary", "I just joined! Add me for free money", "images/p2.png", "17/07/2019");
        return $posts;
    }
}
?>