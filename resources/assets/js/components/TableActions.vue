<template>
    <div class="custom-actions">
      <button class="btn btn-sm btn-outline-light text-dark" @click="itemAction('view-item', rowData, rowIndex)"><fa icon="eye" /></button>
      <button class="btn btn-sm btn-outline-light text-dark" @click="itemAction('edit-item', rowData, rowIndex)"><fa icon="edit" /></button>
      <button class="btn btn-sm btn-outline-light text-dark" @click="itemAction('delete-item', rowData, rowIndex)"><fa icon="trash" /></button>
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