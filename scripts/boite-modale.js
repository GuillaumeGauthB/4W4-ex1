(function(){
    console.log("vive la boite modale");
    let boiteModale = document.querySelector(".boite__modale");
    let boutonLecture = document.querySelectorAll(".cours__desc__bouton");
    let boiteModaleFerme = document.querySelector(".boite__modale__fermer");
    let boiteModaleTexte = document.querySelector(".boite__modale__texte");
    console.log(boutonLecture.length);

    for (const bout of boutonLecture){
        bout.addEventListener('mousedown', function(){
            boiteModale.classList.add('boite__modale--ouvert');
            boiteModale.classList.remove('boite__modale--fermer');
            boiteModaleTexte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
        })
    }

    boiteModaleFerme.addEventListener('mousedown', function(){
        boiteModale.classList.add('boite__modale--fermer');
        boiteModale.classList.remove('boite__modale--ouvert');
    })
})()

/**
 * this.parentNode
 * this.parentNode.children
 */


console.log("test")