<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw</title>
</head>
<body>
    <?php

$str67 = '2025-10-29';
$reg67 = '#(?<year>\d{4})-(?<month>\d{2})-(?<day>\d{2})#';

preg_match($reg67, $str67, $match);
//var_dump($match);
echo "<pre>";
print_r($match);
echo "</pre>";
/*
Положите часы, минуты и секунды в отдельные именованные карманы.
*/
$strqa23 = '12:59:59';
$times23 ='#(?<hour>\w{2}):(?<min>\w{2}):(?<sec>\w{2})#';
preg_match($times23, $strqa23, $time23);
//var_dump($time23);die;
echo "<pre>";
print_r($time23);
echo "</pre>";

/*
Найдите все подстроки, в которых есть два одинаковых слова подряд.
*/
$strwer = 'aaa aaa bbb bbb ccc ddd';
$poif =preg_replace('#([a])+\1#', '!', $strwer);

echo $poif . '</br>';

/*
Найдите все подстроки,
 в которых есть две и более одинаковые буквы подряд.    
*/
$strplk = 'a aa aaa abab bbbb';
$hhhh = preg_replace('#([a-z])+\1#', '!', $strplk);

echo $hhhh .'</br>';
/*
Найдите все подстроки, в которых есть три одинаковые буквы подряд.
*/
$strplj = 'aaa bbb ccc xyz';
$hjjg= preg_replace('#([a-z])+\1#', '!', $strplj);

echo $hjjg .'</br>';
/*

Преобразуйте эту дату в '2025.12.31'.
*/    
$strqqas = '31.12.2025';
$posd =preg_replace('#([0-9]+)\.([1-9]+)\.([0-9]+)#', '$3.$2.$1', $strqqas);

echo $posd . '</br>';

/*
Поменяйте местами цифры во всех двухзначных числах.
*/

$strmv = '12 34 56 78';
$azxc = preg_replace('#([1-9]+)([1-9]+)#', '$2$1', $strmv);
echo  $azxc;
/*
Найдите каждую из таких подстрок и для каждой найденной подстроки положите
 в первый карман то, что стоит 
до разделителя, а во второй карман - то, что стоит после разделителя.
*/
$strasd= 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb';
$asd = '#([a-z]+)(?:\$\@)+([a-z]+)#';
preg_match_all($asd, $strasd,$frd);
echo "<pre>";
print_r($frd);
echo "</pre>";
/*
Модифицируйте предыдущую задачу так, чтобы в первый подмассив попала 
первая дата с ее карманами, во второй подмассив - вторая с ее 
карманами и так далее.
*/
$strsd1 = '2023-10-29 2024-11-30 2025-12-31';
$sd1 = '#([0-9]+)-([0-9]+)-([0-9]+)#';
preg_match_all($sd1, $strsd1, $as1, PREG_SET_ORDER);
echo "<pre>";
print_r($as1);
echo "</pre>";
/*
Найдите все даты, отделив год, месяц и день в отдельные карманы.
*/

$strsd = '2023-10-29 2024-11-30 2025-12-31';
$sd = '#([0-9]+)-([0-9]+)-([0-9]+)#';
preg_match_all($sd, $strsd, $as );
echo "<pre>";
print_r($as);
echo "</pre>";
/*
Дана строка. Узнайте, сколько чисел в этой строке.
*/

$dhl = 'fff ddd 7dd 7vf 86fd';

echo preg_match_all('#[0-9]#', $dhl);
/*
Положите имя файла и его расширение в отдельные карманы.
*/

$strmn = 'index.html';
$op = '#([a-z]+)\.([a-z]+)#';
preg_match($op, $strmn, $ul);
echo "<pre>";
print_r($ul);
echo "</pre>";
/*
Положите год, месяц и день в отдельные карманы.
*/

