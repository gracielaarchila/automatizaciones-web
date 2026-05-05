<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  post: {
    type: Object,
    required: true,
  },
})

const videoEmbedUrl = (url) => {
  if (!url) return null

  if (url.includes('watch?v=')) {
    return url.replace('watch?v=', 'embed/')
  }

  if (url.includes('youtu.be/')) {
    return url.replace('youtu.be/', 'www.youtube.com/embed/')
  }

  return url
}
</script>

<template>
  <!-- 🔥 TODA LA CARD ES CLICKEABLE -->
  <Link
    :href="`/aprende/${post.slug}`">  
  <article
      class="group relative overflow-hidden rounded-3xl border border-white/70 bg-white/75 p-4 shadow-xl shadow-indigo-100/50 backdrop-blur transition-all duration-300 hover:-translate-y-2 hover:bg-white hover:shadow-2xl hover:shadow-fuchsia-200/60"
    >
      <div
        class="absolute right-[-2rem] top-[-2rem] h-24 w-24 rounded-full bg-gradient-to-br from-fuchsia-200 to-indigo-200 opacity-70 transition group-hover:scale-125"
      ></div>

      <div class="relative">
        <!-- VIDEO -->
        <div
          v-if="post.video_url"
          class="mb-5 overflow-hidden rounded-2xl bg-slate-950 shadow-sm"
        >
          <iframe
            class="h-40 w-full"
            :src="videoEmbedUrl(post.video_url)"
            frameborder="0"
            allowfullscreen
          ></iframe>
        </div>

        <!-- IMAGEN -->
        <img
          v-else-if="post.image"
          :src="post.image"
          :alt="post.title"
          class="mb-5 h-40 w-full rounded-2xl object-cover shadow-sm"
        />

        <span class="rounded-full bg-fuchsia-50 px-3 py-1 text-xs font-black text-fuchsia-700">
          {{ post.category }}
        </span>

        <h3 class="mt-4 text-lg font-black text-slate-950">
          {{ post.title }}
        </h3>

        <p class="mt-3 text-sm leading-6 text-slate-600">
          {{ post.excerpt }}
        </p>

        <p class="mt-5 text-xs font-black text-fuchsia-600">
          Leer más →
        </p>
      </div>
    </article>
  </Link>
</template>