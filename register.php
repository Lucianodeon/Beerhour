<?php
$paises=[
		"Afghanistan",
		"Albania",
		"Algeria",
		"Andorra",
		"Angola",
		"Antigua and Barbuda",
		"Argentina",
		"Armenia",
		"Australia",
		"Austria",
		"Azerbaijan",
		"Bahamas",
		"Bahrain",
		"Bangladesh",
		"Barbados",
		"Belarus",
		"Belgium",
		"Belize",
		"Benin",
		"Bhutan",
		"Bolivia",
		"Bosnia and Herzegovina",
		"Botswana",
		"Brazil",
		"Brunei",
		"Bulgaria",
		"Burkina Faso",
		"Burundi",
		"Cambodia",
		"Cameroon",
		"Canada",
		"Cape Verde",
		"Central African Republic",
		"Chad",
		"Chile",
		"China",
		"Colombia",
		"Comoros",
		"Congo (Brazzaville)",
		"Congo",
		"Costa Rica",
		"Cote d'Ivoire",
		"Croatia",
		"Cuba",
		"Cyprus",
		"Czech Republic",
		"Denmark",
		"Djibouti",
		"Dominica",
		"Dominican Republic",
		"East Timor (Timor Timur)",
		"Ecuador",
		"Egypt",
		"El Salvador",
		"Equatorial Guinea",
		"Eritrea",
		"Estonia",
		"Ethiopia",
		"Fiji",
		"Finland",
		"France",
		"Gabon",
		"Gambia, The",
		"Georgia",
		"Germany",
		"Ghana",
		"Greece",
		"Grenada",
		"Guatemala",
		"Guinea",
		"Guinea-Bissau",
		"Guyana",
		"Haiti",
		"Honduras",
		"Hungary",
		"Iceland",
		"India",
		"Indonesia",
		"Iran",
		"Iraq",
		"Ireland",
		"Israel",
		"Italy",
		"Jamaica",
		"Japan",
		"Jordan",
		"Kazakhstan",
		"Kenya",
		"Kiribati",
		"Korea, North",
		"Korea, South",
		"Kuwait",
		"Kyrgyzstan",
		"Laos",
		"Latvia",
		"Lebanon",
		"Lesotho",
		"Liberia",
		"Libya",
		"Liechtenstein",
		"Lithuania",
		"Luxembourg",
		"Macedonia",
		"Madagascar",
		"Malawi",
		"Malaysia",
		"Maldives",
		"Mali",
		"Malta",
		"Marshall Islands",
		"Mauritania",
		"Mauritius",
		"Mexico",
		"Micronesia",
		"Moldova",
		"Monaco",
		"Mongolia",
		"Morocco",
		"Mozambique",
		"Myanmar",
		"Namibia",
		"Nauru",
		"Nepa",
		"Netherlands",
		"New Zealand",
		"Nicaragua",
		"Niger",
		"Nigeria",
		"Norway",
		"Oman",
		"Pakistan",
		"Palau",
		"Panama",
		"Papua New Guinea",
		"Paraguay",
		"Peru",
		"Philippines",
		"Poland",
		"Portugal",
		"Qatar",
		"Romania",
		"Russia",
		"Rwanda",
		"Saint Kitts and Nevis",
		"Saint Lucia",
		"Saint Vincent",
		"Samoa",
		"San Marino",
		"Sao Tome and Principe",
		"Saudi Arabia",
		"Senegal",
		"Serbia and Montenegro",
		"Seychelles",
		"Sierra Leone",
		"Singapore",
		"Slovakia",
		"Slovenia",
		"Solomon Islands",
		"Somalia",
		"South Africa",
		"Spain",
		"Sri Lanka",
		"Sudan",
		"Suriname",
		"Swaziland",
		"Sweden",
		"Switzerland",
		"Syria",
		"Taiwan",
		"Tajikistan",
		"Tanzania",
		"Thailand",
		"Togo",
		"Tonga",
		"Trinidad and Tobago",
		"Tunisia",
		"Turkey",
		"Turkmenistan",
		"Tuvalu",
		"Uganda",
		"Ukraine",
		"United Arab Emirates",
		"United Kingdom",
		"United States",
		"Uruguay",
		"Uzbekistan",
		"Vanuatu",
		"Vatican City",
		"Venezuela",
		"Vietnam",
		"Yemen",
		"Zambia",
		"Zimbabwe"
	];
	$provincias=[

				'Capital Federal',
				'Buenos Aires',
				'Catamarca',
				'Chaco',
				'Chubut',
				'Córdoba',
				'Corrientes',
				'Entre Ríos',
				'Formosa',
				'Jujuy',
				'La Pampa',
				'La Rioja',
				'Mendoza',
				'Misiones',
			 	'Neuquén',
	 		 	'Río Negro',
				'Salta',
				'San Juan',
		 		'San Luis',
				'Santa Cruz',
				'Santa Fe',
		 		'Santiago del Estero',
				'Tierra del Fuego, Antártida e Islas del Atlántico Sur',
				'Tucumán',
				'Uruguay',

	];
  $hobbies=[
    "Brewing",
    "Tomar Birra",
    "Vender Cerveza Artesanal",
    "Vender Insumos",
    "Soy un Bar"

  ];

	$nombre = "";
	$email = "";
	$password = "";

	if ($_POST) {

		$nombresintrim = $_POST["nombre"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		$nombre = trim($nombresintrim);

		if (strlen($_POST["nombre"])==0) {
			echo "Por favor llene este campo con su nombre <br>";
		}
		if (strlen($_POST["nombre"])<5) {
			echo "El nombre debe tener al menos 5 caracteres <br>";
		}
		if (strlen($_POST["email"])==0) {
			echo "Por favor llene este campo con su email <br>";
		}
		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false) {
			echo "El email no tiene el formato correcto <br>";
		}
		if (strlen($_POST["password"])==0) {
			echo "Por favor llene este campo con su contraseña <br>";
		}
		if (strlen($_POST["password"])<5) {
			echo "La contraseña debe tener al menos 5 caracteres <br>";
		}

	}

	?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BEER HOUR | REGISTRATE</title>
    <link rel="stylesheet" href="css/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Anton|Chilanka|Lobster&display=swap" rel="stylesheet">
  </head>
  <body class="regi">

    <?php include "nav.php" ?>
    <main>
      <section class="form-container">
        <h1>Registrate</h1>
        <form class="access-form" action="" method="post">
          <div class="registro">
            <label for="nombre">Nombre*</label>
            <input type="text" id="nombre" name="nombre" value= "<?=$nombre?>" placeholder="Ingresá tu nombre" required>

          </div>
          <div class="registro">
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" value= "<?=$email?>" placeholder="Ingresá tu Correo Electronico" required>


          </div>
          <div class="registro">
            <label for="password">Contraseña*</label>
            <input type="password" id="passsword" name="password" value= "<?=$password?>" placeholder="Contraseña" value="" required>

          </div>
          <h3 for="pais">Nacionalidad*</h3>

          <select  name="pais" required="">
          <option value="" selected="">Por favor, elija una opción</option>
          <?php for ($i=0; $i <count($paises) ; $i++) {?>
            <option value="<?php $paises[$i];  ?>"><?php echo $paises[$i]?></option>
        <?php    } ?>
          </select>
					<h3>Domicilio*</h3>
					<select name="provincia" required="">
					<option value="" selected="">Por favor, elija una opción</option>
					<?php for ($i=0; $i <count($provincias) ; $i++) {?>
            <option value="<?php $provincias[$i];  ?>"><?php echo $provincias[$i]?></option>
        	<?php    } ?>
          </select>

					</select>
          <h3>Genero*</h3>
          <input type="radio" id="masc" name="genero" value="m">
          <label for="masc">Masculino</label>
          <input type="radio" id="fem" name="genero" value="f">
          <label for="fem">Femenino</label>
          <h3>Intereses</h3>
          <?php for ($i=0; $i <count($hobbies) ; $i++) {?>
						<div class="hob">
				  		<input type="checkbox" id="<?= $hobbies[$i]; ?>" name="hobbies" value="<?php $hobbies[$i]; ?>">
            	<label for="<?= $hobbies[$i]; ?>"><?php echo  $hobbies[$i]; ?></label>
						</div>
          <?php } ?>

					<h3>Fecha de Nacimiento</h3>
					<div class="regfinal">
					<input type="date" name="fecha" min="1909-01-01"max="2002-01-01">
					</div>
					<div class="regfinal">
					<input type="checkbox" id="tyc" name="tyc" value="yes" required>
          <label for="tyc">Acepto los términos y condiciones.</label>
					</div>
					<div class="regfinal">
						<button type="submit"><strong>Registrarme</strong></button>
						<button type="reset"><img src="" alt=""><strong>Cancelar</strong></button>
					</div>
        </form>

      </section>
    </main>
  </body>
</div>
</html>
