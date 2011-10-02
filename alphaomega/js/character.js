//secondary qualities, (derived from core qualities)
c.secondary_qualities.athleticism.value = 
  Math.round((
    parseInt(c.core_qualities.strength.value) + 
    parseInt(c.core_qualities.agility.value))/2);

c.secondary_qualities.physical_acumen.value = 
  Math.round((
    parseInt(c.core_qualities.agility.value) +
    parseInt(c.core_qualities.conditioning.value))/2);

c.secondary_qualities.fitness.value = 
  Math.round((
    parseInt(c.core_qualities.conditioning.value) +
    parseInt(c.core_qualities.vitality.value))/2);

c.secondary_qualities.will.value = 
  Math.round((
    parseInt(c.core_qualities.vitality.value)+
    parseInt(c.core_qualities.discipline.value))/2);

c.secondary_qualities.wisdom.value = 
  Math.round((
    parseInt(c.core_qualities.discipline.value)+
    parseInt(c.core_qualities.intelligence.value))/2);

c.secondary_qualities.wit.value = 
  Math.round((
    parseInt(c.core_qualities.intelligence.value)+
    parseInt(c.core_qualities.charisma.value))/2);

c.secondary_qualities.presence.value = 
  Math.round((
    parseInt(c.core_qualities.charisma.value)+
    parseInt(c.core_qualities.strength.value))/2);


//tertiary qualities, (derived from core and secondary)
c.tertiary_qualities.reaction.value =
  Math.round((
    c.secondary_qualities.athleticism.value +
    c.secondary_qualities.wisdom.value)/2);

c.tertiary_qualities.physis.value =
  Math.round((
    parseInt(c.core_qualities.strength.value) +
    parseInt(c.core_qualities.agility.value) +
    parseInt(c.core_qualities.conditioning.value) +
    parseInt(c.core_qualities.vitality.value) +
    parseInt(c.core_qualities.discipline.value) +
    parseInt(c.core_qualities.intelligence.value) +
    parseInt(c.core_qualities.charisma.value)
    )/7);
c.tertiary_qualities.defense_rating.value =
  Math.round(
    c.tertiary_qualities.reaction.value/2);

c.tertiary_qualities.hp.value =
  parseInt(c.core_qualities.vitality.value)+
  parseInt(c.core_qualities.conditioning.value);

c.tertiary_qualities.end.value =
  parseInt(c.core_qualities.conditioning.value)+
  parseInt(c.core_qualities.discipline.value);
