<template>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2"
        :class="{'bg-green-600': available, 'bg-red-600': !available}">
        <template v-if="available">
            Available
        </template>
        <template v-if="!available">
            Not Available
        </template>
    </span>
</template>
<script>
export default {
    props: {
        available: {
            type: Number,
            default: 1
        }
    }
}
</script>
