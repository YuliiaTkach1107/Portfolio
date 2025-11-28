<template>
<NavigationLayout>
<div class="min-h-screen py-20 px-6">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <div class="inline-block mb-6">
            <div 
            class="w-50 h-50 rounded-full flex items-center justify-center mx-auto mb-4 overflow-hidden"
            :style="{ background: 'linear-gradient(135deg, rgba(150,0,255,0.3), rgba(0,200,255,0.3))' }"
            >
            <img 
                src="/images/profile/profil.jpg" 
                alt="Photo de Yuliia" 
                class="w-full h-full object-cover"
            />
            </div>
          </div>
          <h2 class="mb-4">Yuliia Tkachenko</h2>
          <div class="flex items-center justify-center gap-4 mb-6 flex-wrap">
            <div class="flex items-center gap-2 opacity-70">
              <MapPin size='18' />
              <span>Belgique</span>
            </div>
            <div class="flex items-center gap-2 opacity-70">
              <Code2 size='18' />
              <span>Développeuse Full-Stack</span>
            </div>
          </div>
          <div 
            class="max-w-3xl mx-auto rounded-2xl p-6"
            :style="{ background: 'rgba(150,0,255,0.1)' }"
          >
            <p class="text-lg leading-relaxed opacity-90">
              Développeuse web passionnée par la création de produits digitaux modernes, intuitifs et performants.
              J'aime transformer des idées en projets concrets et apprendre continuellement de nouvelles technologies.
            </p>
          </div>
        </div>
</div>

