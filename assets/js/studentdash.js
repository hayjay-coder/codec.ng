
$(document).ready(function () {

 //Dropdown Toggle
 $(".toggle-1").click(function () {

  //show and hide elements
  $('.dropdown-1').toggle();
  $('.dropdown-2').hide();
  $('.dropdown-3').hide();

  $(this).find('.fa-angle-down').toggle();
  $(this).find('.fa-angle-up').toggle();

  $('.toggle-2').find('.fa-angle-down').show();
  $('.toggle-2').find('.fa-angle-up').hide();
  $('.toggle-3').find('.fa-angle-down').show();
  $('.toggle-3').find('.fa-angle-up').hide();

 });

 //Dropdown Toggle
 $(".toggle-2").click(function () {
  //show and hide elements
  $('.dropdown-2').toggle();
  $('.dropdown-1').hide();
  $('.dropdown-3').hide();

  $(this).find('.fa-angle-down').toggle();
  $(this).find('.fa-angle-up').toggle();

  $('.toggle-1').find('.fa-angle-down').show();
  $('.toggle-1').find('.fa-angle-up').hide();
  $('.toggle-3').find('.fa-angle-down').show();
  $('.toggle-3').find('.fa-angle-up').hide();

 })

 //Dropdown Toggle
 $(".toggle-3").click(function () {
  //show and hide elements
  $('.dropdown-3').toggle();
  $('.dropdown-1').hide();
  $('.dropdown-2').hide();

  $(this).find('.fa-angle-down').toggle();
  $(this).find('.fa-angle-up').toggle();

  $('.toggle-1').find('.fa-angle-down').show();
  $('.toggle-1').find('.fa-angle-up').hide();
  $('.toggle-2').find('.fa-angle-down').show();
  $('.toggle-2').find('.fa-angle-up').hide();

 })

 //toggle language selection
 $('.auth .language__select').click(function () {
  //show and hide element
  $('.language__globe').toggle();
 })

 // SIDE BAR TOGGLE
 $('.side-bar').on('click', 'span', 'i', function (e) {
  let target = e.target;

  if (target.classList.contains('left')) {

   $('.dashboard__user').toggleClass('hidden');
   $('.toggle__sidebar').toggleClass('toggle__right');


   $('.left').hide();
   $('.right').show();
   $('.toggle__sidebar').show();
  }


  if (target.classList.contains('right')) {
   $('.dashboard__user').toggleClass('hidden');
   $('.toggle__sidebar').toggleClass('toggle__right');

   $('.right').hide();
   $('.left').show();
   $('.toggle__sidebar').show();
  }

 });

 // Toggle Dashboard
 $('.dashboard__user-tabs').on('click' , 'span' , 'a' ,function(e){
  let target = e.target;

  if (target.classList.contains('prof')) {

   $('.dashboard__widget').css('display' , 'none');
   $('.profile__widget').css('display' , 'block');
   $('.profile').addClass('active-blue');
   $('.dash').removeClass('active-blue');
  }

  if (target.classList.contains('dassh')) {
   $('.dashboard__widget').css('display' , 'grid');
   $('.profile__widget').css('display' , 'none');
   $('.dash').addClass('active-blue');
   $('.profile').removeClass('active-blue');
  }
 })

});