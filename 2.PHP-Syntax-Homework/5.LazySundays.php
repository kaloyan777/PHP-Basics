<?php
/**
Write a PHP script LazySundays.php which prints the dates of all Sundays in the current month.
 * Example:
 * 3rd August, 2014
 * 10th August, 2014
 */

function getSundays($y, $m)
{
    return new DatePeriod(new DateTime("first sunday of $y-$m"),
    DateInterval::createFromDateString('next sunday'),
    new DateTime("next month $y-$m-01"));
}

foreach(getSundays(2014, 8) as $sunday)
{
    echo $sunday->format("jS F, Y");
    echo "<br>";
}

/*
<?php
$month = date('F'); // January - December
$year = date('Y');
$totalDays = date('t'); //Number of days in month

for ($i = 1; $i <= $totalDays; $i++)
{
    $date = strtotime("$i $month $year");
    if (date('l', $date) == 'Sunday')
    {    // Week day
        echo date('jS F, Y', $date) . '<br>'; // day of month - Month - Year
    }
}
*/
/*
<?php

$startDate = new DateTime('01-12-2014');
$endDate = new DateTime('31-12-2014');

while ($startDate <= $endDate)
{
    $dateString =$startDate->format('d-m-Y') . "\n";
    $dayOfWeek = date('N', strtotime($dateString));
    if ($dayOfWeek == '7')
    {
        echo date_format($startDate, 'jS F, Y');
        echo "\n";
    }
    $startDate->add(new DateInterval('P1D'));
}
?>
*/