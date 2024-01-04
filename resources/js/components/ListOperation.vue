<!--
<script setup lang="ts">
import {ref,computed} from "vue";

const cocktailDataListInit: Cocktail[] =[
    {id:2345,name:"White Lady",price:1200},
    {id:4412,name:"Blue Hawai",price:1500},
    {id:6792,name:"NewYouk",price:1100},
    {id:8429,name:"Matueni",price:1500}
];
const cocktailDataList = ref(cocktailDataListInit);
const cocktail1500 = computed(
    ():Cocktail[]=>{
        const newList = cocktailDataList.value.filter(
            (cocktailItem: Cocktail):boolean => {
                return cocktailItem.price == 1500;
            }
        );
        return newList;
    }
);

interface Cocktail{
    id:number;
    name:string;
    price:number;
}
</script>

<template>
    <section>
        全てのカクテルリスト
        <ul>
            <li>White Ladyの値段は1200円</li>
            <li>Bule Hawaiの値段は1500円</li>
            <li>NewYorkの値段は1100円</li>
            <li>Matueniの値段は1500円</li>
        </ul>
    </section>
    <section>
        値段が1500円のカクテルリスト
        <ul>
            <li
                v-for="cocktailItem in cocktail1500"
                v-bind:key="'cocktail1500' + cocktailItem.id">
                {{cocktailItem.name}}の値段は{{cocktailItem.price}}円
            </li>
        </ul>
    </section>
</template>



<script setup lang="ts">
import {ref} from "vue";

const cocktailListInit: string[] = ["White Lady","Blue Hawai","NewYork"];
const cocktailList = ref(cocktailListInit);
const changeCocktailList = (): void =>{
    cocktailList.value=["Pralaica","XYZ","Manhattan"];
};
const addCocktailList = (): void => {
    cocktailList.value.push("BlueMoon");
};
const deleteFromCocktailList = (): void => {
    cocktailList.value.pop();
}
</script>

<template>
    <ul>
        <li
        v-for="(cocktailName,index) in cocktailList"
        v-bind:key="cocktailName">
        {{cocktailName}}(インデックス({{index}}))
        </li>
    </ul>
    <p>
        CocktailListを
        <button v-on:click="changeCocktailList">変更</button>
    </p>
    <p>
        CocktailListの末尾に[ブルームーン]を
        <button v-on:click="addCocktailList">追加</button>
    </p>
    <p>
        CocktailListの末尾から末尾の要素を
        <button v-on:click="deleteFromCocktailList">削除</button>
    </p>
</template>



<script setup lang="ts">
import {ref} from "vue";

const cocktailListInit = new Map<number,string>();
cocktailListInit.set(2345,"White Lady");
cocktailListInit.set(4412,"Blue Hawai");
cocktailListInit.set(6792,"NewYork");
const cocktailList = ref(cocktailListInit);
const changeCocktailList = (): void => {
    cocktailList.value.clear();
    cocktailList.value.set(3416,"Pralaica");
    cocktailList.value.set(5517,"XYZ");
    cocktailList.value.set(7415,"Manhattan");
};
const addCocktailList = (): void => {
    cocktailList.value.set(8894,"Blue Moon");
};
const deleteFromCocktailList = (): void => {
    cocktailList.value.delete(5517);
};
</script>

<template>
    <ul>
        <li
            v-for="[id,cocktailName] in cocktailList"
            v-bind:key="id">
            IDが{{id}}のカクテルは{{cocktailName}}
        </li>
    </ul>
    <p>
        CocktailListを
        <button v-on:click="changeCocktailList">変更</button>
    </p>
    <p>
        CocktailListの末尾に[ブルームーン]を
        <button v-on:click="addCocktailList">追加</button>
    </p>
    <p>
        CocktailListから5517のXYZを
        <button v-on:click="deleteFromCocktailList">削除</button>
    </p>
</template>
-->


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
const changeWhiteLadyPrice = (): void => {
    whiteLady.value.price = 1500;
};
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
    <p>
        価格を1500円に
        <button v-on:click="changeWhiteLadyPrice">変更</button>
    </p>
</template>