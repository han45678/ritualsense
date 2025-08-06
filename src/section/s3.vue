<template>
  <article class="s3" ref="s3">
    <div class="wrapper">
      <div class="item item1">
        <div class="text">
          <h3>
            <img src="./s3/title01.svg" alt="title">
          </h3>
          <p class="font-['Noto_sans_tc'] text-[#493024]">
            步出靜巷，迎接早餐店、小吃攤、<br>
            7-ELEVEN便利生活圈，<br>
            不間斷的繁華，喚醒名為悠閒的味蕾。
          </p>
        </div>
        <div class="pic pic1">
          <img src="./s3/pic01.jpg" alt="pic">
          <p class="font-['Noto_sans_tc'] text-[#fff]">情境示意圖</p>
        </div>
        <div class="pic pic2">
          <img src="./s3/pic02.jpg" alt="pic">
          <p class="font-['Noto_sans_tc'] text-[#fff]">情境示意圖</p>
        </div>
        <img class="text_pic" src="./s3/text01.svg" alt="text">
      </div>

      <div class="item item2">
        <div class="text">
          <h3>
            <img src="./s3/title02.svg" alt="title">
          </h3>
          <p class="font-['Noto_sans_tc'] text-[#493024]">
            新婚小家庭，不必遠離明星學區，<br>
            求學路上讓孩子不只贏在起跑點，<br>
            更要讓他多睡一點。
          </p>
        </div>
        <div class="pic pic1">
          <img src="./s3/pic03.jpg" alt="pic">
          <p class="font-['Noto_sans_tc'] text-[#fff]">情境示意圖</p>
        </div>
        <div class="pic pic2">
          <img src="./s3/pic04.jpg" alt="pic">
          <p class="font-['Noto_sans_tc'] text-[#fff]">情境示意圖</p>
        </div>
        <img class="text_pic" src="./s3/text02.svg" alt="text">
      </div>
    </div>
  </article>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s3 {
  padding-top: size(205);
  padding-bottom: size(225);

  .wrapper {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    // max-width: size(1542);

    .item {
      display: flex;
      flex-wrap: wrap;
      margin-left: size(190);
      margin-right: size(190);

      .text {
        width: 38%;

        h3 {
          margin-bottom: size(50);

          img {
            width: 100%;
            max-width: size(458);
          }
        }

        p {
          font-weight: 500;
          line-height: 1.7;
          font-size: size(24);
          letter-spacing: size(2.4);
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
        }

        img {
          width: 100%;
        }

        &.pic1 {
          width: 62%;
        }

        &.pic2 {
          max-width: size(1239);
          margin-top: size(40);
        }
      }

      .text_pic {
        margin-top: size(75);
        margin-right: size(-190);
        margin: 0;
      }

      &.item1 {
        margin-bottom: size(120);
      }

      &.item2 {
        position: relative;

        .pic2 {
          margin-left: auto;
        }

        .text_pic {
          position: absolute;
          bottom: 0;
          left: 0;
        }
      }
    }
  }
}
</style>