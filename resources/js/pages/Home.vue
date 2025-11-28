
<template>
<NavigationLayout>
  <div class="relative w-full h-screen bg-grey">
    <canvas ref="canvasRef" class="absolute top-0 left-0 w-full h-full"></canvas>
    <div class="info z-10 text-black text-4xl p-10">
    <h1>Yuliia Tkachenko</h1>
    <p class='role'>Développeuse Web </p>
    <p class='phrase'> Votre vision, transformée en expériences digitales </p>
     <div>
  <Button
      @click="router.visit('/projects')"
      class="px-6 py-3 text-lg font-semibold"
    >
      Voir mes projets
    </Button>
    </div>
    </div>
  </div>
  </NavigationLayout>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'
import { Button } from '@/components/ui/button'
import NavigationLayout from '@/Layouts/NavigationLayout.vue';

const canvasRef = ref(null)
let animationFrameId = null

onMounted(() => {
  const canvas = canvasRef.value
  const ctx = canvas.getContext('2d')

  function resizeCanvas() {
    canvas.width = window.innerWidth
    canvas.height = window.innerHeight
  }

  resizeCanvas()
  window.addEventListener('resize', resizeCanvas)

  // Параметры волн
  const waves = [
    { amplitude: 50, wavelength: 0.01, speed: 0.02, yOffset: 150, color: 'rgba(255,0,150,0.4)' },
    { amplitude: 30, wavelength: 0.02, speed: 0.015, yOffset: 200, color: 'rgba(0,200,255,0.3)' },
    { amplitude: 20, wavelength: 0.015, speed: 0.01, yOffset: 250, color: 'rgba(150,0,255,0.2)' },
  ]

  let t = 0

  function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height)

    waves.forEach(wave => {
      ctx.beginPath()
      for (let x = 0; x < canvas.width; x++) {
        const y =
          wave.amplitude * Math.sin(x * wave.wavelength + t * wave.speed) +
          wave.yOffset
        ctx.lineTo(x, y)
      }
      ctx.strokeStyle = wave.color
      ctx.lineWidth = 2
      ctx.stroke()
    })

    t += 1
    animationFrameId = requestAnimationFrame(draw)
  }

  draw()

  onBeforeUnmount(() => {
    cancelAnimationFrame(animationFrameId)
    window.removeEventListener('resize', resizeCanvas)
  })
})

const technologies = ref([
  { name: 'Vue.js', icon: '/images/homepage/vuedotjs.svg' },
  { name: 'Laravel', icon: '/images/homepage/laravel.svg' },
  { name: 'PHP', icon: '/images/homepage/php.svg' },
  { name: 'JavaScript', icon:'/images/homepage/javascript.svg' },
  { name: 'WordPress', icon: '/images/homepage/wordpress.svg'}
])
</script>
<style scoped>

@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Birthstone&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Petit+Formal+Script&family=Sofia&family=Story+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Birthstone&family=Cormorant+Infant:ital,wght@0,300..700;1,300..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Petit+Formal+Script&family=Sofia&family=Story+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Birthstone&family=Cormorant+Infant:ital,wght@0,300..700;1,300..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Ovo&family=Petit+Formal+Script&family=Sofia&family=Story+Script&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap');



div.relative{
  background-color:rgb(230, 230, 230);
  display:flex;
  flex-direction: column;
  justify-content: center;
  align-self: center;
  align-items: center;
}
div.info{
  display:flex;
  flex-direction: column;
  justify-content: center;
  align-self: center;
  align-items: center;
  gap:28px;
  padding-top:100px;

}
h1{
  font-size: 60px;
  font-weight: 500;
  font-family: "Merriweather", serif;
  font-optical-sizing: auto;
  font-style: normal;
  line-height: 1.1;
  
}
p.role{
  font-size:40px;
  font-weight: 200;
  font-family: "Merriweather", serif;
  font-optical-sizing: auto;
  font-style: normal;
  margin-top: -10px;
  

}
p.phrase{
   font-size:25px;
   font-family: "Cormorant Infant", serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  opacity: 0.85; /* делает мягче и эстетичнее */
  max-width: 650px; 
}

button{
  cursor:pointer;
  background-color: rgba(255,0,150,0.7);
  width: 300px;
  height:50px;
  font-family: "Tinos", serif;
  font-weight: 400;
  font-style: normal;
  border-radius: 8px;
  
}
button:hover{
   background-color: rgba(255,0,150,0.9);
   transition: 0.25s;
}

.tech-container{
  display:flex;
  flex-wrap:wrap;
  justify-content: center;
  gap:20px;
  margin:auto;
  padding:0 20px;

}
.tech-card{
  padding:20px 0;
  width:200px;
  text-align: center;
  margin:auto;
  border:2px solid;
  border-radius:12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  transition: transform 0.3s, box-shadow 0.3s;
  cursor: default;
}
.tech-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
.tech-container:has(.tech-card:nth-last-child(2)) {
  justify-content: center;
}

.tech-container:has(.tech-card:nth-last-child(1)) {
  justify-content: center;
}

.tech-card:nth-child(3n + 1) {
  border-color: rgba(150,0,255,0.2);
}
.tech-card:nth-child(3n+2){
  border-color:rgba(0,200,255,0.3);
}
.tech-card:nth-child(3n) {
  border-color: rgba(255,0,150,0.4);
}
.tech-title {
  font-size: 36px;
  font-weight: 200;
  text-align: center;
  margin-top:30px;
  margin-bottom: 10px;
  font-family: "Merriweather", serif;
}

.tech-subtitle {
  font-size: 18px;
  text-align: center;
  margin-bottom: 40px;
  font-family: "Cormorant Infant", serif;
  opacity: 0.8;
}
.tech-card img{
  margin:auto;
}

</style>