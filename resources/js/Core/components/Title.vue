<template>
    <div>
        <div class="text-4xl md:text-6xl flex flex-col md:flex-row items-center relative">
            <div class="md:hidden flex flex-row justify-around items-center w-full my-6">
            <CTAButton v-if="show" class="w-11"></CTAButton>
            <GameButton v-if="show" class="w-11"></GameButton>
            </div>
            <p :class="propfont" class="md:hidden">Technical Beatnik</p>
            <h1 :class="propfont" class="hidden md:flex mr-1 md:mr-7">Technical</h1>
            <div class="hidden md:block splitting-line">
                <transition-group appear name="slide-fade">
                    <CTAButton v-if="show" :trans-block=true :key="1" class="rotate-90 w-11"></CTAButton>
                    <GameButton v-if="show" :trans-block=true :key="2" class="rotate-90 w-11"></GameButton>
                    <WritingButton v-if="show" :trans-block=true :key="3" class="rotate-90 w-11"></WritingButton>
                    <LinkedInButton v-if="show" :trans-block=true :key="4" class="rotate-90 w-11"></LinkedInButton>
                </transition-group>
            </div>
            <h1 :class="propfont" class="hidden md:flex ml-1 md:ml-7">Beatnik</h1>
            <div class="md:hidden flex flex-row justify-around items-center w-full my-6">
            <WritingButton v-if="show" class="rotate-90 w-11"></WritingButton>
            <LinkedInButton v-if="show" class="rotate-90 w-11"></LinkedInButton>
            </div>
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
