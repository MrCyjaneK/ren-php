<?php
define('ME', 'Czarek Nakamoto');
define('YOU', 'You');
scenario_add('entry', YOU, "*Hm, okay so that's him I guess*", ["entry0" => "-->"]);
scenario_add('entry0', YOU, "*Yeah, that's him, what should I say?*", ["saidhi" => "Hey", "saidsir" => "Hello Sir!", "scamend" => "Check this CrYpToCuRrEnCy wEbSiTe!!1!!1<br />They are giving 50$ for freeeee!!!!!<br />If you use my link you will get a huuuuuge bonus: https://t.me/UnusedRobot?start=legit".rand(1,99999)]);
scenario_add('saidhi', ME, "Hey there!", ["main" => "-->"]);
scenario_add('saidsir', ME, "Nah, don't call me Sir, I'm not that old.", ["saidsir->okay" => "Heh, Okay", "saidsir->how" => "Oh, ok, then how should I call you?"]);
    scenario_add('saidsir->okay', ME, "Great then! I don't like that official tone ;p.", ["main" => "-->"]);
    scenario_add('saidsir->how', ME, "Well, you can call me Czarek, Cyjan or simply use You/He, it doesn't really matter for me :)", ["saidsir->okay" => "Oh, Okay."]);

scenario_add('main', YOU, "*So... what I've wanted to ask him about?*", ["c0" => "How about asking how is he doing?"]);

scenario_add('c0', YOU, "How are you?", ["c0-0" => "-->"]);
scenario_add('c0-0', ME, "I'm fine", ["c0-1" => "-->"]);
scenario_add('c0-1', ME, "How can I help you?", ["main" => "-->"]);

scenario_add('scamend',ME, "*Clicks Report and Block*", ["scamend0" => "-->"]);
scenario_add('scamend0', 'Game', "The End!", ["entry" => 'Try Again']);
