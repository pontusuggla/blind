import Vue from 'vue'
import Router from 'vue-router'
import Home from './components/Home.vue'
import Wordtest from './components/Wordtest.vue'
import Wordlist from './components/Wordlist.vue'
import Threestyle from './components/Threestyle.vue'
import Stats from './components/Stats.vue'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/wordtest',
            name: 'Word test',
            component: Wordtest
        },
        {
            path: '/wordlist',
            name: 'Word list',
            component: Wordlist
        },
        {
            path: '/3style',
            name: '3 style',
            component: Threestyle
        },
        {
            path: '/stats',
            name: 'Statistics',
            component: Stats
        }
    ],
    mode: 'history'
})