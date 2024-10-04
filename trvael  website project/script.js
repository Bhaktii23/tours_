let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick =()=> {
    menu.classList.toggle('fa-times');      
    navbar.classList.toggle('active');
};

window.onscroll =()=> {
    menu.classList.remove('fa-times');      
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {        //swippwerlogic  online extract kela site vrun
    loop:true,                                 //loop chalu thevayla true value assign keli
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

// about.php section - review - swipeer starts
var swiper = new Swiper(".reviews-slider", {        //swippwerlogic  online extract kela site vrun
    loop:true,                                 //loop chalu thevayla true value assign keli
    spaceBetween: 20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});
// about.php section - review - swipeer ends

//package.php madhle load more btn-to diapaly hidden btn starts
let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem =3;

loadMoreBtn.onclick = () =>{    // arrow function
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for(var i = currentItem; i < currentItem +3; i++){
      boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){        //jrr currentr item boxes peksha jasta asel mhanje ajun boxes nastil tr load more btn gayab hoiel
      loadMoreBtn.style.display = 'none';
    }
}


//package.php madhle load more btn-to diapaly hidden btn ends



//book.php-message section sciprt

function message(){
  let inputBox= document.querySelectorAll('.booking .book-form .flex .inputBox')      //all input box ghetle
  const success = document.querySelector('.booking .book-form .message .success')
  const danger = document.querySelector('.booking .book-form .message .danger')

    if(inputBox.value === ' '){                           //check kela input box empty ahe ka asel tr danger print
      danger.style.display = 'block';
    }
    else{
        setTimeout(() => {
          inputBox.value = ' ';
        },2000);
        success.style.display = 'block';
    }

    setTimeout(() => {
      danger.style.display = 'none';
      success.style.display = 'none';
    },4000);

}




//login page eye button 

function myfunction(){
  let x =document.getElementById("myInput");
  let y =document.getElementById("hide1");
  let z =document.getElementById("hide2");

  if(x.type === 'password'){
      x.type = "text";
      y.style.display = "block";
      z.style.display = "none";
  }
  else{
      x.type = "password";
      y.style.display = "none";
      z.style.display = "block";
  }
}