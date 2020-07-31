<h1 class="page-header">Mantenimiento de Clientes</h1>
<p>Sistema Web v1.0</p>
<a class="btn btn-primary pull-right" href="index.php?controller=ClienteController&action=registrar">Agregar</a>
<br><br><br>
<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">DNI</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Nombre</th>
            <th style=" background-color: #5DACCD; color:#fff">Apellido</th>
            <th style=" background-color: #5DACCD; color:#fff">Correo</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Telefono</th>            
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
        <?php
          foreach($listaClientes as $posicion => $cliente):
        ?>
        <tr>
            <td><?=$cliente->getDni();?></td>
            <td><?=$cliente->getNombre()?></td>
            <td><?=$cliente->getApellido();?></td>
            <td><?=$cliente->getCorreo();?></td>
            <td><?=$cliente->getTelefono();?></td>
            <td>
                <a class="btn btn-warning" href="">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" 
                    href="index.php?controller=ClienteController&action=eliminar&id=<?=$cliente->getId();?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  
</script>
</html>
