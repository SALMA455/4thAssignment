<?php
//1.Write a PHP function to sort an array of strings by their length, in ascending order.(Hint: You can use the usort() function to define a custom sorting function.)

  $length = array("banana", "apple", "pear", "orange", "kiwi");
  $sortedArr = sortByLength($length);

function sortByLength($length) {
    usort($length, function($x, $y) {
      return strlen($x) - strlen($y);
    });
    return $length;
  }
  
  print_r($sortedArr); 

  echo PHP_EOL;

  //2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

  $str1 = "hello Bangladesh.";
  $str2 = "Beautiful  ";
  $result = concatFromEnd($str1, $str2);

  function concatFromEnd($str1, $str2) {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $end = substr($str1, $len1 - $len2);
    return $str2 . $end;
  }
  
  echo $result; 

  echo PHP_EOL;
  //  3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
  
  $arr = array(5, 10, 15, 20, 25,30);
  
  $newArr = removeFirstAndLast($arr);

  function removeFirstAndLast($arr) {
    $newArr = array_slice($arr, 1, -1);
    return $newArr;
  }
  
  print_r($newArr); 
  echo PHP_EOL;
  
  //4.Write a PHP function to check if a string contains only letters and whitespace.

  $str1 = "hello world";
  $str2 = "1234";
  $str3 = "&$@ Hello Bangladesh 1234";

  function containsOnlyLettersAndWhitespace($str) {
    return preg_match('/^[A-Za-z\s]+$/', $str);
  }
 
  
  echo containsOnlyLettersAndWhitespace($str1); 
  echo containsOnlyLettersAndWhitespace($str2); 
  echo containsOnlyLettersAndWhitespace($str3); 
  echo PHP_EOL;
  //5. Write a PHP function to find the second largest number in an array of numbers.
  $arr = array(5,10, 20, 15, 25);
  $secondLargest = findSecondLargest($arr);

  function findSecondLargest($arr) {
    rsort($arr); 
    return $arr[1]; 
  }
 
  echo $secondLargest; 
  