<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'

const stats = [
  {
    label: 'Visitas',
    value: 0,
    icon: '👀',
    detail: 'Personas que visitaron la web',
  },
  {
    label: 'Contactos',
    value: 0,
    icon: '📩',
    detail: 'Solicitudes recibidas',
  },
  {
    label: 'Testimonios',
    value: 0,
    icon: '💬',
    detail: 'Opiniones publicadas',
  },
  {
    label: 'Noticias',
    value: 0,
    icon: '📰',
    detail: 'Contenido educativo',
  },
]

const modules = [
  {
    title: 'Noticias / Aprende',
    description: 'Crea guías, noticias y contenido para explicar beneficios de automatización.',
    icon: '📰',
    href: '/admin/noticias',
    tag: 'Contenido',
  },
  {
    title: 'Planes',
    description: 'Configura formas de trabajo, precios y beneficios de cada servicio.',
    icon: '💎',
    href: '/admin/planes',
    tag: 'Ventas',
  },
  {
    title: 'Testimonios',
    description: 'Gestiona opiniones y resultados reales de clientes.',
    icon: '💬',
    href: '/admin/testimonios',
    tag: 'Confianza',
  },
  {
    title: 'Programas',
    description: 'Muestra ejemplos de automatizaciones, sistemas y soluciones creadas.',
    icon: '⚙️',
    href: '/admin/programas',
    tag: 'Portafolio',
  },
  {
    title: 'Comentarios',
    description: 'Revisa opiniones que dejan los usuarios sobre productos o contenido.',
    icon: '⭐',
    href: '/admin/comentarios',
    tag: 'Comunidad',
  },
  {
    title: 'Contactos',
    description: 'Consulta leads, mensajes y solicitudes recibidas desde la web.',
    icon: '📩',
    href: '/admin/contactos',
    tag: 'Leads',
  },
]
</script>

