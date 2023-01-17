import { Head, Link } from '@inertiajs/vue3'

import AppLayout from '@/Layouts/AppLayout.vue'

export default {
  install: (app, options) => {
    app.component('Head', Head)
    app.component('Link', Link)

    app.component('AppLayout', AppLayout)
  },
}
