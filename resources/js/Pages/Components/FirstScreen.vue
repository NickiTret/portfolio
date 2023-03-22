<template>
      <section class="bg-dark-30 showcase-page-header module parallax-bg hero" v-if="page.images_src" :data-background="'/storage/' + page.images_src">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">{{ page.header_h1 }}</div>
            <div class="font-alt mb-40 titan-title-size-4">{{ page.description }}</div>
          </div>
        </div>
      </section>
      <section v-else-if="page.image_src" class="bg-dark-30 showcase-page-header module parallax-bg hero" :data-background="'/storage/' + page.image_src">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-40 titan-title-size-4">{{ page.title }}</div>
          </div>
        </div>
      </section>
</template>

<script>
export default {
  name: "FirstScreen",
  props: {
    page: Array
  },
  mounted() {
    this.getBackgroundImage();
  },
  methods: {
    getBackgroundImage() {
        let module = Array.from(document.querySelectorAll('.module'));
        module.forEach( (element) => {
            if (element.getAttribute('data-background')) {
                element.style.backgroundImage = `url('${element.getAttribute('data-background')}')`;
                console.log(element);
            }
        } );
    }
  }
};
</script>
