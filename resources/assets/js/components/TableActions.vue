<template>
    <div class="custom-actions">
        
       <router-link :to="'/surveys/' + rowData['id'] + '/view'">
           <fa icon="eye" />
       </router-link>
       <router-link :to="'/surveys/' + rowData['id'] + '/edit'">
           <fa icon="edit" />
       </router-link>
      <router-link :to="'/surveys/' + rowData['id'] + '/delete'">
           <fa icon="trash" />
       </router-link>
     
    </div>
  </template>

  <script>
  export default {
    name: 'table-actions',
    props: {
      rowData: {
        type: Object,
        required: true
      },
      rowIndex: {
        type: Number
      }
    },
    methods: {
      itemAction (action, data, index) {
        console.log('custom-actions: ' + action, data.name, index)
      }
    }
  }
  </script>

  <style>
    .custom-actions button.ui.button {
      padding: 8px 8px;
    }
    .custom-actions button.ui.button > i.icon {
      margin: auto !important;
    }
  </style>