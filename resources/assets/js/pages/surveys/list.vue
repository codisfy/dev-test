<template>
  <card :title="$t('all_surveys')">
   <my-vuetable
      :api-url="vuetable.apiUrl"
    :fields="vuetable.fields"></my-vuetable>
  </card>
</template>

<script>
import { mapGetters } from 'vuex'
import MyVuetable from '../../components/MyVuetable'

export default {
  scrollToTop: false,

  metaInfo () {
    return { title: this.$t('surveys') }
  },

  data: () => ({
    
  }),
  components: {
    MyVuetable
  },
   computed: {
    vuetable () {
      return {
        fields: [
        "id", "name", {
          name: '__component:table-actions',   // <----
          title: 'Actions',
          titleClass: 'center aligned',
          dataClass: 'center aligned'
        }
        ],
        apiUrl: "/api/surveys" 
      }
    }
  },
  methods: {
    
  }
}
</script>
