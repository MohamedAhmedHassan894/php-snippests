<?php

//we should provide require files here to get access to the classes within 
require_once "user.php";
require_once "post.php";
require_once "comment.php";
require_once "reaction.php";

$user=new User;
$user->name="mohamed";
$user->email="mohamed.ahmad.hassaan@gmail.com";
$user->phone="+201097816790";

//user that comments on the post
$footballLover=new User;
$footballLover->name="john";
$footballLover->email="john@gmail.com";
$footballLover->phone="+4782144444";

$post=new Post($user);
$post->setBody("i'm going to watch liverpool match today");
echo "hi i'm ".$post->getUser()->name." , and i wrote this post : ".$post->getBody()." , date : ".$post->getDate()."<br>";

$comment=new Comment($footballLover,$post);
$comment->setBody("have a good time");
echo "comment on the post: ".$comment->getBody()." , publisher : ".$comment->getUser()->name." , date : ".$comment->getDate()."<br>";

$like=new Reaction($footballLover,$post);
$like->setType("like");
echo $like->getUser()->name." reacted ".$like->getType()." on ".$like->getPost()->getUser()->name."'s post ";