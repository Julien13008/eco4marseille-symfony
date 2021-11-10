<template>
  <div id="block">
    <img class="logo" src="../assets/logo.png" alt="logo la-ola" />
    <h1>Mets en vente ton article...</h1>
    <h3>Go !</h3>
    <form @submit.prevent action="/action_page.php">
      <input type="file" id="myFile" name="filename" />
      <input type="text" placeholder="Titre de l'article" />
      <input type="text" placeholder="Description de l'article" />

      <input class="reduce" type="text" placeholder="Categorie" /> <Category />
      <input type="text" placeholder="Marque" />
      <input type="text" placeholder="Etat" />
      <input type="text" placeholder="Prix" />
      <button>Ajouter</button>
    </form>
  </div>
  <div>
    <a href="/">Retour à l'accueil</a>
  </div>
</template>
<script>
import Category from "../components/Category.vue";
export default {
  name: "Sale",
  components: { Category },

  methods: {
    myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    },
  },
};
</script>

<style>
#block {
  width: 40vw;
  margin-left: 460px;
  margin-right: 360px;
}

#myInput:focus {
  outline: 3px solid #ddd;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
h3 {
  font-weight: 100;
}
.reduce {
  width: 90%;
}
</style>
