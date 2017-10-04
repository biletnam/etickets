
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy'
import Datepicker from 'vue-bulma-datepicker'
import Vuetify from 'vuetify'



Vue.use(Vuetify);


Vue.use(Buefy);
var app = new Vue({
	el:'#app',
	data:{
		checked:false
		},
		  components: {
    Datepicker
  }
	
});

$(document).ready(function(){
	$('button.dropdown').hover(function(){
		$(this).toggleClass('is-open')
	});

	$('#timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    defaultTime: '11',
    startTime: '6:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

	

});





