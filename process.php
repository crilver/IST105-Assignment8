<?php
$mac = escapeshellarg($_POST['mac']);
$method = escapeshellarg($_POST['method']);

$command = escapeshellcmd("python3 network_config.py $mac $method");

$output = shell_exec($command);

$publicIpcmd = escapeshellcmd("ec2-metadata -v");
$publicIp = shell_exec($publicIpcmd);

echo "$output";
?>
<h2>Public IP:<?php echo $publicIp; ?></h2>