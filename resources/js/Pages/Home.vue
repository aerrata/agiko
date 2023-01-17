<template>
  <AppLayout title="Home">
    <div class="card">
      <div class="card-body">
        <h4>Hi {{ $page.props.auth.user.name }}! You're logged in.</h4>
      </div>
    </div>
  </AppLayout>
</template>

<script setup></script>

<style></style>
