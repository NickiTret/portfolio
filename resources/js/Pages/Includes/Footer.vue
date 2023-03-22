<template>
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
              <img width="15" :src="'/storage/' + social.image_src" :alt="social.title" />
            </a>
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
};
</script>
