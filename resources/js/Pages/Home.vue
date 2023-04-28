<template>
  <Head>
    <title>NickWeb | {{ title }}</title>
  </Head>
  <layout :links="links" :socials="socials">
    <FirstScreen :page="page" />
    <section class="module" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h2 class="module-title font-alt">ДОБРО ПОЖАЛОВАТЬ НА&nbsp;МОЙ САЙТ&nbsp;&mdash; ПОРТФОЛИО</h2>
            <div class="module-subtitle font-serif large-text">
                Ниже вы&nbsp;можете ознакомиться с&nbsp;моим портфолио. Узнать о&nbsp;моем опыте и&nbsp;стеке технологии вы&nbsp;можете на&nbsp;странице <Link style="text-decoration: underline;" :href="route('about')">&laquo;Обо мне&raquo;</Link>. Оставить заявку или задать свой вопрос на&nbsp;странице <Link style="text-decoration: underline;" :href="route('contact')">&laquo;Контакты&raquo;</Link>.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2 col-sm-offset-5">
            <div class="large-text align-center">
              <a class="section-scroll" href="#projects"
                ><i class="fa fa-angle-down"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="divider-w" />
    <Projects :projects="projects" id="projects" />
  </layout>
</template>

<script>
import FirstScreen from "./Components/FirstScreen.vue";
import Projects from "./Components/Projects.vue";
import Layout from "../Shared/Layout.vue";
import { Head, Link } from "@inertiajs/vue3";

export default {
  name: "Home",
  props: {
    title: String,
    page: Array,
    projects: Array,
    links: Array,
    socials: Array,
  },
  layout: Layout,
  components: {
    FirstScreen,
    Projects,
    Link,
    Head,
  },
  mounted() {
    $(document).trigger("chenge");
  },
  created() {
    this.logCon();
    $(document).trigger("chenge");
  },
  methods: {
    logCon() {
      // console.log(this.page);
    },
  },
};
</script>
