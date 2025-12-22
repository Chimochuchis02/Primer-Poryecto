<script setup>
import tarjeta from "./components/Tarjetas.vue"
import MainHeader from "./components/Head.vue"
import fo from "./components/Foot.vue"

const salutate = (texto) => {
    alert("Entrando a: " + texto)
  }
  const Cards = [
  { id: 1, texto: "Clases Practicas" },
  { id: 2, texto: "Material Didactico" },
  { id: 3, texto: "Clases Virtuales" },
  { id: 4, texto: "Tarjeta 4" },
  { id: 5, texto: "Tarjeta 5" }
]  
</script>

<template>
<MainHeader/> 

  <div class="card-container">
  <tarjeta v-for="card in Cards" :key=card.id :text=card.texto @clickBoton="salutate(card.texto)"
  />
  </div>

  <fo/>

</template>

<style scoped>
.card-container {
  justify-content: center;
  gap: 20px;
  padding: 40px;
}
</style>