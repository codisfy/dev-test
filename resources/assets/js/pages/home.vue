<template>
  <card :title="$t('home')">
    {{ $t('you_are_logged_in') }}
     <div class="ui container">
      <my-vuetable></my-vuetable>
    </div>
  </card>
  
</template>

<script>
import MyVuetable from '../components/MyVuetable'
export default {
  middleware: 'auth',

  metaInfo () {
    return { title: this.$t('home') }
  },
   
  components: {
    MyVuetable
  }

}
</script>
