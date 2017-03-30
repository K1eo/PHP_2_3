<? include "audit.php";?>
<? include "MyFile.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LABE4</title>
    <link rel="stylesheet" href="style.CSS">
</head>
<div  id = "table_animal">
    <table>
        <tr>
            <td width="15%">
                <fieldset>
                    <center>
                        <form method="post">
                            <label for="string_sumbol">Символи</label><br/><br/>
                            <input name="string_sumbol" type="text"><br/><br/>
                            <input name="button_string" type="submit" value="Знайти"><br/><br/>
                        </form>
                    </center>
                </fieldset>
            </td>
            <td width="65%">
                <?
                echo MyFile(array(
                    "Ім'я тварини",
                    "Ціна","Кількість",
                    "Дата","Номер партії",
                    "Прізвище імя відповідального"),$mas_audit)
                ?>
            </td></tr>
    </table>
</div>
</html>