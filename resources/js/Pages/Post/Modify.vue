<template>
  <AppLayout title="Edit Post">
    <template #action>
      <div class="btn-list">
        <button type="submit" form="form-post" class="btn btn-primary">
          <i class="ti ti-device-floppy icon"></i>
          <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
            <span v-if="!form.recentlySuccessful">Save</span>
            <span v-else>Saved!</span>
          </Transition>
        </button>
      </div>
    </template>
    <div class="row row-cards">
      <div class="col-md-12" v-if="hasErrors">
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
      <div class="col-md-12">
        <form id="form-post" class="card" @submit.prevent="post.id ? form.put(route('post.update', post)) : form.post(route('post.store'))">
          <div class="card-body">
            <div class="mb-3 row">
              <label class="col-3 col-form-label required">Type</label>
              <div class="col">
                <select class="form-select" v-model="form.type">
                  <option v-for="type in types" :key="type.id" :value="type.id">{{ type.name }}</option>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-3 col-form-label required">Title</label>
              <div class="col">
                <input type="text" class="form-control" v-model="form.title" />
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-3 col-form-label required">Description</label>
              <div class="col">
                <input type="text" class="form-control" v-model="form.description" />
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-3 col-form-label required">Slug</label>
              <div class="col">
                <div class="input-group input-group-flat">
                  <span class="input-group-text">https://alumni.test/post/</span>
                  <input type="text" class="form-control ps-0" v-model="form.slug" />
                </div>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-3 col-form-label required">Image URL</label>
              <div class="col">
                <input type="text" class="form-control" v-model="form.image_url" />
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-3 col-form-label required">Content</label>
              <div class="col">
                <input type="text" class="form-control" v-model="form.content" />
              </div>
            </div>
            <!-- <div class="mb-3 row">
              <label class="col-3 col-form-label required">Category</label>
              <div class="col">
                <input type="text" class="form-control" v-model="form.category" />
              </div>
            </div> -->
            <div class="mb-3 row">
              <label class="col-3 col-form-label required">Publish?</label>
              <div class="col">
                <label class="form-check form-switch">
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
import { ref, computed } from 'vue'
import { useForm, usePage } from '@inertiajs/inertia-vue3'

const props = defineProps(['post'])

const errors = computed(() => usePage().props.value.errors)

const hasErrors = computed(() => Object.keys(errors.value).length > 0)

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
  { id: 'article', name: 'Article' },
  { id: 'event', name: 'Event' },
])
</script>

<style></style>
