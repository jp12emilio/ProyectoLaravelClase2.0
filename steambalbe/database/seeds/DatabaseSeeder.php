<?php
use Illuminate\Database\Seeder;
use App\Games;
use App\User;
class DatabaseSeeder extends Seeder
{
    
private $arrayJuegos = array(
			array(
				'name' => 'Black Desert Online',
				'price' => '4.99', 
				'category' => 'RPG', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/582660/header.jpg?t=1547754457', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256740712/movie480.webm?t=1547754443', 
				'description' => 'Black Desert Online es un MMORPG con un mundo abierto lleno de vida. Lánzate a la batalla con combates rápidos y llenos de acción, caza monstruos y derrota Jefes temibles, lucha junto con amigos y aliados para conquistar territorios y hacerte con la gloria.', 
				'launch' => '2019-01-25',
				'creator' => 'Pearl Abyss',
				'editor' => 'Kakao Games',
				'key' => 'E3NE-23DJ-DKR1'
			),
			array(
				'name' => 'Dishonored 2',
				'price' => '24.99', 
				'category' => 'RPG', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/205100/header.jpg?t=1541465639', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256682771/movie480.webm?t=1491496392', 
				'description' => 'Dishonored 2 se ambientará 15 años después de la plaga que azotó la ciudad Dunwall. Los protagonistas principales serán Corvo Attano, ex guardaespaldas y Emily Kaldwin, la hija de la emperatriz de Dunwall. La localización del juego será en Karnaca, una ciudad ficticia de Europa infestada por una nueva plaga trasmitida por insectos voladores.', 
				'launch' => '2016-11-11',
				'creator' => 'Arkane Studios',
				'editor' => 'Bethesda Softworks',
				'key' => 'JDD2-87SJ-01JS'
			),
			array(
				'name' => 'The Elder Scrolls V: Skyrim SE',
				'price' => '34.99', 
				'category' => 'RPG', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/489830/header.jpg?t=1533676854', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256672927/movie480.webm?t=1476991615', 
				'description' => 'La historia de Skyrim se centra en los esfuerzos del personaje, dovahkiin(sangre de dragon), para derrotar a Alduin, un dragón/dovah que, según la profecía, destruirá el mundo. La trama está fechada doscientos años después de los sucesos de Oblivion y tiene lugar en la provincia ficticia de Skyrim', 
				'launch' => '2018-10-28',
				'creator' => ' Bethesda Game Studios',
				'editor' => ' Bethesda Softworks',
				'key' => 'LSM4-D3D2-VB3N'
			),
			array(
				'name' => 'JUMP FORCE',
				'price' => '69.99', 
				'category' => 'Accion', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/816020/header.jpg?t=1550185811', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256735104/movie480.webm?t=1542668734', 
				'description' => 'Crea tu propio avatar y lucha junto a los héroes más fuertes del manga en el original modo Historia o entra en la sala online para desafiar a otros jugadores y descubrir multitud de modos y actividades. ', 
				'launch' => '2019-02-14',
				'creator' => 'Spike Chunsoft',
				'editor' => 'Bandai Namco Entertainment',
				'key' => 'JORDI-PALET-IPV6'
			),
			array(
				'name' => 'Monster Hunter World',
				'price' => '59.99', 
				'category' => 'Accion', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1550022250', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256737512/movie480.webm?t=1544058743', 
				'description' => '¡Bienvenidos a un nuevo mundo! En Monster Hunter: World, la última entrega de la serie, podrás disfrutar de la mejor experiencia de juego, usando todos los recursos a tu alcance para acechar monstruos en un nuevo mundo rebosante de emociones y sorpresas.', 
				'launch' => '2018-08-09',
				'creator' => 'CAPCOM',
				'editor' => 'CAPCOM',
				'key' => 'ASDF-GHJK-1234'
			),
			array(
				'name' => 'Tom Clancys Rainbow Six Siege',
				'price' => '22.49', 
				'category' => 'Accion', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/359550/header.jpg?t=1550183637', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256713346/movie480.webm?t=1522851066', 
				'description' => 'Tom Clancys Rainbow Six Siege es el nuevo lanzamiento del shooter más aclamado desarrollado por el estudio Ubisoft Montreal. ', 
				'launch' => '2015-12-01',
				'creator' => 'Ubisoft Montreal',
				'editor' => 'Ubisoft',
				'key' => 'LKJH-1345-GCSG'
			),
			array(
				'name' => 'The Witcher Wild Hunt',
				'price' => '29.99', 
				'category' => 'RPG', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/292030/header.jpg?t=1550078557', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256658589/movie480.webm?t=1528288687', 
				'description' => 'Mientras la guerra se extiende por los Reinos del Norte, aceptarás el contrato de tu vida: encontrar a la niña de la profecía, un arma viviente que puede alterar el mundo tal y como lo conocemos. ', 
				'launch' => '2015-05-18',
				'creator' => 'CD PROJECT RED',
				'editor' => 'CD PROJECT RED',
				'key' => 'QWVR-541-4123'
			),
			array(
				'name' => 'Far Cry New Dawn',
				'price' => '59.99', 
				'category' => 'Aventura', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/939960/header.jpg?t=1550505620', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256741915/movie480.webm?t=1550485802', 
				'description' => 'Adéntrate en un Hope County (Montana) posapocalíptico y dinámico 17 años después de una catástrofe nuclear. Lidera la lucha contra los Salteadores e impide que se hagan con los últimos recursos.', 
				'launch' => '2019-02-15',
				'creator' => 'Ubisoft Montreal',
				'editor' => 'Ubisoft',
				'key' => '1234-4321-SGSE'
			),
			array(
				'name' => 'Hollow Knight',
				'price' => '14.99', 
				'category' => 'Aventura', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/367520/header.jpg?t=1549944522', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256679401/movie480.webm?t=1497589417', 
				'description' => '¡Forja tu propio camino en Hollow Knight! Una aventura épica a través de un vasto reino de insectos y héroes que se encuentra en ruinas. Explora cavernas tortuosas, combate contra criaturas corrompidas y entabla amistad con extraños insectos.', 
				'launch' => '2017-02-24',
				'creator' => 'Team Cherry',
				'editor' => 'Team Cherry',
				'key' => 'ASDF-JJTB-3G5J'
			),

			array(
				'name' => 'Assassins Creed Odyssey',
				'price' => '54.99', 
				'category' => 'Aventura', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/812140/header.jpg?t=1540836192', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256730989/movie480.webm?t=1538496199', 
				'description' => 'Elige tu destino en Assassins Creed Odyssey. Pasa de la marginación a la gloria embarcándote en una odisea para descubrir los secretos de tu pasado y cambiar el destino de la antigua Grecia.', 
				'launch' => '2018-10-05',
				'creator' => 'Ubisoft Quebec',
				'editor' => 'Ubisoft',
				'key' => 'ASDF-AS48-IFN6'
			),
			
			array(
				'name' => 'Fallout 4',
				'price' => '44.95', 
				'category' => 'Aventura', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/377160/header.jpg?t=1533676954', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256658080/movie480.webm?t=1447378809', 
				'description' => ' El título es un sandbox de acción y rol con cientos de horas de juego en un mundo devastado por la guerra nuclear, que nos convierte en la única persona con vida en el Refugio 11. Cada segundo es una lucha por la supervivencia y cada decisión es importante, siendo nuestra misión iniciar la reconstrucción del yermo y decidir su futuro.', 
				'launch' => '2015-09-10',
				'creator' => 'Bethesda Game Studios',
				'editor' => 'Bethesda Softworks',
				'key' => 'HDFS-PING-JAVA'	
			),

			array(
				'name' => 'HITMAN 2',
				'price' => '59.99', 
				'category' => 'Accion', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/863550/header.jpg?t=1549278592', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256730311/movie480.webm?t=1541082769', 
				'description' => 'Viaja alrededor del mundo rastreando a tus objetivos en los exóticos lugares del mundo abierto de HITMAN™ 2. Desde soleadas calles hasta oscuras selvas, en ningún lado se está a salvo del asesino más creativo del mundo, el agente 47, en esta historia de suspenso y espionaje.', 
				'launch' => '2018-11-13',
				'creator' => 'IO Interactive A/S',
				'editor' => 'Warner Bros Interactive Entertainment',
				'key' => 'P3N3-T3DJ-DQR1'
			),
			array(
				'name' => 'NBA 2K19',
				'price' => '49.99', 
				'category' => 'Deportes', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/841370/header.jpg?t=1550166779', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256728069/movie480.webm?t=1536274566', 
				'description' => 'NBA 2K cumple 20 años redefiniendo los juegos de deporte, con los mejores gráficos, las mecánicas más realistas, modos de juego innovadores y un entorno abierto cautivador, “El Barrio”. Con NBA 2K19, la saga vuelve a superar sus propios límites y acerca el juego aún más a la cultura y la emoción del baloncesto real.', 
				'launch' => '2018-09-10',
				'creator' => 'Visual Concepts',
				'editor' => '2K',
				'key' => 'XDRG-T3DJ-SHCS'
			),
			array(
				'name' => 'DIRT Rally 2.0',
				'price' => '54.99', 
				'category' => 'Deportes', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/690790/header.jpg?t=1550591415', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256742186/movie480.webm?t=1549285658', 
				'description' => 'DiRT Rally 2.0 te reta a abrirte camino a través de una selección de ubicaciones de rally icónicas por todo el mundo, en los vehículos todoterreno más potentes de la historia, teniendo en cuenta que el menor de los fallos puede poner fin a tu carrera.', 
				'launch' => '2019-02-26',
				'creator' => 'Codemasters',
				'editor' => 'Codemasters',
				'key' => 'HFD5-DDD5-WERT'
			),
			array(
				'name' => 'Rocket League',
				'price' => '19.99', 
				'category' => 'Deportes', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/252950/header_alt_assets_5.jpg?t=1549059561', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256733651/movie480.webm?t=1541097207', 
				'description' => 'Simulación de juego perfeccionada. Crea tu propia historia futbolística asumiendo el mando del club de tus sueños. El control absoluto en este juego increíblemente realista es tuyo: tienes en tu mano el poder de decidir o de delegar. Tus decisiones, tu estilo, tu historia.', 

				'launch' => '2015-07-07',
				'creator' => 'Psyonix, Inc.',
				'editor' => 'Psyonix, Inc.',
				'key' => 'HFD5-ASFR-HBE4'
			),
			array(
				'name' => 'Football Manager 2019',
				'price' => '54.99', 
				'category' => 'Deportes', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/872790/header.jpg?t=1550501723', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256738881/movie480.webm?t=1545247720', 
				'description' => '¡El fútbol se une a los coches una vez más en la esperada continuación basada en la física del querido juego clásico en arenas Supersonic Acrobatic Rocket-Powered Battle-Cars!', 

				'launch' => '2018-11-02',
				'creator' => 'Sports Interactive',
				'editor' => 'SEGA',
				'key' => 'HFD5-KMIO-Q234'
			)
	);
private $arraySocios = array(
			array(
				'name' => 'gato',
				'subname' => 'gato', 
				'email' => 'gato@gmail.com', 
				'password' => 'gato',
				'address' => 'C/San gato 3', 
				'user' => 'gato',
				'admin' => false
				
			),
			array(
				'name' => 'dani',
				'subname' => 'dani', 
				'email' => 'dani@gmail.com', 
				'password' => 'dani',
				'address' => 'C/San dani 3', 
				'user' => 'dani',
				'admin' => false
				
			),
			array(
				'name' => 'jose',
				'subname' => 'Herrera', 
				'email' => 'jose@gmail.com', 
				'password' => 'admin',
				'address' => 'C/San jose 2', 
				'user' => 'jose',
				'admin' => true
				
			)
	);
    public function run()
    {
		self::seedCatalog();
		self::seedUsers();
    }
    private function seedCatalog() {
    	DB::table('games')->delete();
    	foreach ($this->arrayJuegos as $juegos) {
    		$p = new Games;
    		$p->name = $juegos['name']; 
    		$p->price = $juegos['price']; 
    		$p->category = $juegos['category']; 
    		$p->image = $juegos['image']; 
    		$p->video = $juegos['video']; 
    		$p->description = $juegos['description'];
    		$p->launch = $juegos['launch']; 
    		$p->creator = $juegos['creator']; 
    		$p->editor = $juegos['editor'];  
    		$p->key = $juegos['key']; 
    		$p->save();
    	}
    }
    private function seedUsers() {
    	DB::table('users')->delete();
    	foreach ($this->arraySocios as $users) {
    		$p = new user;
    		$p->name = $users['name']; 
    		$p->subname = $users['subname']; 
    		$p->email = $users['email']; 
    		$p->address = $users['address']; 
    		$p->user = $users['user']; 
    		$p->admin = $users['admin']; 
    		$p->password = bcrypt($users['password']); 
    		$p->save();
    	}
    }
}