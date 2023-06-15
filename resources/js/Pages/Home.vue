<template>
  <Head>
    <title>NickWeb - Создание и поддержка сайтов СПб | {{ title }}</title>
  </Head>
  <layout :links="links" :socials="socials">
    <FirstScreen :page="page" />
    <section class="module" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h1 class="module-title font-alt">
              Разработка и&nbsp;поддержка сайтов
            </h1>
            <ul class="module-list">
              <li class="module-list__item">
                <h3 class="module-list__title">Landing page</h3>
                <p class="module-list__title">
                  Разработаю информативный Landing page под Ваши услуги, товары,
                  портфолио. Готовый шаблон или эксклюзивный дизайн
                </p>
              </li>
              <li class="module-list__item">
                <h3 class="module-list__title">Сайт визитка</h3>
                <p class="module-list__title">
                  Разработаю информативный сайт-визитку в несколько страниц.
                  Готовый шаблон или эксклюзивный дизайн
                </p>
              </li>
              <li class="module-list__item">
                <h3 class="module-list__title">
                  Информационный или статейный сайт
                </h3>
                <p class="module-list__title">
                  Разработаю статейный сайт под любую тематику
                </p>
              </li>
              <li class="module-list__item">
                <h3 class="module-list__title">Поддержка сайта</h3>
                <p class="module-list__title">
                  Создание нового функционала на сайте, вёрстка отдельных блоков
                  по вашему макету или без с внедрением на сайт, адаптирование
                  сайта под разные устройства и разные браузеры. Исправление
                  ошибок, доработка существующего функционала, проверка
                  работоспособности
                </p>
              </li>
              <li class="module-list__item">
                <h3 class="module-list__title">SEO</h3>
                <p class="module-list__title">
                  Подготовлю сайт к SEO, валидация кода, мета теги, сжатие
                  контента для лучшей скорости загрузки страниц и индексирования
                  сайта в поисковых системах
                </p>
              </li>
              <li class="module-list__item">
                <h3 class="module-list__title">Использую технологии</h3>
                <p class="module-list__title">
                  Работаю с VueJs, Laravel, PHP, JavaScript, HTML, CSS,
                  WordPress
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <h3 class="module-title font-alt">Мои кейсы</h3>
    <hr class="divider-w" />

    <Projects :projects="projects" id="projects" />
    <div class="module-subtitle font-serif large-text">
     Вы можете <a :href="route('contact') + '#form'">оставить заявку</a> или связаться со мной в <a target="_blank" style="text-decoration: underline;" href="https://vk.com/id119029110">VK</a>, <a target="_blank" style="text-decoration: underline;" href="https://t.me/niktret">Телеграме</a>, <a target="_blank" style="text-decoration: underline;" href="https://api.whatsapp.com/send/?phone=79218911907">WhatsApp</a>
    </div>
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
