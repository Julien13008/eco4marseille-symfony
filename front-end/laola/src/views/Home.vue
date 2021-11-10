<template>
  <div id="block">
    <div class="home">
      <nav>
        <div>
          <Category />
          <p>Catégories</p>
        </div>
        <div>
          <a href="/sale"><i class="fas fa-plus-square"></i></a>
          <p>Vente</p>
        </div>
        <div>
          <a href="/compte"><i class="fas fa-user"></i></a>
          <p>Mon compte / Se connecter</p>
        </div>
        <div>
          <a href="/panier"><i class="fas fa-shopping-basket"></i></a>
          <p>Panier</p>
        </div>
      </nav>

      <form id="searchbox" method="get" action="/search" autocomplete="off">
        <input
          name="q"
          type="text"
          size="15"
          placeholder="Entrez votre recherche..."
        />
      </form>

      <img alt="Vue logo" src="../assets/chaussuresAccueil.jpg" />
    </div>

    <div class="row">
      <h3>Les meilleures ventes</h3>
      <a href=".//">Voir plus</a>
    </div>

    <div class="cardWrapper">
      <div :key="key" v-for="(el, key) in cardsArray">
        <Card :data="el" />
      </div>
    </div>
  </div>
</template>

<script>
import Card from "@/components/Card.vue";
import Category from "@/components/Category.vue";

export default {
  name: "Home",
  components: {
    Card,
    Category,
  },
  data() {
    return {
      cardsArray: [
        {
          title: "NIKE AIR MAX 270",
          price: 50.0,
          points: 20,
          image: "/assets/article1.jpg",
        },
        {
          title: "NIKE AIR MAX 90",
          price: 60.0,
          points: 25,
          image: "/assets/article2.jpg",
        },
        {
          title: "NIKE AIR force",
          price: 40.0,
          points: 15,
          image: "/assets/article3.jpg",
        },
        {
          title: "NIKE AIR MAX 95 ",
          price: 55.0,
          points: 22,
          image: "/assets/article4.jpg",
        },
      ],
    };
  },
};
</script>
<style>
#searchbox {
  width: 240px;
}
#searchbox input {
  outline: none;
}
input:focus::-webkit-input-placeholder {
  color: transparent;
}
input:focus:-moz-placeholder {
  color: transparent;
}
input:focus::-moz-placeholder {
  color: transparent;
}
#searchbox input[type="text"] {
  background: url(http://2.bp.blogspot.com/-xpzxYc77ack/VDpdOE5tzMI/AAAAAAAAAeQ/TyXhIfEIUy4/s1600/search-dark.png)
    no-repeat 10px 13px #f2f2f2;
  border: 2px solid #f2f2f2;
  font: bold 12px Arial, Helvetica, Sans-serif;
  color: #40bfff;
  width: 37.6vw;
  padding: 14px 17px 12px 30px;
  -webkit-border-radius: 5px 5px 5px 5px;
  -moz-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  text-shadow: 0 2px 3px #fff;
  -webkit-transition: all 0.7s ease 0s;
  -moz-transition: all 0.7s ease 0s;
  -o-transition: all 0.7s ease 0s;
  transition: all 0.7s ease 0s;
}
#searchbox input[type="text"]:focus {
  background: #f7f7f7;
  border: 2px solid #f7f7f7;
  width: 200px;
}

.cardWrapper {
  display: flex;

  justify-content: center;
}

nav {
  display: flex;
  justify-content: space-around;
  margin-top: 10%;
}

p {
  font-size: 0.8rem;
  font-weight: 100;
}
.row {
  display: flex;
  align-items: center;
  justify-content: space-around;
}
</style>
