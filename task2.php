<form method="get" action="">
    <label ></label>
    Введите число ошибок(N):<input type="number" id="num_n" name="num_n"><br/>
    Введите число ворнингов(M):<input type="number" id="num_m" name="num_m"><br/>
    <input type="hidden" value="1" name="1">
    <input type="submit" value="Submit">
</form>
<br/>
Количество коммитов:<br/>
<?php
if (isset($_GET['1'])) {
    $err = $_GET['num_n'];     // Получаем из гет данные
    $war = $_GET['num_m'];
    $count = 0;
    function rec($n, $m)      //Иницализируем рекурсию для подсчета значения
    {
        global $count;
        if ($n >= 2) {       //Проверка коммитов и ворнингов
            $count++;
            return rec($n - 2, $m);       //в случае возможности увеличиваем счетсчик и вызываем рекурсию
        } else if ($m >= 2) {
            if ($n == 0 && $m == 2){         //доп условие для того чтобы не создать тупиковую ситуацию
                $count++;
                return rec($n,$m+1);
            }
            $count++;
            return rec($n + 1, $m - 2);
        } else if ($m == 1) {
            $count++;
            return rec($n, $m + 1);
        }
        return;
    }
    if ($war != 0 && (($err % 2 != 0) || $err != 0)) {    // Запуск функции через проверку допустимых значений
        rec($err, $war);
    } else {
        echo "-1";
    }
    if ($count != 0) {  // Вывод количества шагов
        echo $count;
    }
}
?>