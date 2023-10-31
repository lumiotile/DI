<?php 
    
?>
<form id="formularioBuscar" name="formularioBuscar" onkeydown="return event.key != 'Enter'">
  <div class="row">
    <div class="col">
    <label for="nombreInput" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombreInput" name="nombreInput">
    </div>
    <div class="col">
    <label for="apellidosInput" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="apellidosInput" name="apellidosInput">
    </div>
    <div class="col">
    <label for="emailInput" class="form-label">Email</label>
    <input type="email" class="form-control" id="emailInput" name="emailInput">
    </div>
    <div class="col">
    <label for="movilInput" class="form-label">Movil</label>
    <input type="text" class="form-control" id="movilInput" name="movilInput">
    </div>
    </div>
    <label for="botonEnviar">&nbsp;</label>
    <br>
    <button id="botonEnviar" type="button" onclick="buscarUsuarios()" class="btn btn-primary">Submit</button>
</form>

<!-- <form id="formularioBuscar" name="formularioBuscar" onkeydown="return event.key != 'Enter'">
    <label for="b_texto">
    <input type="text" id="b_texto" name="b_texto"> 
    </label>
    <button >
        Buscar
    </button>
</form> -->

<div id="capaResultadoBusqueda"></div>
