<br>
<div class="row col-sm-12">
  <!-- VIEW -->
  <div class="col-sm-8">   
    <div class="card" id="list_card">
      <div class="card-header">
        <strong><h3>Solicitudes</h3></strong>
      </div>
      <div class="col-sm-12">
        <br>
        <button class="float-right btn btn-primary" id="new_request">+</button>
        <div class="card-boddy">
          <table class="table">
            <thead>
              <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($requests as $request) { ?>
              <tr>
                <td><?php echo $request->id;  ?></td>
                <td><?php echo $request->name_type;  ?></td>
                <td><?php echo $request->name_status;  ?></td>
                <td>
                   <button class="btn btn-sm btn-warning">Ver</button>
                   <button class="btn btn-sm btn-danger">drop</button>
                 </td>
              </tr>
             <?php } ?>
             
            </tbody>
          </table>
        </div>
      </div>
      
    </div>
  </div>



  <div class="col-sm-4">
    <div class="card">
      <div class="card-header">
        <strong><h3>Información</h3></strong>
      </div>
      <div class="card-boddy">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
             <strong> <label>Nombre: </label></strong>
           </div>
           <div class="col-sm-12">
             <strong> <label>Correo: </label></strong>
           </div>
           <div class="col-sm-12">
             <strong> <label>Tel: </label></strong>
           </div>
           <div class="col-sm-12">
             <strong> <label>Observación: </label></strong>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>


 <!-- New  -->
 <div class="col-sm-8" style="position: absolute;">

  <div class="card" id="new_card">
    <div class="card-header">
      <strong><h3>Crear Solicitud <button class="btn btn-danger float-right" id="exit_card">X</button></h3></strong>
    </div>
    <div class="col-sm-12">
      <br>
      <!--   <button class="float-right btn btn-primary" id="new_request">X</button> -->
      <div class="card-boddy col-sm-12">
        <div class="alert alert-primary" role="alert">
          "Seleccione el servicio a solicitar y un agente se comunicara contigo"
        </div>
        <form action="?controller=request&method=save" method="POST">
          <div class="row">
            <div class="col-sm-4">
              <label>Tipo servicio <span class="text-danger">*</span></label>
              <select class="form-control" name="id_type_request">
                <option value="0">Seleccione...</option>
                <?php foreach ($type_requests as $type_request) {  ?>
                 <option value="<?php echo $type_request->id ?>"><?php echo $type_request->name ?></option>
               <?php } ?>
             </select>
           </div>

           <div class="col-sm-2">
            <label>+</label>
            <select class="form-control" name="code_tel">
              <option>(+57)</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label>Numero contacto <span class="text-danger">*</span></label>
            <input type="number" name="tel_contact" class="form-control" placeholder="310 323 8780" id="">
          </div>
        </div>       
        <div class="row">
          <div class="col-sm-12">
           <label>Descripción <span class="text-danger">*</span></label>
           <textarea class="form-control" name="description" placeholder="Información adicional sobre el servicio a solicitar."></textarea>
         </div>
       </div> 
       <br>
       <div class="d-flex justify-content-center">
        <button class="btn btn-primary">Crear</button>
      </div> 
    </form> 

    <br>
  </div>

</div>

</div>
</div>



</div>  
<script type="text/javascript" src="assets/js/proyect/request.js"></script>
<script src="assets/js/jquery.js"></script>

<footer class="footer">
  <div class="container-fluid">
    <div class="copyright float-right" >
      ©
      <script>
        document.write(new Date().getFullYear())
      </script>  derechos <i class="tim-icons icon-heart-2"></i> reservados
      <a href="https://www.facebook.com" target="_blank">Dual Sistems</a> Luis Novoa 
    </div>
  </footer>


