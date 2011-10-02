function diePool( score ) {
  //if( score < 4 ) { return "1d4"; }
  var dicePool= new Array(6);
	dicePool[0]= dicePool[1]= dicePool[2]= dicePool[3]= dicePool[4]= dicePool[5]= 0;
	var pos = 0;
	if( score >100 ){ score = 100; }

	var i = 0;
  while( i <= score) {
		if( pos == 6 ){ pos = 0; }
    if( i != 2) {
			dicePool[pos] = incrementDie( dicePool[pos] );
			//alert( pos+": "+ dicePool[pos] );
			pos++;
    }
		i = i+2;
  }
	return dicePool;
}

function incrementDie( die ) {
		//alert("incrementing from: "+die);
    switch( die ){
      case 0:
        die = 4;
        break;
      case 4:
        die = 6;
        break;
      case 6:
        die = 8;
        break;
      case 8:
        die = 10;
        break;
      case 10:
        die = 12;
        break;
      case 12:
        die = 20;
        break;
    }
		//alert("incrementing to: "+die);
  return die;
}

function Wield() {
  this.range = 0;
  this.not = 0;
  this.damage = 0;
  this.si = 0;
  this.weight = 0;
  this.durationC = 0;
  this.durationN = 0;
  this.modMajor = 0;
  this.modMinor = 0;
  this.tot = 0;
  this.dr = 0;
  this.wt = 0;
	this.potency = 0;
	this.dur = 0;
	this.mod = 0;
}

  Wield.prototype.incRange = function() { if(this.range<range.length-1){this.range++; return this.range;} }
  Wield.prototype.decRange = function() { if(this.range>0){this.range--; return this.range;} }
  Wield.prototype.getRange = function() { return range[this.range]; }
  Wield.prototype.incNot = function() { if(this.not<not.length-1){this.not++; return this.not;} }
  Wield.prototype.decNot = function() { if(this.not>0){this.not--; return this.not;} }
  Wield.prototype.getNot = function() { return not[this.not]; }
  Wield.prototype.incPot = function() {
    if( this.potency ) {
      if(this.si<si.length-1){
        this.si++;
        return this.si;
      }
    }
    else {
      if(this.damage<damage.length-1){
        this.damage++;
        return this.damage;
      }
    }
  }
  Wield.prototype.decPot = function() {
    if( this.potency ) {
      if(this.si>0){
        this.si--;
        return this.si;
      }
    }
    else {
      if(this.damage>0){
        this.damage--;
        return this.damage;
      }
    }
  }
  Wield.prototype.getPot = function() {
    if( this.potency ) {
      return si[this.si];
    }
    else {
      return damage[this.damage];
    }
  }
  Wield.prototype.incWeight = function() { if(this.weight<weight.length-1){this.weight++; return this.weight;} }
  Wield.prototype.decWeight = function() { if(this.weight>0){this.weight--; return this.weight;} }
  Wield.prototype.getWeight = function() { return weight[this.weight]; }
  Wield.prototype.incDur = function() {
    if( this.dur ) {
      if(this.durationN<durationN.length-1){
        this.durationN++;
        return this.durationN;
      }
    }
    else {
      if(this.durationC<durationC.length-1){
        this.durationC++;
        return this.durationC;
      }
    }
  }
  Wield.prototype.decDur = function() {
    if( this.dur ) {
      if(this.durationN>0){
        this.durationN--;
        return this.durationN;
      }
    }
    else {
      if(this.durationC>0){
        this.durationC--;
        return this.durationC;
      }
    }
  }
  Wield.prototype.getDur = function() {
    if( this.dur ) {
      return durationN[this.durationN];
    }
    else {
      return durationC[this.durationC];
    }
  }
  Wield.prototype.incMod = function() {
    if( this.mod ) {
      if(this.modMajor<modMajor.length-1){
        this.modMajor++;
        return this.modMajor;
      }
    }
    else {
      if(this.modMinor<modMinor.length-1){
        this.modMinor++;
        return this.modMinor;
      }
    }
  }
  Wield.prototype.decMod = function() {
    if( this.mod ) {
      if(this.modMajor>0){
        this.modMajor--;
        return this.modMajor;
      }
    }
    else {
      if(this.modMinor>0){
        this.modMinor--;
        return this.modMinor;
      }
    }
  }
  Wield.prototype.getMod = function() {
    if( this.mod ) {
      return modMajor[this.modMajor];
    }
    else {
      return modMinor[this.modMinor];
    }
  }
  Wield.prototype.incTot = function() { if(this.tot<tot.length-1){this.tot++; return this.tot;} }
  Wield.prototype.decTot = function() { if(this.tot>0){this.tot--; return this.tot;} }
  Wield.prototype.getTot = function() { return tot[this.tot]; }
  Wield.prototype.getDr = function() {
		this.dr =
			rangeDR[this.range] +
			notDR[this.not] +
			damageDR[this.damage] +
			siDR[this.si] +
			weightDR[this.weight] +
			durationCDR[this.durationC] +
			durationNDR[this.durationN] +
			modMajorDR[this.modMajor] +
			modMinorDR[this.modMinor];

		return this.dr + totDR[this.tot];
	}
  Wield.prototype.getEnd = function() {
		return this.wt + this.tot;
	}
  Wield.prototype.getWt = function() {
		for(var i = 0; i < wt.length; i++){
			//alert( this.dr+' <= '+wt[i] );
			if( this.dr < wt[i] ){ this.wt = i; break; }

		}
		return this.wt - this.tot;
	}

  Wield.prototype.switchPot = function() {
    if( this.potency == 1 ) {
      this.potency = 0;
      this.damage = this.si = 0;
      $('#potent_switch').html('damage/healing');
    }
    else {
      this.potency = 1;
      this.damage = this.si = 0;
      $('#potent_switch').html('si');
    }
    this.updateValues;
  }
  Wield.prototype.switchDur = function() {
    if( this.dur ) {
      this.dur = 0;
      this.durationC = this.durationN = 0;
      $('#dur_switch').html('duration (combat)');
    }
    else {
      this.dur = 1;
      this.durationC = this.durationN = 0;
      $('#dur_switch').html('duration (noncombat)');
    }
    this.updateValues;
  }
  Wield.prototype.switchMod = function() {
    if( this.mod ) {
      this.mod = 0;
      this.modMajor = modMinor = 0;
      $('#mod_switch').html('modifier (minor)');
    }
    else {
      this.mod = 1;
      this.modMajor = modMinor = 0;
      $('#mod_switch').html('modifier (major)');
    }
    this.updateValues;
  }

  Wield.prototype.updateValues = function() {
    $('#range_container').html(wield.getRange());
    $('#not_container').html(wield.getNot());
    $('#potent_container').html(wield.getPot());
    $('#duration_container').html(wield.getDur());
    $('#mod_container').html(wield.getMod());
    $('#tot_container').html(wield.getTot());
    $('#dr_container').html(wield.getDr());
    $('#wt_container').html(wield.getWt());
    $('#end_container').html(wield.getEnd());
		
	}
