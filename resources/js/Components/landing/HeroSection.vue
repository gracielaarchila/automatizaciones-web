<script setup>
import LogoMark from '@/Components/landing/LogoMark.vue'
</script>

<template>
  <section class="mx-auto max-w-7xl px-6 py-6 lg:py-8">
    <!-- NAVBAR -->
    <header
      class="mb-8 flex items-center justify-between rounded-full border border-white/70 bg-white/65 px-4 py-3 shadow-lg shadow-indigo-100/40 backdrop-blur-xl"
    >
      <LogoMark />

      <nav class="hidden items-center gap-6 text-xs font-black text-slate-600 md:flex">
        <a href="#servicios" class="transition hover:text-fuchsia-600">Servicios</a>
        <a href="#como-funciona" class="transition hover:text-fuchsia-600">Cómo funciona</a>
        <a href="#planes" class="transition hover:text-fuchsia-600">Planes</a>
        <a href="#contacto" class="transition hover:text-fuchsia-600">Contacto</a>
      </nav>

      <a
        href="#contacto"
        class="rounded-full bg-slate-950 px-5 py-2 text-xs font-black text-white shadow-lg shadow-slate-900/20 transition hover:-translate-y-0.5 hover:bg-fuchsia-600"
      >
        Cotizar
      </a>
    </header>

    <!-- HERO -->
    <div class="grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-center">
      <!-- TEXTO -->
      <div>
        <span
          class="inline-flex rounded-full border border-fuchsia-200 bg-white/80 px-4 py-2 text-xs font-black text-fuchsia-700 shadow-sm backdrop-blur"
        >
          Automatizaciones simples para negocios ocupados
        </span>

        <h1
          class="mt-5 max-w-3xl text-4xl font-black leading-[0.95] tracking-tight text-slate-950 sm:text-5xl xl:text-6xl"
        >
          Convierte tareas manuales en sistemas automáticos.
        </h1>

        <p class="mt-5 max-w-xl text-sm leading-6 text-slate-700 sm:text-base">
          Creo automatizaciones con Python e IA para ahorrar tiempo, reducir errores
          y ordenar procesos repetitivos de tu negocio.
        </p>

        <div class="mt-5 flex flex-wrap gap-3 text-xs font-bold text-slate-600">
          <span class="rounded-full bg-white/80 px-3 py-1 shadow-sm backdrop-blur">
            Ahorra horas cada semana
          </span>
          <span class="rounded-full bg-white/80 px-3 py-1 shadow-sm backdrop-blur">
            Funciona 24/7
          </span>
          <span class="rounded-full bg-white/80 px-3 py-1 shadow-sm backdrop-blur">
            Sin saber programar
          </span>
        </div>

        <div class="mt-7 flex flex-col gap-3 sm:flex-row">
          <a
            href="#servicios"
            class="rounded-2xl bg-gradient-to-r from-fuchsia-600 to-indigo-600 px-6 py-3 text-center text-sm font-black text-white shadow-xl shadow-fuchsia-500/30 transition hover:-translate-y-1"
          >
            Ver servicios
          </a>

          <a
            href="https://wa.me/569XXXXXXXX"
            target="_blank"
            class="rounded-2xl border border-white/80 bg-white/80 px-6 py-3 text-center text-sm font-black text-slate-800 shadow-sm backdrop-blur transition hover:-translate-y-1 hover:bg-white"
          >
            Hablar por WhatsApp
          </a>
        </div>
      </div>

      <!-- PANEL APP -->
      <div
        class="relative overflow-hidden rounded-[2rem] border border-white/70 bg-slate-950 p-4 shadow-2xl shadow-indigo-900/20"
      >
        <div
          class="absolute right-[-4rem] top-[-4rem] h-40 w-40 rounded-full bg-fuchsia-500/30 blur-3xl"
        ></div>

        <div
          class="absolute bottom-[-4rem] left-[-4rem] h-40 w-40 rounded-full bg-sky-500/30 blur-3xl"
        ></div>

        <div class="relative">
          <div class="mb-3 flex items-center justify-between">
            <div class="flex gap-2">
              <span class="h-3 w-3 rounded-full bg-red-400"></span>
              <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
              <span class="h-3 w-3 rounded-full bg-green-400"></span>
            </div>

            <span
              class="rounded-full bg-white/10 px-3 py-1 text-[0.65rem] font-bold text-white/70"
            >
              workflow.py
            </span>
          </div>

          <div class="rounded-3xl bg-slate-900 p-5 font-mono text-xs text-slate-200 sm:text-sm">
            <p class="text-cyan-300">automatizacion = {{ '{' }}</p>

            <div class="mt-4 space-y-2 pl-4">
              <p>
                <span class="text-fuchsia-300">"entrada":</span>
                "cliente escribe por WhatsApp",
              </p>
              <p>
                <span class="text-fuchsia-300">"proceso":</span>
                "se guarda en base de datos",
              </p>
              <p>
                <span class="text-fuchsia-300">"accion":</span>
                "se envía una respuesta",
              </p>
              <p>
                <span class="text-fuchsia-300">"resultado":</span>
                "menos trabajo manual"
              </p>
            </div>

            <p class="mt-2 text-cyan-300">{{ '}' }}</p>

            <div
              class="mt-5 rounded-2xl border border-emerald-400/20 bg-emerald-400/10 p-4 text-emerald-300"
            >
              ✓ Automatización lista para usar
            </div>
          </div>

          <div class="mt-4 grid grid-cols-3 gap-3 text-center">
            <div class="rounded-2xl bg-white/10 p-3">
              <p class="text-lg font-black text-white">+10h</p>
              <p class="text-[0.65rem] font-bold text-white/50">ahorradas</p>
            </div>

            <div class="rounded-2xl bg-white/10 p-3">
              <p class="text-lg font-black text-white">24/7</p>
              <p class="text-[0.65rem] font-bold text-white/50">activo</p>
            </div>

            <div class="rounded-2xl bg-white/10 p-3">
              <p class="text-lg font-black text-white">0%</p>
              <p class="text-[0.65rem] font-bold text-white/50">desorden</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>