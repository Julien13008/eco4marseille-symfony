<template>
  <div id="block">
    <img class="logo" src="../assets/logo.png" alt="logo la-ola" />
    <h1>Ma contribution pour la planète</h1>

    <span>Bravo !!</span>
    <h4>Vous avez cumulé</h4>
    <h3><span>20 </span> points</h3>
    <h4>Vous venez de contribuer à enlever</h4>
    <img src="../assets/bouteille.png" alt="Bouteille" />

    <h4>
      Afin de vous récompenser de vos bonnes actions pour la planète vous avez
      gagné :<br />
      <h5>
        soit l'équivalent de <span>20kg </span> de Co2 et
        <span>15 </span> bouteilles en plastique en moins
      </h5>
    </h4>
    Echange de points :
    <p>100 points = cadeau 1</p>
    <p>300 points = cadeau 2</p>
    <p>500 points = cadeau 3</p>
    <p>15000 points = cadeau 4</p>
    <p>20000 points= cadeau 5</p>
  </div>
</template>
<script>
export default {
  name: "Contribution",
  components: {},
};
</script>

<style scoped>
span {
  font-size: 40px;
  color: green;
}
</style>