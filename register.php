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
    "Soy un Bar",
    "otros"

  ];
	?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BEER HOUR | REGISTRATE</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body class="regi">

    <?php include "nav.php" ?>
    <main>
      <section class="form-container">
        <h1>Registrate</h1>
        <form class="access-form" action="" method="post">
          <div class="registro">
            <label for="nombre">Nombre*</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresá tu nombre" required>

          </div>
          <div class="registro">
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" placeholder="Ingresá tu Correo Electronico" required>


          </div>
          <div class="registro">
            <label for="password">Contraseña*</label>
            <input type="password" id="passsword" name="password" placeholder="Contraseña" value="" required>

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
            <input type="checkbox" id="<?php $hobbies[$i]; ?>" name="hobbies" value="<?php $hobbies[$i]; ?>">
            <label for="<?php $hobbies[$i]; ?>"><?php echo  $hobbies[$i]; ?></label>
          <?php } ?>

					<h3>Fecha de Nacimiento</h3>
					<input type="date" name="fecha" min="1909-01-01"max="2002-01-01">

					<input type="checkbox" id="tyc" name="tyc" value="yes" required>
          <label for="tyc">Acepto los términos y condiciones.</label>
          <input type="submit" value="Registrarme">
          <input type="reset" value="Cancelar">

        </form>

      </section>
    </main>
  </body>
</div>
</html>
