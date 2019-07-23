<?php namespace jakeattard;

class Comment {
    protected $user;
    protected $message;
    protected $date;

    function __construct($user, $message, $date) {
        $this->user = $user;
        $this->message = $message;
        $this->date = $date;
    }

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