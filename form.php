<?php
$publicIpcmd = escapeshellcmd("ec2-metadata -v");
$publicIp = shell_exec($publicIpcmd);
?>
<html>
<h1>Assignment 8 - Cristobal Lara</h1>
<h2>Public IP:<?php echo $publicIp; ?></h2>
<form action="process.php" method="post">

<label>Please enter your MAC address to request an IP address</label>
<input type="text" name="mac" required>
<br/>

<lavel for="method">Choose the DHCP method</lavel>
<select name="method">
    <option value="v4">DHCPv4</option>
    <option value="v6">DHCPv6</option>
</select>

<input type="submit" value="Submit">
</form>
</html>