(function(){
    let burger = document.querySelector(".burger")
    burger.addEventListener('mousedown', function(){
        console.log("burger")
        if(!burger.classList.contains('burger__X'))
        {

            burger.classList.add("burger__X")

        }
        else
        {
            burger.classList.remove("burger__X")

        }
        
    })
})()