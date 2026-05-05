<script setup>
const defaultTestimonials = [
  {
    name: 'Cliente',
    role: 'Pyme',
    message:
      'Antes hacía reportes manuales todos los días. Ahora se generan automáticamente y ahorro varias horas.',
  },
  {
    name: 'Negocio',
    role: 'Emprendimiento',
    message:
      'La automatización nos ayudó a organizarnos mejor y reducir errores.',
  },
  {
    name: 'Empresa',
    role: 'Equipo',
    message:
      'Ahora tenemos más tiempo para enfocarnos en clientes y no en tareas repetitivas.',
  },
]

const props = defineProps({
  testimonials: {
    type: Array,
    default: () => [],
  },
})

const displayTestimonials = props.testimonials.length
  ? props.testimonials
  : defaultTestimonials
</script>

<template>
  <section class="mx-auto max-w-7xl px-6 py-16">
    <!-- HEADER -->
    <div class="text-center max-w-2xl mx-auto">
      <p class="text-xs font-black uppercase tracking-widest text-fuchsia-600">
        Resultados reales
      </p>

      <h2 class="mt-2 text-3xl sm:text-4xl font-black text-slate-950">
        Lo que cambia cuando automatizas
      </h2>

      <p class="mt-3 text-sm text-slate-600">
        Experiencias de negocios que dejaron de hacer todo manualmente.
      </p>
    </div>

    <!-- TESTIMONIOS -->
    <div class="mt-12 grid gap-6 md:grid-cols-3">
      <article
        v-for="t in displayTestimonials"
        :key="t.message"
        class="group relative overflow-hidden rounded-3xl border border-white/70 bg-white/75 p-6 shadow-xl shadow-indigo-100/50 backdrop-blur transition-all duration-300 hover:-translate-y-2 hover:bg-white hover:shadow-2xl hover:shadow-fuchsia-200/60"
      >
        <!-- glow -->
        <div
          class="absolute right-[-2rem] top-[-2rem] h-24 w-24 rounded-full bg-gradient-to-br from-fuchsia-200 to-indigo-200 opacity-70 transition group-hover:scale-125"
        ></div>

        <div class="relative">
          <!-- quote -->
          <div class="mb-4 text-3xl text-fuchsia-500">“</div>

          <p class="text-sm leading-6 text-slate-700">
            {{ t.message }}
          </p>

          <!-- footer -->
          <div class="mt-6 flex items-center gap-3">
            <div
              class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-br from-fuchsia-500 to-indigo-600 text-sm font-black text-white shadow"
            >
              {{ t.name.charAt(0) }}
            </div>

            <div class="text-left">
              <p class="text-sm font-black text-slate-900">
                {{ t.name }}
              </p>
              <p class="text-xs text-slate-500">
                {{ t.role }}
              </p>
            </div>
          </div>

          <!-- extra -->
          <p class="mt-4 text-[0.7rem] font-black text-emerald-600">
            ✓ Resultado real
          </p>
        </div>
      </article>
    </div>

    <!-- CTA -->
    <div
      class="mt-12 flex flex-col items-center justify-between gap-4 rounded-[2rem] bg-gradient-to-r from-slate-950 via-indigo-950 to-fuchsia-700 px-6 py-6 text-center text-white shadow-2xl shadow-fuchsia-300/40 sm:flex-row sm:text-left"
    >
      <div>
        <h3 class="text-xl font-black">
          Tú puedes ser el próximo caso
        </h3>
        <p class="text-sm text-white/70 mt-1">
          Cuéntame qué haces manualmente y vemos cómo automatizarlo.
        </p>
      </div>

      <a
        href="#contacto"
        class="rounded-2xl bg-white px-6 py-3 text-sm font-black text-fuchsia-700 shadow-lg transition hover:-translate-y-1"
      >
        Quiero automatizar
      </a>
    </div>
  </section>
</template>