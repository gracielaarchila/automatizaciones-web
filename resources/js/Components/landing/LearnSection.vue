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
  <section id="aprende" class="mx-auto max-w-7xl px-6 py-16">
    <div class="mx-auto max-w-2xl text-center">
      <p class="text-xs font-black uppercase tracking-widest text-fuchsia-600">
        Aprende
      </p>

      <h2 class="mt-2 text-3xl font-black text-slate-950 sm:text-4xl">
        Entiende cómo la automatización puede ayudarte
      </h2>

      <p class="mt-3 text-sm leading-6 text-slate-600">
        Noticias, guías y ejemplos simples para descubrir beneficios reales de automatizar tareas.
      </p>
    </div>

    <div class="mt-12 grid gap-6 md:grid-cols-3">
      <LearnCard
        v-for="post in posts"
        :key="post.id"
        :post="post"
      />

      <div
        v-if="posts.length === 0"
        class="col-span-full rounded-3xl border border-white/70 bg-white/75 p-8 text-center shadow-xl backdrop-blur"
      >
        <p class="font-bold text-slate-600">
          Todavía no hay noticias publicadas.
        </p>
      </div>
    </div>

    <div
      class="mt-12 flex flex-col items-center justify-between gap-4 rounded-[2rem] bg-gradient-to-r from-slate-950 via-indigo-950 to-fuchsia-700 px-6 py-6 text-center text-white shadow-2xl shadow-fuchsia-300/40 sm:flex-row sm:text-left"
    >
      <div>
        <h3 class="text-xl font-black">
          ¿Quieres saber qué puedes automatizar?
        </h3>

        <p class="mt-1 text-sm text-white/70">
          Te ayudo a identificar tareas repetitivas y convertirlas en procesos automáticos.
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
</template>