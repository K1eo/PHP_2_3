
<?
$FILE ="Animal.txt";
$count = 0;
$date = array();
if (filesize($FILE)> 0 ){
    $file = fopen($FILE,"r");
    while (!feof($file)){
        $line = fgets($file);
        $date[] = explode("\t",$line);
    }
    fclose($file);
}

foreach($date as $column)
{
 $count += $column[2];
}
if ($date[0] != null) {
    usort($date, function ($a, $b) {
        if ($a[1] == $b[1]) return 0;
        return ($a[1] < $b[1]) ? -1 : 1;
    });
}
?>