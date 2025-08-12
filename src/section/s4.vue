<template>
  <article class="s4 " ref="s4">
    <div class="wrapper">
      <div data-aos="fade-up" class="title">
        <img src="./s4/title.svg" alt="svg">
      </div>

      <div class="s_title block md:hidden">
        <p data-aos="fade-up" class="font-['Noto_sans_tc'] text-[#493024]">
          接軌國道1號8號，輕鬆抵達南科生活圈，<br>
          人生第一屋，住近繁華便利首環，<br>
          慢步調府城環，也擁有到高效便捷。
        </p>
      </div>

      <div data-aos="fade-up" class="pic big">
        <img src="./s4/1.jpg" alt="pic">
        <p class="caption">環境實景拍攝</p>
      </div>

      <div class="item item1">
        <div class="text">
          <p data-aos="fade-up" class="hidden md:block font-['Noto_sans_tc'] text-[#493024]">
            接軌國道1號8號，輕鬆抵達南科生活圈，
            人生第一屋，住近繁華便利首環，慢步調府城
            也擁有到高效便捷。
          </p>
          <img data-aos="fade-up" class="text_pic" src="./s4/text_s.svg" alt="text">
        </div>
        <div data-aos="fade-up" class="pic">
          <img src="./s4/2.jpg" alt="pic">
          <p class="caption">情境示意圖</p>
        </div>
      </div>

      <div class="item item2">
        <div class="text">
          <img data-aos="fade-up" class="s_title" src="./s4/s_title01.svg" alt="s_title">
          <p data-aos="fade-up" class="font-['Noto_sans_tc'] text-[#493024]">
            暫時放下3C，低碳純淨中遛狗遇小孩，<br>
            周末孩子輕鬆放電，用自然呵護彼此，<br>
            留一席純淨給全家人。</p>
        </div>
        <div data-aos="fade-up" class="pic">
          <img src="./s4/3.jpg" alt="pic">
          <p class="caption">環境實景拍攝</p>
        </div>
      </div>

      <div class="item item3">
        <div class="text">
          <img data-aos="fade-up" class="s_title" src="./s4/s_title03.svg" alt="s_title">
          <p data-aos="fade-up" class="font-['Noto_sans_tc'] text-[#493024]">
            總計22公頃商業用地+2特色公園，<br>
            比鄰未來富都心，期待每晚邂逅<br>
            繁華不夜城,更能遇見增值夢想。
          </p>
        </div>
        <div data-aos="fade-up" class="pic">
          <img src="./s4/4.jpg" alt="pic">
          <p class="caption">環境實景拍攝</p>
        </div>
      </div>
    </div>
    <div class="bg-o1 bg1"></div>
    <div class="bg-o1 bg2"></div>
    <div class="bg-o1 bg3"></div>
    <div class="bg-o1 bg4"></div>
    <div class="bg-o2 bg5"></div>
    <div class="bg-o2 bg6"></div>
  </article>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s4 {
  background: #EA6000;
  position: relative;
 // background-image: url(./s4/bg.png);

  @media screen and (max-width: 767px) {
  //  background-image: url(./s4/bg_m.png);
  }

  .wrapper {
    position: relative;
    z-index: 2;
    margin-left: size(190);
    margin-right: size(190);
    padding-bottom: size(250);

    @media screen and (max-width: 767px) {
      margin-left: sizem(30);
      margin-right: sizem(30);
      padding-bottom: sizem(60);
    }

    .title {
      padding-top: size(100);
      padding-bottom: size(70);
      text-align: center;

      @media screen and (max-width: 767px) {
        padding-top: sizem(60);
        padding-bottom: sizem(25);
      }

      img {
        width: size(440);

        @media screen and (max-width: 767px) {
          width: sizem(200);
        }
      }
    }

    .s_title {
      text-align: center;
      font-weight: 500;
      line-height: 1.7;
      font-size: sizem(14);
      letter-spacing: sizem(0.7);
      padding-bottom: sizem(25);
    }

    .pic {
      width: 100%;
      position: relative;

      img {
        width: 100%;
      }

      &.big {
        @media screen and (max-width: 767px) {
          margin-bottom: sizem(25);
        }
      }
    }

    .item {
      display: flex;
      flex-wrap: wrap;

      .text {
        font-weight: 500;
        line-height: 1.7;
        font-size: size(24);
        letter-spacing: size(2.4);

        @media screen and (max-width: 767px) {
          font-size: sizem(14);
          letter-spacing: sizem(0.7);
        }
      }

      &.item1 {
        margin-top: size(50);

        @media screen and (max-width: 767px) {
          margin-left: sizem(-30);
          margin-right: sizem(-30);
        }

        .pic {
          width: 62%;
          order: 1;

          @media screen and (max-width: 767px) {
            width: 48%;
          }
        }

        .text {
          width: 38%;
          order: 2;
          padding-left: size(60);

          @media screen and (max-width: 767px) {
            width: 52%;
            padding-left: sizem(15);
            padding-right: sizem(30);
            display: flex;
            align-items: flex-end;
          }

          p {
            margin-top: size(70);
          }

          .text_pic {
            margin-top: size(275);

            @media screen and (max-width: 767px) {
              margin-top: 0;
              width: 100%;
              max-width: sizem(155);
            }
          }
        }
      }

      &.item2 {
        margin-top: size(205);
        @media screen and (max-width: 767px) {
          margin-top: sizem(110);
        }

        .pic {
          width: calc(56% + #{size(190)});
          margin-right: size(-190);

          @media screen and (max-width: 767px) {
            width: 100%;
          }

          img {
            width:100%;

            @media screen and (max-width: 767px) {
              width: 100%;
            }
          }
        }

        .text {
          width: 44%;
          padding-right: size(60);

          @media screen and (max-width: 767px) {
            width: 100%;
            padding-right: 0;
            margin-bottom: sizem(25);
          }

          .s_title {
            width: 100%;
            max-width: size(617);

            @media screen and (max-width: 767px) {
              max-width: sizem(280);
            }
          }
        }
      }

      &.item3 {
        margin-top: size(255);

        @media screen and (max-width: 767px) {
          margin-top: sizem(60);
        }

        .pic {
          width: 56%;

          @media screen and (max-width: 767px) {
            width: 100%;
          }
        }

        .text {
          width: 44%;
          padding-right: size(60);

          @media screen and (max-width: 767px) {
            width: 100%;
            padding: 0;
            margin-bottom: sizem(25);
          }

          .s_title {
            width: 100%;
            max-width: size(487);

            @media screen and (max-width: 767px) {
              max-width: sizem(220);
            }
          }
        }
      }
    }
  }
  .bg1{
    right: size(-1072);
    top: size(-800);
    width: size(2360);
    @media screen and (max-width: 767px) {
      right: sizem(-250);
      top: sizem(-106);
      width: sizem(500);
    }
  }
  .bg2 {
    left: size(-740);
    top: size(240);
    width: size(2360);
    @media screen and (max-width: 767px) {
      left : sizem(-168);
      top: sizem(159);
      width: sizem(500);
    }
  }
  .bg3 {
    right: size(-755);
    top: size(1280);
    width: size(2070);
    @media screen and (max-width: 767px) {
      right: sizem(-182);
      top: sizem(384);
      width: sizem(439);
    }
  }
  .bg4 {
    left: size(-1109);
    top: size(2600);
    width: size(2070);
    @media screen and (max-width: 767px) {
      left : sizem(-263);
      top: sizem(740);
      width: sizem(568);
    }
  }
  .bg5 {
    background:linear-gradient(45deg, #F7B400 11.44%, rgba(247, 180, 0, 0.70) 19.05%, rgba(247, 180, 0, 0.45) 26.3%, rgba(247, 180, 0, 0.26) 32.52%, rgba(247, 180, 0, 0.12) 38.39%, rgba(247, 180, 0, 0.03) 42.89%, rgba(247, 180, 0, 0.00) 45.99%);
    right: size(-282);
    top: size(1925);
    width: size(1500);
    @media screen and (max-width: 767px) {
      right : sizem(-530);
      top: sizem(660);
      width: sizem(681);
    }
  }
  .bg6 {
    background:linear-gradient(225deg, #F7B400 11.44%, rgba(247, 180, 0, 0.70) 19.05%, rgba(247, 180, 0, 0.45) 26.3%, rgba(247, 180, 0, 0.26) 32.52%, rgba(247, 180, 0, 0.12) 38.39%, rgba(247, 180, 0, 0.03) 42.89%, rgba(247, 180, 0, 0.00) 45.99%);
    left: size(-250);
    top: size(3050);
    width: size(1400);
    @media screen and (max-width: 767px) {
      left:sizem(-269);
      top: sizem(1130);
      width: sizem(681);
    }
  }
}
</style>
