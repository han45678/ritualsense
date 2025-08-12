<template>
  <article class="s5">
    <div class="s5_content">
      <div class="wrapper">
        <div class="title">
          <img data-aos="fade-up" src="./s5/title.svg" alt="title">
        </div>
        <div data-aos="fade-up" class="pic big">
          <img src="./s5/pic1.jpg" alt="pic">
          <p class="caption">外觀3D示意圖</p>
        </div>
        <div class="item item1">
          <div data-aos="fade-up" class="pic">
            <img src="./s5/pic2.jpg" alt="pic">
            <p class="caption">外觀3D示意圖</p>
          </div>
          <div class="text">
            <p data-aos="fade-up" class="font-['Noto_sans_tc'] text-[#493024]">
              28.3%低公設比，實坪升級減擔首購，2-3房青奢享受，方正格局溫存幸福，雙衛乾濕分離，健康宜居品味再升級。<br /><br />
              渴望成家，更渴望房子不只是睡覺的地方，從一天的光景，看見一生的幸福，獻給，與文福同樣熱愛生活的年輕人。
            </p>
          </div>
        </div>

        <div class="item item2">
          <div data-aos="fade-up" class="item_title">
            <img src="./s5/s_title.svg" alt="s_title">
          </div>
          <div class="pic">
            <div data-aos="fade-up" class="pic_item pic1"><img src="./s5/pic3-1.jpg" alt="pic">
              <p class="caption">業績實景拍攝</p>
            </div>
            <div data-aos="fade-up" class="pic_item pic2"><img src="./s5/pic3-2.jpg" alt="pic">
              <p class="caption">業績實景拍攝</p>
            </div>
            <div data-aos="fade-up" class="pic_item pic3"><img src="./s5/pic3-3.jpg" alt="pic">
              <p class="caption">謙福-謙福二 業績外觀3D</p>
            </div>
            <div data-aos="fade-up" class="pic_item pic4"><img src="./s5/pic3-4.jpg" alt="pic">
              <p class="caption">謙福-謙福 業績實景拍攝</p>
            </div>
          </div>
          <div class="text">
            <p data-aos="fade-up" class="font-['Noto_sans_tc'] text-[#493024]">
              每次選地，都期許您的幸福日漸飽滿；久居安南，更伴隨在地一同成長茁壯。延續國家建築金獎一金獅獎的建築品質，【謙福建設·文福建築】團隊秉持謙遜與匠心，持續為新世代安南人而築，成就最貼近您需求的貼心品牌。
            </p>
          </div>
        </div>
      </div>
    <div class="bg-o1 bg1"></div>
    <div class="bg-o1 bg2"></div>
    <div class="bg-o2 bg3"></div>
    <div class="bg-o2 bg4"></div>
    </div>
  </article>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s5 {
  position: relative;

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
     // background-image: url(./s5/bg.jpg);
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0.5;
    }

    .wrapper {
      position: relative;
      z-index: 2;
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
            
          width:  size(465);
          //padding-right:;
          margin:auto 0 auto auto;

            @media screen and (max-width: 767px) {
              width: 100%;
              order: 1;
            }

            p {/*
              margin-left: size(120);
              margin-top: size(235);*/
              

              @media screen and (max-width: 767px) {
                width: sizem(257);
                margin-left: 0;
                margin-top: 0;
                margin-bottom: sizem(25);
                //text-align: center;
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

              .caption {
                right: auto;
                left:.5em;
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
            margin-top: size(68);width:size(900);
            @media screen and (max-width: 767px) {
              margin-top: sizem(25); width:sizem(264);
            }
          }
        }

      }
    }
  }
  .bg1{
    right: size(-1679);
    top: size(-756);
    width: size(2070);
    @media screen and (max-width: 767px) {
      right: sizem(-220);
      top: sizem(-269);
      width: sizem(460);
      opacity: .4;
    }
  }
  .bg2 {
    left: size(-1236);
    top: size(519);
    width: size(2070);
    opacity: .4;
    @media screen and (max-width: 767px) {
      left : sizem(-155);
      top: sizem(241);
      width: sizem(460);
    }
  }
  .bg3 {
    background:linear-gradient(45deg, #F7B400 11.44%, rgba(247, 180, 0, 0.70) 19.05%, rgba(247, 180, 0, 0.45) 26.3%, rgba(247, 180, 0, 0.26) 32.52%, rgba(247, 180, 0, 0.12) 38.39%, rgba(247, 180, 0, 0.03) 42.89%, rgba(247, 180, 0, 0.00) 45.99%);
    right: size(-835);
    top: size(785);
    width: size(1949);
    @media screen and (max-width: 767px) {
      right: sizem(-339);
      top: sizem(72);
      width: sizem(703);
    }
  }
  .bg4 {
    background:linear-gradient(225deg, #F7B400 11.44%, rgba(247, 180, 0, 0.70) 19.05%, rgba(247, 180, 0, 0.45) 26.3%, rgba(247, 180, 0, 0.26) 32.52%, rgba(247, 180, 0, 0.12) 38.39%, rgba(247, 180, 0, 0.03) 42.89%, rgba(247, 180, 0, 0.00) 45.99%);
    left: size(-624);
    top: size(2138);
    width: size(1948);
    @media screen and (max-width: 767px) {
      left : sizem(-351);
      top: sizem(673);
      width: sizem(703);
    }
  }
}
</style>