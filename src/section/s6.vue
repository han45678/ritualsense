<template>
  <article class="s6" ref="s6">
    <div class="wrapper">
      <div class="text">
        <img data-aos="fade-up" class="title" src="./s6/title.svg" alt="title">
        <img data-aos="fade-up" class="text_pic hidden md:block" src="./s6/text.svg" alt="text">
      </div>
      <div class="pic">
        <img data-aos="zoom-in" class="main_pic" src="./s6/pic.svg" alt="pic">
        <img data-aos="fade-up" class="text_pic block md:hidden" src="./s6/text.svg" alt="text">
      </div>
    </div>
    <div class="bg-o1 bg1"></div>
    <div class="bg-o1 bg2"></div>
  </article>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s6 {
  position: relative;overflow: hidden;
  background: linear-gradient(180deg, #E7380D 11.04%, #EA6000 77.8%);

  .wrapper {
    display: flex;
    flex-wrap: wrap;
    padding: size(125) 0;
    position: relative;
    z-index: 2;

    @media screen and (max-width: 767px) {
      padding: sizem(60) sizem(30) sizem(50) sizem(30);
    }

    .text {
      width: 60%;
      text-align: center;
      padding-left: size(165);
      padding-right: size(115);

      @media screen and (max-width: 767px) {
        width: 100%;
        padding: 0;
      }

      .title {
        margin-top: size(50);
        width: size(570);

        @media screen and (max-width: 767px) {
          margin-top: 0;
          width: sizem(210);
          margin-bottom: sizem(35);
        }
      }

      .text_pic {
        margin-top: size(100);
        width: 100%;
        max-width: size(860);
      }
    }

    .pic {
      width: 40%;

      @media screen and (max-width: 767px) {
        width: 100%;
      }

      img {
        width: 100%;

        &.main_pic {
          width: size(820);

          @media screen and (max-width: 767px) {
          width: sizem(220);
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: sizem(30);
          }
        }

        &.text_pic {
          max-width: sizem(320);
        }
      }
    }
  }
  .bg1{
    left: size(-618);
    top: size(-836);
    width: size(1672);
    @media screen and (max-width: 767px) {
      left: sizem(-223);
      top: sizem(-181);
      width: sizem(481);
    }
  }
  .bg2{
    right: size(-496);
    top: size(84);
    width: size(1672);
    @media screen and (max-width: 767px) {
      right: sizem(-147); 
      top: sizem(139);
      width: sizem(480);
    }
  }
}
</style>