<?php
/**
 * Created by PhpStorm.
 * User: php1
 * Date: 21.03.18
 * Time: 19:12
 */

$sName = 'Artem';
$iAge = 18;
$fPrice = 5.5;
$bIsAdmin = true;
$aHashTags = [
    'cat' => 'http://www.yandex.ru',
    'neon' => 'http://google.com',
    'color' => 'http://rambler.ru',
    'great' => 'about.php',
];
$aUser = [
    'info_common' => [
        'name' => $sName,
        'age' => $iAge,
        'address' => 'Gluharskaya St.'
    ],
    'info work'=> [
        'city' => 'sbp',
        'phone' => '111111',
        'address' => 'Vosstaniya St.'
    ],
];

foreach ($aUser as $sKey => $aInfo) {
    echo $sKey . '<br>';

    foreach ($aInfo as $sIKey => $sInfo) {
        echo '-' . $sIKey . ' ' . $sInfo . '<br>';
            }
}

//$nNull = null;

echo '<pre>';
print_r ($aHashTags);
echo '<br>';
var_dump($aUser);

echo $aHashTags [3] . '<br>';
//echo $aUser ['city'] . '<br>';

echo count ($aHashTags);

var_dump(array_keys($aUser));

unset($aHashTags['cat']);
foreach ($aHashTags as $aHashTag => $sLink) {
    echo '<a href="' . $sLink . '">' . $aHashTag . '</a><br>';
}

//unset ($aHashTags);
var_dump($aHashTags);

$aExample = [
    'key_1' => 'value_1',
    'key_2' => 'value_2',
    'key_3' => 'value_3',

];
foreach ($aExample as $key => $value) {
    echo 'key: ' . $key .' value: ' . $value . '<br>';
}
?>

<div class="hashtag_wrapper">
    <?php foreach ($aHashTags as $aHashTag => $sLink): ?>
    <a href="#"><?php echo $aHashTag; ?></a>
    <?php endforeach; ?>
</div>
