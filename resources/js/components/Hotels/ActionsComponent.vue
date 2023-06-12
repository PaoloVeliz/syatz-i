<template>
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Antes de comenzar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        La informacion puesta aqui, será posteriormente verifica por una llamada de los colaboradores
        <hr>
        Al terminar de llenar el formulario, no verá su publicacion por que debemos comprobar la informacion
        <hr>
        gracias de antemano
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Entiendo</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Datos generales</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Escribe en una frase la noticia que quieres reportar.</div>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  <div id="emailHelp" class="form-text">Describe la noticia que quieres reportar.</div>

</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Que fecha va a ser</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Coloca la fecha y hora del evento, si es en un futuro o cuando pasó la noticia</div>
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Coloca una foto del evento</label>
  <input class="form-control" type="file" id="formFile">
</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-dismiss="modal">Terminar</button>
      </div>
    </div>
  </div>
</div>
<a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Encuentra un Hotel</a>
</template>