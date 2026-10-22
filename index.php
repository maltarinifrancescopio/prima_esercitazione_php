<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rettangolo</title>
</head>
<body>
    <h2>Calcolo Rettangolo</h2>
    <?php
    $base= "";
    $altezza= "";
    $perimetro= null;
    $area= null;
    $diagonale= null;
    $errore= "";
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $base = isset($_POST["base"]) ? floatval($_POST["base"]) : 0;
        $altezza = isset($_POST["altezza"]) ? floatval($_POST["altezza"]) : 0;
        ($base > 0 && $altezza > 0) {
            $perimetro = 2 * ($base + $altezza);
            $area = $area * $altezza;
            $diagonale = sqrt(pow($base, 2)+ pow($altezza,2));     
        } else {
            $errore = "inserisci valori numerici validi e maggiori di zero per base e altezza";

        }
    }
    ?>
    <h1 style="text-align: center;">Calcolo dell'<b>Area</b> e del <b>Perimetro</b> di un Rettangolo</h1>
    <br>
    <br>
    <form action="rettangolo.php" method="post">
        <label for="base">inserisci la misura della <b>base</b> del Rettangolo</label>
        <input type="number" name="base" id="base">
        <br>
        <br>
        <label for="altezza">inserisci la misura dell'<b>altezza</b> del Rettangolo</label>
        <input type="number" name="altezza" id="altezza">
        <br>
        <br>
        <input type="submit" value="Invia">
        <input type="reset" value="Cancella">
    </form>
    <?php if($_SERVER['REQUEST_METHOD'] == "POST") ?>
    <?php if (!empty($errore)): ?>
        <p style="color: red;"><?php echo $errore ?></p>
        <?php else: ?>
            <h3>risultato rettangolo</h3>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>



</body>
</html>