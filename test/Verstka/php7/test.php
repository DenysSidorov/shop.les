<?php
declare(strict_types = 1);
echo PHP_VERSION . "\n";

// указываем тип
class DD
{
    public function __construct()
    {
    }

    function dd(int $a, int $b):int
    {
        return ($a + $b) * 10;
    }

    /**
     * DD constructor.
     */

}
$dd = new DD;
echo $dd->dd(5, 5)."\n";

// ловим исключения ошибки или то и то
try {
    echo $dd->dd(true, 5)."\n";
//} catch (Error $e) {
} catch (Throwable $e) {
    echo 'da'."\n";
}


//////////////// массив  вконстанте
$arr = ["user1" => "Denis", "admin" => "Vika"];
define("DD", ["user4" => "Denis", "admin" => "Vika", "user2" => "Denis"]);

//echo print_r(DD );
//echo DD['user1'];
//print_r($arr);


//////////////////   тернарный оператор ??
$x;
//$y  =5 ;
$g = 8;
$rr = $x ?? $y ?? 'default'."\n";
echo "$rr";

define('CONST_BIG', [1,2,3,4,5,6]);
echo " const = ".CONST_BIG[1]."\n";

try {
    new Exception('das');
}catch (Throwable $r){

}
/////  Юникод поддержка юникода "\u{262F}"
echo "\u{262F}";

///// random_int(1,10);
$q1 = 0;
$q2 = 0;
$q3 = 0;
$q4 = 0;
$q5 = 0;
$q6 = 0;
$q7 = 0;
$q8 = 0;
$q9 = 0;
$q10 = 0;
for ($i = 0; $i < 10000000; $i++) {
    $d = random_int(1, 10);
    switch ($d) {
        case 1:
            $q1++;
            break;
        case 2:
            $q2++;
            break;
        case 3:
            $q3++;
            break;
        case 4:
            $q4++;
            break;
        case 5:
            $q5++;
            break;
        case 6:
            $q6++;
            break;
        case 7:
            $q7++;
            break;
        case 8:
            $q8++;
            break;
        case 9:
            $q9++;
            break;
        case 10:
            $q10++;
            break;
    }
}

echo " q1 = " . $q1 . "\n" . "   ";
echo " q2 = " . $q2 . "\n" . "   ";
echo " q3 = " . $q3 . "\n" . "   ";
echo " q4 = " . $q4 . "\n" . "   ";
echo " q5 = " . $q5 . "\n" . "   ";
echo " q6 = " . $q6 . "\n" . "   ";
echo " q7 = " . $q7 . "\n" . "   ";
echo " q8 = " . $q8 . "\n" . "   ";
echo " q9 = " . $q9 . "\n" . "   ";
echo " q10 = " . $q10 . "\n" . "   ";
$intval = intval($q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10);
echo 'sum = ' . "$intval";