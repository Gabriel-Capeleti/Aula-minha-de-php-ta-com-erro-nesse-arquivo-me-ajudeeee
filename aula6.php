<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Comissões</title>
</head>
<body>
    <h1>Calcula a Comissão dos Vendedores</h1>
    <hr>
    
    <form method="GET">
        
        Nome:
        <br>
        <input type="text" name="txtnome" > <br>
        <br>

        Salario Fixo:
        <br>
        <input type="text" name="txtsalfixo"> <br>
        <br>
    
        Total Vendido:
        <br>
        <input type="text" name="txtvendas"> <br>
        <br>

        <input type="submit" name="btncalcular" value="Calcular" >
        
    </form>

    <?php
    
        if ($_GET) {
        
            //Rcebe dados do formulário
            $=$_GET['txtnome'];
            $salfixo=$_GET['txtsalfixo'];
            $vendas=$_GET['txtvendas'];
            
            if ($vendas>=10000) {

                $comissao=10;
                
            } else {

                $comissao=5;
            }
            
            
            // Calcula Comissao
            $vrcomissao = ($vendas*$comissao)/100;
            $saltotal = $salfixo+$vrcomissao;

            // Mostrando Resultado
            
            echo "<br> <hr> O Salário Total de $nome é $saltotal";
            echo "<hr>";
        
        }
    ?>

</body>
</html>