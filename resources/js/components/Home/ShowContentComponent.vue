<template>
    <div
        style="
            width: 100%;
            display: flex;
            align-content: center;
            justify-content: center;
            padding-top: 10px;
        "
    >
        <h2>Con que puedo econtrarme hoy</h2>
    </div>
    <div
        class="column"
        style="
            width: 100%;
            display: flex;
            align-content: center;
            justify-content: center;
            padding-top: 10px;
        "
    >
        <button
            @click="showFriends()"
            class="btn btn-primary btn-lg"
            style="margin-right: 10px"
            id="buttonAdoption"
        >
            mostrar mascotas en adopcion
        </button>
        <button
            @click="showFosters()"
            class="btn btn-primary btn-lg"
            id="buttonFoster"
        >
            mostrar hogares temporales
        </button>
    </div>
    <div v-if="showAdption && !showFoster">
        <adoption-component />
    </div>
    <div v-if="showFoster && !showAdption">
        <foster-list />
    </div>
</template>
<script>
export default {
    data() {
        return {
            count: 1,
            showAdption: true,
            showFoster: true,
        };
    },

    methods: {
        showFosters() {
            this.showAdption = false;
            this.showFoster = true;
            var foster = document.getElementById("buttonFoster");
            foster.classList.remove("btn-primary");
            foster.classList.add("btn-secondary");
            var friend = document.getElementById("buttonAdoption");
            friend.classList.add("btn-primary");
            friend.classList.remove("btn-secondary");
        },
        showFriends() {
            this.showFoster = false;
            this.showAdption = true;
            var foster = document.getElementById("buttonFoster");
            foster.classList.add("btn-primary");
            foster.classList.remove("btn-secondary");
            var friend = document.getElementById("buttonAdoption");
            friend.classList.remove("btn-primary");
            friend.classList.add("btn-secondary");
        },
    },
    mounted() {
        console.log("mounted");
    },
};
</script>
