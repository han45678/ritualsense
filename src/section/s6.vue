<template>
  <article class="s6" ref="s6">
    <div class="wrapper">
      <div class="text">
        <img class="title" src="./s6/title.svg" alt="title">
        <img class="text_pic hidden md:block" src="./s6/text.svg" alt="text">
      </div>
      <div class="pic">
        <img class="main_pic" src="./s6/pic.png" alt="pic">
        <img class="text_pic block md:hidden" src="./s6/text.svg" alt="text">
      </div>
    </div>
  </article>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s6 {
  background: linear-gradient(180deg, #E7380D 11.04%, #EA6000 77.8%);

  .wrapper {
    display: flex;
    flex-wrap: wrap;
    padding: size(125) 0;

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
        margin-top: size(150);
        width: 100%;
        max-width: size(570);

        @media screen and (max-width: 767px) {
          margin-top: 0;
          max-width: sizem(210);
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
          max-width: size(824);

          @media screen and (max-width: 767px) {
            max-width: 220px;
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
}
</style>