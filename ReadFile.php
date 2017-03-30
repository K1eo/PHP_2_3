<?
$FILE ="Animal.txt";
$Name = "";
$Prise= "";
$Count ="";
$Date ="";
$Namber ="";
$Surname ="";

if (isset($_POST["Add"]))
{
    $Name = $_POST["Name"];
    $Prise=$_POST["Prise"];
    $Count= $_POST["Count"];
    $Date =$_POST["Date"];
    $Namber=$_POST["Namber"];
    $Surname=$_POST["Surname"];
    if ($Name != "" && ctype_alpha($Name) && $Prise != "" && is_numeric($Prise)  && $Count != ""  && is_numeric($Count) &&  $Date != "" && $Namber != ""  && is_numeric($Namber) &&  $Surname != "" && ctype_alpha($Surname))
    {
        $file = fopen($FILE,'a+');
        fwrite($file, $Name."\t" .$Prise."\t" .$Count."\t" .$Date."\t" .$Namber ."\t" .$Surname."\n");
        fclose($file);
        $Mas = array();
    }
    if (filesize($FILE)>0)
    {
        $file1 = fopen($FILE,'r');
        while(!feof($file1))
        {
            $line = fgets($file1);
            $Mas[] = explode("\t",$line);
        }
        fclose($file1);
    }

}
?>