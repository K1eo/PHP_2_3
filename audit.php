<?
$FILE="Animal.txt";

$string_sumbil = "";
$mas_audit = array();
$date = array();
if (isset($_POST["button_string"])) {
    if (filesize($FILE) > 0) {
        $file = fopen($FILE, "r");
        while (!feof($file)) {
            $line = fgets($file);
            $date[] = explode("\t", $line);
        }
        fclose($file);
    }
    $string_sumbil = $_POST["string_sumbol"];

    if ($date[0] != null) {

        for ($i = 0; $i < count($date) - 1; $i++) {
            if (mb_strstr($date[$i][5], $string_sumbil)) $mas_audit[] = $date[$i];
    }
    }
}
?>