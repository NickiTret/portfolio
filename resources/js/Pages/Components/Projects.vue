<template>
  <section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row multi-columns-row post-columns">
            <div class="col-md-6 col-lg-6" v-for="project in projects" :key="project.id">
              <div class="post" >
                <div class="post-thumbnail">
                  <Link :href="'projects/' + project.id"
                    ><img
                      :src="'/storage/' + project.image_src"
                      :alt="project.title" height="460" width="800"
                  /></Link>
                </div>
                <div class="post-header font-alt">
                  <h2 class="post-title">
                    <Link :href="'projects/' + project.id">{{ project.title }}</Link>
                  </h2>
                </div>
                <div class="post-more">
                  <a class="more-link" :href="'projects/' + project.id">Подробнее</a>
                </div>
              </div>
            </div>
          </div>
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
