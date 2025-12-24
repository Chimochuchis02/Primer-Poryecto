<script setup>
import tarjeta from "./components/Tarjetas.vue"
import MainHeader from "./components/Head.vue"
import fo from "./components/Foot.vue"
import { ref, onMounted } from 'vue'

const salutate = (texto) => {
    alert("Entrando a: " + texto)
  }

  const Cards = ref([])
  onMounted(async () => {
    try {
        const res = await fetch('http://127.0.0.1:8000/api/tarjetas');
        Cards.value = await res.json();
    } catch (error) {
        console.error("Error al conectar con Laravel:", error);
    }
});
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