<template>
    <div>
        <img @click="warning"
             class="w-11 cursor-pointer hover rounded-xl"
             :class="transBlock ? 'rotated position' : ''"
             :src="image_src"
             alt="game button">
    </div>
</template>
<script>
export default {
    props: {
        transBlock: {
            type: Boolean
        }
    },
    data() {
        return {
            image_src: 'images/game/skull.jpg',
            counter: 0,
            message: 'This will be a link to Idiot Survival, a game set in an apocalyptic wasteland. But I haven\'t' +
                ' moved over the new game yet. The repo for the old version is on github, and you can check it out in its current' +
                'form at https://idiot-survival.herokuapp.com/\n'
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
