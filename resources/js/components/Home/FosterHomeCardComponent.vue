<template>
    <div class="card" style="width: 100%">
        <img
            :src="photo"
            class="card-img-top"
            alt="..."
        />
        <div class="card-body">
            <h5 class="card-title">{{location}}</h5>
            <p class="card-text">{{ description }}</p>
            <a
                class="btn btn-primary"
                data-bs-toggle="modal"
                href="#exampleModalToggle"
                role="button"
                >Conocer mas</a
            >
        </div>
    </div>
    <div
        class="modal fade"
        id="exampleModalToggle"
        aria-hidden="true"
        aria-labelledby="exampleModalToggle"
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
                            >Ubicacion para poder llegar</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="nameInput"
                            placeholder="Zona 7"
                            :value="location"
                            disabled
                        />
                    </div>
                    <div class="mb-3">
                        <label
                            for="exampleFormControlTextarea1"
                            class="form-label"
                            >Descripcion del lugar </label
                        >
                        <textarea
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            rows="3"
                            :value="description"
                            disabled
                        ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label"
                            >Numero al cual contactar</label
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
  props: {
    location: String,
    description: String,
    phoneNumber: String,
    photo: String,
  }
}
</script>
