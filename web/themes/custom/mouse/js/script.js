/**
 * @file
 * Behaviors for the iq theme.
 */

(function ($, _, Drupal, drupalSettings) {
  'use strict';

  Drupal.behaviors.iq = {
    attach: function (context) {
      //Add active class to accordion panel-heading
      $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).siblings('.panel-heading').addClass('active');
      });

      $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.panel-heading').removeClass('active');
      });
    }
  };

  //Validate Contact form phone
  Drupal.behaviors.iqWebformTelephoneInternational = {
    attach: function (context) {
      $(context).find('input.js-webform-telephone-international').each(function () {
        var $telephone = $(this);
        $('#webform-submission-contact-add-form').on("submit", function(e){
          if ($.trim($telephone.val())) {
            if (!$telephone.intlTelInput('isValidNumber')) {
              e.preventDefault();
              return false;
            }
          }
        });
      });
    }
  };

  Drupal.behaviors.matchHeight = {
    attach: function (context, settings) {
      $('.field--name-field-flavors .col-md-6 .field-collection-item').matchHeight();
      $('.hero-slide-content .field--name-node-title').matchHeight();
    }
  };

  Drupal.behaviors.iceCreamLanding = {
    attach: function (context, settings) {
      $(".node--type-product.node--view-mode-teaser").hover(function() {
        $(this).find(".field-product-image-copy img").fadeIn(), $(this).find(".field-product-image-copy").fadeIn()
      }, function() {
        $(this).find(".field-product-image-copy img").fadeOut(), $(this).find(".field-product-image-copy").fadeOut()
      });
    }
  };



Drupal.behaviors.HeroSlider = {
  attach: function (context, settings) {
    $(window).on("load resize orientationchange", function () {
      if ($('.varbase-heroslider-media .slick-track iframe').length) {
        $('.varbase-heroslider-media .slick-track iframe').closest($('.node--type-varbase-heroslider-media')).find($('.hero-slide-content')).hide();
      }
      var height = $('.varbase-heroslider-media .slick-slide img').height();
      $('.varbase-heroslider-media .slick-track iframe').css('height', height + 'px');
      $('.varbase-heroslider-media .slick-track iframe').parent($(".slick_slide")).css('height', height + 'px');
    });
  }
};

})(window.jQuery, window._, window.Drupal, window.drupalSettings);
