<?php
require('Class.php');

print '[ <br>
      2019: [ <br>';

$result2019_11 = new Data();
$result2019_11->eventsDate(11, '2019-11', '$array2019_11');

$result2019_12 = new Data();
$result2019_12->eventsDate(12, '2019-12', '$array2019_12');

print '], <br>
      2020: [ <br>';

$result2020_10 = new Data();
$result2020_10->eventsDate(10, '2020-10', '$array2020_10');

$result2020_11 = new Data();
$result2020_11->eventsDate(11, '2020-11', '$array2020_11');

$result2020_12 = new Data();
$result2020_12->eventsDate(12, '2020-12', '$array2020_12');

print '] <br>
       ] <br>';
?>    