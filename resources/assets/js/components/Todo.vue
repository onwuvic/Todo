<template>
    <div class="row">
      <div class="col-md-12">
        <div v-for="(task, index) in todo">
            <task :task="task" @deleted="remove(index)"></task> 
        </div>
      </div>
    </div>  
</template>
<script>
	import Task from './Task.vue';
    export default {
    	components: { Task },
    	props: ['todos'],
    	data() {
    		return {
    			todo: this.todos
    		}
    	},
    	methods: {
    		remove(index) {
    			this.todo.splice(index, 1);
    		}
    	}
    }
</script>
