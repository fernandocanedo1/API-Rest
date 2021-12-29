<template>
    <div>
        <HomeComponent>
            <div slot="slot-pages" class="contents">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Código</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Estoque</th>
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
                            <td>
                                <form id="cadastro" @submit.prevent="editProtuct(user.id)">
                                    <input type="submit" class="submit-btn" value="Deletar">
                                </form>  
                            </td>
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
        async editProtuct(id){
            await axios.delete('/produtos/delete/'+id,this.produto);
        },
    },
}
</script>