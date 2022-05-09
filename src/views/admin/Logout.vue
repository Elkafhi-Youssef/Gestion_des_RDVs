<template>
    <div>

    </div>
</template>

<script>
    export default {
        name:'Logout',
        data(){
            return{
                curentRouter:'user',
            }
        },
        methods:{
           logout(){
                    localStorage.removeItem('iduser');
                    this.$router.push('/LoginAdmin')
                    this.$store.dispatch("insertPost", 'user');

                  }
        },
        created(){
            this.logout()
        },
    }
</script>

<style scoped>

</style>