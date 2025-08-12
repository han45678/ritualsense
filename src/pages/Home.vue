<template>
  <div ref="gtmNoScript" />
  <!--loading-->
  <div v-bind:class="{
    'opacity-0': !isLoading,
    'pointer-events-none': !isLoading
  }"
    class="transition-all duration-500	flex-col flex items-center justify-center fixed w-screen h-screen top-0 left-0 bg-white z-[10000]">
    <img class="w-32" src="//h35.banner.tw/img//loading_w.gif" alt="loading" srcset="">
  </div>
  <!-- loading end -->
  <!-- <Nav /> -->
  <div class="home overflow-hidden bg-[#fffff6] font-['Noto_Sans_TC',sans-serif]">
    <S1 />
    <S2 />
    <S3 />
    <S4 />
    <S5 />
    <S6 />
    <Order />
  </div>
</template>



<style lang="scss">
@import '@/assets/style/function.scss';

@keyframes an {
  to {
    transform: translate(0)
  }
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.2s;
}

.fade-enter,
.fade-leave-to {
  opacity: 0;
}
.home{
  background-color: #fff;
  &::before {
    content: "";
    position: fixed;
    background-image: url(@/section/s1/bg.jpg);
    background-size: auto;
    background-position: center;
    top: 0;left: 0;right: 0;bottom: 0;
    @media screen and (max-width: 767px) {
      background-size: sizem(450) auto;
    }
  }
}
.text{
  text-align: justify;
}
  .bg-o1{
    position: absolute;
    background: radial-gradient(50% 50% at 50% 50%, #F29600, #F2960000);
    aspect-ratio: 1/1;
  }
  .bg-o2{
    position: absolute;
    aspect-ratio: 1/1;
    border-radius: 50%;
  }
img {
  display: inline;
  max-width: unset;
  height: unset;
  margin: 0 auto;
}

.caption {
  @apply absolute font-['Noto_sans_tc'];
  bottom: .1em;
  right: .5em;
  font-weight: 400;
  font-size: size(15);
  color: #FFF;
  z-index: 3;
  text-shadow: 0 0 .2em #0009;
  @media screen and (max-width: 767px) {
    font-size: sizem(11);
  }
}


.txt {
  position: relative;
  font-weight: 400;
  letter-spacing: 0;
  line-height: 1.5;
  width: 100%;
  letter-spacing: 0.03em;
  text-align: justify;

  .title {
    font-size: 2.2em;
    margin: 0 auto .5em;
    line-height: 1.5;
    font-weight: 700;
  }

  .subtitle {
    font-size: 1.15em;
    font-weight: 700;
    margin: 0 auto 0.45em;
    line-height: 1.5;
    letter-spacing: 0.06em;
  }

  .hr {
    width: 100%;
    height: size(100);
    margin: -1.5em 0;
  }

  .desc {
    margin: 0 0 0;

    b {}
  }
}

.slider {
  @apply relative;
  z-index: 2;

  .slide-item {
    img {
      width: 100%;
      height: 100%;
      object-fit: cover
    }

  }

  .arrows {
    @apply absolute z-10 w-full flex justify-between top-1/2 -translate-y-1/2;
    padding: 0;
    height: 100%;
    pointer-events: none;
    filter: drop-shadow(0em 0.2em 0.2em rgba(0, 0, 0, .5));

    .prev,
    .next {
      width: 5%;
      display: flex;
      pointer-events: stroke;
      cursor: pointer;

      justify-content: center;
      align-items: center;
      background: url("data:image/svg+xml,%3Csvg width='30' height='51' viewBox='0 0 30 51' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolyline stroke='%23FFF' stroke-width='4' points='3.7,2.8 26.3,25.5 3.7,48.2 '/%3E%3C/svg%3E") no-repeat center;
      background-size: 50% auto;
      transition: background-color .5s;

      &:hover {
        background-color: #0003;
      }
    }

    .prev {
      transform: scaleX(-1);
    }

    img {
      margin: unset;
      @apply cursor-pointer hover:opacity-50;
    }
  }

}

@media screen and (max-width: 767px) {

  .txt {
    line-height: 1.6;
    letter-spacing: 0.01em;

    .title {
      font-size: 1.9em;
      margin: 0 auto 0.3em;
    }

    .subtitle {
      font-size: 1.1em;
    }

    .hr {
      height: sizem(70);
    }
  }

  .slider {
    @apply relative;

    .slide-item {
      img {
        border-radius: 0em;
      }

    }

    .arrows {

      .prev,
      .next {
        width: 8%;
      }
    }

    .splide__pagination {
      @apply absolute flex justify-center w-full;
      display: none;
      bottom: sizem(6.7);
      gap: sizem(2.5);

      li {
        button {
          @apply rounded-full hover:opacity-50;
          width: sizem(10.3);
          height: sizem(3.34);
          border: sizem(1) solid #fff;

          &.is-active {
            @apply bg-white;
          }
        }
      }
    }
  }
}
</style>
<script setup>
import info from "@/info"
import S1 from "@/section/s1.vue"
import S2 from "@/section/s2.vue"
import S3 from "@/section/s3.vue"
import S4 from "@/section/s4.vue"
import S5 from "@/section/s5.vue"
import S6 from "@/section/s6.vue"
import Order from "@/section/order.vue"
// import Nav from "@/layout/navbar.vue"
import { onMounted, ref } from "vue"

import AOS from 'aos';
const isLoading = ref(true)
const gtmNoScript = ref('')

onMounted(() => {
  window.onload = function () {
    isLoading.value = false
    AOS.init({
      offset: 0,
      duration: 1500,
    });
  };

})
</script>
