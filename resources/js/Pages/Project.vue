<template>
  <layout>
    <FirstScreen :page="project" />
    <section class="module">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-8 col-lg-8">
            <img :src="'/storage/' + project.image_src" alt="Title of Image" />
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="work-details">
              <h5 class="work-details-title font-alt">{{ project.title }}</h5>
              <p>{{ project.description }}</p>
              <div>{{ project.content }}</div>
              <br />
              <ul>
                <li>
                  <strong>Сайт: </strong
                  ><span class="font-serif">
                    <a :href="project.link" target="_blank">{{
                      project.title
                    }}</a></span
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr class="divider-w" />
    <section class="module">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row multi-columns-row post-columns">
              <div
                class="col-md-6 col-lg-6"
                v-for="project in projects"
                :key="project.id"
              >
                <div class="post">
                  <div class="post-thumbnail">
                    <Link :href="project.id"
                      ><img
                        :src="'/storage/' + project.image_src"
                        :alt="project.title"
                        height="460"
                        width="800"
                    /></Link>
                  </div>
                  <div class="post-header font-alt">
                    <h2 class="post-title">
                      <Link :href="project.id">{{ project.title }}</Link>
                    </h2>
                  </div>
                  <div class="post-more">
                    <a class="more-link" :href="project.id">Подробнее</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </layout>
</template>

<script>
import Layout from "../Shared/Layout.vue";
import FirstScreen from "./Components/FirstScreen.vue";
import { Link } from "@inertiajs/vue3";

export default {
  name: "Project",
  props: {
    title: String,
    project: Array,
    projects: Array,
  },
  layout: Layout,
  components: {
    FirstScreen,
    Link,
  },
};
</script>
