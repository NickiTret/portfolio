<template>
  <section class="module">
    <div class="container">
        <h2 class="work-details-title font-alt">Проекты</h2>
      <ul
        class="works-grid works-grid-masonry works-hover-w works-grid-3"
        id="works-grid"
      >
        <li
          v-for="project in projects"
          :key="project.id"
          class="work-item illustration webdesign"
        >
          <Link :href="'projects/' + project.id">
            <div class="work-image">
              <img
                :src="'/storage/' + project.image_src"
                :alt="project.title"
              />
            </div>
            <div class="work-caption font-alt">
              <h3 class="work-title">{{ project.title }}</h3>
              <div class="work-descr">{{ project.description }}</div>
            </div></Link
          >
        </li>
      </ul>
    </div>
  </section>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
  props: {
    projects: Array,
  },
  components: {
    Link
  }
};
</script>
