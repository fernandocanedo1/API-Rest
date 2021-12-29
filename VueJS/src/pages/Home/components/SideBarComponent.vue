<template>
<div>
    <header> Menu</header>
        <a href="" @click.prevent="list">
            <span>Listar Produtos </span>
        </a>
        <a href="" @click.prevent="search">
            <span>Buscar Produto</span>
        </a>
        <a href="" @click.prevent="create">
            <span>Criar Produto</span>
        </a>
        <a href="" @click.prevent="edit">
            <span>Editar Produto</span>
        </a>
        <a href="" @click.prevent="deletes">
            <span>Deletar Produto</span>
        </a>
        <a href="" @click.prevent="citys">
            <span>Listar Cidades</span>
        </a>
</div>
</template>

<script>
export default{
    name: 'SideBarComponent',
    methods: {
        list(){
            this.$router.push({name:'listProducts'})
        },
        search(){
            this.$router.push({name:'search'})
        },
        create(){
            this.$router.push({name:'create'})
        },
        edit(){
            this.$router.push({name:'edit'})
        },
        deletes(){
            this.$router.push({name:'delete'})
        },
        citys(){
            this.$router.push({name:'listCitys'})
        }
    }
}
</script>

<style scoped>

.sidebar-new header{
    font-size:30px;
    color: white;
    line-height: 70px;
    padding-left: 4%;
    background: #1e1e1e;
    user-select: none;
    font-family: Arial, Helvetica, sans-serif;
}
.sidebar-new a{
    padding-left: 3%;
    display:block;
    height:65px;
    width:100%;
    color:white;
    text-decoration: none;
    line-height:60px;
    box-sizing:border-box;
    border-bottom: 1px solid black;
    border-top: 1px solid rgba(255,255,255,.1);
    border-left: 5px solid transparent;
    font-family:sans-serif;
    border:10px;
}
a.active, a:hover{
    border-left: 5px solid #593632;
    color:#b93632;
    height:75px;
    line-height: 70px;
    font-size: 20px;
    font-weight: bold;
}
.sidebar-new a span{
    letter-spacing: 3px;
    padding: 10%;
}
</style>