$strjk= '2025-12-31';
$red = '#([0-9]+)\-([0-9]+)\-([0-9])#';
preg_match($red, $strjk,$kl);
echo "<pre>";
print_r($kl);
echo "</pre>";
// $refi ='2025-12-31';
// $ref ='#([0-9]{4,}+)-([1-9]{2,})+)-([1-9]{2,})#';
//  preg_match($ref,$refi,$ry);

// var_dump($ry);

/*
Определите, является ли переданная строка 
является доменом. Используйте для тестов следующие строки:
*/
// $reg ='#[a-yA-Y1-9]@[a-z].[a-z]#';

// $arr[] = 'addr@mail.ru';    // +
// 	$arr[] = 'addr123@mail.ru'; // +
// 	$arr[] = 'my-addr@mail.ru'; // +
// 	$arr[] = 'my_addr@mail.ru'; // +
// 	$arr[] = 'addr@site.ru';    // +
// 	$arr[] = 'addr.ru';         // -
// 	$arr[] = 'addr@.ru';        // -
// 	$arr[] = 'my@addr@mail.ru'; // -

//     foreach ($arr as $qw){
//         echo $qw . ' '.preg_match($reg, $qw).'</br>';
//     }

/*
Определите, заканчивается ли переданная строка
 расширением txt, html или php.
*/
$qsdi='image.php';
$pasi=preg_match('#(php|html)$#',$qsdi);
echo $pasi;

echo "</br>";
/*
Определите, начинается ли переданная строка с http или с https.
*/
$qsd='http://code.mu/ru/php/book/prime/regular/string-checking/';
$pasi=preg_match('#https#',$qsd);
echo $pasi;

echo "</br>";
/*
Определите, начинается ли переданная строка с http.
*/

$stri ='http://code.mu/ru/php/book/prime/regular/string-checking/';
$pas=preg_match('#http#',$stri);

echo $pas;
echo "</br>";

/*
	$str = '[abc] {abc} abc (abc) [abc]';

Напишите регулярку, которая найдет строки в любых скобках и 
заменят их на '!'.
*/ 
$str5 = '[abc] {abc} abc (abc) [abc]';
$lkj5=preg_replace('#[\[\]{}()]+#','!', $str5);

echo $lkj5;

echo "</br>"; 
/*
	$str = 'x[]z x{}z x.z x()z';
Напишите регулярку, которая найдет все слова по шаблону: буква 'x', 
затем любое количество любых скобок, затем буква 'z'.
*/
$str5 = 'x[]z x{}z x.z x()z';
$lkj5=preg_replace('#x[\[\]{}()]+z#','!', $str5);

echo $lkj5;

echo "</br>"; 
/*
Напишите регулярку, которая найдет
 строки по шаблону: не цифра и не буква от 'a' до 'g' от 3 до 7 раз.
*/ 
$str4 = 'xaz x.z x3z x@z x$z xrz';
$lkj4=preg_replace('#[^a-g3-7]#','!', $str4);

echo $lkj4;

echo "</br>";  
/*
Напишите регулярку, 
которая найдет строки по шаблону: цифра или точка от 1 и более раз.
*/

$str3 = 'xaz x.z x3z x@z x$z xrz';
$lkj3=preg_replace('#[\d.]+#','!', $str3);

echo $lkj3;

echo "</br>";
/*
Напишите регулярку, которая найдет строки по шаблону: буква 'x', 
затем НЕ точка, НЕ собака, и НЕ доллар, а потом буква 'z'.
  */

  $str2 = 'xaz x.z x3z x@z x$z xrz';
$lkj=preg_replace('#x[^.@$]z#','!', $str2);

echo $lkj;

echo "</br>";

/*
Напишите регулярку, 
которая найдет строки 'a.a', 'a+a', 'a*a', не затронув остальных.

*/
$str1 = 'aba aea aca aza axa a.a a+a a*a';

$jhg=preg_replace('#[.+*]#','!',$str1);

echo $jhg;
echo "</br>";
/*
Напишите регулярку, которая 
найдет все слова по шаблону: любая кириллическая буква любое количество раз.
*/
$strwasi = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
$wasi=preg_replace('#[а-яёА-яЁ]+#u','!', $strwasi);


