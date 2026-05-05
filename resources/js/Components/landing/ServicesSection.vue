<script setup>
const services = [
  {
    title: 'Automatización de tareas',
    tag: 'Procesos',
    icon: '⚙️',
    description:
      'Transformo tareas repetitivas en flujos automáticos para que no dependas de hacerlo todo a mano.',
    benefit: 'Ideal para ordenar procesos internos',
  },
  {
    title: 'Bots de WhatsApp',
    tag: 'Atención',
    icon: '💬',
    description:
      'Respuestas automáticas, captura de datos y organización de solicitudes desde WhatsApp.',
    benefit: 'Atiende clientes incluso fuera de horario',
  },
  {
    title: 'Reportes automáticos',
    tag: 'Excel / PDF',
    icon: '📊',
    description:
      'Reportes, planillas y documentos generados automáticamente listos para revisar o enviar.',
    benefit: 'Menos errores y menos trabajo manual',
  },
  {
    title: 'Correos inteligentes',
    tag: 'Email',
    icon: '✉️',
    description:
      'Correos, recordatorios, avisos y notificaciones automáticas para clientes o equipos.',
    benefit: 'Comunicación clara y automática',
  },
]
</script>

<template>
  <section id="servicios" class="mx-auto max-w-7xl px-6 py-16">
    <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
      <div>
        <p class="text-xs font-black uppercase tracking-widest text-fuchsia-600">
          Servicios
        </p>

        <h2 class="mt-2 max-w-2xl text-3xl font-black text-slate-950 sm:text-4xl">
          Automatizaciones útiles para negocios reales
        </h2>

        <p class="mt-3 max-w-xl text-sm leading-6 text-slate-600">
          Soluciones simples, claras y pensadas para personas que quieren ahorrar
          tiempo sin complicarse con tecnología.
        </p>
      </div>

      <a
        href="#contacto"
        class="w-fit rounded-2xl border border-white/80 bg-white/80 px-5 py-3 text-sm font-black text-slate-800 shadow-sm backdrop-blur transition hover:-translate-y-1 hover:bg-white"
      >
        Quiero automatizar →
      </a>
    </div>

    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
      <article
        v-for="service in services"
        :key="service.title"
        class="group relative overflow-hidden rounded-3xl border border-white/70 bg-white/75 p-6 shadow-xl shadow-indigo-100/50 backdrop-blur transition-all duration-300 hover:-translate-y-2 hover:bg-white hover:shadow-2xl hover:shadow-fuchsia-200/60"
      >
        <div
          class="absolute right-[-2rem] top-[-2rem] h-24 w-24 rounded-full bg-gradient-to-br from-fuchsia-200 to-indigo-200 opacity-80 transition group-hover:scale-125"
        ></div>

        <div class="relative">
          <div class="mb-5 flex items-center justify-between">
            <span
              class="grid h-12 w-12 place-items-center rounded-2xl bg-gradient-to-br from-fuchsia-500 to-indigo-600 text-xl shadow-lg shadow-fuchsia-300/60"
            >
              {{ service.icon }}
            </span>

            <span
              class="rounded-full bg-fuchsia-50 px-3 py-1 text-[0.65rem] font-black text-fuchsia-700"
            >
              {{ service.tag }}
            </span>
          </div>

          <h3 class="text-base font-black text-slate-950">
            {{ service.title }}
          </h3>

          <p class="mt-3 text-xs leading-5 text-slate-600">
            {{ service.description }}
          </p>

          <p class="mt-4 rounded-2xl bg-emerald-50 px-3 py-2 text-[0.7rem] font-black text-emerald-700">
            ✓ {{ service.benefit }}
          </p>

          <a
            href="#contacto"
            class="mt-5 inline-flex rounded-full bg-slate-950 px-4 py-2 text-xs font-black text-white transition group-hover:bg-fuchsia-600"
          >
            Ver detalle →
          </a>
        </div>
      </article>
    </div>
  </section>
</template>