<?php

// $t = time();
// echo $t;

// установили константу START_TIME как количество микросекунд от начала “эпохи Unix”
// define("START_TIME", microtime(true));
// $n = 0;
// for ($i = 0; $i < 1000000; $i++) {
//     // робота циклу
//     $n += 1;
// }
// echo $n . "\n";
// printf("Час роботи скрипта: %.5f с", microtime(true) - START_TIME);

// echo date("l j M Y  H:i:s  F t z") . "\n";
// echo date("Сегодня d.m.Y") . "\n";
// $nextWeek = time() + (7 * 24 * 60 * 60);
// echo date("l d F Y H:i:s ", $nextWeek) . "\n";

// function age($bMonth, $bDay, $bYear)
// {
//     $cMonth = date('n'); // поточний місяць (1-12)
//     $cDay = date('j'); //поточний день місяця без нулів (1-31)
//     $cYear = date('Y'); // поточний рік (чотири разряди)
//     if (($cMonth >= $bMonth && $cDay >= $bDay) || ($cMonth > $bMonth)) {
//         return ($cYear - $bYear);
//     } else {
//         return ($cYear - $bYear - 1);
//     }
// }
// echo age(11, 29, 2019); //31


$loc = setlocale(LC_ALL, '')."\n";

echo "На этой системе локаль по умолчанию: $loc"."\n" ;
//$loc_de = setlocale(LC_ALL, 'de_DE', 'de', 'ge');
$loc_ua = setlocale (LC_ALL, 'Ukrainian_Ukraine', 'Ukrainian_Ukraine', 'Ukrainian_Ukraine');
echo "Ukrainian_Ukraine: $loc_ua"."\n" ;
echo iconv("windows-1251","utf-8", @strftime("%A %d %B %Y %X"));
//echo @strftime("%A %d %B %Y %X");