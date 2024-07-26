<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"></script>
    <script> //<![CDATA[
        /*
          Sticky Header. Auto hide on scroll bottom, show on scroll top.
          By: www.igniel.com
        */
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("header").classList.remove('show');
            }
            else {
                document.getElementById("header").classList.add('show');
            }
            prevScrollpos = currentScrollPos;
        }
        //]]> </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tabLinks = document.querySelectorAll('.carousel-tabs button');
            var carousel = document.querySelector('#carouselExampleCaptions');
            var carouselInstance = bootstrap.Carousel.getInstance(carousel);

            // Function to update the active tab
            function updateActiveTab(index) {
                tabLinks.forEach((btn, i) => {
                    if (i === index) {
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                });
            }

            // Add click event to tab buttons
            tabLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    var index = Array.from(tabLinks).indexOf(this);
                    carouselInstance.to(index);
                });
            });

            // Update tab active class when carousel slides
            carousel.addEventListener('slid.bs.carousel', function (event) {
                var index = event.to;
                updateActiveTab(index);
            });

            // Set the initial active tab
            updateActiveTab(0);
        });

    </script>
</body>

</html>