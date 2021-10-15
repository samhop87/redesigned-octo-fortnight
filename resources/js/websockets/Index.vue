<template>
    <div>
        testing websockets
        <div>
            {{ computedItem }}
        </div>
        <div>
            {{ vuex }}
        </div>
    </div>
</template>

<script>
export default {
    props: {
        user: {
            required: false
        }
    },
    data() {
        return {
            items: [],
            vuex: this.$store.state.count
        }
    },
    mounted() {
        // this.listen()
    },
    methods: {
        listen() {
            Echo.private('item-processed-channel-' + this.user.id)
                .listen('ItemProcessed', (e) => {
                    this.items.push(e.item.name);
                });
        }
    },
    computed: {
        computedItem() {
            return this.items ? this.items : 'null'
        }
    }
}
</script>
