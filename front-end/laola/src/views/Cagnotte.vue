<template>
  <div id="block">
    <img class="logo" src="../assets/logo.png" alt="logo la-ola" />
    <h1>Ma Cagnotte "Don"</h1>

    <p>Je choisis de reverser :</p>

    <!----------------------------- Formulaire de Don -------------------------->

    <form @submit.prevent="EnvoiDon()">
      <input type="number" placeholder="15€" v-model="prixDon" />

      <p>Au Club :</p>

      <input
        type="text"
        placeholder="Olympique de Marseille"
        v-model="nomDuClub"
      />
      <p>
        Choisis ton club via notre
        <a href="http://monclubpresdechezmoi.com/">partenaire</a>.
      </p>

      <input class="box" type="checkbox" v-model="donAnonyme" name="don" />
      <label for="don">Don Anonyme</label>

      <button>Faire un Don</button>
    </form>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Cagnotte",
  components: {},
  data: function () {
    return {
      prixDon: "",
      nomDuClub: "",
      donAnonyme: "",
    };
  },
  // -------------------------- Envoi requête Don ---------------------------
  methods: {
    EnvoiDon: async function () {
      if (this.prixDon !== 0 && this.nomDuClub !== "") {
        console.log("create ok");
        alert("veuillez remplir des champs valide");
      } else {
        const body = {
          prixDon: this.prixDon,
          nomDuClub: this.nomDuClub,
        };
        console.log("requête envoie");
        const response = await axios.post("", body);
        if (response.data === "Success") {
          const redirect_url = "/compte";
          this.$router.push(redirect_url);
        }
      }
    },
  },
};
</script>

<style scoped>
.box {
  height: 15px;
  width: 50px;
}
</style>
