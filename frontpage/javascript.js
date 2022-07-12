// // 輪播圖

// const slider = document.querySelector(".slider");
// const sliderContent = document.querySelector(".item-wrapper");
// const sliderItems = sliderContent.querySelectorAll("img");
// const itemCount = sliderItems.length;
// const prevBtn = document.querySelector("#previous");
// const nextBtn = document.querySelector("#next");
// const indicatorWrapper = document.querySelector(".indicator-wrapper");

// let currentIndex = 0;

// const handleButtonClick = (direction) => {
//   if (direction === "left") {
//     currentIndex++;

//     if (currentIndex > itemCount - 1) {
//       currentIndex = 0;
//     }
//   } else {
//     currentIndex--;

//     if (currentIndex < 0) {
//       currentIndex = itemCount - 1;
//     }
//   }

//   moveSlide();
//   styleIndicator();
// };

// const handleIndicatorClick = (e) => {
//   if (!e.target.classList.contains("indicator")) return;

//   currentIndex = e.target.dataset.index;

//   moveSlide();
//   styleIndicator();
// };

// const initIndicators = () => {
//   for (let i = 0; i < itemCount; i++) {
//     const indicator = document.createElement("div");
//     indicator.classList.add("indicator");
//     indicator.dataset.index = i;
//     indicatorWrapper.appendChild(indicator);
//   }

//   styleIndicator();
// };

// const styleIndicator = () => {
//   const indicators = indicatorWrapper.querySelectorAll(".indicator");
//   indicators.forEach((indicator) => indicator.classList.remove("current"));
//   indicators[currentIndex].classList.add("current");
// };

// const moveSlide = () => {
//   const sliderWidth = slider.clientWidth;
//   sliderContent.style.transform = `translateX(-${
//     currentIndex * sliderWidth
//   }px)`;
// };

// const addEventListeners = () => {
//   prevBtn.addEventListener("click", () => handleButtonClick("left"));
//   nextBtn.addEventListener("click", () => handleButtonClick("right"));
//   indicatorWrapper.addEventListener("click", handleIndicatorClick);
// };

// const init = () => {
//   addEventListeners();
//   initIndicators();
// };

// init();

// //

// 輪播圖

// sorry for the spaghetti code and redundant variables, i wasn't exactly a good coder back then

// const cols = 3;
// const main = document.getElementById('main');
// let parts = [];

// let images = [
//   "https://images.unsplash.com/photo-1549880338-65ddcdfd017b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80",
//   "https://images.unsplash.com/photo-1544198365-f5d60b6d8190?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80",
//   "https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2700&q=80"
// ];
// let current = 0;
// let playing = false;

// for (let i in images) {
//   new Image().src = images[i];
// }

// for (let col = 0; col < cols; col++) {
//   let part = document.createElement('div');
//   part.className = 'part';
//   let el = document.createElement('div');
//   el.className = "section";
//   let img = document.createElement('img');
//   img.src = images[current];
//   el.appendChild(img);
//   part.style.setProperty('--x', -100/cols*col+'vw');
//   part.appendChild(el);
//   main.appendChild(part);
//   parts.push(part);
// }

// let animOptions = {
//   duration: 2.3,
//   ease: Power4.easeInOut
// };

// function go(dir) {
//   if (!playing) {
//     playing = true;
//     if (current + dir < 0) current = images.length - 1;
//     else if (current + dir >= images.length) current = 0;
//     else current += dir;

//     function up(part, next) {
//       part.appendChild(next);
//       gsap.to(part, {...animOptions, y: -window.innerHeight}).then(function () {
//         part.children[0].remove();
//         gsap.to(part, {duration: 0, y: 0});
//       })
//     }

//     function down(part, next) {
//       part.prepend(next);
//       gsap.to(part, {duration: 0, y: -window.innerHeight});
//       gsap.to(part, {...animOptions, y: 0}).then(function () {
//         part.children[1].remove();
//         playing = false;
//       })
//     }

//     for (let p in parts) {
//       let part = parts[p];
//       let next = document.createElement('div');
//       next.className = 'section';
//       let img = document.createElement('img');
//       img.src = images[current];
//       next.appendChild(img);

//       if ((p - Math.max(0, dir)) % 2) {
//         down(part, next);
//       } else {
//         up(part, next);
//       }
//     }
//   }
// }

// window.addEventListener('keydown', function(e) {
//   if (['ArrowDown', 'ArrowRight'].includes(e.key)) {
//     go(1);
//   }

//   else if (['ArrowUp', 'ArrowLeft'].includes(e.key)) {
//     go(-1);
//   }
// });

// function lerp(start, end, amount) {
//   return (1-amount)*start+amount*end
// }

// const cursor = document.createElement('div');
// cursor.className = 'cursor';

