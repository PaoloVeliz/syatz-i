<template>
    <div class="card" style="width: 100%">
        <img
            :src="photo"
            class="card-img-top"
            alt="..."
        />
        <div class="card-body">
            <h5 class="card-title">{{nombre}}</h5>
            <p class="card-text">{{ description }}</p>
            <a
                class="btn btn-primary"
                data-bs-toggle="modal"
                href="#showAFriendModalCards2"
                role="button"
                >Conocer mas</a
            >
        </div>
    </div>
    <div
        class="modal fade"
        id="showAFriendModalCards2"
        aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">
                        Informacion general
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >Nombre del amigo</label
                        >
                        <label >{{ nombre }}</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            :value="nombre"
                            disabled
                        />
                    </div>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >Es</label
                        >
                        <select
                            class="form-select"
                            aria-label="Default select example"
                            disabled
                        >
                            <option value="Gato">Gato</option>
                            <option value="Perro">Perro</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >Edad en años (requerido)</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="1 año"
                            :value="age"
                            disabled
                        />
                    </div>
                    <div class="mb-3">
                        <label
                            for="exampleFormControlTextarea1"
                            class="form-label"
                            >Describe a nuestro amigo (requerido)</label
                        >
                        <textarea
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            rows="3"
                            :value=description
                            disabled
                        >{{ description }}</textarea>
                        <p>
                            {{ description }}
                        </p>
                    </div>
                    <hr />
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >Numero al cual contactarte (requerido)</label
                        >
                        
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="12345678"
                            :value="phoneNumber"
                            disabled
                        />
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary"
                        data-bs-target="#showAFriendModalCard3"
                        data-bs-toggle="modal"
                        data-bs-dismiss="modal"
                    >
                        Siguiente
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade"
        id="showAFriendModalCard3"
        aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">
                        Informacion sobre sus vacunas
                    </h5>
                </div>
                <div class="modal-body" id="exampleModalToggle2Body">
        
                    <div class="mb-3" v-for="item in vaccines" :key="item['name']">
                    <!-- <div class="mb-3"> -->
                        <label for="nameInput" class="form-label"
                            >Vacuna</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="Contra la rabia"
                            :value="item['name']"
                            disabled
                        />
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary"
                        data-bs-target="#showAFriendModalCard4"
                        data-bs-toggle="modal"
                        data-bs-dismiss="modal"
                    >
                        Siguiente
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade"
        id="showAFriendModalCard4"
        aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">
                        Enfermedades
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body" id="exampleModalToggle3Body">
                <div v-for="item in diseases" :key="item['name']">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >nombre</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="Coloca el nombre del padecimiento"
                            :value="item['name']"
                            disabled
                        />
                    </div>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >Descripcion</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="Descripcion"
                            :value="item['description']"
                            disabled
                        />
                        <hr>
                    </div>
                </div>
                    
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary"
                        data-bs-target="#showAFriendModalCard5"
                        data-bs-toggle="modal"
                        data-bs-dismiss="modal"
                    >
                        Siguiente
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade"
        id="showAFriendModalCard5"
        aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">
                        Terminado el formulario!
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    Haz terminado de dar a conocer al amigo de una persona!
                    muchas gracias por tu ayuda.
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary"
                        data-bs-dismiss="modal"
                    >
                        Terminar
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
  props: {
    nombre: String,
    tipo: String,
    age: String,
    description: String,
    phoneNumber: String,
    photo: String,
    diseases: Array,
    vaccines: Array,
  },
  data() {
        return {
        };
    },

    methods: {
        fillModals() {
            
            var modal1 = document.getElementById("buttonFoster");
            var modal1 = document.getElementById("buttonFoster");
            var modal1 = document.getElementById("buttonFoster");
            foster.classList.remove("btn-primary");
            foster.classList.add("btn-secondary");
            var friend = document.getElementById("buttonAdoption");
            friend.classList.add("btn-primary");
            friend.classList.remove("btn-secondary");
        },
        showFriends() {
            var foster = document.getElementById("buttonFoster");
            foster.classList.add("btn-primary");
            foster.classList.remove("btn-secondary");
            var friend = document.getElementById("buttonAdoption");
            friend.classList.remove("btn-primary");
            friend.classList.add("btn-secondary");
        },
    },
    mounted() {
        // fillModals();
    },
}
</script>
