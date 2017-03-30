<? include "MyFile.php"; ?>
<? include "ReadFile.php";?>
<? include "labe_3.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animal</title>
    <link rel="stylesheet" href="style.CSS">
</head>
<body>
<div  id = "table_animal">
    <table>
        <tr>
            <td width="15%">
                <fieldset>
                    <center>
    <form method="post">
                <legent> <h3> Animal </h3> </legent><br/>
                <input size="25px" text="text" name="Name" placeholder="Введіть ім'я тварини"><br/><br/>
                <input size="25px" text="price" name="Prise" placeholder="Ведіть ціну"><br/><br/>
                <input size="25px" text="count" name="Count" placeholder="Кількість"><br/><br/>
                <input size="25px" text="date" name="Date" placeholder="Дата"><br/><br/>
                <input size="25px" text="namber" name="Namber" placeholder="Номер пртії"><br/><br/>
                <input size="25px" text="surname" name="Surname" placeholder="Прізвище імя відповідального" ><br/><br/>
                <input type="submit" name="Add"><br/><br/>
                <a href="label_3.php">lab 3</a><br>
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
                    "Прізвище імя відповідального"),$Mas)
                ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>