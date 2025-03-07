<?php

// Получаем текущий день недели
$dayOfWeek = date("l");
echo date("l");

// John Styles
$johnSchedule = "";
if ($dayOfWeek == "Monday" || $dayOfWeek == "Wednesday" || $dayOfWeek == "Friday") {
    $johnSchedule = "8:00 - 12:00";
} else {
    $johnSchedule = "Нерабочий день";
}

// Jane Doe
$janeSchedule = "";
if ($dayOfWeek == "Tuesday" || $dayOfWeek == "Thursday" || $dayOfWeek == "Saturday") {
    $janeSchedule = "12:00 - 16:00";
} else {
    $janeSchedule = "Нерабочий день";
}

// Вывод таблицы 
echo "<table border='1' style='border-collapse: collapse;'>
        <tr><th>№</th><th>Фамилия Имя</th><th>График работы</th></tr>
        <tr><td>1</td><td>John Styles</td><td>$johnSchedule</td></tr>
        <tr><td>2</td><td>Jane Doe</td><td>$janeSchedule</td></tr>
      </table>";

// Цикл for
$a = 0;
$b = 0;

for ($i = 0; $i <= 5; $i++) {
   $a += 10;
   $b += 5;
   echo "Шаг $i: a = $a, b = $b <br>";
}

echo "End of the loop: a = $a, b = $b <br><br>";

// Переписанный цикл (while)
$a = 0;
$b = 0;
$i = 0;
while ($i <= 5) {
   $a += 10;
   $b += 5;
   echo "Шаг $i: a = $a, b = $b <br>";
   $i++;
}

echo "End of the while loop: a = $a, b = $b <br><br>";

// Переписанный цикл (do-while)
$a = 0;
$b = 0;
$i = 0;
do {
   $a += 10;
   $b += 5;
   echo "Шаг $i: a = $a, b = $b <br>";
   $i++;
} while ($i <= 5);

echo "End of the do-while loop: a = $a, b = $b <br>";

?>
