<?php

require_once 'PkcsKeyGenerator.php';
require_once 'DesEncryptor.php';
require_once 'PbeWithMd5AndDes.php';

$salt = "\xA9\x6B\xC5\x32\x56\x45\xE3\x02";
$iterations = 19;
$segments = 1;

$data = 'Hello World!';
$keystring =
        'hjgfdghdfghdfkjgdhgjdghdjkfghdfjghkfdsfksdkf,dsokfpof,dsfmdsfljsdkfjsdfjlsdkfjsdlfjsdlfjsdklfjskdfkj' .
        'alskjfalksjhdfalsjdfhalksdjfaklsdfjaksdfaklsjaflksaflksjdfaklsfhalkshfalkshfalksfajlksajlksahlskfhal' .
        'laksdhalsdhfalkshdfalkshfalksfdhajymfjntmntxczvcxzvxczxczvxbzvbxcshdfalkshdfalksjhdfalkshdfasdfkjhlk' .
        'alsjdfaksjdflaksjdfaksajlkshfalksahlskahlkslahsfhalksghfalksghfdalkshdfalksfhalksghfdalksghfdalkshdf' .
        'lasjdfhaldsjfhalksjhdfaljkmjhmkhjmkhjmhkmhmjkjhmfhdalksgfhdalksfhalsdhfalksghfalksghfkjahsdhfakjdfdf' .
        'alsjdhflakjsdfhalksjhdfalksjhdflakjsdfhalkjshdfalkshdfalksjhdfalksjfhalksghfdalksjhfalskdfhalsdjfhkj' .
        'laskjdfhalkjsdhfalksjfhdalkshdfalkshdfalksdhfalksjhdfaklsdfhalksdfhalksdfhalkshdfalksdfhalksdhfsadff' .
        'lasjdfhlakshdfalhdfalkshdfashdfalksdfjhaskjdfhaklsdhfalskfhalksghfdalksghfdalksdfhalksghfdalksdfhsfd' .
        'lasdhflakjshfdalkshdflakshdflaskhdfalkshdfalksdhfalkshdfalkshfdalskjfdhalksjhdfalkshdfalsdfdafasdfas' .
        'alsdgfhalkjshdflakshdfalkshdflakshdflakshdfalkjshdflaksfhdalkshdfalkshfalskfhalksjgfhalksghfalksghfa' .
        'lajsdfhlaksjfalkjshdfalksjhdfalksfhalksfhalksgfhalkshdfalksghfalksghfalksgfhalksghfdlaasdflkjhalkjhj' .
        'alsdflajkshdflaksjdkjhjk';

$crypt = PbeWithMd5AndDes::encrypt($data, $keystring, $salt, $iterations, $segments);

$decrypt = PbeWithMd5AndDes::decrypt($crypt, $keystring, $salt, $iterations, $segments);

echo $data . PHP_EOL;
echo $crypt . PHP_EOL;
echo $decrypt . PHP_EOL;