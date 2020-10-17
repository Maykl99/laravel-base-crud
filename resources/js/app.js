require('./bootstrap');

"use strict";

var app= new Vue({
  el: '#app',
  data: {
      message: 'Inserisci un nuovo elemento Studente'
  }
})

var app1= new Vue({
  el: '#app-1',
  data: {
      message: 'Non lasciare questo campo vuoto!'
  }
})
