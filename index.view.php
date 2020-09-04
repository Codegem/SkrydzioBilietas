<?php

?>
<link rel="stylesheet" href="style.css">
<form method="post">
    <label for="skrydzionr">Skrydzio Nr</label>
    <select name="skrydzionr" id="skrydzionr">
        <option selected>--Pasirinkite Skrydzio Nr--</option>
        <?php foreach($masyvas as $elementai => $select):?>
            <?php if($elementai == 'skrydzionr'):?>
            <?php for($i=0; $i<count($select); $i++):?>
                <option value=<?=$select[$i]?>> <?=$select[$i]?> </option>
                <?php endfor?>
            <?php endif?>
        <?php endforeach?>
    </select>
    <label for="iskur">Is Kur Skrendate</label>
    <select name="iskur" id="iskur">
        <option selected>--Is Kur Skrisite?--</option>
    </select>
    <label for="ikur">I Kur Skrendate</label>
    <select name="ikur" id="ikur">
        <option selected>--I Kur Skrisite?--</option>
    </select>
    <label for="bagazas">Bagazas</label>
    <select name="svoris" id="bagazas">
        <option selected>--Bagazas--</option>
    </select>
    <label for="kaina" aria-readonly="">Kaina</label>
    <input type="number" id="kaina">
    <!-- kitka -->
    <label for="kodas">Asmens Kodas</label>
    <input type="number" placeholder="Asmens Kodas">
    <label for="vardas_pavarde">Vardas, Pavarde</label>
    <input type="text" name="vardas" placeholder="Vardas">
    <input type="text" name="pavarde" placeholder="Pavarde">
    <label for="pastabos">Pastabos</label>
    <textarea name="pastabos" id="pastabos" cols="30" rows="10" placeholder="Jusu Pastabos.."></textarea>
    <button name="rezervuoti" type="submit">Rezervuoti</button>
</form>

