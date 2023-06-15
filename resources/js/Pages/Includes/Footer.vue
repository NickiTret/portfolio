<template>
  <section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <!-- Yandex.RTB R-A-2349465-2
          <div :adsBlock="adsBlock" id="yandex_rtb_R-A-2349465-2"></div> -->
        </div>
      </div>
    </div>
  </section>
  <hr class="divider-d" />
  <footer class="footer bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="copyright font-alt">
            &copy; 2018 - 2023&nbsp;<a href="/">NickWeb</a>, Разработка сайтов
          </p>
        </div>
        <div class="col-sm-6">
          <div v-if="socials" class="footer-social-links">
            <a v-for="social in socials" :key="social.id" :href="social.link">
              <img
                width="15"
                :src="'/storage/' + social.image_src"
                :alt="social.title"
              />
            </a>
            <a href="https://www.liveinternet.ru/click" target="_blank"
              ><img
                id="licntDEA0"
                width="88"
                height="15"
                style="border: 0"
                title="LiveInternet: показано число посетителей за сегодня"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
                alt=""
            /></a>
          </div>
          <div v-else class="footer-social-links">Нет соц сетей</div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
  props: {
    socials: Array,
  },
  methods: {

  }
};
</script>