echo $wasi;
echo "</br>";
/*
/*
Напишите регулярку, которая найдет строки
 по шаблону: по краям стоят буквы 'w', а между ними - буква кириллицы.
*/
$strwas = 'wйw wяw wёw wqw';
$was=preg_replace('#w[а-яё]+w#u','!', $strwas);


echo $was;
echo "</br>";
/*
Напишите регулярку, которая найдет строки по шаблону: буква 'x', затем 
НЕ большая маленькая латинская буква и не цифра от 1 до 5 от 1 и более раз, 
буква 'z'.
*/
$strwd = 'xbz xаaz x1z x8z x67z 1ex2 1as2 xSDfff15z';
$fdsfd=preg_replace('#x[^a-xA-X1-5]+z#','!', $strwd);


echo $fdsfd;
echo "</br>";
/*
Напишите регулярку, которая найдет строки по шаблону: 
буква 'x', затем НЕ большая латинская буква от 1 и более раз, буква 'z'.
*/

$strwqk = 'xbz xаaz x1z xCz 1ex2 1as2 xSDFGSz';
$fdsf=preg_replace('#x[^A-X]+z#','!', $strwqk);


echo $fdsf;

echo "</br>";
/*
Напишите регулярку, которая
 найдет строки по шаблону: буква 'x', затем НЕ цифра от 2 до 7, буква 'z'.
*/
$strwqq = 'xaz xbz x1z xCz 1ex2 1as2 1df2 xfgfz x28z x18z';
$fdsq=preg_replace('#x.[^2-7]z#','!', $strwqq);


echo $fdsq;
echo "</br>";
/*
Напишите регулярку, которая найдет 
строки по шаблону: цифра '1', затем символ не 'e' и не 'x', цифра '2'.
*/
$strwq = 'xaz xbz x1z xCz 1ex2 1as2 1df2';

$fds=preg_replace('#1.[^ex]2#','!', $strwq);

echo $fds;
echo "</br>";
    /* 
Напишите регулярку, которая найдет по следующему шаблону: по краям стоят
 буквы 'a', а между ними - маленькие латинские буквы и цифры, не затронув остальных.
*/
$strlpf = 'aAXa aeffa aGha aza ax23a a3sSa';
$pods = preg_replace('#a[a-z0-9]+a#', '!', $strlpf);
echo $pods;
echo '</br>';
/*
    /* 

Напишите регулярку, которая найдет по следующему шаблону: по краям стоят 
буквы 'a а между ними - маленькие и большие латинские буквы, 
не затронув остальных.
*/
$strr = 'aAXa aeffa aGha aza ax23a a3sSa';

$ret =preg_replace('#a[a-zA-Z]*a#','!',$strr);
echo $ret;
echo '</br>';
/*
/* 
Напишите регулярку, которая найдет по следующему шаблону: 
по краям стоят буквы 'a', 
а между ними - маленькие латинские буквы, не затронув остальных.
*/
$strno = 'aAXa aeffa aGha aza ax23a a3sSa';
$ghj=preg_replace('#a[a-z]+a#','!',$strno);
echo $ghj;
echo '</br>';
/*
Напишите регулярку, которая найдет по следующему шаблону: по краям стоят 
буквы 'a', а между ними - маленькие латинские буквы, не затронув остальных.
*/

echo "</br>";
    /*  
    Напишите регулярку, которая найдет по следующему шаблону: 
    по краям стоят буквы 'a', а между ними - буква от a до f и от A до D.
    */
	$strg = 'aAa aea aEa aJa a3a';

    $dfr = preg_replace('#a[a-fA-D]a#','!',$strg);
    echo $dfr;
    echo "</br>";
/*
Напишите регулярку, которая найдет по следующему шаблону: 
по краям стоят буквы 'a', а между ними - буква от a до f и от j до z.
*/
$stre = 'aba aea afa aha aga ava';
$plo=preg_replace('#a[a-fj-z]a#','!',$stre);

