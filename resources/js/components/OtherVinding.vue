<!--
<script setup lang="ts">
import {ref} from "vue";

const htmlStr = ref(`<a href="https://vuejs.org//">Vue.jsのTOPページ</a>`);
</script>

<template>
<section>{{htmlStr}}</section>
<section v-html="htmlStr"></section>

<section v-pre>
    <p v-on:click="showHello">{{hello!}}</p>
</section>
</template>



<script setup lang="ts">
import {ref} from "vue";

const price = ref(1000);
</script>

<template>
    <section>
        <input type="number" v-model="price">円<br/>
        <p>金額は{{price}}円です。</p>
        <p v-once>金額は{{price}}円です。</p>
    </section>
</template>
-->


<script setup lang="ts">
import {ref} from "vue";

const hello = ref("こんにちは！");
</script>

<template>
    <p v-cloak>{{hello}}</p>
</template>

<style>
[v-cloak]{
    display: none;
}
</style>