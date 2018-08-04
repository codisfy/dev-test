<template>
  <card :title="$t('add_survey')">
    <form @submit.prevent="update" @keydown="form.onKeydown($event)">
      <alert-success :form="form" :message="$t('survey_added')"/>

      <!-- Password -->
      <div class="form-group row">
        <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>
        <div class="col-md-7">
          <input v-model="form.name" :class="{ 'is-invalid': form.errors.has('name') }" class="form-control" type="text" name="name">
          <has-error :form="form" field="name"/>
        </div>
      </div>

      <!-- Password Confirmation -->
      <div class="form-group row">
        <label class="col-md-3 col-form-label text-md-right">{{ $t('users') }}</label>
        <div class="col-md-7">
          <input v-model="form.users" :class="{ 'is-invalid': form.errors.has('users') }" class="form-control" type="text" name="users">
          <has-error :form="form" field="users"/>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="form-group row">
        <div class="col-md-9 ml-md-auto">
          <v-button :loading="form.busy" type="success">{{ $t('add') }}</v-button>
        </div>
      </div>
    </form>
  </card>
</template>

<script>
import Form from 'vform'

export default {
  scrollToTop: false,

  metaInfo () {
    return { title: this.$t('settings') }
  },

  data: () => ({
    form: new Form({
      name: '',
      users: ''
    })
  }),

  methods: {
    async update () {
      await this.form.post('/api/surveys')

      this.form.reset()
    }
  }
}
</script>
