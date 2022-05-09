<template>
  <div class="flex">
    <div class="bg-sky-300">
      <div
        class="
          flex flex-col
          w-44
          h-screen
          py-8
          bottom-2
          border-red-600
          sticky
          top-8
          left-0
        "
      >
        <h2
          class="
            text-3xl
            font-semibold
            text-center text-gray-800
            dark:text-white
          "
        >
          RDVs
        </h2>

        <div class="flex flex-col items-center mt-6 -mx-2">
          <img
            class="object-cover w-20 h-20 mx-2 rounded-full"
            src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
            alt="avatar"
          />
          <h4 class="mx-2 mt-2 font-medium hover:underline">Youssef</h4>
          <p class="mx-2 mt-1 text-sm font-medium hover:underline">
            youssef@gmail.com
          </p>
        </div>

        <div class="flex flex-col justify-between flex-1 mt-6">
          <nav>
            <router-link
              to="/adminhome"
              class="flex items-center px-4 py-2 text-gray-700"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                />
              </svg>
              <span class="mx-2 font-medium">Client</span>
            </router-link>
            <router-link
              to="/listtickets"
              class="
                flex
                items-center
                px-4
                py-2
                transition-colors
                duration-200
                transform
              "
            >
              <svg
                class="w-5 h-5"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>

              <span class="mx-2 font-medium">Tickets</span>
            </router-link>
            <router-link
              to="/logout"
              class="
                flex
                items-center
                px-4
                py-2
                transition-colors
                duration-200
                transform
              "
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                />
              </svg>

              <span class="mx-2 font-medium">Logout</span>
            </router-link>
          </nav>
        </div>
      </div>
    </div>
    <div class="flex flex-col mt-12 ml-3 w-10/12">
      <div class="overflow-x-auto sm:-mx-6">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full">
              <thead class="bg-white border-b">
                <tr>
                  <th
                    scope="col"
                    class="
                      text-sm
                      font-medium
                      text-gray-900
                      px-6
                      py-4
                      text-left
                    "
                  >
                    CIN
                  </th>
                  <th
                    scope="col"
                    class="
                      text-sm
                      font-medium
                      text-gray-900
                      px-6
                      py-4
                      text-left
                    "
                  >
                    FullNmae
                  </th>
                  <th
                    scope="col"
                    class="
                      text-sm
                      font-medium
                      text-gray-900
                      px-6
                      py-4
                      text-left
                    "
                  >
                    age
                  </th>

                  <th
                    scope="col"
                    class="
                      text-sm
                      font-medium
                      text-gray-900
                      px-6
                      py-4
                      text-left
                    "
                  >
                    #
                  </th>
                  <th
                    scope="col"
                    class="
                      text-sm
                      font-medium
                      text-gray-900
                      px-6
                      py-4
                      text-left
                    "
                  >
                    #
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr
                  v-for="user in Allusers"
                  :key="user.user_id"
                  class="
                    bg-white
                    border-b
                    transition
                    duration-300
                    ease-in-out
                    hover:bg-gray-100
                  "
                >
                  <td
                    class="
                      px-6
                      py-4
                      whitespace-nowrap
                      text-sm
                      font-medium
                      text-gray-900
                    "
                  >
                    {{ user.Cin }}
                  </td>
                  <td
                    class="
                      text-sm text-gray-900
                      font-light
                      px-6
                      py-4
                      whitespace-nowrap
                    "
                  >
                    {{ user.firstname }}
                  </td>
                  <td
                    class="
                      text-sm text-gray-900
                      font-light
                      px-6
                      py-4
                      whitespace-nowrap
                    "
                  >
                    {{ user.age }}
                  </td>

                  <td
                    class="
                      text-sm text-gray-900
                      font-light
                      px-6
                      py-4
                      whitespace-nowrap
                    "
                  >
                    <svg
                      @click="getuserid(user.reference)"
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                      />
                    </svg>
                  </td>
                  <td
                    class="
                      text-sm text-gray-900
                      font-light
                      px-6
                      py-4
                      whitespace-nowrap
                    "
                  >
                    <svg
                      @click="showDleteUser"
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                      />
                    </svg>
                    <div
                      v-if="deleteUserAlert"
                      class="
                        p-4
                        mb-4
                        absolute
                        left-1/2
                        -translate-x-1/2
                        top-1/3
                        w-1/2
                        bg-red-100
                        rounded-lg
                      "
                    >
                      <div class="flex items-center">
                        <svg
                          class="mr-2 w-5 h-5 text-red-700 dark:text-red-800"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                        <h3
                          class="
                            text-lg
                            font-medium
                            text-red-700
                            dark:text-red-800
                          "
                        >
                          Are you sure you want delete
                        </h3>
                      </div>
                      <div class="flex">
                        <button
                         @click="deleteClient(user.reference)"
                          type="button"
                          class="
                            text-white
                            bg-red-700
                            hover:bg-red-800
                            focus:ring-4 focus:outline-none focus:ring-red-300
                            font-medium
                            rounded-lg
                            text-xs
                            px-3
                            py-1.5
                            mr-2
                            text-center
                            inline-flex
                            items-center
                            dark:bg-red-800 dark:hover:bg-red-900
                          "
                        >
                          <!-- <svg @click="deleteClient(user.reference)" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg> -->
                          <svg
                           
                            xmlns="http://www.w3.org/2000/svg"
                            class="-ml-0.5 mr-2 h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                            />
                          </svg>
                          Delete User
                        </button>
                        <button
                          @click="hideDleteUser()"
                          type="button"
                          class="
                            text-red-700
                            bg-transparent
                            border border-red-700
                            hover:bg-red-800 hover:text-sky-600
                            focus:ring-4 focus:outline-none focus:ring-red-300
                            font-medium
                            rounded-lg
                            text-xs
                            px-3
                            py-1.5
                            text-center
                            dark:border-red-800 dark:text-red-800
                          "
                          data-dismiss-target="#alert-additional-content-2"
                          aria-label="Close"
                        >
                          Cancel
                        </button>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=" ">
    <div
      v-if="showupdate"
      class="
        flex
        justify-center
        items-center
        fixed
        top-0
        left-0
        right-0
        bottom-0
        w-screen
        h-screen
        bg-gray-100
        
       
      "
    >
          <div @click="hideUpdate" class=" fixed top-3 right-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
          </div>
      <section
        class="
          max-w-4xl
          p-6
          mx-auto
          bg-white
          rounded-md
          shadow-md
         opacity-100
          relative
        "
      >
         
        <h2 class="text-lg font-semibold capitalize">Account settings</h2>
        <form @submit.prevent="updateClient(clientinfo.user_id)">
          <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
              <label class="" for="username">Fullname</label>

              <input
                v-model="clientinfo.Fullname"
                id="username"
                type="text"
                class="
                  block
                  w-full
                  px-4
                  py-2
                  mt-2
                  bg-white
                  border border-gray-200
                  rounded-md
                  focus:border-blue-400
                  focus:ring-blue-300
                  focus:ring-opacity-40
                  focus:outline-none
                  focus:ring
                "
              />
            </div>

            <div>
              <label class="" for="CIN">CIN</label>
              <input
                v-model="clientinfo.CIN"
                id="CIN"
                type="text"
                class="
                  block
                  w-full
                  px-4
                  py-2
                  mt-2
                  bg-white
                  border border-gray-200
                  rounded-md
                  focus:border-blue-400
                  focus:ring-blue-300
                  focus:ring-opacity-40
                  focus:outline-none
                  focus:ring
                "
              />
            </div>

            <div>
              <label class="" for="age">age</label>
              <input
                v-model="clientinfo.age"
                id="age"
                type="number"
                class="
                  block
                  w-full
                  px-4
                  py-2
                  mt-2
                  bg-white
                  border border-gray-200
                  rounded-md
                  focus:border-blue-400
                  focus:ring-blue-300
                  focus:ring-opacity-40
                  focus:outline-none
                  focus:ring
                "
              />
            </div>
          </div>
          <div class="flex justify-end mt-6">
            <button
              class="
                px-6
                py-2
                leading-5
                text-white
                transition-colors
                duration-200
                transform
                bg-gray-700
                rounded-md
                hover:bg-gray-600
                focus:outline-none focus:bg-gray-600
              "
            >
              Save
            </button>
          </div>
        </form>
      </section>
    </div>
  </div>
