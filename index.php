<?php
// initialize array of weekdays
$weekDays[] = new stdClass();
$weekDays[0]->id = 1;
$weekDays[0]->name = "Monday";
$weekDays[1]->id = 2;
$weekDays[1]->name = "Tuesday";
$weekDays[2]->id = 3;
$weekDays[2]->name = "Wednesday";
$weekDays[3]->id = 4;
$weekDays[3]->name = "Thursday";
$weekDays[4]->id = 5;
$weekDays[4]->name = "Friday";
$weekDays[5]->id = 6;
$weekDays[5]->name = "Saturday";
$weekDays[6]->id = 7;
$weekDays[6]->name = "Sunday";

// return weekday (number) start from 1 / monday
$today = getdate();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekday Picker</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="main">
        <!-- dynamic day -->
        <p class="text--center">Today is <span class="text--green"><?= $today['weekday'] ?></span></p>
        <div class="daylist">
            <!-- foreach weekdays -->
            <?php foreach ($weekDays as $day) : ?>
                <a href="javascript:;" id="list<?= $day->id ?>" class="daylist__item <?= $day->id === $today['wday'] ? "daylist--today" : "" ?>" onclick="checkDay(<?= $day->id ?>)"><?php echo ($day->name); ?></a>
            <?php endforeach ?>
        </div>
        <!-- endforeach -->
        <!-- dynamic selected day -->
        <p class="text--center">Selected day is <span class="text--blue" id="selectedDay"></span></p>
    </div>
    <script src="./assets/js/script.js"></script>
</body>

</html>