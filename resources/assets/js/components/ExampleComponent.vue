<template>
    <div class="card card-default">
        <div class="card-header">{{ header }}</div>

        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            // console.log('Component mounted.')
        },
        props: ['header']
    }
</script>
