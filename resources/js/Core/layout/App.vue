<template>
    <div class="w-full h-screen flex flex-col items-center justify-center text-center">
        <title-block />
    </div>
</template>

<script>
import TitleBlock from "../components/Title";
import CTAButton from "../components/CTAButton";

export default {
    components: {
        CTAButton,
        TitleBlock
    }
}
</script>