echo $plo;
echo "</br>";

/*
Напишите регулярку, которая найдет по следующему 
шаблону: по краям стоят буквы 'a', а между ними - буква от a до g.
*/
$strd = 'aba aea afa aha aga';
$asq =preg_replace('#a[a-g]a#','!',$strd);
echo $asq;
echo "</br>";
/*
Напишите регулярку, которая найдет по следующему шаблону: 
по краям стоят буквы 'a', а между ними - цифра от 3-х до 6-ти.
*/
$strn = 'a1a a3a a7a a9a aba';
$as =preg_replace('#a[1-6]a#','!',$strn);

echo $as;
echo "</br>";
/*
Напишите регулярку, которая найдет по следующему шаблону:
 по краям стоят буквы 'a', а между ними - буква 'b', 'e' или 'x'.
*/

$strx = 'aba aea aca aza axa';
$xc =preg_replace('#a[bex]a#','!',$strx);

echo $xc;

echo "</br>";
    /*
Напишите регулярку, которая заменит все пробелы на '!'.
    */
	$strj = 'ave a#b a2b a$b a4b a5b a-b acb';
$gh =preg_replace('#\s#','!',$strj);

echo $gh;

    echo "</br>";
    /*
Напишите регулярку, которая найдет строки следующего вида:
 по краям стоят буквы 'a' и 'b', а между ними - не буква и не цифра.
    */
	$strh = 'ave a#b a2b a$b a4b a5b a-b acb';
    $lk = preg_replace('#a\Wb#','!',$strh);

    echo $lk;

    echo "</br>";
/*
Напишите регулярку, которая найдет строки следующего вида: 
по краям стоят буквы 'a' и 'b', а между ними - не число.
*/

$strf = 'avb a1b a2b a3b a4b a5b abb acb';
$pf = preg_replace('#a\Db#','!',$strf);


echo $pf;
echo "</br>";
    /*
Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a',
 а между ними 
любое количество цифр (в том числе и ноль цифр, то есть строка 'aa').
    */
    $strm = 'aa a1a a22a a333a a4444a a55555a aba aca';
$po= preg_replace('#a\d*a#','!',$strm);

echo $po;
    echo "</br>";
    /*
Напишите регулярку, которая найдет строки,
 в которых по краям стоят буквы 'a', а между ними любое количество цифр.
    */
    $strz = 'a1a a22a a333a a4444a a55555a aba aca';

    $pr = preg_replace('#a\d+a#','!',$strz);

    echo $pr;
    echo "</br>";
/*
Напишите регулярку, которая найдет 
строки, в которых по краям стоят буквы 'a', а между ними одна цифра.
*/

$strk = 'a1a a2a a3a a4a a5a aba aca';

$uy = preg_replace('#a+\da#','!',$strk);

echo $uy;
echo "</br>";
/*

Напишите регулярку, которая найдет все строки по краям которых стоят буквы 'a', и заменит
 каждую из них на '!'. Между буквами a может быть любой символ (кроме 'a').
*/

$strl= 'aba accca azzza wwwwa';
$rt =preg_replace('#a.*?#','!',$strl);


echo $rt;
echo "</br>";
    /*
Напишите регулярку, которая найдет строки вида 'aba', 
в которых 'b' встречается более четырех раз (включительно).
    */
	$strq = 'aa aba abba abbba abbbba abbbbba';
    $ry = preg_replace('#ab{4,}a#','!', $strq);
    echo $ry;

    echo "</br>";
/*
Напишите регулярку, которая найдет строки вида 'aba',
 в которых 'b' встречается менее трех раз (включительно).
*/
$stru = 'aa aba abba abbba abbbba abbbbba';
$rew =preg_replace('#ab{1,3}a#','!', $stru);

echo $rew;
echo "</br>";
    /*
Напишите регулярку, 
которая найдет строки 'abba', 'abbba', 'abbbba' и только их.
    */
    $stri = 'aa aba abba abbba abbbba abbbbba';
    $re = preg_replace('#ab{2,}a#', '!', $stri);
    echo $re;

    echo "</br>";

