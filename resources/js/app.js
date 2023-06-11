/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import IntroductionComponent from './components/Home/IntroductionComponent.vue';
import AdoptionCardsComponent from './components/Home/AdoptionCardsComponent.vue';
import ActionComponent from './components/Home/ActionComponent.vue';
import FriendCardComponent from './components/Home/FriendCardComponent.vue';
import NewsCardComponent from './components/News/NewsCardComponent.vue';
import NewsListComponent from './components/News/NewsListComponent.vue';
import ActionsComponent from './components/News/ActionsComponent.vue';
import HotelActionsComponent from './components/Hotels/ActionsComponent.vue';
import HotelCardComponent from './components/Hotels/HotelCardComponent.vue';
import HotelListComponent from './components/Hotels/HotelListComponent.vue';



app.component('example-component', ExampleComponent);
app.component('inicio-component', IntroductionComponent);
app.component('adoption-component', AdoptionCardsComponent);
app.component('actions-component', ActionComponent);
app.component('friend-card', FriendCardComponent);
app.component('news-card', NewsCardComponent);
app.component('news-list', NewsListComponent);
app.component('actions-list', ActionsComponent);
app.component('hotels-list', HotelListComponent);
app.component('hotels-card', HotelCardComponent);
app.component('hotels-actions', HotelActionsComponent);






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
