<template>
    <div>
        <HomeComponent>
            <div slot="slot-pages" class="contents">
                <div class="input-container">
                    <form id="cadastro" @submit.prevent="editProtuct">  

                        <table>
                            <tr>
                                <label>Nome&nbsp;&nbsp;&nbsp;:</label>
                                <th><input type="text" id="nome" name="nome" v-model="produto.nome"></th>
                                <label>&nbsp;&nbsp;&nbsp;Código&nbsp;&nbsp;&nbsp;:</label>
                                <th><input type="text" id="cod_produto" name="cod_produto" v-model="produto.cod_produto"></th>
                                <label ><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> Valor&nbsp;:</label>
                                <th><input type="text" id="valor" name="valor" v-model="produto.valor" ></th>
                            </tr>
                            <tr>
                                <label>Estoque:</label>
                                <th><input type="text" id="estoque" name="estoque" v-model="produto.estoque" ></th>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"  value="Submeter"></th>
                            </tr>
                        </table>
                    <br>
                    </form>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Código</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Estoque</th>
                            <th scope="col">Cidade</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in produtos" :key="user.id">
                            <th scope="row">{{user.id}}</th>
                            <td>{{user.nome}}</td>
                            <td>{{user.cod_produto}}</td>
                            <td>{{user.valor}}</td>
                            <td>{{user.estoque}}</td>
                            <td>ORIZONA</td>
                            <td><input type="submit" value="Editar" @click="edit(user)"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </HomeComponent>
    </div>
</template>

<script>
import HomeComponent from '../Home/HomeComponent.vue'
const axios = require('axios');
export default{
    name : 'EditComponent',
     data(){
        return{
            produto:{
                nome:'',
                cod_produto:'',
                valor:'',
                estoque:''
            },
            produtos: []
        }
    },
    mounted(){
        this.getUsers();
    },
    components:{
        HomeComponent,
    },
    methods:{
        async getUsers(){
            console.log(this.idProduto);
            let response = await axios.get('/produtos');
            this.produtos = response.data.produtos;
        },
        async edit(produto){
            this.produto=produto;
        },
        async editProtuct(){
            console.log("testeeeeeee");
            await axios.put('/produtos/update/'+this.produto.id,this.produto);
        },
    },
}

</script>