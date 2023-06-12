<template>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="padding-bottom: 50px;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-block w-100" style="background-image: url('/assets/images/pexels-steve-johnson-1843717.jpg'); height: 300px; color: black; "> <h2 style="display: flex; justify-content: center; padding-top: 6%;">Encuentra un amigo</h2> </div>
          </div>
          <div class="carousel-item">
            <div class="d-block w-100" style="background-image: url('/assets/images/pexels-steve-johnson-1843717.jpg'); height: 300px; color: black; "> <h2 style="display: flex; justify-content: center; padding-top: 6%;"> Brinda hogar y amor a una mascota</h2> </div>
          </div>
          <div class="carousel-item">
            <div class="d-block w-100" style="background-image: url('/assets/images/pexels-steve-johnson-1843717.jpg'); height: 300px; color: black;"> <h2 style="display: flex; justify-content: center; padding-top: 6%;"> Puedes ver otras opciones para amantes de las mascotas en las demas pestañas </h2></div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>