/*var wield_astrology = new Object;
  wield_astrology.deliverance = { 'being', 'alpha', 'omega' };
  wield_astrology.salvation = { 'elemental', 'energy', 'void', 'alpha', 'omega' };
  wield_astrology.creation = { 'elemental', 'energy', 'void', 'being', 'alpha', 'omega' };
  wield_astrology.inspiration = { 'energy', 'being', 'alpha', 'omega' };

  wield_astrology.agony = { 'elemental', 'energy', 'void', 'alpha', 'omega' };
  wield_astrology.damnation = { 'elemental', 'energy', 'void', 'alpha', 'omega' };
  wield_astrology.nihilism = { 'elemental', 'energy', 'void', };
  wield_astrology.malice = { 'elemental', 'energy', 'being', 'alpha', 'omega' };

  wield_astrology.constancy = { 'void', 'being', 'alpha', 'omega' };
  wield_astrology.clarity = { 'elemental', 'being', 'alpha', 'omega' };
  wield_astrology.insight = { 'elemental', 'void', 'being', 'alpha', 'omega' };
  wield_astrology.control = { 'elemental', 'energy', 'being', 'alpha', 'omega' };

  wield_astrology.entropy = { 'elemental', 'void', 'being', 'alpha', 'omega' };
  wield_astrology.insanity = { 'elemental', 'energy', 'void', 'being', 'alpha', 'omega' };
  wield_astrology.ignorance = { 'void', 'being', 'alpha', 'omega' };
  wield_astrology.anarchy = { 'energy', 'void', 'being', 'alpha', 'omega' };*/

var range = new Array(14);
  range[0] = 'null';
  range[1] = 'Touch';
  range[2] = '<3';
  range[3] = '<5';
  range[4] = '<10';
  range[5] = '<20';
  range[6] = '<30';
  range[7] = '<50';
  range[8] = '<100';
  range[9] = '<200';
  range[10] = '<500';
  range[11] = '<1k';
  range[12] = '<2k';
  range[13] = '<5k';

