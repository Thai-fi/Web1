import Vue from 'vue'
import Vuelidate from 'vuelidate'
import App from './App.vue'
import router from './router'
import store from './store'
import dateFilter from '@/filters/date.filter.js'
import currencyFilter from './filters/currency.filter'
import messagePlugin from '@/utils/message.plugin.js'
import loader from '@/components/app/Loader'
import './registerServiceWorker'
import 'materialize-css/dist/js/materialize.min.js'

import firebase from 'firebase/app'
import 'firebase/auth'
import 'firebase/database'


Vue.config.productionTip = false

Vue.use(messagePlugin)
Vue.filter('date', dateFilter)
Vue.filter('currency', currencyFilter)
Vue.use(Vuelidate)
Vue.component('Loader',loader)

firebase.initializeApp({
	apiKey: "AIzaSyDyYL26RQ2Mxv53Ps_rS9qqfKUknl9HlGM",
	authDomain: "lr12-vuejs.firebaseapp.com",
	projectId: "lr12-vuejs",
	storageBucket: "lr12-vuejs.appspot.com",
	messagingSenderId: "410161882975",
	appId: "1:410161882975:web:9cce2e705875b3dc66f8ea",
	measurementId: "G-B4W8Z241KN"
})

let app

firebase.auth().onAuthStateChanged(() => {
	if (!app){
		app = new Vue({
			router,
			store,
			render: h => h(App)
		}).$mount('#app')
	}
})


