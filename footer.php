<footer class="site__footer">
    <div class="site__footer__info1">
        <h2 class="site__footer__info1__elem__h2 elem">Le beau site__footer</h2>
        <p class="site__footer__info1__elem__p elem">Un site web fait par une élève du TIM à l'aide de Wordpress.</p>
        <h3 class="site__footer__info1__elem__h3 elem">Fait par Florence Lemieux Cayer</h3>
    </div>
<?php 

$icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
wp_nav_menu(array(
                    "menu"=>"simple",
                    "container"=>"nav",
                    "container_class"=>"site__footer__menu",
                    "menu_class"=>"site__footer__menu__ul",

                    "link_before"=>$icone)); ?>
<?= 	get_search_form() ?>
</footer>
<php wp_footer() ?>
</body>

</html>