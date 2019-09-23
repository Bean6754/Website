<?php
// Status messages.
$statusOnlineMsg = '<p style="color: #0c0;">Online</p>';
$statusOfflineMsg = '<p style="color: #c00;">Offline</p>';

// For 10.44.103.181.

echo "<h2>10.44.103.181 - Cell 1B eMaint</h2>";

$host = '10.44.103.181';
$port = 2222;
$waitTimeoutInSeconds = 1;
if ($fp = fsockopen($host, $port, $errCode, $errStr, $waitTimeoutInSeconds))
{
    // Works.
    echo $statusOnlineMsg;
}
else
{
    // It does not work.
    echo $statusOfflineMsg;
}
fclose($fp);

// For 10.44.103.183.

echo "<h2>10.44.103.183 - Cell 1A CCTV</h2>";

$host = '10.44.103.183';
$port = 2222;
$waitTimeoutInSeconds = 1;
if ($fp = fsockopen($host, $port, $errCode, $errStr, $waitTimeoutInSeconds))
{
    // Works.
    echo $statusOnlineMsg;
}
else
{
    // It does not work.
    echo $statusOfflineMsg;
}
fclose($fp);

// For 10.44.103.184.

echo "<h2>10.44.103.184 - Transition Room</h2>";

$host = '10.44.103.184';
$port = 2222;
$waitTimeoutInSeconds = 1;
if ($fp = fsockopen($host, $port, $errCode, $errStr, $waitTimeoutInSeconds))
{
    // Works.
    echo $statusOnlineMsg;
}
else
{
    // It does not work.
    echo $statusOfflineMsg;
}
fclose($fp);

// For 10.44.103.185.

echo "<h2>10.44.103.185 - IT Office Overseer</h2>";

$host = '10.44.103.185';
$port = 2222;
$waitTimeoutInSeconds = 1;
if ($fp = fsockopen($host, $port, $errCode, $errStr, $waitTimeoutInSeconds))
{
    // Works.
    echo $statusOnlineMsg;
}
else
{
    // It does not work.
    echo $statusOfflineMsg;
}
fclose($fp);
?>
