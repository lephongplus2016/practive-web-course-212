<?php
$listname = array("Danny", "Denis", "Danny");
if (isset($_POST['suggestion'])) {
    $name = $_POST['suggestion'];
    if (!empty($name)) {
        foreach ($listname as $nameele) {
            if (strpos($nameele, $name) !== false) {
                echo $nameele;
                echo "<br>";
            }
        }
    }
}
