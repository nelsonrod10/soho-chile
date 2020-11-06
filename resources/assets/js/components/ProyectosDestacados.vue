<template>
    <div>
        <div v-for="(proyecto, index) in proyectos" :key="index">
            <diseno-2 v-if="index % 2 !== 0"
                :proyecto="proyecto"    
            >
            </diseno-2>
            <diseno-1 v-else
                :proyecto="proyecto"    
            >
            </diseno-1>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import Diseno1 from '@/js/components/Disenos/Diseno1.vue';
    import Diseno2 from '@/js/components/Disenos/Diseno2.vue';

    export default {
        components:{
            Diseno1   : Diseno1,
            Diseno2   : Diseno2
        },
        props:{
          /*empresa:{
            type:Object,
          },*/
        },
        data(){
            return {
              proyectos:[],
            }
        },
        created(){
          this.getProyectosDestacados();      
        },
        methods:{
            getProyectosDestacados() {
                axios.get('proyectos', {
                  params: {
                    //
                  },
                }).then(response => {
                    
                    //this.proyectos=this.proyectos.concat(response.data);
                    this.proyectos=response.data;                    
                    console.log(this.proyectos);
                })    
                .catch(error => {
                    console.log(error)
                })
            },

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
