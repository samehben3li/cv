$(document).ready(function(){
    $(window).scroll(function(){
        if (this.scrollY > 20) {
            $('.navbar').addClass('sticky')
        } else {
            $('.navbar').removeClass('sticky')
        }
    });

    $(".menu-btn").click(function(){
        $(".navbar .menu").toggleClass("active");
        $(".menu-btn i").toggleClass("active");
    });

});

function areatext(id,btnId){
    var text = document.getElementById(id);
    var id = "#"+id;
    var textarea = document.querySelector(id);
    textarea.classList.toggle('hovred');
    var btnId = "#"+btnId;
    var done = document.querySelector(btnId);
    done.classList.toggle('hovred');
}

function btnArea(id,btnId){
    var text = document.getElementById(id);
    var textarea = document.querySelector('#'+id);
    textarea.classList.toggle('hovred');
    var done = document.querySelector('#'+btnId);
    done.classList.toggle('hovred');
}