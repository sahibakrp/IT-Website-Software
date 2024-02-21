// alert("Hello");
var loader = document.querySelector(".loader")

window.addEventListener("load", vanish);

function vanish(){
    loader.classList.add("disapper");
}




// **********Manu bar***************

function toggleMobileMenu() {
  var mynavLinks = document.querySelector('.mynav-links');
  mynavLinks.classList.toggle('show');
}

// ****************Validation Number********
function validationNumber(e){
  const pattern = /^[0-9]$/;
  return pattern.test(e.key)
}
