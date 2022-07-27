<!-- Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->

<?php

$name = " Povilas";
$surname = " Kotok";
$birthYear =  1999;
$year = 2022;
$age = $year - $birthYear;

echo " Aš esu " . $name . $surname . ". Man yra " . $age . " metai. <br>"


 ?>
 <!-- Naudokite funkcija Math.random(). Sukurkite du kintamuosius ir naudodamiesi funkcija Math.random() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4 (sveiki skaičiai). Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. -->

<?php 
echo "================================= task #2 ================================= <br>";
$firstVar = random_int(0, 4) ;
echo $firstVar . "  #1 <br>";
 
$secondVar = random_int(0, 4);
echo $secondVar . "  #2 <br>";

if ($secondVar > $firstVar ) {
    if($firstVar==0)
    {
        echo " dalyba is 0 negalima";
        die;
    }
    $resultOfDivision = $secondVar/$firstVar;
}

if ($firstVar > $secondVar ) {
    if($secondVar==0)
    {
        echo " dalyba is 0 negalima";
        die;
    }
    $resultOfDivision = $firstVar/$secondVar;
}
if ($firstVar == 0 || $secondVar == 0) {
    
        echo " dalyba is 0 negalima";
        die;
    
    
}
else 
{
    $resultOfDivision = $secondVar/$firstVar;
}
$roundedResult = round ($resultOfDivision, 2);
echo $roundedResult .  "<br>";

echo "================================= task #3 ================================= <br>";
// Naudokite funkcija Math.random(). Sukurkite tris kintamuosius ir naudodamiesi funkcija Math.random() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25 (sveiki skaičiai). Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

$firstRandomNumber = random_int(0, 25) ;
echo $firstRandomNumber . "  #1 <br>";
$secondRandomNumber = random_int(0, 25) ;
echo $secondRandomNumber . "  #2 <br>";
$thirdRandomNumber = random_int(0, 25) ;
echo $thirdRandomNumber . "  #3 <br>";
$numbers = [$firstRandomNumber, $secondRandomNumber, $thirdRandomNumber ];
$middleNumber = array_sum($numbers) - min($numbers) - max($numbers);
echo " Vidurinis skaicius yra " . $middleNumber . "<br>";

echo "================================= task #8 ================================= <br>";
// Naudokite funkcija Math.random(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100  (sveiki skaičiai). Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

$fourthRandomNumber = random_int(0, 100) ;
echo $fourthRandomNumber . "  #1 <br>";
$fifthRandomNumber = random_int(0, 100) ;
echo $fifthRandomNumber . "  #2 <br>";
$sixthRandomNumber = random_int(0, 100) ;
echo $sixthRandomNumber . "  #3 <br>";

$threeNumbers = [$fourthRandomNumber, $fifthRandomNumber, $sixthRandomNumber];

$average =round( array_sum($threeNumbers)/ count($threeNumbers), 0);
echo " math.average = " . $average;


echo " <br> ================================= task #6 ================================= <br>";

// Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​Math.random()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų

$petrasPointsPerRound = random_int(10, 20);
$kazysPointsPerRound = random_int(5, 25);
$petrasTotal = 0;
$kazysTotal = 0;

for ($i=0; $i <20 ; $i++) { 
$petrasPointsPerRound = random_int(10, 20);
$kazysPointsPerRound = random_int(5, 25);
$petrasTotal += $petrasPointsPerRound;
$kazysTotal += $kazysPointsPerRound;
    if ($petrasTotal > 221 || $kazysTotal > 221 ){
        break;
    }
}

if ($kazysTotal > $petrasTotal && $petrasTotal < 222)
{
    echo "Laimejo Kazys per " . $i . " partiju <br>";
}
if ($kazysTotal < $petrasTotal && $kazysTotal < 222)
{
    echo "Laimejo Petras per " . $i . " partiju <br>";
}
if ($kazysTotal == $petrasTotal || $petrasTotal > 222 && $kazysTotal > 222)
{
    echo "Lygiosios po " . $i . " partiju <br>";
}
echo "Kazio taskai : " . $kazysTotal . "<br>" . "Petro taskai : ". $petrasTotal;


echo " <br> ================================= task #9* ================================= <br>";

// Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio. (reikės split() funkcijos ir masyvų.)





// for ($step=0; $step < 51 ; $step++) {
//     $numberGenerator = random_int(1, 200); 
//     $array1[$step] = $numberGenerator = random_int(1, 200);
// }

$array2 = range(1, 200);
shuffle($array2);
$array2 = array_slice($array2, 0, 50);
echo "<br>";
echo "First string : " . implode(" ", $array2) . "<br>"; 

for ($step=0; $step < 50 ; $step++)
{
    $counter = 0;
    for ($step2=1; $step2 <=($array2[$step] / 2 ) ; $step2++) { 
    $result = $array2[$step] % $step2;

    if( $result == 0){
         $counter ++;  
    }

    }
     if($counter == 1){
        $array3[]=$array2[$step];
    }

}
sort($array3);

echo "Primary numbers : " . implode(" ", $array3) . "<br>"; 
echo " <br> ================================= task 2 ================================= <br>";
// array conversion to a string

// $array1 = array_unique($array1 ); //unique array elements, this string has to be equal to the first one

// echo implode(" ", $array1); 


// Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki 3000, kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti.
$arrayTaskTwo = range(1, 3000);

for ($times=0; $times < 3000 ; $times++) {
    
    $result2 = $arrayTaskTwo[$times] % 77; 
    
    if ($result2 == 0) {
        $array4[] =  $arrayTaskTwo[$times] ;

    }
       
}

echo implode(", ", $array4) . "<br>"; 

?>
