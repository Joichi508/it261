<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery.php</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <style>
        table{
            border:1px solid black;
            border-collapse:collapse;
        }

        td {
            border: 1px solid black;
            padding:5px;
        }

        img{
            width: 200px;
            height: 200px;
        }
    </style>
</head>

<?php 
include('./includes/header.php'); ?>

<?php
$wcup ['Gavi'] = 'Barcelona Spain age 18';
$wcup['Mbappe'] = 'Paris Saint-Germain France age 23';
$wcup['Mitoma'] = 'Brighton Japan age 25';
$wcup['Musiala'] = ' Bayern Munich Germany age 19';
$wcup ['Pulisic'] = ' Chelsea United States age 24';
?>


<div id="wrapper">
<table>
        <?php foreach($wcup as $name => $image) :?>
        <tr>
            <td><img src="img/<?php echo $name;?>.jpg" alt="<?php echo $name;?>"></td>
            <td><?php echo str_replace('_',' ', $name);?></td>
            <td><?php echo substr($image, 0, 45);?></td>
        </tr>
        <?php endforeach ;?>
    </table>
<?php
include('./includes/footer.php')
?>