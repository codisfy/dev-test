<template>
  <card :title="$t('home')">
    <h2>{{ $t('all_users') }}</h2>
    <br/>
     <div class="ui container">
      <my-vuetable
      :api-url="vuetable.apiUrl"
    :fields="vuetable.fields"></my-vuetable>
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
  }, 
  computed: {
    vuetable() {
      return {
        'apiUrl': 'api/users', 
        'fields' : [{name:'name', sortField:'name'}, 'email', 'address']
      }
    }
  }
}
</script>
