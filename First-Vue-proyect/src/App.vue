<script setup>
  const Cards = 
  [{id: 1, texto:"Clases Practicas"},
   {id: 2, texto:"Material Didactico"},
   {id: 3, texto:"Clases Virtuales y presenciales"},
   {id: 4, texto:"Tarjeta 4"},
   {id: 5, texto:"Tarjeta 5"}
  ]
  const salutate = (texto) => {
    alert("Entrando a: " + texto)
  }

</script>

<template>
  <div class="card-container">
  <div v-for="card in Cards" :key=card.id class="cards" @click="salutate(card.texto)">
  {{ card.texto }}
  </div>
  </div>
  
  

  <main>
    <p>!!!Estoy estudiando para 5to cuatrimestre!!!.</p>
  </main>
</template>

<style scoped>
  .cards{
    background-color: white;
    color: black;
    margin: 10px;
    padding: 20px;
    border-radius: 8px;
    
  }
</style>