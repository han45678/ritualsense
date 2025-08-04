<template>
  <article class="s1 relative" id="s1">
		<!--  --><img src="./s1/mo.jpg" class="t0">
		<img src="./s1/tl.svg" class="topl">
		<img src="./s1/logo.svg" class="logo" data-aos="fade-up" data-aos-delay="0">
    <div class="t1" data-aos="fade-up" data-aos-delay="200">大坪林雙捷運｜第一環正核心｜居遊1-4房</div>
    
  </article>
</template>

<style lang="scss" scoped>  
@import '@/assets/style/function.scss';



.s1 {
 // @apply relative w-full h-screen;
  // height: size(1080);
  min-height: size(900);
  max-height: size(1080);
  height: 100vh;
  font-size:size(40);
  color: #FFF;
  line-height: 1.5;
  display: flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  background: url("./s1/bg.svg");
  background-position: 50% 50%;
  background-size:cover;
  // overflow: hidden;
  // background: #0005;


  .t0{position: absolute;width: 100%;top: 0;left: 0; 
	pointer-events: none;opacity: 0.0;z-index: 50;}
  .logo{position: absolute;left: 0;right: 0;top:calc(50% + #{size(363 - 1080 * .5)});
    width: size(501);margin: auto;}
  .t1{position: absolute;left: 0;right: 0;top:calc(50% + #{size(765 - 1080 * .5)});margin: auto;text-align: center;font-size:size(70);font-weight: 700;}
  .topl{position: absolute;top:size(60);left: 0;width:size(260);}
  
}

  
/* 螢幕尺寸標準 */
/* 平板尺寸 */
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {}

@media screen and (max-width: 767px) {

  .s1 {
    // height:calc(100vh - 63px);
    height: sizem(604);
    min-height: sizem(604);
    max-height: sizem(604);
    font-size:sizem(23);
    
  background-image: url("./s1/bgm.svg");
  background-position: 48% 50%;
  background-size:265% 100%;
    .logo{width:sizem(210);top:sizem(260);}
    .t1{font-size:sizem(17);top:sizem(410);}
    .topl{top:0;width:sizem(150);}
  }
}
</style>
<script setup>
import { computed, getCurrentInstance, ref ,inject} from 'vue';
const globals = getCurrentInstance().appContext.config.globalProperties;

const isMobile = computed(() => globals.$isMobile());

const smoothScroll = inject('smoothScroll')
const scrollTo = (el) => {
  smoothScroll({
    scrollTo: document.querySelector(el)
  })
}
</script>