<template>
  <card :title="$t('view_survey')">
    <dl class="row">
  <dt class="col-sm-3">Name</dt>
  <dd class="col-sm-9">{{this.name}}</dd>

  <dt class="col-sm-3">Users</dt>
  <dd class="col-sm-9">
    {{this.users.join(', ')}}
  </dd>
    </dl>
  </card>
</template>

<script>
import axios from 'axios';

export default {
  scrollToTop: false,

  metaInfo () {
    return { title: this.$t('surveys') }
  },

  data: () => ({
    name:'',
    users: []
  }),
  mounted() {
    let id = this.$router.history.current.params.id;
    axios.get('/api/surveys/' + id).then(response => {
          this.users = response.data.users.map(a => {
            return a.name;
          });
          this.name = response.data.name;
        }).catch(() => console.warn('Oh. Something went wrong'));    
        
  },
}
</script>
