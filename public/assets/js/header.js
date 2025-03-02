const AppNavbar = Vue.createApp({
    data() {
        return {
            toggleSubmenu: false,
            toggleSearchField: false,
        };
    },
    methods: {
        disableContextMenu() {
            document.addEventListener('contextmenu', function (event) {
                event.preventDefault();
            });
        },
        closeSearchField() {
            if(!this.toggleSearchField){
                return;
            }
            this.toggleSearchField = false;
        }
    },
    mounted() {
        // Disable context menu
        this.disableContextMenu();
        // destroy search field
        document.body.addEventListener('click', this.closeSearchField);
    },
    beforeUnmount() {
        // destroy search field
        document.body.removeEventListener('click', this.closeSearchField);
    }
});

AppNavbar.mount('#siteNavbar');
