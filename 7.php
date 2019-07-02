<?php
$Host=$_POST["txtHostIP"];
$cmd="ping $Host";
$WinError="Ping request could not find host ".$Host. ". Please check the name and try again.";
$LinError="ping: unknown host ".$Host;
$Success=shell_exec($cmd);
if(strcmp($Success,$WinError)==1 || strcmp($Success,$LinError)==1){
echo "Host is not on the network";
}else { 
echo "Host is on the network";
}

?>