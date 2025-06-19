<template>
  <div class="p-4">
    <h1 class="text-xl font-bold">Step 1: Basic Info</h1>
    <form @submit.prevent="submit">
      <input v-model="form.name" placeholder="Name" class="border p-2" />
      <button class="mt-2 bg-blue-500 text-white px-4 py-1 rounded">Next</button>
    </form>
  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  name: ''
})

const submit = () => {
  form.post(route('onboarding.step.submit', { step: 1 }))
}
</script>
