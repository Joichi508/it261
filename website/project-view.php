<?php

include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}


$sql = 'SELECT * FROM players WHERE people_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $age = stripslashes($row['age']);
        $position = stripslashes($row['position']);
        $info = stripslashes($row['info']);
        $detail = stripslashes($row['detail']);
    }


} else { 
    $feedback = 'There is a problem!!';

} 

include('./includes/header.php');
?>

<div id="wrapper">
<main>
    <h1>Welcome to my Japan national soccer team</h1>
    <h2>Introducing you to <?php echo $first_name;?>'s Page</h2>
    <ul>
        <?php
            echo '
            <li><b>First Name: </b>'.$first_name.'</li>
            <li><b>Last Name: </b>'.$last_name.'</li>
            <li><b>Age: </b>'.$age.'</li>
            <li><b>Position: </b>'.$position.'</li>
            <li><p>'.$info.'</p></li>
            ';
        ?>
    </ul>
    <p><a href="project.php">Return to the Japan national soccer team page!</a></p>


</main>

<aside>
    <figure>
    <img src="./images/player<?php echo $id;?>.jpg" alt="<?php echo $first_name;?>">
    <figcaption>
        <?php
            echo '
                '.$first_name.' '.$last_name.', '.$position.' '.$info.'
            
            ';
        ?>
    </figcaption>
    </figure>
    <p><i><?php echo $detail; ?></i></p>

</aside>

<?php

@mysqli_free_result($result);
@mysqli_close($iConn);

?>





</div>

<?php
include('./includes/footer.php');
?>