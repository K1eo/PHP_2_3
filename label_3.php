<? include "labe_3.php";?>
<? include "MyFile.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LABE3</title>
    <link rel="stylesheet" href="style.CSS">
</head>
<div  id = "table_animal">
    <table>
        <tr>
            <td width="65%">
                <?
                echo MyFile(array(
                    "Ім'я тварини",
                    "Ціна","Кількість",
                    "Дата","Номер партії",
                    "Прізвище імя відповідального"),$date)
                ?>
            </td></tr>
        <tr>
            <td>
                <?
                echo "Загальна кількість одиниць товару:".$count;
                ?>
            </td>
        </tr>
    </table>
</div>
</html>