<template>
  <div class="dropdown">
    <button @click="myFunction()" class="dropbtn">
      <i class="fas fa-sort-down"></i>
    </button>
    <div id="myDropdown" class="dropdown-content">
      <!-- <input
        type="text"
        placeholder="Search.."
        id="myInput"
        onkeyup="filterFunction()"
      /> -->
      <a ref="#football"><i class="fas fa-futbol"> </i>Football </a>
      <a ref="#tennis"><i class="fas fa-table-tennis"></i> Tennis</a>
      <a ref="#basketball"><i class="fas fa-basketball-ball"></i> Basketball</a>
      <a ref="#handball"><i class="fas fa-circle"></i> Handball</a>
      <a href="#judo"><i class="fas fa-fist-raised"></i> Judo</a>
      <a href="#golf"><i class="fas fa-golf-ball"></i> Golf</a>
      <a href="#natation"><i class="fas fa-swimmer"></i> Natation</a>
      <a href="#petanque"><i class="fas fa-baseball-ball"></i> Pétanque</a>
      <a href="#rugby"><i class="fas fa-football-ball"></i> Rugby</a>
    </div>
  </div>
</template>

<script>
export default {
  name: "Category",
  methods: {
    myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    },
  },
};
</script>


<style scoped>
button {
  border: none;
  background-color: none;
  height: 15px;
  margin-bottom: 0;
}
a {
  color: grey;
}
</style>
