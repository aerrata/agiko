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
      <div class="space-y-2">
        <template v-if="Object.keys(props.posts).length">
          <div class="card" v-for="post in props.posts" :key="post">
            <div class="row g-0">
              <div class="col-auto">
                <div class="card-body">
                  <div class="avatar avatar-md" :style="`background-image: url('${post.meta.image_url}}')`"></div>
                </div>
              </div>
              <div class="col">
                <div class="card-body ps-0">
                  <div class="row">
                    <div class="col-md">
                      <div class="row">
                        <div class="col">
                          <h3 class="mb-0">
                            <a href="#">{{ post.meta.title }}</a>
                          </h3>
                          <div class="text-muted mt-1">
                            {{ post.meta.description }}
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                          <div class="mt-3 list-inline list-inline-dots mb-0 text-muted d-sm-block d-none">
                            <div class="list-inline-item text-capitalize">
                              <i class="ti ti-tag me-1"></i>
                              {{ post.meta.type }}
                            </div>
                            <div class="list-inline-item">
                              <i class="ti ti-clock me-1"></i>
                              {{ format(new Date(post.created_at), 'd MMMM yyyy') }}
                            </div>
                            <div class="list-inline-item">
                              <i class="ti ti-user me-1"></i>
                              {{ post.author.name }}
                            </div>
                          </div>
                          <div class="mt-3 list mb-0 text-muted d-block d-sm-none">
                            <div class="list-item text-capitalize">
                              <i class="ti ti-tag me-1"></i>
                              {{ post.meta.type }}
                            </div>
                            <div class="list-item">
                              <i class="ti ti-clock me-1"></i>
                              {{ format(new Date(post.created_at), 'd MMMM yyyy') }}
                            </div>
                            <div class="list-inline-item">
                              <i class="ti ti-user me-1"></i>
                              {{ post.author.name }}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-auto">
                      <ul class="list-inline list-inline-dots mb-0 mt-3 mt-md-0">
                        <template v-if="!post.deleted_at">
                          <li class="list-inline-item"><Link :href="route('post.edit', post)" class="btn-link">Edit</Link></li>
                          <li class="list-inline-item"><Link :href="route('post.show', post)" class="btn-link">View</Link></li>
                          <li class="list-inline-item"><Link :href="route('post.destroy', post)" class="btn-link" method="delete" as="button">Delete</Link></li>
                        </template>
                        <template v-else>
                          <li class="list-inline-item"><Link :href="route('post.restore', post)" class="btn-link" method="post" as="button">Restore</Link></li>
                        </template>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </template>
        <template v-else>
          <div class="card">
            <div class="card-body text-center">
              <span>No record found. 🫤</span>
            </div>
          </div>
        </template>
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
