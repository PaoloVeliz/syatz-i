<template>
    <div
        style="
            display: flex;
            flex-direction: row;
            align-items: end;
            justify-content: end;
        "
    >
        <button
            type="button"
            class="btn btn-lg"
            style="background: #6d997a; color: aliceblue; margin-right: 10px"
            data-bs-toggle="modal"
            data-bs-target="#showAFriendModal"
        >
            A conocer un amigo
        </button>
        <button
            type="button"
            class="btn btn-lg"
            style="background: #6d997a; color: aliceblue"
            data-bs-toggle="modal"
            data-bs-target="#exampleModalToggleTemporal"
        >
            Un hogar temporal
        </button>
    </div>

    <!-- give friend information Modal  -->
    <div
        class="modal fade"
        id="showAFriendModal"
        aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">
                        Antes de comenzar
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    Recuerda ser sincero en la información sobre el amigo,
                    queremos encontrarle la persona indicada.
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary"
                        data-bs-target="#showAFriendModal2"
                        data-bs-toggle="modal"
                        data-bs-dismiss="modal"
                    >
                        Entiendo
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade"
        id="showAFriendModal2"
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
                            >Nombre del amigo (requerido)</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="pelusa"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >Que animal es? (requerido)</label
                        >
                        <select
                            class="form-select"
                            aria-label="Default select example"
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
                        ></textarea>
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
                        />
                    </div>
                    <div class="mb-3">
  <label for="formFile" class="form-label">Coloca una foto de tu amigo para que lo conozcan mejor</label>
  <input class="form-control" type="file" id="formFile">
</div>
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary"
                        data-bs-target="#showAFriendModal3"
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
        id="showAFriendModal3"
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
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body" id="exampleModalToggle2Body">
                    <button
                        type="button"
                        class="btn mb-3 btn-primary"
                        id="addVaccine"
                        @click="addAVaccineField()"
                    >
                        Agregar otra vacuna
                    </button>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >Vacuna (requerido)</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="Contra la rabia"
                        />
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary"
                        data-bs-target="#showAFriendModal4"
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
        id="showAFriendModal4"
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
                    <button
                        type="button"
                        class="btn mb-3 btn-primary"
                        id="addVaccine"
                        @click="addADiseaseField()"
                    >
                        Agregar otro campo de enfermedad
                    </button>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >nombre (requerido)</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="Coloca el nombre del padecimiento"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >Descripcion (requerido)</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="Descripcion"
                        />
                        <div id="emailHelp" class="form-text">Puedes contarnos sobre como tratarla o de que trata</div>
                        <hr>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary"
                        data-bs-target="#showAFriendModal5"
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
        id="showAFriendModal5"
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

    <!-- temporal home Modal  -->
    <div
        class="modal fade"
        id="exampleModalToggleTemporal"
        aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">
                        Antes de seguir
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    Recuerda que este es un camino lleno de amor y aprendizaje,
                    gracias por que querer dar un hogar a un amigo que necesita
                    tu ayuda.
                    <hr>
                    Tambien tus datos en el formulario anterior serán compartidos.
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary"
                        data-bs-target="#exampleModalToggleTemporal2"
                        data-bs-toggle="modal"
                        data-bs-dismiss="modal"
                    >
                        Acepto los terminos
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div
        class="modal fade"
        id="exampleModalToggleTemporal3"
        aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">
                        Muchas gracias
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    Al ofrecer un lugar temporal, estas ayudando mucho a un amiguito a tener un hogar y sentir el amor de estar en uno,
                    no está mal si despues decides quedarte con alguno de ellos, solamente recuerda tener todas las capacidades para darles una buena vida.
                    <hr>
                    Las personas interesadas estarán usando tu número para poder comunicarse contigo.
                    <hr>
                    De nuevo. Muchas gracias!
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary"
                        data-bs-dismiss="modal"
                    >
                        Finalizar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade"
        id="exampleModalToggleTemporal2"
        aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">
                        Datos generales
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
                            >Coloca la ubicacion para poder llegar (requerido)</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="Zona 7"
                        />
                    </div>
                    <div class="mb-3">
                        <label
                            for="exampleFormControlTextarea1"
                            class="form-label"
                            >Describe el lugar donde vas a estar junto al amigo (requerido)</label
                        >
                        <textarea
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            rows="3"
                        ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >Numero al cual contactarte (requerido)</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="12345678"
                        />
                    </div>
                    <div class="mb-3">
  <label for="formFile" class="form-label">Coloca una foto de tu casa para poder mostrar donde se quedaria</label>
  <input class="form-control" type="file" id="formFile">
</div>
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary"
                        data-bs-target="#exampleModalToggleTemporal3"
                        data-bs-toggle="modal"
                        data-bs-dismiss="modal"
                    >
                    Siguiente
                   </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            count: 1,
        };
    },

    methods: {
        addADiseaseField() {
            let myForm = document.getElementById("exampleModalToggle3Body");

            // Create new DOM Object instead of building HTML strings
            let newCode = document.createElement("div");
            let newLabel = document.createElement("label");
            newLabel.textContent = "nombre (requerido)";
            newLabel.classList.add("form-label");
            let br = document.createElement("br");
            let newInput = document.createElement("input");
            newInput.type = "text";
            newInput.id = "vaccineField";
            newInput.classList.add("form-control");
            newInput.placeholder = "Coloca el nombre del padecimiento";


            let newCode1 = document.createElement("div");
            let newLabel1 = document.createElement("label");
            newLabel1.textContent = "Descripcion (requerido)";
            newLabel1.classList.add("form-label");
            let br1 = document.createElement("br");
            let newInput1 = document.createElement("input");
            newInput1.type = "text";
            newInput1.id = "diseaseDescriptionField";
            newInput1.classList.add("form-control");
            newInput1.placeholder = "Descripcion";
            let newBackLabel = document.createElement("label");
            newBackLabel.textContent = "Puedes contarnos sobre como tratarla o de que trata";
            newBackLabel.classList.add("form-text");
            let hr = document.createElement("hr");
            // Append the elements
            newCode.appendChild(newLabel);
            newCode.appendChild(br);
            newCode.appendChild(newInput);
            newCode1.appendChild(newLabel1);
            newCode1.appendChild(br1);
            newCode1.appendChild(newInput1);

            newCode1.appendChild(newBackLabel);
            newCode1.appendChild(hr);
            myForm.appendChild(newCode);
            myForm.appendChild(newCode1);
        },
        addAVaccineField() {
            let myForm = document.getElementById("exampleModalToggle2Body");

            // Create new DOM Object instead of building HTML strings
            let newCode = document.createElement("div");
            let newLabel = document.createElement("label");
            newLabel.textContent = "Nombre (requerido)";
            newLabel.classList.add("form-label");
            let br = document.createElement("br");
            let newInput = document.createElement("input");
            newInput.type = "text";
            newInput.id = "vaccineField";
            newInput.classList.add("form-control");
            newInput.placeholder = "Contra la rabia";

            // Append the elements
            newCode.appendChild(newLabel);
            newCode.appendChild(br);
            newCode.appendChild(newInput);
            myForm.appendChild(newCode);
        },
    },
    // `mounted` is a lifecycle hook which we will explain later
    mounted() {
        // `this` refers to the component instance.
        console.log(this.count); // => 1

        // data can be mutated as well
        this.count = 2;
    },
};
</script>