// const cursorF = document.createElement('div');
// cursorF.className = 'cursor-f';
// let cursorX = 0;
// let cursorY = 0;
// let pageX = 0;
// let pageY = 0;
// let size = 8;
// let sizeF = 36;
// let followSpeed = .16;

// document.body.appendChild(cursor);
// document.body.appendChild(cursorF);

// if ('ontouchstart' in window) {
//   cursor.style.display = 'none';
//   cursorF.style.display = 'none';
// }

// cursor.style.setProperty('--size', size+'px');
// cursorF.style.setProperty('--size', sizeF+'px');

// window.addEventListener('mousemove', function(e) {
//   pageX = e.clientX;
//   pageY = e.clientY;
//   cursor.style.left = e.clientX-size/2+'px';
//   cursor.style.top = e.clientY-size/2+'px';
// });

// function loop() {
//   cursorX = lerp(cursorX, pageX, followSpeed);
//   cursorY = lerp(cursorY, pageY, followSpeed);
//   cursorF.style.top = cursorY - sizeF/2 + 'px';
//   cursorF.style.left = cursorX - sizeF/2 + 'px';
//   requestAnimationFrame(loop);
// }

// loop();

// let startY;
// let endY;
// let clicked = false;

// function mousedown(e) {
//   gsap.to(cursor, {scale: 4.5});
//   gsap.to(cursorF, {scale: .4});

//   clicked = true;
//   startY = e.clientY || e.touches[0].clientY || e.targetTouches[0].clientY;
// }
// function mouseup(e) {
//   gsap.to(cursor, {scale: 1});
//   gsap.to(cursorF, {scale: 1});

//   endY = e.clientY || endY;
//   if (clicked && startY && Math.abs(startY - endY) >= 40) {
//     go(!Math.min(0, startY - endY)?1:-1);
//     clicked = false;
//     startY = null;
//     endY = null;
//   }
// }
// window.addEventListener('mousedown', mousedown, false);
// window.addEventListener('touchstart', mousedown, false);
// window.addEventListener('touchmove', function(e) {
//   if (clicked) {
//     endY = e.touches[0].clientY || e.targetTouches[0].clientY;
//   }
// }, false);
// window.addEventListener('touchend', mouseup, false);
// window.addEventListener('mouseup', mouseup, false);

// let scrollTimeout;
// function wheel(e) {
//   clearTimeout(scrollTimeout);
//   setTimeout(function() {
//     if (e.deltaY < -40) {
//       go(-1);
//     }
//     else if (e.deltaY >= 40) {
//       go(1);
//     }
//   })
// }
// window.addEventListener('mousewheel', wheel, false);
// window.addEventListener('wheel', wheel, false);

// 輪播圖

var slideshowDuration = 4000;
var slideshow=$('.main-content .slideshow');

