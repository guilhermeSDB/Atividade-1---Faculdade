<?php 



$nome = $_POST['nome'];
$salario_fixo = $_POST['salario-fixo'];
$venda1 = $_POST['venda1'];
$venda2 = $_POST['venda2'];
$venda3 = $_POST['venda3'];
$venda4 = $_POST['venda4'];


// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';



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


$id = 6 ;
foreach($funcionarios as $item){
    $funcionarios[$id] = [
        'nome' => $nome,
        'salario-fixo' => $salario_fixo,
        'venda1' => $venda1,
        'venda2' => $venda2,
        'venda3' => $venda3,
        'venda4' => $venda4
    ];

}

    





echo '<pre>';
var_dump($funcionarios);
echo '</pre>';

// if($_POST != null){
    
//     
// } 


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
                <table class="table table-responsive text-center">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Colaborador</th>
                        <th scope="col">Salario Fixo</th>
                        <th scope="col">Venda Semana 1</th>
                        <th scope="col">Venda Semana 2</th>
                        <th scope="col">Venda Semana 3</th>
                        <th scope="col">Venda Semana 4</th>
                        <th class="table-primary" scope="col">Total vendas</th>
                        <th class="table-primary" scope="col">Comissão</th>
                        <th class="table-primary" scope="col">Salario Final</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($funcionarios as $item){
                         ?>
                            <tr class="table-light">
                                <th scope="row"></th>                                
                                    <td><?= $item['nome'] ?></td>
                                    <td><?= $item['salario-fixo'] ?></td>
                                    <td><?= $item['venda1'] ?></td>
                                    <td><?= $item['venda2'] ?></td>
                                    <td><?= $item['venda3'] ?></td>
                                    <td><?= $item['venda4'] ?></td>
                                    <td class="table-info"><?= $item['total-vendas'] = $item['salario-fixo']+$item['venda1']+$item['venda2']+$item['venda3']+$item['venda4']?></td>
                                    <td class="table-info"><?= $item['comissao'] = $item['total-vendas'] * 0.05 ?></td>
                                    <td class="table-info"><?= $item['salario-final'] = $item['salario-fixo']+$item['comissao']?></td> 
                                    <td>
                                    <?php 

                                    if(count($funcionarios) <= 4){
                                        echo '<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExclusao" disabled>
                                        <i class="fas fa-trash"></i>                 
                                    </button> ';
                                    }else{
                                        echo '<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExclusao">
                                        <i class="fas fa-trash"></i>                 
                                    </button> ';
                                    }
                                    
                                    ?>
                                                                       
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>


                <!-- Tabela 2 -->
                


                
            </div>
            <div class="row">
                <div class="col-md-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">
                        Adicionar                      
                    </button>
                </div>  
                <!-- Modal -->
                <form action="" method="POST">
                    <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Adicionar Funcionario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input name="id" type="hidden">
                                <div>
                                    <label for="recipient-name" class="col-form-label">Nome Colaborador:</label>
                                    <input name="nome" type="text" class="form-control" id="recipient-name">
                                </div>
                                <div>
                                    <label for="recipient-name" class="col-form-label">Salario Fixo:</label>
                                    <input name="salario-fixo" type="number" class="form-control" id="recipient-name">
                                </div>
                                <div class="row g-3">
                                    <label for="recipient-name" class="col-form-label">Venda:</label>
                                    <div class="col-sm-3">
                                        <input name="venda1" type="number" class="form-control" placeholder="Venda Semana 1" aria-label="City">
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="venda2" type="number" class="form-control" placeholder="Venda Semana 2" aria-label="City">
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="venda3" type="number" class="form-control" placeholder="Venda Semana 3" aria-label="City">
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="venda4" type="number" class="form-control" placeholder="Venda Semana 4" aria-label="City">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Modal Exclusao -->
                <div class="modal fade" id="modalExclusao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Exclusão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que deseja excluir?                            
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

                        <button type="button" class="btn btn-danger">Sim</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" async></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" async></script>

</body>
</html>