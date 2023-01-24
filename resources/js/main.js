import { Head, Link } from '@inertiajs/vue3'
import { createHead } from '@vueuse/head'

import AppLayout from '@/Layouts/AppLayout.vue'

const head = createHead()

export default {
  install: (app, options) => {
    app.use(head)

    app.component('Head', Head)
    app.component('Link', Link)

    app.component('AppLayout', AppLayout)
  },
}
