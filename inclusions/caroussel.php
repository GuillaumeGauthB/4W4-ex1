<div class="caroussel" id="caroussel">
    <div class="boites">
        <div class="caroussel-img">
            <a class="derniere" onclick="plusSlides(-1)">&#10094;</a>
            <img src="https://cdn.discordapp.com/attachments/922658530014679041/963202849410535455/carrot-man.JPG" alt="">
        </div>
        <div class="caroussel-reste">
            <a class="prochaine" onclick="plusSlides(1)">&#10095;</a>
            <h2 class="caroussel-titre">Nouveau président du Comité TIM</h2>
            <div class="caroussel-texte">Un nouveau président du comité à récemment été élu! L'heureux élu est le malheureux Pierre-Olivier Clerson, qui était la seule présente à l'élection! Malgré les propos du jeune homme, qui exclamait qu'il n'allait rien dire à la police s'il était sur le champ, il a tout de même été élu avec taux de vote de 100%. Félicitation Pierre-Olivier.</div>
            <div class="caroussel-footer">
                <a href="page-introuvable.php" class="caroussel-lien">Pour en savoir plus >></a>
                <div class="caroussel-date">Février 2021</div>
            </div>
        </div>
    </div>
    <div class="boites">
        <div class="caroussel-img">
            <a class="derniere" onclick="plusSlides(0)">&#10094;</a>
            <img src="https://media.discordapp.net/attachments/922658530014679041/963202850010304532/crips-ppl.JPG" alt="">
        </div>
        <div class="caroussel-reste">
            <a class="prochaine" onclick="plusSlides(2)">&#10095;</a>
            <h2 class="caroussel-titre">Nouvelle offre de stage!</h2>
            <div class="caroussel-texte">Une nouvelle offre de stage est récemment arrivée pour les étudiants de 2ème année! Les emplyoeurs, les Crips, sont à la recherche de deux sstagiaires ayant des compétences en PHP et en Javascript pour l'intégration de leur nouveau site web! Ils ne sont malheureusement prêt à payer que 12$ de l'heure, mais cette expérience vous sera inoubliable et très bonne pour votre CV.</div>
            <div class="caroussel-footer">
                <a href="page-introuvable.php" class="caroussel-lien">Pour en savoir plus >></a>
                <div class="caroussel-date">Décembre 2020</div>
            </div>
        </div>
    </div>
    <div class="boites">
        <div class="caroussel-img">
            <a class="derniere" onclick="plusSlides(1)">&#10094;</a>
            <img src="https://media.discordapp.net/attachments/922658530014679041/963202850555588608/3.JPG" alt="">
        </div>
        <div class="caroussel-reste">
            <a class="prochaine" onclick="plusSlides(3)">&#10095;</a>
            <h2 class="caroussel-titre">Bonne année 2021!</h2>
            <div class="caroussel-texte">Joyeux Nouvel An à tous! Souhaitons que cette année va être aussi joyeuse que la dernière, avec tout les évènements plaisants s'ayant produits cette année. Ah, comme je vais m'ennuyer de cette merveilleuse année.</div>
            <div class="caroussel-footer">
                <a href="page-introuvable.php" class="caroussel-lien">Pour en savoir plus >></a>
                <div class="caroussel-date">Janvier 2021</div>
            </div>
        </div>
    </div>
</div>
<script>
    var posSlider = 0;
    const slides = document.getElementById("caroussel");
    var intervalCaroussel = setInterval(ChangerPos, 10000);

    function ChangerPos(){
        console.log(posSlider);
        posSlider += 1;
        SlideShow(slides);
    }

    function plusSlides(n) {
        posSlider = n;
        SlideShow(slides);
    }

    function SlideShow(slide) {
        clearInterval(intervalCaroussel);
        intervalCaroussel = setInterval(ChangerPos, 10000);
        console.log(posSlider);
        if (posSlider < 0){
            posSlider = 2;
        }
        else if (posSlider > 2){
            posSlider = 0;
        }

        if(posSlider == 0){
            slide.style.transform = "translate(0vw)";
        }
        else if(posSlider == 1){
            slide.style.transform = "translate(-34%)";
        }
        else if(posSlider == 2){
            slide.style.transform = "translate(-68%)";
        }
        console.log(posSlider);
    }
</script>

<script>
    let sectionTable = [document.getElementById("liens-burger-educ"),  document.getElementById("liens-burger-travail"),  document.getElementById("liens-burger-etranger")];
let sectionOuverte;

function bougerMenu(section){
    for(i = 0; i < 3; i++){
        if(i % 2 == 0){
            sectionTable[i].style.left = "-101vw";
        }else{
            sectionTable[i].style.right = "-101vw";
        }
        
    }
    if(section != sectionOuverte){
        if(section % 2 == 0){
            sectionTable[section].style.left = "0";
        }else{
            sectionTable[section].style.right = "0";
        }
        sectionOuverte = section;
    }else{
        sectionOuverte = -1;
    }
}
</script>