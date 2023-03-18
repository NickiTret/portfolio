<template>
      <section class="bg-dark-30 showcase-page-header module parallax-bg" data-background="assets/images/showcase_bg.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">Powerful. Multipurpose.</div>
            <div class="font-alt mb-40 titan-title-size-4">100+ Layouts</div><a class="section-scroll btn btn-border-w btn-round" href="#demos">See Demos</a>
          </div>
        </div>
      </section>
</template>

<script>
export default {
  name: "FirstScreen",
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