<div class="bloc_info">

  <!-- ТАБЫ -->
  <div class="flex gap-3 justify-center mb-12 flex-wrap cursor-pointer">

    <!-- PARCOURS -->
    <button
      @click="activeTab = 'parcours'"
      class="px-6 py-3 rounded-xl transition-all"
      :class="activeTab === 'parcours' ? 'scale-105' : 'opacity-60 hover:opacity-80'"
      :style="{
        backgroundColor: activeTab === 'parcours'
          ? 'rgba(150,0,255,0.2)'
          : 'rgba(0,0,0,0.05)'
      }"
    >
      <div class="flex items-center gap-2">
        <i class="fa-solid fa-graduation-cap"></i>
        <span class='cursor-pointer'> Parcours</span>
      </div>
    </button>

    <!-- COMPETENCES -->
    <button
      @click="activeTab = 'competences'"
      class="px-6 py-3 rounded-xl transition-all"
      :class="activeTab === 'competences' ? 'scale-105' : 'opacity-60 hover:opacity-80'"
      :style="{
        backgroundColor: activeTab === 'competences'
          ? 'rgba(0,200,255,0.3)'
          : 'rgba(0,0,0,0.05)'
      }"
    >
      <div class="flex items-center gap-2 cursor-pointer">
        <i class="fa-solid fa-code"></i>
        <span>Compétences</span>
      </div>
    </button>

    <!-- VALEURS -->
    <button
      @click="activeTab = 'valeurs'"
      class="px-6 py-3 rounded-xl transition-all"
      :class="activeTab === 'valeurs' ? 'scale-105' : 'opacity-60 hover:opacity-80'"
      :style="{
        backgroundColor: activeTab === 'valeurs'
          ? 'rgba(255,0,150,0.4)'
          : 'rgba(0,0,0,0.05)'
      }"
    >
      <div class="flex items-center gap-2 cursor-pointer">
        <i class="fa-solid fa-heart"></i>
        <span>Valeurs & Intérêts</span>
      </div>
    </button>

  </div>
  <!-- КОНЕЦ ТАБОВ -->


  <!-- СОДЕРЖИМОЕ ВКЛАДОК -->
  <div class="tab-content">

    <!-- Parcours -->
    <div v-if="activeTab === 'parcours'">
      <div class='formation'>
        <h3 class='bold'>Formation</h3>
        <div class='grid grid-cols-1 sm:grid-cols-2  gap-6 px-10' >
        <div 
            v-for='form in formations'
            :key="form.id"
            class='card_formation'>
            <p class='mb-2'> {{form.date_debut}} - {{form.date_fin}}</p>
            <h4 class='mb-2'>{{form.diplome}}</h4>
            <p class='mb-2'>{{form.lieu}}</p>
            <p>{{form.description}}</p>

        </div>
        </div>
      </div>

      <div class="experience">
        <h3>Expériences Professionnelles</h3>

        <div
          v-for="exp in experiences"
          :key="exp.id"
          class="exp_card"
        >
          <div class="date_type">
            <p class="date">{{ exp.date_debut }}</p>
            <p class="pl-2">{{ exp.type }}</p>
          </div>

          <div class="autre">
            <p class="mb-3">{{ exp.poste }}</p>
            <p>
              <Briefcase class="inline w-4 h-4 text-gray-500" />
              {{ exp.lieu }}
            </p>

            <ul class="description mt-3">
              <li>{{ exp.description }}</li>
            </ul>

            <ul class="competence mt-3">
              <li
                v-for="line in formattedDescription(exp.competence)"
                :key="line"
              >
                {{ line }}
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>


    <!-- Compétences -->
    <div v-if="activeTab === 'competences'">
       <h3 class='text-center'>Stack Technique</h3>
         <div class="grid grid-cols-1 md:grid-cols-2 gap-8" >
          <div class='card-tech'
         v-for='tech in technologies' 
         :key="tech.id">
         
        <div class="flex items-center justify-between mb-4 columns">
          <div>
            <h3 class="mb-1">{{ tech.name }}</h3>
            <span class="text-sm opacity-60">{{ tech.category }}</span>
          </div>

          <div
            class="px-4 py-2 rounded-lg"
          >
            {{ levelToPercent[tech.level.toLowerCase()] }}%
          </div>
        </div>

        <div class="w-full bg-black/10 rounded-full h-3 overflow-hidden">
          <div
            class="h-full rounded-full transition-all duration-1000"
            :style="{
              width: levelToPercent[tech.level.toLowerCase()] + '%',
              background: 'linear-gradient(90deg, rgba(150,0,255,0.5), rgba(0,200,255,0.5))'
            }"
          ></div>
        </div>
      </div>
    </div>
    <p class='text-center mb-6 mt-8'>Mon stack favori</p>
   <div class="flex gap-3 mt-3 justify-center">
      <div class="px-4 py-2 rounded-xl text-black  " 
      :style="{ backgroundColor: 'rgba(150,0,255,0.2)'}">
        Vue.js
      </div>
     <p> + </p>
      <div class="px-4 py-2 rounded-xl text-black "
      :style="{ backgroundColor: 'rgba(255,0,150,0.2)'}">
        Laravel
      </div>
       <p> + </p>
      <div class="px-4 py-2 rounded-xl text-black "
      :style="{ backgroundColor: 'rgba(0,200,255,0.2)'}">
        Tailwind
      </div>
    </div>
    </div> 


    <!-- Valeurs -->
    <div v-if="activeTab === 'valeurs'">
      <h3 class='text-center'>Valeurs & Intérêts</h3>
      <div class="valeurs">
        
          <div v-for='valeur in valeurs' 
          :key="valeur.id">
            <div class='card-valeur'>
              <h3> {{valeur.title}}</h3>
              <p>{{valeur.description}}</p>
            </div>
        </div>
      
      </div>
      <div class="flex flex-wrap gap-4 justify-center mt-4">
        <div 
          v-for="(interet, index) in interets" 
          :key="index"
          class="px-4 py-2 rounded-lg text-sm font-medium shadow-sm hover:scale-105 transition-transform duration-200 card-interet"
        >
          {{ interet }}
        </div>
      </div>
      <div 
              class="rounded-2xl p-8 text-center mt-8 "
              :style="{ background: 'linear-gradient(135deg, rgba(150,0,255,0.1), rgba(0,200,255,0.1), rgba(255,0,150,0.1))' }"
            >
              <Sparkles size='32' class="mx-auto mb-4 opacity-70 " />
              <h3 class="mb-4">Ma Philosophie</h3>
              <p class="text-lg opacity-80 max-w-2xl mx-auto">
                "Chaque ligne de code est une opportunité de créer quelque chose de beau et d'utile. 
                Je crois en l'apprentissage continu et en la puissance de la collaboration pour construire 
                des expériences digitales qui font la différence."
              </p>
            </div>
          </div>
          </div>
  </div>
  <!-- КОНЕЦ СОДЕРЖИМОГО -->

<div class="text-center mt-20">
  <a href="/files/Yuliia_Tkachenko_CV.pdf" download>
          <button
            class="inline-flex items-center gap-3 px-8 py-4 rounded-xl transition-all hover:scale-105 cursor-pointer"
            :style="{ backgroundColor: 'rgba(150,0,255,0.2)' }"
          >
          
            <Download size="20" />
            Télécharger mon CV
          </button>
          </a>
        </div>
</div>






</NavigationLayout>

</template>

<script setup lang="ts">
import { ref } from 'vue';
import { defineProps } from 'vue';
import NavigationLayout from '@/Layouts/NavigationLayout.vue';
import { MapPin, Briefcase, Code2, Sparkles, Download } from 'lucide-vue-next';


enum ExpirienceType {
  Stage = "Stage",
  CDI = "CDI",
  CDD = "CDD",
  Freelance = "Freelance",
  Alternance = 'Alternance'
}

