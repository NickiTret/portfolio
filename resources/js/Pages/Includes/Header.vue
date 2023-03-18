<template>
  <div class="page-loader">
    <div class="loader">Loading...</div>
  </div>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button
          class="navbar-toggle"
          type="button"
          data-toggle="collapse"
          data-target="#custom-collapse"
        >
          <span class="sr-only">Toggle navigation</span
          ><span class="icon-bar"></span><span class="icon-bar"></span
          ><span class="icon-bar"></span></button
        ><Link class="navbar-brand" href="/">Titan</Link>
      </div>
      <div class="collapse navbar-collapse" id="custom-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <Link href="/">Проекты</Link>
          </li>
          <li>
            <Link href="/about">Обо мне</Link>
          </li>
          <li>
            <Link href="/contact">Контакты</Link>
          </li>
          <!-- <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Features</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="alerts-and-wells.html"><i class="fa fa-bolt"></i> Alerts and Wells</a></li>
                  <li><a href="buttons.html"><i class="fa fa-link fa-sm"></i> Buttons</a></li>
                  <li><a href="tabs_and_accordions.html"><i class="fa fa-tasks"></i> Tabs &amp; Accordions</a></li>
                  <li><a href="content_box.html"><i class="fa fa-list-alt"></i> Contents Box</a></li>
                  <li><a href="forms.html"><i class="fa fa-check-square-o"></i> Forms</a></li>
                  <li><a href="icons.html"><i class="fa fa-star"></i> Icons</a></li>
                  <li><a href="progress-bars.html"><i class="fa fa-server"></i> Progress Bars</a></li>
                  <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                </ul>
              </li> -->
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
  name: "Header",
  components: {
    Link,
  },
};
</script>
