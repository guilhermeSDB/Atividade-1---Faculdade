<?php 


$funcionarios = array(
    array(
    'id' => 0,
    'nome' => 'Guilherme',
    'salario-fixo' => '2000',
    'venda1' => '1500', 
    'venda2' => '2250', 
    'venda3' => '2800', 
    'venda4' => '1900',),
    array(
    'id' => 1,
    'nome' => 'Tsara',
    'salario-fixo' => '2200',
    'venda1' => '1500', 
    'venda2' => '4250', 
    'venda3' => '3200', 
    'venda4' => '1980',),
    array(
        'id' => 2,
    'nome' => 'Tadeu',
    'salario-fixo' => '2500',
    'venda1' => '1500', 
    'venda2' => '4150', 
    'venda3' => '3500', 
    'venda4' => '2100',),
    array(
        'id' => 3,
    'nome' => 'Amanda',
    'salario-fixo' => 1800,
    'venda1' => 1500, 
    'venda2' => 6950, 
    'venda3' => 4800, 
    'venda4' => 2250,),    
);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - Unicesumar</title>

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.9.0/mdb.min.js">

    <!-- Import Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    
</head>
<body>
    <div class="container-xl">
        <div class="row justify-content-center ">
            <!-- Tabela 1 --> 
                <table class="table align-middle table-responsive text-center">
                    <thead class="table-dark">
                        <th scope="col"></th>
                        <th scope="col">Colaborador</th>
                        <th scope="col">Salario Fixo</th>
                        <th scope="col">Venda Semana 1</th>
                        <th scope="col">Venda Semana 2</th>
                        <th scope="col">Venda Semana 3</th>
                        <th scope="col">Venda Semana 4</th>
                        <th scope="col">Total vendas</th>
                        <th scope="col">Comissão</th>
                        <th scope="col">Salario Final</th>
                       
                    </thead>
                    <tbody>
                    <?php foreach($funcionarios as $item): ?>
                            <tr class="table-light">
                                <th scope="row"></th>                                
                                    <td><?= $item['nome'] ?></td>
                                    <td><?= $item['salario-fixo'] ?></td>
                                    <td><?= $item['venda1'] ?></td>
                                    <td><?= $item['venda2'] ?></td>
                                    <td><?= $item['venda3'] ?></td>
                                    <td><?= $item['venda4'] ?></td>
                                    <td class="table-info"><?= $item['total-vendas'] = $item['venda1']+$item['venda2']+$item['venda3']+$item['venda4']?></td>
                                    <td class="table-info"><?= $item['comissao'] = $item['total-vendas'] * 0.05 ?></td>
                                    <td class="table-info"><?= $item['salario-final'] = $item['salario-fixo']+$item['comissao']?></td> 
                                                              
                            <?php endforeach; ?>                        
                        </td>
                        </tr>                        
                    </tbody>
                </table>              
            </div>
        </div>
    </div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" async></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" async></script>

</body>
</html>