<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; //Some weird date formatter


class ChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('children')->insert([
            'names' => "Jorge Alberto",
            'flast_name' => "Beauregard",
            'mlast_name' => "Bravo",
            'birthday' => Carbon::parse('1995-05-12'),
            'sex' => "Masculino",
            'scholarship_id' => 6,
            'address_street' => "Calle de Bure",
            'address_number' => "14",
            'neighborhood' => "Los Cedros",
            'locality' => "Veracruz",
            'municipality' => "El Puerto",
            'zip_code' => "124121",
            'state_id' => 7, //veracruz
            'phone_1' => "222-123-1212",
            'phone_2' => "999-122-1235",
            'social' => "1",
            'zone_type' => "Urbana",
            'min_wage' => "<1"
        ]);
        DB::table('children')->insert([
            'names' => "Mireille",
            'flast_name' => "Armenta",
            'mlast_name' => "Ruiz",
            'birthday' => Carbon::parse('2004-03-25'),
            'sex' => "Femenino",
            'scholarship_id' => 0,
            'address_street' => "Blvrd Héroes del 5 de Mayo",
            'address_number' => "3126",
            'neighborhood' => "Ladrillera de Benítez",
            'locality' => "Puebla",
            'municipality' => "Puebla",
            'zip_code' => "31000",
            'state_id' => 1, //Puebla
            'phone_1' => "01 222 237 9341",
            'phone_2' => "644.410-5846",
            'social' => "526-58-1488",
            'zone_type' => "Urbana",
            'min_wage' => "3"
        ]);
        DB::table('children')->insert([
            'names' => "Mirna",
            'flast_name' => "Adomo",
            'mlast_name' => "Lebron",
            'birthday' => Carbon::parse('2014-09-20'),
            'sex' => "Femenino",
            'scholarship_id' => 3,
            'address_street' => "AV Dr. Carlos Canseco",
            'address_number' => "611A",
            'neighborhood' => "Col.Francisco Villa",
            'locality' => "Puebla",
            'municipality' => "Puebla",
            'zip_code' => "31000",
            'state_id' => 27, //Sinaloa
            'phone_1' => "01 669 986 6380",
            'phone_2' => "",
            'social' => "109-86-9492",
            'zone_type' => "Urbana",
            'min_wage' => "<1"
        ]);

        DB::table('children')->insert([
            'names' => "Claudia",
            'flast_name' => "Cordero",
            'mlast_name' => "Moreno",
            'birthday' => Carbon::parse('2005-06-06'),
            'sex' => "Femenino",
            'scholarship_id' => 5,
            'address_street' => "AV. 13",
            'address_number' => "4202",
            'neighborhood' => "NUEVO CORDOBA",
            'locality' => "CORDOBA",
            'municipality' => "Veracruz",
            'zip_code' => "94550",
            'state_id' => 7, //Veracruz
            'phone_1' => "01 271 716 2554",
            'phone_2' => "",
            'social' => "611-04-6773",
            'zone_type' => "Urbana",
            'min_wage' => "<1"
        ]);

        DB::table('children')->insert([
            'names' => "Ricardo",
            'flast_name' => "Mateo",
            'mlast_name' => "Jaimes",
            'birthday' => Carbon::parse('2017-10-18'),
            'sex' => "Masculino",
            'scholarship_id' => 1,
            'address_street' => "SANTA TERESITA",
            'address_number' => "44600",
            'neighborhood' => "JALISCO",
            'locality' => "Guadalajara",
            'municipality' => "Jalisco",
            'zip_code' => "94550",
            'state_id' => 19, //Jalisco
            'phone_1' => "01 33 3825 7999",
            'phone_2' => "271 786-8650",
            'social' => "662-05-3970",
            'zone_type' => "Urbana",
            'min_wage' => "<1"
        ]);
        DB::table('children')->insert([
            'names' => "Rosa",
            'flast_name' => "Rojo",
            'mlast_name' => "Rivas",
            'birthday' => Carbon::parse('2017-04-02'),
            'sex' => "Femenino",
            'scholarship_id' => 2,
            'address_street' => "MORELOS",
            'address_number' => "405",
            'neighborhood' => "GUADALUPE",
            'locality' => "Tampico",
            'municipality' => "TAMAULIPAS",
            'zip_code' => "89120",
            'state_id' => 30, //TAMAULIPAS
            'phone_1' => "01 833 213 7540",
            'phone_2' => "271 786-8650",
            'social' => "833 213-7540",
            'zone_type' => "Urbana",
            'min_wage' => "<1"
        ]);
        DB::table('children')->insert([
            'names' => "Elena",
            'flast_name' => "Dominguez",
            'mlast_name' => "Arenas",
            'birthday' => Carbon::parse('2000-03-17'),
            'sex' => "Femenino",
            'scholarship_id' => 6,
            'address_street' => "V CARRANZA",
            'address_number' => "2175",
            'neighborhood' => "Jardin",
            'locality' => "San Luis Potosi",
            'municipality' => "San Luis Potosi",
            'zip_code' => "78270",
            'state_id' => 26, //San Luis Potosi
            'phone_1' => "01 444 813 2829",
            'phone_2' => "444 813-7263",
            'social' => "256-85-0068",
            'zone_type' => "Urbana",
            'min_wage' => "2"
        ]);
        DB::table('children')->insert([
            'names' => "Celia",
            'flast_name' => "Sosa",
            'mlast_name' => "Castellon",
            'birthday' => Carbon::parse('2011-01-03'),
            'sex' => "Femenino",
            'scholarship_id' => 1,
            'address_street' => "Ignacio Zaragoza",
            'address_number' => "113-B",
            'neighborhood' => "Espiritu Santo",
            'locality' => "Metepec",
            'municipality' => "Estado de Mexico",
            'zip_code' => "52140",
            'state_id' => 6, //EdoMex
            'phone_1' => "01 444 813 2829",
            'phone_2' => "722 216-6393",
            'social' => "442-90-4667",
            'zone_type' => "Urbana",
            'min_wage' => "<1"
        ]);
        DB::table('children')->insert([
            'names' => "Francisco Jose",
            'flast_name' => "Rendon",
            'mlast_name' => "Davila",
            'birthday' => Carbon::parse('2006-10-11'),
            'sex' => "Masculino",
            'scholarship_id' => 5,
            'address_street' => "Irapuato Centro",
            'address_number' => "36500",
            'neighborhood' => "Centro",
            'locality' => "Irapuato",
            'municipality' => "Guanajuato",
            'zip_code' => "36500",
            'state_id' => 17, //Guanajuato
            'phone_1' => "01 800 711 2222",
            'phone_2' => "",
            'social' => "246-72-2292",
            'zone_type' => "Urbana",
            'min_wage' => "<1"
        ]);
        DB::table('children')->insert([
            'names' => "Samuel",
            'flast_name' => "Albero",
            'mlast_name' => "Muela",
            'birthday' => Carbon::parse('2010-03-29'),
            'sex' => "Masculino",
            'scholarship_id' => 4,
            'address_street' => "Juares",
            'address_number' => "108",
            'neighborhood' => "Col Centro",
            'locality' => "Ciudad Madero",
            'municipality' => "Tamaulipas",
            'zip_code' => "89400",
            'state_id' => 30, //Tamaulipas
            'phone_1' => "01 833 210 1195",
            'phone_2' => "",
            'social' => "246-72-2292",
            'zone_type' => "Urbana",
            'min_wage' => "<1"
        ]);
        DB::table('children')->insert([
            'names' => "Ofelia",
            'flast_name' => "Salas",
            'mlast_name' => "Salas",
            'birthday' => Carbon::parse('2013-12-17'),
            'sex' => "Femenino",
            'scholarship_id' => 3,
            'address_street' => "Av. Leones",
            'address_number' => "1056",
            'neighborhood' => "Leones",
            'locality' => "Monterrey",
            'municipality' => "Nuevo Leon",
            'zip_code' => "64600",
            'state_id' => 23, //Nuevo Leon
            'phone_1' => "01 81 8123 4600",
            'phone_2' => "818676-4872",
            'social' => "556-10-8216",
            'zone_type' => "Urbana",
            'min_wage' => "<1"
        ]);
        DB::table('children')->insert([
            'names' => "Leticia",
            'flast_name' => "Curiel",
            'mlast_name' => "Hernandez",
            'birthday' => Carbon::parse('2003-08-12'),
            'sex' => "Femenino",
            'scholarship_id' => 5,
            'address_street' => "Playa El medano",
            'address_number' => "S/n",
            'neighborhood' => "El medano",
            'locality' => "Cabo San Lucas",
            'municipality' => "Nuevo Leon",
            'zip_code' => "23410",
            'state_id' => 11, //BCS
            'phone_1' => "624143-0901",
            'phone_2' => "",
            'social' => "212-854-2254",
            'zone_type' => "Rural",
            'min_wage' => "1"
        ]);
         DB::table('children')->insert([
            'names' => "",
            'flast_name' => "",
            'mlast_name' => "",
            'birthday' => Carbon::parse('2006-10-11'),
            'sex' => "Masculino",
            'scholarship_id' => 5,
            'address_street' => "",
            'address_number' => "",
            'neighborhood' => "",
            'locality' => "",
            'municipality' => "",
            'zip_code' => "36500",
            'state_id' => 17, //Guanajuato
            'phone_1' => "01 800 711 2222",
            'phone_2' => "",
            'social' => "246-72-2292",
            'zone_type' => "Urbana",
            'min_wage' => "<1"
        ]);


        DB::table('children')->insert([
            'names' => "Enrique",
            'flast_name' => "Lozada",
            'mlast_name' => "Vega",
            'birthday' => Carbon::parse('1995-12-30'),
            'sex' => "Masculino",
            'scholarship_id' => 2,
            'address_street' => str_random(10),
            'address_number' => str_random(4),
            'neighborhood' => str_random(10),
            'locality' => str_random(10),
            'municipality' => str_random(10),
            'zip_code' => str_random(7),
            'state_id' => 7, //veracruz
            'phone_1' => "222-123-1212",
            'phone_2' => "999-122-1235",
            'social' => "3",
            'zone_type' => "Sub-urbana",
            'min_wage' => "1 a 2"
        ]);
        $names = ["Alfonso","Carlos","Emilio","Antonio","Nicolás","Eric","Daniel","Fidel","Ferran","Alejandro","Víctor","Mariano","Galván","Fermín","Guillem","Alfredo","Iñaki","Lorenzo","Gil","Darío","Nacho","Aarón","César","Feliciano","Marc","Andreu","Benjamín","Jacobo","Alberto","Javier","Roberto","Raúl","Bruno","Ramón","Gabi","Adam","Ignacio","Manuel","Hugo","Silvestre","Gaspar","Gustavo","Gregorio","Germán","Federico","Ángel","Iván","Felipe","Pau","Vicente","Gilberto","Ismael","Beltrán","Aitor","Mauro","Jesús","Gaizka","Néstor","Miguel","Guillermo","Braulio","Benjamín","Gorka","Kiko","Samuel","David","Clemente","Diego","Pablo","Claudio","Facundo","Édgar","Santiago","Enrique","Imanol","Lucas","Uriel","Julién","Gabriel","Luis","Abel","Jonatan","José","Blas","Álvaro","Agustín","Gerard","Sebastián","Joaquín","Román","Jaime","Esteban","Albert","Ricardo","Patxi","Camilo","Damián","Adolfo","Rafael","Marcos","Héctor","Javier","Santos","Marco","Cayetano","Rodrigo","Francisco","Flavio","Juan","Andoni","Martín","Mateo","Pedro","Unai","Eduardo","Isaac","Ernesto","Cristian","Miquel","Rubén","Gonzalo","Samael","Mario","Óscar","Simón","Fernando","Moisés","Fabián","Félix","Adrián","Paco","Andrés","Constantino (o Constan)","Jorge","Mauricio","Jairo","Arturo","Tiago o Thiago","Tomás","Gerardo","Sergio","Borja","Fabio","Matías","Sebastián (o Sebas)","Iker","Cristóbal","Santiago","Humberto","Ariel","Luca","Izan","Ian","Kaled","Cristiano","Leandro","Noah","Aleixo","Guido","Aleix","Caleb","Igor","Eithan","Ezequiel","Asier","Joel","Silas","Antolino","Unai","Boris","Enzo","Anxo","Dylan","Adel","Sasha","Dionís","Ibai","Enio","Didac","Aitor","Abel","Julen","Aquiles","Thiago","Kael","Tadeo","Gael","Eloi","Edric","Jon","Dorian","Iu","Iren","Esteve","Adam","Noel","Aldo","Dan","Arnald","Pol","Conrad","Saúl","Eissa","Darío","Leo","Dante","Trevor","Oriol","Arnau","Naím","Jadel","Wilfrido","Jerónimo","Patricio","Elam","Batista","Judas","Bartolomé","Bautista","Levi","Abelardo","Dámaso","Carmelo","Adán","Plácido","Salvador","Isidoro","Tobías","Koldo","Abiel","Genaro","Rodolfo","Elías","Omar","Josef","Ovidio","Livio","Eros","Aser","Norberto","Nuño","Benedicto","Amadeo","Cirilo","Bernat","Eugenio","Jeremías","Narciso","Marcelino","Leopoldo","Armando","Timoteo","Demetrio","Isaías","Josué","Óliver","Maximiliano","Valentín","Fausto","Dionisio","Máximo","Ametz","Tristán","Alejo","Adonis","Benito","Ulises","Bernardo","Raimon","Gastón","Adalberto","Aurel","Abraham","Isidro","Rayan","Baltasar","Froilán","Adonai","Jacinto","Osvaldo","Kurt","Tyron","Arsenio","Joseba","Justo","Stefano","Nicasio","Zacarías","Eladio","Calixto","Octavio","Arseni","Axel","Karim","Liam","Sean","Steve","Silas","Dean","William","Luke","Larry","Alexander","Jude","John","Brian","Jacob","Ewan","Henry","Ted","Axel","Firas","Ibrahim","Hasan","Rayan","Bahir","Adib","Gabir","Habib","Amir","Fadil","Abdul","Walid","Yasar","Nadir","Khalil","Tamid","Nizar","Alessandro","Alonzo","Piero","Benedetto","Giacomo","Filippo","Tiziano","Vittorio","Fabrizio","Carlo","Flavio","Giotto","Paolo","Dante","Adriano","Giovanni","Guido","Silvano","Leandro","Luigi"];

        $apellido = ["Abad","Abalos","Abarca","Abendano","Abila","Abina","Abitua","Aboites","Abonce","Abrego","Abrica","Abrigo","Abundis","Aburto","Acebedo","Acebes","Acencio","Acero","Acevedo","Aceves","Acha","Adan","Adrian","Agirre","Agredano","Aguado","Aguallo","Aguas","Aguayo","Agueda","Aguero","Aguila","Aguilar","Aguilera","Aguinaga","Aguino","Aguirre","Agundis","Ahuatl","Ahumada","Aiala","Aillon","Alamilla","Alamiya","Alamo","Alanis","Alarcon","Alatorre","Alatriste","Alaves","Alba","Albarado","Albares","Albarran","Alberto","Albino","Albis","Albornos","Alcantar","Alcaras","Alcocer","Alcorta","Aldaco","Aldape","Aldaz","Alderete","Alejandro","Alejo","Aleman","Alexos","Alfaro","Alferes","Alfonso","Alguera","Allala","Allende","Almager","Almaguer","Almanza","Almaras","Almasan","Almeda","Almejo","Almendares","Almodovar","Almonte","Almorin","Alonzo","Altamirano","Altra","Altusar","Alva","Alvarado","Alvares","Alverto","Alvidres","Alvillar","Alvino","Alviso","Amador","Amalla","Amaral","Amarilla","Amaro","Amaya","Ambris","Ambrocio","Americano","Amescua","Amesola","Amesquita","Ana","Analla","Anaya","Anda","Anderson","Andrada","Andrade","Andres","Andrews","Andrez","Angel","Angeles","Angiano","Angon","Anguiano","Angulo","Anna","Anrriquez","Ansaldo","Ansures","Antillon","Antonio","Antuna","Antunes","Aparicio","Apodaca","Apolinar","Apresa","Aquallo","Aquilar","Aquirre","Ara","Aragon","Araiza","Arana","Aranda","Arango","Aranguti","Araujo","Araus","Arauxo","Arayza","Arbizu","Arce","Arceo","Arcia","Arciniega","Arcola","Arebalo","Arechiga","Aredondo","Arellano","Arenas","Arevalo","Areyano","Argote","Arguelles","Arguello","Argueta","Arguijo","Arias","Ariola","Arisa","Arisaga","Arismendis","Arispe","Ariza","Arizaga","Armadillo","Armendaris","Armengol","Armenta","Armijo","Aro","Aroche","Aros","Aroyo","Arpero","Arrasola","Arrayales","Arreaga","Arredondo","Arreguin","Arreola","Arreortua","Arrequin","Arriaga","Arrieta","Arriola","Arroio","Arrollo","Arrona","Arroyo","Arsate","Arse","Arsiga","Arsiniega","Arsola","Arteaga","Arujo","Arze","Arzola","Asa","Ascona","Asebes","Asencio","Asero","Asevedo","Aseves","Aspitia","Astorga","Astudillo","Asuara","Atilano","Atondo","Auguiano","Aumada","Aurioles","Avelino","Avila","Aviles","Avilla","Avitia","Ayon","Azebedo","Azero","Azevedo","Baca","Bacasegua","Badillo","Badiola","Baena","Baes","Bahena","Baina","Baisa","Baker","Balades","Balbaneda","Balberde","Balbuena","Balderas","Baldes","Baldespino","Baldibia","Baldivia","Baldivieso","Baldonado","Baldovinos","Balencia","Balencuela","Balensuela","Balentin","Balenzuela","Balero","Balladares","Ballarta","Ballejo","Ballesa","Ballesteros","Ballin","Ballinas","Balona","Balseca","Baltierres","Balverde","Balvuena","Banderas","Bandilla","Banegas","Banes","Baptista","Baquera","Baragan","Barajas","Baraxas","Barba","Barbero","Barcenas","Barco","Barela","Barientos","Barques","Barra","Barragan","Barrales","Barranco","Barraza","Barreda","Barreto","Barrientes","Barrientos","Barron","Barros","Barroso","Barsena","Barunda","Barva","Barvosa","Barzena","Basan","Basgues","Basques","Basulto","Basurto","Bata","Batres","Bautista","Bayejo","Baylon","Bazan","Becerra","Becerril","Bedolla","Bedoya","Bega","Begil","Bejarano","Bela","Belarde","Belasco","Belasques","Belendes","Belis","Belman","Belmontes","Belmudes","Belos","Beltran","Benabides","Benegas","Benites","Benito","Bentura","Bera","Berber","Berdin","Berdusco","Bergara","Bermejo","Bermudes","Bernal","Bernales","Bernardino","Berra","Berrio","Berrones","Berruecos","Bertis","Berumen","Beserra","Betancourt","Betancur","Bexarano","Bibaldo","Bibas","Bidal","Bidales","Biera","Bigueria","Billa","Billagomes","Billalobos","Billalovos","Billalpando","Billanueba","Billanueva","Billasenor","Billegas","Biscarra","Blancarte","Blancas","Blanco","Blas","Bobadilla","Bocanegra","Bocardo","Bocas","Bojorques","Bolanos","Bona","Bonifacio","Bonilla","Bonito","Borbon","Borda","Borjas","Borrego","Bosque","Botello","Bovadilla","Boyd","Bracamontes","Bracho","Brambila","Bravo","Brena","Bribiesca","Briones","Brisena","Briseno","Brito","Briviescas","Brocal","Brooks","Brown","Bruno","Brusiaga","Buelna","Buen","Buenabides","Buenavides","Buendia","Bueno","Buenrostro","Buentello","Bugarin","Buitimea","Buitron","Burciaga","Burgos","Burnett","Bustamante","Bustos","Butanda","Butierres","Byrd","Caacuaa","Caacusi","Caaghu","Caasayu","Caballero","Cabanillas","Cabello","Cabesa","Cabral","Cabrera","Cabriales","Cacalotl","Cacillas","Cacimiro","Caco","Cacuaa","Cacuiy","Cacusi","Caghi","Caghu","Cague","Caguihui","Cahua","Cahuaco","Cahuidzu","Cahuiyo","Calata","Calbario","Calbo","Caldera","Calderon","Calisto","Calistro","Callejas","Calleros","Calles","Calletano","Calsada","Calvario","Calvillo","Calzada","Cama","Camacho","Camahu","Camarena","Camargo","Camarillo","Camau","Camberos","Cambray","Camino","Campa","Campillo","Campirano","Campos","Camposano","Campusano","Cana","Canal","Canceco","Canchola","Cancino","Candelaria","Candelario","Candia","Canedo","Canela","Canencia","Cano","Canoa","Canpos","Canseco","Cansino","Cantero","Cantu","Canuu","Canzeco","Capasete","Capetillo","Capistrano","Capitan","Caquihui","Cara","Carabajal","Caraballo","Carabantes","Carabaxal","Carandia","Carapia","Carasco","Caravajal","Caravallo","Caravantes","Cardenas","Cardiel","Cardona","Cardoso","Cariaga","Carillo","Carion","Carlin","Carlon","Carlos","Carmel","Carmona","Carnero","Caro","Carpintero","Carpio","Carrales","Carranco","Carrasco","Carreno","Carrera","Carreto","Carrillo","Carrion","Carrisal","Carrisales","Carriyo","Carrizal","Carro","Carvajal","Casa","Casanoba","Casanova","Casares","Casas","Casasola","Casayu","Casco","Caseres","Casian","Casillas","Casimiro","Casique","Cassas","Cassillas","Castanon","Castelan","Castellanos","Castellon","Casteneda","Castilla","Castilleja","Castillo","Castiyo","Casto.","Castorena","Castrejon","Castrillo","Castro","Catalan","Catano","Catuta","Cavallero","Cavazos","Cavello","Cavrera","Cayetano","Cayo","Cazares","Ceballos","Cedeno","Cedillo","Ceja","Celaya","Celio","Celis","Cena","Centeno","Cepeda","Cerbantes","Cerda","Cermeno","Cerna","Ceron","Cerrano","Cerrato","Cerrillo","Certuche","Cervantes","Cervera","Cervin","Cevallos","Cevilla","Chabaria","Chabarin","Chabarria","Chabes","Chabira","Chaboya","Chaca","Chacon","Chagolla","Chagollan","Chaire","Chantes","Chapa","Chapul","Charles","Charqueno","Chavarria","Chavarrieta","Chaves","Chaveste","Chavez","Chavira","Chavolla","Chia","Chica","Chico","Chicuate","Chihuagua","Chihuahua","Chilaca","Chilar","Chilchotl","Chiquito","Chirinos","Cholico","Cholula","Chon","Choperena","Cierra","Cifuentes","Cilba","Cilva","Cimental","Cirilo","Cisneros","Cistos","Clark","Claudio","Clemente","Cleto","Climaco","Coatl","Coba","Cobarrubias","Cobian","Cobos","Coca","Cochi","Cocio","Cocone","Cocusi","Coeto","Coghi","Coix","Colchado","Colima","Colin","Colirio","Collado","Colmenares","Colmenero","Colorado","Colunga","Comparan","Compean","Concepcion","Condado","Conde","Conrrique","Constancia","Constante","Constantino","Contreras","Conuu","Copado","Coquau","Coquihui","Corales","Corchado","Cordoba","Cordova","Corea","Coreno","Coria","Cornejo","Cornelio","Corona","Coronado","Corral","Corrales","Correa","Corro","Cortes","Cortez","Cos","Cosa","Cosileon","Cosme","Costilla","Cota","Cotzomi","Covarrubias","Covarruvias","Covos","Cox","Coyaso","Coyo","Coyote","Coyotl","Coz","Cozatl","Cozileon","Crespin","Crespo","Crisanto","Crisostomo","Crispin","Cristan","Crus","Cruz","Cuachitl","Cuacitl","Cuacuil","Cuadros","Cuaetle","Cuatecatl","Cuatlat","Cuatlayol","Cuautle","Cuautli","Cuaya","Cuechi","Cuello","Cuenca","Cuesta","Cuevas","Cueyar","Cueyo","Cuin","Cumplido","Cura","Cusicuiy","Cusihuidzu","Cusihuiyo","Cusimahu","Cusimau","Cusimey","Cusinuu","Cusiquihui","Cusisayu","Cusituta","Dabalos","Dabila","Dado","Damian","Daniel","Dasa","Davila","Daza","Delara","Delgadillo","Delgado","Delos","Delossantos","Deras","Diego","Dimas","Dionicio","Dios","Dolores","Domingues","Dominguez","Donate","Dongu","Dorado","Dorantes","Duarte","Duenas","Duque","Duran","Duron","Echeverria","Eledesma","Elenes","Elias","Elisondo","Elizarraras","Elizondo","Enamorado","Encarnacion","Encinas","Enciso","Enriquez","Enrrique","Enrriquez","Ensiso","Eredia","Erera","Ernandes","Errera","Escalante","Escalera","Escamilla","Escandon","Escobar","Escobedo","Escojido","Escovar","Escutia","Espalin","Espana","Esparcia","Esparza","Espejo","Espindola","Espinel","Espinola","Espinoza","Espiritu","Espitia","Esqueda","Esquibel","Esquibias","Esquivel","Esquivias","Esteban","Estebes","Estevan","Esteves","Estrada","Estrella","Estreya","Estudillo","Europa","Evangelista","Evans","Evora","Fabela","Fabian","Facio","Fajardo","Falcon","Farfan","Farias","Faustino","Faxardo","Feliciano","Felis","Feliz","Ferel","Fermin","Fernandes","Fernandez","Fernando","Ferreira","Ferrel","Fierro","Figueroa","Filoteo","Fiscal","Fletes","Flores","Florez","Fonceca","Fonseca","Frade","Fraga","Fragoso","Fraide","Fraile","Franca","Francisco","Franco","Frausto","Fregoso","Frias","Frutos","Fuente","Fuentes","Fuerte","Fulgencio","Funes","Gabia","Gabino","Gabriel","Gadillo","Gado","Galabis","Galan","Galarza","Galas","Galavis","Galban","Galbes","Galego","Galicia","Galisia","Gallardo","Gallega","Gallegos","Gallo","Galvan","Galvana","Gama","Gamboa","Gamero","Games","Gamez","Gamino","Ganboa","Gandara","Gaona","Garambuyo","Garate","Garavito","Garay","Garcia","Gardea","Garduno","Garfias","Garia","Garibai","Garibaldo","Garibay","Garivay","Garnica","Garrido","Garsa","Garsia","Garza","Garzia","Gasca","Gascon","Gaspar","Gastan","Gatica","Gauna","Gausin","Gavia","Gavilan","Gavilanes","Gavino","Gayardo","Gayo","Gaytan","Gazca","Gebara","George","Gerardo","Gerero","German","Gerra","Gertrudis","Gervacio","Ghco","Ghcuaa","Ghcuiy","Ghcusi","Ghghu","Ghichi","Ghico","Ghicuau","Ghicuey","Ghicuiy","Ghicusi","Ghighi","Ghighu","Ghihuaco","Ghihuidzu","Ghihuiyo","Ghima","Ghinoo","Ghiquau","Ghisa","Ghisayu","Ghituta","Ghiyo","Ghma","Ghmahu","Ghmau","Ghmey","Ghnoo","Ghnuu","Ghquihui","Ghsa","Ghsayu","Ghsichi","Ghsighi","Ghsima","Ghsisa","Ghsiyo","Ghtuta","Ghyo","Gil","Gillen","Gimenes","Gimenez","Gines","Gloria","Gobea","Goche","Godina","Godines","Godoi","Godoy","Gomes","Goncales","Gongora","Gonzaga","Gonzalez","Gopar","Gordillo","Gordo","Govea","Gracia","Gradilla","Grageda","Grajales","Grajeda","Granado","Grande","Grangenal","Grano","Grasia","Gregorio","Griego","Grigalva","Grijalva","Grusiaga","Guadalaxara","Guadalupe","Guadarrama","Guadiana","Guajardo","Guanajuato","Guaracha","Guardado","Guardia","Guardiola","Guarneros","Gudino","Guereca","Guerra","Guerrero","Guerta","Guete","Guevara","Guia","Guido","Guijarro","Guillen","Guilo","Guimenes","Guines","Guipe","Guisa","Guisar","Guiterres","Guiza","Gurrola","Gusman","Gutieres","Gutierrez","Haro","Harris","Haumada","Helguera","Henrique","Henriquez","Heredia","Hererra","Hermoso","Hernandes","Hernandez","Herrada","Herrera","Herver","Hibarra","Hierro","Higareda","Higuera","Hijar","Hilario","Hinojosa","Hornelas","Horosco","Horta","Hortega","Hortis","Huaracha","Huerta","Huisache","Huisar","Huitzil","Huizar","Humada","Hurtado","Hurvina","Hydalgo","Ianes","Ianito","Ibarra","Idalgo","Illescas","Infante","Inigues","Inojos","Inojosa","Isarraras","Ivarra","Jacinto","Jaco","Jacoba","Jacobo","Jaen","Jahuey","Jalpa","Jamaica","Jan","Jaques","Jara","Jaramillo","Jaramiyo","Jarquin","Jaso","Jaure","Jauregui","Jauri","Jazo","Jimenes","Jiron","Jonguitud","Juache","Juan","Juares","Jurado","Labra","Labrador","Ladino","Ladron","Lagunas","Lagunillas","Lala","Lamas","Lambarena","Landa","Landeros","Landeta","Landin","Langarcia","Langarica","Larios","Laris","Laro","Lasareno","Laso","Laureano","Lazareno","Lazaro","Lazo","Leal","Leandro","Leche","Lechuga","Leiba","Lemus","Leon","Leonardo","Leonor","Lepe","Lerma","Lesama","Leso","Letins","Levario","Leyba","Liebanos","Liera","Ligas","Lilo","Limon","Linan","Linares","Lino","Lira","Lisama","Lisarde","Lisarraga","Lisea","Lisola","Lisondo","Llaguno","Llamas","Llanas","Llanes","Llanito","Llepes","Loayza","Lobato","Lobos","Loeza","Lomas","Lomeli","Lomelin","Longoria","Lopez","Loredo","Lorenzana","Lorenzano","Lorenzo","Loreto","Loria","Losada","Losano","Lossano","Lovato","Loya","Loza","Lozada","Luciano","Lucio","Luengas","Luevano","Lueza","Luga","Lugarda","Luguin","Lujan","Lule","Lumbreras","Luna","Lupercio","Lupez","Lupian","Luria","Luz","Macario","Macedo","Machado","Machorro","Macias","Maciel","Madaleno","Madera","Madrigal","Madrueno","Mafra","Magallanes","Magallon","Magana","Magdaleno","Maguellal","Maia","Maiorga","Malacara","Maldonado","Maleno","Malindo","Malo","Malpica","Mancera","Mancha","Mancilla","Mandujano","Mani","Manriquez","Mansanales","Mansanares","Mansanero","Mansano","Mansilla","Manso","Mantilla","Manuel","Manzanales","Manzanares","Manzo","Marabilla","Maravilla","Marceleno","Marchan","Marcial","Mareno","Mares","Marfil","Margues","Maria","Mariano","Marimon","Marin","Marines","Marroquin","Marrufo","Martel","Martin","Martines","Martinon","Mascorro","Massias","Mata","Mateo","Mateos","Matheo","Mathias","Matias","Maturan","Maya","Mayor","Meave","Meda","Medel","Medellin","Medero","Medez","Medina","Medinilla","Megia","Mejia","Mejicano","Mejorada","Melecio","Melendres","Melesio","Melgar","Melgarejo","Melgoza","Mellado","Membrila","Mena","Menchaca","Mendes","Mendez","Mendia","Mendieta","Mendiola","Mendosa","Meneces","Meneses","Meras","Mercado","Merced","Mereles","Merino","Merlin","Merlo","Merodio","Mesquite","Messa","Mexia","Meza","Michaca","Miguel","Milan","Minchaca","Minero","Minguela","Minxares","Mira","Miramontes","Miranda","Mireles","Mitzi","Moctesuma","Modesto","Mogica","Moia","Mojica","Molina","Molla","Molleda","Monares","Moncada","Moncayo","Mondragon","Monjaras","Monreal","Montana","Montanes","Montano","Monte","Montecillo","Montecinos","Montejano","Montelongo","Montemar","Montemayor","Monteon","Montero","Monterroso","Montesillo","Montesinos","Montesuma","Montez","Montiel","Montion","Montolla","Montoya","Montufar","Monzon","Mora","Morado","Moral","Morales","Morantes","Moras","Morelos","Moreno","Morentin","Morfin","Morgado","Morillo","Morin","Moriyo","Morones","Morquecho","Morras","Morua","Moscoso","Moso","Mosqueda","Mota","Motete","Mototl","Moxarro","Moxica","Moya","Moyeda","Moyotl","Muela","Mujica","Mulgado","Mundo","Munes","Mungia","Munguia","Munis","Munos","Murgo","Muriyo","Muro","Nabarro","Nabor","Nachi","Naco","Nagera","Naghi","Naghu","Nahuidzu","Nahuiyo","Najar","Najera","Nama","Namau","Namorado","Nanes","Napoles","Naquihui","Narbaes","Narvaez","Nasa","Nasayu","Natividad","Natuta","Navarrete","Naveda","Navia","Nayo","Nazario","Negreros","Negrete","Neira","Neri","Neria","Nesta","Neto","Nevares","Niave","Nicolaza","Niebes","Niebla","Nieva","Nieves","Nila","Nino","Noboa","Nocelotl","Noco","Nocuaa","Nocuiy","Nocusi","Nogales","Noghi","Nohuaco","Nohuidzu","Nohuiyo","Nolasco","Nollola","Noma","Nomau","Nopalera","Noquihui","Norabuena","Noriega","Nosa","Nosayu","Notario","Novoa","Noyo","Numau","Nuncio","Nunes","Nungarai","Nuno","Oballe","Obispo","Oblea","Obregon","Ocana","Ocaranza","Oceguera","Ochoa","Octavo","Ogalde","Olachia","Olaque","Olaya","Oldorica","Olea","Olgin","Olguin","Oliba","Olibares","Olibas","Olibera","Oliva","Olivas","Olivera","Olivo","Olivos","Olmos","Olveda","Onate","Oporto","Oranday","Ordaz","Ordones","Ordorica","Orduno","Oregel","Oria","Oribe","Orihuela","Orisava","Orocio","Orona","Oropesa","Orosco","Orsua","Orta","Ortes","Ortigosa","Ortis","Ortuno","Osegueda","Osorio","Ossorio","Osuna","Otero","Otuel","Oviedo","Oxeda","Ozegueda","Pablo","Pacho","Paderes","Padia","Padilla","Padron","Padua","Paes","Palacios","Palafos","Palasios","Palencia","Pallares","Palma","Palmerin","Palo","Paloalto","Paloblanco","Palomar","Palomeque","Palomera","Palomino","Palomo","Palos","Palula","Panecatl","Paneda","Paniagua","Pantaleon","Pantoja","Pantoxa","Para","Parada","Paramo","Pardave","Pardinas","Pardo","Pareja","Parra","Parrales","Parrilla","Partida","Pasillas","Pasqual","Pastrana","Patino","Patlan","Patricio","Patron","Paulin","Paura","Pavon","Paz","Pecina","Pedraza","Pedrosa","Peeres","Peguero","Peinado","Pelaes","Pelayo","Pena","Penalosa","Penilla","Penuelas","Perales","Peralta","Percino","Perea","Peredo","Peregrina","Pereira","Perez","Pescador","Pesina","Pestana","Pezina","Piceno","Pichardo","Picon","Piedra","Pilar","Piloto","Pimienta","Pineda","Pinon","Pinson","Pinto","Pintor","Pinzon","Pio","Pisa","Pisano","Pitones","Plancarte","Plasola","Plata","Plaza","Plazola","Pliego","Poblano","Poblete","Polanco","Polino","Polvo","Pompa","Ponse","Popoca","Porras","Portales","Portante","Portillo","Posada","Posas","Poso","Prada","Prado","Preciada","Preciado","Presas","Priego","Prieto","Proa","Procel","Provencio","Puebla","Puente","Puerta","Puga","Pulgarin","Pulido","Quebara","Quebas","Quebedo","Quenca","Queretano","Quero","Quesada","Quevedo","Quezada","Quijada","Quijano","Quijas","Quinones","Quintanar","Quintanilla","Quintano","Quintero","Quintos","Quiralte","Quirarte","Quiros","Quiteria","Quitl","Quixano","Rabadan","Rabago","Rada","Radillo","Rafael","Raia","Ralla","Ramales","Ramblas","Ramires","Ramiro","Ramon","Ramos","Rams.","Ranguel","Ranjel","Ranxel","Rascon","Rasgado","Raso","Rasura","Rauda","Ravago","Raya","Razon","Rea","Real","Rebeles","Rebollo","Rebolloso","Recendes","Recio","Regalado","Regino","Regla","Reies","Reina","Reinaga","Reinoso","Relles","Rendon","Requenes","Resa","Resendes","Reta","Reteguin","Reveles","Revilla","Reyes","Reyna","Reynaga","Reynero","Reza","Ribas","Ribera","Rica","Ricardo","Rico","Riestra","Rincon","Rios","Rivera","Rizo","Roa","Robalcaba","Robledo","Roblero","Robles","Rocha","Rocio","Rodarte","Rodas","Rodrigues","Rogue","Rojas","Rojo","Roldan","Rolon","Roman","Romano","Romero","Ronco","Rondan","Rondero","Roque","Rosa","Rosario","Rosas","Rosendo","Rosete","Rosiles","Rositas","Rossales","Rostro","Roxas","Rozas","Ruan","Ruano","Rubio","Ruedas","Ruelas","Ruis","Rutia","Rutiaga","Ruvalcaba","Saavedra","Sabaleta","Sabas","Sabedra","Sabino","Sacarias","Saco","Sacusi","Saes","Saghi","Sagredo","Sagrero","Sahua","Sahuaco","Sahuiyo","Sains","Sais","Sala","Salado","Salais","Salamanca","Salas","Salbatierra","Salcedo","Saldana","Saldibar","Sales","Salgado","Salinas","Sallabedra","Salmeron","Salsedo","Salsido","Salvador","Salvatierra","Samaniego","Samano","Samarron","Samora","Samorano","Samores","Samudio","Sanabia","Sanabria","Sanavia","Sanbrano","Sanchez","Sandobal","Sanguino","Sanmiguel","Santa","Santana","Santander","Santarrosa","Santellan","Santiago","Santiestevan","Santillan","Santis","Santiyan","Santo","Santollo","Santos","Santoya","Santoz","Sapata","Sapien","Sapote","Saquau","Saquihui","Sarabia","Saracho","Saragosa","Sarate","Saravia","Sarco","Sardo","Saria","Sarmiento","Sasa","Sasayu","Satuta","Sauceda","Sausedo","Savala","Savallos","Savedra","Sayabedra","Sayas","Sayavedra","Sayo","Sebastian","Sebayos","Sebilla","Sedeno","Sedillo","Segobia","Segoviano","Segueda","Segundo","Segura","Seja","Seledon","Sena","Sendejas","Sendexas","Senor","Senteno","Sepeda","Sepulbeda","Serano","Serbantes","Serbin","Serda","Serena","Sereso","Sermeno","Seron","Serpa","Serrato","Serrillo","Servantes","Servera","Servin","Sesar","Sesena","Sespedes","Sevallos","Sevilla","Sexa","Sibrian","Sichi","Sicuaa","Sicuau","Sicuiy","Sicusi","Sid","Sierra","Sifuentes","Sigala","Sighu","Siguihui","Sihua","Sihuaco","Sihuidzu","Sihuiyo","Silbestre","Silva","Silverio","Silvestre","Simental","Simona","Sinto","Sintora","Sion","Siordia","Sipres","Siquaa","Siquau","Siquihui","Siranda","Sirlos","Sisa","Sisnero","Sistos","Situta","Siyo","Solache","Solachi","Solana","Solano","Soledad","Soliz","Soloriano","Solorsano","Soltero","Sonora","Sordia","Soriano","Sorrilla","Sosa","Sosalla","Sostenes","Sotela","Sotero","Soto","Sotomayor","Sotto","Suares","Subia","Suchel","Suchil","Sumaia","Sumalla","Sumano","Sumaya","Suniga","Sureque","Surita","Suro","Sustaita","Tabarez","Tabera","Taboada","Tafolla","Tagle","Talabera","Talamantes","Talavera","Talledos","Tamaio","Tamallo","Tamaris","Tamayo","Tapias","Tarin","Tavares","Tecol","Tecpanecatl","Tegeda","Tehuitzil","Tejeda","Teles","Tello","Temascal","Temblador","Tena","Teodoro","Tepale","Tepos","Teran","Terraso","Terriquez","Terrones","Teutli","Texeda","Teyes","Teyo","Thelles","Thobar","Thorres","Thovar","Tierra","Tierrablanca","Tijon","Timal","Tinajero","Tinoco","Tirado","Tiscareno","Tisnado","Tlapaltotoli","Tobares","Toledo","Tolentino","Tome","Topete","Tore","Torija","Toris","Torivio","Toro","Torre","Torrero","Torres","Tortolero","Toscano","Tosqui","Tostado","Tovar","Tranquilino","Trebino","Trejo","Trevino","Trexo","Trillo","Trinidad","Tristan","Triyo","Troche","Troncoso","Trujillo","Truxeque","Truxillo","Tunal","Turrubiartes","Ubaldo","Uballe","Ubeda","Udave","Umada","Urbana","Urbina","Urena","Ureste","Uresti","Uriarte","Uribe","Urillas","Urista","Urosa","Urquisa","Urresti","Urrutia","Ursua","Urvano","Urvina","Vadillo","Vaena","Vaes","Vahena","Valades","Valasquez","Valberde","Valcasar","Valderas","Valderrama","Valdes","Valdespino","Valdibia","Valdovinos","Valenciano","Valensia","Valentin","Valeria","Valeriano","Valesquez","Vallarta","Valle","Vallejo","Valles","Vallesa","Valleza","Vallin","Valverde","Vanda","Vanderas","Vanegas","Vara","Varajas","Varela","Varelas","Vargas","Varrientos","Varrios","Varron","Varva","Varvosa","Vasguez","Vasquez","Vautista","Vazques","Veas","Vecerra","Vedoya","Vegines","Vego","Vejar","Vejarano","Vela","Velador","Velarde","Velasco","Velasques","Velazco","Velazquez","Veles","Velez","Velis","Veliz","Vello","Velman","Velmontes","Velmudes","Velos","Veltran","Venavides","Venegas","Venites","Ventura","Vera","Verdugo","Verdusco","Vergara","Vermejo","Vernal","Veserra","Vetancur","Vetancurt","Vetansos","Vexarano","Vibanco","Vibar","Vicencio","Vicente","Vicinais","Vidaurri","Vidro","Viera","Viernes","Vieyra","Vigil","Vigueria","Vilchis","Villa","Villafane","Villafranco","Villafuerte","Villagra","Villalbaso","Villalobos","Villalon","Villalovos","Villalpando","Villalva","Villalvazo","Villamar","Villami","Villanueba","Villapando","Villareal","Villasana","Villasenor","Villasor","Villatoro","Villaverde","Villavicencio","Villegas","Villela","Villicana","Vincent","Vique","Viramontes","Virjan","Viscaino","Viscarra","Visente","Vivaldo","Vivanco","Vivar","Vivas","Viveros","Vlloa","Volanos","Vribe","Vriceno","Vriseno","Vrive","Xaime","Xaimes","Xaramillo","Xaso","Xavier","Xaymes","Xicotencatl","Xihuitl","Ximes","Ximines","Xique","Xiron","Xochitecatl","Xopanecatl","Xuares","Yanez","Ybanez","Ybara","Ybarrola","Yepez","Yerena","Yescas","Yglesias","Ygnacio","Yllan","Yllescas","Yniguez","Ynojosa","Ynostrosa","Ypolito","Yreta","Yrigollen","Ysaguirre","Ysidro","Yvanes","Yxtlamati","Yzquierdo","Zabala","Zabedra","Zalais","Zalamanca","Zaldana","Zamarripa","Zambrano","Zamudio","Zanabria","Zapote","Zarabia","Zarate","Zaravia","Zavala","Zeballos","Zedano","Zedillo","Zeferino","Zenon","Zepeda","Zerbantes","Zerrano","Zertucha","Zervantes","Zetina","Zisneros","Zolis","Zolorsano","Zoriano","Zosa","Zosaya","Zotelo","Zoto","Zuares","Zubia","Zuniga","Zurita"];
        $gender = ["Masculino","Femenino"];
        $social = ['1','2','3','4','5','6'];
        $zone = ['Rural', 'Sub-urbana', 'Urbana'];
        $wage = ['<1', '1 a 2', '>2'];
        for ($i = 0; $i <= 40; $i++) {
            DB::table('children')->insert([
                'names' => $names[rand(0,count($names)-1)],
                'flast_name' => $apellido[rand(0,count($apellido)-1)],
                'mlast_name' => $apellido[rand(0,count($apellido)-1)],
                'birthday' => Carbon::parse('1995-12-30'),
                'sex' => $gender[rand(0,1)],
                'scholarship_id' => rand(1,9),
                'address_street' => str_random(10),
                'address_number' => str_random(4),
                'neighborhood' => str_random(10),
                'locality' => str_random(10),
                'municipality' => str_random(10),
                'zip_code' => str_random(7),
                'state_id' => rand(1,33), //veracruz
                'phone_1' => str_random(3)."-".str_random(3)."-".str_random(4),
                'phone_2' => str_random(3)."-".str_random(3)."-".str_random(4),
                'social' => $social[rand(0,5)],
                'zone_type' => $zone[rand(0,2)],
                'min_wage' => $wage[rand(0,2)],
            ]);
        }

     
        //str_random(10).'@outlook.com'
    }
}
