// Aspects
function pop_aspects(aspects) {
  $('div[name="aspects"]').append(function(){
    var aspects_block = '';
    for( var i = 0; i<aspects.length; i++ ){
      if( typeof aspects[i] == "object" ){
        aspects_block += '<p>Future Aspect - '+aspects[i].name+'</p>';
        for( var j = 0; j<aspects[i].future_aspect.phase.length; j++){
          var num = j+1;
          if(aspects[i].future_aspect.phase[j].completed == "true"){
            aspects_block += '<p class="completed ind">Phase '+num+': '+aspects[i].future_aspect.phase[j].name+'</p>\n';
          }
          else {
            aspects_block += '<p class="ind">Phase '+num+': '+aspects[i].future_aspect.phase[j].name+'</p>\n';
          }
        }
      }
      else{
        aspects_block += '<p>';
        aspects_block += c.character.aspects[i];
        aspects_block += '</p>\n';
      }
    }
    return aspects_block;
  });
}
// Aspects

// Skills
function pop_skills(skills) {
  for(var i = 0; i < skills.length; i++ ){
    $('ul[name="skills'+skills[i].rank+'"]').append(
      '<li>'+skills[i].name+'</li>').removeClass('hidden');
  }
}
// Skills

// Stunts
function pop_stunts(stunts) {
  for(var i = 0; i < stunts.length; i++ ){
    $('div[name="stunts"]').append(
      '<p>'+stunts[i].name+' ('+stunts[i].skill+') - '+stunts[i].effect+'</p>');
  }
}
// Stunts

// Stuff
function pop_stuff(stuff) {
  for(var i = 0; i < stuff.length; i++ ){
    if( stuff[i].type == "weapon" ){
      $('div[name="stuff"]').append(
        '<p><strong>'+stuff[i].type+'</strong> - '+stuff[i].name+' -(D) '+stuff[i].damage+' -(R) '+stuff[i].range+'</p>');
    }
    else {
      $('div[name="stuff"]').append(
        '<p><strong>'+stuff[i].type+'</strong> - '+stuff[i].name+' - '+stuff[i].bonus+'</p>');
    }
  }
}
// Stuff
