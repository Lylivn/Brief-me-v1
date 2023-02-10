<?php

// Define the list of items
$items1 = array("un site web", "une application mobile", "un site WordPress", "une identité visuelle", "Un logo (avec ses variations simplifiées)", "un brandboard", "un design de packaging", "l'interface web ( seulement UI/IX)", "une affiche", "un design de vêtement", "la première de couverture d'un magazine", "un montage vidéo", "une animation en motion design", "un TikTok");
$items2 = array("la mairie d'Elbeuf", "une agence de Marketing", "Nike", "Adidas", "Apple", "Samsung", "Microsoft", "Amazon", "Tesla", "Toyota", "BMW", "Mercedes-Benz", "Audi", "Puma", "New Balance", "Solary", "Vitality", "Moist Esports", "Karmine Corp", "le parc Nintendo World", "Ikea", "Lidl", "Sony", "Coca-Cola", "Pepsi", "Lipton Ice Tea", "la métropole de Rouen", "M&M's", "Michael Jackson", "The Weeknd", "Dua Lipa", "Monster", "Redbull", "Sega", "Nintendo", "Xbox", "Playstation", "Channel", "Gucci", "Louis Vuitton", "Disney", "Netflix", "T1", "FaZe Clan", "TSM", "Les trésors de Kellogg's", "Une marque de jus de fruit", "Ralph Lauren", "Ubisoft", "Zara", "H&M", "Final Fantasy VII", "Corona", "Heineken", "l'IUT de Rouen", "le département MMI", "la ville de Paris", "les Jeux Olympiques", "la Coupe du Monde", "Marvel", "Avengers", "DC Comics", "21st Century Fox", "Minecraft", "Tetris", "Oasis", "SFR", "Free", "Orange", "Citroën", "Deezer", "WinRAR", "Ferrero", "Quick", "McDonald's", "Burger King", "KFC", "Popeyes", "Wendy's", "Anim'Elbeuf", "Smarties", "Chokella", "Mikado", "Knorr", "Perrier", "Nesquik", "Cookie Crisps", "Amora", "KitKat", "PayPal", "Visa", "Steam", "Epic Games", "Oreo", "Hello Kitty", "YouTube", "Twitter", "Facebook", "Levi's", "Domino's Pizza", "Volkswagen", "Heinz", "Lego", "eBay", "Canon", "Starbucks", "Ford", "GTA VI", "Skype", "Discord", "TeamSpeak", "une banque", "Playboy", "Flunch", "Converse", "Une marque au choix", "Lacoste", "Haribo", "Leroy Merlin", "Kinder", "LinkedIn", "Wikipedia", "IBM", "MTV", "Kodak", "SNCF", "Toblerone", "Chuppa Chups", "Bic", "La Poste", "Lay's");
// Choose a random item from the list
$selected1 = $items1[array_rand($items1)];
$selected2 = $items2[array_rand($items2)];
// Return the selected item
echo json_encode(array($selected1, $selected2));

?>
