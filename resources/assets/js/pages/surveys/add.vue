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
          <vue-tags-input
              v-model="tag"
              :tags="tags"
              :autocomplete-items="autocompleteItems"
              :add-only-from-autocomplete="true"
              placeholder="Add Users"
            @tags-changed="newTags => tags = newTags"
          />
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
import VueTagsInput from '@johmun/vue-tags-input';
import axios from 'axios';

export default {
  scrollToTop: false,

  metaInfo () {
    return { title: this.$t('settings') }
  },

  data: () => ({
    form: new Form({
      name: '',
      users: ''
    }), 
    tag: '',
    tags: [],
    autocompleteItems: [],
    debounce: null,
  }),
  created() {
    axios.get('/api/users').then(response => {
          this.autocompleteItems = response.data.data.map(a => {
            return { text: a.name, id: a.id };
          });
        }).catch(() => console.warn('Oh. Something went wrong'));
  }, 
  methods: {
    async update () {
      let userIds = this.tags.map(tag => {
        return tag.id;
      })
      await axios.post('/api/surveys', {
        name: this.form.name,
        users: userIds
      })
      .catch(function (error) {
        console.log(error);
      });
      this.tags =  []
      this.form.reset()
    }
  },
  components: {
    VueTagsInput
  }
}
</script>
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
          <vue-tags-input
              v-model="tag"
              :tags="tags"
              :autocomplete-items="autocompleteItems"
              :add-only-from-autocomplete="true"
              placeholder="Add Users"
            @tags-changed="newTags => tags = newTags"
          />
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
import VueTagsInput from '@johmun/vue-tags-input';
import axios from 'axios';

export default {
  scrollToTop: false,

  metaInfo () {
    return { title: this.$t('surveys') }
  },

  data: () => ({
    form: new Form({
      name: '',
      users: ''
    }), 
    tag: '',
    tags: [],
    autocompleteItems: [],
    debounce: null,
  }),
  created() {
    axios.get('/api/users').then(response => {
          this.autocompleteItems = response.data.data.map(a => {
            return { text: a.name, id: a.id };
          });
        }).catch(() => console.warn('Oh. Something went wrong'));
  }, 
  methods: {
    async update () {
      let userIds = this.tags.map(tag => {
        return tag.id;
      })
      await axios.post('/api/surveys', {
        name: this.form.name,
        users: userIds
      })
      .catch(function (error) {
        console.log(error);
      });
      this.tags =  []
      
      this.form.successful = true;
      this.form.reset()
    }
  },
  components: {
    VueTagsInput
  }
}
</script>
