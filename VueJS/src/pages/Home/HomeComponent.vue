<template>
      <div class="main">
        <div class="sidebar-new">
           <SideBarComponent />
        </div>

        <div class="content">
            <ContentComponent />
        <div class="middle">
            <slot name="slot-pages"></slot>
        </div>
        </div>
  </div>
  
</template>

<script>
import SideBarComponent from './components/SideBarComponent.vue'
import ContentComponent from './components/ContentComponent.vue'
export default{
    name: 'HomeComponent',
    components: {
        SideBarComponent,
        ContentComponent
    }
}
</script>

<style src="./home.css" scoped>

/*
h1{
    color:red;
}
p{
    color:yellow;
}
*/
</style>