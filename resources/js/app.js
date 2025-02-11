import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';

createInertiaApp({
    resolve: name => import(`./Pages/${name}.vue`),
    setup({el, App, props}) {
        createApp({render: () => h(App, props)}).mount(el);
    },
}).then(r =>(r));

