<template>
    <div>
        <img @click="warning"
             class="w-11 cursor-pointer hover rounded-xl"
             :class="transBlock ? 'rotated position' : ''"
             :src="image_src"
             alt="github">
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
            image_src: 'images/game/asteroid.jpg',
            counter: 0,
            message: null
        }
    },
    methods: {
        warning() {
            this.fireMessage()
            this.counter++
        },
        fireMessage() {
            switch (this.counter) {
                case 0:
                    this.message = 'Don\'t click on me, man.'
                    break
                case 1:
                    this.message = 'What did I just say?'
                    break
                case 2:
                    this.message = 'I\'m warning you for the last time.'
                    break
                case 3:
                    this.message = 'YOU WERE WARNED'
                    break
                case 4:
                    this.message = 'I\'m going to say something so scathing and hurtful that it will haunt you for years.' +
                        ' You can avoid this by not clicking me again.'
                    break
                case 5:
                    this.message = 'You asked for this. I didn\'t want to do this...'
                    break
                case 6:
                    this.message = 'Here it is: you actually smell quite strongly of poop.'
                    break
                case 7:
                    this.message = 'I told you it would be devastating. It will haunt you.'
                    break
                case 8:
                    this.message = '"Do I really smell like poop?", you will ask yourself.'
                    break
                case 9:
                    this.message = 'And you\'ll never know if people are lying to you or not.'
                    break
                case 10:
                    this.message = 'I think I\'ve said enough.'
                    break
                default:
                    this.message = 'I think I\'ve said enough.'
            }
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
    margin: -44px 44px 0 357px;
}
</style>
