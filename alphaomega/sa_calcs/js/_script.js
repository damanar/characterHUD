$(function(){
    //assigning rollable elements

    $('.roller').prepend('<img src="images/grey_cross.gif" class="quick_menu" alt="" border="0" />&nbsp;&nbsp;');

    $('.roller').bind( 'click', popMenu );

});

var timer;// timer variable for menus
var currentMenu;// currently hovered element
var wield;

function rollThis(num){
	var dice = new Array(6)
  var name;
  var field_name;
  var mod = 0;
  var skill = 0;
  var field = 0;
  var str = 0;
  
  if( typeof currentMenu.attr('quality') == "undefined" ){
    name = currentMenu.html().replace( /.*nbsp;/, "" ).match( /[^:]+/ );
    dice = diePool( currentMenu.attr('value') );
  }
  else {
    name = currentMenu.html().replace( /.*nbsp;/, "" ).match( /[^:]+/ );
    dice = diePool( $('#'+currentMenu.attr('quality')).attr('value') );
  }
    
  //find modifiers
  if( typeof currentMenu.attr('quality') != "undefined" ){
    skill = currentMenu.attr('value');
    field = currentMenu.parent().parent().attr('value');
    field_name = currentMenu.parent().parent().html().replace( /<[^>]*>/g, "" ).match( /[^:]+/ );

    skill = parseInt(skill);
    field = parseInt(field);
    mod = skill + field;
  }

	var result = 0;
	for(var i = 0; i < num; i++){
    var roll = dieRoll(("1d"+dice[i]));
		result = result + roll;
	}
  result = result + mod;
  str = "<p>"+name+": "+result+"</p>";
  $('#rolls').prepend(str);
}

function dieRoll(die){
  var num;
  var caliber;
  var result = 0;

  num = die.replace(/d\d*/, "");
  caliber = die.replace(/\d*d/, "");

  num = parseInt(num);
  caliber = parseInt(caliber);
  
  for( var i =0; i<num; i++){
    result = result + Math.floor(Math.random()*(caliber))+1;
  }
  return result;
}

function popMenu() {
  clearMenu();
  timeOut();
  currentMenu = $(this);
  currentMenu.css({
    backgroundColor: '#9a9a9a',
    color: '#000000'});
  $('#quick_menu')
    .appendTo( currentMenu )
    .css({
      left: $(this).offset().left - 60,
      top: $(this).offset().top})
    .animate({ opacity: .90 }, 0, 'linear' );
  unpopMenu();

}
function unpopMenu() {
  timer = setTimeout( timeOut, 1000 )
}

function clearMenu() {
  clearTimeout(timer);
}

function timeOut() {
  $('.quick_menu').parent().css({
    backgroundColor: '#000000',
    color: '#9a9a9a'});
  $('#quick_menu').animate({ opacity: .0 }, 0, 'linear')
    .css({ left: -10000 });
}

function wieldpop() {
  if( $('#wielding').offset().left == -1000 ) {
    $('#wielding').animate({ left: 120 }, 1000, 'swing' ); 
  }
  else {
    $('#wielding').animate({ left: -1000 }, 1000, 'swing' ); 
  }
	wield = new Wield;
}

function w_populate() {
  if ( typeof wield.source != 'undefined' ) {
    $('#source_container').html(wield.source+' +'+wield.sourceVal);
  }
  if ( typeof wield.intent != 'undefined' ) {
    $('#intention_container').html(wield.intent+' +'+wield.intentVal);
  }
}
