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
            <h4 class="font-alt">Напишите мне</h4>
            <br />
            <form id="contactForm" role="form">
              <div class="form-group">
                <label class="sr-only" for="name">Имя Фамилия</label>
                <input
                  class="form-control"
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Имя и Фамилия"
                  required="required"
                  data-validation-required-message="Имя и Фамилия"
                />
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label class="sr-only" for="email">Электронная почта</label>
                <input
                  class="form-control"
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Электронная почта"
                  required="required"
                  data-validation-required-message="Электронная почта"
                />
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label class="sr-only" for="phone">Мобильный телефон</label>
                <input
                  class="form-control"
                  type="tel"
                  id="phone"
                  name="phone"
                  placeholder="Мобильный телефон"
                  required="required"
                  data-validation-required-message="Мобильный телефон"
                />
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control"
                  rows="7"
                  id="message"
                  name="message"
                  placeholder="Напишите какой сайт вы бы хотели, дизайн и функциональность и я обязательно свяжусь с вами."
                  required="required"
                  data-validation-required-message="Сообщение"
                ></textarea>
                <p class="help-block text-danger"></p>
              </div>
              <div class="text-center">
                <button
                  class="btn btn-block btn-round btn-d"
                  id="cfsubmit"
                  type="submit"
                >
                  Отправить
                </button>
              </div>
            </form>
            <div class="ajax-response font-alt" id="contactFormResponse"></div>
          </div>
          <br />
          <div class="col-sm-6">
            <h4 class="font-alt">Режим работы</h4>
            <br />
            <ul class="list-unstyled">
              <li>пн - пт: 8:00 до 19:00</li>
              <li>сб, вс: 10:00 до 14:00</li>
            </ul>
            <hr />
            <div class="mt-xs-60">
              <h3 class="alt-features-title font-alt">Контакты</h3>
              Email: <a href="mailto:tretjakov.nickit@yandex.ru">tretjakov.nickit@yandex.ru</a><br />Phone: <a href="tel:+79218911907">+79218911907</a><br />Telegram: <a href="https://t.me/niktret">niktret</a><br />VK: <a href="https://vk.com/id119029110">Никита Третьяков</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </layout>
</template>

<script>
import Projects from "./Components/Projects.vue";
import Layout from "../Shared/Layout.vue";
import { Head } from "@inertiajs/vue3";
import FirstScreen from "./Components/FirstScreen.vue";

export default {
  name: "Contact",
  props: {
    title: String,
    page: Array,
    create_url: String,
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
