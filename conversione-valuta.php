<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['dollaro']) && !empty($_POST['dollaro'])) {
        $dollaro = floatval($_POST['dollaro']);
        $euro = $dollaro * 1.07695;
        echo "L'importo in euro è: €" . number_format($euro, 2);
    }
}

?>