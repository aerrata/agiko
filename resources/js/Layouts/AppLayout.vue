<template>
  <Head :title="title" />

  <Toast />

  <div class="page">
    <!-- Navbar -->
    <header class="navbar navbar-expand-md navbar-light d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href=".">
            <img src="/images/agiko-logo.png" alt="" height="32">
            <!-- <img src="https://preview.tabler.io/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image" /> -->
          </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <span class="avatar avatar-sm" style="background-image: url('https://source.boringavatars.com/marble/120/1?colors=264653,2a9d8f,e9c46a,f4a261,e76f51&square')"></span>
              <div class="d-none d-xl-block ps-2">
                <div>{{ user.name }}</div>
                <div class="mt-1 small text-muted">{{ user.email }}</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <!-- <a href="#" class="dropdown-item">Profile</a>
              <div class="dropdown-divider"></div> -->
              <Link :href="route('logout')" method="post" as="button" class="dropdown-item">Logout</Link>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
            <ul class="navbar-nav">
              <li class="nav-item" :class="{ active: $page.url.startsWith('/home') }">
                <Link class="nav-link" :href="route('home')">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="ti ti-home-2 icon"></i>
                  </span>
                  <span class="nav-link-title"> Home </span>
                </Link>
              </li>
              <li class="nav-item dropdown" :class="{ active: $page.url.startsWith('/post') }">
                <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="ti ti-writing icon"></i>
                  </span>
                  <span class="nav-link-title"> Posts </span>
                </a>
                <div class="dropdown-menu">
                  <Link class="dropdown-item" :href="route('post.index')"> All posts</Link>
                  <Link class="dropdown-item" :href="route('post.index', { trashed: true })"> Trashed posts</Link>
                  <div class="dropdown-divider"></div>
                  <Link class="dropdown-item" :href="route('post.index', { type: 'article' })"> Articles </Link>
                  <Link class="dropdown-item" :href="route('post.index', { type: 'event' })"> Events </Link>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="page-wrapper">
      <!-- Page header -->
      <div class="page-header">
        <div class="container-xl">
          <div class="row align-items-center">
            <div class="col">
              <!-- <div class="mb-1">
                <ol class="breadcrumb" aria-label="breadcrumbs">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#">Articles</a></li>
                </ol>
              </div> -->
              <h2 class="page-title">
                <span class="text-truncate">{{ props.title }}</span>
              </h2>
            </div>
            <div class="col-auto">
              <slot name="action"></slot>
            </div>
          </div>
        </div>
      </div>
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <slot />
        </div>
      </div>
      <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
          <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item">
                  Copyright © 2023
                  <a href="." class="link-secondary">Agiko</a>. All rights reserved.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3'

import Toast from '@/Components/Toast.vue'

const user = usePage().props.auth.user

const props = defineProps({
  title: {
    type: String,
    default: 'Untitled',
  },
})
</script>

<style></style>
