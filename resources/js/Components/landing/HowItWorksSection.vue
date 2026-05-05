<script setup>
const steps = [
  {
    title: 'Me cuentas tu problema',
    description: 'Identificamos tareas manuales y dónde estás perdiendo tiempo.',
    icon: '🧠',
  },
  {
    title: 'Analizo la solución',
    description: 'Evalúo qué se puede automatizar y cómo hacerlo simple.',
    icon: '🔍',
  },
  {
    title: 'Desarrollo el sistema',
    description: 'Creo la automatización adaptada a tu negocio.',
    icon: '⚙️',
  },
  {
    title: 'Lo dejamos funcionando',
    description: 'Queda listo, funcionando y fácil de usar.',
    icon: '🚀',
  },
]
</script>

<template>
  <section id="como-funciona" class="mx-auto max-w-7xl px-6 py-16">
    <!-- HEADER -->
    <div class="text-center max-w-2xl mx-auto">
      <p class="text-xs font-black uppercase tracking-widest text-fuchsia-600">
        Cómo funciona
      </p>

      <h2 class="mt-2 text-3xl sm:text-4xl font-black text-slate-950">
        Un proceso simple, sin complicaciones
      </h2>

      <p class="mt-3 text-sm text-slate-600">
        No necesitas saber de tecnología. Yo me encargo de todo el proceso.
      </p>
    </div>

    <!-- STEPS -->
    <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <div
        v-for="(step, index) in steps"
        :key="step.title"
        class="group relative overflow-hidden rounded-3xl border border-white/70 bg-white/75 p-6 shadow-xl shadow-indigo-100/50 backdrop-blur transition-all duration-300 hover:-translate-y-2 hover:bg-white hover:shadow-2xl hover:shadow-fuchsia-200/60"
      >
        <!-- glow -->
        <div
          class="absolute right-[-2rem] top-[-2rem] h-24 w-24 rounded-full bg-gradient-to-br from-fuchsia-200 to-indigo-200 opacity-70 transition group-hover:scale-125"
        ></div>

        <div class="relative">
          <!-- numero + icono -->
          <div class="mb-5 flex items-center justify-between">
            <span
              class="grid h-12 w-12 place-items-center rounded-2xl bg-gradient-to-br from-fuchsia-500 to-indigo-600 text-xl shadow-lg shadow-fuchsia-300/60"
            >
              {{ step.icon }}
            </span>

            <span
              class="text-sm font-black text-slate-400"
            >
              0{{ index + 1 }}
            </span>
          </div>

          <!-- titulo -->
          <h3 class="text-base font-black text-slate-950">
            {{ step.title }}
          </h3>

          <!-- descripcion -->
          <p class="mt-3 text-xs leading-5 text-slate-600">
            {{ step.description }}
          </p>

          <!-- detalle -->
          <p class="mt-4 text-[0.7rem] font-black text-emerald-600">
            ✓ Sin complicaciones técnicas
          </p>
        </div>
      </div>
    </div>

    <!-- CTA -->
    <div
      class="mt-12 flex flex-col items-center justify-between gap-4 rounded-[2rem] bg-gradient-to-r from-slate-950 via-indigo-950 to-fuchsia-700 px-6 py-6 text-center text-white shadow-2xl shadow-fuchsia-300/40 sm:flex-row sm:text-left"
    >
      <div>
        <h3 class="text-xl font-black">
          ¿Tienes algo que automatizar?
        </h3>
        <p class="text-sm text-white/70 mt-1">
          Cuéntame tu caso y vemos si se puede automatizar.
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