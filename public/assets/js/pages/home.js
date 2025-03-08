const App = Vue.createApp({
    data() {
        return {
            collectionStatus: '',
            products : [],
            categories: [],
            getProducts: [],
            filteredProducts: [],
            swiper: null,
            statuses: ["new collection", "best sells", "fresh eats"],
            activeStatus: null,
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
        },
        showProductDetails(){
            const productDetails = new bootstrap.Modal(document.getElementById('showproductdetails'));
            productDetails.show();
        },
        newCollectionClass( getStatus ){
            console.log( getStatus )
            this.collectionStatus = getStatus;
        },
        async fetchFeaturedCategories(){
            const response = await axios.get("assets/data/products.json");
            this.categories = response.data;
            this.$nextTick(this.initFeaturedCategories);

        },
        initFeaturedCategories(){
            new Swiper(".featured-categories", {
                loop: true,
                speed: 1000,
                spaceBetween : 10,
                freeMode: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    300: {
                      slidesPerView: 2
                    },
                    768: {
                      slidesPerView: 4
                    },
                    992: {
                      slidesPerView: 5
                    },
                    1200: {
                      slidesPerView: 6
                    },
                    1400: {
                      slidesPerView: 7
                    },
                }
            });
        },
        menufacturerSlider(){
            const configureBreakpoints = {
                300: {
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
            const config = {
                loop: true,
                speed: 1000,
                spaceBetween : 10,
                freeMode: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: configureBreakpoints
            }
            new Swiper( '.menufacturers-slider', config );
        },
        promoProductSlider(){
            new Swiper('.promo-products-slider', {
                loop: true,
                speed: 1000,
                spaceBetween : 10,
                freeMode: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    768: {
                      slidesPerView: 2
                    },
                    992: {
                      slidesPerView: 3
                    },
                    1400: {
                      slidesPerView: 4
                    }
                }
            });
        },
        async fetchProduct2(){
            const response = await axios.get('assets/data/products-2.json');
            this.getProducts = response.data.products;
            this.filteredProducts = this.getProducts;
            this.$nextTick(() => this.initProduct2Swiper());
        },
        initProduct2Swiper(){
            this.swiper = new Swiper('.product-slider2', {
                loop: true,
                spaceBetween: 10,
                freeMode: true,
                navigation: {
                    nextEl: '.next-slide',
                    prevEl: '.prev-slide'
                },
                breakpoints: {
                    576: {
                      slidesPerView: 2
                    },
                    768: {
                      slidesPerView: 3
                    },
                    1200: {
                      slidesPerView: 4
                    }
                }
            });
        },
        filterProducts(status) {
            this.activeStatus = status; // Update active status
            this.filteredProducts = this.getProducts.filter(product => product.status === status);
            this.updateSwiper();
        },
        formatStatus(status) {
            return status.charAt(0).toUpperCase() + status.slice(1);
        },
        updateSwiper() {
            this.$nextTick(() => this.swiper.update());
        },
        prevSlide() {
            this.swiper.slidePrev();
        },
        nextSlide() {
            this.swiper.slideNext();
        }
    },
    mounted() {
        this.heroSlider();
        this.fetchNewProducts();
        this.fetchFeaturedCategories();
        this.menufacturerSlider();
        this.promoProductSlider();
        this.fetchProduct2();

        new Swiper(".new-collectio-products", {
            grid: {
              rows: 2,
            },
            spaceBetween: 10,
            breakpoints: {
                300: {
                  slidesPerView: 2,
                  grid: {
                    rows: 2,
                  },
                },
                768: {
                  slidesPerView: 3,
                  grid: {
                    rows: 2,
                  },
                },
                992: {
                  slidesPerView: 4,
                  grid: {
                    rows: 2,
                  },
                },
            }
        });
    },
});

App.mount('#app');
