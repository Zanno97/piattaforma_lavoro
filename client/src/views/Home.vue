<template>
  <div>
    <div class="flex bg-green-200" v-for="job in jobs" :key="job.id">
      <p>{{job.description}}</p>
    </div>
  </div>
</template>

<script> 
import axios from 'axios'

export default {
  name: 'Home',
  data(){
    return{
       jobs:[

       ]
    }
  },
  async mounted(){
    this.jobs = (await axios.get('http://localhost:8000/api/jobs')).data
  },
} 
</script>
