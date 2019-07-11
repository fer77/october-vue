<template>
    <div class="flex flex-wrap justify-between mt-4 mb-8">
        <vehicle v-for="(vehicle, index) in filteredVehicles" 
            :key="index"
            :name="vehicle.title"
            :description="vehicle.description"
            :image="vehicle.image.path"
            :price="vehicle.price"
            :available="vehicle.available"
            :slug="vehicle.slug"
        />
    </div>
</template>

<script>
import Vehicle from '@/components/Vehicle';

export default {
    components: {
        Vehicle
    },
    props: {
        filtered: {
            type: Boolean,
            default: false
        }
    },
    computed: {
        vehicles() {
            return this.$store.getters.allVehicles;
        },
        filteredVehicles() {
            return this.$store.getters.filteredVehicles;
        }
    }
}
</script>