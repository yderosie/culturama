<?php
			if (!file_exists('../private'))
			{
				mkdir('../private');
			}
			$l_potter = array('name' => "Harry Potter", 'image' => "http://i2.cdscdn.com/pdt2/2/7/0/1/200x200/9782070541270/rw/harry-potter-t-1-harry-potter-a-l-ecole-des-s.jpg", 'description' => "Livre pour la jeunesse", 'stock' => "10", 'prix' => "14.95");
			$l_goriot = array('name' => "Le Père Goriot", 'image' => "http://i2.cdscdn.com/pdt2/2/7/1/1/200x200/9782253004271/rw/le-pere-goriot.jpg", 'description' => "Livre classique", 'stock' => "5", 'prix' =>"5.20");
			$l_hunger = array('name' => "Hunger Games", 'image' =>"http://i2.cdscdn.com/pdt2/6/9/0/1/200x200/9782266182690/rw/hunger-games-tome-1.jpg", 'description' => "Livre pour la Jeunesse", 'stock' => "20", 'prix' => "18.50");
			$l_guide = array('name' => "Le Guide Du Voyageur Galactique", 'image' => "http://i2.cdscdn.com/pdt2/0/1/5/1/200x200/9782070319015/rw/le-guide-du-voyageur-galactique-h2g2-1.jpg", 'description' => "Livre de Science Fiction", 'stock' => "2", 'prix' => "6.80");
			$f_parrain = array('name' => "Le Parrain", 'image' => "http://i2.cdscdn.com/pdt2/4/5/6/1/200x200/auc2009959973456/rw/affiche-du-film-le-parrain-b-w-69-x-102-cm.jpg", 'description' => "Film, Drame", 'stock' => "5", 'prix' => "15.30");
			$f_hunger = array('name' => "Hunger Game", 'image' => "http://i2.cdscdn.com/pdt2/9/6/5/1/200x200/auc2009959945965/rw/affiche-du-film-hunger-games-l-embrasement-6.jpg", 'description' => "Film d'aventure", 'stock' => "20", 'prix' => "15.95");
			$f_jupiter = array('name' => "Jupiter Ascending", 'image' => "http://i2.cdscdn.com/pdt2/7/8/1/1/200x200/5051889459781/rw/dvd-jupiter-ascending.jpg", 'description' => "Film de Science Fiction", 'stock' => "12", 'prix' => "12.60");
			$j_gta = array('name' => "GTA", 'image' => "https://d2e111jq13me73.cloudfront.net/sites/default/files/styles/share_link_image/public/product-images/csm-game/gta-v-box.jpg?itok=3fKRc0GE", 'description' => "Jeux-Video", 'stock' => "16", 'prix' => "70");
			$j_craft = array('name' => "StarCraft", 'image' => "http://i2.cdscdn.com/pdt2/7/3/7/1/200x200/9782809424737/rw/starcraft-2-l-embrasement.jpg", 'description' => "Jeux-Video", 'stock' => "9", 'prix' => "65.30");
			$j_halo = array('name' => "Halo", 'image' => "http://i2.cdscdn.com/pdt2/9/4/9/1/200x200/885370863949/rw/halo-master-chief-collection-jeu-xbox-one.jpg", 'description' => "Jeux-Video", 'stock' => "11", 'prix' => "68.70");
			$tab[0] = $l_potter;
			$tab[1] = $l_goriot;
			$tab[2] = $l_guide;
			$tab[3] = $l_hunger;
			$tab[4] = $f_parrain;
			$tab[5] = $f_jupiter;
			$tab[6] = $f_hunger;
			$tab[7] = $j_halo;
			$tab[8] = $j_gta;
			$tab[9] = $j_craft;
			$tab = serialize($tab);
			file_put_contents('../private/content', $tab);
			$admin[0] = array('login' => 'admin', 'passwd' => hash('whirlpool', 'admin'));
			print_r($admin);
			$admin = serialize($admin);
			file_put_contents('../private/admin', $admin);
			echo "OK\n";
?>