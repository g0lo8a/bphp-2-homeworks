<?php
declare(strict_types=1);

const OPERATION_EXIT = 0;
const OPERATION_ADD = 1;
const OPERATION_DELETE = 2;
const OPERATION_PRINT = 3;
const OPERATION_CHANGE = 4;

$operations = [
    OPERATION_EXIT => OPERATION_EXIT . '. Завершить программу.',
    OPERATION_ADD => OPERATION_ADD . '. Добавить товар в список покупок.',
    OPERATION_DELETE => OPERATION_DELETE . '. Удалить товар из списка покупок.',
    OPERATION_PRINT => OPERATION_PRINT . '. Отобразить список покупок.',
    OPERATION_CHANGE => OPERATION_CHANGE . '. Изменить наименование товара.',
];

$items = [];

function printItemsList($items)
{
    if (count($items)) {
        echo 'Ваш список покупок: ' . PHP_EOL;
        echo implode("\n", $items) . "\n";
    } else {
        echo 'Ваш список покупок пуст.' . PHP_EOL;
        echo 'Выберите операцию для выполнения: ' . PHP_EOL;
    }
}

function printOperationsList($items, $operations)
{
    system('clear');
    do {
        printItemsList($items);

        if (!count($items)) {
            unset($operations[OPERATION_DELETE], $operations[OPERATION_CHANGE], $operations[OPERATION_PRINT]);
        }
        echo implode(PHP_EOL, $operations) . PHP_EOL . '> ';
        $operationNumber = trim(fgets(STDIN));

        if (!array_key_exists($operationNumber, $operations)) {
            system('clear');

            echo '!!! Неизвестный номер операции, повторите попытку.' . PHP_EOL;
        }

    } while (!array_key_exists($operationNumber, $operations));
    return $operationNumber;
}

function addItem(array &$items): array
{
    echo "Введение название товара для добавления в список: \n> ";
    $itemName = trim(fgets(STDIN));
    $items[] = $itemName;
    return $items;
}

function deleteItem(array &$items)
{
    if (count($items)) {
        printItemsList($items);

        echo 'Введение название товара для удаления из списка:' . PHP_EOL . '> ';
        $itemName = trim(fgets(STDIN));

        if (in_array($itemName, $items, true) !== false) {
            while (($key = array_search($itemName, $items, true)) !== false) {
                unset($items[$key]);
            }
        }
    }
    printItemsList($items);
}

function changeItemName(array &$items)
{
    if (count($items)) {
        printItemsList($items);

        echo 'Введение название товара, наименование которого будем менять:' . PHP_EOL . '> ';
        $itemName = trim(fgets(STDIN));

        if (in_array($itemName, $items, true) !== false) {
            while (($key = array_search($itemName, $items, true)) !== false) {
                $items[$key] = trim(fgets(STDIN));
            }
        }
    }
    printItemsList($items);
}

function showItemsList(array $items)
{
    printItemsList($items);
    if (count($items)){
        echo 'Всего ' . count($items) . ' позиций. ' . PHP_EOL;
    }
    echo 'Нажмите Return ⏎ для продолжения';
    fgets(STDIN);
}

do {

    $operationNumber = printOperationsList($items, $operations);

    echo 'Выбрана операция: ' . $operations[$operationNumber] . PHP_EOL;

    switch ($operationNumber) {

        case OPERATION_ADD:
            addItem($items);
            break;

        case OPERATION_DELETE:
            deleteItem($items);
            break;

        case OPERATION_PRINT:
            showItemsList($items);
            break;

        case OPERATION_CHANGE:
            changeItemName($items);
            break;
    }

    echo "\n ----- \n";
} while ($operationNumber > 0);

echo 'Программа завершена' . PHP_EOL;