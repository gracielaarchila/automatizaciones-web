<script setup>
const defaultPlans = [
  {
    name: 'Proyecto único',
    price: 'Pago único',
    description: 'Automatización específica según tu necesidad.',
    features: [
      'Desarrollo personalizado',
      'Instalación inicial',
      '1 mes de soporte',
    ],
    is_popular: false,
  },
  {
    name: 'Mantenimiento',
    price: 'Mensual',
    description: 'Para mantener tu sistema funcionando siempre.',
    features: [
      'Monitoreo',
      'Corrección de errores',
      'Pequeñas mejoras',
    ],
    is_popular: true,
  },
  {
    name: 'Asesoría',
    price: 'Por sesión',
    description: 'Para entender qué puedes automatizar.',
    features: [
      'Análisis de procesos',
      'Recomendaciones',
      'Propuesta clara',
    ],
    is_popular: false,
  },
]

const props = defineProps({
  plans: {
    type: Array,
    default: () => [],
  },
})

const displayPlans = props.plans.length ? props.plans : defaultPlans
</script>

<template>
  <section id="planes" class="mx-auto max-w-7xl px-6 py-16">
    <div class="mx-auto max-w-2xl text-center">
      <p class="text-xs font-black uppercase tracking-widest text-fuchsia-600">
        Formas de trabajar
      </p>

      <h2 class="mt-2 text-3xl font-black text-slate-950 sm:text-4xl">
        Elige la forma que mejor se adapta a tu negocio
      </h2>

      <p class="mt-3 text-sm leading-6 text-slate-600">
        Puedes partir con una automatización puntual o mantener un sistema funcionando mes a mes.
      </p>
    </div>

    <div class="mt-12 grid gap-6 md:grid-cols-3">
      <article
        v-for="plan in displayPlans"
        :key="plan.name"
        class="group relative overflow-hidden rounded-3xl border border-white/70 bg-white/75 p-6 shadow-xl shadow-indigo-100/50 backdrop-blur transition-all duration-300 hover:-translate-y-2 hover:bg-white hover:shadow-2xl hover:shadow-fuchsia-200/60"
        :class="plan.is_popular ? 'ring-2 ring-fuchsia-400' : ''"
      >
        <div
          class="absolute right-[-2rem] top-[-2rem] h-28 w-28 rounded-full bg-gradient-to-br from-fuchsia-200 to-indigo-200 opacity-80 transition group-hover:scale-125"
        ></div>

        <div class="relative">
          <div class="mb-5 flex items-start justify-between gap-4">
            <div>
              <h3 class="text-xl font-black text-slate-950">
                {{ plan.name }}
              </h3>

              <p class="mt-2 text-sm font-black text-fuchsia-600">
                {{ plan.price }}
              </p>
            </div>

            <span
              v-if="plan.is_popular"
              class="rounded-full bg-fuchsia-600 px-3 py-1 text-[0.65rem] font-black text-white shadow-lg shadow-fuchsia-300/60"
            >
              Recomendado
            </span>
          </div>

          <p class="text-sm leading-6 text-slate-600">
            {{ plan.description }}
          </p>

          <ul class="mt-6 space-y-3 text-left text-sm text-slate-700">
            <li
              v-for="feature in plan.features"
              :key="feature"
              class="flex gap-2"
            >
              <span class="font-black text-emerald-600">✓</span>
              <span>{{ feature }}</span>
            </li>
          </ul>

          <a
            href="#contacto"
            class="mt-7 inline-flex w-full justify-center rounded-2xl bg-slate-950 px-6 py-3 text-sm font-black text-white shadow-lg shadow-slate-900/20 transition hover:-translate-y-1 hover:bg-fuchsia-600"
          >
            Consultar este plan
          </a>
        </div>
      </article>
    </div>
  </section>
</template>