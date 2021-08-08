<template>
    <div>
        <img @click="warning" class="rotated rounded-xl hover w-11 cursor-pointer position" :src="image_src"
             alt="github">
    </div>
</template>

<script>
export default {
    data() {
        return {
            image_src: 'images/game/skull.jpg',
            counter: 0,
            message: 'This will be a link to Idiot Survival, a game set in an apocalyptic wasteland. But I haven\'t' +
                ' moved it over yet. The repo for the old version can be found on github.'
        }
    },
    methods: {
        warning() {
            this.fireMessage()
            this.counter++
        },
        fireMessage() {
            alert(this.message)
        }
    }
}
</script>

<style scoped>
.rotated {
    transform: rotate(90deg);
}

.hover:hover {
    filter: invert(79%) sepia(11%) saturate(2374%) hue-rotate(52deg) brightness(87%) contrast(87%);
}

.position {
    margin: -6px 44px -0 43px;
}
</style>
