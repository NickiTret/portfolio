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

    <section class="module-medium" id="demos">
    <div class="container">
      <div class="row multi-columns-row">
        <div v-for="item in projects"
          :key="item.id" class="col-md-4 col-sm-6 col-xs-12">
          <Link
            class="content-box"
            :href="item.id">
            <div class="content-box-image">
                <img
                :src="'/storage/' + item.image_src"
                :alt="item.title"
              />
            </div>
            <h3 class="content-box-title font-serif">{{ item.title }}</h3></Link
          >
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
    Link
  },
};
</script>
