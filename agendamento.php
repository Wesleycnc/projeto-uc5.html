<?php 
require "includes/cabecalho.php";
?>

<body class="cor" >

<div class="container-sm centro">
    <h1>Agendamento</h1>
<label for="estados">Estados*</label>
<select id="estados" class="form-select" aria-label="Disabled select example" >
  <option>Selecione o estado</option>
  <option value="sp">SP</option>
  <option value="rj">RJ</option>
  <option value="ma">MA</option>
  <option value="mg">MG</option>
</select>


<div id="wrapper-quadras">
<label for="quadras">Quadras*</label>  
<select id="quadras" class="form-select" aria-label="Disabled select example" >
</select>
</div>

<label for="data">Data*</label>
<div>

<input id="date" type="date" class="form-control">
</div>


<div class="col-auto">

    <label for="">Preço*</label>

    <div class="input-group">
    <div class="input-group-text">$</div>
    <select class="form-select" aria-label="Disabled select example" >
    <option selected>Preço/hora</option>
    <option value="1">(1h) 100$</option>
    <option value="2">(2h) 200$</option>
    <option value="3">(3h) 300$</option>
</select>

</div>
    <div class="pt-5 ps-2 pb-3 d-grid gap-2">
    <button type="" class="btn btn-success">Agendar!</button>
    </div>
</div>


<script src="js/inputs.js"></script>
</body>