class Demo {  
  onLoadWindow(){
    $(window).on('load', function () {
      $('html, body').animate({ scrollTop: 0 }, 800);
      $('#menu, #banner, .banner-title').addClass('go');
      setTimeout(function () {
        $('.banner-title').removeClass('go');
      }, 3500);
    });
  }

  onDocScroll () {
    const windowHeight = $(window).height();
    $(document).scroll(function () {
      const scrollTop = $(window).scrollTop() + windowHeight;
      let block = windowHeight;
      $('.block').each(function () {
        const $this = $(this);
        block += $this.height() / 1.8;

        if (scrollTop > block) {
          $this.addClass('in');
        }
      });
    });
  }

  onStageClick () {
    const windowHeight = $(window).height();
    $('.stage').click(function () {
      const scrollToService = windowHeight - 100;
      $('html, body').animate({ scrollTop: scrollToService }, 'slow');
    });
  }

  onLog(){
    console.log('wrer');
    
  }
}

export default Demo;
