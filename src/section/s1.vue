<template>
  <article class="s1 relative" id="s1">
    <img class="title hidden md:block" src="./s1/title.svg" alt="title">
    <img class="title block md:hidden" src="./s1/title_m.svg" alt="title">

    <img class="s_title hidden md:block" src="./s1/s_title.svg" alt="s_title">
    <img class="s_title block md:hidden" src="./s1/s_title_m.svg" alt="s_title">

    <img class="pic hidden md:block" src="./s1/pic.png" alt="pic">
    <img class="pic block md:hidden" src="./s1/pic_m.png" alt="pic">
  </article>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s1 {
  min-height: size(1178);
  max-height: size(1178);
  height: 100vh;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: #fff;
  background-size: cover;
  background-image: url(./s1/bg.png);

  @media screen and (max-width: 767px) {
    height: sizem(500);
    min-height: sizem(500);
    max-height: sizem(500);
    background-image: url(./s1/bg_m.png);
  }

  .title {
    position: absolute;
    top: size(155);
    left: size(218);
    width: size(454);

    @media screen and (max-width: 767px) {
      top: sizem(55);
      left: sizem(35);
      width: sizem(140);
    }
  }

  .s_title {
    position: absolute;
    top: size(629);
    left: size(221);
    width: size(437);

    @media screen and (max-width: 767px) {
      top: sizem(305);
      left: sizem(35);
      width: sizem(135);
    }
  }

  .pic {
    position: absolute;
    bottom: 0;
    right: 0;
    width: size(1000);

    @media screen and (max-width: 767px) {
      bottom: sizem(80);
      right: 0;
      width: sizem(170);
    }
  }

}
</style>