var rangeDR = new Array(14);
  rangeDR[0] = 0;
  rangeDR[1] = 2;
  rangeDR[2] = 4;
  rangeDR[3] = 6;
  rangeDR[4] = 8;
  rangeDR[5] = 10;
  rangeDR[6] = 12;
  rangeDR[7] = 14;
  rangeDR[8] = 16;
  rangeDR[9] = 18;
  rangeDR[10] = 20;
  rangeDR[11] = 22;
  rangeDR[12] = 24;
  rangeDR[13] = 26;

var not = new Array(14);
  not[0] = 'null';
  not[1] = 'Self';
  not[2] = '<3';
  not[3] = '<5';
  not[4] = '<10';
  not[5] = '<20';
  not[6] = '<30';
  not[7] = '<50';
  not[8] = '<100';
  not[9] = '<200';
  not[10] = '<500';
  not[11] = '<1k';
  not[12] = '<2k';
  not[13] = '<5k';

var notDR = new Array(14);
  notDR[0] = 0;
  notDR[1] = 2;
  notDR[2] = 4;
  notDR[3] = 6;
  notDR[4] = 8;
  notDR[5] = 10;
  notDR[6] = 12;
  notDR[7] = 14;
  notDR[8] = 16;
  notDR[9] = 18;
  notDR[10] = 20;
  notDR[11] = 22;
  notDR[12] = 24;
  notDR[13] = 26;

var damage = new Array(14);
  damage[0] = 'null';
  damage[1] = 'Base';
  damage[2] = '1d4';
  damage[3] = '2d4';
  damage[4] = '2d4x2';
  damage[5] = '3d4x2';
  damage[6] = '4d4x2';
  damage[7] = '5d4x2';
  damage[8] = '6d4x2';
  damage[9] = '6d4x4';
  damage[10] = '6d4x8';
  damage[11] = '6d6x10';
  damage[12] = '6d10x25';
  damage[13] = '6d20x25';

var damageDR = new Array(14);
  damageDR[0] = 0;
  damageDR[1] = 2;
  damageDR[2] = 4;
  damageDR[3] = 8;
  damageDR[4] = 12;
  damageDR[5] = 16;
  damageDR[6] = 20;
  damageDR[7] = 24;
  damageDR[8] = 28;
  damageDR[9] = 32;
  damageDR[10] = 40;
  damageDR[11] = 50;
  damageDR[12] = 62;
  damageDR[13] = 80;

var si = new Array(14);
  si[0] = 'null';
  si[1] = '<10';
  si[2] = '<20';
  si[3] = '<50';
  si[4] = '<100';
  si[5] = '<200';
  si[6] = '<500';
  si[7] = '<1,000';
  si[8] = '<2,000';
  si[9] = '<5,000';
  si[10] = '<10,000';
  si[11] = '<20,000';
  si[12] = '<40,000';
  si[13] = '<80,000';

var siDR = new Array(14);
  siDR[0] = 0;
  siDR[1] = 2;
  siDR[2] = 4;
  siDR[3] = 8;
  siDR[4] = 12;
  siDR[5] = 16;
  siDR[6] = 20;
  siDR[7] = 24;
  siDR[8] = 28;
  siDR[9] = 32;
  siDR[10] = 40;
  siDR[11] = 50;
  siDR[12] = 62;
  siDR[13] = 80;

var weight = new Array(14);
  weight[0] = 'null';
  weight[1] = '<10';
  weight[2] = '<20';
  weight[3] = '<50';
  weight[4] = '<100';
  weight[5] = '<200';
  weight[6] = '<500';
  weight[7] = '<1,000';
  weight[8] = '<2,000';
  weight[9] = '<5,000';
  weight[10] = '<10,000';
  weight[11] = '<20,000';
  weight[12] = '<40,000';
  weight[13] = '<80,000';

var weightDR = new Array(14);
  weightDR[0] = 0;
  weightDR[1] = 2;
  weightDR[2] = 4;
  weightDR[3] = 8;
  weightDR[4] = 12;
  weightDR[5] = 16;
  weightDR[6] = 20;
  weightDR[7] = 24;
  weightDR[8] = 28;
  weightDR[9] = 32;
  weightDR[10] = 40;
  weightDR[11] = 50;
  weightDR[12] = 62;
  weightDR[13] = 80;

var durationC = new Array(14);
  durationC[0] = 'null';
  durationC[1] = '1';
  durationC[2] = '2';
  durationC[3] = '3';
  durationC[4] = '4';
  durationC[5] = '5';
  durationC[6] = '6';
  durationC[7] = '7';
  durationC[8] = '8';
  durationC[9] = '9';
  durationC[10] = '10';
  durationC[11] = '11-12';
  durationC[12] = '13-14';
  durationC[13] = '15-20';

