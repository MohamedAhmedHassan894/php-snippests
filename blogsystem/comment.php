<?php 

class Comment{
    private $body;
    private $user;
    private $post;
    private $createdAt;

    function __construct(User $user, Post $post){
        $this->user=$user;
        $this->post=$post;
        $this->createdAt=time();
    }

    public function setBody($body){
        $this->$body=$body;
    }

    public function getBody(){
        return $this->$body;
    }
}