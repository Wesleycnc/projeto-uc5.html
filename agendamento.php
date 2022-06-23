<?php 
require "includes/cabecalho.php";
require_once "includes/conecta.php";
require_once "includes/funcoes-agendamentos.php";
require_once "includes/funcoes-sessao.php";

if (isset($_POST['agendar'])) {
    
    /*  print_r('Nome:' .$_POST['nome']);
     print_r('<br>');
     print_r('Email: :' .$_POST['email']);
     print_r('<br>');
     print_r('Senha :' .$_POST['senha']); */
 
 
 
 $estados = filter_input(INPUT_POST,'estados', FILTER_SANITIZE_SPECIAL_CHARS);
 
 $quadras = filter_input(INPUT_POST,'quadras',FILTER_SANITIZE_SPECIAL_CHARS );
 
 $data = filter_input(INPUT_POST,'data', FILTER_SANITIZE_NUMBER_INT);

 $hora = filter_input(INPUT_POST,'hora', FILTER_SANITIZE_SPECIAL_CHARS);
 
 inserirAgendamentos($conexao, $estados, $quadras, $data, $hora);
 
 header("location:agendamento.php?quadra_agendada");
 }

?>

<body class="cor" >
<form action="" method="POST">
<div class="container-sm centro shadow-lg p-3 mb-5 bg-white rounded">
    <h1>Agendamento</h1>
<label for="estados">Estados*</label>
<select name="estados" id="estados" class="form-select" aria-label="Disabled select example" >
  <option>Selecione o estado</option>
  <option value="sp">SP</option>
  <option value="rj">RJ</option>
  <option value="ma">MA</option>
  <option value="mg">MG</option>
</select>


<div id="wrapper-quadras">
<label for="quadras">Quadras*</label>  
<select name="quadras" id="quadras" class="form-select" aria-label="Disabled select example" >
</select>
</div>

<label for="data">Data*</label>
<div>

<input name="data" id="date" type="date" class="form-control">
</div>


<div class="col-auto">

    <label for="">Horário*</label>

    <div class="input-group">
    <select name="hora" class="form-select" aria-label="Disabled select example" >
    <option  selected>Quantidade de horas</option>
    <option value="1">1 hora</option>
    <option value="2">2 horas</option>
    <option value="3">3 horas</option>
</select>

</div>
    <div class="pt-5 ps-2 pb-3 d-grid gap-2">
    <button name="agendar" type="submit" class="btn btn-success">Agendar!</button>
    </div>
</div>

</form>
<?php require_once "includes/rodape.php"; ?>
</body>