$str1 ='[abc] {abc} abc (abc) [abc]';
$res1 = preg_replace('#\[...\]+#', '!', $str1);

echo $res1;

echo "</br>";
/*
Напишите регулярку, которая найдет строки 'ahb', 'acb', 'aeb' 
по шаблону: буква 'a', любой символ, буква 'b'.

*/

// $str = 'ahb acb aeb aeeb adcb axeb';



// echo preg_replace ('#a.b#',' ' , $str);

echo "</br>"
;
/*
Сделайте функцию, которая параметром будет
принимать два числа и возвращать массив их общих делителей.
*/



    /*

    Найдите все счастливые билеты. Счастливый билет - это билет, в котором 
    сумма первых трех цифр его номера равна сумме вторых трех цифр его номера.
    */



    echo "</br>";
/*
Сделайте функцию, которая будет проверять число на совершенность. 
Совершенное число - 
это число, сумма собственных делителей которого равна этому числу.
*/
function deLimiter($num){
    $ar =[];
    for($i=1; $i<$num; $i++){
        if($num%$i ==0){
            $ar[] =$i;
        }
    }return $ar;
}
function sumDeLimiter ($arr){
    
        $sum=0;
        $l = count($arr);
        for($i=0; $i<$l;$i++){
            $sum+=$arr[$i];
        }return $sum;
        
    }
    

function isPerfect($numi){
    $sum = sumDeLimiter(deLimiter($numi));
    
    if ($sum == $numi){
        return "Number $numi is the same $sum  </br>";
    }else{
        return "Number $numi  is not the same $sum</br>";
    } 
}

$num =8128;
echo "<pre>";
print_r(isPerfect($num));
// print_r(sumDeLimiter(deLimiter($num)));
 print_r(deLimiter($num));
echo "</pre>";
echo "</br>";
    /*
    Используя созданную вами функцию из предыдущей задачи
     найдите все пары дружественных чисел в промежутке от 1 до 1000.
     НЕ РЕШЕНА
*/
// function getOwnDilimiter($num){
//     $delimeter =[];
//     $sum=0;
//     for($i=1;$i<$num; $i++){
//         if ($num%$i ==0){
//             $delimeter []=$i;

//         }
//     }return $delimeter;
// }
// function sumNumDelimiter($arr){
//     $sum=0;
//     $l = count($arr);
//     for($i=0; $i<$l;$i++){
//         $sum+=$arr[$i];
//     }return $sum;
// }

// function checkNumber($num1, $num2){
//     $sum1 =sumNumDelimiter(getOwnDilimiter($num1));
//     $sum2 =sumNumDelimiter(getOwnDilimiter($num2));
//     if ($sum1 ==$num2 && $sum2 ==$num1){
//         return  "numbers  $num1 and $num2 are friendly";
//     }else {
//         return "numbers $num1 and $num2 are not friendly";
//     }
// }

// $num1=range(1,1000);
// // $num2=1210;
//  echo checkNumber(sumNumDelimiter(getOwnDilimiter($num1));),
// //sumNumDelimiter(getOwnDilimiter($num2));) );
//   echo "</br>";
//  echo sumNumDelimiter(getOwnDilimiter(48));

// echo "<pre>";
// print_r(getOwnDilimiter(1184));
// print_r(getOwnDilimiter(1210));
// echo "</pre>";

/*
Сделайте функцию, которая будет проверять пару чисел на дружественность. 
Дружественные числа - два числа, для которых сумма всех собственных делителей
 первого числа равна второму числу и наоборот, 
сумма всех собственных делителей второго числа равна первому числу.
*/

function frienlyNumber($num){
    $delimeter =[];
    $sum=0;
    for($i=1;$i<$num; $i++){
        if ($num%$i ==0){
            $delimeter []=$i;

        }
    }return $delimeter;
}
function sumNum($arr){
    $sum=0;
    $l = count($arr);
    for($i=0; $i<$l;$i++){
        $sum+=$arr[$i];
    }return $sum;
}

