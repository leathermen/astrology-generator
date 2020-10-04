<?php

function getPrognosysList()
{
    return [
        'Вас попердолит',
        'Вас не попердолит',
        'Все будет как было',
        'Да',
        'Нет',
        'Голова дай денег',
        '20 баксов есть 20 баксов',
        'Клуб кожевенного мастерства 2 блока вниз'
    ];
}

/*function getRandomPrognosys()
{
    $prognosysList = getPrognosysList();
    //To implement
}*/

function getRandomPrognosys()
{
$key = array_rand(getPrognosysList(), 1);
$prognosysList = getPrognosysList()[$key];
return $prognosysList;
}

