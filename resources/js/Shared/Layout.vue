<template>
  <div class="page-loader">
    <div class="loader">Loading...</div>
  </div>
  <Header />
  <div class="main">
    <slot />
  </div>
  <Footer />
</template>

<script>
import Header from "../Pages/Includes/Header.vue";
import Footer from "../Pages/Includes/Footer.vue";

export default {
  components: {
    Header,
    Footer,
  },

};
</script>