function checkFriendlyNumber($num1, $num2){
    $sum1 =sumNum(frienlyNumber($num1));
    $sum2 =sumNum(frienlyNumber($num2));
    if ($sum1 ==$num2 && $sum2 ==$num1){
        return  "numbers  $num1 and $num2 are friendly";
    }else {
        return "numbers $num1 and $num2 are not friendly";
    }
}

$num1 =24;
$num2=48;
 echo checkFriendlyNumber(sumNum(frienlyNumber($num1)),sumNum(frienlyNumber($num2)) );
//   echo "</br>";
//  echo sumNum(frienlyNumber(48));

echo "<pre>";
print_r(frienlyNumber(24));
print_r(frienlyNumber(48));
echo "</pre>";
echo "</br>";
    function funcx($arr) {
		$length = count($arr);
		
		for ($i = 0; $i < $length; $i++) {
			if (is_array($arr[$i])) {
				$arr[$i] = funcx($arr[$i]);
			} else {
				$arr[$i] = $arr[$i] . '!';
			}
		}
		
		return $arr;
	}
	
	var_dump(funcx([1, [2, 7, 8], [3, 4, [5, 6]]]));
    /*
Возведите все элементы-числа этого массива в квадрат.
    */
    $arrz = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];

    function elemSqrt($arr){
        $l = count($arr);
        for ($i=0; $i<$l;$i++){
            if (is_array($arr[$i])){
                $arr[$i]= elemSqrt($arr[$i]);
                
            }else{
                $arr[$i]=sqrt($arr[$i]);
                //var_dump($arr[$i]);
            }
        }return $arr;
        
    }
echo "<pre>";
print_r(elemSqrt($arrz));
echo "</pre>";
    /*
    	 С помощью рекурсии слейте элементы этого массива в одну строку:
     */
    $arrs = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 
		'k']]]];
function oneRaw($arr){
    foreach($arr as $aw){
        if (is_array($aw)){
            oneRaw($aw);
        }else {
            echo $aw;
        }
    }
}

echo oneRaw($arrs);
     echo "</br>";
/*

С помощью рекурсии найдите сумму элементов этого массива.
*/
function sumElem($arr){
    $sum = 0;
    foreach ($arr as $rc){
        if(is_array($rc)){
        $sum += sumElem($rc);
        }else {
            $sum+=$rc;
        }
    }return $sum;
}
$arrop = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
echo sumElem($arrop);

echo "</br>";
/*С помощью рекурсии выведите все 
примитивные элементы этого массива на экран.

*/
$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];

function primitiv($arr){
foreach ($arr as $ari){
    if (is_array($ari)){
        primitiv($ari);
    }else{
        echo 
         $ari;
    }
}

}
primitiv($arr);

echo "</br>";
function gerSumi($arr){
    $sum = array_shift($arr);

    if (count($arr) !==0){
        $sum += gerSumi($arr);
    } return $sum;
}

var_dump(gerSumi([6, 2, 3]));


echo "</br>";
    function getSum($arr) {
		$sum = array_shift($arr);
		
		if (count($arr) !== 0) {
			$sum += getSum($arr);
		}
		
		return $sum;
	}
	
	var_dump(getSum([1, 2, 3]));

    echo "</br>";

$arrc = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' 
=> 5]; 

function recursia($arr){
    var_dump(array_shift($arr));
     //var_dump($arr);
if(count($arr) !==0){
    recursia($arr);
}
}

echo "<pre>";
print_r (recursia($arrc));
echo "</pre>";

/*
Пусть у нас дано число. Давайте
получим все собственные делители этого числа, являющиеся простыми числами.
*/

// function getPrimeDivisors($num) {
//     $result = [];
//     $divs = getOwnDivisors($num);
    
//     foreach ($divs as $div) {
//         if (isPrime($div)) {
//             $result[] = $div;
//         }
//     }
    
