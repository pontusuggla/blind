<template>
    <v-app>
        <v-navigation-drawer temporary fixed v-model="sideNav">
            <v-list>
                <v-list-tile
                        v-for="item in menuItems"
                        :key="item.title"
                        router
                        :to="item.link">
                    <v-list-tile-action>
                        <v-icon>{{ item.icon }}</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>{{ item.title }}</v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>


        <v-toolbar dark class="primary mb-4">
            <v-toolbar-side-icon @click.native.stop="sideNav = !sideNav" class="hidden-sm-and-up"></v-toolbar-side-icon>
            <v-toolbar-title>
                <router-link to="/" tag="span" style="cursor: pointer">Blind</router-link>
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-xs-only">
                <v-btn flat v-for="item in menuItems" :key="item.title" router :to="item.link">
                    <v-icon :left="$vuetify.breakpoint.mdAndUp">{{ item.icon }}</v-icon>
                    <span class="hidden-sm-and-down">{{ item.title }}</span>
                </v-btn>
            </v-toolbar-items>
        </v-toolbar>
        <main>
            <router-view></router-view>
        </main>
    </v-app>
</template>

<script>
    export default {
        data () {
            return {
                sideNav: false,
                menuItems: [
                    {title: 'Hem', icon: 'home', link: '/'},
                    {title: 'Ordtest', icon: 'create', link: '/wordtest'},
                    {title: 'Ordlista', icon: 'list', link: '/wordlist'},
                    {title: '3-style', icon: 'apps', link: '/3style'},
                    {title: 'Statistik', icon: 'bar_chart', link: '/stats'},
                ]
            }
        }
    }
</script>