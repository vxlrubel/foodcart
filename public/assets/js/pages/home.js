const App = Vue.createApp({
    data() {
        return {
            toggleSubmenu: false,
        };
    },
    methods: {
        heroSlider(){
            const swiper = new Swiper('.swiper', {
                speed: 400,
                spaceBetween: 100,
            });
        }
    },
    mounted() {
        this.heroSlider();
    },
});

App.mount('#app');
