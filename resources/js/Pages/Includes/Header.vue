<template>
  <div class="page-loader">
    <div class="loader">Загрузка...</div>
  </div>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button
          class="navbar-toggle"
          type="button"
          data-toggle="collapse"
          data-target="#custom-collapse"
        >
          <span class="sr-only">Выбор навигации</span
          ><span class="icon-bar"></span><span class="icon-bar"></span
          ><span class="icon-bar"></span></button
        ><Link class="navbar-brand" :href="route('home')">NickWeb</Link>
      </div>
      <div class="collapse navbar-collapse" id="custom-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li v-for="link in links" :key="link.id">
            <Link :href="link.link">{{ link.title }}</Link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
  name: "Header",
  components: {
    Link,
  },
  props: {
    links: Array,
  }
};
</script>
