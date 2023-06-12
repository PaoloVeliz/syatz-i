<script></script>
<template>
    <div
        style="
            width: 100%;
            display: flex;
            align-content: center;
            justify-content: center;
            padding-top: 20px;
            padding-bottom: 20px;
        "
    >
        <h2 style="padding-top: 10px">Conoce a grandes amigos!</h2>
    </div>
    <div class="grid-container">
      <friend-card nombre="perro" tipo="gato" age="1 año" description="No teniamos una foto de gatos a la mano" phoneNumber="12345678" photo="/assets/images/pexels-caio-69371.jpg" :diseases="this.diseases" :vaccines="this.vaccines" />
      <friend-card nombre="gato" tipo="perro" age="2 años" description="nos dio gracia que se llamara gato siendo un perro" phoneNumber="12345678" photo="/assets/images/pexels-jozef-fehér-2774140.jpg" :diseases="this.diseases" :vaccines="this.vaccines" />
      <friend-card nombre="nacho y queso" tipo="perro" age="2 años" description="nos dio gracia que se llamara gato siendo un perro" phoneNumber="12345678" photo="/assets/images/pexels-bianca-beltrán-15644497.jpg" :diseases="this.diseases" :vaccines="this.vaccines" />
      <friend-card nombre="canelos" tipo="perro" age="2 años" description="nos dio gracia que se llamara gato siendo un perro" phoneNumber="12345678" photo="/assets/images/pexels-chevanon-photography-1108099.jpg" :diseases="this.diseases" :vaccines="this.vaccines" />
      <friend-card nombre="perro" tipo="gato" age="1 año" description="No teniamos una foto de gatos a la mano" phoneNumber="12345678" photo="/assets/images/pexels-caio-69371.jpg" :diseases="this.diseases" :vaccines="this.vaccines" />
      <friend-card nombre="gato" tipo="perro" age="2 años" description="nos dio gracia que se llamara gato siendo un perro" phoneNumber="12345678" photo="/assets/images/pexels-jozef-fehér-2774140.jpg" :diseases="this.diseases" :vaccines="this.vaccines" />
      <friend-card nombre="nacho y queso" tipo="perro" age="2 años" description="nos dio gracia que se llamara gato siendo un perro" phoneNumber="12345678" photo="/assets/images/pexels-bianca-beltrán-15644497.jpg" :diseases="this.diseases" :vaccines="this.vaccines" />
      <friend-card nombre="canelos" tipo="perro" age="2 años" description="nos dio gracia que se llamara gato siendo un perro" phoneNumber="12345678" photo="/assets/images/pexels-chevanon-photography-1108099.jpg" :diseases="this.diseases" :vaccines="this.vaccines" />
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
    .grid-container {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (min-width: 900px) {
    .grid-container {
        grid-template-columns: repeat(3, 1fr);
    }
}
</style>
<script>
export default {
    data() {
        return {
            diseases: [
                {
                    name: "Ejemplo 1",
                    description: "Descripcion 1"
                },
                {
                    name: "Ejemplo 2",
                    description: "Descripcion 2"
                },
                {
                    name: "Ejemplo 3",
                    description: "Descripcion 3"
                }
            ],
            vaccines: [
                {
                    name: "vacuna 1"
                },
                {
                    name: "vacuna 2"
                },
                {
                    name: "vacuna 3"
                },
            ],
            description: "vacuna",
            fosterhomes: [],
            foster_home: {
              location: "",
              photo: "",
              description: "",
              phonenumber: ""
            },
        };
    },

    methods: {
    },
   
};
</script>
