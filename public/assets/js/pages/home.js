const App = Vue.createApp({
    data() {
        return {
            toggleSubmenu: false,
            products : []
        };
    },
    methods: {
        heroSlider() {
            const progressCircle = document.querySelector(".autoplay-progress svg");
            const progressContent = document.querySelector(".autoplay-progress span");

            new Swiper('.hero-slider', {
                speed: 1000,
                spaceBetween: 100,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
                on: {
                    autoplayTimeLeft(s, time, progress) {
                      progressCircle.style.setProperty("--progress", 1 - progress);
                      progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                    }
                },
                parallax: true,
                grabCursor: true,
                effect: "creative",
                creativeEffect: {
                  prev: {
                    shadow: true,
                    translate: ["-20%", 0, -1],
                  },
                  next: {
                    translate: ["100%", 0, 0],
                  },
                },
            });
        },
        async fetchNewProducts(){
            const response = await axios.get("assets/data/products.json");
            this.products = response.data;
            this.$nextTick(this.initNewProductSlider);

        },
        initNewProductSlider(){
            new Swiper(".new-products", {
                loop: true,
                speed: 1000,
                spaceBetween : 10,
                freeMode: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination   : {
                  el: ".swiper-pagination",
                  clickable: true,
                },
                breakpoints: {
                    576: {
                      slidesPerView: 2
                    },
                    768: {
                      slidesPerView: 3
                    },
                    992: {
                      slidesPerView: 4
                    },
                    1200: {
                      slidesPerView: 5
                    },
                    1400: {
                      slidesPerView: 6
                    },
                }
            });
        }
    },
    mounted() {
        this.heroSlider();
        this.fetchNewProducts();
    },
});

App.mount('#app');
