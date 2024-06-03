<?php
//Prime Numbers

//function isPrime($num) {
//    if ($num <= 1) return false;
//    if ($num <= 3) return true;
//
//    if ($num % 2 == 0 || $num % 3 == 0) return false;
//
//    for ($i = 5; $i * $i <= $num; $i += 6) {
//        if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
//    }
//
//    return true;
//}
//
//function findPrimes($limit) {
//    $primes = [];
//    for ($i = 2; $i <= $limit; $i++) {
//        if (isPrime($i)) {
//            $primes[] = $i;
//        }
//    }
//    return $primes;
//}
//
//// Example usage
//$limit = 1000;
//$primeNumbers = findPrimes($limit);
//echo "Prime numbers up to $limit: " . implode(", ", $primeNumbers) . "\n";

//---------------------------------------------------------------------------------------------

//function isPrime($num)
//{
//    if ($num <= 1) return false;
//    if ($num <= 3) return true;
//    if ($num % 2 == 0 || $num % 3 == 0) return false;
//    for ($i = 5; $i * $i <= $num; $i += 6) {
//        if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
//    }
//    return true;
//}
//function findPrimes($limit)
//{
//    $primes = [];
//    for ($i = 2; $i <= $limit; $i++) {
//        if (isPrime($i)) {
//            $primes[] = $i;
//        }
//    }
//    return $primes;
//}
//// Example usage
//$limit = 1000;
//$startTime = microtime(true);  // Start time measurement
//$primeNumbers = findPrimes($limit);
//$endTime = microtime(true);    // End time measurement
//$executionTime = $endTime - $startTime;
//echo "Prime numbers up to $limit: " . implode(", ", $primeNumbers) . "\n";
//echo "Execution time: " . $executionTime . " seconds\n";


//Natural Numbers

//function isPrime($num)
//{
//    if ($num <= 1)
//        return false;
//    if ($num <= 3)
//        return true;
//    if ($num % 2 == 0 || $num % 3 == 0)
//        return false;
//    for ($i = 5; $i * $i <= $num; $i += 6) {
//        if ($num % $i == 0 || $num % ($i + 2) == 0)
//            return false;
//    }
//    return true;
//}
//function findPrimes($limit)
//{
//    $primes = [];
//    for ($i = 2; $i <= $limit; $i++) {
//        if (isPrime($i)) {
//            $primes[] = $i;
//        }
//    }
//    return $primes;
//}
//// Example usage
//$limit = 40;
//$startTime = time();  // Start time measurement
//$primeNumbers = findPrimes($limit);
//$endTime = time();    // End time measurement
//$executionTime = $endTime - $startTime;
//echo "Prime numbers up to $limit: " . implode(", ", $primeNumbers) . "\n";
//echo "Execution time: " . $executionTime . " seconds\n";

//---------------------------------------------------------------------------

// Star Pattern


// PHP code to demonstrate
// star pattern

// Function to demonstrate
// printing pattern

//function triangle($n)
//{
//    // number of spaces
//    $k = 2 * $n - 2;
//    // outer loop to handle
//    // number of rows
//    // n in this case
//    for ($i = 0; $i < $n; $i++) {
//        // inner loop to handle
//        // number spaces
//        // values changing acc.
//        // to requirement
//        for ($j = 0; $j < $k; $j++)
//            echo " ";
//        // decrementing k after
//        // each loop
//        $k = $k - 1;
//        // inner loop to handle
//        // number of columns
//        // values changing acc.
//        // to outer loop
//        for ($j = 0; $j <= $i; $j++) {
//            // printing stars
//            echo "* " . "<br>";
//        }
//        // ending line after
//        // each row
//        echo "\n";
//    }
//}
//// Driver Code
//$n = 5;
//triangle($n);





