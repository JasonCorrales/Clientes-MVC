<h1 class="page-header">Pantalla de Registro de Clientes</h1>
<ol class="breadcrumb">
  <li><a href="?c=cliente">Cliente</a></li>
</ol>

<form id="frm-alumno" action="index.php?controller=ClienteController&action=guardar" method="post" enctype="">
    <input type="hidden" name="id" value="" />
      <div class="form-group">
        <label>DNI</label>
        <input type="text" name="dni" class="form-control" placeholder="Ingrese su dni" required>
    </div>
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" class="form-control" placeholder="Ingrese su nombre" required>
    </div>
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" class="form-control" placeholder="Ingrese su apellido" required>
    </div>
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="Correo" class="form-control" placeholder="Ingrese su correo electrÃ³nico" required>
    </div>
     <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="Telefono" class="form-control" placeholder="Ingrese su telefono" required>
    </div>
    <hr/>
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>