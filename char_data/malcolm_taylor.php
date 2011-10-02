<?php
$userId = (isset($_GET["userId"]) ? $_GET["userId"] : "");
$callback = $_GET["callback"];


$char = array (	array (
									"details" =>
										array (
											'name' => 'Malcom Taylor',
											'age' => '211',
											'gender' => 'Male',
											'species' => 'Nephilum',
											'height' => '7\'4"',
											'weight' => '335lbs',
											'characteristics' => 'Woven Bamboo Ashigaru Hat, tattered crimson cloak, tinted goggles to hide glowing white eyes.',
											'background' => '',
										),
										"core" =>
											array (
												'str' => '24',
												'agi' => '24',
												'con' => '24',
												'vit' => '24',
												'dis' => '30',
												'int' => '24',
												'cha' => '22',
											),
										"skills" =>
											array (
												"mental" =>
													array (
														"science" => '3',
															array (
																'biology' => '2',
																'chemistry' => '0',
																'genetics' => '4',
																'medicine' => '7',
																'arcane' => '0',
															),
													),
												"physical" =>
													array (
														"melee_combat" => '4',
															array (
																'one_handed_melee' => '10',
																'two_handed_melee' => '0',
																'unarmed' => '5',
																'grapple' => '5',
															),
													),
											),
										)
				);

$output = json_encode($char);
print ( $output );

?>

