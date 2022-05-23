<template>
  <div class=" w-screen h-screen border-2 border-red-500"
    :style="{
        'background-image': `url(${Image})`,
        'background-size': 'cover',
        'border':' 1px solid #eaeaea',
      }">

  
  <div
    class="
      w-full
      max-w-sm
      mx-auto
      overflow-hidden
      bg-white
      rounded-lg
      shadow-md
      mb-6
     mt-24

    "
    
  >
    <div class="px-6 py-4">
      <h2 class="text-2xl font-bold text-center ">
        Gestion des rendez-vous
      </h2>

      <h3
        class="
          mt-1
          text-xl
          font-medium
          text-center
          
        "
      >
        Welcome Back Admin
      </h3>

      <p class="mt-1 text-center  ">Login</p>

      <form @submit.prevent="login">
        <div class="w-full mt-4">
          <input
            type="text"
            v-model.lazy.trim="email"
            class="
              block
              w-full
              px-4
              py-2
              mt-2
              text-gray-700
              placeholder-gray-500
              bg-white
              border
              rounded-md
              dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400
              focus:border-blue-400
              dark:focus:border-blue-300
              focus:ring-opacity-40
              focus:outline-none
              focus:ring
              focus:ring-blue-300
            "
            placeholder="Email Address"
          />
        </div>

        <div class="w-full mt-4">
          <input
            v-model.lazy.trim="password"
            class="
              block
              w-full
              px-4
              py-2
              mt-2
              text-gray-700
              placeholder-gray-500
              bg-white
              border
              rounded-md
              dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400
              focus:border-blue-400
              dark:focus:border-blue-300
              focus:ring-opacity-40
              focus:outline-none
              focus:ring
              focus:ring-blue-300
            "
            type="password"
            placeholder="Password"
            aria-label="Password"
          />
        </div>

        <div class="flex items-center justify-between mt-4">
          <button
            class="
              px-4
              py-2
              leading-5
              text-white
              transition-colors
              duration-200
              transform
              bg-gray-700
              rounded
              hover:bg-gray-600
              focus:outline-none
            "
            type="submit"
          >
            Login
          </button>
        </div>
      </form>
    </div>
  </div>
  </div>
</template>

<script>
// import { mapActions } from 'vuex'
import sweetalert from "sweetalert";
import { mapGetters } from "vuex";
export default {
  name: "LoginAdmin",
  data() {
    return {
      Image: require("@/assets/background.jpg"),
      email: "",
      password: "",
      curentRoute: "adminhome",
      log: "",
    };
  },
  computed: {},
  methods: {
     getcurenteroute() {
      this.curentRoute = mapGetters["getCurentRouter"];
    },
    async login() {
      var requestOptions = {
        method: "POST",
        body: JSON.stringify({ email: this.email, password: this.password }),
        headers: {
          "Content-Type": "application/json",
        },
      };
      const res = await fetch(
        "http://localhost/gestionRDVS/backendAPI/Admins/login",
        requestOptions
      );
      const data = await res.json();
     if(data.data>0){
         this.$router.push('/adminhome')
         localStorage.setItem('iduser',data.data);
      this.$store.dispatch("insertPost", this.curentRoute);
     }else{
         sweetalert ( "Oops" , "Something went wrong!" , "error" )
     }
    },
  },
  watch: {
    // email(){
    //    this.$store.dispatch("addEmail",this.email)
    // console.log("here")
    // },
    // password(){
    // this.$store.dispatch("addPassword",this.password)
    // },
  },
  created() {
   this.$store.dispatch("insertPost", this.curentRoute);
  },
};
</script>

<style scoped>
</style>