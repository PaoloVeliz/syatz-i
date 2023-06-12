<script></script>
<template>
        <div  style="width: 100%; display: flex; align-content: center; justify-content: center; padding-top: 20px; padding-bottom: 20px;">
        <h2 style="padding-top: 10px;">Conoce y contacta con hogares temporales!</h2>
      </div>
    <div class="grid-container">
        <foster-card photo="/assets/images/pexels-andrea-piacquadio-3108976.jpg" location="direccion de ejemplo" description ="un lugar grande para perro que pueda ser bastante jugueton" phoneNumber="12345678"/>
        <foster-card photo="/assets/images/pexels-pixabay-314937.jpg" location="direccion de ejemplo" description ="un lugar grande para perro que pueda ser bastante jugueton" phoneNumber="12345678"/>
        <foster-card photo="/assets/images/pexels-mark-ingraham-12890090.jpg" location="direccion de ejemplo" description ="un lugar grande para perro que pueda ser bastante jugueton" phoneNumber="12345678"/>
        <foster-card photo="/assets/images/pexels-mark-ingraham-12890090.jpg" location="direccion de ejemplo" description ="un lugar grande para perro que pueda ser bastante jugueton" phoneNumber="12345678"/>
        <foster-card photo="/assets/images/pexels-pixabay-314937.jpg" location="direccion de ejemplo" description ="un lugar grande para perro que pueda ser bastante jugueton" phoneNumber="12345678"/>
        <foster-card photo="/assets/images/pexels-andrea-piacquadio-3108976.jpg" location="direccion de ejemplo" description ="un lugar grande para perro que pueda ser bastante jugueton" phoneNumber="12345678"/>
    
    </div>
</template>
<style>
.grid-container {
    display: grid;
    /* grid-template-columns: auto auto auto; */
    padding: 10px;
    gap: 10px;
}
.grid-item {
    /* background-color: rgba(255, 255, 255, 0.8); */
    /* border: 1px solid rgba(0, 0, 0, 0.8); */
    padding: 20px;
    font-size: 30px;
    text-align: center;
}
@media (min-width: 600px) {
  .grid-container { grid-template-columns: repeat(2, 1fr); }
}
@media (min-width: 900px) {
  .grid-container { grid-template-columns: repeat(3, 1fr); }
}
</style>
