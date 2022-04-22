(function(){
    console.log("vive la boite modale");
    let boiteModale = document.querySelector(".boite__modale");
    let boutonLecture = document.querySelectorAll(".cours__desc__bouton");
    console.log(boutonLecture.length);

    for (const bout of boutonLecture){
        bout.addEventListener('mousedown', function(){
            boiteModale.classList.add('boite__modale--ouvert');
            boiteModale.classList.remove('boite__modale--fermer')
        })
    }

    // boiteModale.addEventListener('mousedown', function(){
    //     // boite__modale
    // })
})()

/**
 * this.parentNode
 * this.parentNode.children
 */


console.log("test")