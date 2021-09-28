<template>
    <div :class=backgroundColour
         class="w-full h-screen flex flex-col items-center justify-center text-center bg-gradient-to-t">
        <div>
            <title-block :propfont="passedFont"/>
        </div>
    </div>
</template>

<script>
import TitleBlock from "../components/Title";
import CTAButton from "../components/CTAButton";

export default {
    components: {
        CTAButton,
        TitleBlock
    },
    data() {
        return {
            backgroundColour: 'bg-neongreen',
            passedFont: 'text-transparent'
        }
    },
    mounted() {
        this.magicRoundabout()
    },
    methods: {
        magicRoundabout() {
            let combos = [
                'from-pink-500 via-pink-100 to-pink-900',
                'from-neonpurple via-neonred to-neonblue',
                'from-neonred via-turquoise to-neongreen',
                'from-neongreen via-neonpurple to-neonblue',
                'from-turquoise via-neonpurple to-neonred'
            ]
            let colors = ['bg-neonred', 'bg-neonpurple', 'bg-turquoise', 'bg-neongreen', 'bg-neonblue']
            let fonts = ['font-sans', 'font-serif', 'font-mono', 'font-cursive', 'font-serif']
            let i = 0
            let that = this
            let magic = setInterval(() => {
                // TODO: is this the way we want it to look? Right now using linear gradient backgrounds;
                // TODO: changing fonts *might* work, but right now seems to make animation janky;
                that.backgroundColour = combos[i]
                // that.passedFont = fonts[i]
                i++;
                if (i == combos.length) {
                    that.setColour()
                    that.setFont()
                    clearInterval(magic)
                }
            }, 250)
        },
        setColour() {
            this.backgroundColour = 'bg-gray-100'
        },
        setFont() {
            this.passedFont = 'font-display'
        }
    }

}
</script>
