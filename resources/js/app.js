import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Layout from './Shared/Layout.vue';

createInertiaApp({
    progress: {
        color: 'red',
        showSpinner: true
    },
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        let page = pages[`./Pages/${name}.vue`];
        page.default.layout ??= Layout;
        return page;
    },
    // resolve: name => {
    //     const pages = import.meta.glob('./Pages/**/*.vue');
    //     return pages[`./Pages/${name}.vue`]().then((page) => {
    //         page.default.layout ??= Layout;
    //         return page;
    //     });
    // },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
});