function slideshowSwitch(slideshow,index,auto){
  if(slideshow.data('wait')) return;

  var slides = slideshow.find('.slide');
  var pages = slideshow.find('.pagination');
  var activeSlide = slides.filter('.is-active');
  var activeSlideImage = activeSlide.find('.image-container');
  var newSlide = slides.eq(index);
  var newSlideImage = newSlide.find('.image-container');
  var newSlideContent = newSlide.find('.slide-content');
  var newSlideElements=newSlide.find('.caption > *');
  if(newSlide.is(activeSlide))return;

  newSlide.addClass('is-new');
  var timeout=slideshow.data('timeout');
  clearTimeout(timeout);
  slideshow.data('wait',true);
  var transition=slideshow.attr('data-transition');
  if(transition=='fade'){
    newSlide.css({
      display:'block',
      zIndex:2
    });
    newSlideImage.css({
      opacity:0
    });

    TweenMax.to(newSlideImage,1,{
      alpha:1,
      onComplete:function(){
        newSlide.addClass('is-active').removeClass('is-new');
        activeSlide.removeClass('is-active');
        newSlide.css({display:'',zIndex:''});
        newSlideImage.css({opacity:''});
        slideshow.find('.pagination').trigger('check');
        slideshow.data('wait',false);
        if(auto){
          timeout=setTimeout(function(){
            slideshowNext(slideshow,false,true);
          },slideshowDuration);
          slideshow.data('timeout',timeout);}}});
  } else {
    if(newSlide.index()>activeSlide.index()){
      var newSlideRight=0;
      var newSlideLeft='auto';
      var newSlideImageRight=-slideshow.width()/8;
      var newSlideImageLeft='auto';
      var newSlideImageToRight=0;
      var newSlideImageToLeft='auto';
      var newSlideContentLeft='auto';
      var newSlideContentRight=0;
      var activeSlideImageLeft=-slideshow.width()/4;
    } else {
      var newSlideRight='';
      var newSlideLeft=0;
      var newSlideImageRight='auto';
      var newSlideImageLeft=-slideshow.width()/8;
      var newSlideImageToRight='';
      var newSlideImageToLeft=0;
      var newSlideContentLeft=0;
      var newSlideContentRight='auto';
      var activeSlideImageLeft=slideshow.width()/4;
    }

    newSlide.css({
      display:'block',
      width:0,
      right:newSlideRight,
      left:newSlideLeft
      ,zIndex:2
    });

    newSlideImage.css({
      width:slideshow.width(),
      right:newSlideImageRight,
      left:newSlideImageLeft
    });

    newSlideContent.css({
      width:slideshow.width(),
      left:newSlideContentLeft,
      right:newSlideContentRight
    });

    activeSlideImage.css({
      left:0
    });

    TweenMax.set(newSlideElements,{y:20,force3D:true});
    TweenMax.to(activeSlideImage,1,{
      left:activeSlideImageLeft,
      ease:Power3.easeInOut
    });

    TweenMax.to(newSlide,1,{
      width:slideshow.width(),
      ease:Power3.easeInOut
    });

    TweenMax.to(newSlideImage,1,{
      right:newSlideImageToRight,
      left:newSlideImageToLeft,
      ease:Power3.easeInOut
    });

    TweenMax.staggerFromTo(newSlideElements,0.8,{alpha:0,y:60},{alpha:1,y:0,ease:Power3.easeOut,force3D:true,delay:0.6},0.1,function(){
      newSlide.addClass('is-active').removeClass('is-new');
      activeSlide.removeClass('is-active');
      newSlide.css({
        display:'',
        width:'',
        left:'',
        zIndex:''
      });

      newSlideImage.css({
        width:'',
        right:'',
        left:''
      });

      newSlideContent.css({
        width:'',
        left:''
      });

      newSlideElements.css({
        opacity:'',
        transform:''
      });

      activeSlideImage.css({
        left:''
      });

      slideshow.find('.pagination').trigger('check');
      slideshow.data('wait',false);
      if(auto){
        timeout=setTimeout(function(){
          slideshowNext(slideshow,false,true);
        },slideshowDuration);
        slideshow.data('timeout',timeout);
      }
    });
  }
}

function slideshowNext(slideshow,previous,auto){
  var slides=slideshow.find('.slide');
  var activeSlide=slides.filter('.is-active');
  var newSlide=null;
  if(previous){
    newSlide=activeSlide.prev('.slide');
    if(newSlide.length === 0) {
      newSlide=slides.last();
    }
  } else {
    newSlide=activeSlide.next('.slide');
    if(newSlide.length==0)
      newSlide=slides.filter('.slide').first();
  }

  slideshowSwitch(slideshow,newSlide.index(),auto);
}

function homeSlideshowParallax(){
  var scrollTop=$(window).scrollTop();
  if(scrollTop>windowHeight) return;
  var inner=slideshow.find('.slideshow-inner');
  var newHeight=windowHeight-(scrollTop/2);
  var newTop=scrollTop*0.8;

  inner.css({
    transform:'translateY('+newTop+'px)',height:newHeight
  });
}

$(document).ready(function() {
 $('.slide').addClass('is-loaded');

 $('.slideshow .arrows .arrow').on('click',function(){
  slideshowNext($(this).closest('.slideshow'),$(this).hasClass('prev'));
});

 $('.slideshow .pagination .item').on('click',function(){
  slideshowSwitch($(this).closest('.slideshow'),$(this).index());
});

 $('.slideshow .pagination').on('check',function(){
  var slideshow=$(this).closest('.slideshow');
  var pages=$(this).find('.item');
  var index=slideshow.find('.slides .is-active').index();
  pages.removeClass('is-active');
  pages.eq(index).addClass('is-active');
});

/* Lazyloading
$('.slideshow').each(function(){
  var slideshow=$(this);
  var images=slideshow.find('.image').not('.is-loaded');
  images.on('loaded',function(){
    var image=$(this);
    var slide=image.closest('.slide');
    slide.addClass('is-loaded');
  });
*/

var timeout=setTimeout(function(){
  slideshowNext(slideshow,false,true);
},slideshowDuration);

slideshow.data('timeout',timeout);
});

if($('.main-content .slideshow').length > 1) {
  $(window).on('scroll',homeSlideshowParallax);
}

// 滑動動畫

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

// search bar
$(function() {
	$('#search-menu').removeClass('toggled');

	$('#search-icon').click(function(e) {
		e.stopPropagation();
		$('#search-menu').toggleClass('toggled');
		$("#popup-search").focus();
	});
	
	$('#search-menu input').click(function(e) {
		e.stopPropagation();
	});

	$('#search-menu, body').click(function() {
		$('#search-menu').removeClass('toggled');
	});
});