<!--
<script setup lang="ts">
import {computed,ref} from "vue";

const number = ref(80);
const showOrNot = computed(
    (): boolean => {
        let showOrNot = false;
        const rand = Math.round(Math.random()*100);
        if(rand>=50){
            showOrNot = true;
        }
        return showOrNot;
    }
);
</script>

<template>
    <p v-if="number >= 50">
    condition1
    </p>
    <p v-if="Math.round(Math.random()*100) >= 50">
    condition2
    </p>
    <p v-if="showOrNot">
    condition3
    </p>
</template>



<script setup lang="ts">
import {computed} from "vue";

const randomNumber = computed(
    (): number => {
        return Math.round(Math.random()*100);
    }
);
</script>

<template>
    <p>点数は{{randomNumber}}点で
    <span v-if="randomNumber >= 80">優</span>
    <span v-else-if="randomNumber >= 70">良</span>
    <span v-else-if="randomNumber >= 60">可</span>
    <span v-else>不可</span>
    です</p>
</template>



<script setup lang="ts">
import {computed} from "vue";

const randomNumber = computed(
    (): number => {
        return Math.round(Math.random()*100);
    }
);
</script>

<template>
    <p>点数は{{randomNumber}}点で
    <template v-if="randomNumber >= 80">
    優です。<br/>
    <span style="color: red;">すばらしい！</span>
    </template>
    <template v-if="randomNumber >= 70 && randomNumber < 80">
    良です。<br/>
    <span style="color: green;">よいです！</span>
    </template>
    <template v-if="randomNumber >= 60 && randomNumber < 70">
    可です。<br/>
    <span style="color: blue;">まあまあです。</span>
    </template>
    <template v-else-if="randomNumber < 60">
    不可です。<br/>
    <span style="color: gray;">がんばりましょう。</span>
    </template>
    </p>
</template>
-->


<script setup lang="ts">
import {computed,ref} from "vue";

const number = ref(80);
const showOrNot = computed(
    (): boolean => {
        let showOrNot = false;
        const rand = Math.round(Math.random()*100);
        if(rand>=50){
            showOrNot = true;
        }
        return showOrNot;
    }
);
</script>

<template>
    <section>
        <p v-if="showOrNot">
        Matched!!
        </p>
    </section>
    <section>
        <p v-show="showOrNot">
        Matched!!
        </p>
    </section>
</template>