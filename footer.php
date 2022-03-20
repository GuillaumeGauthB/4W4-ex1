<footer class="site__footer">
    <div class="site__footer__info1">
        <h2 class="site__footer__info1__elem__h2 elem">Le beau(?) site de Guillame Gauthier-Benoit</h2>
    </div>

    <div class="site__footer__colonne">
        <section class="footer__adresse"><?php 	get_sidebar('pied_page_colonne_1'); ?></section>
        <barre></barre>
        <section class="footer__article"><?php 	get_sidebar('pied_page_colonne_2'); ?></section>
        <barre></barre>
        <section class="footer__lien"><?php 	get_sidebar('pied_page_colonne_3'); ?></section>
    </div>
    <div class="site__footer__ligne">
        <section class="footer__description">4w4-Conception d'interfaces et développement web</section>
        <section class="footer__sociaux"><?php 	get_sidebar('pied_page_ligne_1') ?></section>
        <section class="footer__copyright">&copy; Collège de Maisonneuve - Tous droits réservé</section>
        <section class="footer__menu">
        <?php 

            $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
            wp_nav_menu(array(
                                "menu"=>"simple",
                                "container"=>"nav",
                                "container_class"=>"footer__menu__nav",
                                "menu_class"=>"footer__menu__nav__ul",

                                "link_before"=>$icone)); ?>
        </section>
        <section class="footer__auteur">Auteur: Guillaume Gauthier-Benoit</section>
        <section class="footer__barre-recherche">
            <?= 	get_search_form() ?>
        </section>
        <section class="footer__bouton-rgb">
                <button onclick="rgb()" id="bouton-rgb">DANGER: CE BOUTON ACTIVE LA RGB</button>
        </section>
    </div>
    <script>
        let rgbActivee = false;
        bouton = document.querySelector("#bouton-rgb");
        let corps = [
            document.querySelector(".principal"),
            document.querySelector(".main__single-post"),
            document.querySelector(".site__main")
        ]
        let tout = document.querySelectorAll("*");
        
        function rgb(){
            if(!rgbActivee){
                rgbActivee = true;
                for(i=0; i<tout.length;i++){
                    // tout[i].style.animation = "changerCouleur .5s infinite";
                    tout[i].classList.add("rgb-animation");
                    // console.log(i)
                }
                for(i=0;i<corps.length;i++){
                    corps[i].style.background = "hsl(187, 100%, 50%)";
                }
            }
            else{
                rgbActivee = false;
                for(i=0; i<tout.length;i++){
                    // tout[i].style.animation = "changerCouleur .5s infinite";
                    tout[i].classList.remove("rgb-animation");
                    // console.log(i)
                }
                for(i=0;i<corps.length;i++){
                    corps[i].style.background = "#dedede";
                }
            }
        }
    </script>
</footer>
<div class="barre-recherche">
    <?php wp_footer() ?>
</div>
</body>
<?php 	wp_footer() ?>
</html>