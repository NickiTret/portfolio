<template>
  <Head>
    <title>NickWeb | {{ title }}</title>
  </Head>
  <layout>
    <FirstScreen :page="page" />

    <section class="module">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h2 class="product-title font-alt">Обо мне</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <ul>
              <li>
                Образование средне&nbsp;&mdash; специальное, специальность
                веб-дизайн, проходил курсы повышения квалификации,
                и&nbsp;проходил обучение в&nbsp;Skillbox курс
                &laquo;Frontend-разработчик&raquo;
              </li>
              <li>
                Ответственно подхожу к&nbsp;задачам и&nbsp;их&nbsp;решениям,
                проактивен
              </li>
              <li>
                <a
                  target="_blank"
                  href="https://github.com/NickiTret?tab=repositories"
                >
                  GitHub</a
                >
                здесь примеры моего кода
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <h2 class="product-title font-alt">Stack технологии</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <h6 class="font-alt">
              <span class="icon-tools-2"></span> Html, Smarty
            </h6>
            <h6 class="font-alt">
              <span class="icon-tools-2"></span> Css, Scss, PostCss
            </h6>

            <h6 class="font-alt">
              <span class="icon-tools-2"></span> JavaScript, VueJS, Jquery
            </h6>

            <h6 class="font-alt">
              <span class="icon-tools-2"></span> Laravel, PHP
            </h6>
            <h6 class="font-alt">
              <span class="icon-tools-2"></span> Figma, Photoshop
            </h6>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-sm-6">
            <h2 class="product-title font-alt">Места работы</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <h5 class="font-alt">
              <a target="_blank" href="https://fmedia-group.com/"
                >Fmedia&nbsp;<i class="fa fa-fw">&#xf138;</i></a
              >
            </h5>
            <h6 class="font-alt">Html - Верстальщик</h6>
            <ul>
              <li>
                Верстка сайтов и&nbsp;страниц по&nbsp;макетам Figma/Photoshop
              </li>
              <li>Адаптивная кроссбраузерная семантическая верстка</li>
              <li>Верстка с&nbsp;использованием БЭМ-методологии</li>
              <li>Разработка и&nbsp;поддержка внутренних сервисов</li>
              <li>
                Оптимизация скорости загрузки сайтов в&nbsp;соответствии с
                показателями PageSpeed Insights
              </li>
              <li>
                Интеграция лендингов со&nbsp;сторонними партнерскими сетями
              </li>
              <li>Работа с&nbsp;задачами в&nbsp;Jira/Trello</li>
            </ul>
            <p>
              В&nbsp;работе использовались: HTML, CSS, SСSS, JavaScript, PHP,
              VUE, Gulp, Webpack, Figma, Photoshop, Jira, PageSpeed Insights,
              Яндекс.Метрика, GitHub
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <hr />
            <h5 class="font-alt">
              <a target="_blank" href="https://m18.ru/"
                >M18&nbsp;<i class="fa fa-fw">&#xf138;</i></a
              >
            </h5>
            <h6 class="font-alt">Frontend-разработчик</h6>
            <ul>
              <li>Верстка сайтов и&nbsp;страниц по&nbsp;макетам Figma</li>
              <li>Адаптивная кроссбраузерная семантическая верстка</li>
              <li>Верстка с&nbsp;использованием PostCss</li>
              <li>Разработка и&nbsp;поддержка внутренних сервисов</li>
            </ul>
            <p>
              В&nbsp;работе использовались: Smarty, CSS, POSTSS, JavaScript,
              PHP, Gulp, Webpack, Figma, GitHub
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="font-alt mt-30">
              <a class="btn btn-d btn-round" download="download" href="#"
                ><i class="icon-download"></i>&nbsp;Скачать резюме</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="divider-w" />
  </layout>
</template>

<script>
import Projects from "./Components/Projects.vue";
import Layout from "../Shared/Layout.vue";
import { Head } from "@inertiajs/vue3";
import FirstScreen from "./Components/FirstScreen.vue";

export default {
  name: "About",
  props: {
    title: String,
    page: Array,
  },
  layout: Layout,
  components: {
    Projects,
    Head,
    FirstScreen,
  },
  mounted() {
    this.getBackgroundImage();
  },
  methods: {
    getBackgroundImage() {
      let module = Array.from(document.querySelectorAll(".module"));
      module.forEach((element) => {
        if (element.getAttribute("data-background")) {
          element.style.backgroundImage = `url('${element.getAttribute(
            "data-background"
          )}')`;
          console.log(element);
        }
      });
    },
  },
};
</script>
