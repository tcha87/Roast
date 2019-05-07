require('es6-promise').polyfill();


import Vue from 'vue'
import Vuex from 'vuex'
import { users } from './modules/users.js';
Vue.use( Vuex )

import { cafes } from './modules/cafes.js'

export default new Vuex.Store({
    modules: {
      cafes,
      users
    }
});
