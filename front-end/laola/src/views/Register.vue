<template>
  <div id="block">
    <img class="logo" src="../assets/logo.png" alt="logo la-ola" />
    <h1>C'est parti !</h1>
    <h3>Créer un compte</h3>
    <div class="row">
      <button class="nudeButton" @click="setRegistrationScheme('club')">
        Club
      </button>
      <button class="nudeButton" @click="setRegistrationScheme('individual')">
        Particulier
      </button>
    </div>

    <!--------------------------- formulaire Club ------------------------------>

    <form
      id="club"
      v-if="registrationScheme === 'club'"
      @submit.prevent="CreateClubAcount()"
    >
      <input
        type="text"
        id="nameClub"
        placeholder="Nom du club"
        v-model="nomDuClub"
      />
      <input
        type="text"
        id="namerepresentant"
        placeholder="Nom du représentant"
        v-model="nomDuRepresentant"
      />
      <input
        type="email"
        id="emailClub"
        placeholder="Email"
        v-model="emailClub"
      />
      <input
        type="password"
        id="passwordClub"
        placeholder="Mot de passe"
        v-model="motDePasseClub"
      />
      <input
        type="password"
        id="confirmePassClub"
        placeholder="Confirmation du mot de passe"
        v-model="confirmePassClub"
      />
      <div id="button">
        <button id="connexion">Connexion</button>
      </div>
    </form>

    <!---------------------------- formulaire particulier --------------------->

    <form
      id="particulier"
      v-if="registrationScheme === 'individual'"
      @submit.prevent="CreateParticulierAcount()"
    >
      <input
        type="text"
        id="nomParticulier"
        placeholder="Nom"
        v-model="nomParticulier"
      />
      <input
        type="email"
        id="emailParticulier"
        placeholder="Email"
        v-model="emailParticulier"
      />
      <input
        type="password"
        id="passParticulier"
        placeholder="Mot de passe"
        v-model="passParticulier"
      />
      <input
        type="password"
        id="confirmePassParticulier"
        placeholder="Confirmation du mot de passe"
        v-model="confirmePassParticulier"
      />
      <input
        type="text"
        id="codeParrainage"
        placeholder="Code de parrainage"
        v-model="codeParrainage"
      />
      <div id="button">
        <button id="connexion">Connexion</button>
      </div>
    </form>
    <div>
      <a href="/">Retour à l'accueil</a>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Register",
  components: {},
  data: function () {
    return {
      registrationScheme: "",
      nomDuClub: "",
      nomDuRepresentant: "",
      emailClub: "",
      motDePasseClub: "",
      confirmePassClub: "",
      nomParticulier: "",
      emailParticulier: "",
      passParticulier: "",
      confirmePassParticulier: "",
      codeParrainage: "",
    };
  },
  //--------------------------apparition formulaire en data propertie/v-if--------------
  methods: {
    setRegistrationScheme(type) {
      this.registrationScheme = type;
    },
    //------------------------envoi validation formulaire Club------------------------

    CreateClubAcount: async function () {
      if (this.motDePasseClub !== this.confirmePassClub) {
        console.log("create ok");
        alert("veuillez saisir un mot de passe");
      } else {
        const body = {
          nomDuClub: this.nomDuClub,
          nomDuRepresentant: this.nomDuRepresentant,
          emailClub: this.emailClub,
          motDePasseClub: this.motDePasseClub,
          confirmePassClub: this.confirmePassClub,
        };
        console.log(body);
        const response = await axios.post(
          "https://localhost:8000/club/new",
          body
        );
        if (response.data === "Success") {
          const redirect_url = "/";
          this.$router.push(redirect_url);
        }
      }
    },
    // -----------------------envoi validation formulaire Particulier---------------

    CreateParticulierAcount: async function () {
      if (this.passParticulier !== this.confirmePassParticulier) {
        console.log("create ok");
        alert("veuillez saisir un mot de passe identique");
      } else {
        const body = {
          nomParticulier: this.nomParticulier,
          emailParticulier: this.emailParticulier,
          passParticulier: this.passParticulier,
          confirmePassParticulier: this.confirmePassParticulier,
          codeParrainage: this.codeParrainage,
        };
        console.log("create ok");
        const response = await axios.post(
          "https://localhost:8000/user/new",
          body
        );

        if (response.data === "Success") {
          const redirect_url = "/";
          this.$router.push(redirect_url);
        }
      }
    },
    myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    },
  },
};
</script>

<style scoped>
#block {
  width: 40vw;
  margin-left: 460px;
  margin-right: 360px;
}
h3 {
  font-weight: 100;
}
.row {
  display: flex;
  flex: 2;
}
.nudeButton {
  background-color: white;
  border: 3px solid #40bfff;
  color: #40bfff;
  font-weight: bold;
  margin: 5px;
}
</style>