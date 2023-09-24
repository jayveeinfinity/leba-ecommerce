//******************** Inertia Vue ****************************//
import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/vue3';

//********************** Layouts ****************************//
import LandingLayout from '../js/Shared/Layouts/Landing';
import CorporateUILayout from '../js/Shared/Layouts/CorporateUI';

//******************** FontAwesome ****************************//
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faArrowRotateLeft, faCar, faCheck, faEdit, faFileExport, faGauge, faPlus, faReceipt, faTimes, faTrash, faUsers } from '@fortawesome/free-solid-svg-icons';
// import { faWhatsappSquare, faFacebook, faInstagramSquare, faSquareYoutube, faLinkedin, faWhatsapp } from '@fortawesome/free-brands-svg-icons';
library.add(faGauge, faCar, faUsers, faPlus, faEdit, faTrash, faReceipt, faFileExport, faCheck, faTimes, faArrowRotateLeft);

createInertiaApp({
    resolve: async name => {
        let page = (await import(`./Pages/${name}`)).default;
    
        //if(name.startsWith("Admin/")) {
            page.layout ??= CorporateUILayout;
        //} else {
        //    page.layout ??= LandingLayout;
        //}
    
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Link", Link)
            .component("Head", Head)
            .component('FontAwesomeIcon', FontAwesomeIcon)
            .mount(el)
    },
    title: title => `${title} Leba E-commerce`,
    // progress: false
    progress: {
        color: '#043a54',
    }
});