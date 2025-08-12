<template>
  <article class="s3" ref="s3">
    <div class="wrapper">
      <div class="item item1">
        <div class="text">
          <h3 data-aos="fade-up">
            <img src="./s3/title01.svg" alt="1分鐘 安和路商圈">
          </h3>
          <p data-aos="fade-up" class="font-['Noto_sans_tc'] text-[#493024]">
            步出靜巷，迎接早餐店、小吃攤、<br>
            7-ELEVEN便利生活圈，<br>
            不間斷的繁華，喚醒名為悠閒的味蕾。
          </p>
        </div>
        <div data-aos="fade-up" class="pic pic1">
          <img src="./s3/pic01.jpg" alt="pic">
          <p class="caption">情境示意圖</p>
        </div>
        <div data-aos="fade-up" class="pic pic2">
          <img src="./s3/pic02.jpg" alt="pic">
          <p class="caption">情境示意圖</p>
        </div>
      <!--  <img data-aos="fade-up" class="text_pic" src="./s3/text01.svg" alt="text"> --> 
        <div class="en"><img src="./s3/en.svg" alt="bg"></div>
      </div>
      <div class="item item2">
        <div class="text">
          <h3 data-aos="fade-up">
            <img src="./s3/title02.svg" alt="5分鐘 海佃國小、海佃國中">
          </h3>
          <p data-aos="fade-up" class="font-['Noto_sans_tc'] text-[#493024]">
            新婚小家庭，不必遠離明星學區，<br>
            求學路上讓孩子不只贏在起跑點，<br>
            更要讓他多睡一點。
          </p>
        </div>
        <div data-aos="fade-up" class="pic pic1">
          <img src="./s3/pic03.jpg" alt="pic">
          <p class="caption">環境實景拍攝</p>
        </div>
        <div data-aos="fade-up" class="pic pic2">
          <img src="./s3/pic04.jpg" alt="pic">
          <p class="caption">環境實景拍攝</p>
        </div>
        <img data-aos="fade-up" class="text_pic" src="./s3/text02.svg" alt="text">
      </div>
    </div>
    <div class="bg-o1 bg1"></div>
    <div class="bg-o1 bg2"></div>
    <div class="bg-o2 bg3"></div>
    <div class="bg-o2 bg4"></div>
    <!--  
    <img class="bg bg1 hidden md:block" src="./s3/bg01.png" alt="bg">
    <img class="bg bg2 hidden md:block" src="./s3/bg02.png" alt="bg">
    <img class="bg bg3 hidden md:block" src="./s3/bg03.png" alt="bg">
    <img class="bg_m block md:hidden" src="./s3/bg_m.png" alt="bg">
-->
  </article>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s3 {
  padding-top: size(205);
  padding-bottom: size(225);
 // background-image: url(./s3/bg.jpg);
  position: relative;

  .wrapper {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    z-index: 2;

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
            width: size(688);
          //  width: 100%;
          //  max-width: size(458);

            @media screen and (max-width: 767px) {
              width: sizem(210);
            }
          }
        }

        p {
          font-weight: 500;
          line-height: 1.7;
          font-size: size(24);
          letter-spacing: 0.06em;

          @media screen and (max-width: 767px) {
            font-size: sizem(14);
            margin-bottom: 0;
          }
        }
      }

      .pic {
        width: 100%;
        position: relative;

        img {
          width: 100%;
        }

        &.pic1 {
          width: 62%;margin-top:  size(200);

          @media screen and (max-width: 767px) {
            max-width: sizem(215);
            margin-left: auto;
            margin-top:  sizem(20);
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
        @media screen and (max-width: 767px) {
          margin-bottom: sizem(130);
        }
        .en {
          position: relative;
          width: size(758);
          margin:size(60) 0 auto auto ;
          right: size(-190);
          img{width: 100%;}

          @media screen and (max-width: 767px) {
            position: absolute;
            bottom: sizem(0);
            right: sizem(50);
            width: sizem(170);
            img{transform: rotate(90deg);
            transform-origin: 100% 100%;}
          }
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
          width: size(30);
          @media screen and (max-width: 767px) {
            width: sizem(11);
            left: sizem(-30);
          }
        }
      }
      
    }
  }
  
  .bg1{
    right: size(-1537);
    top: size(-836);
    width: size(2317);
    opacity: .4;
    @media screen and (max-width: 767px) {
      right: sizem(-394);
      top: sizem(-140);
      width: sizem(611);
    }
  }
  .bg2{
    left: size(-719);
    top: size(587);
    width: size(2125);
    opacity: .4;
    @media screen and (max-width: 767px) {
      left: sizem(-221);
      top: sizem(186);
      width: sizem(470);
    }
  }
  .bg3{
    background:linear-gradient(315deg, #F7B400 11.44%, rgba(247, 180, 0, 0.70) 19.05%, rgba(247, 180, 0, 0.45) 26.3%, rgba(247, 180, 0, 0.26) 32.52%, rgba(247, 180, 0, 0.12) 38.39%, rgba(247, 180, 0, 0.03) 42.89%, rgba(247, 180, 0, 0.00) 45.99%);
    left: size(-1130);
    top: size(988);
    width: size(2250);
    @media screen and (max-width: 767px) {
      left: sizem(-275);
      top: sizem(373);
      width: sizem(587);
    }
  }
  .bg4{
    background:linear-gradient(135deg, #F7B400 11.44%, rgba(247, 180, 0, 0.70) 19.05%, rgba(247, 180, 0, 0.45) 26.3%, rgba(247, 180, 0, 0.26) 32.52%, rgba(247, 180, 0, 0.12) 38.39%, rgba(247, 180, 0, 0.03) 42.89%, rgba(247, 180, 0, 0.00) 45.99%);
    right: size(-918);
    top: size(2350);
    width: size(2167);
    @media screen and (max-width: 767px) {
      right: sizem(-260);
      top:sizem(840);
      width: sizem(560);
    }
  }

}
</style>