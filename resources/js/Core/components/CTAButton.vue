<template>
    <div>
        <a :href="button_link" target="_blank">
            <img class="w-11 cursor-pointer hover rounded-xl"
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
            image_src: 'images/iconmonstr-github-3.svg',
            button_link: 'https://github.com/samhop87'
        }
    }
}
</script>

<style scoped>
.rotated {
    transform: rotate(90deg);
}

.hover:hover {
    filter: invert(37%) sepia(19%) saturate(1108%) hue-rotate(222deg) brightness(93%) contrast(95%);
}

.position {
    margin: -38px 44px 0 0;
}
</style>
