<template>
  <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
    crossorigin="anonymous"
  />
  <!-- <div id="nav">
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>
    <router-link to="/login">Login</router-link>
  </div> -->
  <router-view />
</template>

<style>
#app {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
input {
  border: #ebf0ff solid 2px;
  border-radius: 8px;
  height: 40px;
  width: 95%;
  margin-bottom: 15px;
}
placeholder {
  font-size: 20 px;
  color: #9098b1;
}
a {
  color: #40bfff;
  font-weight: bold;
}
button {
  background-color: #40bfff;
  color: white;
  border: none;
  border-radius: 8px;
  height: 40px;
  width: 95%;
  margin-bottom: 15px;
}
.logo {
  margin-top: 10%;
}
#block {
  width: 40vw;
  margin-left: 460px;
  margin-right: 360px;
}
</style>
