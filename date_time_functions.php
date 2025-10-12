<?php
// Date and Time Functions
// $currentDate=new DateTime('2025-10-07 14:30:00');
// echo $currentDate->format('Y-M-d H:i:s')

$CustomDate='07-10-2025 15:45';
$dateFromFormat=DateTime::createFromFormat('d-m-Y H:i', $CustomDate);
// echo $dateFromFormat->format('Y-m-d');

// $dateFromFormat->modify('+1 day');
// $dateFromFormat->modify('+2 months');
// $dateFromFormat->modify('-1 day');
// $dateFromFormat->modify('-1 month');

$dateFromFormat->modify('+1 day -2 months');

// echo $dateFromFormat->format('Y-m-d');


$date1=new DateTime('2025-01-01');
$date2=new DateTime('2025-12-20');
$interval=$date1->diff($date2);

// echo $interval->y;
// echo $interval->m;
// echo $interval->d;
echo $interval->days;



?>
