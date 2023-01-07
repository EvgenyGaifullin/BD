<?php

$connect = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'BD');

if(!$connect) {
    die('ERROR!');
}
