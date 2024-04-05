
/*
Project Name : Studio Sunlife JS
Created By : Hemanshu Solanki from Mypcot
*/
// Open Sub Menu
$('.drp_btn').click(function(){
  $(this).siblings('.sub_menu').slideToggle();
})

// Preloader JS

function preloader_fade() {
  $("#preloader").fadeOut('slow');
}

$(document).ready(function() {
  window.setTimeout("preloader_fade();", 500); //call fade in .5 seconds
}
)


// All Slider Js

$('#frmae_slider').owlCarousel({
    loop:true,
    margin:10,
    autoplay: true,
    smartSpeed: 1500,
    nav:false,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('#company_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    smartSpeed: 1500,
    dots: true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


$('#testimonial_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    smartSpeed: 2500,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


$('#screen_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    autoplay: true,
    smartSpeed: 2500,
    center: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

// Pricing Section Year Month Jquery
$(document).ready(function () {

    $(".tog_block").click(function () {
      $(".tog_btn").toggleClass('month_active');
      $('.month').toggleClass('active');
      $('.years').toggleClass('active');

      $('.monthly_plan').toggleClass('active');
      $('.yearly_plan').toggleClass('active');

    })

  });

$(window).on('resize', function() {
  if ($(window).width()<768) {

    window.addEventListener('scroll', function() {
      var element = document.querySelector('.mobile_mockup');
      var position = element.getBoundingClientRect();

      if(position.top < window.innerHeight && position.bottom >= 0) {
        $('.purple_backdrop').css("opacity", "1");
      }else{
        //console.log('Element is not visible');
        $('.purple_backdrop').css("opacity", "0");
      }
    });

  }
  else {

    window.addEventListener('scroll', function() {
      var element = document.querySelector('.free_text');
      var position = element.getBoundingClientRect();

      if(position.top < window.innerHeight && position.bottom >= 0) {
        $('.purple_backdrop').css("opacity", "1");
      }else{
        //console.log('Element is not visible');
        $('.purple_backdrop').css("opacity", "0");
      }
    });

  }
});


// Scrool-top
$(document).ready(function() {
  var toTop = $('.go_top');
  toTop.on('click', function() {
    $('html, body').animate({scrollTop: $('html, body').offset().top,}, 400);
  });

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 750) {
      $(toTop).css("opacity", "1");

    } else {
      $(toTop).css("opacity", "0");
    }

  });

});

// Fix Header Js
$(window).scroll(function(){
  if ($(window).scrollTop() >= 250) {
      $('header').addClass('fix_style');
  }
  else {
      $('header').removeClass('fix_style');
  }
  if ($(window).scrollTop() >= 260) {
      $('header').addClass('fixed');
  }
  else {
      $('header').removeClass('fixed');
  }
});

// Close btn on click

$(document).ready(function(){
  $('.navbar-toggler').click(function(){
    if($(this).children('span').children('.ico_menu').hasClass('icofont-navigation-menu')) {
      $(this).children('span').children('.ico_menu').removeClass('icofont-navigation-menu').addClass('icofont-close');
    } else {
      $(this).children('span').children('.ico_menu').removeClass('icofont-close').addClass('icofont-navigation-menu');
    }
  });
});

(function() {
  $('.toggle-wrap').on('click', function() {
    $(this).toggleClass('active');
    $('aside').animate({width: 'toggle'}, 200);
  });
})();


// INITIALIZE AOS

AOS.init();


// Validation JS
function validateNameInput(input) {
  var regex = /^[A-Za-z\s]+$/;
  var inputValue = input.value.trim();
  
  if (!regex.test(inputValue)) {
      input.value = inputValue.replace(/[^A-Za-z\s]/g, '');
  }
}
function validateEmailInput(input) {
  var regex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
  var inputValue = input.value.trim();
  
  if (!regex.test(inputValue)) {
      inputValue = inputValue.replace(/[^A-Za-z0-9@._%+-]/g, '');
  }
}

// Submission Ajax
$('#contactBtn').click(function(event) {
  event.preventDefault();
  const contactForm = $('#contactForm');
  const liveToast = $('#liveToast');
  const contactBtn = $(this);
  contactBtn.prop('disabled', true);

  $.ajax({
      url: contactForm.attr('action'),
      type: 'POST',
      data: contactForm.serialize(),
  })
  .done(function(response) {
      const toastBody = liveToast.find('.toast-body');
      const toast = liveToast.toast();

      if (response.success) {
          toastBody.text('Thank You! We Got Your Query');
          liveToast.removeClass('bg-danger').addClass('bg-success').css('display', 'block');
      } else {
          toastBody.text(response.error || response.message);
          liveToast.removeClass('bg-success').addClass('bg-danger').css('display', 'block');
      }

      toast.toast('show');
      setTimeout(() => liveToast.css('display', 'none'), 2000);
  })
  .fail(function(xhr, status, error) {
      const toastBody = liveToast.find('.toast-body');
      toastBody.text("Alert: " + xhr.responseJSON.message);
      liveToast.removeClass('bg-success').addClass('bg-danger').css('display', 'block');
      liveToast.toast('show');
      setTimeout(() => liveToast.css('display', 'none'), 2000);
  })
  .always(function() {
      contactBtn.prop('disabled', false);
  });
});
