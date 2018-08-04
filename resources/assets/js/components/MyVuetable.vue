<template>
<div>
  <vuetable ref="vuetable"
    api-url="api/users"
    :fields="fields"
  ></vuetable>
    <vuetable-pagination ref="pagination"></vuetable-pagination>
    </div>
</template>

<script>
import Vuetable from 'vuetable-2/src/components/Vuetable'
import VuetablePagination from 'vuetable-2/src/components/VuetablePagination'

export default {
  components: {
    Vuetable,
    VuetablePagination
  },
  data () {
    return {
      fields: [
        {
          name: 'name', 
          sortField: 'name'
        },  'email', 'address'
      ]
    }
  }
}
</script>