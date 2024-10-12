@push('script')
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {

        const nextDom = document.getElementById('next');
        const prevDom = document.getElementById('prev');
        const carousel = document.querySelector('.carousel');
        const listItem = document.querySelector('.carousel .list');
        const thumbnail = document.querySelector('.carousel .thumbnail');

        nextDom.onclick = function () {
            showSlider('next');
        }

        prevDom.onclick = function () {
            showSlider('prev')
        }

        let timeRunning = 1000;
        let timeAutoNext = 7000;
        let runTimeOut;
        let runAutoRun = setTimeout(() => {
            nextDom.click();
        }, timeAutoNext);

        function showSlider(type) {
            let itemSlider = document.querySelectorAll('.carousel .list .item');
            let itemThumbnail = document.querySelectorAll('.carousel .thumbnail .item');

            if (type == 'next') {
                listItem.appendChild(itemSlider[0]);
                thumbnail.appendChild(itemThumbnail[0]);
                carousel.classList.add('next');
            } else {
                let positionLastItem = itemSlider.length - 1;
                listItem.prepend(itemSlider[positionLastItem]);
                thumbnail.prepend(itemThumbnail[positionLastItem]);
                carousel.classList.add('prev')
            }

            clearTimeout(runTimeOut);
            runTimeOut = setTimeout(() => {
                carousel.classList.remove('next');
                carousel.classList.remove('prev');
            }, timeRunning);

            clearTimeout(runAutoRun);
            runAutoRun = setTimeout(() => {
                nextDom.click();
            }, timeAutoNext);
        }

        // Initialize Swiper
        let swiper = new Swiper('.sanggar-swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            spaceBetween: 10,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // If we need navigation buttons
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // If we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },

            breakpoints: {
                480: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                820: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1080: {
                    slidesPerView: 3,
                    spaceBetween: 120,
                }
            }
        });

        let testimoniSwiper = new Swiper('.testimoni-swiper', {
            effect: 'coverflow',
            centeredSlides: true,
            slidesPerView: 3,
            initialSlide: 2,
            loop: true,
            loopedSlides: 3, // Increase this number
            autoplay: {
                delay: 3000,  // Set delay between slides in milliseconds
                reverseDirection: true,  // Set autoplay direction to left (reverse)
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: '.testimoni-pagination',
            }
        });

        document.getElementById('timeline-lahbako').addEventListener('mouseenter', function() {
            document.getElementById('timeline-lahbako').style.border = '2px solid #1d4ed8';
            document.getElementById('lahbako').style.transform = 'translateY(-10px)';
            document.getElementById('lahbako').style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.3)';
            document.getElementById('lahbako').style.transition = 'all 0.3s ease';
        });
        
        document.getElementById('timeline-lahbako').addEventListener('mouseleave', function() {
            document.getElementById('timeline-lahbako').style.border = '';
            document.getElementById('lahbako').style.transform = '';
            document.getElementById('lahbako').style.boxShadow = '';
        });

        document.getElementById('timeline-2').addEventListener('mouseenter', function() {
            document.getElementById('timeline-2').style.border = '2px solid #1d4ed8';
            document.getElementById('tari-2').style.transform = 'translateY(-10px)';
            document.getElementById('tari-2').style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.3)';
            document.getElementById('tari-2').style.transition = 'all 0.3s ease';
        });
        
        document.getElementById('timeline-2').addEventListener('mouseleave', function() {
            document.getElementById('timeline-2').style.border = '';
            document.getElementById('tari-2').style.transform = '';
            document.getElementById('tari-2').style.boxShadow = '';
        });

        document.getElementById('timeline-3').addEventListener('mouseenter', function() {
            document.getElementById('timeline-3').style.border = '2px solid #1d4ed8';
            document.getElementById('tari-3').style.transform = 'translateY(-10px)';
            document.getElementById('tari-3').style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.3)';
            document.getElementById('tari-3').style.transition = 'all 0.3s ease';
        });
        
        document.getElementById('timeline-3').addEventListener('mouseleave', function() {
            document.getElementById('timeline-3').style.border = '';
            document.getElementById('tari-3').style.transform = '';
            document.getElementById('tari-3').style.boxShadow = '';
        });

        document.getElementById('timeline-4').addEventListener('mouseenter', function() {
            document.getElementById('timeline-4').style.border = '2px solid #1d4ed8';
            document.getElementById('tari-4').style.transform = 'translateY(-10px)';
            document.getElementById('tari-4').style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.3)';
            document.getElementById('tari-4').style.transition = 'all 0.3s ease';
        });
        
        document.getElementById('timeline-4').addEventListener('mouseleave', function() {
            document.getElementById('timeline-4').style.border = '';
            document.getElementById('tari-4').style.transform = '';
            document.getElementById('tari-4').style.boxShadow = '';
        });

        document.getElementById('timeline-5').addEventListener('mouseenter', function() {
            document.getElementById('timeline-5').style.border = '2px solid #1d4ed8';
            document.getElementById('tari-5').style.transform = 'translateY(-10px)';
            document.getElementById('tari-5').style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.3)';
            document.getElementById('tari-5').style.transition = 'all 0.3s ease';
        });
        
        document.getElementById('timeline-5').addEventListener('mouseleave', function() {
            document.getElementById('timeline-5').style.border = '';
            document.getElementById('tari-5').style.transform = '';
            document.getElementById('tari-5').style.boxShadow = '';
        });

        const galeriItems = document.querySelectorAll('.galeri');
        const overlay = document.querySelector('.overlay-galeri');

        // Fungsi saat gambar di-hover
        galeriItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                let teks = item.nextElementSibling;

                overlay.classList.add('active');
                item.classList.add('hovered');
                teks.classList.add('active');
            });

            item.addEventListener('mouseleave', () => {
                let teks = item.nextElementSibling;

                overlay.classList.remove('active');
                item.classList.remove('hovered');
                teks.classList.remove('active');
            });
        });
    });
    </script>

@endpush