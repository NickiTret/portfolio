<template>
  <section class="module-medium" id="demos">
    <div class="container">
      <div class="row multi-columns-row">
        <div v-for="project in projects"
          :key="project.id" class="col-md-4 col-sm-6 col-xs-12">
          <Link
            class="content-box"
            :href="'projects/' + project.id">
            <div class="content-box-image">
                <img
                :src="'/storage/' + project.image_src"
                :alt="project.title"
              />
            </div>
            <h3 class="content-box-title font-serif">{{ project.title }}</h3></Link
          >
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
  props: {
    projects: Array,
  },
  components: {
    Link,
  },
};
</script>
