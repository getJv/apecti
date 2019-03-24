<template>
  <div>
      <h2>Chamada de dados via backend</h2>
      <p>A lista abaixo mostras os usuarios passados do laravel para o vue diretamente pelo controller e via props</p>
      <p>Neste caso vem do controler um string e no created() do vue precisamos converter ela para um objeto json</p>
      <ul>
          <li v-for='user in list' :key="user.id" >{{user.name}}</li>
      </ul>
      
  </div>
</template>

<script>
import EventBus from './EventBusComponent';

export default {
  
  props:['users'],
  
  data() {
    return {
      list: []
    };
  },

  

  created(){
  /*   EventBus.$on('pokemon-added',data => {
      this.pokemons.push(data)
    }) */
    this.list = JSON.parse(this.users);
   
  },

  mounted() {
/*     axios.get("http://localhost/pokemons").then(res => {
      this.pokemons = res.data; 
    }); */
  }
};
</script>
