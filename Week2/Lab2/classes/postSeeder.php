<?php
namespace wap;

use wap\Post;
include 'post.php';

class PostSeeder {
    public static function seed() {
        $posts = [];
        $posts[] = new Post("Jake", "I just joined! Add me");
        $posts[] = new Post("Luke", "I just joined! How do i use this?");
        $posts[] = new Post("Mary", "I just joined! Add me for free money");
        return $posts;
    }
}
?>