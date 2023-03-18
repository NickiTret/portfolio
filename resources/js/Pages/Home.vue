<template>
    <layout>
        <FirstScreen />
        <Projects />
    </layout>
</template>

<script>
import FirstScreen from './Components/FirstScreen.vue';
import Projects from './Components/Projects.vue';
import Layout from '../Shared/Layout.vue';


export default {
    name: 'Home',
    props: {
        title: String,
    },
    layout: Layout,
    components: {
        FirstScreen,
        Projects
    },

}
</script>
