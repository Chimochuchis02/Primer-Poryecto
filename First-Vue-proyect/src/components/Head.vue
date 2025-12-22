<script setup>
defineProps(["title"])
</script>

<template>
<header class="h">
<h1>{{ title }}</h1>
</header>    
</template>

<style scoped>
.h{
  text-align: center;
  background-color: white;  
}

h1{
 color:pink;
 font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}    
</style>
