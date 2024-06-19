<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\programs.css') }}">
    <title>Document</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
</head>
@include('header/headerview')
<body class="cross" style=" background-image: url('{{ asset('assets/css/imgs/cross.png')}}');  background-repeat: repeat-y;">
    


    <div>
        <!-- 1st column after the banner -->
        <div class="rescolumnp" style="margin-bottom:25px">
            <div class="rcol1p">
                <img src="{{ asset('assets\css\imgs\website-bg-purplebar.png') }}" alt="" width="100%">
            </div>
            
            <h1 class="head">OUR PROGRAMS</h1>

        <div class="back"> 
            <div class="rcol2p dropdowns" >
                <!--First image-->
                <div class="single drop">
                    <div class="image"><img src="{{ asset('assets\css\imgs\ARISE-Logo-DARK.png') }}" width="100%"></div>
                    <div class="image-descrip">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                
                <!--Second image-->
                <div class="single drop">
                    <div class="image"><img src="{{ asset('assets\css\imgs\FTIC-LAUNCH-Logo.png') }}" width="100%"></div>
                    <div class="image-descrip">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>

                <!--Third image-->
                <div class="single drop">
                    <div class="image"><img src="{{ asset('assets\css\imgs\IFI-LOGO-A.png') }}" width="100%"></div>
                    <div class="image-descrip">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>

                <!--Fourth image-->
                <div class="single drop">
                    <div class="image"><img src="{{ asset('assets\css\imgs\ILS-Logo-DARK.png') }}" width="100%"></div>
                    <div class="image-descrip">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                
            </div>

            <div class="rcol2p dropdowns"  >
                <!--Fifth image-->
                <div class="single drop">
                    <div class="image"><img src="{{ asset('assets\css\imgs\SUA-LOgo-Colored-2023.png') }}" width="100%"></div>
                    <div class="image-descrip">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>

                <!--Sixth image-->
                <div class="single drop">
                    <div class="image"><img src="{{ asset('assets\css\imgs\TechX-Logo.png') }}" width="100%"></div>
                    <div class="image-descrip">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>

                <!--Seventh image-->
                <div class="single drop">
                    <div class="image"><img src="{{ asset('assets\css\imgs\UNMASKED-Logo-Text.png') }}" width="100%"></div>
                    <div class="image-descrip">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>


            </div>
        </div>
        </div>  
    
    </div>
    <script>

