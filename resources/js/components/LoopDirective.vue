<!--
<script setup lang="ts">
import {ref} from "vue";

const cocktailListInit: string[] = ["Diggy","Bro-hi","Shinnosuke"];
const cocktailList = ref(cocktailListInit);
</script>

<template>
    <ul>
        <li
            v-for="cocktailName in cocktailList"
            v-bind:key="cocktailName">
            {{cocktailName}}
        </li>
    </ul>
    <ul>
        <li
            v-for="(cocktailName,index) in cocktailList"
            v-bind:key="cocktailName">
            {{cocktailName}}(インデックス{{index}})
        </li>
    </ul>
</template>



<script setup lang="ts">
import {ref} from "vue";

const cocktailListInit: {[key:number]:string} = {
    1000:"Diggy",
    2000:"Bro-hi",
    3000:"Shinnosuke"

};
const cocktailList = ref(cocktailListInit);
</script>

<template>
    <ul>
        <li
            v-for="(cocktailName,id) in cocktailList"
            v-bind:key="'cocktailList' + id">
            IDが{{id}}のメンバーは{{cocktailName}}
        </li>
    </ul>
    <ul>
        <li
            v-for="(cocktailName,id,index) in cocktailList"
            v-bind:key="'cocktailListWithIdx' + id">
            {{index + 1}}:IDが{{id}}のメンバーは{{cocktailName}}
        </li>
    </ul>
</template>



<script setup lang="ts">
import {ref} from "vue";

const cocktailListInit = new Map<number,string>();
cocktailListInit.set(1000,"Diggy");
cocktailListInit.set(2000,"Bro-hi");
cocktailListInit.set(3000,"Shinnosuke");
const cocktailList = ref(cocktailListInit);
</script>

<template>
    <ul>
        <li
            v-for="[id,cocktailName] in cocktailList"
            v-bind:key="id">
            IDが{{id}}のメンバーは{{cocktailName}}
        </li>
    </ul>
</template>


<script setup lang="ts">
import {ref} from "vue";

const whiteLadyInit: {
    id:number;
    name:string;
    price:number;
    recipe:string;
} = {
    id:2345,
    name:"White lady",
    price:1200,
    recipe:"ジン30ml+コワントロー15ml+レモン果汁+15ml"
};
const whiteLady = ref(whiteLadyInit);
</script>

<template>
    <dl>
        <template
            v-for="(value,key) in whiteLady"
            v-bind:key="key">
            <dt>{{key}}</dt>
            <dd>{{value}}</dd>
        </template>
    </dl>
</template>



<script setup lang="ts">
import {ref} from "vue";

const cocktailDataListInit: Cocktail[] = [
    {id: 2345,name: "White Lady",price: 1200},
    {id: 4412,name: "Blue Hawai",price: 1500},
    {id: 6792,name: "Newyork",price: 1100},
    {id: 8429,name: "Matueni",price: 1500},
];
const cocktailDataList = ref(cocktailDataListInit);

interface Cocketail{
    id:number,
    name:string,
    price:number
}
</script>

<template>
    <ul>
        <li
        v-for="cocktailItem in cocktailDataList"
        v-bind:key="cocktailItem.id">
        {{cocktailItem.name}}の値段は{{cocktailItem.price}}円
        </li>
    </ul>
</template>



<script setup lang="ts">
import {ref} from "vue";

const cocktailDataListInit =new Map<number,Cocktail>();
cocktailDataListInit.set(2345,{id: 2345,name: "White Lady",price: 1200});
cocktailDataListInit.set(4412,{id: 4412,name: "Blue Hawai",price: 1500});
cocktailDataListInit.set(6792,{id: 6792,name: "Newyork",price: 1100});
cocktailDataListInit.set(8429,{id: 8429,name: "Matueni",price: 1500});
const cocktailDataList = ref(cocktailDataListInit);

interface Cocketail{
    id:number,
    name:string,
    price:number
}
</script>

<template>
    <ul>
        <li
        v-for="[id,cocktailItem] in cocktailDataList"
        v-bind:key="id">
        {{cocktailItem.name}}の値段は{{cocktailItem.price}}円
        </li>
    </ul>
</template>
-->


<template>
    <ul>
        <li
            v-for="r in 5"
            v-bind:key="r">
            半径{{r}}の円の円周{{2*r*3.14}}
        </li>
    </ul>
    <select>
        <option v-for="year in 60" v-bind:key="year" v-bind:value="year + 1965">
        {{year + 1965}}年
        </option>
    </select>
</template>