<?php

var_dump(3 / 1);
echo('<hr>');

var_dump(round(1 / 3,2));
echo('<hr>');

var_dump('20cats' + 40);
echo('<hr>');

var_dump(18 % 4);
echo('<hr>');

//-------------------------------
echo('<br>');
echo ($a = 2);
echo('<hr>');

$x = ($y = 12) - 8; echo $x;  //y=12 x=y-8
echo('<hr>');

//-------------------------------

var_dump(1 == 1.0); //loose equality (this equals 1 == (int) 1.0)
echo('<hr>');

var_dump('02' == 2); //loose equality (this equals (int)'02' == 2)
echo('<hr>');

var_dump('02' === 2); //strict equality
echo('<hr>');

var_dump('02' == '2'); //loose equality (this equals (int)'02' == (int)2)
echo('<hr>');

//-------------------------------
echo('<br>');
$x = true xor true;
echo('$x = true xor true: '); //firstly $x = true, then $x xor true without saving
var_dump($x);
echo('<hr>');

$x = (true xor true);
echo('$x = (true xor true): ');
var_dump($x);
echo('<hr>');