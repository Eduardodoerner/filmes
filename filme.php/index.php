<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
      <a href="">imagens dos carros </a>
   <?php
    $arr=array(
        array("Carro" => "hb20",
              "preço" => "R$50.000,00",
              "cor"=> "vermelho,preto",
              "estoque" => 2
              
        ),
        array("carro" => "sandeiro", 
              "preço" => "R$70.000,00",
              "cor" => "branco,preto[2]",
              "estoque" => 3
        ),
        array("carro" => "gol", 
              "preço" => "R$45.000,00",
              "cor" => "preto,prata,branco,vermelho[2]",
              "estoque" => 5
        ),
        array("Carro" => "sw4",
              "preço" => "R$476.000,00",
              "cor" => "branco[2],preto[2],vermelho[4]",
              "estoque" => 7
        ),
        array("carro" => "jetta", 
              "preço" => "R$120.000,00",
              "cor" => "azul",
              "estoque" => 1
        ),
        array("carro" => "bmw", 
              "preço" => "R$115.000,00",
              "cor" => "vermelho,verde claro",
              "estoque" => 2
        ),
     );

    print_r($arr);
    echo "<br/>";
    print_r($arr[0]);
    echo"<br>".$_get['hb20']."<br/>";
    print_r($arr[1]);
    echo "<br>".$_get['sandeiro']."<br/>";
    print_r($arr[2]);
    echo "<br>".$_get['gol']."<br/>";
    print_r($arr[3]);
    echo "<br>".$_get['sw4']."<br/>";
    print_r($arr[4]);
    echo "<br>".$_get['jetta']."<br/>";
    print_r($arr[5]);
    echo "<br>".$_get['bmw']."<br/>";
?>
</body>
