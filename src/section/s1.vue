<template>
  <article class="s1 relative" id="s1">
    <div class="wrapper">
      <img data-aos="fade-up" class="title" src="./s1/title.svg" alt="title">
      <img data-aos="fade-up" data-aos-delay="200" class="logo" src="./s1/slogo.svg" alt="logo">
      <img data-aos="fade-up" data-aos-delay="400" class="en" src="./s1/en.svg" alt="en">
      <img data-aos="zoom-in" class="pic" src="./s1/pic.svg" alt="pic">
    </div>
  </article>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s1 {
  height: 100vh;
  min-height: size(900);
  max-height: size(1178);

  @media screen and (max-width: 767px) {
    height: sizem(500);
    min-height: sizem(500);
    max-height: sizem(500);
  }

  .wrapper {
    width: 100%;
    height: 100%;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    &::before {
      content: "";
      position: absolute;
      inset: 0;
      background-image: url(./s1/bg.png);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      will-change: transform;
      transform-origin:100% 0;
      transform: scaleX(1.1);
      animation: sway 5s ease-in-out alternate infinite;
    }

    .title {
      position: absolute;
      top: size(155);
      top: calc(50% + #{size(155 - 1178 * .5)});      
      left: size(218);
      width: size(454);

      @media screen and (max-width: 767px) {
        top: sizem(55);
        left: sizem(35);
        width: sizem(140);
      }
    }
    .logo {
      position: absolute;
      top: size(629);
      top: calc(50% + #{size(629 - 1178 * .5)});      
      left: size(221);
      width: size(437);

      @media screen and (max-width: 767px) {
        top: sizem(305);
        left: sizem(35);
        width: sizem(135);
      }
    }
    .en {
      position: absolute;
      top: size(824);
      top: calc(50% + #{size(824 - 1178 * .5)});      
      left: size(221);
      width: size(437);

      @media screen and (max-width: 767px) {
        top: sizem(384);
        left: sizem(35);
        width: sizem(135);
      }
    }

    .pic {
      position: absolute;
      top: size(125);
      top: calc(50% + #{size(125 - 1178 * .5)});      
      right: size(-410);
      width: size(1410);
      color: #00000012;

      @media screen and (max-width: 767px) {
        top: sizem(127);
        right: sizem(-122);
        width: sizem(291);
      }
    }
  }
}

@keyframes sway {
  to {
    transform:  scaleX(1);
  }

}
</style>