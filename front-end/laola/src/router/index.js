import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import Login from "../views/Login.vue";
import Register from "../views/Register.vue";
import Compte from "../views/Compte.vue";
import Cagnotte from "../views/Cagnotte.vue";
import Contribution from "../views/Contribution.vue";
import Sale from "../views/Sale.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/login",
    name: "Login",
    component: Login,
  },
  {
    path: "/register",
    name: "Register",
    component: Register,
  },
  {
    path: "/compte",
    name: "Compte",
    component: Compte,
  },
  {
    path: "/cagnotte",
    name: "Cagnotte",
    component: Cagnotte,
  },
  {
    path: "/contribution",
    name: "Contribution",
    component: Contribution,
  },
  {
    path: "/sale",
    name: "Sale",
    component: Sale,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
