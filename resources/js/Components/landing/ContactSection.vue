<script setup>
import LogoMark from '@/Components/landing/LogoMark.vue'
</script>

<template>
  <section id="contacto" class="mx-auto max-w-7xl px-6 py-16">
    <div
      class="relative overflow-hidden rounded-[2rem] bg-gradient-to-r from-slate-950 via-indigo-950 to-fuchsia-700 px-6 py-10 text-white shadow-2xl shadow-fuchsia-300/40 sm:px-10"
    >
      <div class="absolute right-[-5rem] top-[-5rem] h-56 w-56 rounded-full bg-white/20 blur-3xl"></div>
      <div class="absolute bottom-[-5rem] left-[-5rem] h-56 w-56 rounded-full bg-sky-400/20 blur-3xl"></div>

      <div class="relative grid gap-8 lg:grid-cols-[1fr_0.8fr] lg:items-center">
        <div>
          <div class="mb-6 inline-flex rounded-full bg-white/10 px-4 py-2 backdrop-blur">
            <LogoMark />
          </div>

          <p class="text-xs font-black uppercase tracking-widest text-fuchsia-200">
            Contacto
          </p>

          <h2 class="mt-3 max-w-2xl text-3xl font-black leading-tight sm:text-4xl">
            ¿Tienes una tarea repetitiva que te quita tiempo?
          </h2>

          <p class="mt-4 max-w-xl text-sm leading-6 text-white/75">
            Cuéntame qué haces manualmente y vemos si se puede convertir en una
            automatización simple, útil y fácil de usar.
          </p>

          <div class="mt-6 flex flex-wrap gap-3 text-xs font-bold text-white/75">
            <span class="rounded-full bg-white/10 px-3 py-1">Sin compromiso</span>
            <span class="rounded-full bg-white/10 px-3 py-1">Explicación simple</span>
            <span class="rounded-full bg-white/10 px-3 py-1">Enfoque práctico</span>
          </div>
        </div>

        <div class="rounded-3xl border border-white/15 bg-white/10 p-5 backdrop-blur">
          <h3 class="text-lg font-black">
            Empecemos por WhatsApp
          </h3>

          <p class="mt-2 text-sm leading-6 text-white/70">
            Puedes escribirme con una idea simple como:
            “quiero automatizar reportes”, “quiero un bot” o “quiero ordenar datos”.
          </p>

          <a
            href="https://wa.me/569XXXXXXXX"
            target="_blank"
            class="mt-6 inline-flex w-full justify-center rounded-2xl bg-white px-6 py-3 text-sm font-black text-fuchsia-700 shadow-lg transition hover:-translate-y-1"
          >
            Hablar por WhatsApp
          </a>

          <p class="mt-4 text-center text-xs text-white/50">
            Respuesta directa para evaluar tu caso.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>