</template>

<script>
// import BodyAdmin from '@/components/admin/BodyAdmin.vue'
import { mapGetters } from "vuex";
export default {
  name: "AdminHome",
  components: {
    // BodyAdmin
  },
  data() {
    return {
      curentRoute: "adminhome",
      user_id: "",
      showupdate: false,
      deleteUserAlert: false,
      clientinfo: {
        Fullname: "",
        CIN: "",
        age: "",
        user_id: "",
      },
    };
  },
  methods: {
    getcurenteroute() {
      this.curentRoute = mapGetters["getCurentRouter"];
    },
    deleteClient(userid) {
      console.log('id user'+userid);
      var requestOptions = {
        method: "POST",
        redirect: "follow",
      };
      fetch(
        "http://localhost/gestionRDVS/backendAPI/clients/deleteClient/" + userid,
        requestOptions
      )
        .then((response) => response.json())
        .then((result) => {
          this.$store.dispatch("getAllUser");
          this.deleteUserAlert = false;
        })
        .catch((error) => console.log("error", error));
    },
    showDleteUser() {
      this.deleteUserAlert = true;
    },
    hideDleteUser() {
      this.deleteUserAlert = false;
    },
    getuserid(id) {
      this.getClient(id);
      this.showupdate = true;
    },
    async getClient(id) {
      var requestOptions = {
        method: "GET",
        redirect: "follow",
      };
      const res = await fetch(
        "http://localhost/gestionRDVS/backendAPI/Clients/getClient/" + id,
        requestOptions
      );
      const data = await res.json();
      this.clientinfo.user_id = data.data.reference;
      this.clientinfo.Fullname = data.data.firstname;
      this.clientinfo.CIN = data.data.Cin;
      this.clientinfo.age = data.data.age;
    },
    updateClient(id) {
      console.log(id);
      var myHeaders = new Headers();
      myHeaders.append("Content-Type", "application/json");

      var raw = JSON.stringify(this.clientinfo);

      var requestOptions = {
        method: "POST",
        // headers: myHeaders,
        body: raw,
        redirect: "follow",
      };

      fetch("http://localhost/gestionRDVS/backendAPI/Clients/updateClient/" + id, requestOptions)
        .then((response) => response.json())
        .then((result) => {
          console.log(result);
          this.$store.dispatch("getAllUser");
          this.showupdate = false;
        })
        .catch((error) => console.log("error", error));
    },
    hideUpdate() {
      this.showupdate = false;
    },
    logout() {
      localStorage.clear();
      this.$router.push("/LoginAdmin");
    },
  },
  computed: {
    ...mapGetters(["Allusers"]),
  },
  created() {
    this.$store.dispatch("getAllUser");
    this.$store.dispatch("insertPost", this.curentRoute);
  },
};
</script>

<style scoped>
</style>