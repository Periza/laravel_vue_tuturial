import { createStore } from 'vuex';

const store = createStore( {
    state: {
        user: {
            data: {
                name: 'Zura'
            }, 
            token: null
        }
    },
    actions: {},
    mutations: {},
    getters: {},
    modules: {}
});

export default store;