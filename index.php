<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Attendance and Payroll Management System</title>
</head>

<body>
    <div id="clock">
        <div id="time" class="glow"></div>
        <div id="date">
            <span class="month"></span>
            <span class="day"></span>,
            <span class="year"></span>
        </div>

        <div class="container">
            <button id="twelveHourBtn">24 hour clock</button>
        </div>
    </div>
    <div class="container">
        <ul id="days">
            <li class="sunday">Sun</li>
            <li class="monday">Mon</li>
            <li class="tuesday">Tues</li>
            <li class="wednesday">Wed</li>
            <li class="thursday">Thurs</li>
            <li class="friday">Fri</li>
            <li class="saturday">Sat</li>
        </ul>
    </div>
    <div class="btn">
        <a href="welcome-page.php">Login</a>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>