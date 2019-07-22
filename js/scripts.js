// JavaScript Document
$(document).ready(function(){
  $('.burger_inactive_1').click(function(){
    $('.nav-0, .burger_active_1').toggleClass('expand');
    $('.hero_tagline, .hero_description, .contact_btn').toggleClass('nudge');
  });
  $('.burger_active_1').click(function(){
    $('.nav-0, .burger_active_1').toggleClass('expand');
    $('.hero_tagline, .hero_description, .contact_btn').toggleClass('nudge');
  });
    $('.nav-3').click(function(){
    $('.nav-0, .burger_active_1').toggleClass('expand');
    $('.hero_tagline, .hero_description, .contact_btn').toggleClass('nudge');
  });
});