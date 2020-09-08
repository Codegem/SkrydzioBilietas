<?php
$err = false;
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
        if (!preg_match('/^[a-z ]+$/i',$_POST['vardas'])) {
            $errormsg []= "Vardas netinka";
        }
        if (!preg_match('/^[a-z ]+$/i',$_POST['pavarde'])) {
            $errormsg []= "Pavarde netinka";
        }
        if (empty($errormsg)) {
            require 'bilietas.php';
        }else {
            $err = true;
        }
    }
    else {
    ?>
<link rel="stylesheet" href="style.css">
<ul>
<?php if($err == true):?>
    <?php foreach ($errormsg as $error):?>
        <li><?=$error?></li>  
    <?php endforeach?>
 <?php endif?>
 </ul>
<form method="post">
    <label for="skrydzionr">Skrydzio Nr</label>
        <select name="skrydzionr" id="skrydzionr">
            <span class="error"><?=$vardasErr?></span>
            <option disabled selected>--Pasirinkite Skrydzio Nr--</option>
                <?php foreach($masyvas['skrydzionr'] as $skrydis):?>
                    <option value=<?=$skrydis?>> 
                        <?=$skrydis?>
                <?php endforeach?>
            </option> 
        </select>   
            <label for="iskur">Is Kur Skrendate</label>
            <select name="iskur" id="iskur">
                <span class="error"><?=$pavardeErr?></span>
                <option disabled selected>--Is Kur Skrisite?--</option>
                <?php foreach($masyvas['iskur'] as $iskurskris):?>
                                        <option value=<?=$iskurskris?>> 
                                            <?=$iskurskris?>
                                        </option>
                <?php endforeach?>
        </select>   
        <label for="ikur">I Kur Skrendate</label>
            <select name="ikur" id="ikur">
                <option disabled selected>--Is Kur Skrisite?--</option>
                <?php foreach($masyvas['ikur'] as $ikurskris):?>
                                        <option value=<?=$ikurskris?>> 
                                            <?=$ikurskris?>
                                        </option>
                <?php endforeach?>
        </select>   
        <label for="bagazas">Bagazo Dydis</label>
        <select name="svoris" id="bagazas">
            <option disabled selected>--Pasirinkite Bagaza--</option>
                <?php foreach($masyvas['bagazas'] as $bagazas):?>
                                        <option value=<?=$bagazas?>> 
                                            <?=$bagazas?>
                                        </option>
                <?php endforeach?>
        </select>   
<!-- --------------------------kitka-------------------------- -->
    <label for="kodas">Asmens Kodas</label>
        <input type="number" name="kodas" placeholder="Asmens Kodas" >
    <label for="vardas_pavarde">Vardas, Pavarde</label>
        <input type="text" name="vardas" placeholder="Vardas">
        <input type="text" name="pavarde" placeholder="Pavarde">
    <label for="pastabos">Pastabos</label>
        <textarea name="pastabos" id="pastabos" cols="65" rows="10" placeholder="Jusu Pastabos.."></textarea>
    <button name="rezervuoti" type="submit">Rezervuoti</button>
</form>
<?php } ?>