<template>
  <AuthenticatedLayout>
    <template #header>
      <div>
        <p class="text-xs font-black uppercase tracking-widest text-fuchsia-600">
          Admin
        </p>
        <h2 class="text-xl font-black text-slate-900">
          Panel de control
        </h2>
      </div>
    </template>

    <div class="relative min-h-screen overflow-hidden py-10">
      <!-- FONDO -->
      <div class="absolute inset-0 -z-10">
        <div
          class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,#f0abfc_0,#ddd6fe_30%,#e0f2fe_65%,#ffffff_100%)]"
        ></div>
        <div class="absolute left-[-8rem] top-[-8rem] h-80 w-80 rounded-full bg-fuchsia-300/40 blur-3xl"></div>
        <div class="absolute right-[-8rem] bottom-[-8rem] h-96 w-96 rounded-full bg-sky-300/40 blur-3xl"></div>
        <div
          class="absolute inset-0 opacity-[0.05] bg-[radial-gradient(#111827_1px,transparent_1px)] [background-size:18px_18px]"
        ></div>
      </div>

      <div class="mx-auto max-w-7xl px-6 space-y-8">
        <!-- HERO ADMIN -->
        <section
          class="relative overflow-hidden rounded-[2rem] bg-gradient-to-r from-slate-950 via-indigo-950 to-fuchsia-700 p-8 text-white shadow-2xl shadow-fuchsia-300/40"
        >
          <div class="absolute right-[-5rem] top-[-5rem] h-56 w-56 rounded-full bg-white/20 blur-3xl"></div>
          <div class="absolute bottom-[-5rem] left-[-5rem] h-56 w-56 rounded-full bg-sky-400/20 blur-3xl"></div>

          <div class="relative flex flex-col justify-between gap-6 lg:flex-row lg:items-center">
            <div>
              <p class="text-xs font-black uppercase tracking-widest text-fuchsia-200">
                Automatiza · Admin
              </p>

              <h1 class="mt-3 max-w-2xl text-3xl font-black leading-tight sm:text-4xl">
                Gestiona tu landing, contenido educativo y solicitudes.
              </h1>

              <p class="mt-4 max-w-xl text-sm leading-6 text-white/75">
                Desde aquí controlarás noticias, planes, testimonios, programas,
                comentarios, contactos y métricas del sitio.
              </p>
            </div>

            <div class="rounded-3xl border border-white/15 bg-white/10 p-5 backdrop-blur">
              <p class="text-sm font-black text-white">
                Próximo objetivo
              </p>
              <p class="mt-2 text-sm text-white/70">
                Conectar visitas, contactos y contenido editable desde base de datos.
              </p>
            </div>
          </div>
        </section>

        <!-- KPIS -->
        <section class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
          <article
            v-for="stat in stats"
            :key="stat.label"
            class="group relative overflow-hidden rounded-3xl border border-white/70 bg-white/75 p-6 shadow-xl shadow-indigo-100/50 backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:bg-white hover:shadow-2xl hover:shadow-fuchsia-200/60"
          >
            <div
              class="absolute right-[-2rem] top-[-2rem] h-24 w-24 rounded-full bg-gradient-to-br from-fuchsia-200 to-indigo-200 opacity-80 transition group-hover:scale-125"
            ></div>

            <div class="relative">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-sm font-black text-slate-500">
                    {{ stat.label }}
                  </p>
                  <p class="mt-1 text-xs font-bold text-slate-400">
                    {{ stat.detail }}
                  </p>
                </div>

                <div
                  class="grid h-12 w-12 place-items-center rounded-2xl bg-gradient-to-br from-fuchsia-500 to-indigo-600 text-xl shadow-lg shadow-fuchsia-300/60"
                >
                  {{ stat.icon }}
                </div>
              </div>

              <p class="mt-6 text-4xl font-black text-slate-950">
                {{ stat.value }}
              </p>

              <p class="mt-2 text-xs font-bold text-emerald-600">
                ✓ Listo para conectar datos reales
              </p>
            </div>
          </article>
        </section>

        <!-- CONTENIDO PRINCIPAL -->
        <section class="grid gap-6 lg:grid-cols-[1fr_0.75fr]">
          <!-- MÓDULOS -->
          <div>
            <div class="mb-5 flex items-end justify-between gap-4">
              <div>
                <p class="text-xs font-black uppercase tracking-widest text-fuchsia-600">
                  Módulos
                </p>

                <h2 class="mt-2 text-2xl font-black text-slate-950">
                  Gestión rápida
                </h2>
              </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
              <a
                v-for="module in modules"
                :key="module.title"
                :href="module.href"
                class="group relative overflow-hidden rounded-3xl border border-white/70 bg-white/75 p-6 shadow-xl shadow-indigo-100/50 backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:bg-white hover:shadow-2xl hover:shadow-fuchsia-200/60"
              >
                <div
                  class="absolute right-[-2rem] top-[-2rem] h-24 w-24 rounded-full bg-gradient-to-br from-fuchsia-200 to-indigo-200 opacity-80 transition group-hover:scale-125"
                ></div>

                <div class="relative">
                  <div class="mb-5 flex items-center justify-between">
                    <span
                      class="grid h-12 w-12 place-items-center rounded-2xl bg-gradient-to-br from-fuchsia-500 to-indigo-600 text-xl shadow-lg shadow-fuchsia-300/60"
                    >
                      {{ module.icon }}
                    </span>

                    <span class="rounded-full bg-fuchsia-50 px-3 py-1 text-[0.65rem] font-black text-fuchsia-700">
                      {{ module.tag }}
                    </span>
                  </div>

                  <h3 class="text-lg font-black text-slate-950">
                    {{ module.title }}
                  </h3>

                  <p class="mt-3 text-sm leading-6 text-slate-600">
                    {{ module.description }}
                  </p>

                  <p class="mt-5 text-xs font-black text-fuchsia-600">
                    Entrar →
                  </p>
                </div>
              </a>
            </div>
          </div>

          <!-- PANEL LATERAL -->
          <aside class="space-y-5">
            <div
              class="rounded-3xl border border-white/70 bg-white/75 p-6 shadow-xl shadow-indigo-100/50 backdrop-blur"
            >
              <p class="text-xs font-black uppercase tracking-widest text-fuchsia-600">
                Estado del sitio
              </p>

              <h3 class="mt-2 text-xl font-black text-slate-950">
                Landing activa
              </h3>

              <p class="mt-3 text-sm leading-6 text-slate-600">
                Tu página pública ya muestra servicios, planes, testimonios,
                sección educativa y contacto.
              </p>

              <a
                href="/"
                class="mt-5 inline-flex rounded-2xl bg-slate-950 px-5 py-3 text-sm font-black text-white shadow-lg transition hover:-translate-y-1 hover:bg-fuchsia-600"
              >
                Ver sitio público
              </a>
            </div>

            <div
              class="rounded-3xl border border-white/70 bg-white/75 p-6 shadow-xl shadow-indigo-100/50 backdrop-blur"
            >
              <p class="text-xs font-black uppercase tracking-widest text-fuchsia-600">
                Próximos pasos
              </p>

              <div class="mt-5 space-y-4">
                <div class="flex gap-3">
                  <span class="font-black text-emerald-600">✓</span>
                  <p class="text-sm text-slate-700">
                    Crear CRUD de noticias para alimentar “Aprende”.
                  </p>
                </div>

                <div class="flex gap-3">
                  <span class="font-black text-emerald-600">✓</span>
                  <p class="text-sm text-slate-700">
                    Crear formulario de contacto y guardar leads.
                  </p>
                </div>

                <div class="flex gap-3">
                  <span class="font-black text-emerald-600">✓</span>
                  <p class="text-sm text-slate-700">
                    Registrar visitas automáticamente.
                  </p>
                </div>
              </div>
            </div>
          </aside>
        </section>
      </div>
    </div>
  </AuthenticatedLayout>
</template>