<template>
  <div id="block">
    <img class="logo" src="../assets/logo.png" alt="logo la-ola" />

    <h1>Bienvenue sur la Ola !</h1>
    <h3>Connectez-vous</h3>

    <!---------------------------------------Formulaire Login------------------------------>

    <form id="" @submit.prevent="handleSubmit">
      <input
        type="email"
        id="email"
        placeholder="Email"
        v-model="emailLogin"
        required
      /><br />
      <input
        type="password"
        id="password"
        placeholder="Password"
        v-model="passwordLogin"
        required
      />
      <div id="">
        <button id="">Connectez-vous</button>
      </div>
    </form>
    <div>
      <a href="">Mot de passe oublié ?</a>
      <p>
        Vous n'êtes pas inscrit ?
        <a href="./register">Inscrivez-vous</a>
      </p>
    </div>
    <div>
      <a href="/">Retour à l'accueil</a>
    </div>
  </div>
</template>
<script>
export default {
  name: "Login",
  components: {},
  data() {
    return {
      emailLogin: "",
      passwordLogin: "",
    };
  },

  //   ----------------------------------Envoi Formulaire Login avec validation Token-----------

  //   methods: {
  //     handleSubmit: async function (e) {
  //       e.preventDefault();
  //       const body = {
  //         emailLogin: this.emailLogin,
  //         passwordLogin: this.passwordLogin,
  //       };

  //       const response = await axios
  //         .post("", body)
  //         .catch((err) => console.log(err));

  //       if (response && response.data.success) {
  //         sessionStorage.setItem("logintoken", response.data.token);
  //         const redirect_url = "/";
  //         this.$router.push(redirect_url);
  //       } else {
  //         alert("Mot de passe / email incorrect(s) ou vous n'etes pas inscrit");
  //         this.inputPassword = "";
  //       }
  //     },
  //   },
};
</script>

<style scoped>
h3 {
  font-weight: 100;
}
</style>
