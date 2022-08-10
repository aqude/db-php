<?php

$products = array(
    'pens' => array(
        'хуйня какая-то' => '20 руб',
        'huina rucka' => '100 rub',
        'ebata kakaeta' => '344 rub'
    ),
    'misc' => array(
        'pivo' => '100 rub',
        'vodka' => '200 rub',
        'eblanko' => '300 rub',
        'viski' => '1000 rub'
    )
);
echo "<pre>";
foreach ($products as $product => $items) {
    foreach ($items as $key => $value) {
        echo "$product: ($key) = $value \n";
    }
}
echo "</pre>";