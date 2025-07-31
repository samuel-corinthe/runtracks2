<?php
session_start();

// Initialisation ou réinitialisation de la grille
if (!isset($_SESSION["grid"])) {
    resetGame();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["reset"])) {
        resetGame();
    }

    if (isset($_POST["cell"]) && $_SESSION["winner"] === null) {
        $index = intval($_POST["cell"]);
        if ($_SESSION["grid"][$index] === "-") {
            $_SESSION["grid"][$index] = $_SESSION["player"];
            if (checkWin($_SESSION["player"])) {
                $_SESSION["winner"] = $_SESSION["player"];
            } elseif (!in_array("-", $_SESSION["grid"])) {
                $_SESSION["winner"] = "draw";
            } else {
                $_SESSION["player"] = $_SESSION["player"] === "X" ? "O" : "X";
            }
        }
    }
}

function resetGame() {
    $_SESSION["grid"] = array_fill(0, 9, "-");
    $_SESSION["player"] = "X";
    $_SESSION["winner"] = null;
}

function checkWin($player) {
    $g = $_SESSION["grid"];
    $lines = [
        [0,1,2], [3,4,5], [6,7,8],
        [0,3,6], [1,4,7], [2,5,8],
        [0,4,8], [2,4,6]
    ];
    foreach ($lines as $line) {
        if ($g[$line[0]] === $player && $g[$line[1]] === $player && $g[$line[2]] === $player) {
            return true;
        }
    }
    return false;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Jeu du Morpion</h1>
    <form method="POST">
      <div class="board">
        <?php for ($i = 0; $i < 9; $i++): ?>
          <button class="cell" name="cell" value="<?php echo $i ?>" <?php echo $_SESSION["grid"][$i] !== "-" ? "disabled" : "" ?>>
            <?php echo htmlspecialchars($_SESSION["grid"][$i]) ?>
          </button>
        <?php endfor; ?>
      </div>
      <p class="message">
        <?php echo $_SESSION["winner"] === "draw" ? "Match nul" : ($_SESSION["winner"] ? $_SESSION["winner"] . " a gagné" : "Tour du joueur " . $_SESSION["player"]) ?>
      </p>
      <button name="reset" class="resetBtn">Réinitialiser la partie</button>
    </form>
  </div>
</body>
</html>
