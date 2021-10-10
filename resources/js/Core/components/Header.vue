<template>
    <div class="w-full bg-white flex flex-row justify-between items-center md:shadow-xl border-r border-gray-300">
        <div class="w-1/3 flex flex-row items-center p-4">
            <router-link :to="{ name: 'dashboard.index' }" class="flex flex-row items-center">
                <img src="images/favicon-32x32.png" class="w-10 flex-none">
                <strong class="capitalize ml-1 flex-1 font-display">Technical Beatnik</strong>
            </router-link>
        </div>
        <div @click="toggleSidebar" class="md:hidden p-4">
            <i class="fas fa-bars"></i>
        </div>
        <div @click="logout" class="p-2 mr-1 text-gray-500 text-sm rounded-sm cursor-pointer hover:text-gray-400">
            Log out
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        toggleSidebar() {
            this.$emit('toggle')
        },
        logout() {
            axios.post('/logout')
                .catch(error => {
                    window.location.href = '/login';
                });
        }
    }
}
</script>
