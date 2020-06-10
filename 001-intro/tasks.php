<?php
/*=====exercise-02======*/
$fileName = __FILE__;
$line = __LINE__;
$strHeredoc = <<<STR
Это многострочная строка,<br>
ссозданная с использованием heredoc-синтаксиса,<br>
состоящая из трёх строк.
STR;

$fish = 'Рыба';
$homoSapiens = 'человек';

/*=====exercise-03======*/

$variable = [1, 'one', true, 3.14, null, false, ['ArrayItem']];

function ifElse($arr)
{
    foreach ($arr as $iValue) {
        if (is_bool($iValue)) {
            $result = 'boolean: bool<br>';
        } elseif (is_float($iValue)) {
            $result = "$iValue: float<br>";
        } elseif (is_int($iValue)) {
            $result = "$iValue: integer<br>";
        } elseif (is_string($iValue)) {
            $result = "'$iValue': string<br>";
        } elseif (is_null($iValue)) {
            $result = "null: null<br>";
        } else {
            $result = $iValue[0] . ': other<br>';
        }

        echo $result;
    }
}

function switchCase($arr)
{
    foreach ($arr as $iValue) {
        switch (true) {
            case is_bool($iValue):
                $type = 'bool<br>';
                break;
            case is_float($iValue):
                $type = 'float<br>';
                break;
            case is_int($iValue):
                $type = 'integer<br>';
                break;
            case is_string($iValue):
                $type = 'string<br>';
                break;
            case is_null($iValue):
                $type = 'null<br>';
                break;
            default:
                $type = 'other<br>';
        }

        echo "type is $type";
    }
}