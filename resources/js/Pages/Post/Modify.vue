<template>
  <AppLayout title="Edit Post">
    <template #action>
      <div class="btn-list">
        <button type="submit" form="form-post" class="btn btn-primary" :disabled="form.processing">
          <i class="ti ti-check icon"></i>
          Save
        </button>
      </div>
    </template>
    <div class="row row-cards">
      <ValidationErrors />
      <div class="col-md-12">
        <form id="form-post" class="card" @submit.prevent="post.id ? form.put(route('post.update', post)) : form.post(route('post.store'))">
          <div class="card-body">
            <div class="mb-3 row">
              <label class="col-md-3 col-form-label required">Type</label>
              <div class="col">
                <div class="form-selectgroup-boxes row row-cards mb-3">
                  <div v-for="type in types" :key="type.id" :value="type.id" class="col-lg-6">
                    <label class="form-selectgroup-item">
                      <input type="radio" v-model="form.type" :value="type.id" class="form-selectgroup-input" />
                      <span class="form-selectgroup-label d-flex align-items-center p-3">
                        <span class="form-selectgroup-check me-3"></span>
                        <span class="form-selectgroup-label-content">
                          <span class="form-selectgroup-title strong mb-1">{{ type.name }}</span>
                          <span class="d-block text-muted">{{ type.description }}</span>
                        </span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 row">
              <label class="col-md-3 col-form-label required">Title</label>
              <div class="col">
                <input type="text" class="form-control" v-model="form.title" />
              </div>
            </div>

            <div class="mb-3 row">
              <label class="col-md-3 col-form-label required">Description</label>
              <div class="col">
                <input type="text" class="form-control" v-model="form.description" />
              </div>
            </div>

            <div class="mb-3 row">
              <label class="col-md-3 col-form-label required">Slug</label>
              <div class="col">
                <div class="input-group input-group-flat">
                  <span class="input-group-text">https://alumni.test/post/</span>
                  <input type="text" class="form-control ps-0" v-model="form.slug" />
                </div>
              </div>
            </div>

            <div class="mb-3 row">
              <label class="col-md-3 col-form-label required">Image URL</label>
              <div class="col">
                <input type="text" class="form-control" v-model="form.image_url" />
              </div>
            </div>

            <div class="mb-3 row">
              <label class="col-md-3 col-form-label required">Content</label>
              <div class="col">
                <Editor v-model="form.content" />
              </div>
            </div>

            <!-- <div class="mb-3 row">
              <label class="col-md-3 col-form-label required">Category</label>
              <div class="col">
                <input type="text" class="form-control" v-model="form.category" />
              </div>
            </div> -->

            <div class="mb-3 row">
              <label class="col-md-3 col-form-label required">Publish?</label>
              <div class="col d-flex align-items-center">
                <label class="form-check form-switch mb-0">
                  <input class="form-check-input" type="checkbox" v-model="form.published" />
                  <span class="form-check-label">Set the visibility for this post</span>
                </label>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/inertia-vue3'

import Editor from '@/Components/Editor.vue'
import ValidationErrors from '@/Components/ValidationErrors.vue'

const props = defineProps(['post'])

const form = useForm({
  slug: props.post.meta?.slug,
  type: props.post.meta?.type,
  title: props.post.meta?.title,
  content: props.post.meta?.content,
  category: props.post.meta?.category,
  image_url: props.post.meta?.image_url,
  published: props.post.meta?.published,
  description: props.post.meta?.description,
})

const types = ref([
  { id: 'article', name: 'Article', description: 'For writings, informative.' },
  { id: 'event', name: 'Event', description: 'For news & announcements.' },
])
</script>

<style></style>
