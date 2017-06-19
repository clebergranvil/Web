<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Grafico de Barras com CSS</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
<?php     
    $count = 1;
    for ($index = 40; $index < 120; $index++) {
        if ($count == 1){
            echo('<div class="principalbarras"style="page-break-before: always;margin-right: 250px;">');                
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
