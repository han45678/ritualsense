<template>
  <article class="s3" ref="s3">
    <div class="wrapper">
      <div class="item item1">
        <div class="text">
          <h3 data-aos="fade-up">
            <img src="./s3/title01.svg" alt="title">
          </h3>
          <p data-aos="fade-up" class="font-['Noto_sans_tc'] text-[#493024]">
            步出靜巷，迎接早餐店、小吃攤、<br>
            7-ELEVEN便利生活圈，<br>
            不間斷的繁華，喚醒名為悠閒的味蕾。
          </p>
        </div>
        <div data-aos="fade-up" class="pic pic1">
          <img src="./s3/pic01.jpg" alt="pic">
          <p class="font-['Noto_sans_tc'] text-[#fff]">情境示意圖</p>
        </div>
        <div data-aos="fade-up" class="pic pic2">
          <img src="./s3/pic02.jpg" alt="pic">
          <p class="font-['Noto_sans_tc'] text-[#fff]">情境示意圖</p>
        </div>
        <img data-aos="fade-up" class="text_pic" src="./s3/text01.svg" alt="text">
      </div>
      <div class="item item2">
        <div class="text">
          <h3 data-aos="fade-up">
            <img src="./s3/title02.svg" alt="title">
          </h3>
          <p data-aos="fade-up" class="font-['Noto_sans_tc'] text-[#493024]">
            新婚小家庭，不必遠離明星學區，<br>
            求學路上讓孩子不只贏在起跑點，<br>
            更要讓他多睡一點。
          </p>
        </div>
        <div data-aos="fade-up" class="pic pic1">
          <img src="./s3/pic03.jpg" alt="pic">
          <p class="font-['Noto_sans_tc'] text-[#fff]">情境示意圖</p>
        </div>
        <div data-aos="fade-up" class="pic pic2">
          <img src="./s3/pic04.jpg" alt="pic">
          <p class="font-['Noto_sans_tc'] text-[#fff]">情境示意圖</p>
        </div>
        <img data-aos="fade-up" class="text_pic" src="./s3/text02.svg" alt="text">
      </div>
    </div>
    <img class="bg bg1 hidden md:block" src="./s3/bg01.png" alt="bg">
    <img class="bg bg2 hidden md:block" src="./s3/bg02.png" alt="bg">
    <img class="bg bg3 hidden md:block" src="./s3/bg03.png" alt="bg">

    <img class="bg_m block md:hidden" src="./s3/bg_m.png" alt="bg">
  </article>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s3 {
  padding-top: size(205);
  padding-bottom: size(225);
  background-image: url(./s3/bg.jpg);
  position: relative;

  .wrapper {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    z-index: 1;

    .item {
      display: flex;
      flex-wrap: wrap;
      margin-left: size(190);
      margin-right: size(190);
      position: relative;

      @media screen and (max-width: 767px) {
        margin-left: sizem(30);
        margin-right: sizem(30);
      }

      .text {
        width: 38%;

        @media screen and (max-width: 767px) {
          width: 100%;
        }

        h3 {
          margin-bottom: size(50);

          @media screen and (max-width: 767px) {
            margin-bottom: sizem(25);
          }

          img {
            width: 100%;
            max-width: size(458);

            @media screen and (max-width: 767px) {
              max-width: sizem(206);
            }
          }
        }

        p {
          font-weight: 500;
          line-height: 1.7;
          font-size: size(24);
          letter-spacing: size(2.4);

          @media screen and (max-width: 767px) {
            font-size: sizem(14);
            letter-spacing: sizem(0.7);
            margin-bottom: sizem(20);
          }
        }
      }

      .pic {
        width: 100%;
        position: relative;

        p {
          position: absolute;
          bottom: 0;
          right: size(10);
          text-align: right;
          font-size: size(15);
          font-weight: 500;
          line-height: 170%;
          letter-spacing: size(1.5);
          @media screen and (max-width: 767px) {
            font-size: sizem(15);
            right: sizem(10);
            letter-spacing: sizem(1.5);
          }
        }

        img {
          width: 100%;
        }

        &.pic1 {
          width: 62%;

          @media screen and (max-width: 767px) {
            max-width: sizem(215);
            margin-left: auto;
          }
        }

        &.pic2 {
          max-width: size(1239);
          margin-top: size(40);

          @media screen and (max-width: 767px) {
            margin-left: sizem(-30);
            max-width: sizem(280);
          }
        }
      }

      .text_pic {
        margin-top: size(75);
        margin-right: size(-190);
        margin-left: auto;
      }

      &.item1 {
        margin-bottom: size(120);

        .text_pic {
          margin: 0;
          width: 170px;
          transform: rotate(90deg);
          transform-origin: bottom right;
          position: absolute;
          bottom: 0;
          right: 30px;
        }
      }

      &.item2 {
        position: relative;

        .text {
          h3 {
            img {
              @media screen and (max-width: 767px) {
                width: sizem(310);
              }
            }
          }
        }

        .pic {
          &.pic2 {
            margin-left: auto;
            @media screen and (max-width: 767px) {
              width: sizem(310);
              margin-right: auto;
            }
          }
        }

        .text_pic {
          position: absolute;
          bottom: 0;
          left: 0;
          @media screen and (max-width: 767px) {
            width: sizem(11);
            left: sizem(-30);
          }
        }
      }
    }
  }

  .bg {
    position: absolute;

    &.bg1 {
      right: 0;
      top: 0;
      width: size(780);
    }

    &.bg2 {
      left: size(-700);
      top: size(585);
      width: size(1400);
    }


    &.bg3 {
      right: size(-625);
      top: size(2725);
      width: size(1250);
    }
  }

  .bg_m{
    position: absolute;
    width: siezm(1044);
    top: 0;
    left: 50%;
    transform: translateX(-50%);
  }
}
</style>