//     return $result;
// }

// echo "<pre>";
// print_r (getPrimeDivisors(24));

// echo "</pre>";

// function getOwnDivisors($num){
// $res =[];
// for ($i=1; $i <$num; $i++){
//     if ($num%$i ==0){
//         $res[]=$i;
//     }
// } return $res;
// }


// function isPrime($arc){
//     $ru =[];
//     $l =count($arc);
// var_dump($arc);
// for ($i=1; $i <$l;$i++){
//     if ($arc[$i]%$i !==0){
//         $ru[]=$i; 
//     }
// }return $ru;var_dump($ru);
            

// }

// //echo getOwnDivisors(24);
// echo "<pre>";
// print_r (isPrime(getOwnDivisors(24)));

// echo "</pre>";
    /*
    Напишите код, который будет находить среднее от делителей заданного числа.
    */

 function getDelite($num){
$arr =[];
for ($i=1; $i<$num; $i++){
    if ($num %$i ==0){
        $arr[]=$i;
    }
} return $arr;
 }



 function getAvrDel($arr){
     if (!empty($arr)){
     $l = count($arr);
     var_dump ($l);
     return array_sum($arr)/$l;}
 }

 echo getAvrDel(getDelite(24));
echo "<pre>";
print_r (getDelite(24));
echo "</pre>";

//  echo getAvrDel(getDelite(15));
    echo "</br>";
    /*
Сделайте функцию, которая параметром будет принимать массив
 и проверять, есть ли в этом массиве два одинаковых элемента подряд.
    */
$arr = [1,2,3,4,5,5];

function twoSimilarNumber($arr){
    foreach ($arr as $ar){
        $l=count($arr);
        for ($i=0;$i <$l; $i++){
            if(($arr[$i])==$i){
                return "В этом массиве есть одинаковые";
            }
        }
    }return "В этом массиве нет одинаковых";
}

 echo twoSimilarNumber($arr);

/*
Сделайте функцию, которая параметром будет принимать число и проверять,
 что все цифры это числа являются нечетными.
  не решена */
// $nu = 111;

// $nus =str_split($nu);
// $arri =array_map('intval',$nus);

// function oddNum($arr){

//       var_dump($arr);
//     foreach ($arr as $aris){
//         if ($k [$aris] % 2 !==0){
//             return "all numbers are odd";
//         }
//     }
// return "not all number are odd";
// }

// echo "<pre>";
//  print_r (oddNum($arri));
//  echo "</pre>";

echo "</br>";
    /*
Сделайте функцию, которая параметром будет принимать массив с числами, 
и проверять, что все элементы в этом массиве являются четными числами.
    */
$ari =[6,2,8,8];

function evenNumber ($arr){
    foreach ($arr as $aris){
        if ($aris % 2 !==0){
            return "Not all numbers are  even";
        }
    }
return "numbers are even";
}



echo  evenNumber($ari);
/*
Сделайте функцию delElem, которая параметрами будет принимать
 значение и массив и удалять из массива все элементы с таким значением.
*/
$arc = range (1,20);

function delElem ($num, $arr){

    $le = count($arr);

    
for ($i=0; $i <$le; $i++){
    if ($num === $arr[$i]){
    
      unset ($arr[$i]);
      
    } else{
         "there is no pass";
    }

} return $arr;

}

echo "<pre>";
print_r (delElem(15, $arc));
echo "</pre>";
echo "</br>";

/*
Реализуйте функцию getDivisors, которая параметром будет 
принимать число и возвращать 
массив его делителей, то есть целых чисел, на которое делится наше число.
*/
function getDivisors($num){
    $arr =[];
    for ($i=1; $i <= $num; $i++){
        if ($num % $i ==0){
        $arr[]=$i;}
    }
    return $arr;
}

$rs = getDivisors(50);
echo "<pre>";
print_r ($rs);
echo "</pre>";

/*
Напишите функцию,
которая будет находить сумму квадратных корней элементов массива.

*/

