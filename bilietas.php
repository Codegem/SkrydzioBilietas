<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="bilieto.css">
    <title>Bilietas</title>
</head>
<body>
    <div class="bilietas">
        <h3>Lektuvo Bilietas</h3>
        <div class="duomenys logo">
            <div class="top">
                <h4>Data <?=$date?></h4>
                <div class="info">
                    <p>Vardas : <?=$_POST['vardas']?></p>
                    <p>Pavarde : <?=$_POST['pavarde']?></p>
                    <p>Asmens Kodas : <?=$_POST['kodas']?></p>
                </div>
            </div>
            <div class="test">
                <p>Pasaulio skrydziai</p>
            </div>
            <div class="skrydzio-info">
                <p>Skrydis</p>
                <p><?=$_POST['iskur']?>
                    <i class="fas fa-arrow-right"></i>
                <?=$_POST['ikur']?></p>
            </div>
        </div>
        <div class="apmokejimas">
            <h3>Receipt</h3>
            <p class="important"><i class="fas fa-exclamation-triangle"></i>Galiojimas iki <?php echo date("Y-m-d",$galiojimas) ?></p>
            <p>Skrydzio Numeris <?=$_POST['skrydzionr']?></p>
            <p>Keliones kaina <?=$kaina?> $</p>
            <p>Bagazo kaina <?=$_POST['svoris']>20?$bagazas:0?> $</p>
            <hr>
            <p>Bendrai moketa <?=$_POST['svoris']>20?$bagazas+$kaina:$kaina?> $</p>
        </div>
    </div>
</body>
</html>