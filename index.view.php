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
            <?php foreach($masyvas as $elementai => $select):?>
                <?php if($elementai == 'skrydzionr'):?>
                    <label for="skrydzionr">Skrydzio Nr</label>
                        <select name="skrydzionr" id="skrydzionr" require>
                            <option disabled selected>--Pasirinkite Skrydzio Nr--</option>
                                <?php for($i=0; $i<count($select); $i++):?>
                                    <option value=<?=$select[$i]?>> 
                                        <?=$select[$i]?>
                                    </option>
                                <?php endfor?>
                        </select>   
                <?php endif?>
                <?php if($elementai == 'iskur'):?>
                    <label for="iskur">Is Kur Skrendate</label>
                        <select name="iskur" id="iskur" require>
                            <option disabled selected>--Is Kur Skrisite?--</option>
                                    <?php for($i=0; $i<count($select); $i++):?>
                                    <option value=<?=$select[$i]?>> 
                                        <?=$select[$i]?>
                                    </option>
                        <?php endfor?>
                    </select>   
                <?php endif?>
                <?php if($elementai == 'ikur'):?>
                    <label for="ikur">I Kur Skrendate</label>
                        <select name="ikur" id="ikur" require>
                            <option disabled selected>--I Kur Skrisite?--</option>
                                    <?php for($i=0; $i<count($select); $i++):?>
                                    <option value=<?=$select[$i]?>> 
                                        <?=$select[$i]?>
                                    </option>
                        <?php endfor?>
                    </select>   
                <?php endif?>
                <?php if($elementai == 'bagazas'):?>
                    <label for="bagazas">Bagazo Dydis</label>
                        <select name="svoris" id="bagazas" require>
                            <option disabled selected>--Pasirinkite Bagaza--</option>
                                    <?php for($i=0; $i<count($select); $i++):?>
                                    <option value=<?=$select[$i]?>> 
                                    <?=$select[$i]?>
                                    </option>
                        <?php endfor?>
                        </select>   
                <?php endif?>
            <?php endforeach?>
<!-- --------------------------kitka-------------------------- -->
    <label for="kodas">Asmens Kodas</label>
        <input type="number" name="kodas" placeholder="Asmens Kodas" require>
    <label for="vardas_pavarde">Vardas, Pavarde</label>
        <input type="text" name="vardas" placeholder="Vardas" require>
        <input type="text" name="pavarde" placeholder="Pavarde" require>
    <label for="pastabos">Pastabos</label>
        <textarea name="pastabos" id="pastabos" cols="65" rows="10" placeholder="Jusu Pastabos.."></textarea>
    <button name="rezervuoti" type="submit">Rezervuoti</button>
</form>
<?php } ?>