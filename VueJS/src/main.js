import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import 'bootstrap/dist/css/bootstrap.min.css'


import HomeComponent from './pages/Home/HomeComponent'
import ListProductsComponent from './pages/ListProducts/ListProductsComponent'
import SearchComponent from './pages/Search/SearchComponent'
import CreateComponent from './pages/Create/CreateComponent'
import EditComponent from './pages/Edit/EditComponent'
import DeleteComponent from './pages/Delete/DeleteComponent'
import ListCitysComponent from './pages/ListCitys/ListCitysComponent'

Vue.config.productionTip = false
Vue.use(VueRouter)

axios.defaults.baseURL = 'http://localhost:8000/api/';

const routes = [
  { path: '/', name: 'home', component: HomeComponent },
  { path: '/listProducts', name:'listProducts', component: ListProductsComponent },
  { path: '/search', name:'search', component: SearchComponent },
  { path: '/create', name:'create', component: CreateComponent },
  { path: '/edit', name:'edit', component: EditComponent },
  { path: '/delete', name:'delete', component: DeleteComponent },
  { path: '/listCitys', name:'listCitys', component: ListCitysComponent }
]

const router = new VueRouter({
  routes
})


new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
