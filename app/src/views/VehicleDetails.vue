<template>
    <div class="container pt-8">
        <div class="rounded overflow-hidden shadow-lg p-8">
            <div class="mb-8">
                <img class="w-full" :src="vehicle.image.path">
            </div>
            <div class="flex">
                <div class="CarDetails w-1/2 p-8">
                    <div class="font-bold text-xl mb-2">{{ vehicle.title }}</div>
                    <p class="text-grey-darker text-base mb-4" v-html="vehicle.description" />


                    <h3 class="mb-4">Available in:</h3>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray mr-2"
                            v-for="location in vehicle.locations"
                            :key="location.index"
                    >{{ location.title }}</span>
                </div>
                <div class="CarPrices w-1/2 p-8 border-l">
                    <ul>
                        <li><strong>By Day:</strong> ${{vehicle.price}} </li>
                        <li><strong>Reservation:</strong> {{dates.start}} - {{ dates.end }} </li>
                        <li><strong>Number of days:</strong> {{dates.daysBetween }} </li>
                        <li><strong>Price:</strong> ${{dates.price }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    computed: {
        vehicle() {
            this.$store.dispatch('getVehicle', this.$route.params.slug);
            return this.$store.getters.currentVehicle;
        },
        dates() {
            const start = this.$store.getters.pickupDate ?
                new Date(this.$store.getters.pickupDate) : new Date(localStorage.getItem('pickup'));
            const end = this.$store.getters.dropoffDate ? 
                new Date(this.$store.getters.dropoffDate) : new Date(localStorage.getItem('dropoff'));
            const daysBetween = end - start;
            const price = this.vehicle.price * this.convertMiliseconds(daysBetween, 'd');
            return {
                start: start.toDateString(),
                end: end.toDateString(),
                daysBetween: this.convertMiliseconds(daysBetween, 'd'), 
                price
            }
        }
    },
    methods: {
        convertMiliseconds(miliseconds, format) {
            var days, hours, minutes, seconds, total_hours, total_minutes, total_seconds;
            
            total_seconds = parseInt(Math.floor(miliseconds / 1000));
            total_minutes = parseInt(Math.floor(total_seconds / 60));
            total_hours = parseInt(Math.floor(total_minutes / 60));
            days = parseInt(Math.floor(total_hours / 24));

            seconds = parseInt(total_seconds % 60);
            minutes = parseInt(total_minutes % 60);
            hours = parseInt(total_hours % 24);
            
            switch(format) {
                case 's':
                    return total_seconds;
                case 'm':
                    return total_minutes;
                case 'h':
                    return total_hours;
                case 'd':
                    return days;
                default:
                    return { d: days, h: hours, m: minutes, s: seconds };
            }
        }
    },
    beforeMount() {
        this.$store.dispatch('getVehicle', this.$route.params.slug);
    }
}
</script>
