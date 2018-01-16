(function ($, _, Drupal, drupalSettings) {
  'use strict';

Drupal.behaviors.matchHeight = {
  attach: function (context, settings) {
    var x = 0 ;
    $('.event-content').matchHeight();
    $('.layout--twocol-bricks').matchHeight();
    // $('.hero-slide-content .field--name-node-title').matchHeight();
    //alert('hi world !!!!!!!!!!');
    $('.glyphicon').on('click', function(e) {
      if (x == 0 ){
        x = 1;
        $('.input-group').addClass('input-group-open');
        $('div.glyphicon').removeClass('glyphicon-search');
        $('div.glyphicon ').addClass('glyphicon-remove');
      }else{
        x = 0;
        $('.input-group-open').addClass('input-group');
        $('.input-group').removeClass('input-group-open');
        $('div.glyphicon').removeClass('glyphicon-remove');
        $('div.glyphicon').addClass('glyphicon-search');
      }
      });
   }
 };



})(window.jQuery, window._, window.Drupal, window.drupalSettings);
