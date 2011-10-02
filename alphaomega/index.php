<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>CharacterHUD</title>
<?php
  include 'char_parse.php';
?>
		<script type="text/javascript" src="js/jquery.js">/* for ie*/</script>
		<script type="text/javascript" src="js/jquery.hoverIntent.js">/* for ie*/</script>
		<link type="text/css" rel="stylesheet" href="css/_styles.css" />
		<script type="text/javascript" src="js/_script.js">/* for ie*/</script>
		<script type="text/javascript" src="js/character.js">/* for ie*/</script>
		<script type="text/javascript" src="js/functions_ao.js">/* for ie*/</script>
	</head>
	<body>
			<div id="exp" class="exp">
        <script type="text/javascript">
          document.write('<p>Total CDP: '+c.cdp.total.value+'</p>');
          document.write('<p>Remaining: '+c.cdp.remainder.value+'</p>');
         </script>
			</div>
			<div class="header">
        <div class="top_menu">
          <script type="text/javascript">
            document.write('<div id="hp" class="dynamic_values"> '+c.tertiary_qualities.hp.value+' </div>');
            document.write('<div id="end" class="dynamic_values"> '+c.tertiary_qualities.end.value+' </div>');
            document.write('<div id="trust" class="dynamic_values"> '+c.tertiary_qualities.trust.value+'</div>');
          </script>
        </div>
          <p class="hed_name"><script type="text/javascript">document.write(c.bio.name);</script></p>
        <div class="current_roll">
          <span id="current_roll">&nbsp;<!-- result --></span>
        </div>      
			</div>
      <div class="stats">
        <div class="stats_inner" id="core_qualities">
          <ul>
						<script type="text/javascript">
							document.write('<li id="strength" class="roller" value="'+c.core_qualities.strength.value+'">Strength: '+c.core_qualities.strength.value+'</li>');
							document.write('<li id="agility" class="roller" value="'+c.core_qualities.agility.value+'">Agility: '+c.core_qualities.agility.value+'</li>');
							document.write('<li id="conditioning" class="roller" value="'+c.core_qualities.conditioning.value+'">Conditioning: '+c.core_qualities.conditioning.value+'</li>');
							document.write('<li id="vitality" class="roller" value="'+c.core_qualities.vitality.value+'">Vitality: '+c.core_qualities.vitality.value+'</li>');
							document.write('<li id="discipline" class="roller" value="'+c.core_qualities.discipline.value+'">Discipline: '+c.core_qualities.discipline.value+'</li>');
							document.write('<li id="intelligence" class="roller" value="'+c.core_qualities.intelligence.value+'">Intelligence: '+c.core_qualities.intelligence.value+'</li>');
							document.write('<li id="charisma" class="roller" value="'+c.core_qualities.charisma.value+'">Charisma: '+c.core_qualities.charisma.value+'</li>');
						</script>
          </ul>
        </div>
        <div class="stats_inner" id="secondary_qualities">
          <ul>
          <script type="text/javascript">
            document.write('<li id="athleticism" class="roller" value="'+c.secondary_qualities.athleticism.value+'">Athleticism: '+c.secondary_qualities.athleticism.value+'</li>');
            document.write('<li id="physical_acumen" class="roller" value="'+c.secondary_qualities.physical_acumen.value+'">Physical Acumen '+c.secondary_qualities.physical_acumen.value+'</li>');
            document.write('<li id="fitness" class="roller" value="'+c.secondary_qualities.fitness.value+'">Fitness:: '+c.secondary_qualities.fitness.value+'</li>');
            document.write('<li id="will" class="roller" value="'+c.secondary_qualities.will.value+'">Will: '+c.secondary_qualities.will.value+'</li>');
            document.write('<li id="wisdom" class="roller" value="'+c.secondary_qualities.wisdom.value+'">Wisdom: '+c.secondary_qualities.wisdom.value+'</li>');
            document.write('<li id="wit" class="roller" value="'+c.secondary_qualities.wit.value+'">Wit: '+c.secondary_qualities.wit.value+'</li>');
            document.write('<li id="presence" class="roller" value="'+c.secondary_qualities.presence.value+'">Presence: '+c.secondary_qualities.presence.value+'</li>');
          </script>
          </ul>
        </div>
        <div class="stats_inner" id="tertiary_qualities">
          <ul>
          <script type="text/javascript">
            document.write('<li id="reaction" class="roller" value="'+c.tertiary_qualities.reaction.value+'">Reaction: '+c.tertiary_qualities.reaction.value+'</li>');
            document.write('<li id="physis" value="'+c.tertiary_qualities.physis.value+'">Physis: '+c.tertiary_qualities.physis.value+'</li>');
            document.write('<li id="defense_rating" value="'+c.tertiary_qualities.defense_rating.value+'">Defense Rating: '+c.tertiary_qualities.defense_rating.value+'</li>');
          </script>
          </ul>
        </div>
        <div class="stats_inner" id="movement">
          <ul>
          <li id="swim">Swim: 2</li>
          <li id="crawl">Crawl: 2</li>
          <li id="monkey_run">Monkey Run: 4</li>
          <li id="walk">Walk: 4</li>
          <li id="run">Run: 6</li>
          <li id="sprint">Sprint: 10</li>
          <li id="fly">Fly: -</li>
        </div>
      </div>
      <br style="clear: both;" />
			<div class="skills">
			<div id="mental" class="skills_inner">
				<ul>
            <script type="text/javascript">
              document.write('<li id="military_theory" value="'+c.skills.mental.military_theory.ranks+'"><strong>Military Theory</strong>: '+c.skills.mental.military_theory.ranks);
            </script>
					<ul>
            <script type="text/javascript">
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.military_theory.tactics.ranks+'">Tactics: '+c.skills.mental.military_theory.tactics.ranks+'</li>');
              document.write('<li class="roller" quality="presence" value="'+c.skills.mental.military_theory.leadership.ranks+'">Leadership: '+c.skills.mental.military_theory.leadership.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="science" value="'+c.skills.mental.science.ranks+'"><strong>Science</strong>: '+c.skills.mental.science.ranks);
            </script>
					<ul>
            <script type="text/javascript">
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.science.biology.ranks+'">Biology: '+c.skills.mental.science.biology.ranks+'</li>');
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.science.chemistry.ranks+'">Chemistry: '+c.skills.mental.science.chemistry.ranks+'</li>');
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.science.genetics.ranks+'">Genetics: '+c.skills.mental.science.genetics.ranks+'</li>');
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.science.medicine.ranks+'">Medicine: '+c.skills.mental.science.medicine.ranks+'</li>');
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.science.arcane.ranks+'">Arcane: '+c.skills.mental.science.arcane.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="arts" value="'+c.skills.mental.arts.ranks+'"><strong>Arts</strong>: '+c.skills.mental.arts.ranks);
            </script>
					<ul>
            <script type="text/javascript">
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.arts.history.ranks+'">History: '+c.skills.mental.arts.history.ranks+'</li>');
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.arts.sociology.ranks+'">Sociology: '+c.skills.mental.arts.history.ranks+'</li>');
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.arts.theology.ranks+'">Theology: '+c.skills.mental.arts.theology.ranks+'</li>');
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.arts.law.ranks+'">Law: '+c.skills.mental.arts.law.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="survival" value="'+c.skills.mental.survival.ranks+'"><strong>Survival</strong>: '+c.skills.mental.survival.ranks);
            </script>
					<ul>
            <script type="text/javascript">
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.survival.orienteering.ranks+'">Orienteering: '+c.skills.mental.survival.orienteering.ranks+'</li>');
              document.write('<li class="roller" quality="presence" value="'+c.skills.mental.survival.animal_handling.ranks+'">Animal Handling: '+c.skills.mental.survival.animal_handling.ranks+'</li>');
              document.write('<li class="roller" quality="will" value="'+c.skills.mental.survival.living_off_the_land.ranks+'">Living off the Land: '+c.skills.mental.survival.living_off_the_land.ranks+'</li>');
              document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.survival.tracking.ranks+'">Tracking: '+c.skills.mental.survival.tracking.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="commerce" value="'+c.skills.mental.commerce.ranks+'"><strong>Commerce</strong>: '+c.skills.mental.commerce.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="presence" value="'+c.skills.mental.commerce.barter.ranks+'">Barter: '+c.skills.mental.commerce.barter.ranks+'</li>');
						document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.commerce.production.ranks+'">Production: '+c.skills.mental.commerce.production.ranks+'</li>');
						document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.commerce.business_administration.ranks+'">Business Administration: '+c.skills.mental.commerce.business_administration.ranks+'</li>');
						document.write('<li class="roller" quality="wit" value="'+c.skills.mental.commerce.networking.ranks+'">Networking: '+c.skills.mental.commerce.networking.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="alertness" value="'+c.skills.mental.alertness.ranks+'"><strong>Alertness</strong>: '+c.skills.mental.alertness.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="wit" value="'+c.skills.mental.alertness.sense_action.ranks+'">Sense Action: '+c.skills.mental.alertness.sense_action.ranks+'</li>');
						document.write('<li class="roller" quality="wit" value="'+c.skills.mental.alertness.read_people.ranks+'">Read People: '+c.skills.mental.alertness.read_people.ranks+'</li>');
						document.write('<li class="roller" quality="wit" value="'+c.skills.mental.alertness.concentration.ranks+'">Concentration: '+c.skills.mental.alertness.concentration.ranks+'</li>');
						document.write('<li class="roller" quality="wit" value="'+c.skills.mental.alertness.detection.ranks+'">Detection: '+c.skills.mental.alertness.detection.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="technology" value="'+c.skills.mental.technology.ranks+'"><strong>Technology</strong>: '+c.skills.mental.technology.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.technology.electronics.ranks+'">Electronics: '+c.skills.mental.technology.electronics.ranks+'</li>');
						document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.technology.mechanical_technologies.ranks+'">Mechanical Technologies: '+c.skills.mental.technology.mechanical_technologies.ranks+'</li>');
						document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.technology.structural_technologies.ranks+'">Structural Technologies: '+c.skills.mental.technology.structural_technologies.ranks+'</li>');
						document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.technology.computer_technologies.ranks+'">Computer Technologies: '+c.skills.mental.technology.computer_technologies.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="fine_arts" value="'+c.skills.mental.fine_arts.ranks+'"><strong>Fine Arts</strong>: '+c.skills.mental.fine_arts.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.fine_arts.visual_arts.ranks+'">Visual Arts: '+c.skills.mental.fine_arts.visual_arts.ranks+'</li>');
						document.write('<li class="roller" quality="wit" value="'+c.skills.mental.fine_arts.writing.ranks+'">Writing: '+c.skills.mental.fine_arts.writing.ranks+'</li>');
						document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.fine_arts.culinary_arts.ranks+'">Culinary Arts: '+c.skills.mental.fine_arts.culinary_arts.ranks+'</li>');
						document.write('<li class="roller" quality="wit" value="'+c.skills.mental.fine_arts.performing_arts.ranks+'">Performing: '+c.skills.mental.fine_arts.performing_arts.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">0
              document.write('<li id="coercion" value="'+c.skills.mental.coercion.ranks+'"><strong>Coercion</strong>: '+c.skills.mental.coercion.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="wit" value="'+c.skills.mental.coercion.bluff.ranks+'">Bluff: '+c.skills.mental.coercion.bluff.ranks+'</li>');
						document.write('<li class="roller" quality="presence" value="'+c.skills.mental.coercion.intimidation.ranks+'">Intimidation: '+c.skills.mental.coercion.intimidation.ranks+'</li>');
						document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.coercion.negotiation.ranks+'">Negotiation: '+c.skills.mental.coercion.negotiation.ranks+'</li>');
						document.write('<li class="roller" quality="presence" value="'+c.skills.mental.coercion.manipulation.ranks+'">Manipulation: '+c.skills.mental.coercion.manipulation.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="nefarious" value="'+c.skills.mental.nefarious.ranks+'"><strong>Nefarious</strong>: '+c.skills.mental.nefarious.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="wit" value="'+c.skills.mental.nefarious.gather_information.ranks+'">Gather Information: '+c.skills.mental.nefarious.gather_information.ranks+'</li>');
						document.write('<li class="roller" quality="wit" value="'+c.skills.mental.nefarious.gamble.ranks+'">Gamble: '+c.skills.mental.nefarious.gamble.ranks+'</li>');
						document.write('<li class="roller" quality="will" value="'+c.skills.mental.nefarious.sleight_of_hand.ranks+'">Slieght of Hand: '+c.skills.mental.nefarious.sleight_of_hand.ranks+'</li>');
						document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.nefarious.appraise.ranks+'">Appraise: '+c.skills.mental.nefarious.appraise.ranks+'</li>');
						document.write('<li class="roller" quality="wisdom" value="'+c.skills.mental.nefarious.street_smarts.ranks+'">Street Smarts: '+c.skills.mental.nefarious.street_smarts.ranks+'</li>');
            </script>
					</ul>
					</li>
				</ul>
			</div>
			<div id="physical" class="skills_inner">
				<ul>
            <script type="text/javascript">
              document.write('<li id="melee_combat" value="'+c.skills.physical.melee_combat.ranks+'"><strong>Melee Combat</strong>: '+c.skills.physical.melee_combat.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.melee_combat.one_handed_melee.ranks+'">One Handed Melee: '+c.skills.physical.melee_combat.one_handed_melee.ranks+'</li>');
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.melee_combat.two_handed_melee.ranks+'">Two Handed Melee: '+c.skills.physical.melee_combat.two_handed_melee.ranks+'</li>');
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.melee_combat.unarmed.ranks+'">Unarmed Melee: '+c.skills.physical.melee_combat.unarmed.ranks+'</li>');
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.melee_combat.grapple.ranks+'">Grapple: '+c.skills.physical.melee_combat.grapple.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="operate_vehicle" value="'+c.skills.physical.operate_vehicle.ranks+'"><strong>Operate Vehicle</strong>: '+c.skills.physical.operate_vehicle.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.operate_vehicle.ground_vehicles.ranks+'">Ground Vehicles: '+c.skills.physical.operate_vehicle.ground_vehicles.ranks+'</li>');
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.operate_vehicle.aircraft.ranks+'">Aircraft: '+c.skills.physical.operate_vehicle.aircraft.ranks+'</li>');
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.operate_vehicle.watercraft.ranks+'">Watercraft: '+c.skills.physical.operate_vehicle.watercraft.ranks+'</li>');
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.operate_vehicle.power_suites.ranks+'">Power Suits: '+c.skills.physical.operate_vehicle.power_suites.ranks+'</li>');
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.operate_vehicle.industrial_vehicles.ranks+'">Industrial Vehicles: '+c.skills.physical.operate_vehicle.industrial_vehicles.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="core_fitness" value="'+c.skills.physical.core_fitness.ranks+'"><strong>Core Fitness</strong>: '+c.skills.physical.core_fitness.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="fitness" value="'+c.skills.physical.core_fitness.running.ranks+'">Running: '+c.skills.physical.core_fitness.running.ranks+'</li>');
						document.write('<li class="roller" quality="fitness" value="'+c.skills.physical.core_fitness.swimming.ranks+'">Swimming: '+c.skills.physical.core_fitness.swimming.ranks+'</li>');
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.core_fitness.climbing.ranks+'">Climbing: '+c.skills.physical.core_fitness.climbing.ranks+'</li>');
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.core_fitness.throwing.ranks+'">Throwing: '+c.skills.physical.core_fitness.throwing.ranks+'</li>');
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.core_fitness.tumble.ranks+'">Tumble: '+c.skills.physical.core_fitness.tumble.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="espionage" value="'+c.skills.physical.espionage.ranks+'"><strong>Espionage</strong>: '+c.skills.physical.espionage.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.espionage.theft.ranks+'">Theft: '+c.skills.physical.espionage.theft.ranks+'</li>');
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.espionage.stealth.ranks+'">Stealth: '+c.skills.physical.espionage.stealth.ranks+'</li>');
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.espionage.escape_artist.ranks+'">Escape Artist: '+c.skills.physical.espionage.escape_artist.ranks+'</li>');
						document.write('<li class="roller" quality="presence" value="'+c.skills.physical.espionage.deceive.ranks+'">Deceive: '+c.skills.physical.espionage.deceive.ranks+'</li>');
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.espionage.defeat_security.ranks+'">Defeat Security: '+c.skills.physical.espionage.defeat_security.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="assault_support_weapons" value="'+c.skills.physical.assault_support_weapons.ranks+'"><strong>Assault Support Weapons</strong>: '+c.skills.physical.assault_support_weapons.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="athleticism" value="'+c.skills.physical.assault_support_weapons.heavy_assault_weapons.ranks+'">Heavy Assault Weapons: '+c.skills.physical.assault_support_weapons.heavy_assault_weapons.ranks+'</li>');
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.assault_support_weapons.launchers_and_mortars.ranks+'">Launchers and Mortars: '+c.skills.physical.assault_support_weapons.launchers_and_mortars.ranks+'</li>');
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.assault_support_weapons.explosives.ranks+'">Explosives: '+c.skills.physical.assault_support_weapons.explosives.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="small_arms" value="'+c.skills.physical.small_arms.ranks+'"><strong>Small Arms</strong>: '+c.skills.physical.small_arms.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.small_arms.pistols_and_smgs.ranks+'">Pistols and SMGs: '+c.skills.physical.small_arms.pistols_and_smgs.ranks+'</li>');
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.small_arms.rifles_and_shotguns.ranks+'">Rifles and Shotguns: '+c.skills.physical.small_arms.rifles_and_shotguns.ranks+'</li>');
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.small_arms.bows_and_crossbows.ranks+'">Bows and Crossbows: '+c.skills.physical.small_arms.bows_and_crossbows.ranks+'</li>');
            </script>
					</ul>
					</li>
            <script type="text/javascript">
              document.write('<li id="vehicle_systems" value="'+c.skills.physical.vehicle_systems.ranks+'"><strong>Vehicle Systems</strong>: '+c.skills.physical.vehicle_systems.ranks);
            </script>
					<ul>
            <script type="text/javascript">
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.vehicle_systems.navigation_systems.ranks+'">Navigation Systems: '+c.skills.physical.vehicle_systems.navigation_systems.ranks+'</li>');
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.vehicle_systems.weapon_systems.ranks+'">Weapon Systems: '+c.skills.physical.vehicle_systems.weapon_systems.ranks+'</li>');
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.vehicle_systems.sensory_and_comms.ranks+'">Sensory and Comms: '+c.skills.physical.vehicle_systems.sensory_and_comms.ranks+'</li>');
						document.write('<li class="roller" quality="physical_acumen" value="'+c.skills.physical.vehicle_systems.equipment_systems.ranks+'">Equipment Systems: '+c.skills.physical.vehicle_systems.equipment_systems.ranks+'</li>');
            </script>
					</ul>
					</li>
				</ul>
			</div>

      <div id="roll_history">
        <p><strong>Roll History</strong></p>
        <div id="rolls">
          <!-- container for roll results -->
        </div>
      </div>
    <div id="quick_menu" onmouseover="clearMenu()" onmouseout="unpopMenu()">
      <ul>
        <li value="6" onclick="timeOut(); rollThis(6);">roll 6</li>
        <li value="5" onclick="timeOut(); rollThis(5);">roll 5</li>
        <li value="4" onclick="timeOut(); rollThis(4);">roll 4</li>
        <li value="3" onclick="timeOut(); rollThis(3);">roll 3</li>
        <li value="2" onclick="timeOut(); rollThis(2);">roll 2</li>
        <li value="1" onclick="timeOut(); rollThis(1);">roll 1</li>
      </ul>
    </div>
    <div id="main_menu">
      <ul>
        <li class="abilities">Abilities</li>
        <li class="drawbacks">Drawbacks</li>
        <li class="deviations">Deviations</li>
        <li class="ascension">Ascension</li>
        <li class="equipment">Equipment</li>
        <li class="wielding" onclick="wieldpop();">Wielding</li>
      </ul>
    </div>
    <div id="abilities">
    </div>
    <div id="drawbacks">
    </div>
    <div id="deviations">
    </div>
    <div id="ascension">
    </div>
    <div id="equipment">
    </div>
    <div id="wielding">
      <ul id="sources">
      <script type="text/javascript">
        document.write('<li class="source" id="elemental" value="'+c.wielding.sources.elemental.ranks+'" onclick="wield.source = \'Elemental\'; wield.sourceVal = this.value; w_populate();">Elemental: '+c.wielding.sources.elemental.ranks+'</li>');
        document.write('<li class="source" id="energy" value="'+c.wielding.sources.energy.ranks+'" onclick="wield.source = \'Energy\'; wield.sourceVal = this.value; w_populate();">Energy: '+c.wielding.sources.energy.ranks+'</li>');
        document.write('<li class="source" id="being" value="'+c.wielding.sources.being.ranks+'" onclick="wield.source = \'Being\'; wield.sourceVal = this.value; w_populate();">Being: '+c.wielding.sources.being.ranks+'</li>');
        document.write('<li class="source" id="void" value="'+c.wielding.sources.void.ranks+'" onclick="wield.source = \'Void\'; wield.sourceVal = this.value; w_populate();">Void: '+c.wielding.sources.void.ranks+'</li>');
        document.write('<li class="source" id="alpha" value="'+c.wielding.sources.alpha.ranks+'" onclick="wield.source = \'Alpha\'; wield.sourceVal = this.value; w_populate();">Alpha: '+c.wielding.sources.alpha.ranks+'</li>');
      </script>
          <!--<li id="omega" value="0">Omega: 0</li>-->
      </ul>
      <ul id="intentions">
        <li>Bane
        <ul id="bane">
          <script type="text/javascript">
            document.write('<li class="intention" id="agony" value="'+c.wielding.intentions.bane.agony.ranks+'" onclick="wield.intent = \'Agony\'; wield.intentVal = this.value; w_populate();">Agony: '+c.wielding.intentions.bane.agony.ranks+'</li>');
            document.write('<li class="intention" id="damnation" value="'+c.wielding.intentions.bane.damnation.ranks+'" onclick="wield.intent = \'Damnation\'; wield.intentVal = this.value; w_populate();">Damnation: '+c.wielding.intentions.bane.damnation.ranks+'</li>');
            document.write('<li class="intention" id="nihilism" value="'+c.wielding.intentions.bane.nihilism.ranks+'" onclick="wield.intent = \'Nihilism\'; wield.intentVal = this.value; w_populate();">Nihilism: '+c.wielding.intentions.bane.nihilism.ranks+'</li>');
            document.write('<li class="intention" id="malice" value="'+c.wielding.intentions.bane.malice.ranks+'" onclick="wield.intent = \'Malice\'; wield.intentVal = this.value; w_populate();">Malice: '+c.wielding.intentions.bane.malice.ranks+'</li>');
          </script>
        </ul>
        </li>
        <li>Chaos
        <ul id="chaos">
          <script type="text/javascript">
            document.write('<li class="intention" id="entropy" value="'+c.wielding.intentions.chaos.entropy.ranks+'" onclick="wield.intent = \'Entropy\'; wield.intentVal = this.value; w_populate();">Entropy: '+c.wielding.intentions.chaos.entropy.ranks+'</li>');
            document.write('<li class="intention" id="insanity" value="'+c.wielding.intentions.chaos.insanity.ranks+'" onclick="wield.intent = \'Insanity\'; wield.intentVal = this.value; w_populate();">Insanity: '+c.wielding.intentions.chaos.insanity.ranks+'</li>');
            document.write('<li class="intention" id="ignorance" value="'+c.wielding.intentions.chaos.ignorance.ranks+'" onclick="wield.intent = \'Ignorance\'; wield.intentVal = this.value; w_populate();">Ignorance: '+c.wielding.intentions.chaos.ignorance.ranks+'</li>');
            document.write('<li class="intention" id="anarchy" value="'+c.wielding.intentions.chaos.anarchy.ranks+'" onclick="wield.intent = \'Anarchy\'; wield.intentVal = this.value; w_populate();">Anarchy: '+c.wielding.intentions.chaos.anarchy.ranks+'</li>');
          </script>
        </ul>
        </li>
        <li>Sancto
        <ul id="sancto">
          <script type="text/javascript">
            document.write('<li class="intention" id="deliverance" value="'+c.wielding.intentions.sancto.deliverance.ranks+'" onclick="wield.intent = \'Deliverance\'; wield.intentVal = this.value; w_populate();">Deliverance: '+c.wielding.intentions.sancto.deliverance.ranks+'</li>');
            document.write('<li class="intention" id="salvation" value="'+c.wielding.intentions.sancto.salvation.ranks+'" onclick="wield.intent = \'Salvation\'; wield.intentVal = this.value; w_populate();">Salvation: '+c.wielding.intentions.sancto.salvation.ranks+'</li>');
            document.write('<li class="intention" id="creation" value="'+c.wielding.intentions.sancto.creation.ranks+'" onclick="wield.intent = \'Creation\'; wield.intentVal = this.value; w_populate();">Creation: '+c.wielding.intentions.sancto.creation.ranks+'</li>');
            document.write('<li class="intention" id="inspiration" value="'+c.wielding.intentions.sancto.inspiration.ranks+'" onclick="wield.intent = \'Inspiration\'; wield.intentVal = this.value; w_populate();">Inspiration: '+c.wielding.intentions.sancto.inspiration.ranks+'</li>');
          </script>
        </ul>
        </li>
        <li>Order
        <ul id="order">
          <script type="text/javascript">
            document.write('<li class="intention" id="constancy" value="'+c.wielding.intentions.order.constancy.ranks+'" onclick="wield.intent = \'Constancy\'; wield.intentVal = this.value; w_populate();">Constancy: '+c.wielding.intentions.order.constancy.ranks+'</li>');
            document.write('<li class="intention" id="clarity" value="'+c.wielding.intentions.order.clarity.ranks+'" onclick="wield.intent = \'Clarity\'; wield.intentVal = this.value; w_populate();">Clarity: '+c.wielding.intentions.order.clarity.ranks+'</li>');
            document.write('<li class="intention" id="insight" value="'+c.wielding.intentions.order.insight.ranks+'" onclick="wield.intent = \'Insight\'; wield.intentVal = this.value; w_populate();">Insight: '+c.wielding.intentions.order.insight.ranks+'</li>');
            document.write('<li class="intention" id="control" value="'+c.wielding.intentions.order.control.ranks+'" onclick="wield.intent = \'Control\'; wield.intentVal = this.value; w_populate();">Control: '+c.wielding.intentions.order.control.ranks+'</li>');
          </script>
        </ul>
        </li>
      </ul>
      <div class="rightCol">
        <p><strong><u>Wield Calculator</u></strong></p>
        <p>
					Source: <span id="source_container"><!-- source --></span>
        </p>
        <p>
					Intention: <span id="intention_container"><!-- intention --></span>
        </p>
				<br />
        <table>
					<tr>
						<td>&nbsp;</td>
						<td>range:</td>
						<td><img src="images/arrow_l.gif" onclick="wield.decRange(); $('#range_container').html(wield.updateValues());" /></td>
						<td style="text-align: center;"><strong><span id="range_container">null</span></strong></td>
						<td><img src="images/arrow_r.gif" onclick="wield.incRange(); $('#range_container').html(wield.updateValues());" /></td>
					</tr>
          <tr>
						<td>&nbsp;</td>
            <td style="width: 12em;">not/aoe:</td>
            <td><img src="images/arrow_l.gif" onclick="wield.decNot(); $('#not_container').html(wield.updateValues());" /></td>
            <td style="width: 8em; text-align: center;"><strong><span id="not_container">null</span></strong></td>
            <td><img src="images/arrow_r.gif" onclick="wield.incNot(); $('#not_container').html(wield.updateValues());" /></td>
          </tr>
          <tr>
            <td><img src="images/grey_cross.gif" onclick="wield.switchPot(); wield.updateValues();" /></td>
            <td><span id="potent_switch">damage/healing</span>:</td>
            <td><img src="images/arrow_l.gif" onclick="wield.decPot(); $('#potent_container').html(wield.updateValues());" /></td>
            <td style="text-align: center; text-align: center;"><strong><span id="potent_container">null</span></strong></td>
            <td><img src="images/arrow_r.gif" onclick="wield.incPot(); $('#potent_container').html(wield.updateValues());" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>wt(lbs):</td>
            <td><img src="images/arrow_l.gif" onclick="wield.decWeight(); $('#weight_container').html(wield.updateValues());" /></td>
            <td style="text-align: center;"><strong><span id="weight_container">null</span></strong></td>
            <td><img src="images/arrow_r.gif" onclick="wield.incWeight(); $('#weight_container').html(wield.updateValues());" /></td>
          </tr>
          <tr>
            <td><img src="images/grey_cross.gif" onclick="wield.switchDur(); wield.updateValues();" /></td>
            <td><span id="dur_switch">duration (combat)</span>:</td>
            <td><img src="images/arrow_l.gif" onclick="wield.decDur(); $('#duration_container').html(wield.updateValues());" /></td>
            <td style="text-align: center;"><strong><span id="duration_container">null</span></strong></td>
            <td><img src="images/arrow_r.gif" onclick="wield.incDur(); $('#duration_container').html(wield.updateValues());" /></td>
          </tr>
          <tr>
            <td><img src="images/grey_cross.gif" onclick="wield.switchMod(); wield.updateValues();" /></td>
            <td><span id="mod_switch">modifier (minor)</span>:</td>
            <td><img src="images/arrow_l.gif" onclick="wield.decMod(); $('#mod_container').html(wield.updateValues());" /></td>
            <td style="text-align: center;"><strong><span id="mod_container">null</span></strong></td>
            <td><img src="images/arrow_r.gif" onclick="wield.incMod(); $('#mod_container').html(wield.updateValues());" /></td>
          </tr>
          <tr>
						<td>&nbsp;</td>
            <td>time on target:</td>
            <td><img src="images/arrow_l.gif" onclick="wield.decTot(); $('#tot_container').html(wield.updateValues());" /></td>
            <td style="text-align: center;"><strong><span id="tot_container">Base</span></strong></td>
            <td><img src="images/arrow_r.gif" onclick="wield.incTot(); $('#tot_container').html(wield.updateValues());" /></td>
          </tr>
				</table>
				<br />
				<br />
        <p>
				<strong>Wield Time:</strong> <strong><span id="wt_container">1</span></strong>
        </p>
        <p>
				<strong>Endurance:</strong> <strong><span id="end_container">1</span></strong>
        </p>
        <p>
				<strong>DR:</strong> <strong><span id="dr_container">0</span></strong>
        </p>
      </div>
    </div>
    <div class="footer_pad">&nbsp;</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19915133-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>
</html>
