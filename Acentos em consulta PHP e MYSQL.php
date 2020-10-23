Exemplo 1 

<?php

echo utf8_encode($exibe['recadao_mensagem']);

?>

Exemplo 2

<?php

$cmdForma = "select * from forma where forma='$forma'";
$proforma = mysqli_query($con,$cmdForma);
while ($linhaForma = mysqli_fetch_array($proforma)) { 
    
        $linhaForma['id'];
        $linhaForma['forma'];

    $formaID= $linhaForma['id'];
    $Forma= $linhaForma['forma'];
    
   echo   utf8_encode($Formadesc=$linhaForma['desc_formaorg_sigtap']);
    
?>







Exemplo 3

Meta Tag dentro do HTML

       <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>   
       
       
      <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″> 


Exemplo 4

<?php header("Content-Type: text/html;  charset=ISO-8859-1",true); ?>