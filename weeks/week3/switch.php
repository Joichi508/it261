<?php
// $variable = 'This is our variable';

// if(isset($variable)) {
//     echo 'variable has been set';
// } else
// echo 'Variable has not benn set!';

// echo '<br>'; 
// if(isset($_get[today])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT!!!!!!';
// }

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Friday':
        $coffee = '<h2>Friday is Dragon Ball Day!</h2>';
        $pic = 'dragonball.jpg';
        $alt = 'Dragon Ball';
        $content = '<p><b>Dragon Ball</b> was originally inspired by the classical 16th-century Chinese novel Journey to the West, combined with elements of Hong Kong martial arts films. The series follows the adventures of protagonist Son Goku from his childhood through adulthood as he trains in martial arts.</p>';     
break;


    case 'Saturday':
        $coffee = '<h2>Saturday is My Hero Academia Day!</h2>';
        $pic = 'myhero.jpg';
        $alt = 'My Hero Academia ';
        $content = '<p> In a world where most people have superpowers, middle school student Izuku Midoriya is part of 20 percent of the population born without them. But his dream is to become a superhero and to attend the premier Japanese school for aspiring superheroes, UA High. </p>';
break;


    case 'Sunday':
        $coffee = '<h2>Sunday is Onepiece Day!</h2>';
        $pic = 'onepiece.jpg';
        $alt = 'Onepiece';
        $content = '<p>The series focuses on Monkey D. Luffy, a young man made of rubber, who, inspired by his childhood idol, the powerful pirate Red-Haired Shanks, sets off on a journey from the East Blue Sea to find the mythical treasure, the One Piece, and proclaim himself the King of the Pirates.</p>';
break;

    case 'Monday':
        $coffee = '<h2>Monday is Naruto Day!</h2>';
        $pic = 'naruto.jpg';
        $alt = 'Naruto';
        $content = '<p><b>Naruto</b> is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.</p>';
break;

    case 'Tuesday':
        $coffee = '<h2>Tuesday is Haikyu Day!</h2>';
        $pic = 'haikyu.jpg';
        $alt = 'Haikyu';
        $content = '<p><b>Haikyu!!</b> (ハイキュー!!, Haikyū!!, from the kanji 排球 "volleyball") is a Japanese manga series written and illustrated by Haruichi Furudate. It was serialized in Shueisha \'s shōnen manga magazine Weekly Shōnen Jump from February 2012 to July 2020, with its chapters collected in 45 tankōbon volumes.</p>';
break;

    case 'Wednesday':
        $coffee = '<h2>Wednesday is Aoashi Day!</h2>';
        $pic = 'aoashi.jpg';
        $alt = 'Aoashi';
        $content = '<p><b>Aoashi</b> tells the story of young Ashito Aoi in his third year at Ehime City Middle School and his meeting with football coach Tatsuya Fukuda. Ashito, although talented, is a difficult boy, but Fukuda believes in him and invites him to join his own team. Ashito could well change the face of Japanese football.</p>';
break;

    case 'Thursday':
        $coffee = '<h2>Thursday is Demon Slayer Day!</h2>';
        $pic = 'demon.jpg';
        $alt = 'Demon Slayer';
        $content = '<p><b>Demon Slayer</b>: Kimetsu no Yaiba (鬼滅の刃, Kimetsu no Yaiba, "Blade of Demon Destruction") is a Japanese manga series written and illustrated by Koyoharu Gotouge. It follows teenage Tanjiro Kamado, who strives to become a demon slayer after his family was slaughtered and his younger sister, Nezuko, turned into a demon.</p>';
break;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>

*{
    padding:0;
    margin:0;
    box-sizing:border-box;
}


#wrapper{
    width: 940px;
    margin: 20px auto;
}

h1,h2,img{
    margin-bottom: 10px;
}

p{
    margin-bottom: 20px;
}




    </style>
</head>
<body>
<div id= "wrapper">
    <h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php
echo $coffee;
?>

<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>

<h2>Check out our Daily Special</h2>
<p><i>Please complete ALL of the days of the week!!!!!</i></p>
<ul>
    <li><a href="switch.php?today=Sunday">Sunday</a></li>
    <li><a href="switch.php?today=Monday">Monday</a></li>
    <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
    <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
    <li><a href="switch.php?today=Thursday">Thursday</a></li>
    <li><a href="switch.php?today=Friday">Friday</a></li>
    <li><a href="switch.php?today=Saturday">Saturday</a></li>
</ul>

</div>

</body>
</html>