<?php
    if(isset($_POST['rezervuoti'])){
        require 'bilietas.php';
        ?>
       <?php 
    }
    else{
    ?>
<link rel="stylesheet" href="style.css">
<form method="post">
    <label for="skrydzionr">Skrydzio Nr</label>
        <select name="skrydzionr" id="skrydzionr" required>
            <option disabled selected>--Pasirinkite Skrydzio Nr--</option>
                <?php foreach($masyvas['skrydzionr'] as $skrydis):?>
                    <?php:?> <option value=<?=$skrydis?>> 
                        <?=$skrydis?>
                <?php endforeach?>
            </option> 
        </select>   
            <label for="iskur">Is Kur Skrendate</label>
            <select name="iskur" id="iskur" required>
                <option disabled selected>--Is Kur Skrisite?--</option>
                <?php foreach($masyvas['iskur'] as $iskurskris):?>
                                        <option value=<?=$iskurskris?>> 
                                            <?=$iskurskris?>
                                        </option>
                <?php endforeach?>
        </select>   
        <label for="ikur">I Kur Skrendate</label>
            <select name="ikur" id="ikur" required>
                <option disabled selected>--Is Kur Skrisite?--</option>
                <?php foreach($masyvas['ikur'] as $ikurskris):?>
                                        <option value=<?=$ikurskris?>> 
                                            <?=$ikurskris?>
                                        </option>
                <?php endforeach?>
        </select>   
        <label for="bagazas">Bagazo Dydis</label>
        <select name="svoris" id="bagazas" required>
            <option disabled selected>--Pasirinkite Bagaza--</option>
                <?php foreach($masyvas['bagazas'] as $bagazas):?>
                                        <option value=<?=$bagazas?>> 
                                            <?=$bagazas?>
                                        </option>
                <?php endforeach?>
        </select>   
<!-- --------------------------kitka-------------------------- -->
    <label for="kodas">Asmens Kodas</label>
        <input type="number" name="kodas" placeholder="Asmens Kodas" required>
    <label for="vardas_pavarde">Vardas, Pavarde</label>
        <input type="text" name="vardas" placeholder="Vardas" required>
        <input type="text" name="pavarde" placeholder="Pavarde" required>
    <label for="pastabos">Pastabos</label>
        <textarea name="pastabos" id="pastabos" cols="65" rows="10" placeholder="Jusu Pastabos.."></textarea>
    <button name="rezervuoti" type="submit">Rezervuoti</button>
</form>
<?php } ?>