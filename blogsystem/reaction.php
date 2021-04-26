<?php
class Reaction{
    
    private $type;
    private $user;
    private $post;


    function __construct(User $user , Post $post){
        $this->user=$user;
        $this->post=$post;
    }

    public function setType($type){
        $this->type=$type;
    }


    public function getType(){
        return $this->type;
    }

    public function getUser(){
        return $this->user;
    }
    public function getPost(){
        return $this->post;
    }

}