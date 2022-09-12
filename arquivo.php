<?php
$bh=$_GET['id'];
$parede= file("arquivo01/$bh");
foreach ($parede as $gabigol) {
	echo $gabigol.'<br>';
}