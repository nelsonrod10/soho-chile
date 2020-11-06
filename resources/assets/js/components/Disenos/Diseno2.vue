<template>
    <div>
        <div class="grid grid-cols-1 md:grid-cols-2" :class="backgroundColor">
            <div class="pt-8 ml-8 pb-2 md:ml-16 md:pt-10 lg:pt-16">
                <img :src="urlLogo" alt=""/>
                <div :class="textColor" class="font-light text-lg md:text-3xl mt-2">{{proyecto.proyecto}}</div>
                <div class="text-gray-300 text-sm">
                    {{proyecto.descripcion}}
                </div>
                <div class="flex text-gray-300 text-xs mt-2">
                    <span class="mt-1 mr-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span v-for="tag in proyecto.tags" :key="tag" class="underline mr-2">{{tag}}</span>
                </div>
                <div class="pt-6">
                    <a href="#" :class="btnDiseno" class="px-4 py-2 border border-transparent text-xs leading-6 font-normal rounded-md transition duration-150 ease-in-out">
                        VER DETALLES
                    </a>
                </div>
            </div>
            <div class="pt-10 lg:col-end-4">
                <img v-bind:src="'../img/web-derco.png'" alt=""/>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        components:{
            
        },
        props:{
          proyecto:{
            type:Object,
          },
        },
        data(){
            return {
              backgroundColor: "bg-color-"+ this.proyecto.slug,
              textColor: "text-title-"+ this.proyecto.slug,
              btnDiseno: "text-color-"+ this.proyecto.slug+" bg-bgbtn-"+ this.proyecto.slug,
              urlLogo: '../'+this.proyecto.logo,
              urlImagen:'../'+this.proyecto.imagen,
            }
        },
        created(){
          
        },
        methods:{
            
        },
        mounted() {
            console.log("component mounted")
        }
    }
</script>