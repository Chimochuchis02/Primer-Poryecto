<script setup>
// Defino qué datos necesita recibir esta tarjeta para funcionar
defineProps(['text']) 
</script>

<template>
 <div class="card-V2" @click="$emit('clickBoton')">
 <h3>{{ text }}</h3>
 
</div>
</template>

<style scoped>
  .card-V2{
  background-color: white;
  color: blue;
  padding: 20px;
  border-radius: 12px;
  border-left: 5px solid red; 
  margin: 10px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  transition: transform 0.2s;
  }
  
  .card-V2:hover{
   transform: translateY(-5px);
   background-color: pink;
  }

  button{
  color: white;
  border: none;
  padding: 8px 15px;
  border-radius: 5px;
  cursor: pointer;
  }
</style>