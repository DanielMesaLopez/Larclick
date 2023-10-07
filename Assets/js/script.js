var elementTop = $('.nav').offset().top;

$(window).scroll(function(){
    if( $(window).scrollTop() >= elementTop){
        $('body').addClass('nav_fixed');
    }else{
        $('body').removeClass('nav_fixed');
    }
});

$('.btn-menu').on('click', function(){
    $('.nav').toggleClass('nav-toggle');
})

step=0; 
function autoImgFlip() { 
if (step < 4) {step++;} 
else {step=0;} 
if (step==0) 
{a.src="../Assets/img/foto1.jpg";} 
if (step==1) 
{a.src="../Assets/img/foto2.jpg";} 
setTimeout("autoImgFlip()", 1000); 
if (step==2) 
{a.src="../Assets/img/foto3.jpg";} 
} 


var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
