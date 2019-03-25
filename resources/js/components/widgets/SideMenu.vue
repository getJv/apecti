<template>
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">{{ appTitle }}</div>
    <div class="list-group list-group-flush">
      <a
        href="item.url"
        class="list-group-item list-group-item-action bg-light"
        v-for="item in menuList"
        :key = "item.id"
       
      >{{item.name}}</a>
    </div>
  </div>
</template>

<script>
export default {
  props: ["app-title", "menu-itens"],

  data() {
    return {
      menuList: []
    };
  },

  created() {
    let menuExemplo = [
      { id: 1, url: "#", name: "Dashboard" },
      { id: 2, url: "#", name: "Shortcuts" }
    ];
    this.menuList = this.menuItens || menuExemplo;
  }
};
</script>
