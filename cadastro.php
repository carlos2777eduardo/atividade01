<?php
extract($_POST);
 $joaogomes= fopen("arquivo01/$id.txt", 'a+');
 fwrite($joaogomes, "id: $id\n nome: $nome\n cargo: $cargo\n salario: $salario\n dependentes: $dependentes\n");
 fclose($joaogomes);
 $pedrogol=scandir("arquivo01");
 array_shift($pedrogol);
 array_shift($pedrogol);

foreach ($pedrogol as $gabigol) {
	echo "<a href=\"arquivo.php?id=$gabigol\">$gabigol</a><br>";
}

