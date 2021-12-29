<template>
    <div>
        <HomeComponent>
            <div slot="slot-pages" class="contents">
                    <p><strong>Lista de Produtos</strong></p>
                    <table class="table">
                        <caption>Lista de produtos</caption>
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
        </HomeComponent>
    </div>
</template>

<script>
import HomeComponent from '../Home/HomeComponent.vue'
const axios = require('axios');

export default{
    name: 'ListProductsComponent',
    data(){
        return{
            produtos: []
        }
    },
    mounted(){
        this.getUsers();
    },
    methods:{
        async getUsers(){
                let response = await axios.get('/produtos');
                this.produtos = response.data.produtos;
        }
    },
    components:{
        HomeComponent,
    }
}
</script>