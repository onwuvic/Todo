<template>
	<div class="item">
		<input type="checkbox">
        <p v-text="task.task"></p>
        <span class="flex">{{ task.hour }}:{{ task.minute }} {{ task.period }}</span>
        <button class="btn btn-sm btn-danger" @click="deleteTodo">
        	<i class="fa fa-trash"></i>
        </button>
	</div>
</template>
<script>
	export default {
		props: ['task'],
		methods: {
			deleteTodo() {
				axios.delete('/todo/' + this.task.id);
				this.$emit('deleted', this.task.id);

				flash('Task has been deleted', 'danger');
			}
		}
	}
</script>