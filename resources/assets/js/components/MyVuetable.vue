<template>
<div>
  <vuetable ref="vuetable"
    :api-url="apiUrl"
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
  props: {
    apiUrl: {
      type: String,
      required: true
    },
    fields: {
      type: Array,
      required: true
    },
    sortOrder: {
      type: Array,
      default() {
        return []
      }
    },
    appendParams: {
      type: Object,
      default() {
        return {}
      }
    },
    detailRowComponent: {
      type: String
    }
  },
}
</script>