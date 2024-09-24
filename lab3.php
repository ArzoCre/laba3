<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Миронов Никита">
        <meta name="description" content="Веб-сайт для лабораторных работ">
        <meta name="keywords" content="Лабораторная, Миронов">
        <title>Лабораторная работа 3</title>
        <link rel="stylesheet" type="text/css" href="labstyle.css"> 
    </head>

    <body>

        <div class="LabPage__Header">
            <p class="LabPage__Header-text">Mironov</p>
        </div>

        <div class="LabPage__Content">
            <h1 class="LabPage__Content-Head-One">Лабораторная работа 3</h1>

            <p class="LabPage__Content-Desc">Описание задач:</p>

            <ul class="LabPage__Content-TaskWrap">
                <li style="width:100%;" class="LabPage__Content-Task"> Задача 1: Даны два круга с общим центром и радиусами R1 и R2 (R1 > R2). Найти площади этих кругов S1 и S2, а также площадь S3 кольца, внешний радиус которого равен R1, а внутренний радиус равен R2: S1 = π·(R1)2, S2 = π·(R2)2, S3 = S1−S2. В качестве значения π использовать 3.14.</li>
                <li style="width:100%;" class="LabPage__Content-Task"> Задача 2: Дано трехзначное число. В нем зачеркнули первую слева цифру и приписали ее справа. Вывести полученное число.</li>
            </ul>

            <div class="LabPage__Content-Decision-Wrap">
                <h2 class="LabPage__Content-Head-Two"> Решения задач </h2>

                <!-- Форма для первой задачи -->
                <form class="LabPage__Content-Task-Form" method="post">
                    <h3 class="LabPage__Content-Head-Three">Задача 1</h3>
                    <div class="forma">
                        <input class="LabPage__Content-Input" type="text" name="R1" placeholder="Введите R1" required >
                        <input class="LabPage__Content-Input" type="text" name="R2" placeholder="Введите R2" required >
                    </div>
                    <button class="LabPage__Content-Button" type="submit" name="calculateCircle">Решить задачу 1</button>
                </form>

                <?php
                if (isset($_POST['calculateCircle'])) {
                    $R1 = (float) $_POST['R1'];
                    $R2 = (float) $_POST['R2'];

                    if ($R1 <= $R2) {
                        echo "<p>Ошибка: R1 должен быть больше R2.</p>";
                    } else {
                        $pi = 3.14;
                        $S1 = $pi * pow($R1, 2);
                        $S2 = $pi * pow($R2, 2);
                        $S3 = $S1 - $S2;

                        echo "<p>Площадь первого круга (S1): " . $S1 . "</p>";
                        echo "<p>Площадь второго круга (S2): " . $S2 . "</p>";
                        echo "<p>Площадь кольца (S3): " . $S3 . "</p>";
                    }
                }
                ?>

                <!-- Форма для второй задачи -->
                <form class="LabPage__Content-Task-Form" method="post">
                    <h3 class="LabPage__Content-Head-Three">Задача 2</h3>
                    <div class="forma">
                        <input style="width:33%;" class="LabPage__Content-Input" type="number" name="threeDigitNumber" placeholder="Введите трехзначное число" required >
                    </div>
                    <button class="LabPage__Content-Button" type="submit" name="swapDigits">Решить задачу 2</button>
                </form>

                <?php
                if (isset($_POST['swapDigits'])) {
                    $number = (int) $_POST['threeDigitNumber'];
                    if ($number < 100 || $number > 999) {
                        echo "<p>Ошибка: Введите трехзначное число.</p>";
                    } else {
                        $firstDigit = (int) ($number / 100);
                        $remainingDigits = $number % 100;
                        $newNumber = $remainingDigits * 10 + $firstDigit;

                        echo "<p>Полученное число: " . $newNumber . "</p>";
                    }
                }
                ?>

                <a href="index.php" class="LabPage__Link">Назад на главную страницу</a>
                <br><br>
            </div>
        </div>
        <footer>
            <div class="footer-container">
                <div class="left-col">
                    <p class="rights-text">© 2024 Created By Arzo
                </div>
            </div>
        </footer>

    </body>
</html>
