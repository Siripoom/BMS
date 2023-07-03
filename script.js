//todo Create navbar sticky

window.onscroll = function(){
    var navbar = document.querySelector('.navbar')
    if(window.pageYOffset > 0){
        navbar.classList.add('sticky') 
    } else{
        navbar.classList.remove('sticky')
    }
}