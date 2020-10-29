<?php

$who1 = tempnam('/tmp','-who-');
$who2 = tempnam('/tmp','-who-');

system("who > $who1");
system("cat $who1 | cut -d\" \" -f1 > $who2");


$check = `cat $who2 | wc -l`;


if($check == 0)
{
exit(0);
}
else
{
echo("Zalogowani użytkownicy:<br><br>");
echo("· ");
system("sort $who2 | uniq");
}

?>
