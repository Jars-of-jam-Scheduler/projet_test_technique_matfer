<script setup lang="ts">
import type { Ticket } from '../../types/tickets'
import { api } from '../modules/api'
import { ref } from 'vue'

const tickets = ref<Ticket[]>([])

const createTicket = async () => {
	try {
		const newTicket = await api.createTicket({ name: ticketName.value })
		tickets.value.push(newTicket)

	} catch (error) {
		;;
	}
}
</script>

<template>
  <div class="greetings">

	<input type="text" id="ticket_name" v-model="ticketName" placeholder="Title" />
   	<button id="create_ticket" v-on:click="createTicket">Create a ticket</button>

  </div>
</template>

<style scoped>
h1 {
  font-weight: 500;
  font-size: 2.6rem;
  top: -10px;
}

h3 {
  font-size: 1.2rem;
}

.greetings h1,
.greetings h3 {
  text-align: center;
}

@media (min-width: 1024px) {
  .greetings h1,
  .greetings h3 {
    text-align: left;
  }
}
</style>
