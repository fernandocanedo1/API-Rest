<template>
    <div>
        <HomeComponent>
            <div slot="slot-pages" class="contents">
               <div id="show-blogs">
                    <form class="form-inline" id="cadastro" @submit.prevent="getUsers">
                            <table>
                                <tr>
                                    <th><label>Informe o ID do produto: </label></th>
                                    <th><input  type="text" placeholder="search" id="idSearch" name="idSearch" v-model="idProduto"></th>
                                    <th><input class="btn btn-primary btn-sm" type="submit" value="Procurar"></th>
                                </tr>
                            </table>
                             
                             <br><br> 
                    </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Estoque</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in produtos" :key="user.id">
                                    <th scope="row">{{user.id}}</th>
                                    <td>{{user.nome}}</td>
                                    <td>{{user.cod_produto}}</td>
                                    <td>{{user.valor}}</td>
                                    <td>{{user.estoque}}</td>
                                </tr>
                            </tbody>
                        </table>
               </div>
            </div>
        </HomeComponent>
    </div>
</template>

<script>
import HomeComponent from '../Home/HomeComponent.vue';
const axios = require('axios');

var search = "/produtos/";
export default{
    name: 'SearchComponent',
    data(){
        return{
            idProduto:0,
            produtos: [],
            search:[]
        }
    },
    mounted(){
        this.getUsers();
    },
    methods:{
        async getUsers(){
                console.log(this.idProduto);
                let response = await axios.get(search+this.idProduto);
                this.produtos = response.data;
        },
        edit(produto){
            this.produto = produto;
        }
    },
    components:{
        HomeComponent
    },
    
}
</script>

