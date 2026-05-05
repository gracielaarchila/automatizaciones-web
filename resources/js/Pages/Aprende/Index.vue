<script setup>
import LearnCard from '@/Components/landing/LearnCard.vue'

defineProps({
  posts: {
    type: Array,
    default: () => [],
  },
})
</script>

<template>
  <div class="bg-gradient-to-b from-white via-slate-50 to-white min-h-screen">
    
    <!-- HEADER -->
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-10">
      <div class="mx-auto max-w-2xl text-center">
        <p class="text-xs font-black uppercase tracking-widest text-fuchsia-600">
          Aprende
        </p>

        <h1 class="mt-2 text-3xl font-black text-slate-950 sm:text-4xl">
          Automatización sin complicaciones
        </h1>

        <p class="mt-3 text-sm leading-6 text-slate-600">
          Guías, ejemplos y contenido práctico para entender cómo automatizar procesos reales en tu negocio.
        </p>
      </div>
    </section>

    <!-- GRID POSTS -->
    <section class="mx-auto max-w-7xl px-6 pb-16">
      <div class="grid gap-6 md:grid-cols-3">
        
        <LearnCard
          v-for="post in posts"
          :key="post.id"
          :post="post"
        />

        <!-- EMPTY STATE -->
        <div
          v-if="posts.length === 0"
          class="col-span-full rounded-3xl border border-white/70 bg-white/75 p-10 text-center shadow-xl backdrop-blur"
        >
          <p class="font-bold text-slate-600">
            Todavía no hay contenido publicado.
          </p>
        </div>

      </div>
    </section>

    <!-- CTA FINAL -->
    <section class="mx-auto max-w-7xl px-6 pb-20">
      <div
        class="flex flex-col items-center justify-between gap-4 rounded-[2rem] bg-gradient-to-r from-slate-950 via-indigo-950 to-fuchsia-700 px-6 py-8 text-center text-white shadow-2xl shadow-fuchsia-300/40 sm:flex-row sm:text-left"
      >
        <div>
          <h3 class="text-xl font-black">
            ¿Quieres automatizar tu negocio?
          </h3>

          <p class="mt-1 text-sm text-white/70">
            Te ayudo a detectar oportunidades y crear soluciones reales.
          </p>
        </div>

        <a
          href="#contacto"
          class="rounded-2xl bg-white px-6 py-3 text-sm font-black text-fuchsia-700 shadow-lg transition hover:-translate-y-1"
        >
          Hablar ahora
        </a>
      </div>
    </section>

  </div>
</template>