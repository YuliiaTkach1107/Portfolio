<template>
  <div class="layout">
    <!-- Навигация -->
    <nav class="navigation">
      <div class="nav-container">
        <Link href="/" class="logo">Y<span>T</span></Link>
        <div class="links">
          <Link href="/projects" :class="{ active: $page.url.startsWith('/projets') }">Projets</Link>
          <Link href="/about" :class="{ active: $page.url.startsWith('/about') }">About</Link>
        </div>
      </div>
    </nav>

    <main class="content">
      <slot />
    </main>
  </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/inertia-vue3'
</script>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Birthstone&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Petit+Formal+Script&family=Sofia&family=Story+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Birthstone&family=Cormorant+Infant:ital,wght@0,300..700;1,300..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Ovo&family=Petit+Formal+Script&family=Sofia&family=Story+Script&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap');


/* Меню */
.navigation {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: rgba(255, 255, 255, 0.5); /* прозрачный фон */
  backdrop-filter: blur(10px); /* размытие подложки */
  z-index: 1000;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* Контейнер навигации */
.nav-container {
  max-width: 100%;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  font-family: "Tinos", serif;
  font-weight: 400;
  font-style: normal;
}

/* Логотип */
.logo {
  font-weight: 700;
  font-size: 1.5rem;
  color: #333;

  text-decoration: none;
  font-family: "Merriweather", serif;
  font-optical-sizing: auto;
  font-style: normal;
  line-height: 1.1;
}

.logo span {
  color: #ff0096; /* выделение буквы T */

}

/* Ссылки */
.links a {
  margin-left: 1.5rem;
  text-decoration: none;
  color: #333;
  font-weight: 500;
  transition: color 0.25s;
}

.links a:hover,
.links a:focus{
  color: #ff0096;
}

/* Контент страницы */
.content {
  max-width: 100%;
  margin: 0 auto;
}
.active {
  color: #ff0096 !important;
  font-weight: 600 !important;
}
main{
  background-color:rgb(230, 230, 230);
}
</style>