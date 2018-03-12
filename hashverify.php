<?php
$genhash=md5('Atharva'.'Raut');
$hash=$_GET['hash'];
echo 'genhash is '.$genhash;
echo '<br>';
echo 'hash is'.$hash;
if($genhash==$hash)
{
	echo '<br> email verified ';
}
?>