<template>
  <article class="s5">
    <div class="s5_content">
      <div class="wrapper">
        <div class="title">
          <img src="./s5/title.svg" alt="title">
        </div>
        <div class="pic big">
          <img src="./s5/pic1.jpg" alt="pic">
          <p class="font-['Noto_sans_tc'] text-[#fff]">外觀3D示意圖</p>
        </div>
        <div class="item item1">
          <div class="pic">
            <img src="./s5/pic2.jpg" alt="pic">
            <p class="font-['Noto_sans_tc'] text-[#fff]">外觀3D示意圖</p>
          </div>
          <div class="text">
            <p class="font-['Noto_sans_tc'] text-[#493024]">
              28.3%低公設比，實坪升級減擔首購，<br>
              2-3房青奢享受，方正格局温存幸福，<br>
              雙衛乾濕分離，健康宜居品味再升級。<br>
              渴望成家，更渴望房子不只是睡覺的地方，<br>
              從一天的光景，看見一生的幸福，獻給，<br>
              與文福同樣熱愛生活的年輕人。
            </p>
          </div>
        </div>

        <div class="item item2">
          <div class="item_title">
            <img src="./s5/s_title.svg" alt="s_title">
          </div>
          <div class="pic">
            <div class="pic_item pic1"><img src="./s5/pic3-1.jpg" alt="pic">
              <p class="font-['Noto_sans_tc'] text-[#fff]">業績實景拍攝</p>
            </div>
            <div class="pic_item pic2"><img src="./s5/pic3-2.jpg" alt="pic">
              <p class="font-['Noto_sans_tc'] text-[#fff]">業績實景拍攝</p>
            </div>
            <div class="pic_item pic3"><img src="./s5/pic3-3.jpg" alt="pic">
              <p class="font-['Noto_sans_tc'] text-[#fff]">謙福-謙福二 業績外觀3D</p>
            </div>
            <div class="pic_item pic4"><img src="./s5/pic3-4.jpg" alt="pic">
              <p class="font-['Noto_sans_tc'] text-[#fff]">謙福-謙福 業績實景拍攝</p>
            </div>
          </div>
          <div class="text">
            <p class="font-['Noto_sans_tc'] text-[#493024]">
              每次選地，都期許您的幸福日漸飽滿；久居安南，更伴隨在地一同成長茁壯。<br>
              延續國家建築金獎一金獅獎的建築品質，【謙福建設·文福建築】團隊秉持<br>
              謙遜與匠心，持續為新世代安南人而築，成就最貼近您需求的貼心品牌。
            </p>
          </div>
        </div>
      </div>
    </div>
  </article>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s5 {
  position: relative;
  background-position: center;
  background-repeat: no-repeat;
  background-image: url(./s5/bg_pic01.png);

  @media screen and (max-width: 767px) {
    background-image: url(./s5/bg_pic01_m.png);
  }

  &::after {
    content: "";
    width: size(1080);
    height: size(739);
    background-image: url(./s5/bg_pic02.png);
    background-size: cover;
    background-position: right bottom;
    background-repeat: no-repeat;
    position: absolute;
    bottom: 0;
    right: 0;

    @media screen and (max-width: 767px) {
      width: sizem(246);
      height: sizem(168)
    }
  }

  .s5_content {
    position: relative;

    &::after {
      content: "";
      background-image: url(./s5/bg.jpg);
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0.5;
    }

    .wrapper {
      position: relative;
      z-index: 1;
      margin-left: size(190);
      margin-right: size(190);
      padding-bottom: size(360);

      @media screen and (max-width: 767px) {
        margin-left: sizem(30);
        margin-right: sizem(30);
        padding-bottom: sizem(60);
      }

      .title {
        text-align: center;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        padding-top: size(100);
        padding-bottom: size(30);

        @media screen and (max-width: 767px) {
          padding-top: sizem(60);
          padding-bottom: sizem(25);
        }

        img {
          width: 100%;
          max-width: size(527);

          @media screen and (max-width: 767px) {
            max-width: sizem(238);
          }
        }

      }

      .pic {
        width: 100%;
        position: relative;

        img {
          width: 100%;
        }

        p {
          position: absolute;
          text-align: right;
          font-size: size(15);
          font-weight: 500;
          line-height: 1.7;
          right: size(10);
          bottom: 0;
          letter-spacing: size(1.5);

          @media screen and (max-width: 767px) {
            font-size: sizem(10);
            right: sizem(10);
            letter-spacing: sizem(1.5);
          }
        }
      }

      .item {
        display: flex;
        flex-wrap: wrap;

        .item_title {
          width: 100%;
        }

        .text {
          font-weight: 500;
          line-height: 1.7;
          letter-spacing: size(2.4);
          font-size: size(24);

          @media screen and (max-width: 767px) {
            font-size: sizem(14);
            letter-spacing: sizem(0.7);
          }
        }

        &.item1 {
          margin-top: size(60);

          @media screen and (max-width: 767px) {
            margin-top: sizem(25);
          }

          .pic {
            width: 58%;

            @media screen and (max-width: 767px) {
              width: 100%;
              order: 2;
            }

            img {
              width: 100%;

              @media screen and (max-width: 767px) {
                max-width: sizem(200);
                display: block;
                margin-right: 0;
              }
            }
          }

          .text {
            width: 42%;

            @media screen and (max-width: 767px) {
              width: 100%;
              order: 1;
            }

            p {
              margin-left: size(120);
              margin-top: size(235);

              @media screen and (max-width: 767px) {
                margin-left: 0;
                margin-top: 0;
                margin-bottom: sizem(25);
                text-align: center;
              }
            }
          }
        }

        &.item2 {
          .item_title {
            margin-top: size(340);
            margin-bottom: size(70);

            @media screen and (max-width: 767px) {
              margin-top: sizem(120);
              margin-bottom: sizem(25);
            }

            img {
              width: 100%;
              max-width: size(407);

              @media screen and (max-width: 767px) {
                max-width: sizem(185);
              }
            }
          }

          .pic {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;
            gap: size(25);
            grid-template-areas:
              "pic1 pic2"
              "pic1 pic4"
              "pic3 pic4";

            .pic_item {
              position: relative;

              p {
                right: unset;
                left: size(10);

                @media screen and (max-width: 767px) {
                  left: sizem(10);
                }
              }

              img {
                width: 100%;
                height: 100%;
                object-fit: cover;
              }

              &.pic1 {
                grid-area: pic1;
              }

              &.pic2 {
                grid-area: pic2;
              }

              &.pic3 {
                grid-area: pic3;
              }

              &.pic4 {
                grid-area: pic4;
              }
            }

          }

          .text {
            margin-top: size(68);

            @media screen and (max-width: 767px) {
              margin-top: sizem(25);
            }
          }
        }

      }
    }
  }
}
</style>