import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Layout from "@/Layouts/Layout.vue";
import Toast, { POSITION } from "vue-toastification";
import "vue-toastification/dist/index.css";
import {notification} from "@/Plugins/notification.js";

createInertiaApp({
    title: title => title === "" ? 'Laravel Inertia Vue' :  'Laravel Inertia Vue | ' + title,
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout ?? Layout
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(Toast,{
                position: POSITION.TOP_RIGHT
            })
            .use(notification)
            .mount(el)
    },
    progress: {
        color: 'blue',
        showSpinner: false,
    },
})
