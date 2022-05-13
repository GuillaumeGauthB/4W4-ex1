(function(){
    console.log("vive la boîte modale")  
    let boite__modale = document.querySelector(".boite__modale")
    let galerie__img = document.querySelectorAll('.galerie .wp-block-image img')
    console.log("galerie__img.length = " + galerie__img.length)
    let boite__modale__ferme = document.querySelector(".boite__modale__fermer")
    let boite__modale__texte = document.querySelector(".boite__modale__texte")
    let boite__carrousel__navigation = document.querySelector('.boite__carrousel__navigation')
  
    boite__modale__ferme.classList.add("caroussel__fermer")

    boite__modale__ferme.addEventListener('mousedown', function(){
      boite__modale.classList.remove('boite__modale--ouvrir')
      boite__modale.classList.add('boite__modale--fermer')
    })
  
    let image = document.createElement('img')
    boite__modale__texte.appendChild(image)
    image.classList.add("boite__modale__img")
    //img.setAttribute("src", "#")
  console.log("test");
  let index = 0;
    for (const img of galerie__img) {
      let bouton = document.createElement('button')
        bouton.dataset.index = index++
        bouton.innerText = index;
        boite__carrousel__navigation.append(bouton)
        bouton.addEventListener('mousedown', function(){
          image.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
        })

        img.addEventListener('mousedown',function(){
          boite__modale.classList.add('boite__modale--ouvrir')
          boite__modale.classList.remove('boite__modale--fermer')
          console.log(this.getAttribute('src'))
          let source = this.getAttribute('src')
          image.setAttribute('src',source)
        })
    }
  
  
  
    /*
  this.parentNode
  this.parentNode.children(2)
    */
  
  })() 