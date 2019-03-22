<template>
  <div>
      <ul>
          <li v-for='pokemon in pokemons' :key="pokemon.id" >{{pokemon.name}}</li>
      </ul>
      
  </div>
</template>

<script>
import EventBus from './EventBusComponent';

export default {
  data() {
    return {
      pokemons: []
    };
  },
  created(){
    EventBus.$on('pokemon-added',data => {
      this.pokemons.push(data)
    })
  },

  mounted() {
    axios.get("http://localhost/pokemons").then(res => {
      this.pokemons = res.data; 
    });
  }
};
</script>
