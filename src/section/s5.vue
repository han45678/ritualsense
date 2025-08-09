<template>
  <article class="s5">
    <div class="s5_content">
      <div class="wrapper">
        <div class="title">
          <img src="./s5/title.svg" alt="title">
        </div>
        <div class="pic big">
          <img src="./s5/pic1.jpg" alt="pic">
        </div>
        <div class="item item1">
          <div class="pic">
            <img src="./s5/pic2.jpg" alt="pic">
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
            <img src="./s5/pic2.jpg" alt="pic">
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

      @media screen and (max-width: 767px) {
        margin-left: sizem(30);
        margin-right: sizem(30);
      }
    }
  }
}
</style>