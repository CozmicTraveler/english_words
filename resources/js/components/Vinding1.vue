<!--
<script setup lang="ts">
import {ref} from "vue";

const url = ref("https://vuejs.org/");
</script>

<template>
    <p><a v-bind:href="url" target="_blank">Vue.jsのサイト</a></p>
    <p><a :href="url" target="_blank">Vue.jsのサイト(省略形)</a></p>
    <p><a v-bind:href="url + 'guide/introduction.html'" target="_blank">Vue.jsガイドのページ</a></p>
</template>



<script setup lang="ts">
import {ref} from "vue";

const isSendButtonDisabled = ref(true);
</script>

<template>
    <p><button type="button" v-bind:disabled="isSendButtonDisabled">送信</button></p>
</template>



<script setup lang="ts">
import {ref} from "vue";

const widthOrHeight = ref("height");
const widthOrHeightValue = ref(100);
</script>

<template>
    <p><img alt="vueLogo" src="./assets/logo.png" v-bind:[widthOrHeight]="widthOrHeightValue"></p>
</template>


<script setup lang="ts">
import {ref} from "vue";

const imgAttributes = ref({
    src: "/images/logo.png",
    alt: "vueのロゴ",
    width: 75,
    height: 75
});
</script>

<template>
    <p><img v-bind="imgAttributes"></p>
    <p><img v-bind="imgAttributes" title="ロゴです"></p>
    <p><img v-bind="imgAttributes" alt="ロゴです"></p>
</template>



<script setup lang="ts">
import {ref,computed} from "vue";

const msg = ref("こんにちは！世界");
const msgTextRed = ref("red");
const msgTextColor = ref("white");
const msgBgColor = ref("black");
const msgStyles = ref ({
    color: "white",
    backgroundColor: "black"
});
const msgStyles2 = ref ({
    fontSize: "24px"
});
const msgStyles3 = ref({
    color: "pink",
    fontSize: "24px"
});
const textSize = computed(
    ():string => {
        const size = Math.round(Math.random() * 25) + 10;
        return `${size}pt`;
    }
);
</script>

<template>
<p v-bind:style="{color: msgTextRed}">
    {{msg}}
</p>
<p v-bind:style="{color: 'pink'}">
    {{msg}}
</p>
<p v-bind:style="{fontSize: textSize}">
    {{msg}}
</p>
<p v-bind:style="{color: msgTextColor,backgroundColor: msgBgColor}">
    {{msg}}
</p>
<p v-bind:style="{color: msgTextColor,'background-color': msgBgColor}">
    {{msg}}
</p>
<p v-bind:style="msgStyles">
    {{msg}}
</p>
<p v-bind:style="[msgStyles,msgStyles2]">
    {{msg}}
</p>
<p v-bind:style="[msgStyles,msgStyles3]">
    {{msg}}
</p>
<p v-bind:style="[msgStyles3,msgStyles]">
    {{msg}}
</p>
</template>
-->

<script setup lang="ts">
import {ref,computed} from "vue";

const msg = "こんにちは！世界";
const isTextColorRed = ref(true);
const isBgColorBlue = ref(false);
const styles = ref({
    textColorRed: false,
    bgColorBlue: true
});
const computedStyles =computed(
    ():{textColorRed: boolean,bgColorBlue: boolean;} => {
        const randText = Math.round(Math.random());
        let textColorFlg = true;
        if(randText==0){
            textColorFlg = false;
        }
        const randBg = Math.round(Math.random());
        let bgColorFlg = true;
        if(randBg==0){
            bgColorFlg=false;
        }
        return{
            textColorRed: textColorFlg,
            bgColorBlue: bgColorFlg
        };
    }
);
</script>

<template>
<p v-bind:class="{textColorRed: true,bgColorBlue: true}">
    {{msg}}
</p>
<p v-bind:class="{textColorRed: isTextColorRed,bgColorBule: isBgColorBlue}">
    {{msg}}
</p>
<p v-bind:class="{textColorPink: true}">
    {{msg}}
</p>
<p v-bind:class="{'text-color-pink': true}">
    {{msg}}
</p>
<p class="textSize24" v-bind:class="{textColorRed: isTextColorRed,bgColorBlue: isBgColorBlue}">
    {{msg}}
</p>
<p class="textSize24" v-bind:class="styles">
    {{msg}}
</p>
<p v-bind:class="computedStyles">
    {{msg}}
</p>
</template>

<style>
.textColorRed{
    color:red;
}
.text-color-pink{
    color:pink;
}
.bgColorBlue{
    background-color:blue;
}
.textSize24{
    font-size:24px;
}
</style>