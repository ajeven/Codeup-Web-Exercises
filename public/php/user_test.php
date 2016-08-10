<?php
require_once 'User.php';

$user = new User();
$user->name = 'Alan Even';
$user->email = 'alan@dont-care.info';
$user->password = 'testpass';
$user->save();

$users = User::all();
var_dump($users);

$find = User::find(1);
var_dump($find);
