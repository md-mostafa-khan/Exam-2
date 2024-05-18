<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
  // Count vowels
  $vowelCount = preg_match_all('/["a,A", "e,E", "i,I", "o,O", "u,U"]/', $string);

  // Reverse string
  $reversedString = strrev($string);

  // Output results
  echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
