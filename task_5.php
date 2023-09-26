<?php
function generatePassword($length) {
    $password = '';
   
    $lowercaseChar = range(97, 122);
    $uppercaseChar = range(65, 90);
    $numberChar = range(48, 57);
    $specialChar = range(33,47);

    $allChars = array_merge($lowercaseChar, $uppercaseChar, $numberChar, $specialChar);

    for ($i = 0; $i < $length; $i++) {
        $randomChar = chr($allChars[array_rand($allChars)]);
        $password .= $randomChar;
    }
    return $password;
}

$length = 8;
$password = generatePassword($length);

echo "Generated Password: $password";

