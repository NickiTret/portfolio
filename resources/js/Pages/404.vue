<template>
      <section class="home-section home-parallax home-fade home-full-height bg-dark bg-dark-30" id="home" data-background="assets/images/section-4.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-4">Ошибка 404</div>
            <div class="font-alt">Страницы не существует или удалена.
            </div>
            <div class="font-alt mt-30"><Link class="btn btn-border-w btn-round" :href="route(index.html)">Вернуться на главную</Link></div>
          </div>
        </div>
      </section>
</template>
<script>

import Projects from './Components/Projects.vue';
import Layout from '../Shared/Layout.vue';
import { Link } from '@inertiajs/vue3';

export default {
    name: 'About',
    props: {
        title: String,
    },
    layout: Layout,
    components: {
        Projects,
        Link
    },
}
</script>
