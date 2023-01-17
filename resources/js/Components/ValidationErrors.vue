<template>
  <div class="col-md-12" v-if="Object.keys(errors).length > 0">
    <div class="alert alert-danger" role="alert">
      <div class="d-flex">
        <div>
          <i class="ti ti-alert-circle icon me-2"></i>
        </div>
        <div>
          <h4 class="alert-title">Whoops! There's an error.</h4>
          <div class="text-muted">
            <ul class="mb-0">
              <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

const errors = computed(() => usePage().props.errors)
</script>

<style></style>
