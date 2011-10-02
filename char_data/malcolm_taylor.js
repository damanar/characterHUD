var c = {
  'name': "Malcolm Taylor",
  'player': "damanar",

//core qualities
  'strength': 26,
  'agility': 24,
  'conditioning': 24,
  'vitality': 24,
  'discipline': 30,
  'intelligence': 24,
  'charisma': 22
}

//secondary qualities, (derived from core qualities)
c.athleticism = (c.strength+c.agility)/2;
c.physical_acumen = (c.agility+c.conditioning)/2;
c.fitness = (c.conditioning+c.vitality)/2;
c.will = (c.vitality+c.discipline)/2;
c.wisdom = (c.discipline+c.intelligence)/2;
c.wit = (c.intelligence+c.charisma)/2;
c.presence = (c.charisma+c.strength)/2;

//tertiary qualities, (derived from core and secondary)
c.reaction = Math.round((c.athleticism + c.wisdom)/2);
c.physis = Math.round((c.strength + c.agility + c.conditioning + c.vitality + c.discipline + c.intelligence + c.charisma)/7);
c.defense_rating = Math.round(c.reaction/2);

//skills
var s = {
  'mental': {
    'fields': {
      'military_theory': 0,
      'science': 0,
      'arts': 0,
      'survival': 0,
      'commerce': 0,
      'alertness': 0,
      'technology': 1,
      'fine_arts': 0,
      'coercion': 0,
      'nefarious': 0
    },
    'skills': {
      'military_theory': {
        'tactics': {
          'ranks': 0,
          'quality': 'wisdom',
        },
        'leadership': {
          'ranks': 0,
          'quality': 'presence'
        }
      },
      'science': {
        'biology': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'chemistry': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'genetics': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'medicine': {
          'ranks': 1,
          'quality': 'wisdom'
        }
      },
      'arts': {
        'history': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'sociology': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'theology': {
          'ranks': 1,
          'quality': 'wisdom'
        },
        'law': {
          'ranks': 0,
          'quality': 'wisdom'
        }
      },
      'survival': {
        'orienteering': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'animal_handeling': {
          'ranks': 0,
          'quality': 'presence'
        },
        'living_off_the_land': {
          'ranks': 0,
          'quality': 'will'
        },
        'tracking': {
          'ranks': 0,
          'quality': 'wisdom'
        }
      },
      'commerce': {
        'barter': {
          'ranks': 0,
          'quality': 'presence'
        },
        'producation': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'business_administration': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'networking': {
          'ranks': 0,
          'quality': 'wit'
        }
      },
      'alertness': {
        'sense_action': {
          'ranks': 0,
          'quality': 'wit'
        },
        'read_people': {
          'ranks': 0,
          'quality': 'wit'
        },
        'concentration': {
          'ranks': 0,
          'quality': 'wit'
        },
        'detection': {
          'ranks': 1,
          'quality': 'wit'
        }
      },
      'technology': {
        'electronics': {
          'ranks': 1,
          'quality': 'wisdom'
        },
        'mechanical_technologies': {
          'ranks': 2,
          'quality': 'wisdom'
        },
        'structural_technologies': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'computer_technologies': {
          'ranks': 0,
          'quality': 'wisdom'
        }
      },
      'fine_arts': {
        'visual_arts': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'writing': {
          'ranks': 0,
          'quality': 'wit'
        },
        'culinary_arts': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'performing': {
          'ranks': 0,
          'quality': 'wit'
        }
      },
      'coercion': {
        'bluff': {
          'ranks': 0,
          'quality': 'wit'
        },
        'intimidation': {
          'ranks': 0,
          'quality': 'presence'
        },
        'negotiation': {
          'ranks': 1,
          'quality': 'wisdom'
        },
        'manipulation': {
          'ranks': 0,
          'quality': 'presence'
        }
      },
      'nefarious': {
        'gather_information': {
          'ranks': 0,
          'quality': 'wit'
        },
        'gamble': {
          'ranks': 0,
          'quality': 'wit'
        },
        'slieght_of_hand': {
          'ranks': 0,
          'quality': 'will'
        },
        'appraise': {
          'ranks': 0,
          'quality': 'wisdom'
        },
        'street_smarts': {
          'ranks': 0,
          'quality': 'wisdom'
        }
      }
    }
  },
  'physical': {
    'fields': {
      'melee_combat': 0,
      'operate_vehicles': 0,
      'core_fitness': 0,
      'espionage': 0,
      'commerce': 0,
      'assault_support_weapons': 0,
      'small_arms': 0,
      'vehicle_systems': 0
    },
    'skills': {
      'melee_combat': {
        'one_handed_melee': {
          'ranks': 2,
          'quality': 'athleticism'
        },
        'two_weapon_melee': {
          'ranks': 0,
          'quality': 'athleticism'
        },
        'unarmed_melee': {
          'ranks': 0,
          'quality': 'athleticism'
        },
        'grapple': {
          'ranks': 0,
          'quality': 'athleticism'
        }
      },
      'operate_vehicles': {
        'ground_vehicles': {
          'ranks': 0,
          'quality': 'athleticism'
        },
        'aircraft': {
          'ranks': 0,
          'quality': 'physical_acumen'
        },
        'watercraft': {
          'ranks': 0,
          'quality': 'athleticism'
        },
        'power_suits': {
          'ranks': 0,
          'quality': 'athleticism'
        },
        'industrial_vehicles': {
          'ranks': 0,
          'quality': 'athleticism'
        }
      },
      'core_fitness': {
        'running': {
          'ranks': 0,
          'quality': 'fitness'
        },
        'swimming': {
          'ranks': 0,
          'quality': 'fitness'
        },
        'climbing': {
          'ranks': 0,
          'quality': 'athleticism'
        },
        'throwing': {
          'ranks': 0,
          'quality': 'physical_acumen'
        },
        'tumble': {
          'ranks': 0,
          'quality': 'athleticism'
        }
      },
      'espionage': {
        'theft': {
          'ranks': 0,
          'quality': 'physical_acumen'
        },
        'stealth': {
          'ranks': 1,
          'quality': 'athleticism'
        },
        'escape_artist': {
          'ranks': 0,
          'quality': 'athleticism'
        },
        'deceive': {
          'ranks': 0,
          'quality': 'presence'
        },
        'defeat_security': {
          'ranks': 0,
          'quality': 'physical_acumen'
        }
      },
      'assault_support_weapons': {
        'heavy_assault_weapons': {
          'ranks': 0,
          'quality': 'athleticism'
        },
        'launchers_and_mortars': {
          'ranks': 0,
          'quality': 'physical_acumen'
        },
        'explosives': {
          'ranks': 0,
          'quality': 'physical_acumen'
        }
      },
      'small_arms': {
        'pistols_and_smgs': {
          'ranks': 0,
          'quality': 'physical_acumen'
        },
        'rifles_and_shotguns': {
          'ranks': 0,
          'quality': 'physical_acumen'
        },
        'bows_and_crossbows': {
          'ranks': 0,
          'quality': 'physical_acumen'
        }
      },
      'vehicle_systems': {
        'navigation_systems': {
          'ranks': 0,
          'quality': 'physical_acumen'
        },
        'weapons_systems': {
          'ranks': 0,
          'quality': 'physical_acumen'
        },
        'sensory_and_comms': {
          'ranks': 0,
          'quality': 'physical_acumen'
        },
        'equipment_systems': {
          'ranks': 0,
          'quality': 'physical_acumen'
        }
      }
    }
  }
}

//wielding
var w = {
  'source': {
    'elemental': 0,
    'energy': 0,
    'being': 0,
    'void': 10,
    'alpha': 6,
    'omega': 0
   },
  'intentions': {
    'bane': {
      'agony': 6,
      'damnation': 0,
      'nihilism': 6,
      'malice': 0
    },
    'chaos': {
      'entropy': 0,
      'insanity': 0,
      'ignorance': 0,
      'anarchy': 0
    },
    'sancto': {
      'deliverance': 0,
      'salvation': 1,
      'creation': 1,
      'inspiration': 0
    },
    'order': {
      'constancy': 0,
      'clarity': 0,
      'insight': 0,
      'control': 2
    }
  }
}