defineProps<{
  technologies: Array<{
    id: number,
    name: string,
    logo: string,
    level: string,
    color: string,
  }>
  experiences: Array<{
    id: number,
    poste: string,
    entreprise: string,
    lieu: string,
    date_debut: string,
    date_fin: string | null ,
    description:string,
    type: ExpirienceType,
  }>
  formations: Array<{
    id: number,
    diplome: string,
    etablissement: string,
    lieu: string,
    date_debut: string,
    date_fin:string | null,
    description:string,
  }>
  valeurs: Array<{
    id: number,
    title: string,
    description:string,
}>
}>();
const formattedDescription = (desc: string) => desc.split('|');
const activeTab = ref('parcours');

const levelToPercent = {
  débutant: 20,
  intermédiaire:60,
  avancé:80,
  expert:100,
};
const interets = [
    'Développement Web',
    'UI/UX Design',
    'Musique & Arts',
    'Voyages',
    'Photographie',
    'Lecture technique'
  ];


</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Birthstone&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Petit+Formal+Script&family=Sofia&family=Story+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Birthstone&family=Cormorant+Infant:ital,wght@0,300..700;1,300..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Petit+Formal+Script&family=Sofia&family=Story+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Birthstone&family=Cormorant+Infant:ital,wght@0,300..700;1,300..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Ovo&family=Petit+Formal+Script&family=Sofia&family=Story+Script&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap');


.bold{
  font-weight:bold;
}
.contenu{
    margin-top: 80px;
    padding-top:80px;
    width:100%;
    height:100vh;
    margin:auto;
    background-color: rgb(230, 230, 230);
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
p.bio{
    margin:auto;
    text-align: center;
    max-width:800px;
    margin-bottom:40px;
}
.exp_card{
    display:grid;
    grid-template-columns:10% auto; 
    background-color: rgba(255, 255, 255, 0.5);
    border-radius:20px;
    padding:20px;
    gap:50px;
    justify-items: center;
    transition: transform 0.3s ease;
    max-width:1152px;
    margin:auto;
    margin-bottom:20px;
    
}

.exp_card:hover{
   transform: scale(1.02);

}
.experience{
    margin:auto;
    width:90%;

}
ul.competence{
    display:flex;
    flex-direction:row;
    gap:20px;
}
.exp_card:nth-child(3n+1) {
  border: 2px solid rgba(150,0,255,0.3);
}
.exp_card:nth-child(3n+2) {
  border:2px solid rgba(0,200,255,0.3);
}
.exp_card:nth-child(3n) {
  border: 2px solid rgba(255,0,150,0.3);
}
.exp_card:nth-child(3n+1) .date {
  background-color: rgba(150,0,255,0.3); /* чуть ярче или темнее */
}
.exp_card:nth-child(3n+2) .date{
  background-color: rgba(0,200,255,0.4);
}
.exp_card:nth-child(3n) .date {
  background-color: rgba(255,0,150,0.5);
}
.date{
    padding:3px 10px;
    margin-bottom:5px;
}
.competence li{
    background-color:  rgba(221, 220, 220, 0.5);
    padding:3px 10px;
}
.bloc_info{
  display:flex;
  flex-direction:column;
}
.card_formation {
  background-color:whitesmoke;
  border-radius: 15px;           
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
  padding: 20px;                  
  margin: auto;
  margin-bottom: 30px;
  width:100%;
  align-content:center;
  transition: transform 0.3s ease, box-shadow 0.3s ease; 


}

/* Эффект при наведении */
.card_formation:hover,
.card-tech:hover,
.card-valeur:hover,
.card-interet:hover
.philosophie:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}
.formation{
  width:90%;
  margin:auto;
}
.card-tech{
  padding: 20px;
  border-radius: 20px;
  background: 
    linear-gradient(white, white) padding-box, 
    linear-gradient(90deg, rgba(150,0,255,0.5), rgba(0,200,255,0.5)) border-box;
  border: 3px solid transparent;
   transition: transform 0.3s ease, box-shadow 0.3s ease; 
}
.valeurs{
  display:grid;
  grid-template-columns: repeat(2,1fr);
  grid-template-rows:repeat(2,auto);
  gap:20px;
  
}
.card-valeur{
  width:85%;
  margin:auto;
  padding:20px 10px 20px 20px;
  border-radius:20px;
  border: 3px solid rgba(255,0,150,0.3);
  background-color:rgb(240, 240, 240);
  transition: transform 0.3s ease, box-shadow 0.3s ease; 

}
.card-valeur h3{
  margin-left:0;
}

.card-interet:nth-child(3n+1)  {
  background-color: rgba(150,0,255,0.2); /* чуть ярче или темнее */
}
.card-interet:nth-child(3n+2){
  background-color: rgba(0,200,255,0.2);
}
.card-interet:nth-child(3n) {
  background-color: rgba(255,0,150,0.2);
}
.interet{
  transition: transform 0.3s ease, box-shadow 0.3s ease; 
}
.philosophie{
  transition:transform 0.3s ease, box-shadow 0.3s ease;  ;
}
</style>
