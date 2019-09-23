<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <title>Overseer</title>
    <link rel="stylesheet" type="text/css" href="/css/overseer.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <center><div id="dateDiv"></div></center>
    <center><div id="timeDiv"></div></center>
    <?php
        echo "<p>File owner: <i style='color: #ddd'>" . get_current_user() . "</i></p>";
    ?>
    <script>
        var today = new Date();
        var optionsDate = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', era: 'long' };
        var optionsTime = { timeZone: 'Europe/London', hour: 'numeric', minute: 'numeric', timeZoneName: 'long' };

        document.getElementById('dateDiv').innerHTML = "<p>" + today.toLocaleDateString("en-GB-u-ca-gregory", optionsDate) + "</p>";
        document.getElementById('timeDiv').innerHTML = "<p>" + today.toLocaleTimeString("en-GB", optionsTime) + "</p>";
    </script>
    
    <!-- JQuery AJAX Hook to reload PHP include -->
    <div id="ajax"></div>
    <script>
    $(function(){
    setInterval(function(){
           $("#ajax").load("/inc/status.php");
    }, 2000);
})
    </script>
</body>
</html>
