<?php
class Post{
    private $user;
    private $createdAt;
    private $body;
    
    //we can access user class here , as it's in the same level of this file , so no problem if we didn't add require_once "user.php" , but this case with classes only , not with files  
    function __construct(User $user) //by default it's public
    {
        $this->$user=$user;
        $this->$createdAt=time();
    }

    public function setBody($body){
        $this->$body=$body;
    }

    public function getBody(){
        return $this->$body;
    }

}