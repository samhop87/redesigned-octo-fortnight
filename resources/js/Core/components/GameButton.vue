<template>
    <div>
        <a :href="button_link" target="_blank">
            <img class="w-11 cursor-pointer hover rounded-xl p-2 border-black border border-4 bg-black"
                 :class="transBlock ? 'rotated position' : ''"
                 :src="image_src"
                 alt="github">
        </a>
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
            image_src: 'images/game/cloudwriter-logos-svg-cropped.svg',
            button_link: 'https://cloudwriter.technicalbeatnik.co.uk/'
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
