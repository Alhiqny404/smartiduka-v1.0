$(window).resize(function() {
    var width = $(window).width();
    if (width > 990){
        $(".section1 p").html('Bekerjasama dengan 100 lebih Perusahaan');
        $(".section2 p").html('Lebih dari 100 lowongan pekerjaan tersedia');
        $(".section3 p").html('Pengguna dari berbagai wilayah di indonesia');
        $(".section4 p").html('Tampilan web bisa diakses dengan desktop atau mobile');
        $(".section5 p").html('User dapat berinteraksi dengan Admin');
        $(".section6 p").html('Tampilan web yang memukau');
    } 
    if (width < 990){
        $(".section1 p").html('Kerja sama dengan perusahaan');
        $(".section2 p").html('100+ Lowongan Kerja');
        $(".section3 p").html('User di seluruh Indonesia');
        $(".section4 p").html('Web Responsive');
        $(".section5 p").html('Berinteraksi dengan Admin');
        $(".section6 p").html('Tampilan web yang memukau');
        $('.controller').css("margin-top", "-90px");
        $('.container-slider').css("padding-top", "90px");
    } 
    if(width < 760){
        $(".section1 p").html('Bekerjasama dengan 100 lebih Perusahaan');
        $(".section2 p").html('Lebih dari 100 lowongan pekerjaan tersedia');
        $(".section3 p").html('Pengguna dari berbagai wilayah di indonesia');
        $(".section4 p").html('Web Fully Responsive');  
        $(".section5 p").html('User dapat berinteraksi dengan Admin');
        $(".section6 p").html('Tampilan web yang memukau');
        $('.container-slider').css("padding-top", "0px");
        $(".section1, .section2, .section3, .section4, .section5, .section6").css("width", "33%");
        $(".section1, .section2, .section3, .section4, .section5, .section6").css("float", "left");
    }
    if(width < 400){
        $(".section1 p").html('Kerja sama dengan perusahaan');
        $(".section2 p").html('100+ Lowongan Kerja');
        $(".section3 p").html('User di seluruh Indonesia');
        $(".section4 p").html('Web Responsive');
        $(".section5 p").html('Berinteraksi dengan Admin');
        $(".section6 p").html('Tampilan web yang memukau');
        $('.controller').css("margin-top", "-90px");
        $('.container-slider').css("padding-top", "0px");
        $('.controller').css("margin-top", "-250px");
        $(".section1, .section2, .section3, .section4, .section5, .section6").css("width", "33%");
        $(".section1, .section2, .section3, .section4, .section5, .section6").css("float", "left");
    }
  });

//   Smooth Scroll
$(document).ready(function(){
    $("a").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
          window.location.hash = hash;
        });
      }
    });
  });

// Active class
  $(document).ready(function(){
    $('ul li a').click(function(){
      $('li a').removeClass("active");
      $(this).addClass("active");
  });
});

// slide
$(document).ready(function(){
  $('.customer-logos').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
          breakpoint: 768,
          settings: {
              slidesToShow: 4
          }
      }, {
          breakpoint: 520,
          settings: {
              slidesToShow: 3
          }
      }]
  });
});

// hover
$(document).ready(function(){
  $('.contact .card-contact').hover(function(){
    $('.card-contact').removeClass("card-active");
    $(this).addClass("card-active");
  });
});