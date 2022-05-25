<?php

/*
boletim de notas
aluno Tido Ferraz
n1 8
n2 4
n3 7
media = (n1 + n2 + n3)/3
se a media >= 7 aprovado
senão se a média >= 4 conselho
senão reprovado
*/

$aluno = "Tido Ferraz";
$n1 = 8;
$n2 = 6;
$n3 = 8;
$presenca = 60;
$media = ($n1 + $n2 + $n3)/3;

// echo "$aluno ficou com a média $media";

if ($media >= 7 && $presenca >= 70) {
	echo "$aluno ficou com a média $media e foi aprovado";
}
elseif ($media >= 4) {
	echo "$aluno ficou com a média $media e foi para o conselho";
}
else{
	echo "$aluno ficou com a média $media e foi reprovado";
}

?>