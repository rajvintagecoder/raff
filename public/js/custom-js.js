$(".green_p a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
        window.location.hash = hash;
      });
    } 
  });


  jQuery(function () {
    jQuery('.recent_winner_slider').slick({
                    dots: false,
                    infinite: true,
                    autoplay: false,
                    arrows: true,
                    speed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                arrows: true,
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: false,
                                autoplay: false,
                                speed: 300,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                arrows: false,
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                autoplay: true,
                                speed: 300,
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: false,
                                dots: false,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                autoplay: true,
                                speed: 300,
                            }
                        }
                    ]
                });
            });

            
        function checkScroll(){
        var startY = $('.navbar').height() * 0; //The point where the navbar changes in px
    
        if($(window).scrollTop() > startY){
            $('.navbar').addClass("scrolled");
        }else{
            $('.navbar').removeClass("scrolled");
        }
    }
    
    if($('.navbar').length > 0){
        $(window).on("scroll load resize", function(){
            checkScroll();
        });
    }	


    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };