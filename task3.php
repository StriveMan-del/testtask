<?php
$n = 11;  // Значения задаю в программе
$k = 4;
for ($i = 0; $i < $n; $i++){
    $array_num[$i] = strval($i+1);
}
/* Воспользовался сортировкой слияния с измененным методом сравнения через strcmp,
 не является лучшим способом решения задачи, много времени уходит из-за созданий
массива и его сортировки при больших значения.
 */
function merge(&$lF, &$rF)
{
    $result = array();


    while (count($lF)>0 && count($rF)>0) {
        if (strcmp($lF[0],$rF[0])<=0) {
            array_push($result, array_shift($lF));
        }
        else {
            array_push($result, array_shift($rF));
        }
    }

    array_splice($result, count($result), 0, $lF);
    array_splice($result, count($result), 0, $rF);

    return $result;
}
function merge_sort($arrayToSort)
{
    if (sizeof($arrayToSort) <= 1)
        return $arrayToSort;
    $leftFrag = array_slice($arrayToSort, 0, (int)(count($arrayToSort)/2));
    $rightFrag = array_slice($arrayToSort, (int)(count($arrayToSort)/2));
    $leftFrag = merge_sort($leftFrag);
    $rightFrag = merge_sort($rightFrag);
    $returnArray = merge($leftFrag, $rightFrag);
    return $returnArray;
}
    echo array_search(strval($k),merge_sort($array_num)) + 1; //Выводим номер элемента в отсортированом массиве

?>
