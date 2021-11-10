<template>
  <div id="block">
    <h2>Mon Compte</h2>

    <img src="../assets/photoprofile.png" alt="Photo Profil" />
    <div class="wrapper">
      <div id="row">
        <i class="far fa-calendar"></i>
        <span><p>Date de naissance</p></span>
        <p>12/12/2000</p>
      </div>
      <div id="row">
        <i class="far fa-envelope"></i>
        <span><p>Email</p></span>
        <p>maxgold@gmail.com</p>
      </div>
      <div id="row">
        <i class="fas fa-phone-alt"></i>
        <span><p>Tel</p></span>
        <p>0732212432</p>
      </div>
      <div id="row">
        <i class="fas fa-key"></i>
        <span><p>Modifier mot de passe</p></span>
        <p>**********</p>
      </div>
      <div id="row">
        <i class="fas fa-phone-alt"></i>
        <span><p>Club</p></span>
        <p>Olympique de Marseille</p>
      </div>
      <div id="row">
        <i class="fas fa-phone-alt"></i>
        <span><p>Numéro de licence</p></span>
        <p>**********</p>
      </div>
      <div id="row">
        <i class="fas fa-map-marker-alt"></i>
        <span> <p>Adresse</p></span>
        <i class="fas fa-chevron-right"></i>
      </div>
      <div id="row">
        <i class="fas fa-money-bill-alt"></i>
        <span><p>Mon portefeuille</p></span>
        <a href=""><i class="fas fa-chevron-right"></i></a>
      </div>
      <div id="row">
        <i class="fas fa-donate"></i>
        <span><p>Ma cagnotte "Don"</p></span>
        <a href="/cagnotte"><i class="fas fa-chevron-right"></i></a>
      </div>
      <div id="row">
        <i class="fas fa-hand-holding-heart"></i>
        <span><p>Ma contribution écologique</p></span>
        <a href="/contribution"><i class="fas fa-chevron-right"></i></a>
      </div>
      <div id="row">
        <i class="fas fa-dolly-flatbed"></i>
        <span> <p>Commandes</p></span>
        <a href=""><i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
    <div></div>
    <a href="/">Retour à l'accueil</a>
  </div>
</template>
<script>
export default {
  name: "Compte",
  components: {},
};
</script>
<style scoped>
#row {
  display: flex;
  justify-content: space-between;
  width: 80%;
  align-items: center;
}

span {
  margin-left: -50%;
}

.wrapper {
  padding-left: 10%;
}

i {
  padding-right: 10px;
}
</style>
