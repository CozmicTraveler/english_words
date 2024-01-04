<!--
<script setup lang="ts">
import {ref} from "vue";

const randValue = ref("まだです");
const onButtonClick = ():void => {
    const rand = Math.round(Math.random()*10);
    randValue.value = String(rand);
};
</script>

<template>
    <section>
        <button v-on:click="onButtonClick">クリック</button>
        <p>クリックの結果：{{randValue}}</p>
    </section>
</template>



<script setup lang="ts">
import {ref} from "vue";

const mousePointerX = ref(0);
const mousePointerY = ref(0);
const onImgMouseMove = (event: MouseEvent):void => {
    mousePointerX.value = event.offsetX;
    mousePointerY.value = event.offsetY;
};
</script>

<template>
    <section>
        <img src="./assets/logo.png" alt="vueのロゴ" width="200" v-on:mousemove="onImgMouseMove">
        <p>ポインタの位置：x={{mousePointerX}}; y={{mousePointerY}}</p>
    </section>
</template>



<script setup lang="ts">
import {ref} from "vue";

const pBgColor = ref("white");
const onPClick = (bgColor:string):void => {
    if(pBgColor.value==='red'){
        pBgColor.value='white';
        return 0;
    }
    pBgColor.value=bgColor;
}
</script>

<template>
    <p v-on:click="onPClick('red')" v-bind:style="{backgroundColor: pBgColor}">
    ここをクリックすると背景色が変わります。
    </p>
</template>



<script setup lang="ts">
import {ref} from "vue";

const pMsg=ref("イベント前(ここをクリック!)");
const pBgColorEvent = ref("white");
const onPClickWithEvent = (bgColor:string,event: MouseEvent):void => {
    if(pBgColorEvent.value==='green'){
        pBgColorEvent.value='white';
        pMsg.value="切り替え";
        return 0;
    }
    
    pBgColorEvent.value = bgColor;
    pMsg.value = event.timeStamp.toString();
    // pMsg.value = Date(event.timeStamp).toString();
};
</script>

<template>
    <p v-on:click="onPClickWithEvent('green',$event)" v-bind:style="{backgroundColor: pBgColorEvent}">
    {{pMsg}}
    </p>
</template>


<script setup lang="ts">
import {ref} from "vue";

const msg = ref("未送信");
const onFormSubmit = ():void => {
    msg.value = "送信されました。";
};
</script>

<template>
    <form sction="#" v-on:submit.prevent="onFormSubmit">
        <input type="text" required>
        <button type="submit">送信</button>
    </form>
    <p>{{msg}}</p>
</template>
-->

<script setup lang="ts">
import {ref} from "vue";

const msg = ref("まだです！");
const onEnterKey = ():void => {
    msg.value = "エンターキーが押下されました。";
};
const onRightButtonClick = ():void => {
    msg.value = "ボタンが右クリックされました。";
};
const onShiftClick = ():void => {
    msg.value = "シフトを押しながらクリックされました。";
};
</script>

<template>
    <p>{{msg}}</p>
    <input type="text" v-on:keydown.enter="onEnterKey"><br/>
    <button v-on:click.right="onRightButtonClick">右クリック</button><br/>
    <button v-on:click.shift="onShiftClick">シフトボタンを押しながらクリック</button><br/>
</template>