
<template>
  <nav v-if="name == 'user'">
    <HelloWorld />
  </nav>
  <router-view></router-view>
  <footer
    v-if="name == 'user'"
    class="text-center text-white fixed left-0 right-0 bottom-0 bg-gray-800"
    style="background-color: #f1f1f1"
  >
   
    <div
      class="text-center text-dark p-3"
      style="background-color: rgba(0, 0, 0, 0.2)"
    >
      © 2020 sajo:
      <a class="text-dark" href="https://github.com/Elkafhi-Youssef"
        >Elkafhi-Youssef</a
      >
    </div>
    <!-- Copyright -->
  </footer>
</template>
<script>
// @ is an alias to /src
import HelloWorld from "@/components/HelloWorld.vue";

export default {
  name: "HomeView",
  components: {
    HelloWorld,
  },
  data() {
    return {
      curentRouter: "admin",
    };
  },
  methods: {
    // changename(){
    //   this.$store.dispatch('insertPost', this.curentRoute)
    // },
  },
  computed: {
    name() {
      return this.$store.state.curentRouter;
    },
    // changename(){
    //   this.$store.dispatch('insertPost', this.curentRoute)
    // }
  },
  created() {
    this.curentRoute = this.$store.state.curentRouter;
  },
};
</script>

<style>
/* footer{
  position:fixed;
  bottom: 0;
  left: 0;
  right: 0;
} */
</style>
