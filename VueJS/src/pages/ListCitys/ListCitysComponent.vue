<template>
    <HomeComponent>
        <div slot="slot-pages" class="contents">
        </div>
    </HomeComponent>
</template>

<script>
import HomeComponent from '../Home/HomeComponent.vue'
export default{
    name:'ListCitysComponent',
    
components:{
    HomeComponent,   
}

}
</script>