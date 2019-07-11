<template>
    <div class="ReservationForm p-5 bg-white flex items-end">
        <div class="mr-4">
            <!-- <input-select :label="'Pickup Location'" :options="locations" @onSelect="filterVehiclesOnApi" /> -->
            <input-select :label="'Pickup Location'" :options="locations" @onSelect="setLocation" />
        </div>
        <div class="mr-4">
            <label for="">Pickup Time</label>
            <datepicker type="datetime" input-class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Select Date" @input="setDate($event, 'pickup')"></datepicker>
        </div>
        <div class="mr-4">
            <label for="">Drop Off Time</label>
            <datepicker type="datetime" input-class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Select Date" @input="setDate($event, 'dropoff')"></datepicker>
        </div>
        <div>
            <button class="bg-green-500 text-white font-bold py-3 px-4 rounded" @click="filterVehicles">Find Vehicles</button>
        </div>
    </div>
</template>
<script>
import InputSelect from '@/components/forms/InputSelect';
import VehicleList from '@/components/VehicleList';
import Datepicker from 'vuejs-datepicker';

export default {
    components: {
        InputSelect,
        VehicleList,
        Datepicker
    },
    computed: {
        locations() {
            return this.$store.getters.allLocations;
        }
    },
    methods: {
        filterVehicles() {
            /** keep components as dumb as possible. Filtering and other 'calculations' should be handled in the store. */
            this.$store.dispatch('filterVehicles');
        },
        filterVehiclesOnApi(value) {
            this.$store.dispatch('filterOnApi', +value);
        },
        setLocation(value) {
            this.$store.dispatch('setLocation', +value);
        },
        setDate(value, type) {
            this.$store.dispatch('setDates', {value, type})
        }
    }
}
</script>
