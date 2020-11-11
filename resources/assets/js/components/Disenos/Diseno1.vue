<template>
    <div class="flex flex-col" :class="flexContainerClass">
        <div class="flex-1 md:text-right md:items-end pt-10">
            <img class="object-cover w-full" :src="urlImagen" alt=""/>
        </div>
        <div class="flex-1 pt-8 pl-8 pb-2 md:pl-4 md:pt-10 lg:pt-24 lg:pl-16">
            <img :src="urlLogo" alt=""/>
            <div :class="textColor" class="font-light text-lg md:text-3xl mt-2">{{proyecto.proyecto}}</div>
            <div :class="textColorDescription" class="md:pr-32 lg:pr-48 text-sm">
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
          index:{
              type:Number,
          }
        },
        data(){
            return {
              flexContainerClass: "",
              textColorDescription: "",
              textColor: "text-title-"+ this.proyecto.slug,
              btnDiseno: "text-color-"+ this.proyecto.slug+" bg-bgbtn-"+ this.proyecto.slug,
              urlLogo: '../'+this.proyecto.logo,
              urlImagen:'../'+this.proyecto.imagen,
            }
        },
        created(){
            this.defineFlexDirection()
        },
        methods:{
            defineFlexDirection(){
                if(this.index % 2 !== 0){
                    this.flexContainerClass= " md:flex-row-reverse bg-color-"+ this.proyecto.slug;
                    this.textColorDescription = "text-gray-300";
                }else{
                   this.flexContainerClass = " md:flex-row bg-color-"+ this.proyecto.slug; 
                   this.textColorDescription = "text-gray-500";
                }
            }
        },
        mounted() {
            console.log("component mounted")
        }
    }
</script>