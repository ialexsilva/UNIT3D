<template>
    <div>
        <div v-if="show">
            <pool-form></pool-form>

            <h3>Top 10 contributions to current pot</h3>
            <pool-table></pool-table>
        </div>
        <div v-else="show">
            <h3>Freeleech is currently in progress</h3>
        </div>

        <h3>Top 10 contribution to pool</h3>
        <pool-table></pool-table>
    </div>
</template>

<script>
    import PoolForm from './PoolForm'
    import PoolTable from './PoolTable'

    export default {
        components: {
            PoolForm,
            PoolTable
        },
        data: {
            show: false
        }

    }
</script>

<style lang="scss">

</style>