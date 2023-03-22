<template>
  <div class="page-loader">
    <div class="loader">Loading...</div>
  </div>
  <Header :links="links" />
  <div class="main">
    <slot />
  </div>
  <Footer :socials="socials"/>
</template>

<script>
import Header from "../Pages/Includes/Header.vue";
import Footer from "../Pages/Includes/Footer.vue";

export default {
  components: {
    Header,
    Footer,
  },
  props: {
    links: Array,
    socials: Array,
  },

};
</script>
