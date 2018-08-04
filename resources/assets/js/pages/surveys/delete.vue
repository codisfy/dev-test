<template>
  
</template>

<script>

import axios from 'axios';

export default {
 
  created() {
      
      this.delete();
  }, 
  methods: {
    async delete () {
      await  axios.delete('/api/surveys/' + this.$router.history.current.params.id)
        .catch(function (error) {
          console.log(error);
        });
        this.$router.push({name:'surveys.list'});
    }
  }
}
</script>
