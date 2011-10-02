// build menus based on standard uls, can style as desired
var time = 1000;
var t = 0;
var menu = 0;

function menu_open() {
  //$(this).parent().css({
    //backgroundColor: '#CA690A',
    //color: '#000000'});
  menu_cancel();
  menu_close();
  menu = $('#quick_menu')
    .css({
      left: $(this).offset().left - 80,
      top: $(this).offset().top,
      })
    .animate({opacity: .9}, 2, 'linear');
}

function menu_close() {
  if(menu) {
    menu.animate({opacity: .0, left: -1000}, 2, 'linear');
  }
  //$(this).parent().css({
    //backgroundColor: '#000000',
    //color: '#CA690A'});
}

function menu_timer() {
  t = window.setTimeout( menu_close, time );
}

function menu_cancel() {
  if(t) {
    window.clearTimeout(t);
    t = null;
  }
}

function null_function() {
  //do nothing
}

//$(function(){
  //$('.quick_menu').hoverIntent( menu_open, menu_timer );
  //$('.quick_menu').bind( 'mouseout', menu_timer );
//});
    
  document.onclick = menu_close;
