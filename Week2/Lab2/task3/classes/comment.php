<?php namespace jakeattard;

// Class Comment
class Comment {
    protected $user;
    protected $message;
    protected $date;

    // Constructor
    function __construct($user, $message, $date) {
        $this->user = $user;
        $this->message = $message;
        $this->date = $date;
    }

    // Method Functions
    function getUser() {
        return $this->user;
    }

    function getMessage() {
        return $this->message;
    }

    function getDate() {
        return $this->date;
    }
}
?>