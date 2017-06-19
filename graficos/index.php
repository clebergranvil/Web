<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Grafico de Barras com CSS</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        $width1 = '28%';
        $width2 = '49%';
        $width3 = '33%';
        $width4 = '13%';
        $total = 4;

        $json = '[
  {quantidade: "5", cliente: "0046 - São Francisco do Guaporé - RO", porcent: "4.6296", totalgeral: "108"}
  ,{quantidade: "1", cliente: "1176 - Pedra Preta - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5143 - Alta Floresta - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5146 - Alto Garças - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "6", cliente: "5152 - Araputanga - MT", porcent: "5.5556", totalgeral: "108"}
  ,{quantidade: "2", cliente: "5156 - Barra do Bugres - MT", porcent: "1.8519", totalgeral: "108"}
  ,{quantidade: "6", cliente: "5157 - Barra do Garças - MT", porcent: "5.5556", totalgeral: "108"}
  ,{quantidade: "4", cliente: "5159 - Cáceres - MT", porcent: "3.7037", totalgeral: "108"}
  ,{quantidade: "3", cliente: "5162 - Campo Verde - MT", porcent: "2.7778", totalgeral: "108"}
  ,{quantidade: "2", cliente: "5163 - Campos de Júlio", porcent: "1.8519", totalgeral: "108"}
  ,{quantidade: "4", cliente: "5165 - Canarana - MT", porcent: "3.7037", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5169 - Cláudia - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "2", cliente: "5171 - Colíder - MT", porcent: "1.8519", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5172 - Comodoro - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5180 - Figueirópolis DOeste", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5181 - Gaúcha do Norte - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "3", cliente: "5184 - Guarantã do Norte - MT", porcent: "2.7778", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5187 - Ipiranga do Norte - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5188 - Itanhangá - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5193 - Jauru - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "3", cliente: "5195 - Juína - MT", porcent: "2.7778", totalgeral: "108"}
  ,{quantidade: "4", cliente: "5199 - Lucas do Rio Verde - MT", porcent: "3.7037", totalgeral: "108"}
  ,{quantidade: "3", cliente: "5204 - Mirassol DOeste", porcent: "2.7778", totalgeral: "108"}
  ,{quantidade: "16", cliente: "5213 - Nova Mutum - MT", porcent: "14.8148", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5214 - Nova Olimpia - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5221 - Paranatinga - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "7", cliente: "5234 - Primavera do Leste - MT", porcent: "6.4815", totalgeral: "108"}
  ,{quantidade: "2", cliente: "5245 - São José do Xingu - MT", porcent: "1.8519", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5250 - Santa Rita do Trivelato - MT", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "3", cliente: "5254 - Sapezal", porcent: "2.7778", totalgeral: "108"}
  ,{quantidade: "4", cliente: "5256 - Sorriso - MT", porcent: "3.7037", totalgeral: "108"}
  ,{quantidade: "2", cliente: "5258 - Tangará da Serra - MT", porcent: "1.8519", totalgeral: "108"}
  ,{quantidade: "4", cliente: "5259 - Tapurah - MT", porcent: "3.7037", totalgeral: "108"}
  ,{quantidade: "5", cliente: "5260 - Terra Nova do Norte - MT", porcent: "4.6296", totalgeral: "108"}
  ,{quantidade: "1", cliente: "5263 - União do Sul", porcent: "0.9259", totalgeral: "108"}
  ,{quantidade: "2", cliente: "5265 - Vera - MT", porcent: "1.8519", totalgeral: "108"}
  ,{quantidade: "2", cliente: "5568 - Santo Antônio do Leste - MT", porcent: "1.8519", totalgeral: "108"}]';

//        var_dump(json_decode($json));
//        var_dump(json_decode($json, true));
?>
        
        
<?php     
    $count = 1;
    for ($index = 40; $index < 120; $index++) {
        if ($count == 1){
            echo('<div class="principalbarras"style="page-break-before: always;">');                
        }
        $indexAux = $index + 20;
        if ($indexAux >= 100) {
            $indexAux = 100;
        }
?>
    <div style="width: 100%;height: 28px;">
        <div class="divTeste" style="height: 28px; float:right">
            <div class="divBorda" style="height: 22px;float:left;width: <?php echo($indexAux) ?>%;text-align: end;"><?php echo($indexAux); ?>%</div>
        </div>
        <div style="height: 22px;width: 55px;text-overflow: ellipsis;text-align: end;white-space: nowrap;overflow: hidden;float: right;">1.23%</div>
        <div style="height: 22px;width: 218px;text-overflow: ellipsis;    text-align: end;white-space: nowrap;overflow: hidden;float: right;">123456789101112131415161718192021222324</div>
    </div>
<?php   

        if (($count == 20) || ($index == 119)){
            $count = 1;
            echo '</div>';
        }else{
          $count++;
        }
 } ?>



    </body>
</html>
