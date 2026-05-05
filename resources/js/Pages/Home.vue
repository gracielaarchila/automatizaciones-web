<script setup>
import HeroSection from '@/Components/landing/HeroSection.vue'
import ServicesSection from '@/Components/landing/ServicesSection.vue'
import HowItWorksSection from '@/Components/landing/HowItWorksSection.vue'
import PlansSection from '@/Components/landing/PlansSection.vue'
import TestimonialsSection from '@/Components/landing/TestimonialsSection.vue'
import ContactSection from '@/Components/landing/ContactSection.vue'
import LearnSection from '@/Components/landing/LearnSection.vue'
defineProps({
  plans: {
    type: Array,
    default: () => [],
  },
  testimonials: {
    type: Array,
    default: () => [],
  },
  posts: {
    type: Array,
    default: () => [],
  },
})

</script>

<template>
  <main class="relative min-h-screen overflow-hidden text-slate-900">
    <!-- FONDO GLOBAL -->
    <div class="absolute inset-0 -z-10">
      <div
        class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,#f0abfc_0,#ddd6fe_28%,#e0f2fe_58%,#fff7ed_100%)]"
      ></div>

      <div
        class="absolute left-[-10rem] top-[-10rem] h-96 w-96 rounded-full bg-fuchsia-300/40 blur-3xl"
      ></div>

      <div
        class="absolute right-[-8rem] bottom-[-10rem] h-[30rem] w-[30rem] rounded-full bg-sky-300/40 blur-3xl"
      ></div>

      <div
        class="absolute inset-0 opacity-[0.06] bg-[radial-gradient(#111827_1px,transparent_1px)] [background-size:18px_18px]"
      ></div>
    </div>

    <!-- CONTENIDO -->
    <div class="relative z-10">
      <HeroSection />

      <div class="h-px w-full bg-gradient-to-r from-transparent via-white/60 to-transparent"></div>

      <ServicesSection />

      <div class="h-px w-full bg-gradient-to-r from-transparent via-white/60 to-transparent"></div>
      <LearnSection :posts="posts" />

      <div class="h-px w-full bg-gradient-to-r from-transparent via-white/60 to-transparent"></div>

      <HowItWorksSection />


      <div class="h-px w-full bg-gradient-to-r from-transparent via-white/60 to-transparent"></div>

      <TestimonialsSection :testimonials="testimonials" />

      <ContactSection />
    </div>
  </main>
</template>