<?php
$articleText = "Spring is the season succeeding Winter and preceding Summer. Spring refers to the season as well as to ideas of rebirth, rejuvenation, renewal, resurrection, and regrowth. During spring an important celebration takes place: Easter Day. It varies between March 22 and April 25 in Western tradition, and between April 4 and May 8 in Eastern Christianity.";
$articleLink = "https://educon.by/index.php/pozn/fizika/104-zhidkoe-li-steklo"; /* */
$str = mb_strcut($articleText,0,199); /*Обрезаем текст статьи до 200 символов. */
$str_mas=str_word_count($str,2,"АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");/*Поиск всех слов и запись в массив их индекс начала */
$word_ind=array_keys($str_mas); /* Получаем массив индексов всех слов */
echo substr($str,0,$word_ind[array_key_last($word_ind)-2]) . "<a href=\"" . $articleLink . "\">" . substr($str,$word_ind[array_key_last($word_ind)-2]) . "...</a>"; /* Выводим строку обрезая до нужного слова, а потом вставляем оставшуюся строку с ссылкой */
/* Одна  */

?>