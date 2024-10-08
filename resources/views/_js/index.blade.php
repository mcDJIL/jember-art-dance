@push('script')
    
    <script>
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
    </script>

@endpush