<?php
//information
fscanf(STDIN,"%d\n",$t);
while ($t--) 
{
	

$s=trim(fgets(STDIN));
$len=strlen($s);
if ($len>=10) {
	

$f=$s[0];
$l=$s[$len-1];
$m=$len-2;

echo "$f$m$l\n";
}
else echo "$s\n";
}