$arc = [1,2,3,5,6];

function sumSqrt($arr){

$sum=0;
$le =count($arr);
var_dump($le);
    for ($i=1; $i<=$le; $i++){
       $sum+=sqrt($i);
    }
return $sum;
}


 echo sumSqrt ($arc);
echo "</br>";
/*
Напишите функцию, которая параметром будет принимать число и 
делить его на 2 столько раз, пока результат не станет меньше 10. 
Пусть функция возвращает количество итераций, 
которое потребовалось для достижения результата.
*/

echo "</br>";
function dev($num){
    $iter=0;
    while($num >10){
        $num/=2;
        $iter ++;
    }return $iter;
}
echo dev (30);
echo "</br>";
function numDevide ($num){
$i=0;
for(; $num > 10; $i++){
    $num /=2;
}
return $i;
}

echo numDevide (100);

// $ar = array(1,2,7,4);

// function sumNum($arr){
//     $l= count ($arr);
//     $sum=0;
//     for($i=0; $i<$l; $i++){
//         $sum +=$arr[$i];
//         if ($sum >=10){
//             return $i+1;
//         }
//     }
// }
// echo sumNum($ar);
echo "</br>";
/*
Сделайте функцию, которая параметром принимает число, а
возвращает квадратный корень из этого числа. С помощью этой функции 
найдите корень числа 3, затем найдите корень числа 4. 
Просуммируйте полученные результаты и выведите их на экран.
*/


function numberSqrt($num){
    return sqrt ($num);
}

$result = numberSqrt(3) + numberSqrt(4);

echo $result;
    echo "</br>";
/*
Сделайте функцию, которая параметром принимает число, 
а возвращает куб этого числа.
С помощью этой функции найдите куб числа 3 и запишите 
его в переменную $result.
*/

function no($number){
    return pow($number,3);
}

$result = no(3);

echo $result;
    echo "</br>";

/*Сделайте функцию func, которая параметром будет принимать 3 числа и 
выводить на экран их сумму. 
С помощью этой функции выведите на экран сумму значений следующих переменных:
*/

$param1 = 1;
$param2 = 2;
$param3 = 3;
function nui($ni1,$ni2,$ni3){
echo $sum = $ni1+$ni2+$ni3;
}

nui($param1,$param2,$param3);

echo "</br>";
/*Сделайте функцию, 
которая параметрами принимает 3 числа и выводит на экран сумму этих чисел.
*/

function nus($n1, $n2, $n3){
    echo $sum=$n1+ $n2+ $n3;

}

nus(2,1,1);

echo "</br>";
/*
Сделайте функцию, которая параметром принимает число и проверяет, 
положительное это число или отрицательное
. В первом случае пусть функция выводит на экран текст '+++', 
а во втором '---'.
*/


function nuf($num){
    if($num >0){
        echo "Число положительное";
    }else {
        echo "Число отрицательное";
    }
}

nuf(-2);
echo "</br>";

/*Сделайте функцию, которая 
параметром принимает число и выводит на экран куб этого числа.
*/

function func($num) {
    $nu =pow($num,3);
    return $nu;		
}

echo func(2); // в переменную $num попадет число 2
	// func(3); // в переменную $num попадет число 3

echo "</br>";
echo "</br>";
//Сделайте функцию, выводящую на экран сумму чисел от 1 до 100.

function fuw(){
    $i=1;
    while($i<=30){
         echo $i++ ."</br>";
    }
}
fuw();

echo "</br>";
 $arr = range(1,25);
function num($num){
    for ($i =0; $i <25; $i++){
        echo $num[$i]. "</br>";
    }
}
num ($arr);

function number(){

    echo "<pre>";
   print_r (range(1,20));
   echo "</pre>";
    
}

number();

echo "</br>";
    //cделайте функцию, выводящую на экран ваше имя.
    $name ='Sveta';
 function name($string){
     echo $string;
 }
 name($name);
    ?>
</body>
</html>