(function($, window, document) {
  "use strict";
  if (typeof $ === "undefined") {
    return false;
  }
  $.fn.dropdownLayer = function(options) {
    var current, current_is_active, current_is_not_active, defaults, getElemPercent, init_state, init_user_state, onClick, rec, settings, state, update_dropdown_layout, user_state;
    current = this;
    state = 0;
    user_state = 0;
    defaults = {
      'elemSelector': "js-dropdown-item",
      'containerClass': "js-dropdown-items",
      'descriptionClass': "js-description",
      'dropdownClass': "js-dropdown",
      'arrowClass': "js-dropdown-arrow",
      'dropdownContentClass': "js-dropdown-content",
      'disableDropdownClass': "js-dropdown-disable",
      'slideUpSpeed': 300,
      'slideDownSpeed': 300,
      'useSlideDown': false,
      'useSlideUp': false,
      'transitionEffect': 'swing',
      'callOnCompleteHide': function() {},
      'callOnCompleteShow': function() {}
    };
    settings = $.extend(defaults, options);
    getElemPercent = function() {
      return 100 * $("." + settings.elemSelector).width() / $("." + settings.containerClass).width();
    };

    /*
    @param {callback} callback function which has to be called at the end
     */
    init_state = function(callback) {
      if (getElemPercent() <= 25) {
        state = 3;
      } else if (getElemPercent() <= 50) {
        state = 2;
      } else {
        state = 1;
      }
      if (typeof callback === "function") {
        callback();
      }
    };

    /*
    @param {callback} callback function which has to be called at the end
     */
    init_user_state = function(callback) {
      if (getElemPercent() <= 25) {
        user_state = 3;
      } else if (getElemPercent() <= 50) {
        user_state = 2;
      } else {
        user_state = 1;
      }
      if (typeof callback === "function") {
        callback();
      }
    };
    update_dropdown_layout = function() {
      init_state(function() {
        var n, o;
        if (user_state !== 0) {
          o = $('.' + settings.dropdownClass).detach();
          n = current.next();
          if (typeof n.position() !== "undefined") {
            o.insertAfter(rec(current, n));
          } else {
            o.insertAfter(current);
          }
          $("." + settings.arrowClass).css("left", current.position().left + current.outerWidth() / 2);
        }
      });
    };
    current_is_active = function() {
      $("." + settings.arrowClass).hide();
      if (settings.useSlideUp) {
        $('.' + settings.dropdownClass).slideUp({
          duration: settings.slideUpSpeed,
          easing: settings.transitionEffect,
          complete: function() {
            $('.' + settings.dropdownClass).remove();
            current.removeClass("active");
            user_state = 0;
            settings.callOnCompleteHide();
          }
        });
      } else {
        $('.' + settings.dropdownClass).remove();
        current.removeClass("active");
        user_state = 0;
        settings.callOnCompleteHide();
      }
    };
    current_is_not_active = function() {
      init_user_state(function() {

        /*
        $.each $('.'+settings.elemSelector), (ind, val) ->
          if $(val).hasClass 'active'
            if settings.useSlideUp
              $('.'+settings.dropdownClass).slideUp 
                duration: settings.slideUpSpeed,
                easing: settings.transitionEffect,
                complete: ->
                  $(val).removeClass 'active'
                  $('.'+settings.dropdownClass).remove()
                  settings.callOnCompleteHide()
                  return
              return
            else
              $('.'+settings.dropdownClass).remove()
              $(val).removeClass "active"
              settings.callOnCompleteHide()
              return
         */
        var dscr, n;
        $.each($('.' + settings.elemSelector), function(ind, val) {
          if ($(val).hasClass('active')) {
            $('.' + settings.dropdownClass).remove();
            $(val).removeClass("active");
            settings.callOnCompleteHide();
            return false;
          }
        });
        dscr = current.find("." + settings.descriptionClass).html();
        n = current.next();
        if (typeof n.position() !== "undefined") {
          $("<div class=\"" + settings.dropdownClass + "\" style=\"display:none\"><div class=\"" + settings.dropdownContentClass + "\"><div class=\"" + settings.arrowClass + "\"></div>" + dscr + "</div></div>").insertAfter(rec(current, n));
        } else {
          $("<div class=\"" + settings.dropdownClass + "\" style=\"display:none\"><div class=\"" + settings.dropdownContentClass + "\"><div class=\"" + settings.arrowClass + "\"></div>" + dscr + "</div></div>").insertAfter(current);
        }
        if (settings.useSlideDown) {
          $('.' + settings.dropdownClass).slideDown({
            duration: settings.slideDownSpeed,
            easing: settings.transitionEffect,
            complete: function() {
              $("." + settings.arrowClass).show();
              $("." + settings.arrowClass).css("left", current.position().left + current.outerWidth() / 2);
              current.addClass("active");
              settings.callOnCompleteShow();
            }
          });
        } else {
          $('.' + settings.dropdownClass).show();
          $("." + settings.arrowClass).show();
          $("." + settings.arrowClass).css("left", current.position().left + current.outerWidth() / 2);
          current.addClass("active");
          settings.callOnCompleteShow();
          return;
        }
      });
    };
    rec = function(cc, nn) {
      if ("undefined" !== typeof nn.position() && cc.position().top === nn.position().top) {
        return rec(nn, nn.next());
      } else {
        return cc;
      }
    };
    onClick = function() {
      current = $(this);
      if (current.hasClass('active')) {
        current_is_active();
      } else {
        current_is_not_active();
      }
    };
    $(window).ready(function() {
      init_state();
    });
    $(window).resize(function() {
      update_dropdown_layout();
    });
    return this.each(function() {
      var dscr;
      dscr = $(this).find("." + settings.descriptionClass).html();
      if (typeof dscr === "undefined" || dscr.length === 0 || $(this).hasClass(settings.disableDropdownClass)) {
        return true;
      } else {
        $(this).click(onClick);
      }
    });
  };
})(jQuery, window, document);


(function($, window, document) {
  "use strict";
  if (typeof $ === "undefined") {
    return false;
  }
  $.fn.imageEnhancer = function(options) {
      var defaults = {
          'activeClass': 'active', // Class to add for active (clicked) image
          'inactiveClass': 'inactive', // Class for all other images
          'underlineClass': 'underlined', // Class to add for underline effect
          'enlargeFactor': 1.2, // Scale factor for enlargement
          'animationSpeed': 300 // Speed of the transition animation in milliseconds
      };
  
      var settings = $.extend(defaults, options);
  
      function setActive($img) {
          $('img').not($img).removeClass(settings.activeClass).addClass(settings.inactiveClass).css('transform', '').removeClass(settings.underlineClass);
          $img.addClass(settings.activeClass).removeClass(settings.inactiveClass).css({
              'transform': 'scale(' + settings.enlargeFactor + ')',
              'transition': 'transform ' + settings.animationSpeed + 'ms'
          }).addClass(settings.underlineClass);
      }

      return this.each(function() {
          $(this).on('click', function() {
              if ($(this).hasClass(settings.activeClass)) {
                  $(this).removeClass(settings.activeClass).css('transform', '').removeClass(settings.underlineClass);
              } else {
                  setActive($(this));
              }
          });
      });
  };
})(jQuery, window, document);

// Usage
$(document).ready(function() {
  $('.js-dropdown-item img').imageEnhancer({
      'enlargeFactor': 1.2,
      'animationSpeed': 300
  });
});
      </script>

<script type="text/javascript">
    $(document).ready(function() {
          $('.drop').dropdownLayer({
            'elemSelector': "drop",
            'containerClass': "dropdowns", 
            'descriptionClass': "image-descrip",
            'arrowClass': "js-dropdown-arrow",
            'dropdownClass': "js-dropdown",
            'dropdownContentClass': "js-dropdown-content",
            'disableDropdownClass': "js-dropdown-disable",
            'useSlideUp': true,
            'slideUpSpeed': 200,
            'useSlideDown': true,
            'slideDownSpeed': 200,
            'callOnCompleteHide': function(){ console.log('your custom function which will be called on complete after hiding'); },
            'callOnCompleteShow': function(){ console.log('your custom function which will be called on complete after showing'); }
          });
        });
</script>
</body>
@include('footer/footerview')
</html>