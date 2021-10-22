<?php

$inputs = array();
for ($i = 1; $i <= 9; $i++) {
    $inputs[$i] =  $i;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudoku</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header class="header">
        <h1>Sudoku</h1>
    </header>
    <h1 id="mensagem"></h1>
    <form id="form" action="resolucao.php" method="POST" name="form" autocomplete="off">
        <section class="container">
            <div class="sudoku-area">
                <div class="sudoku-group r">
                    <?php foreach ($inputs as $blocks) : ?>
                        <div class="sudoku-blocks">
                            <input id="A<?= $blocks ?>" maxlength="1" class="sudoku-input a" type="number" name="A[<?= $blocks ?>]" />
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="sudoku-group r">
                    <?php foreach ($inputs as $blocks) : ?>
                        <div class="sudoku-blocks">
                            <input id="B<?= $blocks ?>" maxlength="1" class="sudoku-input b" type="number" name="B[<?= $blocks ?>]" />
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="sudoku-group r">
                    <?php foreach ($inputs as $blocks) : ?>
                        <div class="sudoku-blocks">
                            <input id="C<?= $blocks ?>" maxlength="1" class="sudoku-input c" type="number" name="C[<?= $blocks ?>]" />
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="sudoku-group r t">
                    <?php foreach ($inputs as $blocks) : ?>
                        <div class="sudoku-blocks">
                            <input id="D<?= $blocks ?>" maxlength="1" class="sudoku-input d" type="number" name="D[<?= $blocks ?>]" />
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="sudoku-group r t">
                    <?php foreach ($inputs as $blocks) : ?>
                        <div class="sudoku-blocks">
                            <input id="E<?= $blocks ?>" maxlength="1" class="sudoku-input e" type="number" name="E[<?= $blocks ?>]" />
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="sudoku-group t">
                    <?php foreach ($inputs as $blocks) : ?>
                        <div class="sudoku-blocks">
                            <input id="F<?= $blocks ?>" maxlength="1" class="sudoku-input f" type="number" name="F[<?= $blocks ?>]" />
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="sudoku-group r t">
                    <?php foreach ($inputs as $blocks) : ?>
                        <div class="sudoku-blocks">
                            <input id="G<?= $blocks ?>" maxlength="1" class="sudoku-input g" type="number" name="G[<?= $blocks ?>]" />
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="sudoku-group r t">
                    <?php foreach ($inputs as $blocks) : ?>
                        <div class="sudoku-blocks">
                            <input id="H<?= $blocks ?>" maxlength="1" class="sudoku-input h" type="number" name="H[<?= $blocks ?>]" />
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="sudoku-group t">
                    <?php foreach ($inputs as $blocks) : ?>
                        <div class="sudoku-blocks">
                            <input id="I<?= $blocks ?>" maxlength="1" class="sudoku-input i" type="number" name="I[<?= $blocks ?>]" />
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <footer class="footer">
            <button class="button" type="submit" id="submitar">Avaliar</button>
        </footer>
    </form>
    <script src="js/script.js"></script>
</body>

</html>