<?php

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
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
        $body = 'gallery inner';
    break;
}

$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE  == $key){
         $my_return .= '<li><a class ="current" href=" '.$key.' "> '.$value.' </a></li>';
    } else {
    $my_return .= '<li><a href=" '.$key.' "> '.$value.' </a></li>';
    }
    
    
    } 
    
    return $my_return;
    
    } 

    if(isset($_GET['today'])) {
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




$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$wines = '';
$gender = '';
$regions = '';
$privacy = '';
$comments = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$wines_err = '';
$gender_err = '';
$regions_err = '';
$privacy_err = '';
$comments_err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['first_name'])) {
$first_name_err = 'Please fill out your first name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    $last_name_err = 'Please fill out your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

if(empty($_POST['email'])) {
    $email_err = 'Please fill out your email so that we can span you';
    } else {
        $email = $_POST['email'];
    }

if(empty($_POST['gender'])) {
    $gender_err = 'Please choose your gender';
    } else {
        $gender = $_POST['gender'];
    }

if(empty($_POST['phone'])) {
    $phone_err = 'Please fill out your phone number';
    } else {
        $phone = $_POST['phone'];
    }

if(empty($_POST['wines'])) {
    $wines_err = 'What, no wines?';
    } else {
        $wines = $_POST['wines'];
    }

if(empty($_POST['comments'])) {
    $comments_err = 'Please share your thoughts with us';
    } else {
    $comments = $_POST['comments'];
    }

if(empty($_POST['privacy'])) {
    $privacy_err = 'Please agree to our privacy policy';
    } else {
    $privacy = $_POST['privacy'];
    }

if($_POST['regions'] == NULL) {
    $regions_err = 'Please select your regions';
    } else {
    $regions = $_POST['regions'];
    }


function my_wines($wines) {
$my_return = '';

if(!empty($_POST['wines'])) {
$my_return = implode(', ', $_POST['wines']);

} else {
    $wines_err = 'Please fill out your wines!';
}

return $my_return;


} 

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Test Email on ' .date('m/d/y,');
$body = '
First Name : '.$first_name.'  '.PHP_EOL.'
Last Name : '.$last_name.'  '.PHP_EOL.'
Email : '.$email.'  '.PHP_EOL.'
Gender : '.$gender.'  '.PHP_EOL.'
Phone : '.$phone.'  '.PHP_EOL.'
Region : '.$regiions.'  '.PHP_EOL.'
Wines : '.my_wines($wines).'  '.PHP_EOL.'
Comments : '.$comments.'  '.PHP_EOL.'
';

$headers = array(
'From' => 'norepy@mystudentwa.com'
);


if(!empty($first_name && 
 $last_name && 
 $email && 
 $gender && 
 $phone && 
 $regions && 
 $wines && 
 $comments)) {

mail($to, $subject, $body, $headers);
header('Location:thx.php');

}

} 




} 

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}

