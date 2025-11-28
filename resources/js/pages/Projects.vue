<template>
<NavigationLayout>
    <div class='projets'>
        <h2 class='text-center'> Mes Projets</h2>
        <p class='text-gray-700 text-center'>Découvrez une sélection de mes réalisations récentes</p>


        <!-- ТАБЫ -->
  <div class="flex gap-3 justify-center mb-12 mt-8 flex-wrap cursor-pointer">

    <!-- Tous -->
    <button
      @click="activeTab = 'tous'"
      class="px-6 py-3 rounded-xl transition-all"
      :class="activeTab === 'tous' ? 'scale-105' : 'opacity-60 hover:opacity-80'"
      :style="{
        backgroundColor: activeTab === 'tous'
          ? 'rgba(150,0,255,0.2)'
          : 'rgba(0,0,0,0.05)'
      }"
    >
      <div class="flex items-center gap-2">
        <span class='cursor-pointer'> Tous</span>
      </div>
    </button>

    <!-- Web -->
    <button
      @click="activeTab = 'web'"
      class="px-6 py-3 rounded-xl transition-all"
      :class="activeTab === 'web' ? 'scale-105' : 'opacity-60 hover:opacity-80'"
      :style="{
        backgroundColor: activeTab === 'web'
          ? 'rgba(0,200,255,0.3)'
          : 'rgba(0,0,0,0.05)'
      }"
    >
      <div class="flex items-center gap-2 cursor-pointer">
        <span>Web</span>
      </div>
    </button>

    <!-- Application -->
    <button
      @click="activeTab = 'application'"
      class="px-6 py-3 rounded-xl transition-all"
      :class="activeTab === 'application' ? 'scale-105' : 'opacity-60 hover:opacity-80'"
      :style="{
        backgroundColor: activeTab === 'application'
          ? 'rgba(255,0,150,0.4)'
          : 'rgba(0,0,0,0.05)'
      }"
    >
      <div class="flex items-center gap-2 cursor-pointer">
        <span>Application</span>
      </div>
    </button>

<!--  UI/UX-->
     <button
      @click="activeTab = 'UI/UX'"
      class="px-6 py-3 rounded-xl transition-all"
      :class="activeTab === 'UI/UX' ? 'scale-105' : 'opacity-60 hover:opacity-80'"
      :style="{
        backgroundColor: activeTab === 'UI/UX'
          ? 'rgba(150,0,255,0.2)'
          : 'rgba(0,0,0,0.05)'
      }"
    >
      <div class="flex items-center gap-2 cursor-pointer">
        <span>UI/UX</span>
      </div>
    </button>

  </div>
      <div v-if="activeTab === 'tous'" 
          class=" w-3/4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 m-auto">

  <div v-for="project in projects"
       :key="project.id"
        class="card-project border p-5 rounded-xl flex flex-col gap-2">

    <p class="font-bold text-lg mb-2">{{ project.title }}</p>
    <p class="text-gray-600 mb-3">{{ project.short_description }}</p>

    <!-- Технологии -->
    <div class="flex gap-2 flex-wrap mt-2">
      <span
        v-for="tech in project.technologies"
        :key="tech.id"
        class="px-3 py-1 rounded-full text-sm font-medium"
        :style="{ backgroundColor: tech.color }"
      >
        {{ tech.name }}
      </span>
    </div>

  </div>

</div>

</div>
</NavigationLayout>
</template>

<script setup lang="ts" >
import { ref } from 'vue';
import NavigationLayout from '@/Layouts/NavigationLayout.vue';
import { defineProps } from 'vue';

const activeTab = ref('tous');

enum ProjectType {
  Site_Web = "Site web",
  App_mobile = "App mobile",
  API = "API",
  Design = "Design",
  Autre = 'Autre'
}

enum Status{
  Brouillon = 'Brouillon',
  Publié = 'Publié',
  Archivé = 'Archivé'
}

enum Context{
  Scolaire ='Scolaire',
  Stage ='Stage',
  Freelance = 'Freelance',
  Personnel = 'Personnel'
}
defineProps<{
    projects: Array<{
        id: number,
        title: string,
        short_description: string | null,
        detailed_description: string | null,
        type: ProjectType,
        status: Status,
        date_realisation: string | null,
        client: string | null,
        context: Context,
        duration: string | null,
        role: string | null,
        project_link:string | null,
        github_link: string | null,
        display_order: string,
    }>;

}>();
</script>
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Birthstone&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Petit+Formal+Script&family=Sofia&family=Story+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Birthstone&family=Cormorant+Infant:ital,wght@0,300..700;1,300..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Petit+Formal+Script&family=Sofia&family=Story+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Birthstone&family=Cormorant+Infant:ital,wght@0,300..700;1,300..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Ovo&family=Petit+Formal+Script&family=Sofia&family=Story+Script&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap');
.projets{
  background-color:rgb(230, 230, 230);
  width:100vw;
  height:100vh;
  padding-top:80px;
}
h2{

  font-size:30px;
  font-weight: 300;
  font-family: "Merriweather", serif;
  font-optical-sizing: auto;
  font-style: normal;
  text-align:center;
  margin-bottom:30px;
}
h3{
  font-weight: var(--font-weight-medium);
  line-height: 1.5;
  font-family: "Merriweather", serif;
  font-optical-sizing: auto;
  font-style: normal;
  margin-top:20px;
  max-width:1152px;
  margin:auto;
  margin-bottom:25px;
}
h4{
  font-weight: 700;
  line-height: 1.5;
  font-family: "Merriweather", serif;
  font-optical-sizing: auto;
  font-style:normal;
  font-size:16px;
}
p,li,span{
  font-family: "Tinos", serif;
  font-weight: 400;
  font-style: normal;
  border-radius: 8px;
}
span.logo{
    font-weight: 700;
}

.card-project{
  background-color:rgb(227, 227, 227);
}
</style>