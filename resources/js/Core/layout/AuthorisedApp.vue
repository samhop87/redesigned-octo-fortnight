<template>
        <div>
            <app-header @toggle="toggleSidebar"/>
            <div class="flex flex-row min-h-screen">
                <transition name="slide">
                    <sidebar v-if="toggle"/>
                </transition>
                <sidebar class="hidden md:flex"></sidebar>
                <div class="w-full h-full p-6">
                    <main>
                        <router-view :user="user"></router-view>
                    </main>
                </div>
            </div>
        </div>
</template>

<script>
import AppHeader from "../components/Header"
import Sidebar from "../components/Sidebar";

export default {
    components: {
        AppHeader,
        Sidebar
    },
    props: {
        route: {
            type: String,
            required: true
        },
        user: {
            required: true
        }
    },
    data() {
        return {
            toggle: false
        }
    },
    methods: {
        logout() {
            axios.post(this.route).then(() => {
                location.href = '/'
            });
        },
        toggleSidebar() {
            this.toggle = !this.toggle
        }
    },
}
</script>
