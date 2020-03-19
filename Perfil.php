<html>
<body>

<?php

$url_imagem = '/images/perfil/minhafoto.jpg';
echo "<img src='$url_imagem' border='0' />";

   $v1 = array(

    "Nome" => "Fabrício",
    "Endereço" => "av.cônego Miguel Monteiro",
   "Disciplina" => "programação de sistema web",
   "Curso" => "informatica",
   "Cidade" => "Caculé",
);


foreach ($array as $imprimir){
echo "$imprimir<br>";
}
 
?>
</body>
</html>
