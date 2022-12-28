var MenuItems = document.getElementById("menuItems");

MenuItems.style.maxHeight = "0px";

function menuToggle(){
    if (MenuItems.style.maxHeight== "0px")
    {
        MenuItems.style.maxHeight= "200px";
    }
    else
    {
        MenuItems.style.maxHeight= "0px";
    }
}
/*------------------------------------------------------------*/

var UserItems = document.getElementById("userItems");

UserItems.style.maxHeight = "0px";

function userToggle(){
    if (UserItems.style.maxHeight== "0px")
    {
        UserItems.style.maxHeight= "200px";
    }
    else
    {
        UserItems.style.maxHeight= "0px";
    }
}
/*------------------------------------------------------------*/

var SearchItems = document.getElementById("searchItems");

SearchItems.style.maxHeight = "0px";

function searchToggle(){
    if (SearchItems.style.maxHeight== "0px")
    {
        SearchItems.style.maxHeight= "200px";
    }
    else
    {
        SearchItems.style.maxHeight= "0px";
    }
}


/*------------------------------------------------------------*/
window.onload = sliderFunction();

function sliderFunction(){
    var sliderList = document.getElementsByClassName('slider-content');

    if(!sliderList[0].classList.contains('show-content')){
        sliderList[0].classList.add('show-content');
    }

    for(var slide of sliderList){
        if(!slide.classList.contains('show-content')){
            slide.classList.add('hidden-content');
        }
    }

    var index = 0;
    var slider = document.getElementsByClassName('slider')[0];

    slider.addEventListener('click', function(){
        index++;
        for(var slide of sliderList){
            if(slide.classList.contains('show-content') && index <3 ){
                slide.classList.remove('show-content');
                slide.classList.add('hidden-content');
                slide.nextElementSibling.classList.remove('hidden-content');
                slide.nextElementSibling.classList.add('show-content');
                break;
            } else if(slide.classList.contains('show-content') && index == 3){
                slide.classList.remove('show-content');
                slide.classList.add('hidden-content');
                slide.previousElementSibling.previousElementSibling.classList.remove('hidden-content');
                slide.previousElementSibling.previousElementSibling.classList.add('show-content');
                index = 0;
                break;
            }
        }
    })
}


