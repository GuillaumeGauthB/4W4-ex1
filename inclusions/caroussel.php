<div class="caroussel" id="caroussel">
    <div class="boites">
        <div class="caroussel-img">
            <a class="derniere" onclick="plusSlides(-1)">&#10094;</a>
            <img src="https://cdn.discordapp.com/attachments/922658530014679041/963202849410535455/carrot-man.JPG" alt="">
        </div>
        <div class="caroussel-reste">
            <a class="prochaine" onclick="plusSlides(1)">&#10095;</a>
            <h2 class="caroussel-titre">Nouveau président du Comité TIM</h2>
            <div class="caroussel-texte">Vous pouvez maintenant trouver toutes les informations pertinentes sur le métier de <span class="souligner gras">technicien(ne) en pharmacie</span> ici, à portée de votre souris! Vous pouvez y trouver le salaire, le niveau d'éducation nécessaire et beaucoup plus en cliquant sur le lien si dessous!</div>
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
            <h2 class="caroussel-titre">Offre d'emploi!</h2>
            <div class="caroussel-texte">Vous pouvez maintenant trouver toutes les informations pertinentes sur les métiers de <span class="souligner gras">bartender</span>, d'<span class="souligner gras">opérateur(trice) de machinerie légère</span> et de <span class="souligner gras">préposé au service automobile</span> ici, à portée de votre souris! Vous pouvez y trouver le salaire, le niveau d'éducation nécessaire et beaucoup plus en cliquant sur le lien si dessous!</div>
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
            <h2 class="caroussel-titre">Bonne année 2020!</h2>
            <div class="caroussel-texte">Joyeux Nouvel An à tous! Souhaitons que l'année 2020 soit aussi plaisante que 2019!</div>
            <div class="caroussel-footer">
                <a href="page-introuvable.php" class="caroussel-lien">Pour en savoir plus >></a>
                <div class="caroussel-date">Janvier 2020</div>
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