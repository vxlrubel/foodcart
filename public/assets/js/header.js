

const AppNavbar = Vue.createApp({
    data(){
        return{
            toggle: 'test'
        }
    },
    methods: {
        disableContextMenu(){
            document.addEventListener('contextmenu', function(event) {
                event.preventDefault();
            });
        }
    },
    mounted() {
        // disable context menu
        this.disableContextMenu();
    },
});

AppNavbar.mount('#siteNavbar');
