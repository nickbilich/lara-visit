require('../bootstrap.js');

window.onload = function () {
    window.Vue = require('vue');
    Vue.component('test', require('../components/Test.vue').default);

    var main = new Vue({
        el: '#main',
    });
}