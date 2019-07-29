<?php namespace jakeattard;

require_once('Comment.php');

// Post Class Created
class Post {
    protected $user;
    protected $message;
    protected $image;
    protected $date;

    protected $comments = [];

    // Post Constructor
    function __construct($user, $message, $image, $date) {
        $this->user = $user;
        $this->message = $message;
        $this->image = $image;
        $this->date = $date;
    }

    // Method Functions
    function getUser() {
        return $this->user;
    }

    function getMessage() {
        return $this->message;
    }

    function getImage() {
        return $this->image;
    }

    function getDate() {
        return $this->date;
    }

    function addComment($name, $message, $date) {
        $this->comments[] = new Comment($name, $message, $date);
    }

    function getComments() {
        return $this->comments;
    }
}
?>