/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

// Primary Menu Button
// Primary Menu
const primaryMenu = document.querySelector('#primary-menu')
const primaryMenuToggle = document.querySelector('#primary-menu-toggle')

primaryMenuToggle.addEventListener('click', () => {
  
  if (primaryMenu.classList.contains('hidden')) {
    primaryMenu.classList.remove('hidden')
    primaryMenu.classList.add('fixed')
    primaryMenuToggle.children[0].classList.remove('bx-menu')
    primaryMenuToggle.children[0].classList.add('bx-x-circle')
  } else {
    primaryMenu.classList.add('hidden')
    primaryMenu.classList.remove('fixed')
    primaryMenuToggle.children[0].classList.remove('bx-x-circle')
    primaryMenuToggle.children[0].classList.add('bx-menu')
  }
})

// Featured Video Section
// const featuredVideoRow = document.querySelector('#featured-video-row');
const featuredVideoImage = document.querySelector('#featured-video-image');
const featuredVideoInfo = document.querySelector('#featured-video-info');

if (featuredVideoInfo !== null ) {
  document.addEventListener('DOMContentLoaded', () => {
    featuredVideoInfo.style.maxHeight = featuredVideoImage.offsetHeight + 'px';
    console.log('Infobox height updated to: ' + featuredVideoInfo.offsetHeight + 'px')
  })
}

// featured video info accordion
const accordionWrapper = document.querySelectorAll('.accordion-wrapper');
accordionWrapper.forEach( item => {
  let accordionBody = item.querySelector('.accordion-body');
  let accordionToggle = item.querySelector('.accordion-toggle');
  accordionToggle.addEventListener('click', (e) => {
    if (accordionBody.classList.contains('hidden')) {
      accordionBody.classList.remove('hidden');
      accordionBody.classList.add('flex');
    } else {
      accordionBody.classList.add('hidden');
      accordionBody.classList.remove('flex');
    }
    e.target.classList.toggle('rotate-180');
  });
});

// testimonial slider
const sliderContainersArray = document.querySelectorAll('.slider-container');

function slideLeft() {
  console.log('slide left');
}

if ( sliderContainersArray.length > 0 ) {
  sliderContainersArray.forEach( s => {
    let currentKey = 0; // first
    const slidesArray = s.querySelectorAll('.slide');
    const slidesCount = slidesArray.length;
    const slideWidth = slidesArray[0].offsetWidth;
    const slidesListContainer = s.querySelector('.slides-list');

    const sliderControls = s.querySelector('.slider-controls');
    
    sliderControls.addEventListener('click', (e) => {
      if ( e.target.classList.contains('slider-left') ) {
        if (currentKey == 0) {
          slidesListContainer.style.transform = "translateX(" + (-slideWidth * (slidesCount-1)) + "px)"; // check that isn't last slide
          currentKey = slidesCount-2; 
          slideLeft();
          console.log(currentKey);
          console.log(slideWidth * (slidesCount-1));
          console.log(slidesCount);
        } else {
          slidesListContainer.style.transform = "translateX(" + ((slideWidth * (currentKey-1)) - slideWidth) + "px)"; // check that isn't last slide
          currentKey = currentKey - 1; 
          console.log(currentKey);
          console.log(slidesCount);
        };
      } else if ( e.target.classList.contains('slider-right') ) {
        if ( currentKey < (slidesCount - 1) ) {
          slidesListContainer.style.transform = "translateX(" + (-slideWidth * (currentKey+1)) + "px)"; // check that isn't last slide
          currentKey = currentKey + 1; 
          console.log(currentKey);
          console.log(slidesCount);
        } else {
          slidesListContainer.style.transform = "translateX(0)"; // if last slide, clicking right arrow will return to first item
          console.log(currentKey);
          console.log(slidesCount);
          currentKey = 0; 
        };
      } else e.preventDefault();
    })

  })
}