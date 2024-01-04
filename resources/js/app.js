/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
// import jQuery from 'jQuery';
// window.$=jQuery;
import $ from 'jquery';
window.$ = $;

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import MyComponent from './components/MyComponent.vue';
import DispTime from './components/DispTime.vue';
import Vinding1 from './components/Vinding1.vue';
import VindingEvent from './components/VindingEvent.vue';
import DirectiveVinding from './components/DirectiveVinding.vue';
import OtherVinding from './components/OtherVinding.vue';
import ControllDirective from './components/ControllDirective.vue';
import LoopDirective from './components/LoopDirective.vue';
import ListOperation from './components/ListOperation.vue';

// app.component('my-component', MyComponent);
// app.component('disp-time',DispTime);

// const app = createApp({
//     data:function(){
//         return{}
//     },
//     components:{
//         'my-component':MyComponent,
//         'disp-time':DispTime
//     }
// }).mount(('#app'))
app.component('my-component',MyComponent);
app.component('disp-time',DispTime);
app.component('vinding1',Vinding1);
app.component('vinding-event',VindingEvent);
app.component('directive-vinding',DirectiveVinding);
app.component('other-vinding',OtherVinding);
app.component('controll-directive',ControllDirective);
app.component('loop-directive',LoopDirective);
app.component('list-operation',ListOperation);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
