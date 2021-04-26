<?php

$user=new User;
$user->name="mohamed";
$user->email="mohamed.ahmad.hassaan@gmail.com";
$user->phone="+201097816790";
$post=new Post($user);
$comment=new Comment($user,$post);
