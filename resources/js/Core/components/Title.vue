<template>
    <div>
        <div class="text-2xl md:text-6xl flex flex-row items-center relative">
            <h1 :class="propfont" class="mr-1 md:mr-7">Technical</h1>
            <div class="hidden md:block splitting-line">
                <transition-group appear name="slide-fade">
                    <CTAButton v-if="show" :key="1" class="rotate-90 w-11"></CTAButton>
                    <GameButton v-if="show" :key="2" class="rotate-90 w-11"></GameButton>
                    <WritingButton v-if="show" :key="3" class="rotate-90 w-11"></WritingButton>
                    <LinkedInButton v-if="show" :key="4" class="rotate-90 w-11"></LinkedInButton>
                </transition-group>
            </div>
            <h1 :class="propfont" class="ml-1 md:ml-7">Beatnik</h1>
        </div>
    </div>
</template>

<script>
import CTAButton from "./CTAButton";
import GameButton from "./GameButton";
import WritingButton from "./WritingButton";
import LinkedInButton from "./LinkedInButton";

export default {
    components: {LinkedInButton, WritingButton, GameButton, CTAButton},
    props: {
        propfont: {
            required: true,
            type: String
        }
    },
    data() {
        return {
            show: false
        }
    },
    mounted() {
        let that = this
        setTimeout(function() {
            that.show = true
        }, 1300);
    }
}
</script>
