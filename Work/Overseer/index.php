<!DOCTYPE html>
<html lang="he-GB">
<head>
    <meta charset="UTF-8">
    <title>Overseer</title>
    <link rel="stylesheet" type="text/css" href="/css/overseer.css">
    <script>
        setTimeout(function(){
           window.location.reload(1);
        }, 2000);
    </script>
    <!-- <script src="/js/jquery-3.4.1.min.js"></script> -->
</head>
<body>
    <center><div id="dateDiv"></div></center>
    <center><div id="timeDiv"></div></center>
    <script>
        var today = new Date();
        var optionsDate = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var optionsTime = { timeZone: 'Europe/London', hour: 'numeric', minute: 'numeric', timeZoneName: 'long' };

        document.getElementById('dateDiv').innerHTML = "<p>" + today.toLocaleDateString("he-GB-u-ca-gregory", optionsDate) + "</p>";
        document.getElementById('timeDiv').innerHTML = "<p>" + today.toLocaleTimeString("he-GB", optionsTime) + "</p>";
    </script>
    
    <?php include('includes/status.php'); ?>
</body>
</html>
