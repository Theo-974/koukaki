(function($) {
    // Votre code existant pour l'effet d'apparition des titres de section
    console.log('test');

    $(document).ready(function() {
        // Sélectionnez tous les éléments avec la classe fade-in-title
        const fadeTitles = $('.fade-in-title');

        // Fonction pour vérifier si un élément est dans la fenêtre visible
        function isElementInViewport(el) {
            const rect = el[0].getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Fonction pour activer l'animation lorsque l'élément devient visible
        function handleScroll() {
            fadeTitles.each(function() {
                if (isElementInViewport($(this))) {
                    $(this).addClass('visible'); // Ajoutez une classe pour activer l'animation CSS
                }
            });
        }

        // Écoutez l'événement scroll pour déclencher la fonction handleScroll
        $(window).on('scroll', handleScroll);
        
        // Déclenchez handleScroll dès le chargement de la page pour vérifier les éléments visibles
        handleScroll();
        // import Swiper JS
        import ('swiper');
        // import Swiper styles
        import ('swiper-style');
        // Initialisation de Swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Définir la vitesse de défilement des nuages
        var scrollSpeed = 0.5;

        // Sélectionnez les éléments des nuages
        var $bigCloud = $('.big-cloud');
        var $littleCloud = $('.little-cloud');

        // Fonction pour déplacer les nuages en fonction du défilement
        function moveClouds() {
            var scrollPosition = $(window).scrollTop();
            var bigCloudPosition = -scrollPosition * scrollSpeed;
            var littleCloudPosition = -scrollPosition * scrollSpeed * 0.5;

            // Appliquer les nouvelles positions des nuages
            $bigCloud.css('transform', 'translateX(' + bigCloudPosition + 'px)');
            $littleCloud.css('transform', 'translateX(' + littleCloudPosition + 'px)');
        }

        // Écoutez l'événement scroll pour déplacer les nuages
        $(window).on('scroll', moveClouds);

        // Déplacez les nuages initialement au chargement de la page
        moveClouds();
    });
})(jQuery);
