<script setup>
import tarjeta from "./components/Tarjetas.vue"
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
  <div class="card-container">
  <tarjeta v-for="card in Cards" :key=card.id :text=card.texto @clickBoton="salutate(card.texto)"
  />
  </div>
</template>

<style scoped>
body{
  margin: 0;
  padding: 0;
  background: radial-gradient(circle, #3b3b3b 0%, #000000 100%);
  min-height: 100vh;
} 

.card-container{
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}
</style>