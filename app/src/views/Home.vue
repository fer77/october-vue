<template>
  <div class="home">
    <div class="HeroBlock bg-gray-200">
      <div class="container flex justify-center items-center h-64">
        <reservation-form />
      </div>
    </div>
    <div class="container">
      <vehicle-list />
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import CustomButton from '@/components/Button';
import VehicleList from '@/components/VehicleList';
import ReservationForm from '@/components/ReservationForm';

export default {
  name: 'home',
  components: {
    VehicleList,
    CustomButton,
    ReservationForm
  },
}
</script>
