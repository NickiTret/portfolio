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
            <ul>
              <li>Третьяков Никита Вадимович</li>
              <li>Возраст: 30 лет</li>
              <li>Санкт-Петербург</li>
              <li>
                Образование средне&nbsp;&mdash; специальное, колледж Дизайна при
                КБГУ им. Бербекова, по направлению &laquo;Графический дизайн,
                веб-дизайн&raquo; 2012 г.
              </li>
              <li>
                Дополнительное образование, частное образовательное учереждение
                &laquo;Международная школа дизайна и информационных
                технологий&raquo;, по курсу &laquo;Программирование и дизайн Web
                - сайтов&raquo; 2013 г.
              </li>
              <li>
                Онлайн платформа Skillbox курс
                &laquo;Frontend-разработчик&raquo; 2021 г.
              </li>
              <li>
                Выполняю работы по
                <ul>
                  <li>верстки сайтов по БЭМ-методологии в том числе</li>
                  <li>
                    оптимизации скорости загрузки сайтов (html, js, css,
                    изображения)
                  </li>
                  <li>выгрузки сайта на хостинг</li>
                  <li>умею разбираться с чужим кодом</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="col-sm-6">
            <img width="400" src="/assets/image/photo.jpg" alt="Photo" />
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
            <h6>
              <a
                target="_blank"
                href="https://github.com/NickiTret?tab=repositories"
              >
                GitHub</a
              >
              здесь примеры моего кода
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
              <li>
                Верстка с&nbsp;использованием Smarty, PHP, JavaScript, PostCss
              </li>
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
