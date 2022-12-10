<?php
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
<main>
    <h1>Welcome to my Japan national soccer team</h1>
<?php

$sql = 'SELECT * FROM players';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo '
        <h2>Information about '.$row['first_name'].' '.$row['last_name'].'</h2>
        <ul>
            <li><b>Age:</b> '.$row['age'].'</li>
            <li><b>Position:</b> '.$row['position'].'</li>
            <li><b>Info:</b> '.$row['info'].'</li>
        </ul>
        <p>For more information about '.$row['first_name'].', click <a href="project-view.php?id='.$row['player_id'].' ">here</a></p>
        ';
    } 

} else { 
    echo 'Nobody is home!';
}

@mysqli_free_result($result);

@mysqli_close($iConn);

?>
</main>
<aside></aside>

</div>

<?php
include('./includes/footer.php');