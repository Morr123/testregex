<?php

$messages = [
'Пароль: 7837
Спишется 1005,03р.
Перевод на счет 410013403010522',

'Пароль: 2045
Спишется 1000р.
Перевод на счет 410013403010522',

'Пароль: 0336
Спишется 99,5р.
Перевод на счет 410013403010522',

'Пароль: 7837
Спишется 1005,03 рублей
Перевод на счет 410013403010522',

'Пароль: 7837
Перевод на счет 410013403010522
Спишется 1005,03 рублей',

'Спишется 1005,03 рублей
Пароль: 7837
Перевод на счет 410013403010522',

'Спишется 1000 рублей
Пароль: 7837
Перевод на счет 410013403010522',

'Спишется 1000р.
Пароль: 7837
Перевод на счет 410013403010522',

'Спишется 1,99р.
Пароль: 7837
Перевод на счет 410013403010522',

'Спишется 1,99р.
Перевод на счет 410013403010522
Пароль: 7837',

'Error'
];

function getPayData($message){
  if(preg_match_all('/(\d{15})|(\d+[,\d+]{0,3})[^р]{0,1}р|(\d{4})/', $message, $matches))
    return [
      'wallet' => implode('', $matches[1]),
      'sum' => implode('', $matches[2]),
      'code' => implode('', $matches[3]),
    ];
  
  return false;
}

print_r(getPayData($messages[0]));
echo '<br>';
print_r(getPayData($messages[1]));
echo '<br>';
print_r(getPayData($messages[2]));
echo '<br>';
print_r(getPayData($messages[3]));
echo '<br>';
print_r(getPayData($messages[4]));
echo '<br>';
print_r(getPayData($messages[5]));
echo '<br>';
print_r(getPayData($messages[6]));
echo '<br>';
print_r(getPayData($messages[7]));
echo '<br>';
print_r(getPayData($messages[8]));
echo '<br>';
print_r(getPayData($messages[9]));
echo '<br>';
print_r(getPayData($messages[10]));