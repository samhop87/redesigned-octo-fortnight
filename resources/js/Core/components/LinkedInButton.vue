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
            image_src: 'images/iconmonstr-linkedin-3.svg',
            button_link: 'https://www.linkedin.com/in/sam-hopkinson-38a5a052/'
        }
    }
}
</script>

<style scoped>
.rotated {
    transform: rotate(90deg);
}

.hover:hover {
    filter: invert(24%) sepia(76%) saturate(2149%) hue-rotate(181deg) brightness(101%) contrast(101%);
}

.position {
    margin: -86px 44px 0 317px;
}
</style>
