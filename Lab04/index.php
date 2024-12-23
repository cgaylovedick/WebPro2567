<?php
$classroooom = [
    "Mon" => [
        13 =>"Data Analytic",
        14 =>"Data Analytic",
        15 =>"Data Analytic",
        16 =>"Data Analytic",
    ],
    "Tue" => [
        13 =>"Work Integrated Knowledge sharing",
        14 =>"Work Integrated Knowledge sharing",
        15 =>"Work Integrated Knowledge sharing",
        16 =>"Work Integrated Knowledge sharing",
    ],
    "Wed" => [
        9 => "Entrepreneurship Knowledge Sharing",
        10 => "Entrepreneurship Knowledge Sharing",
        11 => "Entrepreneurship Knowledge Sharing",
    ],

    "Thu" => [],

    "fri" =>[
        8 => "artificial Inteligence",
        9 => "artificial Inteligence",
        10 => "artificial Inteligence",
        11 => "artificial Inteligence",
    ],
    "Sat" => [],

    "Sun" =>[]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classroom</title>

<style>
    table, th, td
    {
        width: 100%;
        border:white 1px solid;
        border-collapse: collapse;
        min-width: 90px;
    }
    thead
    {
        background-color: black;
        color: white;
    }
    #classroom  
    {
        background-color: lightgrey;
    }
    #classroom th
    {
        color: white;
    }
    #classroom thead
    {
        background-color: black;
    }
    #classroom tbody th
    {
        background-color: grey;
        color: white;
    }
    .holiday
    {
        background-color: crimson !important;
    }
</style>

</head>
<body>
    <table id = "classroom">
        <thead>
            <tr>
                <th>Day/Time</th>
                <th>8:00-9:00</th>
                <th>9:00-10:00</th>
                <th>10:00-11:00</th>
                <th>11;00-12:00</th>
                <th>12:00-13:00</th>
                <th>13:00-14:00</th>
                <th>14:00-15:00</th>
                <th>15:00-16:00</th>
                <th>16:00-17:00</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($classroooom as $day => $subject) { ?>
            <tr>
                <th> <?php echo $day ?> </th>
                <?php for ($i=8; $i<17; $i++){?>
                <td>
                    <?php echo !empty($subject[$i]) ? $subject[$i] : " "?>
                </td>
                <?php } ?>
                </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>