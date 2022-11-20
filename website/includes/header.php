<?php

define('This_page', basename($_SERVER['PHP_SELF']));

switch(This_page) {
    case 'index.php' :
    $title = 'Home page of our Website Project';
    $body = 'home';
    break;

    case 'about.php' :
    $title = 'About page of our Website Project';
    $body = 'about inner';
    break;

    case 'daily.php' :
    $title = 'Daily page of our Website Project';
    $body = 'daily inner';
    break;

    case 'project.php' :
    $title = 'Project page of our Website Project';
    $body = 'project inner';
    break;
    
    case 'contact.php' :
    $title = 'Contact page of our Website Project';
    $body = 'contact inner';
    break;

    case 'gallery.php' :
    $title = 'Gallery page of our Website Project';
    $body = 'Gallery inner';
    break;

}

//our navigational array!
$nav = array(
    'index.php' => 'Home',
        'about.php' => 'About',
            'daily.php' => 'Daily',
                'project.php' => 'Project',
                    'contact.php' => 'Contact',
                        'gallery.php' => 'Gallery',
);

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else { 
    $today = date('l');
}

switch($today) {
    case 'Friday':
        $day= '<h2>Friday is Dragon Ball Day!</h2>';
        $pic = 'dragonball.jpg';
        $alt = 'Dragon Ball';
        $details = '<p><b>Dragon Ball</b> was originally inspired by the classical 16th-century Chinese novel Journey to the West, combined with elements of Hong Kong martial arts films. The series follows the adventures of protagonist Son Goku from his childhood through adulthood as he trains in martial arts.</p>';     
break;


    case 'Saturday':
        $day = '<h2>Saturday is My Hero Academia Day!</h2>';
        $pic = 'myhero.jpg';
        $alt = 'My Hero Academia ';
        $details = '<p> In a world where most people have superpowers, middle school student Izuku Midoriya is part of 20 percent of the population born without them. But his dream is to become a superhero and to attend the premier Japanese school for aspiring superheroes, UA High. </p>';
        break;


    case 'Sunday':
        $day = '<h2>Sunday is Onepiece Day!</h2>';
        $pic = 'onepiece.jpg';
        $alt = 'Onepiece';
        $details = '<p>The series focuses on Monkey D. Luffy, a young man made of rubber, who, inspired by his childhood idol, the powerful pirate Red-Haired Shanks, sets off on a journey from the East Blue Sea to find the mythical treasure, the One Piece, and proclaim himself the King of the Pirates.</p>';
break;

    case 'Monday':
        $day = '<h2>Monday is Naruto Day!</h2>';
        $pic = 'naruto.jpg';
        $alt = 'Naruto';
        $details = '<p><b>Naruto</b> is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.</p>';
break;

    case 'Tuesday':
        $day = '<h2>Tuesday is Haikyu Day!</h2>';
        $pic = 'haikyu.jpg';
        $alt = 'Haikyu';
        $details = '<p><b>Haikyu!!</b> (ハイキュー!!, Haikyū!!, from the kanji 排球 "volleyball") is a Japanese manga series written and illustrated by Haruichi Furudate. It was serialized in Shueisha \'s shōnen manga magazine Weekly Shōnen Jump from February 2012 to July 2020, with its chapters collected in 45 tankōbon volumes.</p>';
break;

    case 'Wednesday':
        $day = '<h2>Wednesday is Aoashi Day!</h2>';
        $pic = 'aoashi.jpg';
        $alt = 'Aoashi';
        $details = '<p><b>Aoashi</b> tells the story of young Ashito Aoi in his third year at Ehime City Middle School and his meeting with football coach Tatsuya Fukuda. Ashito, although talented, is a difficult boy, but Fukuda believes in him and invites him to join his own team. Ashito could well change the face of Japanese football.</p>';
break;

    case 'Thursday':
        $day = '<h2>Thursday is Demon Slayer Day!</h2>';
        $pic = 'demon.jpg';
        $alt = 'Demon Slayer';
        $details = '<p><b>Demon Slayer</b>: Kimetsu no Yaiba (鬼滅の刃, Kimetsu no Yaiba, "Blade of Demon Destruction") is a Japanese manga series written and illustrated by Koyoharu Gotouge. It follows teenage Tanjiro Kamado, who strives to become a demon slayer after his family was slaughtered and his younger sister, Nezuko, turned into a demon.</p>';
break;
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="CSS/style.css" type="text/CSS" rel="stylesheet">
</head>
<body class="<?php echo $body ; ?>">
<header>
    <div class="inner-header">
        <a href="index.php">
            <img id="logo" src="images/logo.png" alt="logo">

        </a>
        <!-- <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Daily</a></li>
                <li><a href="">Project</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav> -->
        <nav>
            <ul>
            <?php
            foreach($nav as $key => $value) {
                if (This_page == $key) {
                    echo '<li><a style="color:red;" href=" '.$key.' "> '.$value.' </a></li>';
                    } else {
                            echo '<li><a style="color:green," href=" '.$key.' "> '.$value.' </a></li>';
            }

            } //end foreach

            ?>
            </ul>
        </nav>
    </div>
</header>