<?php
$err = false;
$required = false;
$errormsg = [];
    if(isset($_POST['rezervuoti'])){
        if (empty($_POST['skrydzionr'])) {
            $errormsg []= "Skrydzio nr negali buti tuscias";
        }
        if (empty($_POST['svoris'])) {
            $errormsg []= "Pasirinkite bagaza";
        }
        if (!preg_match('[^\d]', $_POST['kodas'])) {
            $errormsg []= "Pasirinkite bagaza";
        }
        if (!preg_match('/^([a-z A-Z]){1,12}+$/i',$_POST['vardas'])) {
            $errormsg []= "Vardas netinka";
            }
        if (!preg_match('/^([a-z A-Z]){1,12}+$/i',$_POST['pavarde'])) {
            $errormsg []= "Pavarde netinka";
        }
        if (!preg_match('/^([a-z][A-Z]){1,100}+$/i',$_POST['pastabos'])) {
            $errormsg []= "Pastabos per ilgas textas arba to short";
        }
        if (empty($errormsg)) {
            $required = true;
            require 'bilietas.php';
        }else {
            $err = true;
        }
    }
?>
<link rel="stylesheet" href="style.css">
<ul>
<?php if($err == true):?>
    <?php foreach ($errormsg as $error):?>
        <li><?=$error?></li>  
    <?php endforeach?>
    <?php endif?>
</ul>
<?php if($required == false){require 'forma.php';}?>