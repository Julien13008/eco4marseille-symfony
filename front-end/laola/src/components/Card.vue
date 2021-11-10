<template>
  <div class="card">
    <img :src="data.image" alt="article" />
    <h4>{{ data.title }}</h4>
    <h5 style="color: blue">{{ data.price }} €</h5>
    <h5 style="color: green">{{ data.points }} points</h5>
    <button><i class="fas fa-shopping-basket"></i></button>
  </div>
</template>

<script>
export default {
  name: "Card",
  props: ["data"],
};
</script>


<style >
</style>
