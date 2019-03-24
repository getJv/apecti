<template>
  <div>
      <h2>Chamada de dados via axios</h2>
      <p>Nesse componente pegamos a lista diretamente via AXIOS sem passar pelo controller do laravel</p>
      <p>pois os jados ja vem tradados externamente</p>
      <ul>
          <li v-for='user in list' :key="user.id" >{{user.name}}</li>
      </ul>
      
  </div>
</template>

<script>
import EventBus from './EventBusComponent';

export default {
  
  data() {
    return {
      list: []
    };
  },

  

  created(){
  /*   EventBus.$on('pokemon-added',data => {
      this.pokemons.push(data)
    }) */
    
    axios.get('https://jsonplaceholder.typicode.com/users')
                     .then((res) => {this.list = res.data
                     
                     });
   
  },

  mounted() {
/*     axios.get("http://localhost/pokemons").then(res => {
      this.pokemons = res.data; 
    }); */
  }
};
</script>
