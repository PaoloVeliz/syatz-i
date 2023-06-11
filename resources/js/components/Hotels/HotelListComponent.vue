<script></script>
<template>
    <div class="grid-container">
        <hotels-card/>
        <hotels-card/>
        <hotels-card/>
        <hotels-card/>
        <hotels-card/>
        <hotels-card/>
        <hotels-card/>
        <hotels-card/>
        <hotels-card/>
        <hotels-card/>
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
