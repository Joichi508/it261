<?php

if(isset($_GET['name'], $_GET['email'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
} else {
    echo '
        <form action="" method="get">
            <label>NAME</label>
            <input type="text" name="name">
            <label for="">Email</label>
            <input type="email" name="email">
            <input type="submit" name="" id="" value="Confirm">
        </form>
    ';
}