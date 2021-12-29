<template>
 
    <div>
    <HomeComponent>
       <div slot="slot-pages" class="contents">
            <div class="form-space">
                <form id="cadastro" @submit.prevent="createProduct">  
                    <h2>Cadastro de Produto:</h2>
                    <div class="input-container">
                        <label>Nome do Produto</label>
                            <input type="text" id="nome" name="nome" v-model="produto.nome">
                    </div>
                        <label>Código do Produto</label>
                    <div class="input-container">
                            <input type="text" id="cod_produto" name="cod_produto" v-model="produto.cod_produto">
                    </div>
                        <label>Valor do Produto</label>
                    <div class="input-container">
                            <input type="text" id="valor" name="valor" v-model="produto.valor" >
                    </div>
                        <label>Estoque do Produto</label>
                    <div class="input-container">
                            <input type="text" id="estoque" name="estoque" v-model="produto.estoque" >
                    </div>

                    <br><input type="submit" class="submit-btn" value="Cadastrar">
                </form>
            </div>
       </div>
    </HomeComponent>
    </div>
</template>

<script>
import HomeComponent from '../Home/HomeComponent.vue';
const axios = require('axios');
export default{
    name: 'CreateComponent',
    data(){
        return{
            produto:{
                nome:'',
                cod_produto:'',
                valor:'',
                estoque:''
            },
            produtos:[]
        }
    },
    components:{
        HomeComponent,
    },
    methods:{
        async createProduct(){
            console.log(this.cod_produto);
            alert(this.produto.nome);
            await axios.post('/produtos',this.produto);
        }
    }
}
</script>