var durationCDR = new Array(14);
  durationCDR[0] = 0;
  durationCDR[1] = 1;
  durationCDR[2] = 3;
  durationCDR[3] = 5;
  durationCDR[4] = 7;
  durationCDR[5] = 9;
  durationCDR[6] = 11;
  durationCDR[7] = 13;
  durationCDR[8] = 15;
  durationCDR[9] = 17;
  durationCDR[10] = 19;
  durationCDR[11] = 21;
  durationCDR[12] = 23;
  durationCDR[13] = 25;

var durationN = new Array(14);
  durationN[0] = 'null';
  durationN[1] = '<1';
  durationN[2] = '<5';
  durationN[3] = '<10';
  durationN[4] = '<20';
  durationN[5] = '<40';
  durationN[6] = '<60';
  durationN[7] = '<90';
  durationN[8] = '<120';
  durationN[9] = '<180';
  durationN[10] = '<240';
  durationN[11] = '<360';
  durationN[12] = '<540';
  durationN[13] = '<780';

var durationNDR = new Array(14);
  durationNDR[0] = 0;
  durationNDR[1] = 0;
  durationNDR[2] = 1;
  durationNDR[3] = 2;
  durationNDR[4] = 3;
  durationNDR[5] = 4;
  durationNDR[6] = 5;
  durationNDR[7] = 6;
  durationNDR[8] = 8;
  durationNDR[9] = 10;
  durationNDR[10] = 12;
  durationNDR[11] = 15;
  durationNDR[12] = 20;
  durationNDR[13] = 25;

var modMajor = new Array(14);
  modMajor[0] = 'null';
  modMajor[1] = '1';
  modMajor[2] = '2';
  modMajor[3] = '3';
  modMajor[4] = '4';
  modMajor[5] = '5';

var modMajorDR = new Array(14);
  modMajorDR[0] = 0;
  modMajorDR[1] = 10;
  modMajorDR[2] = 14;
  modMajorDR[3] = 18;
  modMajorDR[4] = 22;
  modMajorDR[5] = 26;

var modMinor = new Array(14);
  modMinor[0] = 'null';
  modMinor[1] = '1';
  modMinor[2] = '2';
  modMinor[3] = '3';
  modMinor[4] = '4';
  modMinor[5] = '5';
  modMinor[6] = '6';
  modMinor[7] = '7';
  modMinor[8] = '8';
  modMinor[9] = '9';
  modMinor[10] = '10';
  modMinor[11] = '11';
  modMinor[12] = '12';
  modMinor[13] = '13';

var modMinorDR = new Array(14);
  modMinorDR[0] = 0;
  modMinorDR[1] = 2;
  modMinorDR[2] = 4;
  modMinorDR[3] = 6;
  modMinorDR[4] = 8;
  modMinorDR[5] = 10;
  modMinorDR[6] = 12;
  modMinorDR[7] = 14;
  modMinorDR[8] = 16;
  modMinorDR[9] = 18;
  modMinorDR[10] = 20;
  modMinorDR[11] = 22;
  modMinorDR[12] = 24;
  modMinorDR[13] = 26;

var wt = new Array(14);
  wt[0] = 0;
  wt[1] = 4;
  wt[2] = 10;
  wt[3] = 20;
  wt[4] = 30;
  wt[5] = 40;
  wt[6] = 50;
  wt[7] = 60;
  wt[8] = 70;
  wt[9] = 80;
  wt[10] = 110;
  wt[11] = 130;
  wt[12] = 150;
  wt[13] = 180;

var tot = new Array(14);
  tot[0] = 'Base';
  tot[1] = '-1';
  tot[2] = '-2';
  tot[3] = '-3';
  tot[4] = '-4';
  tot[5] = '-5';
  tot[6] = '-6';
  tot[7] = '-7';
  tot[8] = '-8';
  tot[9] = '-9';
  tot[10] = '-10';
  tot[11] = '-11';
  tot[12] = '-12';

var totDR = new Array(14);
  totDR[0] = 0;
  totDR[1] = 2;
  totDR[2] = 4;
  totDR[3] = 6;
  totDR[4] = 8;
  totDR[5] = 10;
  totDR[6] = 12;
  totDR[7] = 14;
  totDR[8] = 16;
  totDR[9] = 18;
  totDR[10] = 20;
  totDR[11] = 22;
  totDR[12] = 24;
