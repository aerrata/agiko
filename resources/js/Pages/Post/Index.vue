<template>
  <AppLayout title="Posts">
    <template #action>
      <div class="btn-list">
        <Link :href="route('post.create')" class="btn btn-primary">
          <i class="ti ti-plus icon"></i>
          New
        </Link>
      </div>
    </template>
    <div class="row row-cards">
      <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table class="table table-vcenter card-table">
              <tbody>
                <tr v-for="post in props.posts" :key="post">
                  <td>
                    <div class="d-flex py-1 align-items-center">
                      <span class="avatar avatar-lg me-3" :style="`background-image: url('${post.meta.image_url}}')`"></span>
                      <div class="flex-fill">
                        <span class="badge bg-primary-lt text-capitalize fw-semibold">{{ post.meta.type }}</span>
                        <div class="fw-semibold mt-1">{{ post.meta.title }}</div>
                        <div class="text-muted mt-1">
                          {{ post.meta.description }}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div>
                      <div class="d-flex align-items-center">
                        <span class="avatar avatar-xs me-2 avatar-rounded" :style="`background-image: url('${post.author.image_url}')`"></span>
                        {{ post.author.name }}
                      </div>
                    </div>
                    <div class="text-muted">{{ format(new Date(post.created_at), 'd MMMM yyyy') }}</div>
                  </td>
                  <td>
                    <ul class="list-inline list-inline-dots mb-0">
                      <li class="list-inline-item"><Link :href="route('post.edit', post)">Edit</Link></li>
                      <li class="list-inline-item"><Link :href="route('post.show', post)">View</Link></li>
                      <li class="list-inline-item"><Link :href="route('post.edit', post)">Delete</Link></li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import { format } from 'date-fns'

const props = defineProps({
  posts: Object,
})
</script>

<style>
.avatar-xs {
  --tblr-avatar-size: 1rem;
}
</style>
