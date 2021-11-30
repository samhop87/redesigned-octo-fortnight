<template>
    <div>
        <div>
            <apexchart width="500"
                       type="line"
                       :options="options"
                       :series="series"
            ></apexchart>
        </div>
        <div>
            <p>Enter new weight (kg):</p>
            <input v-model="weight" type="number">
            <button @click="submitWeight"
                    class="p-2 m-4 bg-cleomagenta text-white font-bold">
                Submit new weight reading
            </button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            weight: 0,
            dataObject: [],
            options: {
                chart: {
                    id: 'vuechart-example'
                },
            },
            series: [{
                data: ['test']
        }]
        }
    },
    created() {
        this.getWeightData()
    },
    methods: {
        getWeightData() {
            axios.get('/api/weight/index').then(({data}) => {
                for (let i = 0; i < data.data.length; i++) {
                    this.dataObject.push(data.data[i].data_object)
                }

                this.series = [{
                    data: this.dataObject
                }]
            })
        },
        submitWeight() {
            axios.post('/api/weight/store', { weight: this.weight }).then(({ data }) => {
                console.log(data)
            })
        }
    }
}
</script>
