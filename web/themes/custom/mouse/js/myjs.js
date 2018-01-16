(function ($, _, Drupal, drupalSettings) {
  'use strict';

Drupal.behaviors.matchHeight = {
   attach: function (context, settings) {
     $('.event-content').matchHeight();
     $('.layout--twocol-bricks').matchHeight();
    // $('.hero-slide-content .field--name-node-title').matchHeight();
    //alert('hi world !!!!!!!!!!');
  $('.glyphicon').on('click', function(e) {
       $('.glyphicon-search').on('click', function(e) {
        $('.input-group').addClass('input-group-open');
        $('.glyphicon').removeClass('glyphicon-search');
        $('.glyphicon ').addClass('glyphicon-remove');
       });
    });
    $('.glyphicon').on('click', function(e) {
       $('.glyphicon-remove').on('click', function(e) {
        $('.input-group-open').addClass('input-group');
        $('.input-group').removeClass('input-group-open');
        $('.glyphicon').removeClass('glyphicon-remove');
        $('.glyphicon').addClass('glyphicon-search');
       });
      });
   }
 };



})(window.jQuery, window._, window.Drupal, window.drupalSettings);
