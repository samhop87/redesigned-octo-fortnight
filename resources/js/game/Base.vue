<template>
    <div class="h-screen bg-black text-white font-game-display flex flex-col items-center justify-center">
        <div class="w-full h-1/8 sm:h-1/6 flex flex-col items-center">
            <div class="h-full flex flex-col justify-center content-center container font-white text-center">
                <h1 class="font-game-display text:sm sm:text-xl">- Idiot Survival -</h1>
                <p class="pt-1 font-mobile sm:font-readable">A decision making game</p>
            </div>
        </div>
        <router-view></router-view>
    </div>
</template>

<script>
    import Start from "./components/Start";
    export default {
        components: {
            Start
        },
        data() {
            return {}
        },
        methods: {}
    }
</script>
