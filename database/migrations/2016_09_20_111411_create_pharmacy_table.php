<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)->create('pharmacy', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('pharmacy_name');
            $table->string('address');
            $table->string('town');
            $table->string('state');
        });

        $pharmacy = array(
            array('id' => '2', 'pharmacy_name' => 'Adrian Dunne Pharmacy', 'address' => '12 Dublin Street', 'town' => 'Balbriggan', 'state' => 'DUBLIN
'),
            array('id' => '3', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Units 7 - 11 Blackrock Shopping Centre', 'town' => 'Blackrock', 'state' => 'DUBLIN
'),
            array('id' => '4', 'pharmacy_name' => 'Crowley\'s Pharmacy', 'address' => '207 Decies Road Dubin 10', 'town' => 'Ballyfermot', 'state' => 'DUBLIN
'),
            array('id' => '5', 'pharmacy_name' => 'Cullen\'s Pharmacy', 'address' => '72 Navan Road Dublin 7', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '6', 'pharmacy_name' => 'Brookwood Pharmacy', 'address' => '42 Brookwood Rise Dublin 5', 'town' => 'Artane', 'state' => 'DUBLIN
'),
            array('id' => '7', 'pharmacy_name' => 'Dalkey Pharmacy Ltd', 'address' => '3 Railway Road', 'town' => 'Dalkey', 'state' => 'DUBLIN
'),
            array('id' => '8', 'pharmacy_name' => 'Adam\'s Pharmacy Limited', 'address' => '11 Main Street Dublin 5', 'town' => 'Raheny', 'state' => 'DUBLIN
'),
            array('id' => '9', 'pharmacy_name' => 'Allen\'s Pharmacy Limited', 'address' => '10 Summerhill Parade Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '10', 'pharmacy_name' => 'Banks\' Pharmacy', 'address' => '195 Philipsburgh Avenue Dublin 3', 'town' => 'Fairview', 'state' => 'DUBLIN
'),
            array('id' => '11', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => '2 Kilbarrack Shopping Centre Dublin 5', 'town' => 'Kilbarrack', 'state' => 'DUBLIN
'),
            array('id' => '12', 'pharmacy_name' => 'Bluebell Pharmacy', 'address' => '4 La Touche Road Dublin 12', 'town' => 'Blue Bell', 'state' => 'DUBLIN
'),
            array('id' => '13', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Aylesbury Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '14', 'pharmacy_name' => 'Bhagwan\'s Pharmacy', 'address' => 'Ballinteer Road Dublin 16', 'town' => 'Dundrum', 'state' => 'DUBLIN
'),
            array('id' => '15', 'pharmacy_name' => 'A. C. Boles Limited', 'address' => '390 South Circular Road Dublin 8', 'town' => 'Dolphins Barn', 'state' => 'DUBLIN
'),
            array('id' => '16', 'pharmacy_name' => 'A. C. Boles Limited', 'address' => '20 Lower Drumcondra Road Dublin 9', 'town' => 'Drumcondra', 'state' => 'DUBLIN
'),
            array('id' => '17', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => '65/66 Glasthule Road', 'town' => 'Dun Laoghaire', 'state' => 'DUBLIN
'),
            array('id' => '18', 'pharmacy_name' => 'Boylan\'s Pharmacy Limited', 'address' => '9 Claddagh Green Dublin 10', 'town' => 'Ballyfermot', 'state' => 'DUBLIN
'),
            array('id' => '19', 'pharmacy_name' => 'Evelyn Bradley Limited', 'address' => '48 St. Brigid\'s Road Dublin 5', 'town' => 'Artane', 'state' => 'DUBLIN
'),
            array('id' => '20', 'pharmacy_name' => 'Brady\'s Pharmacy', 'address' => '12 Upper Camden Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '21', 'pharmacy_name' => 'Meagher\'s Chemist', 'address' => '69 Ranelagh Village Dublin 6', 'town' => ' Ranelagh', 'state' => 'DUBLIN
'),
            array('id' => '22', 'pharmacy_name' => 'John Byrne Chemist Ltd', 'address' => '4 Merrion Road Dublin 4', 'town' => 'Ballsbridge', 'state' => 'DUBLIN
'),
            array('id' => '23', 'pharmacy_name' => 'Byrne\'s Allcare Pharmacy', 'address' => 'Oxmanstown Road Dublin 7', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '24', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '103a New Cabra Road Dublin 7', 'town' => 'Cabra', 'state' => 'DUBLIN
'),
            array('id' => '25', 'pharmacy_name' => 'Cahills Allcare Pharmacy ', 'address' => '36 Lower Camden Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '26', 'pharmacy_name' => 'Haven Pharmacy Cassidy\'s', 'address' => '449 South Circular Road Dublin 8', 'town' => 'Rialto', 'state' => 'DUBLIN
'),
            array('id' => '27', 'pharmacy_name' => 'Haven Pharmacy Cassidy\'s', 'address' => 'Unit 3 Chandlers Guild Dublin 8', 'town' => 'James\'s Street', 'state' => 'DUBLIN
'),
            array('id' => '28', 'pharmacy_name' => 'Chamber\'s Pharmacy', 'address' => '127 Ballymun Road Dublin 9', 'town' => 'Glasnevin', 'state' => 'DUBLIN
'),
            array('id' => '29', 'pharmacy_name' => 'Shopping Centre Pharmacy Limited', 'address' => 'Supervalu Shopping Centre Sundrive Road Dublin 6W', 'town' => 'Kimmage', 'state' => 'DUBLIN
'),
            array('id' => '30', 'pharmacy_name' => 'Mulvey\'s Pharmacy', 'address' => '2 Sandyford Village Dublin 18', 'town' => 'Sandyford', 'state' => 'DUBLIN
'),
            array('id' => '31', 'pharmacy_name' => 'Collis Pharmacy', 'address' => '350 North Circular Road Dublin 7', 'town' => 'Phibsboro', 'state' => 'DUBLIN
'),
            array('id' => '32', 'pharmacy_name' => 'Conefrey\'s Pharmacy Limited', 'address' => '136 Pearse Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '33', 'pharmacy_name' => 'Morehampton Pharmacy', 'address' => '79 Morehampton Road Dublin 4', 'town' => 'Donnybrook', 'state' => 'DUBLIN
'),
            array('id' => '34', 'pharmacy_name' => 'Costello\'s Late Night Pharmacy', 'address' => '25 Marino Mart Dublin 3', 'town' => 'Fairview', 'state' => 'DUBLIN
'),
            array('id' => '35', 'pharmacy_name' => 'St. Gabriel\'s Pharmacy', 'address' => '28 St. Gabriel\'s Road Dublin 3', 'town' => 'Clontarf', 'state' => 'DUBLIN
'),
            array('id' => '36', 'pharmacy_name' => 'Cronin\'s Pharmacy', 'address' => '1 Edenmore Shopping Centre Dublin 5', 'town' => 'Raheny', 'state' => 'DUBLIN
'),
            array('id' => '37', 'pharmacy_name' => 'Dargan\'s Chemists Limited', 'address' => '19 Berkeley Street Dublin 7', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '38', 'pharmacy_name' => 'Davis Pharmacy', 'address' => '34 Fairview Strand Dublin 3', 'town' => 'Fairview', 'state' => 'DUBLIN
'),
            array('id' => '39', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => '4 Fitzmaurice Road Dublin 11', 'town' => 'Glasnevin', 'state' => 'DUBLIN
'),
            array('id' => '40', 'pharmacy_name' => 'Adrian Dunne Pharmacy', 'address' => '394 Collins Avenue Dublin 9', 'town' => 'Whitehall', 'state' => 'DUBLIN
'),
            array('id' => '41', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Northside Shopping Centre Dublin 17', 'town' => 'Coolock', 'state' => 'DUBLIN
'),
            array('id' => '42', 'pharmacy_name' => 'O\'Keeffe\'s Pharmacy', 'address' => '111 Malahide Road Dublin 3', 'town' => 'Donnycarney', 'state' => 'DUBLIN
'),
            array('id' => '43', 'pharmacy_name' => 'Doran\'s Pharmacy Limited', 'address' => 'Ballybrack Shopping Centre Churchview RoadCo. Dublin', 'town' => 'Ballybrack', 'state' => 'DUBLIN
'),
            array('id' => '44', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 36 Crumlin Shopping Centre Dublin 12', 'town' => 'Crumlin', 'state' => 'DUBLIN
'),
            array('id' => '45', 'pharmacy_name' => 'Burnett\'s Pharmacy', 'address' => '42 Lower Georges Street', 'town' => 'Dun Laoghaire', 'state' => 'DUBLIN
'),
            array('id' => '46', 'pharmacy_name' => 'Doyle\'s Pharmacy', 'address' => '3 Vernon Avenue Dublin 3', 'town' => 'Clontarf', 'state' => 'DUBLIN
'),
            array('id' => '47', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => '53 Kilbarrack Road Dublin 5', 'town' => 'Kilbarrack', 'state' => 'DUBLIN
'),
            array('id' => '48', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => '39 Stoneybatter Dublin 7', 'town' => 'Stoneybatter', 'state' => 'DUBLIN
'),
            array('id' => '49', 'pharmacy_name' => 'Wexford Street Pharmacy', 'address' => '6 Wexford Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '50', 'pharmacy_name' => 'Haven Pharmacy Errigal', 'address' => '16 Errigal Road Dublin 12', 'town' => 'Drimnagh', 'state' => 'DUBLIN
'),
            array('id' => '51', 'pharmacy_name' => 'Haven Pharmacy Farmers', 'address' => '56 Main Street Dublin 14', 'town' => 'Dundrum', 'state' => 'DUBLIN
'),
            array('id' => '52', 'pharmacy_name' => 'Fingal Pharmacy Limited', 'address' => 'Superquinn Shopping Centre Dublin 11', 'town' => 'Finglas', 'state' => 'DUBLIN
'),
            array('id' => '53', 'pharmacy_name' => 'Fitzmaurice Chemists Limited', 'address' => '150 Church Road Dublin 3', 'town' => 'East Wall', 'state' => 'DUBLIN
'),
            array('id' => '54', 'pharmacy_name' => 'Foley\'s Pharmacy', 'address' => '136 Parnell Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '55', 'pharmacy_name' => 'Freyne & Co. Limited', 'address' => 'Orchard Road Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '56', 'pharmacy_name' => 'Hilton\'s Allcare Pharmacy ', 'address' => '108-110 Dun Laoghaire Shopping Centre', 'town' => 'Dun Laoghaire', 'state' => 'DUBLIN
'),
            array('id' => '57', 'pharmacy_name' => 'Bourke\'s Allcare Pharmacy', 'address' => '220 Lower Rathmines Road Dublin 6', 'town' => 'Rathmines', 'state' => 'DUBLIN
'),
            array('id' => '58', 'pharmacy_name' => 'Hickey\'s Pharmacy ', 'address' => '5 Main Street Dublin 11', 'town' => 'Finglas', 'state' => 'DUBLIN
'),
            array('id' => '59', 'pharmacy_name' => 'Glenview Pharmacy Limited', 'address' => '194 Glenview Park Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '60', 'pharmacy_name' => 'Grattan Pharmacy', 'address' => '13 Grattan Crescent Dublin 8', 'town' => 'Inchicore', 'state' => 'DUBLIN
'),
            array('id' => '61', 'pharmacy_name' => 'Greenlea Pharmacy Limited', 'address' => '116 Greenlea Road Dublin 6W', 'town' => 'Terenure', 'state' => 'DUBLIN
'),
            array('id' => '62', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Ashleaf Shopping Centre Dublin 12', 'town' => 'Crumlin Cross', 'state' => 'DUBLIN
'),
            array('id' => '63', 'pharmacy_name' => 'Boots', 'address' => 'Units A & B Roselawn Shopping Centre Dublin 15', 'town' => 'Roselawn Road', 'state' => 'DUBLIN
'),
            array('id' => '64', 'pharmacy_name' => 'Boots', 'address' => '32 Upper Baggot Street Dublin 4', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '65', 'pharmacy_name' => 'Boots', 'address' => 'Unit B1 Nutgrove Shopping Centre Dublin 14', 'town' => 'Rathfarnham', 'state' => 'DUBLIN
'),
            array('id' => '66', 'pharmacy_name' => 'Boots', 'address' => '20 Henry Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '67', 'pharmacy_name' => 'Boots', 'address' => '12 Grafton Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '68', 'pharmacy_name' => 'Haven Pharmacy Hickey\'s', 'address' => 'Main Street', 'town' => 'Rush', 'state' => 'DUBLIN
'),
            array('id' => '69', 'pharmacy_name' => 'Adrian Dunne Pharmacy', 'address' => 'Unit 4 Tesco Shopping Centre Hillcrest', 'town' => 'Lucan', 'state' => 'DUBLIN
'),
            array('id' => '70', 'pharmacy_name' => 'Morgan\'s Pharmacy', 'address' => '2-4 Fairview Strand Fairview Dublin 3', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '71', 'pharmacy_name' => 'Homepharm Limited', 'address' => '45a Homefarm Road Dublin 9', 'town' => 'Drumcondra', 'state' => 'DUBLIN
'),
            array('id' => '72', 'pharmacy_name' => 'Gormley Pharmacy', 'address' => '5 Nolan Avenue Dublin 14', 'town' => 'Churchtown', 'state' => 'DUBLIN
'),
            array('id' => '73', 'pharmacy_name' => 'Burke\'s Pharmacy', 'address' => '21-23 Ranelagh Road Dublin 6', 'town' => 'Ranelagh', 'state' => 'DUBLIN
'),
            array('id' => '74', 'pharmacy_name' => 'Bawnogue Life Pharmacy', 'address' => 'Unit 6 Bawnogue Shopping Centre Bawnogue Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '75', 'pharmacy_name' => 'Kerins Pharmacy Limited', 'address' => '32 Castle Street', 'town' => 'Dalkey', 'state' => 'DUBLIN
'),
            array('id' => '76', 'pharmacy_name' => 'Kiely\'s Pharmacy', 'address' => '282 Ballyfermot Road Dublin 10', 'town' => 'Ballyfermot', 'state' => 'DUBLIN
'),
            array('id' => '77', 'pharmacy_name' => 'Kiely\'s Pharmacy', 'address' => '203 Le Fanu Road Dublin 10', 'town' => 'Ballyfermot', 'state' => 'DUBLIN
'),
            array('id' => '78', 'pharmacy_name' => 'Magner\'s Pharmacy', 'address' => '175 Howth Road Dublin 3', 'town' => 'Killester', 'state' => 'DUBLIN
'),
            array('id' => '79', 'pharmacy_name' => 'Haven Pharmacy Monkstown', 'address' => '26 Oliver Plunkett Road', 'town' => 'Dun Laoghaire', 'state' => 'DUBLIN
'),
            array('id' => '80', 'pharmacy_name' => 'Haven Pharmacy Brennans', 'address' => 'Taylors Lane Dublin 16', 'town' => 'Rathfarnham', 'state' => 'DUBLIN
'),
            array('id' => '81', 'pharmacy_name' => 'Kinirons Allcare Pharmacy ', 'address' => 'Main Street', 'town' => 'Lucan', 'state' => 'DUBLIN
'),
            array('id' => '82', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Superquinn Shopping Centre Dublin 16', 'town' => 'Knocklyon', 'state' => 'DUBLIN
'),
            array('id' => '83', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 6 Phibsboro Shopping Centre Dublin 7', 'town' => 'Phibsboro', 'state' => 'DUBLIN
'),
            array('id' => '84', 'pharmacy_name' => 'Life Pharmacy', 'address' => '241 Swords Road Dublin 9', 'town' => 'Santry', 'state' => 'DUBLIN
'),
            array('id' => '85', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Bon Secours Hospital"', 'town' => ' Dublin 9', 'state' => 'Glasnevin'),
            array('id' => '86', 'pharmacy_name' => 'Leech Pharmacy', 'address' => '43 Ranelagh Dublin 6', 'town' => 'Ranelagh', 'state' => 'DUBLIN
'),
            array('id' => '87', 'pharmacy_name' => 'Leonard\'s Corner Pharmacy Limited', 'address' => '106 South Circular Road Dublin 8', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '88', 'pharmacy_name' => 'Lusk Pharmacy', 'address' => 'Unit 2 69 Main Street', 'town' => 'Lusk', 'state' => 'DUBLIN
'),
            array('id' => '89', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => '413 Howth Road Dublin 5', 'town' => 'Raheny', 'state' => 'DUBLIN
'),
            array('id' => '90', 'pharmacy_name' => 'McAuliffe\'s Pharmacy', 'address' => '93 Sandymount Road Dublin 4', 'town' => 'Sandymount', 'state' => 'DUBLIN
'),
            array('id' => '91', 'pharmacy_name' => 'McDermott\'s Pharmacy', 'address' => '5 Main Street', 'town' => 'Howth', 'state' => 'DUBLIN
'),
            array('id' => '92', 'pharmacy_name' => 'Dunville Pharmacy', 'address' => '32-34 Dunville Avenue Dublin 6', 'town' => 'Ranelagh', 'state' => 'DUBLIN
'),
            array('id' => '93', 'pharmacy_name' => 'Haven Pharmacy Loobys', 'address' => '42 Manor Road Dublin 20', 'town' => 'Palmerstown', 'state' => 'DUBLIN
'),
            array('id' => '94', 'pharmacy_name' => 'Finnegan\'s Pharmacy Limited', 'address' => '41 Sallynoggin Road', 'town' => 'Dun Laoghaire', 'state' => 'DUBLIN
'),
            array('id' => '95', 'pharmacy_name' => 'Haven Pharmacy McLaughlins', 'address' => '153 Drimnagh Road Dublin 12', 'town' => 'Walkinstown', 'state' => 'DUBLIN
'),
            array('id' => '96', 'pharmacy_name' => 'Haven Pharmacy Dohertys', 'address' => '2 Shantalla Road Dublin 9', 'town' => 'Beaumont', 'state' => 'DUBLIN
'),
            array('id' => '97', 'pharmacy_name' => 'Life Pharmacy Advice for Living Well', 'address' => 'Swan Shopping Centre Dublin 6', 'town' => 'Rathmines', 'state' => 'DUBLIN
'),
            array('id' => '98', 'pharmacy_name' => 'Mackens Pharmacy Ltd', 'address' => '41 Main Street', 'town' => 'Blackrock', 'state' => 'DUBLIN
'),
            array('id' => '99', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => '6 Thorncastle Street Dublin 4', 'town' => 'Ringsend', 'state' => 'DUBLIN
'),
            array('id' => '100', 'pharmacy_name' => 'Maxwell\'s Pharmacy', 'address' => '28 Castle Street', 'town' => 'Dalkey', 'state' => 'DUBLIN
'),
            array('id' => '101', 'pharmacy_name' => 'Meagher\'s Chemist', 'address' => '10 Upper Baggot Street Dublin 4', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '102', 'pharmacy_name' => 'Dermot Moran Pharmacy Ltd', 'address' => 'Firhouse Supervalu Shopping Centre Firhouse Dublin 24', 'town' => 'Firhouse', 'state' => 'DUBLIN
'),
            array('id' => '103', 'pharmacy_name' => 'McMeel\'s Pharmacy', 'address' => '27 Strand Street', 'town' => 'Skerries', 'state' => 'DUBLIN
'),
            array('id' => '104', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => '63 Lower Mounttown Road', 'town' => 'Dun Laoghaire', 'state' => 'DUBLIN
'),
            array('id' => '105', 'pharmacy_name' => 'Mulvey\'s Pharmacy', 'address' => 'Main Street Dublin 14', 'town' => 'Dundrum', 'state' => 'DUBLIN
'),
            array('id' => '106', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => '50 Lower Dorset Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '107', 'pharmacy_name' => 'Pharmacy O\'Regan', 'address' => '36a Talbot Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '108', 'pharmacy_name' => 'Murray\'s Pharmacy', 'address' => '56 Serpentine Avenue Dublin 4', 'town' => 'Ballsbridge', 'state' => 'DUBLIN
'),
            array('id' => '109', 'pharmacy_name' => 'Liam Murray Chemists Limited', 'address' => '20/21 Talbot Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '110', 'pharmacy_name' => 'Moore\'s Pharmacy', 'address' => '2 St. Agnes Road Dublin 12', 'town' => 'Crumlin', 'state' => 'DUBLIN
'),
            array('id' => '111', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => '24 Stillorgan Shopping Centre', 'town' => 'Stillorgan', 'state' => 'DUBLIN
'),
            array('id' => '112', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Neilstown Shopping Centre Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '113', 'pharmacy_name' => 'Newtownpark Pharmacy ', 'address' => '3 Newtown Park', 'town' => 'Blackrock', 'state' => 'DUBLIN
'),
            array('id' => '114', 'pharmacy_name' => 'Skerries Allcare Pharmacy', 'address' => '38 Strand Street', 'town' => 'Skerries', 'state' => 'DUBLIN
'),
            array('id' => '115', 'pharmacy_name' => 'Nolan\'s Pharmacy', 'address' => 'Unit 3 Glenageary Shopping Centre', 'town' => 'Glenageary', 'state' => 'DUBLIN
'),
            array('id' => '116', 'pharmacy_name' => 'Johnstown totalhealth Pharmacy', 'address' => '31 Johnstown Road', 'town' => 'Cabinteely', 'state' => 'DUBLIN
'),
            array('id' => '117', 'pharmacy_name' => 'McCartan\'s Pharmacy', 'address' => 'Unit 3 Bayside Shopping Centre Dublin 13', 'town' => 'Suttn', 'state' => 'DUBLIN
'),
            array('id' => '118', 'pharmacy_name' => 'Fortfield Pharmacy', 'address' => '48 Fortfield Park Dublin 6', 'town' => 'Terenure', 'state' => 'DUBLIN
'),
            array('id' => '119', 'pharmacy_name' => 'O\'Connor\'s Pharmacy', 'address' => '4/6 Bath Avenue Dublin 4', 'town' => 'Sandymount', 'state' => 'DUBLIN
'),
            array('id' => '120', 'pharmacy_name' => 'Magner\'s Pharmacy', 'address' => '16 Kincora Avenue Dublin 3', 'town' => 'Clontarf', 'state' => 'DUBLIN
'),
            array('id' => '121', 'pharmacy_name' => 'Edward MacManus Pharmacy', 'address' => '19 Ballymun Shopping Centre Dublin 11', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '122', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => '33 Northside Shopping Centre Dublin 17', 'town' => 'Coolock', 'state' => 'DUBLIN
'),
            array('id' => '123', 'pharmacy_name' => 'Saint Patrick\'s Pharmacy Ltd', 'address' => 'St. Patrick\'s Road Dublin 12', 'town' => 'Greenhills', 'state' => 'DUBLIN
'),
            array('id' => '124', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Artane Castle Shopping Centre Kilmore Road Dublin 5', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '125', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => '54 St Brigids Road Dublin 5', 'town' => 'Artane', 'state' => 'DUBLIN
'),
            array('id' => '126', 'pharmacy_name' => 'Your Local Pharmacy', 'address' => 'Unit 6 Supervalu S. Centre Dublin 16', 'town' => 'Ballinteer Avenue', 'state' => 'DUBLIN
'),
            array('id' => '127', 'pharmacy_name' => 'South William Street Pharmacy', 'address' => '38 South William Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '128', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Main Street Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '129', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. Vincent\'s Private Hospital"', 'town' => 'Pharmacy Department St Vincent\'s Private Hospital Dublin 4', 'state' => 'Merrion Road'),
            array('id' => '130', 'pharmacy_name' => 'O\'Mahony and Ennis Pharmacy', 'address' => '4 Upper Georges Street', 'town' => 'Dun Laoghaire', 'state' => 'DUBLIN
'),
            array('id' => '131', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Superquinn Shopping Centre Dublin 15', 'town' => 'Blanchardstown', 'state' => 'DUBLIN
'),
            array('id' => '132', 'pharmacy_name' => 'Johnson Pharmacy Limited', 'address' => 'Supervalu Shopping Centre Walkinstown Road Dublin 12', 'town' => 'Walkinstown', 'state' => 'DUBLIN
'),
            array('id' => '133', 'pharmacy_name' => 'The Rise Pharmacy', 'address' => '31 The Rise', 'town' => 'Mount Merrion', 'state' => 'DUBLIN
'),
            array('id' => '134', 'pharmacy_name' => 'Declan O\'Sullivan Pharmacy Limited', 'address' => 'Ballymount RoadWalkinstown Cross Dublin 12', 'town' => 'Walkinstown', 'state' => 'DUBLIN
'),
            array('id' => '135', 'pharmacy_name' => 'Pelly\'s Pharmacy Ltd', 'address' => '26 Fassaugh Avenue Dublin 7', 'town' => 'Cabra West', 'state' => 'DUBLIN
'),
            array('id' => '136', 'pharmacy_name' => 'Price\'s Medical Hall', 'address' => '26 Clare Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '137', 'pharmacy_name' => 'Corr\'s Pharmacy (Clonshaugh) Limited', 'address' => 'Unit 6 Clonshaugh Shopping Centre Dublin 17', 'town' => 'Coolock', 'state' => 'DUBLIN
'),
            array('id' => '138', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => '157 Killester Avenue Dublin 5', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '139', 'pharmacy_name' => 'Quinn\'s Medical Hall (Malahide) Limited', 'address' => '1a Church Road', 'town' => 'Malahide', 'state' => 'DUBLIN
'),
            array('id' => '140', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Main Street', 'town' => 'Shankill', 'state' => 'DUBLIN
'),
            array('id' => '141', 'pharmacy_name' => 'Haven Pharmacy Raffertys', 'address' => 'Stillorgan S. C. ', 'town' => 'Stillorgan', 'state' => 'DUBLIN
'),
            array('id' => '142', 'pharmacy_name' => 'Haven Pharmacy Raffertys', 'address' => 'Unit 6 Cornelscourt S.C.  Dublin 18', 'town' => 'Cornelscourt', 'state' => 'DUBLIN
'),
            array('id' => '143', 'pharmacy_name' => 'Reidy\'s Pharmacy Ltd', 'address' => 'Main Street', 'town' => 'Rathcoole', 'state' => 'DUBLIN
'),
            array('id' => '144', 'pharmacy_name' => 'Reilly\'s Pharmacy Clondalkin', 'address' => '5 Castle Crescent Monastery Road Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '145', 'pharmacy_name' => 'Roches Chemist', 'address' => '165 Upper Rathmines Road Dublin 6', 'town' => 'Rathmines', 'state' => 'DUBLIN
'),
            array('id' => '146', 'pharmacy_name' => 'Roebuck Pharmacy', 'address' => '7 Farmhill Road Dublin 14', 'town' => 'Goatstown', 'state' => 'DUBLIN
'),
            array('id' => '147', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => '5 Lower Kilmacud Road', 'town' => 'Stillorgan', 'state' => 'DUBLIN
'),
            array('id' => '148', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => '199 Crumlin Road Dublin 12', 'town' => 'Crumlin', 'state' => 'DUBLIN
'),
            array('id' => '149', 'pharmacy_name' => 'Sandycove Pharmacy', 'address' => '60 Glasthule Road', 'town' => 'Sandycove', 'state' => 'DUBLIN
'),
            array('id' => '150', 'pharmacy_name' => 'O\'Donnell\'s totalhealth Pharmacy', 'address' => 'Unit 2 Shankill Shopping Centre', 'town' => 'Shankill', 'state' => 'DUBLIN
'),
            array('id' => '151', 'pharmacy_name' => 'Galtymore Allcare Pharmacy', 'address' => '131 Galtymore Road Dublin 12', 'town' => 'Drimnagh', 'state' => 'DUBLIN
'),
            array('id' => '152', 'pharmacy_name' => 'Sheane\'s Pharmacy', 'address' => '92 Foxrock Avenue Dublin 18', 'town' => 'Foxrock', 'state' => 'DUBLIN
'),
            array('id' => '153', 'pharmacy_name' => 'Shelbourne Pharmacy Limited', 'address' => '19 Irishtown Road Dublin 4', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '154', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '8 Terenure Road East Dublin 6', 'town' => 'Rathgar', 'state' => 'DUBLIN
'),
            array('id' => '155', 'pharmacy_name' => 'Perrystown Allcare Pharmacy', 'address' => '182 Whitehall Road West Dublin 12', 'town' => 'Perrystown', 'state' => 'DUBLIN
'),
            array('id' => '156', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Bird Avenue Dublin 14', 'town' => 'Clonskeagh', 'state' => 'DUBLIN
'),
            array('id' => '157', 'pharmacy_name' => 'Springfield Medicare Limited', 'address' => 'Springfield Medicare Ltd Alderwood Court Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '158', 'pharmacy_name' => 'Stanley\'s Pharmacy Ltd', 'address' => 'Mountview Shopping Centre Dublin 15', 'town' => 'Blanchardstown', 'state' => 'DUBLIN
'),
            array('id' => '159', 'pharmacy_name' => 'Superpharm Chemists', 'address' => 'Unit 8 Main Street Dublin 11', 'town' => 'Finglas', 'state' => 'DUBLIN
'),
            array('id' => '160', 'pharmacy_name' => 'Terenure Life Pharmacy', 'address' => '86 Terenure Road East Dublin 6', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '161', 'pharmacy_name' => 'Thom\'s Pharmacy Limited', 'address' => '151 Lower Kimmage Road Dublin 6W', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '162', 'pharmacy_name' => 'Old County Life Pharmacy ', 'address' => '111 Old County Road Dublin 12', 'town' => 'Crumlin', 'state' => 'DUBLIN
'),
            array('id' => '163', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => '8 The Mall Dublin 4', 'town' => 'Donnybrook', 'state' => 'DUBLIN
'),
            array('id' => '164', 'pharmacy_name' => 'Walsh\'s Pharmacy', 'address' => '491 South Circular Road Dublin 8', 'town' => 'Rialto', 'state' => 'DUBLIN
'),
            array('id' => '165', 'pharmacy_name' => 'Tony Walsh Allcare Pharmacy', 'address' => 'Rathfarnham Shopping Centre Dublin 14', 'town' => 'Rathfarnham', 'state' => 'DUBLIN
'),
            array('id' => '166', 'pharmacy_name' => 'Lloyds Pharmacy', 'address' => 'Abbey Street', 'town' => 'Wicklow Town', 'state' => 'WICKLOW
'),
            array('id' => '167', 'pharmacy_name' => 'Achill totalhealth Pharmacy', 'address' => 'Achill SoundAchill Island', 'town' => '', 'state' => 'MAYO
'),
            array('id' => '168', 'pharmacy_name' => 'Adams Pharmacy', 'address' => 'Bridge Street', 'town' => 'Tullamore', 'state' => 'OFFALY
'),
            array('id' => '169', 'pharmacy_name' => 'Ahern\'s Pharmacy', 'address' => 'Farranfore', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '170', 'pharmacy_name' => 'McCrystal\'s Pharmacy', 'address' => 'Ramor Medical HallMain Street', 'town' => 'Virginia', 'state' => 'CAVAN
'),
            array('id' => '171', 'pharmacy_name' => 'Bandon Medical Hall Limited', 'address' => '5/6 Bridge Street', 'town' => 'Bandon', 'state' => 'CORK
'),
            array('id' => '172', 'pharmacy_name' => 'Barrett\'s Pharmacy', 'address' => 'Barrack Street', 'town' => 'Castlecomer', 'state' => 'KILKENNY
'),
            array('id' => '173', 'pharmacy_name' => 'Barry\'s Pharmacy', 'address' => 'The Medical HallMain Street', 'town' => 'Tubbercurry', 'state' => 'SLIGO
'),
            array('id' => '174', 'pharmacy_name' => 'Walsh\'s Pharmacy', 'address' => '61 Main Street', 'town' => 'Loughrea', 'state' => 'GALWAY
'),
            array('id' => '175', 'pharmacy_name' => 'Wades totalhealth Pharmacy ', 'address' => '76 Main Street', 'town' => 'Gorey', 'state' => 'WEXFORD
'),
            array('id' => '176', 'pharmacy_name' => 'Begley\'s Pharmacy Ltd.', 'address' => 'The Diamond', 'town' => 'Donegal Town', 'state' => 'DONEGAL
'),
            array('id' => '177', 'pharmacy_name' => 'Bishopstown Pharmacy', 'address' => 'Looneys Cross Bishopstown Road Bishopstown', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '178', 'pharmacy_name' => 'Black\'s Allcare Pharmacy', 'address' => '24 Mill Street', 'town' => 'Monaghan Town', 'state' => 'MONAGHAN
'),
            array('id' => '179', 'pharmacy_name' => 'Bluetts Pharmacy', 'address' => '1 Pearse Street', 'town' => 'Clonakilty', 'state' => 'CORK
'),
            array('id' => '180', 'pharmacy_name' => 'Mervue Pharmacy', 'address' => '6 Plunkett Avenue Old Mervue', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '181', 'pharmacy_name' => 'Bourke\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Castlebar', 'state' => 'MAYO
'),
            array('id' => '182', 'pharmacy_name' => 'Grogan\'s Pharmacy and Opticians', 'address' => 'Unit 2 And 3 Main Street Ballina', 'town' => 'Killaloe', 'state' => 'TIPPERARY
'),
            array('id' => '183', 'pharmacy_name' => 'Life Pharmacy', 'address' => 'The Diamond', 'town' => 'Ardara', 'state' => 'DONEGAL
'),
            array('id' => '184', 'pharmacy_name' => 'Ryan McDowell\'s Pharmacy Limited', 'address' => 'Green Street', 'town' => 'Callan', 'state' => 'KILKENNY
'),
            array('id' => '185', 'pharmacy_name' => 'Brassil\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Ballyheigue', 'state' => 'KERRY
'),
            array('id' => '186', 'pharmacy_name' => 'Breen\'s Allcare Pharmacy', 'address' => 'Main Street', 'town' => 'Slane', 'state' => 'MEATH
'),
            array('id' => '187', 'pharmacy_name' => 'Britton\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Donegal Town', 'state' => 'DONEGAL
'),
            array('id' => '188', 'pharmacy_name' => 'John D. Broderick Limited', 'address' => '84 Barrack Street', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '189', 'pharmacy_name' => 'Broderick\'s Pharmacy', 'address' => '7 William Street', 'town' => 'Listowel', 'state' => 'KERRY
'),
            array('id' => '190', 'pharmacy_name' => 'Kelly\'s Pharmacy', 'address' => 'Church Street', 'town' => 'Athenry', 'state' => 'GALWAY
'),
            array('id' => '191', 'pharmacy_name' => 'Brogans totalhealth Pharmacy', 'address' => 'Shop Street', 'town' => 'Boyle', 'state' => 'ROSCOMMON
'),
            array('id' => '192', 'pharmacy_name' => 'Haven Pharmacy Brosnan', 'address' => '19 Henry Street', 'town' => 'Kenmare', 'state' => 'KERRY
'),
            array('id' => '193', 'pharmacy_name' => 'McCrystal\'s Pharmacy', 'address' => '78 Market Street', 'town' => 'Cootehill', 'state' => 'CAVAN
'),
            array('id' => '194', 'pharmacy_name' => 'O\'Connell\'s Medical Hall', 'address' => '19 Abbey Street', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '195', 'pharmacy_name' => 'Burke\'s Pharmacy Limited', 'address' => '3 North Main Street', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '196', 'pharmacy_name' => 'Burke\'s Pharmacy (New Ross) Ltd', 'address' => '25 South Street', 'town' => 'New Ross', 'state' => 'WEXFORD
'),
            array('id' => '197', 'pharmacy_name' => 'Murtagh\'s Life Pharmacy - Cavan Town', 'address' => '25 Main Street', 'town' => 'Cavan Town', 'state' => 'CAVAN
'),
            array('id' => '198', 'pharmacy_name' => 'Ryans Pharmacy', 'address' => 'Edenderry Shopping Centre', 'town' => 'Edenderry', 'state' => 'OFFALY
'),
            array('id' => '199', 'pharmacy_name' => 'Owenacurra Pharmacy', 'address' => '79 Main Street', 'town' => 'Midleton', 'state' => 'CORK
'),
            array('id' => '200', 'pharmacy_name' => 'Butlers Medical Hall', 'address' => 'Abbey Street', 'town' => 'Wicklow Town', 'state' => 'WICKLOW
'),
            array('id' => '201', 'pharmacy_name' => 'Butler\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Birr', 'state' => 'OFFALY
'),
            array('id' => '202', 'pharmacy_name' => 'Byrne\'s Late Night Pharmacy', 'address' => '1-3 Church Street', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '203', 'pharmacy_name' => 'Ferns Pharmacy', 'address' => 'Aldercourt Main Street', 'town' => 'Ferns', 'state' => 'WEXFORD
'),
            array('id' => '204', 'pharmacy_name' => 'C. & D. Medical Hall ', 'address' => 'Water Street', 'town' => 'Mohill', 'state' => 'LEITRIM
'),
            array('id' => '205', 'pharmacy_name' => 'C.H. Chemists (Tralee) Limited', 'address' => '31 The Mall', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '206', 'pharmacy_name' => 'Conroy\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Mountrath', 'state' => 'LAOIS
'),
            array('id' => '207', 'pharmacy_name' => 'Callan\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Kingscourt', 'state' => 'CAVAN
'),
            array('id' => '208', 'pharmacy_name' => 'Heaney\'s Pharmacy', 'address' => 'Bridge Street', 'town' => 'Westport', 'state' => 'MAYO
'),
            array('id' => '209', 'pharmacy_name' => 'Cecil Street Pharmacy Limited', 'address' => '37 Cecil Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '210', 'pharmacy_name' => 'Drimoleague Pharmacy', 'address' => 'Main Street', 'town' => 'Drimoleague', 'state' => 'CORK
'),
            array('id' => '211', 'pharmacy_name' => 'John Carey Pharmacist Limited', 'address' => 'Main Street', 'town' => 'Clogheen', 'state' => 'TIPPERARY
'),
            array('id' => '212', 'pharmacy_name' => 'Raphoe Pharmacy', 'address' => 'The Diamond', 'town' => 'Raphoe', 'state' => 'DONEGAL
'),
            array('id' => '213', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => 'Market Square', 'town' => 'Carlingford', 'state' => 'LOUTH
'),
            array('id' => '214', 'pharmacy_name' => 'O\'Neill Street Pharmacy (Connolly\'s)', 'address' => '13 O\'Neill Street', 'town' => 'Carrickmacross', 'state' => 'MONAGHAN
'),
            array('id' => '215', 'pharmacy_name' => 'Carroll\'s Pharmacy', 'address' => '24 Ballybricken', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '216', 'pharmacy_name' => 'T. Casey Pharmacy Limited', 'address' => 'Teeling Street', 'town' => 'Ballymote', 'state' => 'SLIGO
'),
            array('id' => '217', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => '2 Oakfield Lawn Ballinlough Road', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '218', 'pharmacy_name' => 'Casserly\'s Pharmacy', 'address' => 'Lower Main Street', 'town' => 'Abbeyleix', 'state' => 'LAOIS
'),
            array('id' => '219', 'pharmacy_name' => 'Boots', 'address' => '3-5 William Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '220', 'pharmacy_name' => 'Bonners Pharmacy', 'address' => 'Main Street', 'town' => 'Ballybofey', 'state' => 'DONEGAL
'),
            array('id' => '221', 'pharmacy_name' => 'Sloan\'s Pharmacy', 'address' => 'Castle Street', 'town' => 'Castleconnell', 'state' => 'LIMERICK
'),
            array('id' => '222', 'pharmacy_name' => 'Quinn\'s Pharmacy', 'address' => 'Georges Street (Bridge Street)', 'town' => 'Gort', 'state' => 'GALWAY
'),
            array('id' => '223', 'pharmacy_name' => 'Coffey\'s Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Kilkelly', 'state' => 'MAYO
'),
            array('id' => '224', 'pharmacy_name' => 'Coghlan\'s CarePlus Pharmacy', 'address' => '98/99 Main Street', 'town' => 'Carrick-On-Suir', 'state' => 'TIPPERARY
'),
            array('id' => '225', 'pharmacy_name' => 'Coleman\'s Pharmacy', 'address' => '24 Mardyke Street', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '226', 'pharmacy_name' => 'Colleran\'s Pharmacy Limited', 'address' => 'The Square', 'town' => 'Charlestown', 'state' => 'MAYO
'),
            array('id' => '227', 'pharmacy_name' => 'Sean Collin\'s Pharmacy Ltd.', 'address' => 'Main Street', 'town' => 'Killaloe', 'state' => 'CLARE
'),
            array('id' => '228', 'pharmacy_name' => 'Cara Pharmacy (Cavan)', 'address' => '77 Main Street', 'town' => 'Cavan', 'state' => 'CAVAN
'),
            array('id' => '229', 'pharmacy_name' => 'Haven Pharmacy Connollys', 'address' => '59 Main Street', 'town' => 'Dungarvan', 'state' => 'WATERFORD
'),
            array('id' => '230', 'pharmacy_name' => 'Mullins Pharmacy', 'address' => 'Main Street', 'town' => 'Charleville', 'state' => 'CORK
'),
            array('id' => '231', 'pharmacy_name' => 'Sean Conway Limited', 'address' => 'Main Street', 'town' => 'Ashbourne', 'state' => 'MEATH
'),
            array('id' => '232', 'pharmacy_name' => 'Browne\'s Pharmacy', 'address' => '26 Market Street', 'town' => 'Cootehill', 'state' => 'CAVAN
'),
            array('id' => '233', 'pharmacy_name' => 'Co-operative Animal Health ', 'address' => 'Tullow Industrial Estate', 'town' => 'Tullow', 'state' => 'CARLOW
'),
            array('id' => '234', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '53 William Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '235', 'pharmacy_name' => 'Doody\'s Pharmacy', 'address' => '10 Lower Cork Street', 'town' => 'Mitchelstown', 'state' => 'CORK
'),
            array('id' => '236', 'pharmacy_name' => 'Corcoran\'s Allcare Pharmacy', 'address' => '53 Main Street', 'town' => 'Longford Town', 'state' => 'LONGFORD
'),
            array('id' => '237', 'pharmacy_name' => 'Corless Pharmacy', 'address' => '44 Dublin Street', 'town' => 'Carlow', 'state' => 'CARLOW
'),
            array('id' => '238', 'pharmacy_name' => 'Cosgrove\'s Pharmacy Limited', 'address' => 'Edward Street', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '239', 'pharmacy_name' => 'Costelloe\'s of Callan', 'address' => 'Green Street', 'town' => 'Callan', 'state' => 'KILKENNY
'),
            array('id' => '240', 'pharmacy_name' => 'Costigan\'s Pharmacy', 'address' => '52 Main Street', 'town' => 'Tipperary', 'state' => 'TIPPERARY
'),
            array('id' => '241', 'pharmacy_name' => 'Cotter\'s Pharmacy', 'address' => '48 Main Street', 'town' => 'Carrigtwohill', 'state' => 'CORK
'),
            array('id' => '242', 'pharmacy_name' => 'Cox Pharmacy Limited', 'address' => 'Bridge Street', 'town' => 'Carrick-On-Shannon', 'state' => 'LEITRIM
'),
            array('id' => '243', 'pharmacy_name' => 'Tarbert Allcare Pharmacy', 'address' => 'Main Street', 'town' => 'Tarbert', 'state' => 'KERRY
'),
            array('id' => '244', 'pharmacy_name' => 'Crescent Pharmacy', 'address' => '8 Father Griffin Road', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '245', 'pharmacy_name' => 'Ballincollig Allcare Pharmacy', 'address' => 'Main Street', 'town' => 'Ballincollig', 'state' => 'CORK
'),
            array('id' => '246', 'pharmacy_name' => 'Abbey Healthcare ', 'address' => '14 Uam Var Avenue', 'town' => 'Bishopstown', 'state' => 'CORK
'),
            array('id' => '247', 'pharmacy_name' => 'Crowley\'s Pharmacy Limited', 'address' => '81 Main Street', 'town' => 'Castleisland', 'state' => 'KERRY
'),
            array('id' => '248', 'pharmacy_name' => 'Cross Allcare Pharmacy', 'address' => 'The Square', 'town' => 'Castletownbere', 'state' => 'CORK
'),
            array('id' => '249', 'pharmacy_name' => 'Cuddy\'s Medical Hall And Company Limited', 'address' => '67 Kenyon Street', 'town' => 'Nenagh', 'state' => 'TIPPERARY
'),
            array('id' => '250', 'pharmacy_name' => 'Tully\'s Pharmacy', 'address' => '45 Main Street', 'town' => 'Edgeworthstown', 'state' => 'LONGFORD
'),
            array('id' => '251', 'pharmacy_name' => 'Leavy\'s Pharmacy', 'address' => '94 Clanbrassil Street', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '252', 'pharmacy_name' => 'Leavy\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Castleblayney', 'state' => 'MONAGHAN
'),
            array('id' => '253', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '18 Governey Square', 'town' => 'Graiguecullen', 'state' => 'CARLOW
'),
            array('id' => '254', 'pharmacy_name' => 'Woodview Pharmacy', 'address' => 'Woodview Shopping Centre Old Cratloe Road', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '255', 'pharmacy_name' => 'The Square Pharmacy Limited', 'address' => 'The Square', 'town' => 'Tuam', 'state' => 'GALWAY
'),
            array('id' => '256', 'pharmacy_name' => 'Davis Pharmacy', 'address' => 'Davis Pharmacy', 'town' => 'Ballinasloe', 'state' => 'GALWAY
'),
            array('id' => '257', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => 'Waterford S. Centre Lisduggan', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '258', 'pharmacy_name' => 'Lixnaw Pharmacy Ltd', 'address' => 'Lixnaw', 'town' => '', 'state' => 'KERRY
'),
            array('id' => '259', 'pharmacy_name' => 'Brendan Loftus Pharmacy Ltd', 'address' => 'Market Square', 'town' => 'Bunclody', 'state' => 'WEXFORD
'),
            array('id' => '260', 'pharmacy_name' => 'Lohan\'s Pharmacy', 'address' => '60 Prospect Hill', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '261', 'pharmacy_name' => 'Summerhill Pharmacy', 'address' => 'Trim Road', 'town' => 'Summerhill', 'state' => 'MEATH
'),
            array('id' => '262', 'pharmacy_name' => 'Horgan\'s Pharmacy', 'address' => '6 Barrack Street', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '263', 'pharmacy_name' => 'Life Pharmacy Balla ', 'address' => 'Main Street', 'town' => 'Balla', 'state' => 'MAYO
'),
            array('id' => '264', 'pharmacy_name' => 'McAnena\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Ballaghaderreen', 'state' => 'ROSCOMMON
'),
            array('id' => '265', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Dundalk Shopping Centre', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '266', 'pharmacy_name' => 'Flynn\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Falcarragh', 'state' => 'DONEGAL
'),
            array('id' => '267', 'pharmacy_name' => 'McCarthy\'s Pharmacy', 'address' => '35 Main Street', 'town' => 'Charleville', 'state' => 'CORK
'),
            array('id' => '268', 'pharmacy_name' => 'McCarthy\'s Pharmacy (Schull) Ltd', 'address' => 'Main Street', 'town' => 'Schull', 'state' => 'CORK
'),
            array('id' => '269', 'pharmacy_name' => 'Cappamore Pharmacy', 'address' => '2 Moore Street', 'town' => 'Cappamore', 'state' => 'LIMERICK
'),
            array('id' => '270', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => '31 Court Street', 'town' => 'Enniscorthy', 'state' => 'WEXFORD
'),
            array('id' => '271', 'pharmacy_name' => 'McCormack\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Maynooth', 'state' => 'KILDARE
'),
            array('id' => '272', 'pharmacy_name' => 'McCormick\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Milford', 'state' => 'DONEGAL
'),
            array('id' => '273', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '274', 'pharmacy_name' => 'Cunningham\'s Pharmacy', 'address' => '3 Killarney Park', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '275', 'pharmacy_name' => 'Adare Pharmacy', 'address' => 'Main Street', 'town' => 'Adare', 'state' => 'LIMERICK
'),
            array('id' => '276', 'pharmacy_name' => 'The Medical Hall', 'address' => 'Tyrrellspass', 'town' => '', 'state' => 'WESTMEATH
'),
            array('id' => '277', 'pharmacy_name' => 'Daly\'s Pharmacy', 'address' => '17 South Main Street', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '278', 'pharmacy_name' => 'O\'Neill\'s Allcare Pharmacy', 'address' => 'West Main Street', 'town' => 'Cahirsiveen', 'state' => 'KERRY
'),
            array('id' => '279', 'pharmacy_name' => 'Delany\'s Pharmacy Limited', 'address' => '45 Johnstown', 'town' => 'Waterford', 'state' => 'WATERFORD
'),
            array('id' => '280', 'pharmacy_name' => 'Devlin\'s Medical Hall', 'address' => '50 Liberty Square', 'town' => 'Thurles', 'state' => 'TIPPERARY
'),
            array('id' => '281', 'pharmacy_name' => 'Horgan\'s Pharmacy Kanturk', 'address' => 'Strand Street', 'town' => 'Kanturk', 'state' => 'CORK
'),
            array('id' => '282', 'pharmacy_name' => 'O\'Keeffe\'s Pharmacy Limited', 'address' => 'Strand Street', 'town' => 'Dingle', 'state' => 'KERRY
'),
            array('id' => '283', 'pharmacy_name' => 'Dermot O\'Neill Pharmacy (Portlaw) Limited', 'address' => '1 Brown Street', 'town' => 'Portlaw', 'state' => 'WATERFORD
'),
            array('id' => '284', 'pharmacy_name' => 'Foxford Pharmacy Ltd', 'address' => 'Admiral House', 'town' => 'Foxford', 'state' => 'MAYO
'),
            array('id' => '285', 'pharmacy_name' => 'Foster\'s Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Arva', 'state' => 'CAVAN
'),
            array('id' => '286', 'pharmacy_name' => 'Carn Pharmacy Ltd', 'address' => 'Unit 1 Millbrae Business Park', 'town' => 'Carndonagh', 'state' => 'DONEGAL
'),
            array('id' => '287', 'pharmacy_name' => 'Lanes Haven Pharmacy', 'address' => '31-33 Davis Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '288', 'pharmacy_name' => 'Dolan\'s Pharmacy', 'address' => '90 Glaslough Street', 'town' => 'Monaghan Town', 'state' => 'MONAGHAN
'),
            array('id' => '289', 'pharmacy_name' => 'LloydsPharmacy ', 'address' => '5 William Street', 'town' => 'Tullamore', 'state' => 'OFFALY
'),
            array('id' => '290', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Roxboro Shopping Centre', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '291', 'pharmacy_name' => 'O\'Sullivan\'s Allcare Pharmacy', 'address' => 'Main Street', 'town' => 'Rathkeale', 'state' => 'LIMERICK
'),
            array('id' => '292', 'pharmacy_name' => 'Dorrian\'s Pharmacy Ltd.', 'address' => 'The Diamond', 'town' => 'Ballyshannon', 'state' => 'DONEGAL
'),
            array('id' => '293', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Oakville Shopping Centre', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '294', 'pharmacy_name' => 'Dowling\'s Pharmacy', 'address' => 'Ardkeen Shopping Centre Dunmore Road', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '295', 'pharmacy_name' => 'Duane Pharmacy', 'address' => '1 Society Street', 'town' => 'Ballinasloe', 'state' => 'GALWAY
'),
            array('id' => '296', 'pharmacy_name' => 'Treacy\'s Pharmacy', 'address' => 'Market Square', 'town' => 'Castlebar', 'state' => 'MAYO
'),
            array('id' => '297', 'pharmacy_name' => 'Durrow Pharmacy', 'address' => 'Mary Street', 'town' => 'Durrow', 'state' => 'LAOIS
'),
            array('id' => '298', 'pharmacy_name' => 'R.S.Eakin Limited', 'address' => '21 Main Street', 'town' => 'Carrickmacross', 'state' => 'MONAGHAN
'),
            array('id' => '299', 'pharmacy_name' => 'Urlingford Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Urlingford', 'state' => 'KILKENNY
'),
            array('id' => '300', 'pharmacy_name' => 'Cara Pharmacy (Drumshanbo)', 'address' => 'High Street', 'town' => 'Drumshanbo', 'state' => 'LEITRIM
'),
            array('id' => '301', 'pharmacy_name' => 'The Corner Pharmacy', 'address' => 'Main Street', 'town' => 'Longford Town', 'state' => 'LONGFORD
'),
            array('id' => '302', 'pharmacy_name' => 'Elphin Pharmacy', 'address' => 'Main Street', 'town' => 'Elphin', 'state' => 'ROSCOMMON
'),
            array('id' => '303', 'pharmacy_name' => 'MacManus Pharmacy', 'address' => 'Main Street', 'town' => 'Belturbet', 'state' => 'CAVAN
'),
            array('id' => '304', 'pharmacy_name' => 'Haven Pharmacy Fahey\'s', 'address' => 'Patrick Street Dublin 12', 'town' => 'Tullamore', 'state' => 'OFFALY
'),
            array('id' => '305', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Mullingar Shopping Centre', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '306', 'pharmacy_name' => 'Falvey\'s Pharmacy Limited', 'address' => 'Unit A Douglas Village S. C. Douglas', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '307', 'pharmacy_name' => 'Falvey\'s Pharmacy', 'address' => '17 Bridge Street', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '308', 'pharmacy_name' => 'Farrell\'s Pharmacy ', 'address' => '16 Templeshannon', 'town' => 'Enniscorthy', 'state' => 'WEXFORD
'),
            array('id' => '309', 'pharmacy_name' => 'Feely\'s Pharmacy', 'address' => 'Dublin Road', 'town' => 'Tuam', 'state' => 'GALWAY
'),
            array('id' => '310', 'pharmacy_name' => 'Fehily Chemists', 'address' => '28 South Main Street', 'town' => 'Wexford Town', 'state' => 'WEXFORD
'),
            array('id' => '311', 'pharmacy_name' => 'Patrick Fitzgibbon Pharmacy Limited', 'address' => '34 Lower Cork Street', 'town' => 'Mitchelstown', 'state' => 'CORK
'),
            array('id' => '312', 'pharmacy_name' => 'Fitzmaurice\'s Pharmacy', 'address' => '1c Quinsboro Road', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '313', 'pharmacy_name' => 'Flanagan\'s Pharmacy', 'address' => '92 Main Street', 'town' => 'Headford', 'state' => 'GALWAY
'),
            array('id' => '314', 'pharmacy_name' => 'Flynn\'s Pharmacy Limited', 'address' => '15 Grattan Square', 'town' => 'Dungarvan', 'state' => 'WATERFORD
'),
            array('id' => '315', 'pharmacy_name' => 'Flynn\'s Pharmacy', 'address' => 'The Square', 'town' => 'Claremorris', 'state' => 'MAYO
'),
            array('id' => '316', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy ', 'address' => '133 O\'Connell Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '317', 'pharmacy_name' => 'Morriseys Medical Hall Limited', 'address' => '66 Tullow Street', 'town' => 'Carlow', 'state' => 'CARLOW
'),
            array('id' => '318', 'pharmacy_name' => 'Superpharm', 'address' => '78 West Street', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '319', 'pharmacy_name' => 'Fortune\'s Pharmacy', 'address' => '82 North Main Street', 'town' => 'Wexford Town', 'state' => 'WEXFORD
'),
            array('id' => '320', 'pharmacy_name' => 'French\'s Pharmacy', 'address' => '13 North Street', 'town' => 'New Ross', 'state' => 'WEXFORD
'),
            array('id' => '321', 'pharmacy_name' => 'Gallagher\'s Pharmacy', 'address' => '29 Barronstrand Street', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '322', 'pharmacy_name' => 'Gweedore Pharmacy', 'address' => 'Bunbeg', 'town' => '', 'state' => 'DONEGAL
'),
            array('id' => '323', 'pharmacy_name' => 'Barry Griffin Pharmacy', 'address' => 'Supervalu Shopping Centre', 'town' => 'Tramore', 'state' => 'WATERFORD
'),
            array('id' => '324', 'pharmacy_name' => 'Gallwey\'s Pharmacy', 'address' => '49 Pearse Street', 'town' => 'Clonakilty', 'state' => 'CORK
'),
            array('id' => '325', 'pharmacy_name' => 'Scannell\'s Medical Hall', 'address' => '16 South Main Street', 'town' => 'Bandon', 'state' => 'CORK
'),
            array('id' => '326', 'pharmacy_name' => 'Gannon\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Hospital', 'state' => 'LIMERICK
'),
            array('id' => '327', 'pharmacy_name' => 'Garahy\'s Pharmacy', 'address' => '6 Slaney Street', 'town' => 'Enniscorthy', 'state' => 'WEXFORD
'),
            array('id' => '328', 'pharmacy_name' => 'Garvey\'s Pharmacy Limited', 'address' => 'Irish House', 'town' => 'Glenamaddy', 'state' => 'GALWAY
'),
            array('id' => '329', 'pharmacy_name' => 'Manor Chemists', 'address' => 'Main Street', 'town' => 'Manorhamilton', 'state' => 'LEITRIM
'),
            array('id' => '330', 'pharmacy_name' => 'Flaherty\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Oughterard', 'state' => 'GALWAY
'),
            array('id' => '331', 'pharmacy_name' => 'H. Gibbs & Co. Ltd', 'address' => '15 Midleton Street', 'town' => 'Cobh', 'state' => 'CORK
'),
            array('id' => '332', 'pharmacy_name' => 'Gilberts Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Manorhamilton', 'state' => 'LEITRIM
'),
            array('id' => '333', 'pharmacy_name' => 'Haven Pharmacy Gildea\'s', 'address' => 'Main Street', 'town' => 'Kinnegad', 'state' => 'WESTMEATH
'),
            array('id' => '334', 'pharmacy_name' => 'Gilmartin\'s Pharmacy Limited', 'address' => 'Bridge Street', 'town' => 'Gort', 'state' => 'GALWAY
'),
            array('id' => '335', 'pharmacy_name' => 'Tinahely Pharmacy', 'address' => 'Dwyer Square', 'town' => 'Tinehely', 'state' => 'WICKLOW
'),
            array('id' => '336', 'pharmacy_name' => 'Mulholland\'s Pharmacy Limited', 'address' => 'O\'Connell Street', 'town' => 'Birr', 'state' => 'OFFALY
'),
            array('id' => '337', 'pharmacy_name' => 'Kilcoole Pharmacy Limited', 'address' => '23 Main Street', 'town' => 'Kilcoole', 'state' => 'WICKLOW
'),
            array('id' => '338', 'pharmacy_name' => 'Golden\'s Pharmacy', 'address' => 'Bridge Street', 'town' => 'Westport', 'state' => 'MAYO
'),
            array('id' => '339', 'pharmacy_name' => 'Gormley\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Ballyjamesduff', 'state' => 'CAVAN
'),
            array('id' => '340', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => '16 South Street', 'town' => 'New Ross', 'state' => 'WEXFORD
'),
            array('id' => '341', 'pharmacy_name' => 'Grant\'s Pharmacy Wexford', 'address' => 'Unit 4b St. Aidan\'s Shopping Centre', 'town' => 'Wexford Town', 'state' => 'WEXFORD
'),
            array('id' => '342', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Tesco Shopping Centre', 'town' => 'Greystones', 'state' => 'WICKLOW
'),
            array('id' => '343', 'pharmacy_name' => 'Tullow Pharmacy', 'address' => 'The Square', 'town' => 'Tullow', 'state' => 'CARLOW
'),
            array('id' => '344', 'pharmacy_name' => 'Hackett\'s Chemists ', 'address' => 'The Square', 'town' => 'Newport', 'state' => 'TIPPERARY
'),
            array('id' => '345', 'pharmacy_name' => 'A.J. Hallahan Limited', 'address' => '38-39 Grattan Square', 'town' => 'Dungarvan', 'state' => 'WATERFORD
'),
            array('id' => '346', 'pharmacy_name' => 'Hanly\'s Pharmacy', 'address' => '65 South Street', 'town' => 'New Ross', 'state' => 'WEXFORD
'),
            array('id' => '347', 'pharmacy_name' => 'Ray Walsh Pharmacy', 'address' => '9 Pearse Street', 'town' => 'Nenagh', 'state' => 'TIPPERARY
'),
            array('id' => '348', 'pharmacy_name' => 'Harnett\'s Pharmacy', 'address' => '41 The Square', 'town' => 'Listowel', 'state' => 'KERRY
'),
            array('id' => '349', 'pharmacy_name' => 'D & M Harrington', 'address' => '1 Ashe Street', 'town' => 'Clonakilty', 'state' => 'CORK
'),
            array('id' => '350', 'pharmacy_name' => 'D & M Harrington', 'address' => 'Mill Street Timoleague', 'town' => 'Bandon', 'state' => 'CORK
'),
            array('id' => '351', 'pharmacy_name' => 'The Medical Hall', 'address' => 'The Square', 'town' => 'Ballyragget', 'state' => 'KILKENNY
'),
            array('id' => '352', 'pharmacy_name' => 'Hassett\'s Allcare Pharmacy', 'address' => '9/11 North Main Street', 'town' => 'Wexford Town', 'state' => 'WEXFORD
'),
            array('id' => '353', 'pharmacy_name' => 'Deasy\'s Pharmacy ', 'address' => '2 South Main Street', 'town' => 'Bandon', 'state' => 'CORK
'),
            array('id' => '354', 'pharmacy_name' => 'Hayes Allcare Pharmacy', 'address' => 'Barrack Street', 'town' => 'Castlerea', 'state' => 'ROSCOMMON
'),
            array('id' => '355', 'pharmacy_name' => 'Tulla Pharmacy Limited', 'address' => 'Main Street Tulla', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '356', 'pharmacy_name' => 'Boots', 'address' => '37-39 Wilton Shopping Centre Wilton', 'town' => '', 'state' => 'CORK
'),
            array('id' => '357', 'pharmacy_name' => 'Headfort Medical Hall', 'address' => 'Church Street', 'town' => 'Kells', 'state' => 'MEATH
'),
            array('id' => '358', 'pharmacy_name' => 'Kissane\'s Pharmacy', 'address' => 'Lower Main Street', 'town' => 'Graiguenamanagh', 'state' => 'KILKENNY
'),
            array('id' => '359', 'pharmacy_name' => 'Heffernan Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Dundrum', 'state' => 'TIPPERARY
'),
            array('id' => '360', 'pharmacy_name' => 'Hely\'s Pharmacy ', 'address' => 'Main Street', 'town' => 'Cappoquin', 'state' => 'WATERFORD
'),
            array('id' => '361', 'pharmacy_name' => 'Heneghan\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Kiltimagh', 'state' => 'MAYO
'),
            array('id' => '362', 'pharmacy_name' => 'Hennigan\'s Pharmacy', 'address' => 'Teeling Street', 'town' => 'Ballina', 'state' => 'MAYO
'),
            array('id' => '363', 'pharmacy_name' => 'Moughan\'s Pharmacy', 'address' => 'Cookes Corner 66 Newcastle Road', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '364', 'pharmacy_name' => 'Herlihy\'s Chemist Limited', 'address' => 'Crushrod Avenue', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '365', 'pharmacy_name' => 'Norman Brookes Pharmacy', 'address' => '29 South Main Street', 'town' => 'Bandon', 'state' => 'CORK
'),
            array('id' => '366', 'pharmacy_name' => 'Coyles Pharmacy (Castleblayney) Limited', 'address' => 'Main Street', 'town' => 'Castleblayney', 'state' => 'MONAGHAN
'),
            array('id' => '367', 'pharmacy_name' => 'Hickeys Pharmacy', 'address' => '10 Liberty Square', 'town' => 'Thurles', 'state' => 'TIPPERARY
'),
            array('id' => '368', 'pharmacy_name' => 'C. B. Higgins Ltd', 'address' => 'Teeling Street', 'town' => 'Sligo', 'state' => 'SLIGO
'),
            array('id' => '369', 'pharmacy_name' => 'Cara Pharmacy', 'address' => 'Main Street', 'town' => 'Bailieborough', 'state' => 'CAVAN
'),
            array('id' => '370', 'pharmacy_name' => 'High Cross Pharmacy Limited', 'address' => 'High Street', 'town' => 'Tuam', 'state' => 'GALWAY
'),
            array('id' => '371', 'pharmacy_name' => 'Sean Hillery (Pharmacists) Limited', 'address' => '32/33 Skycourt Shopping Centre', 'town' => 'Shannon', 'state' => 'CLARE
'),
            array('id' => '372', 'pharmacy_name' => 'Kirwans Pharmacy', 'address' => 'Main Street', 'town' => 'Kilmacthomas', 'state' => 'WATERFORD
'),
            array('id' => '373', 'pharmacy_name' => 'Elizabeth Murray Limited', 'address' => '41 Grattan Square', 'town' => 'Dungarvan', 'state' => 'WATERFORD
'),
            array('id' => '374', 'pharmacy_name' => 'Boots', 'address' => 'Main Street', 'town' => 'Tramore', 'state' => 'WATERFORD
'),
            array('id' => '375', 'pharmacy_name' => 'Hogan\'s Pharmacy (Limerick) Limited', 'address' => '46 Upper William Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '376', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '1 Main Street', 'town' => 'Wicklow Town', 'state' => 'WICKLOW
'),
            array('id' => '377', 'pharmacy_name' => 'Holly\'s Pharmacy', 'address' => '23 Abbey Street', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '378', 'pharmacy_name' => 'Enda Horan Ltd', 'address' => '1 Castle Street', 'town' => 'Sligo Town', 'state' => 'SLIGO
'),
            array('id' => '379', 'pharmacy_name' => 'Ballymote Pharmacy', 'address' => 'Lord Edward Street', 'town' => 'Ballymote', 'state' => 'SLIGO
'),
            array('id' => '380', 'pharmacy_name' => 'Hughes Pharmacy', 'address' => '90-91 Main Street', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '381', 'pharmacy_name' => 'O\'Neill\'s Pharmacy', 'address' => '3 Abbeycourt', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '382', 'pharmacy_name' => 'Jameson\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Bailieborough', 'state' => 'CAVAN
'),
            array('id' => '383', 'pharmacy_name' => 'Gary Johnson Pharmacist Ltd', 'address' => 'Victoria Cross', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '384', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => '68 O\'Connell Street', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '385', 'pharmacy_name' => 'Joyce\'s Pharmacy', 'address' => '40 Main Street', 'town' => 'Mallow', 'state' => 'CORK
'),
            array('id' => '386', 'pharmacy_name' => 'Your Local Pharmacy', 'address' => 'Main Street', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '387', 'pharmacy_name' => 'Kelly\'s Pharmacy', 'address' => 'Slaney Place', 'town' => 'Enniscorthy', 'state' => 'WEXFORD
'),
            array('id' => '388', 'pharmacy_name' => 'Pillbox Pharmacy', 'address' => 'Main Street', 'town' => 'Ballyshannon', 'state' => 'DONEGAL
'),
            array('id' => '389', 'pharmacy_name' => 'Kelly\'s Pharmacy (Dungarvan) Limited', 'address' => 'High Street', 'town' => 'Dungarvan', 'state' => 'WATERFORD
'),
            array('id' => '390', 'pharmacy_name' => 'J & M Healy Ltd', 'address' => '1 Market Street', 'town' => 'Thomastown', 'state' => 'KILKENNY
'),
            array('id' => '391', 'pharmacy_name' => 'O\'Loughlin\'s Pharmacy', 'address' => '29 Main Street', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '392', 'pharmacy_name' => 'Kennedy\'s Pharmacy Limited', 'address' => '35 Main Street', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '393', 'pharmacy_name' => 'O\'Connell\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Borrisoleigh', 'state' => 'TIPPERARY
'),
            array('id' => '394', 'pharmacy_name' => 'Kennedy\'s Pharmacy', 'address' => '78 Main Street', 'town' => 'Cashel', 'state' => 'TIPPERARY
'),
            array('id' => '395', 'pharmacy_name' => 'Haven Pharmacy Kennellys ', 'address' => '6 Castle Street', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '396', 'pharmacy_name' => 'Kilgarriff\'s Chemists Limited', 'address' => 'Vicar Street', 'town' => 'Tuam', 'state' => 'GALWAY
'),
            array('id' => '397', 'pharmacy_name' => 'Killian\'s CarePlus Pharmacy ', 'address' => '55 Main Street', 'town' => 'Loughrea', 'state' => 'GALWAY
'),
            array('id' => '398', 'pharmacy_name' => 'Rosscarbery Pharmacy', 'address' => 'West Square', 'town' => 'Rosscarbery', 'state' => 'CORK
'),
            array('id' => '399', 'pharmacy_name' => 'The Medical Hall Limited', 'address' => '56 J.K.L. Street', 'town' => 'Edenderry', 'state' => 'OFFALY
'),
            array('id' => '400', 'pharmacy_name' => 'Kirby\'s Pharmacy Ltd', 'address' => '3 Main Street', 'town' => 'Tipperary', 'state' => 'TIPPERARY
'),
            array('id' => '401', 'pharmacy_name' => 'Kissane\'s Pharmacy', 'address' => '52 Main Street', 'town' => 'Tipperary', 'state' => 'TIPPERARY
'),
            array('id' => '402', 'pharmacy_name' => 'Kissane\'s Pharmacy', 'address' => 'Upper Main Street', 'town' => 'Graiguenamanagh', 'state' => 'KILKENNY
'),
            array('id' => '403', 'pharmacy_name' => 'McFadden\'s Pharmacy', 'address' => 'Letterkenny Shopping Centre', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '404', 'pharmacy_name' => 'P.J. Lavelle Chemist Ltd', 'address' => 'Main Street', 'town' => 'Belmullet', 'state' => 'MAYO
'),
            array('id' => '405', 'pharmacy_name' => 'Lawlors Pharmacy', 'address' => '24 Quinsboro Road', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '406', 'pharmacy_name' => 'Cara Pharmacy Bundoran', 'address' => 'Main Street', 'town' => 'Bundoran', 'state' => 'DONEGAL
'),
            array('id' => '407', 'pharmacy_name' => 'Doyle\'s Pharmacy', 'address' => '59 Leinster Street', 'town' => 'Athy', 'state' => 'KILDARE
'),
            array('id' => '408', 'pharmacy_name' => 'McElwee Pharmacy', 'address' => 'O\'Connell Square', 'town' => 'Mountmellick', 'state' => 'LAOIS
'),
            array('id' => '409', 'pharmacy_name' => 'McElwee Pharmacy Ltd', 'address' => '17 Main Street', 'town' => 'Dungloe', 'state' => 'DONEGAL
'),
            array('id' => '410', 'pharmacy_name' => 'O\'Brien\'s Pharmacy', 'address' => '35 Oliver Plunkett Street', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '411', 'pharmacy_name' => 'McEvoy\'s Medical Hall Limited', 'address' => 'Main Street', 'town' => 'Granard', 'state' => 'LONGFORD
'),
            array('id' => '412', 'pharmacy_name' => 'B.F. & M. McGirr (Carnew) Limited', 'address' => 'Main Street', 'town' => 'Carnew', 'state' => 'WICKLOW
'),
            array('id' => '413', 'pharmacy_name' => 'Donal McGoey Pharmacy Ltd', 'address' => '66 Market Street', 'town' => 'Ardee', 'state' => 'LOUTH
'),
            array('id' => '414', 'pharmacy_name' => 'Mullins Pharmacy', 'address' => '216 Upper Salthill', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '415', 'pharmacy_name' => 'The Valley Pharmacy', 'address' => 'Shopping Centre', 'town' => 'Ballybofey', 'state' => 'DONEGAL
'),
            array('id' => '416', 'pharmacy_name' => 'McGorisks Pharmacy', 'address' => 'The Crescent Ballymahon Road', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '417', 'pharmacy_name' => 'McGrath\'s Pharmacy', 'address' => 'The Square', 'town' => 'Cappawhite', 'state' => 'TIPPERARY
'),
            array('id' => '418', 'pharmacy_name' => 'McGrotty\'s totalhealth Pharmacy', 'address' => 'Main Street', 'town' => 'Ennistymon', 'state' => 'CLARE
'),
            array('id' => '419', 'pharmacy_name' => 'McGuinness Pharmacy Limited', 'address' => '14 Park Street', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '420', 'pharmacy_name' => 'McGuinness totalhealth Pharmacy', 'address' => 'Main Street', 'town' => 'Roscommon', 'state' => 'ROSCOMMON
'),
            array('id' => '421', 'pharmacy_name' => 'John F. Mc Guire & Co. Limited', 'address' => '6 Church Street', 'town' => 'Listowel', 'state' => 'KERRY
'),
            array('id' => '422', 'pharmacy_name' => 'Enniscrone Pharmacy', 'address' => 'Main Street', 'town' => 'Enniscrone', 'state' => 'SLIGO
'),
            array('id' => '423', 'pharmacy_name' => 'McHugh\'s Chemists Limited', 'address' => 'The Square', 'town' => 'Kildare Town', 'state' => 'KILDARE
'),
            array('id' => '424', 'pharmacy_name' => 'McHugh\'s Allcare Pharmacy', 'address' => '39 Duke Street', 'town' => 'Athy', 'state' => 'KILDARE
'),
            array('id' => '425', 'pharmacy_name' => 'Kevin Kelly Chemists Limited', 'address' => 'Unit 2 Hanover Plaza Kennedy Avenue', 'town' => 'Carlow Town', 'state' => 'CARLOW
'),
            array('id' => '426', 'pharmacy_name' => 'McKane\'s Pharmacy', 'address' => 'O\'Rahilly Street', 'town' => 'Ballina', 'state' => 'MAYO
'),
            array('id' => '427', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => '7 Watergate Street', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '428', 'pharmacy_name' => 'Castledermot Medical Hall', 'address' => 'Main Street Castledermot', 'town' => '', 'state' => 'KILDARE
'),
            array('id' => '429', 'pharmacy_name' => 'Ballymahon Pharmacy', 'address' => 'Main Street', 'town' => 'Ballymahon', 'state' => 'LONGFORD
'),
            array('id' => '430', 'pharmacy_name' => 'McNeill\'s Pharmacy', 'address' => '51 The Diamond', 'town' => 'Carndonagh', 'state' => 'DONEGAL
'),
            array('id' => '431', 'pharmacy_name' => 'P& P McMahon Pharmacy Ltd', 'address' => '58 Main Street', 'town' => 'Tipperary Town', 'state' => 'TIPPERARY
'),
            array('id' => '432', 'pharmacy_name' => 'Trim Pharmacy Limited', 'address' => 'Market Street', 'town' => 'Trim', 'state' => 'MEATH
'),
            array('id' => '433', 'pharmacy_name' => 'Ward Pharmacy', 'address' => 'Pearse Street', 'town' => 'Ballina', 'state' => 'MAYO
'),
            array('id' => '434', 'pharmacy_name' => 'Healthwise Pharmacy', 'address' => 'Bridge Street', 'town' => 'Lifford', 'state' => 'DONEGAL
'),
            array('id' => '435', 'pharmacy_name' => 'Madden\'s Pharmacy ', 'address' => '3-4 Main Street', 'town' => 'Roscrea', 'state' => 'TIPPERARY
'),
            array('id' => '436', 'pharmacy_name' => 'Magee\'s Pharmacy', 'address' => 'Enniskerry', 'town' => '', 'state' => 'WICKLOW
'),
            array('id' => '437', 'pharmacy_name' => 'McDaid\'s Pharmacy (Clones)', 'address' => 'Fermanagh Street', 'town' => 'Clones', 'state' => 'MONAGHAN
'),
            array('id' => '438', 'pharmacy_name' => 'Magee\'s Pharmacy', 'address' => '27 Upper Main Street', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '439', 'pharmacy_name' => 'Toner\'s Pharmacy', 'address' => '15 Main Street', 'town' => 'Ballyshannon', 'state' => 'DONEGAL
'),
            array('id' => '440', 'pharmacy_name' => 'Maher\'s Pharmacy', 'address' => '7 O\'Connell Street', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '441', 'pharmacy_name' => 'Mahony\'s Pharmacy', 'address' => '23 High Street', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '442', 'pharmacy_name' => 'Costello\'s Pharmacy', 'address' => 'Russell Street', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '443', 'pharmacy_name' => 'D. V. Marron & Co. Limited', 'address' => 'Main Street', 'town' => 'Clane', 'state' => 'KILDARE
'),
            array('id' => '444', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Dunleer', 'state' => 'LOUTH
'),
            array('id' => '445', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => 'Market Street', 'town' => 'Ardee', 'state' => 'LOUTH
'),
            array('id' => '446', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => 'Boyne Shopping Centre', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '447', 'pharmacy_name' => 'Canning\'s Pharmacy Ltd', 'address' => 'Ballymany Shopping Centre', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '448', 'pharmacy_name' => 'Haven Pharmacy Lannens', 'address' => '10 New Street', 'town' => 'Carrick-On-Suir', 'state' => 'TIPPERARY
'),
            array('id' => '449', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Our Lady Of Lourdes Hospital"', 'town' => '', 'state' => 'Drogheda'),
            array('id' => '450', 'pharmacy_name' => 'Tedders Medical Hall Limited', 'address' => '70 J.K.L. Street', 'town' => 'Edenderry', 'state' => 'OFFALY
'),
            array('id' => '451', 'pharmacy_name' => 'Holland\'s Pharmacy', 'address' => 'Templehill', 'town' => 'Lower Ballinlough Road', 'state' => 'CORK
'),
            array('id' => '452', 'pharmacy_name' => 'Templemore Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Templemore', 'state' => 'TIPPERARY
'),
            array('id' => '453', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => '10-11 West Street', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '454', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Market Square', 'town' => 'Bunclody', 'state' => 'WEXFORD
'),
            array('id' => '455', 'pharmacy_name' => 'Tierneys Pharmacy', 'address' => '43 Lower Main Street', 'town' => 'Buncrana', 'state' => 'DONEGAL
'),
            array('id' => '456', 'pharmacy_name' => 'O\'Donovan\'s Pharmacy', 'address' => 'Harbour Street', 'town' => 'Tullamore', 'state' => 'OFFALY
'),
            array('id' => '457', 'pharmacy_name' => 'Mary Mellett Ltd', 'address' => 'T/A The Medical Hall', 'town' => 'Ballygar', 'state' => 'GALWAY
'),
            array('id' => '458', 'pharmacy_name' => 'Minihan\'s Chemist', 'address' => '108 Oliver Plunkett Street', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '459', 'pharmacy_name' => 'Cogaslann Agatha', 'address' => 'Unit 1 Cearnog And Aoibhnis', 'town' => 'Carraroe', 'state' => 'GALWAY
'),
            array('id' => '460', 'pharmacy_name' => 'Mockler\'s Pharmacy', 'address' => 'Patrick Street', 'town' => 'Templemore', 'state' => 'TIPPERARY
'),
            array('id' => '461', 'pharmacy_name' => 'Mockler\'s Pharmacy Limited', 'address' => '69 Liberty Square', 'town' => 'Thurles', 'state' => 'TIPPERARY
'),
            array('id' => '462', 'pharmacy_name' => 'Power\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Kilfinane', 'state' => 'LIMERICK
'),
            array('id' => '463', 'pharmacy_name' => 'Killenaule Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Killenaule', 'state' => 'TIPPERARY
'),
            array('id' => '464', 'pharmacy_name' => 'Moran\'s Pharmacy (Clifden) Limited', 'address' => 'Main Street', 'town' => 'Clifden', 'state' => 'GALWAY
'),
            array('id' => '465', 'pharmacy_name' => 'Morrison\'s Pharmacy', 'address' => 'Church Street', 'town' => 'Cahir', 'state' => 'TIPPERARY
'),
            array('id' => '466', 'pharmacy_name' => 'O\'Sullivan Mullany Pharmacy Limited', 'address' => 'Market Square', 'town' => 'Portarlington', 'state' => 'LAOIS
'),
            array('id' => '467', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => '40/41 Barronstrand Street', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '468', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => 'Rockshire Road Ferrybank', 'town' => 'Waterford', 'state' => 'WATERFORD
'),
            array('id' => '469', 'pharmacy_name' => 'Cara Pharmacy', 'address' => 'Wine Street', 'town' => 'Sligo', 'state' => 'SLIGO
'),
            array('id' => '470', 'pharmacy_name' => 'Weir\'s Pharmacy', 'address' => 'Market Square', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '471', 'pharmacy_name' => 'Mulvihill Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Killorglin', 'state' => 'KERRY
'),
            array('id' => '472', 'pharmacy_name' => 'Morgan\'s Medical Hall ', 'address' => 'The Square', 'town' => 'Tullow', 'state' => 'CARLOW
'),
            array('id' => '473', 'pharmacy_name' => 'Murphy\'s Pharmacy', 'address' => '129 North Main Street', 'town' => 'Youghal', 'state' => 'CORK
'),
            array('id' => '474', 'pharmacy_name' => 'O\'Connor\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Bruff', 'state' => 'LIMERICK
'),
            array('id' => '475', 'pharmacy_name' => 'Magee\'s Pharmacy', 'address' => '15 Earl Street', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '476', 'pharmacy_name' => 'Matt Murphy\'s Pharmacy', 'address' => '2 Main Street', 'town' => 'Macroom', 'state' => 'CORK
'),
            array('id' => '477', 'pharmacy_name' => 'The Foyle Pharmacy', 'address' => 'Market Square', 'town' => 'Moville', 'state' => 'DONEGAL
'),
            array('id' => '478', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Medical Hall The Diamond', 'town' => 'Clones', 'state' => 'MONAGHAN
'),
            array('id' => '479', 'pharmacy_name' => 'Nolan\'s Pharmacy Limited', 'address' => 'Units 3 - 4 Navan Town Centre', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '480', 'pharmacy_name' => 'Normoyle\'s Allcare Pharmacy', 'address' => '47 O\'Connell Street', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '481', 'pharmacy_name' => 'Mary Shinnick - The North Gate Pharmacy', 'address' => '12 North Main Street', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '482', 'pharmacy_name' => 'Hospital Allcare Pharmacy', 'address' => 'Main Street', 'town' => 'Hospital', 'state' => 'LIMERICK
'),
            array('id' => '483', 'pharmacy_name' => 'Deasy\'s Pharmacy ', 'address' => '98/99 Shandon Street', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '484', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'The Square', 'town' => 'Claremorris', 'state' => 'MAYO
'),
            array('id' => '485', 'pharmacy_name' => 'Haven Pharmacy Davey\'s', 'address' => 'Ballyhaunis Road', 'town' => 'Claremorris', 'state' => 'MAYO
'),
            array('id' => '486', 'pharmacy_name' => 'Cloyne Pharmacy', 'address' => 'The Square', 'town' => 'Cloyne', 'state' => 'CORK
'),
            array('id' => '487', 'pharmacy_name' => 'Cleary\'s Pharmacy', 'address' => '8 Main Street', 'town' => 'Skibbereen', 'state' => 'CORK
'),
            array('id' => '488', 'pharmacy_name' => 'Aughrim Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Aughrim', 'state' => 'WICKLOW
'),
            array('id' => '489', 'pharmacy_name' => 'Adrian Dunne Pharmacy', 'address' => 'Upper Main Street', 'town' => 'Portarlington', 'state' => 'LAOIS
'),
            array('id' => '490', 'pharmacy_name' => 'Horgan\'s Pharmacy', 'address' => '33 - 34 Main Street', 'town' => 'Skibbereen', 'state' => 'CORK
'),
            array('id' => '491', 'pharmacy_name' => 'O\'Carroll\'s Allcare Pharmacy Tralee', 'address' => '106 Rock Street', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '492', 'pharmacy_name' => 'Moloney\'s Pharmacy', 'address' => 'Emmet Place', 'town' => 'Kinsale', 'state' => 'CORK
'),
            array('id' => '493', 'pharmacy_name' => 'Haven Pharmacy O\'Connell\'s ', 'address' => '4 Rose Inn Street', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '494', 'pharmacy_name' => 'Waterville Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Waterville', 'state' => 'KERRY
'),
            array('id' => '495', 'pharmacy_name' => 'O\'Connell\'s Pharmacy', 'address' => '67 Magazine Road', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '496', 'pharmacy_name' => 'O\'Connell\'s Medical Hall Ltd', 'address' => 'Main Street', 'town' => 'Swinford', 'state' => 'MAYO
'),
            array('id' => '497', 'pharmacy_name' => 'O\'Connor\'s Pharmacy and Opticians Ltd', 'address' => '7 Market Street', 'town' => 'Listowel', 'state' => 'KERRY
'),
            array('id' => '498', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '21 Main Street', 'town' => 'Midleton', 'state' => 'CORK
'),
            array('id' => '499', 'pharmacy_name' => 'Pharmacy First Plus (Douglas)', 'address' => 'Units 2122 & 23 Douglas Village Shopping Centre Douglas', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '500', 'pharmacy_name' => 'O\'Doherty\'s Pharmacy', 'address' => 'Bridge Street', 'town' => 'Milltown', 'state' => 'KERRY
'),
            array('id' => '501', 'pharmacy_name' => 'F. O\'Donnell Limited', 'address' => 'Main Street', 'town' => 'Abbeyleix', 'state' => 'LAOIS
'),
            array('id' => '502', 'pharmacy_name' => 'O\'Donnell\'s Pharmacy Ltd.', 'address' => '42 Main Street', 'town' => 'Dungloe', 'state' => 'DONEGAL
'),
            array('id' => '503', 'pharmacy_name' => 'John O\'Donnell\'s totalhealth Pharmacy ', 'address' => 'Ellison Street', 'town' => 'Castlebar', 'state' => 'MAYO
'),
            array('id' => '504', 'pharmacy_name' => 'O\'Donnell\'s totalhealth Pharmacy', 'address' => 'Bridge Street', 'town' => 'Westport', 'state' => 'MAYO
'),
            array('id' => '505', 'pharmacy_name' => 'O\'Donnell\'s totalhealth Pharmacy', 'address' => 'The Square', 'town' => 'Charlestown', 'state' => 'MAYO
'),
            array('id' => '506', 'pharmacy_name' => 'Tom Murray Pharmacy Ltd', 'address' => 'The Mall', 'town' => 'Ramelton', 'state' => 'DONEGAL
'),
            array('id' => '507', 'pharmacy_name' => 'O\'Donnell & Mernagh Limited', 'address' => 'Main Street0', 'town' => 'Taghmon', 'state' => 'WEXFORD
'),
            array('id' => '508', 'pharmacy_name' => 'Doneraile Pharmacy', 'address' => 'Main Street', 'town' => 'Doneraile', 'state' => 'CORK
'),
            array('id' => '509', 'pharmacy_name' => 'P. O\'Donoghue (Killarney) Limited', 'address' => 'The Medical Hall Main St', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '510', 'pharmacy_name' => 'Diarmuid O\'Donovan (Pharmacist) Limited', 'address' => '4 Pearse Square', 'town' => 'Ballyphehane', 'state' => 'CORK
'),
            array('id' => '511', 'pharmacy_name' => 'Adams\' Pharmacy', 'address' => '58 Main Street', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '512', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '21 Tullow Street', 'town' => 'Carlow', 'state' => 'CARLOW
'),
            array('id' => '513', 'pharmacy_name' => 'O\'Dwyer\'s Pharmacy', 'address' => '34 Main Street', 'town' => 'Cashel', 'state' => 'TIPPERARY
'),
            array('id' => '514', 'pharmacy_name' => 'O\'Dwyer\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Ennistymon', 'state' => 'CLARE
'),
            array('id' => '515', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Bon Secours Hospital"', 'town' => 'College Road', 'state' => 'Cork'),
            array('id' => '516', 'pharmacy_name' => 'Matt O\'Flaherty Chemists', 'address' => 'Galway Shopping Centre', 'town' => 'Headford Road', 'state' => 'GALWAY
'),
            array('id' => '517', 'pharmacy_name' => 'Matt O\'Flaherty Chemists', 'address' => '16-18 William Street', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '518', 'pharmacy_name' => 'O\'Gorman\'s Pharmacy', 'address' => '52 Gladstone Street', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '519', 'pharmacy_name' => 'O\'Hanlon\'s Pharmacy Ltd', 'address' => '11a Gurranebraher Road', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '520', 'pharmacy_name' => 'McQuaid\'s Pharmacy Limited', 'address' => 'Cogan Street', 'town' => 'Oldcastle', 'state' => 'MEATH
'),
            array('id' => '521', 'pharmacy_name' => 'Ballyduff Pharmacy', 'address' => 'Ballyduff', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '522', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '8 Grand Parade', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '523', 'pharmacy_name' => 'Ballybay Pharmacy', 'address' => '54-55 Main Street', 'town' => 'Ballybay', 'state' => 'MONAGHAN
'),
            array('id' => '524', 'pharmacy_name' => 'Cunningham\'s Pharmacy', 'address' => '28 Shop Street', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '525', 'pharmacy_name' => 'O\'Mahony\'s Pharmacy Limited', 'address' => '', 'town' => 'Ardfert', 'state' => 'KERRY
'),
            array('id' => '526', 'pharmacy_name' => 'McKenna\'s Allcare Pharmacy', 'address' => '38 William Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '527', 'pharmacy_name' => 'O\'Meara\'s totalhealth Pharmacy', 'address' => 'Market Square', 'town' => 'Scariff', 'state' => 'CLARE
'),
            array('id' => '528', 'pharmacy_name' => 'O\'Meara\'s Pharmacy', 'address' => '30 Upper Main Street', 'town' => 'Arklow', 'state' => 'WICKLOW
'),
            array('id' => '529', 'pharmacy_name' => 'Scannell\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Ballineen', 'state' => 'CORK
'),
            array('id' => '530', 'pharmacy_name' => 'McCormack\'s Chemist', 'address' => '51 Upper William Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '531', 'pharmacy_name' => 'Flanagan\'s Pharmacy', 'address' => 'The Square', 'town' => 'Athenry', 'state' => 'GALWAY
'),
            array('id' => '532', 'pharmacy_name' => 'Reilly\'s Pharmacy', 'address' => 'Barrack Street', 'town' => 'Belmullet', 'state' => 'MAYO
'),
            array('id' => '533', 'pharmacy_name' => 'Bagenalstown Pharmacy', 'address' => 'Main Street', 'town' => 'Bagenalstown', 'state' => 'CARLOW
'),
            array('id' => '534', 'pharmacy_name' => 'Byrne\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Kiltimagh', 'state' => 'MAYO
'),
            array('id' => '535', 'pharmacy_name' => 'Cara Pharmacy Ballyconnell', 'address' => 'Main Street.', 'town' => 'Ballyconnell', 'state' => 'CAVAN
'),
            array('id' => '536', 'pharmacy_name' => 'O\'Reilly\'s Pharmacy Limited', 'address' => '18 Gladstone Street', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '537', 'pharmacy_name' => 'O\'Rourke\'s Allcare Pharmacy', 'address' => 'The Shopping Centre Rathangan Road', 'town' => 'Monasterevin', 'state' => 'KILDARE
'),
            array('id' => '538', 'pharmacy_name' => 'O\'Shaughnessy\'s Pharmacy Limited', 'address' => 'Haggard Street', 'town' => 'Trim', 'state' => 'MEATH
'),
            array('id' => '539', 'pharmacy_name' => 'Blackpool Bridge Pharmacy Ltd', 'address' => 'Blackpool Bridge Blackpool', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '540', 'pharmacy_name' => 'Callagy\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Kilcock', 'state' => 'KILDARE
'),
            array('id' => '541', 'pharmacy_name' => 'Dooley\'s Pharmacy', 'address' => 'Pound Street', 'town' => 'Drumcollogher', 'state' => 'LIMERICK
'),
            array('id' => '542', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => 'South Douglas Road', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '543', 'pharmacy_name' => 'O\'Sullivan\'s Allcare Pharmacy Bantry', 'address' => 'New Street', 'town' => 'Bantry', 'state' => 'CORK
'),
            array('id' => '544', 'pharmacy_name' => 'Mulcahy\'s Pharmacy', 'address' => '118 Main Street', 'town' => 'Mallow', 'state' => 'CORK
'),
            array('id' => '545', 'pharmacy_name' => 'James Pettit Pharmacy ', 'address' => 'Main Street', 'town' => 'Charleville', 'state' => 'CORK
'),
            array('id' => '546', 'pharmacy_name' => 'R.T. Phelan Limited', 'address' => '33 Michael Street', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '547', 'pharmacy_name' => 'Plunkett\'s Pharmacy', 'address' => '40-42 Main Street', 'town' => 'Croom', 'state' => 'LIMERICK
'),
            array('id' => '548', 'pharmacy_name' => 'Poplar Pharmacy', 'address' => 'Unit 4 Poplar Square', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '549', 'pharmacy_name' => 'Power\'s Pharmacy', 'address' => 'Church Street', 'town' => 'Kilmihil', 'state' => 'CLARE
'),
            array('id' => '550', 'pharmacy_name' => 'Power\'s Pharmacy', 'address' => '33 Ballybricken', 'town' => 'Waterford', 'state' => 'WATERFORD
'),
            array('id' => '551', 'pharmacy_name' => 'Power\'s Pharmacy', 'address' => 'Ardfinnan', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '552', 'pharmacy_name' => 'Ballybunion Pharmacy', 'address' => 'Supervalu Shopping Centre Main Street', 'town' => 'Ballybunion', 'state' => 'KERRY
'),
            array('id' => '553', 'pharmacy_name' => 'Walsh\'s Pharmacy (Fermoy) Limited', 'address' => '15 Patrick Street', 'town' => 'Fermoy', 'state' => 'CORK
'),
            array('id' => '554', 'pharmacy_name' => 'Passage West Pharmacy', 'address' => 'Strand Street', 'town' => 'Passage West', 'state' => 'CORK
'),
            array('id' => '555', 'pharmacy_name' => 'S. Quinn & Sons Limited', 'address' => 'Pearse Street', 'town' => 'Ballina', 'state' => 'MAYO
'),
            array('id' => '556', 'pharmacy_name' => 'Buttevant Pharmacy', 'address' => 'Main Street', 'town' => 'Buttevant', 'state' => 'CORK
'),
            array('id' => '557', 'pharmacy_name' => 'Carragher\'s Pharmacy Ltd', 'address' => 'Quirkes Medical Hall High Street', 'town' => 'Tullamore', 'state' => 'OFFALY
'),
            array('id' => '558', 'pharmacy_name' => 'O\'Malley\'s Pharmacy', 'address' => 'Dooradoyle', 'town' => '', 'state' => 'LIMERICK
'),
            array('id' => '559', 'pharmacy_name' => 'Riverforest Pharmacy ', 'address' => 'Unit 3 Riverforest Shopping Centre', 'town' => 'Leixlip', 'state' => 'KILDARE
'),
            array('id' => '560', 'pharmacy_name' => 'Pharmacy First Plus (Glanmire)', 'address' => 'Unit 4 Hazelwood Centre', 'town' => 'Glanmire', 'state' => 'CORK
'),
            array('id' => '561', 'pharmacy_name' => 'Roches Pharmacy Ltd', 'address' => 'Blacklion', 'town' => 'Greystones', 'state' => 'WICKLOW
'),
            array('id' => '562', 'pharmacy_name' => 'Blake\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Ballymore Eustace', 'state' => 'KILDARE
'),
            array('id' => '563', 'pharmacy_name' => 'Roche\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Dunlavin', 'state' => 'WICKLOW
'),
            array('id' => '564', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Lower Main Street', 'town' => 'Gorey', 'state' => 'WEXFORD
'),
            array('id' => '565', 'pharmacy_name' => 'Ronaghan\'s Pharmacy Limited', 'address' => '5  The Diamond0', 'town' => 'Monaghan Town', 'state' => 'MONAGHAN
'),
            array('id' => '566', 'pharmacy_name' => 'Ruth\'s Pharmacy', 'address' => 'High Road', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '567', 'pharmacy_name' => 'Ryans Pharmacy', 'address' => '20/21 Pearse Street', 'town' => 'Nenagh', 'state' => 'TIPPERARY
'),
            array('id' => '568', 'pharmacy_name' => 'Life Pharmacy', 'address' => '2 Davis Street', 'town' => 'Tipperary Town', 'state' => 'TIPPERARY
'),
            array('id' => '569', 'pharmacy_name' => 'Ryders Pharmacy', 'address' => 'Main Street', 'town' => 'Ballinrobe', 'state' => 'MAYO
'),
            array('id' => '570', 'pharmacy_name' => 'Ryder\'s Pharmacy Ltd', 'address' => 'Main Street', 'town' => 'Headford', 'state' => 'GALWAY
'),
            array('id' => '571', 'pharmacy_name' => 'Salthill Pharmacy', 'address' => '145 Upper Salthill', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '572', 'pharmacy_name' => 'Killeagh Pharmacy', 'address' => 'Main Street', 'town' => 'Killeagh', 'state' => 'CORK
'),
            array('id' => '573', 'pharmacy_name' => 'McGleenan\'s Pharmacy', 'address' => '2 Church Road', 'town' => 'Greystones', 'state' => 'WICKLOW
'),
            array('id' => '574', 'pharmacy_name' => 'Sewell\'s Pharmacy ', 'address' => '1/2 New Street', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '575', 'pharmacy_name' => 'Haven Pharmacy Shanahan\'s', 'address' => 'Church Street', 'town' => 'Castleisland', 'state' => 'KERRY
'),
            array('id' => '576', 'pharmacy_name' => 'Sheahan\'s Pharmacy', 'address' => '34 Main Street', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '577', 'pharmacy_name' => 'Sheehan\'s Pharmacy', 'address' => 'West End', 'town' => 'Newmarket', 'state' => 'CORK
'),
            array('id' => '578', 'pharmacy_name' => 'Sheehan Chemist', 'address' => 'Bridge Street', 'town' => '"Strokestown', 'state' => '"'),
            array('id' => '579', 'pharmacy_name' => 'Campile Pharmacy', 'address' => 'Campile', 'town' => 'New Ross', 'state' => 'WEXFORD
'),
            array('id' => '580', 'pharmacy_name' => 'Roches Chemist', 'address' => '34 Vevay Road', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '581', 'pharmacy_name' => 'Shine\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Wicklow Town', 'state' => 'WICKLOW
'),
            array('id' => '582', 'pharmacy_name' => 'Skehard Pharmacy', 'address' => 'Skehard Road', 'town' => 'Blackrock', 'state' => 'CORK
'),
            array('id' => '583', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => '8-10 North Main Street', 'town' => 'Wexford Town', 'state' => 'WEXFORD
'),
            array('id' => '584', 'pharmacy_name' => 'C. B. Higgins Ltd', 'address' => 'Market Cross', 'town' => 'Sligo', 'state' => 'SLIGO
'),
            array('id' => '585', 'pharmacy_name' => 'Smyth\'s Pharmacy', 'address' => 'Seatown Place', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '586', 'pharmacy_name' => 'Glin Allcare Pharmacy', 'address' => 'Main Street', 'town' => 'Glin', 'state' => 'LIMERICK
'),
            array('id' => '587', 'pharmacy_name' => 'Stauntons Pharmacy', 'address' => 'Main Street', 'town' => 'Athboy', 'state' => 'MEATH
'),
            array('id' => '588', 'pharmacy_name' => 'Staunton\'s Allcare Pharmacy', 'address' => 'The Square', 'town' => 'Louisburgh', 'state' => 'MAYO
'),
            array('id' => '589', 'pharmacy_name' => 'O\'Brien\'s Pharmacy', 'address' => 'The Square', 'town' => 'Cahir', 'state' => 'TIPPERARY
'),
            array('id' => '590', 'pharmacy_name' => 'Weedle Pharmacy', 'address' => '63 Main Street', 'town' => 'Mallow', 'state' => 'CORK
'),
            array('id' => '591', 'pharmacy_name' => 'Weedle Pharmacy', 'address' => 'Townview Cork Road', 'town' => 'Mallow', 'state' => 'CORK
'),
            array('id' => '592', 'pharmacy_name' => 'Laytown Pharmacy', 'address' => 'Strand Road', 'town' => 'Laytown', 'state' => 'MEATH
'),
            array('id' => '593', 'pharmacy_name' => 'Treacy\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Ballinrobe', 'state' => 'MAYO
'),
            array('id' => '594', 'pharmacy_name' => 'Wallace\'s Pharmacy', 'address' => 'Ballyvolane Shopping Centre Ballyvolane', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '595', 'pharmacy_name' => 'Cobh CarePlus Pharmacy', 'address' => '3 East Beach', 'town' => 'Cobh', 'state' => 'CORK
'),
            array('id' => '596', 'pharmacy_name' => 'Vance & Wilson Chemists', 'address' => '92 Main Street', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '597', 'pharmacy_name' => 'Veale\'s Allcare Pharmacy', 'address' => '59 Main Street', 'town' => 'Cavan', 'state' => 'CAVAN
'),
            array('id' => '598', 'pharmacy_name' => 'Walker\'s Chemist Limited', 'address' => 'Unit 3 Teach Bui Main Street', 'town' => 'Enfield', 'state' => 'MEATH
'),
            array('id' => '599', 'pharmacy_name' => 'Carroll\'s Pharmacy', 'address' => 'Church Street', 'town' => 'Freshford', 'state' => 'KILKENNY
'),
            array('id' => '600', 'pharmacy_name' => 'Irwin\'s Pharmacy', 'address' => '77 Shandon Street', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '601', 'pharmacy_name' => 'Walsh\'s Pharmacy', 'address' => 'Green Street', 'town' => 'Dingle', 'state' => 'KERRY
'),
            array('id' => '602', 'pharmacy_name' => 'Walsh\'s Pharmacy', 'address' => '123 Shandon Street', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '603', 'pharmacy_name' => 'Healy\'s Pharmacy', 'address' => 'Society Street', 'town' => 'Ballinasloe', 'state' => 'GALWAY
'),
            array('id' => '604', 'pharmacy_name' => 'Quinn\'s Chemist (Crossmolina) Ltd', 'address' => 'Bridge Street', 'town' => 'Crossmolina', 'state' => 'MAYO
'),
            array('id' => '605', 'pharmacy_name' => 'James & Vincent Walsh Pharmacy', 'address' => 'Main Street', 'town' => 'Celbridge', 'state' => 'KILDARE
'),
            array('id' => '606', 'pharmacy_name' => 'James & Vincent Walsh Pharmacy ', 'address' => 'Unit 2 Tesco Shopping Centre', 'town' => 'Celbridge', 'state' => 'KILDARE
'),
            array('id' => '607', 'pharmacy_name' => 'Walsh\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Spiddal', 'state' => 'GALWAY
'),
            array('id' => '608', 'pharmacy_name' => 'O\'Donnell\'s totalhealth Pharmacy', 'address' => 'Market Street', 'town' => 'Swinford', 'state' => 'MAYO
'),
            array('id' => '609', 'pharmacy_name' => 'Aidan Walsh Allcare Pharmacy', 'address' => 'The Medical Hall Main Street', 'town' => 'Ferbane', 'state' => 'OFFALY
'),
            array('id' => '610', 'pharmacy_name' => 'Geraghty\'s Pharmacy Ltd', 'address' => 'Main Street', 'town' => 'Crossmolina', 'state' => 'MAYO
'),
            array('id' => '611', 'pharmacy_name' => 'Ward\'s Chemists Limited', 'address' => '5 Market Street', 'town' => 'Monaghan Town', 'state' => 'MONAGHAN
'),
            array('id' => '612', 'pharmacy_name' => 'West Clare Pharmacy', 'address' => 'Main Street', 'town' => 'Miltown Malbay', 'state' => 'CLARE
'),
            array('id' => '613', 'pharmacy_name' => 'Whelans Pharmacy', 'address' => '11 Williamsgate Street', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '614', 'pharmacy_name' => 'Whelehan\'s Pharmacy', 'address' => '38 Pearse Street', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '615', 'pharmacy_name' => 'White\'s Pharmacy Carlow', 'address' => '44 Tullow Street', 'town' => 'Carlow', 'state' => 'CARLOW
'),
            array('id' => '616', 'pharmacy_name' => 'White\'s Pharmacy Limited', 'address' => '5 High Street', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '617', 'pharmacy_name' => 'White\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Castlebellingham', 'state' => 'LOUTH
'),
            array('id' => '618', 'pharmacy_name' => 'Widdess Fitzgibbon Pharmacy Limited', 'address' => '55 Roches Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '619', 'pharmacy_name' => 'Wilson\'s Pharmacy', 'address' => '18 West Beach', 'town' => 'Cobh', 'state' => 'CORK
'),
            array('id' => '620', 'pharmacy_name' => 'Mullingar Pharmacy', 'address' => '49 Oliver Plunkett Street', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '621', 'pharmacy_name' => 'Mulrooney\'s Pharmacy', 'address' => 'The Square', 'town' => 'Mountbellew', 'state' => 'GALWAY
'),
            array('id' => '622', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => '55 Lower O\'Connell Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '623', 'pharmacy_name' => 'Jeffrey\'s Pharmacy Ltd', 'address' => 'Medical Hall Church Street', 'town' => 'Cahirsiveen', 'state' => 'KERRY
'),
            array('id' => '624', 'pharmacy_name' => 'Hartstown Pharmacy', 'address' => 'Unit 2 Hartstown Shopping Centre Dublin 15', 'town' => 'Clonsilla', 'state' => 'DUBLIN
'),
            array('id' => '625', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => 'Unit 3 Supervalu Shopping Centre', 'town' => 'Grange', 'state' => 'CORK
'),
            array('id' => '626', 'pharmacy_name' => 'Duffy\'s Pharmacy', 'address' => 'Unit 13 Tesco Shopping Centre Francis St.', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '627', 'pharmacy_name' => 'Haven Pharmacy Kavanagh\'s', 'address' => 'Units 4-5 The Gables Shopping Centre', 'town' => 'Dunshaughlin', 'state' => 'MEATH
'),
            array('id' => '628', 'pharmacy_name' => 'O\'Connor\'s Allcare Pharmacy', 'address' => 'Crossroads', 'town' => 'Moycullen', 'state' => 'GALWAY
'),
            array('id' => '629', 'pharmacy_name' => 'Rosemary Pharmacy Ltd', 'address' => 'Rosemary Square', 'town' => 'Roscrea', 'state' => 'TIPPERARY
'),
            array('id' => '630', 'pharmacy_name' => 'Central Pharmacy', 'address' => 'Henry Street', 'town' => 'Kilrush', 'state' => 'CLARE
'),
            array('id' => '631', 'pharmacy_name' => 'Kelly\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Miltown Malbay', 'state' => 'CLARE
'),
            array('id' => '632', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Parkway Shopping Centre', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '633', 'pharmacy_name' => 'Cadden\'s Pharmacy ', 'address' => 'Unit 1 Tower S. Centre Tower Road Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '634', 'pharmacy_name' => 'Park Pharmacy (Cabinteely) Ltd', 'address' => 'Unit 2 Park Shopping Centre Dublin 18', 'town' => 'Cabinteely', 'state' => 'DUBLIN
'),
            array('id' => '635', 'pharmacy_name' => 'Blackrock Clinic Pharmacy', 'address' => 'Rock Road', 'town' => 'Blackrock', 'state' => 'DUBLIN
'),
            array('id' => '636', 'pharmacy_name' => 'Adrian Dunne Pharmacy', 'address' => 'Unit 4 Racecourse Shopping Centre Dublin 13', 'town' => 'Baldoyle', 'state' => 'DUBLIN
'),
            array('id' => '637', 'pharmacy_name' => 'Tony Walsh Allcare Pharmacy', 'address' => 'Merrion Shopping Centre Dublin 4', 'town' => 'Merrion Road', 'state' => 'DUBLIN
'),
            array('id' => '638', 'pharmacy_name' => 'Your Local Pharmacy', 'address' => 'Unit 6 Pinewood House Huntstown Road Dublin 15', 'town' => 'Huntstown', 'state' => 'DUBLIN
'),
            array('id' => '639', 'pharmacy_name' => 'Brogan\'s totalhealth Pharmacy ', 'address' => 'Main Street', 'town' => 'Loughrea', 'state' => 'GALWAY
'),
            array('id' => '640', 'pharmacy_name' => 'Sheahan\'s Pharmacy Limited', 'address' => '18 Main Street', 'town' => 'Kenmare', 'state' => 'KERRY
'),
            array('id' => '641', 'pharmacy_name' => 'Flanagans Pharmacy', 'address' => '32 Shop Street', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '642', 'pharmacy_name' => 'Pharmacy Department - Midland Regional Hospital', 'address' => 'Dublin Road', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '643', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '20 St. Agnes Road Dublin 12', 'town' => 'Crumlin Village', 'state' => 'DUBLIN
'),
            array('id' => '644', 'pharmacy_name' => 'Tooles Pharmacy', 'address' => 'Main Street', 'town' => 'Dunshaughlin', 'state' => 'MEATH
'),
            array('id' => '645', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 15 Navan Shopping Centre', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '646', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Mater Private Hospital"', 'town' => 'Pharmacy Department Dublin 7', 'state' => 'Eccles Street'),
            array('id' => '647', 'pharmacy_name' => 'Harringtons Pharmacy', 'address' => 'The Square', 'town' => 'Castlecomer', 'state' => 'KILKENNY
'),
            array('id' => '648', 'pharmacy_name' => 'Flatley\'s Pharmacy', 'address' => 'Pound Street', 'town' => 'Stranorlar', 'state' => 'DONEGAL
'),
            array('id' => '649', 'pharmacy_name' => 'Kilrush Pharmacy', 'address' => 'Frances Street', 'town' => 'Kilrush', 'state' => 'CLARE
'),
            array('id' => '650', 'pharmacy_name' => 'Pat Hogan Pharmacy Limited', 'address' => 'Fr. Griffin Avenue', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '651', 'pharmacy_name' => 'Stack\'s Pharmacy', 'address' => 'Unit 6 Holmpatrick Shopping Centre Shenick Road', 'town' => 'Skerries', 'state' => 'DUBLIN
'),
            array('id' => '652', 'pharmacy_name' => 'James F. O\'Sullivan & Co. Ltd', 'address' => 'Main Street', 'town' => 'Fethard', 'state' => 'TIPPERARY
'),
            array('id' => '653', 'pharmacy_name' => 'Clearwater Allcare Pharmacy', 'address' => 'Unit 6A  Clearwater Shopping Centre Dublin 11', 'town' => 'Finglas', 'state' => 'DUBLIN
'),
            array('id' => '654', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacies', 'address' => '3 O\'Connell Avenue', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '655', 'pharmacy_name' => 'Colleran\'s Pharmacy', 'address' => 'Bridge Street', 'town' => 'Ballyhaunis', 'state' => 'MAYO
'),
            array('id' => '656', 'pharmacy_name' => 'Ballina Pharmacy Limited', 'address' => 'Ballina Shopping Centre', 'town' => 'Ballina', 'state' => 'MAYO
'),
            array('id' => '657', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Newbridge Shopping Centre', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '658', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 13 Fortunestown Lane Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '659', 'pharmacy_name' => 'Laois Pharmacy', 'address' => '1 Dunamaise House', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '660', 'pharmacy_name' => 'Boots', 'address' => '71 -72 Patrick Street', 'town' => '', 'state' => 'CORK
'),
            array('id' => '661', 'pharmacy_name' => 'New Bawn Pharmacy', 'address' => 'Unit 5 St. Dominic\'s Road Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '662', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '282 Lower Rathmines Road Dublin 6', 'town' => 'Rathmines', 'state' => 'DUBLIN
'),
            array('id' => '663', 'pharmacy_name' => 'Greenhills Pharmacy Limited', 'address' => '133 St. Peter\'s Road Dublin 12', 'town' => 'Walkinstown', 'state' => 'DUBLIN
'),
            array('id' => '664', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Unit 3 Main Street Castleknock Shopping Centre Dublin 15', 'town' => 'Castleknock', 'state' => 'DUBLIN
'),
            array('id' => '665', 'pharmacy_name' => 'Goode & Co. (Pharmacy) Limited', 'address' => 'Main Street', 'town' => 'Abbeyfeale', 'state' => 'LIMERICK
'),
            array('id' => '666', 'pharmacy_name' => 'McFadden\'s Pharmacy', 'address' => 'Unit 2 Larkin House Oldtown Road', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '667', 'pharmacy_name' => 'Gannon\'s Pharmacy', 'address' => 'Earl Street', 'town' => 'Longford Town', 'state' => 'LONGFORD
'),
            array('id' => '668', 'pharmacy_name' => 'Park Pharmacy', 'address' => 'Unit 2 Park Shopping Centre Dublin 7', 'town' => 'Prussia Street', 'state' => 'DUBLIN
'),
            array('id' => '669', 'pharmacy_name' => 'Kevin C Carey Chemist MPSI', 'address' => 'Main Street', 'town' => 'Baltinglass', 'state' => 'WICKLOW
'),
            array('id' => '670', 'pharmacy_name' => 'Lynch\'s Pharmacy', 'address' => 'Oliver Plunkett Street', 'town' => 'Oldcastle', 'state' => 'MEATH
'),
            array('id' => '671', 'pharmacy_name' => 'O.D.C. Pharmacy', 'address' => 'Unit 2 Laurel Lodge Shopping Centre Dublin 15', 'town' => 'Castleknock', 'state' => 'DUBLIN
'),
            array('id' => '672', 'pharmacy_name' => 'Kilcohan\'s Pharmacy', 'address' => 'Kilcohan Shopping Centre', 'town' => 'Waterford', 'state' => 'WATERFORD
'),
            array('id' => '673', 'pharmacy_name' => 'Phelan\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Carrigaline', 'state' => 'CORK
'),
            array('id' => '674', 'pharmacy_name' => 'Boghall Pharmacy', 'address' => 'Unit 9 Boghall Shopping Centre Boghall Road', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '675', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => 'South Quay', 'town' => 'Newcastle West', 'state' => 'LIMERICK
'),
            array('id' => '676', 'pharmacy_name' => 'Town Centre Pharmacy', 'address' => 'No.4 Drogheda Town Centre West Street', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '677', 'pharmacy_name' => 'Boyne Grove Pharmacy ', 'address' => 'Unit 5 Ballsgrove Shopping Centre', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '678', 'pharmacy_name' => 'R. Murphy MPSI Ltd', 'address' => '48 North Main Street', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '679', 'pharmacy_name' => 'Foley\'s Life Pharmacy', 'address' => 'Unit 8 Palmerstown S.C. Dublin 20', 'town' => 'Palmerstown', 'state' => 'DUBLIN
'),
            array('id' => '680', 'pharmacy_name' => 'Park Pharmacy', 'address' => '7 Tyrone Rd Lismore Park', 'town' => 'Waterford', 'state' => 'WATERFORD
'),
            array('id' => '681', 'pharmacy_name' => 'Boots', 'address' => 'St Stephen\'s Green Shopping Centre Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '682', 'pharmacy_name' => 'Adrian Dunne Pharmacy', 'address' => 'Market Street', 'town' => 'Trim', 'state' => 'MEATH
'),
            array('id' => '683', 'pharmacy_name' => 'CGH Allcare Pharmacy ', 'address' => 'Unit 1 & 2 Banagher Town Centre', 'town' => 'Banagher', 'state' => 'OFFALY
'),
            array('id' => '684', 'pharmacy_name' => 'Dowling\'s Pharmacy', 'address' => '6 Lower Baggot Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '685', 'pharmacy_name' => 'Cooney\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Moate', 'state' => 'WESTMEATH
'),
            array('id' => '686', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => '6 Post Office Buildings Dublin 1', 'town' => 'Henry Street', 'state' => 'DUBLIN
'),
            array('id' => '687', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. John Of God Hospital Stillorgan"', 'town' => '', 'state' => 'Stillorgan'),
            array('id' => '688', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Frascati Shopping Centre', 'town' => 'Blackrock', 'state' => 'DUBLIN
'),
            array('id' => '689', 'pharmacy_name' => 'The Mall Pharmacy', 'address' => '54 The Mall', 'town' => 'Sligo', 'state' => 'SLIGO
'),
            array('id' => '690', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => 'Unit 5-6 Wilton Shopping Centre', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '691', 'pharmacy_name' => 'Booterstown Pharmacy Limited', 'address' => '87c Booterstown Avenue', 'town' => 'Blackrock', 'state' => 'DUBLIN
'),
            array('id' => '692', 'pharmacy_name' => 'Brennan\'s Life Pharmacy', 'address' => '1 Fairways Mall', 'town' => 'Donabate', 'state' => 'DUBLIN
'),
            array('id' => '693', 'pharmacy_name' => 'Boots', 'address' => 'Merchants Quay Shopping Centre', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '694', 'pharmacy_name' => 'Boots', 'address' => 'Douglas Court Shopping Centre', 'town' => 'Douglas', 'state' => 'CORK
'),
            array('id' => '695', 'pharmacy_name' => 'Kavanagh\'s Pharmacy', 'address' => 'Duffry Hill', 'town' => 'Enniscorthy', 'state' => 'WEXFORD
'),
            array('id' => '696', 'pharmacy_name' => 'Cooney\'s Pharmacy', 'address' => 'Mullingar Road', 'town' => 'Kilbeggan', 'state' => 'WESTMEATH
'),
            array('id' => '697', 'pharmacy_name' => 'Murphy\'s Pharmacy', 'address' => 'Boherbue', 'town' => '', 'state' => 'CORK
'),
            array('id' => '698', 'pharmacy_name' => 'St. Patrick\'s Pharmacy', 'address' => 'Greenfields Shopping Centre', 'town' => 'Maynooth', 'state' => 'KILDARE
'),
            array('id' => '699', 'pharmacy_name' => 'O\'Riordan\'s Pharmacy', 'address' => 'Concolbert Street', 'town' => 'Athea', 'state' => 'LIMERICK
'),
            array('id' => '700', 'pharmacy_name' => 'Mari Mina Pharmacy ', 'address' => 'Main Street', 'town' => 'Lismore', 'state' => 'WATERFORD
'),
            array('id' => '701', 'pharmacy_name' => 'Kinvara Pharmacy Limited', 'address' => 'Unit 2 The Crane Centre', 'town' => 'Kinvara', 'state' => 'GALWAY
'),
            array('id' => '702', 'pharmacy_name' => 'Leahy\'s Pharmacy', 'address' => 'Oakpark', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '703', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Beaumont Hospital"', 'town' => 'Beaumont Road Dublin 9', 'state' => 'Beaumont'),
            array('id' => '704', 'pharmacy_name' => 'Boots', 'address' => 'Level 3 The Square Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '705', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. James\' Hospital"', 'town' => 'James\'s Street Dublin 8', 'state' => ''),
            array('id' => '706', 'pharmacy_name' => 'Little Island Pharmacy Ltd', 'address' => 'Eastgate Village', 'town' => 'Little Island', 'state' => 'CORK
'),
            array('id' => '707', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Naas General Hospital"', 'town' => '', 'state' => 'Naas'),
            array('id' => '708', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' National Maternity Hospital"', 'town' => 'Holles Street Dublin 2', 'state' => ''),
            array('id' => '709', 'pharmacy_name' => 'Pharmacy Department - A. M. N. C. H.', 'address' => ' Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '710', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Carrickmacross', 'state' => 'MONAGHAN
'),
            array('id' => '711', 'pharmacy_name' => 'Emmet Feerick Pharmacy Ltd', 'address' => 'Unit 2 Captains View Captains Hill', 'town' => 'Leixlip', 'state' => 'KILDARE
'),
            array('id' => '712', 'pharmacy_name' => 'Guinness Pharmacy', 'address' => 'Diageo Ireland St. James\'s Gate Dublin 8', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '713', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => '4-9 Redmond Square', 'town' => 'Wexford Town', 'state' => 'WEXFORD
'),
            array('id' => '714', 'pharmacy_name' => 'Barry\'s Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Delvin', 'state' => 'WESTMEATH
'),
            array('id' => '715', 'pharmacy_name' => 'Varley\'s Pharmacy', 'address' => 'Unit 105 Eyre Square Centre', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '716', 'pharmacy_name' => 'Gormley Pharmacy', 'address' => 'Unit 3 Kells Shopping Centre', 'town' => 'Kells', 'state' => 'MEATH
'),
            array('id' => '717', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '2 Main Street Dublin 15', 'town' => 'Blanchardstown', 'state' => 'DUBLIN
'),
            array('id' => '718', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Nutgrove Shopping Centre Dublin 14', 'town' => 'Rathfarnham', 'state' => 'DUBLIN
'),
            array('id' => '719', 'pharmacy_name' => 'Gilsenan\'s Allcare Pharmacy', 'address' => '1-2 Town Centre Mall Main Street', 'town' => 'Swords', 'state' => 'DUBLIN
'),
            array('id' => '720', 'pharmacy_name' => 'Crescent Pharmacy', 'address' => '68 Willow Park Crescent Dublin 11', 'town' => 'Glasnevin', 'state' => 'DUBLIN
'),
            array('id' => '721', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Superquinn Shopping Centre', 'town' => 'Lucan', 'state' => 'DUBLIN
'),
            array('id' => '722', 'pharmacy_name' => 'Hilton\'s Pharmacy Limited', 'address' => '2 Main Street', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '723', 'pharmacy_name' => 'Nolan\'s Pharmacy', 'address' => 'Unit 2a Ashbourne Town Centre', 'town' => 'Ashbourne', 'state' => 'MEATH
'),
            array('id' => '724', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '10 Upper Drumcondra Road Dublin 9', 'town' => 'Drumcondra', 'state' => 'DUBLIN
'),
            array('id' => '725', 'pharmacy_name' => 'Matt O\'Flaherty Chemists', 'address' => '37 Eyre Square', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '726', 'pharmacy_name' => 'Coppen\'s Pharmacy Limited', 'address' => 'Unit 5 Abbey Centre', 'town' => 'Enniscorthy', 'state' => 'WEXFORD
'),
            array('id' => '727', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Laois Shopping Centre', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '728', 'pharmacy_name' => 'Dooley\'s Pharmacy', 'address' => '37 Bishop Street', 'town' => 'Newcastle West', 'state' => 'LIMERICK
'),
            array('id' => '729', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Unit 15 Omni Park Shopping Centre Dublin 9', 'town' => 'Santry', 'state' => 'DUBLIN
'),
            array('id' => '730', 'pharmacy_name' => 'LloydsPharmacy ', 'address' => 'Hollyhill', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '731', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Connolly Hospital"', 'town' => ' Dublin 15', 'state' => 'Blanchardstown'),
            array('id' => '732', 'pharmacy_name' => 'Ward Pharmacy', 'address' => '34 -36 Ballymahon Street', 'town' => 'Longford Town', 'state' => 'LONGFORD
'),
            array('id' => '733', 'pharmacy_name' => 'Clifden Pharmacy & Photographic Centre Limited', 'address' => 'Main Street', 'town' => 'Clifden', 'state' => 'GALWAY
'),
            array('id' => '734', 'pharmacy_name' => 'Grennan\'s Pharmacy Limited', 'address' => '40 Dublin Street', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '735', 'pharmacy_name' => 'Rush Allcare Pharmacy', 'address' => '37 Main Street', 'town' => 'Rush', 'state' => 'DUBLIN
'),
            array('id' => '736', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => '21 Grafton Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '737', 'pharmacy_name' => 'Rockville Pharmacy', 'address' => '7 Rockville Road Newtown Park Avenue', 'town' => 'Blackrock', 'state' => 'DUBLIN
'),
            array('id' => '738', 'pharmacy_name' => 'Adrian Dunne Pharmacy', 'address' => '40-41 Main Street', 'town' => 'Arklow', 'state' => 'WICKLOW
'),
            array('id' => '739', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Bon Secours Hospital"', 'town' => '', 'state' => 'Renmore'),
            array('id' => '740', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' National Rehabilitation Hospital"', 'town' => 'Rochestown Avenue', 'state' => 'Dun Laoghaire'),
            array('id' => '741', 'pharmacy_name' => 'O\'Donovan\'s Pharmacy ', 'address' => 'Unit 12 Tullamore Centre Church Road', 'town' => 'Tullamore', 'state' => 'OFFALY
'),
            array('id' => '742', 'pharmacy_name' => 'Horgan\'s Pharmacy', 'address' => 'Parkwest Tesco Shopping Centre', 'town' => 'Mallow', 'state' => 'CORK
'),
            array('id' => '743', 'pharmacy_name' => 'Brennan\'s Pharmacy', 'address' => 'Summerhill', 'town' => 'Tramore', 'state' => 'WATERFORD
'),
            array('id' => '744', 'pharmacy_name' => 'Brennan\'s Pharmacy', 'address' => 'Unit 11 Ardaravan Square', 'town' => 'Buncrana', 'state' => 'DONEGAL
'),
            array('id' => '745', 'pharmacy_name' => 'Kelly\'s Pharmacy', 'address' => 'Unit 3 Oscar House Staplestown Road', 'town' => 'Carlow', 'state' => 'CARLOW
'),
            array('id' => '746', 'pharmacy_name' => 'Collins Kinsale Pharmacy', 'address' => '11-12 Exchange Building Market Place', 'town' => 'Kinsale', 'state' => 'CORK
'),
            array('id' => '747', 'pharmacy_name' => 'Nicholsons Pharmacy', 'address' => '2 Stephen Street', 'town' => 'Sligo', 'state' => 'SLIGO
'),
            array('id' => '748', 'pharmacy_name' => 'Pharmacy O\'Regan', 'address' => 'Unit 4 - 6 Old Bawn Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '749', 'pharmacy_name' => 'Greene\'s Pharmacy', 'address' => 'Chapel Street', 'town' => 'Ballyjamesduff', 'state' => 'CAVAN
'),
            array('id' => '750', 'pharmacy_name' => 'O\'Donoghue\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Virginia', 'state' => 'CAVAN
'),
            array('id' => '751', 'pharmacy_name' => 'Mulcahy\'s Pharmacy', 'address' => 'The Square', 'town' => 'Millstreet', 'state' => 'CORK
'),
            array('id' => '752', 'pharmacy_name' => 'O\'Dea\'s Pharmacy', 'address' => 'Lorcan Avenue Dublin 9', 'town' => 'Santry', 'state' => 'DUBLIN
'),
            array('id' => '753', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Upper George\'s Street', 'town' => 'Dun Laoghaire', 'state' => 'DUBLIN
'),
            array('id' => '754', 'pharmacy_name' => 'Rx + Pharmacy', 'address' => 'Unit 48-48a Skycourt Shopping Centre', 'town' => 'Shannon', 'state' => 'CLARE
'),
            array('id' => '755', 'pharmacy_name' => 'Roscrea Centre Pharmacy', 'address' => 'Castle Street', 'town' => 'Roscrea', 'state' => 'TIPPERARY
'),
            array('id' => '756', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. Michaels Hospital"', 'town' => 'Lower Georges Street', 'state' => 'Dun Laoghaire'),
            array('id' => '757', 'pharmacy_name' => 'Horgan\'s Pharmacy', 'address' => 'Bandon Shopping Centre South Main Street', 'town' => 'Bandon', 'state' => 'CORK
'),
            array('id' => '758', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Mater Misericordiae University Hospital"', 'town' => 'Eccles Street Dublin 7', 'state' => ''),
            array('id' => '759', 'pharmacy_name' => 'Duffy\'s Pharmacy', 'address' => 'Killimor', 'town' => 'Ballinasloe', 'state' => 'GALWAY
'),
            array('id' => '760', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Coombe Women & Infants University Hospital"', 'town' => 'Cork Street Dolphins Barn Dublin 8', 'state' => ''),
            array('id' => '761', 'pharmacy_name' => 'Burke\'s Pharmacy (Waterford) Ltd', 'address' => 'Unit 4 The Hyper Centre Mongan Street', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '762', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => '12a City Square Shopping Centre', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '763', 'pharmacy_name' => 'Connolly\'s Pharmacy', 'address' => 'Greenacres S. Centre Avenue Road', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '764', 'pharmacy_name' => 'Pharmacy O\'Regan', 'address' => '4 Drogheda Street', 'town' => 'Balbriggan', 'state' => 'DUBLIN
'),
            array('id' => '765', 'pharmacy_name' => 'Foynes Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Foynes', 'state' => 'LIMERICK
'),
            array('id' => '766', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Supervalu Shopping Centre Killester Dublin 3', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '767', 'pharmacy_name' => 'Pharmacy Department - St. Patrick\'s Hospital', 'address' => 'P.O. Box 136 James\'s Street Dublin 8', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '768', 'pharmacy_name' => 'Barry\'s Pharmacy Limited', 'address' => 'The Square', 'town' => 'Castlepollard', 'state' => 'WESTMEATH
'),
            array('id' => '769', 'pharmacy_name' => 'McElligott\'s Pharmacy', 'address' => 'Ashdale House Shean Lower', 'town' => 'Blarney', 'state' => 'CORK
'),
            array('id' => '770', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Unit 2 Longford Shopping Centre', 'town' => 'Longford Town', 'state' => 'LONGFORD
'),
            array('id' => '771', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '20 Pearse Street', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '772', 'pharmacy_name' => 'Kissane\'s Pharmacy', 'address' => 'Market Street', 'town' => 'Thomastown', 'state' => 'KILKENNY
'),
            array('id' => '773', 'pharmacy_name' => 'O\'Donnell\'s Pharmacy (Gweedore) Ltd', 'address' => 'Stranacorkra Derrybeg', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '774', 'pharmacy_name' => 'McLoughlin\'s Pharmacy', 'address' => 'Unit 4 Dunnes Stores Shopping Centre O\'Connell Street', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '775', 'pharmacy_name' => 'Broderick\'s Pharmacy Ltd', 'address' => '30 Society Street', 'town' => 'Ballinasloe', 'state' => 'GALWAY
'),
            array('id' => '776', 'pharmacy_name' => 'McNally Pharmacy', 'address' => 'Unit 1 Manor Mall Shopping Centre Brackenstown', 'town' => 'Swords', 'state' => 'DUBLIN
'),
            array('id' => '777', 'pharmacy_name' => 'Mackessy\'s Pharmacy', 'address' => 'New Street', 'town' => 'Newmarket', 'state' => 'CORK
'),
            array('id' => '778', 'pharmacy_name' => 'Oranmore Pharmacy', 'address' => 'Unit 2 Oranpoint', 'town' => 'Oranmore', 'state' => 'GALWAY
'),
            array('id' => '779', 'pharmacy_name' => 'Innishannon Pharmacy', 'address' => 'Main Street', 'town' => 'Innishannon', 'state' => 'CORK
'),
            array('id' => '780', 'pharmacy_name' => 'Leavy\'s Pharmacy Limited', 'address' => 'Long Walk Shopping Centre', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '781', 'pharmacy_name' => 'MacNamara\'s Pharmacy', 'address' => '30 Main Street', 'town' => 'Swords', 'state' => 'DUBLIN
'),
            array('id' => '782', 'pharmacy_name' => 'Ballybrack Medical Hall', 'address' => '22 Church Road', 'town' => 'Ballybrack', 'state' => 'DUBLIN
'),
            array('id' => '783', 'pharmacy_name' => 'Hughes Pharmacy ', 'address' => 'Prosperous Road', 'town' => 'Clane', 'state' => 'KILDARE
'),
            array('id' => '784', 'pharmacy_name' => 'Clontarf Pharmacy Ltd', 'address' => '192b Clontarf Road Dublin 3', 'town' => 'Clontarf', 'state' => 'DUBLIN
'),
            array('id' => '785', 'pharmacy_name' => 'Kennelly\'s Pharmacy and Opticians', 'address' => '33 New Street', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '786', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. Vincent\'s University Hospital"', 'town' => 'Elm Park Dublin 4', 'state' => ''),
            array('id' => '787', 'pharmacy_name' => 'Peter Fox totalhealth Pharmacy ', 'address' => 'O\'Connell Street', 'town' => 'Birr', 'state' => 'OFFALY
'),
            array('id' => '788', 'pharmacy_name' => 'Staunton\'s Pharmacy', 'address' => 'Belfry View Church Hill', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '789', 'pharmacy_name' => 'Finnerty\'s Pharmacy', 'address' => '69 -70 Kenyon Street', 'town' => 'Nenagh', 'state' => 'TIPPERARY
'),
            array('id' => '790', 'pharmacy_name' => 'Anna Kelly Chemist', 'address' => 'O\'Connor\'s Shopping Centre Martyr\'s Road', 'town' => 'Nenagh', 'state' => 'TIPPERARY
'),
            array('id' => '791', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Dunnes Stores Shopping Centre Cardiffsbridge Road Dublin 11', 'town' => 'Finglas', 'state' => 'DUBLIN
'),
            array('id' => '792', 'pharmacy_name' => 'Madden\'s Pharmacy', 'address' => '51 Leinster Street', 'town' => 'Athy', 'state' => 'KILDARE
'),
            array('id' => '793', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '44 Tonlegee Road Dublin 5', 'town' => 'Coolock', 'state' => 'DUBLIN
'),
            array('id' => '794', 'pharmacy_name' => 'Anne Smyth Pharmacy Limited', 'address' => '86 Clanbrassil Street', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '795', 'pharmacy_name' => 'Haven Pharmacy Farmers ', 'address' => 'Unit 1 Leopardstown Valley Shopping Centre Ballyogan Road Dublin 18', 'town' => 'Sandyford', 'state' => 'DUBLIN
'),
            array('id' => '796', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Units 6 - 7 The Mill Shopping Centre Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '797', 'pharmacy_name' => 'Cogaslann Pharmacy', 'address' => 'Unit 10/11 Clanbrassil Centre Clanbrassil Street', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '798', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Unit 11 Carlow Shopping Centre', 'town' => 'Carlow', 'state' => 'CARLOW
'),
            array('id' => '799', 'pharmacy_name' => 'Boots', 'address' => '4/6 Lower Main Street', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '800', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Sligo General Hospital"', 'town' => '', 'state' => 'Sligo Town'),
            array('id' => '801', 'pharmacy_name' => 'Cosgrove\'s Pharmacy', 'address' => '105 Monkstown Road Blackrock', 'town' => 'Monkstown', 'state' => 'DUBLIN
'),
            array('id' => '802', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Grove Island Shopping Centre Corbally', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '803', 'pharmacy_name' => 'Kissane\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Borris', 'state' => 'CARLOW
'),
            array('id' => '804', 'pharmacy_name' => 'Sam McCauley Chemists ', 'address' => 'Manor West Retail Park', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '805', 'pharmacy_name' => 'Deel Pharmacy', 'address' => 'Church Street', 'town' => 'Askeaton', 'state' => 'LIMERICK
'),
            array('id' => '806', 'pharmacy_name' => 'Medicare Pharmacy', 'address' => 'Kettle Street', 'town' => 'Lahinch', 'state' => 'CLARE
'),
            array('id' => '807', 'pharmacy_name' => 'Trant\'s Pharmacy Limited', 'address' => '6 - 7 Listowel Shopping Centre Convent Street', 'town' => 'Listowel', 'state' => 'KERRY
'),
            array('id' => '808', 'pharmacy_name' => 'Lynch\'s Pharmacy', 'address' => 'Broadale Maryborough Hill', 'town' => 'Douglas', 'state' => 'CORK
'),
            array('id' => '809', 'pharmacy_name' => 'Racefield Pharmacy', 'address' => 'Unit 5 Racefield Shopping Centre Father Russell Road', 'town' => 'Ballykeeffe', 'state' => 'LIMERICK
'),
            array('id' => '810', 'pharmacy_name' => 'Glen Easton Pharmacy', 'address' => 'Glen Easton Lodge Shopping Centre', 'town' => 'Leixlip', 'state' => 'KILDARE
'),
            array('id' => '811', 'pharmacy_name' => 'McGorisk\'s Pharmacy', 'address' => 'Unit 8 John Broderick Street', 'town' => 'Irishtown', 'state' => 'WESTMEATH
'),
            array('id' => '812', 'pharmacy_name' => 'Carrigtwohill Pharmacy Ltd', 'address' => 'Unit 4 Carrigtwohill Shopping Centre', 'town' => 'Carrigtwohill', 'state' => 'CORK
'),
            array('id' => '813', 'pharmacy_name' => 'Cunningham\'s Pharmacy', 'address' => '5 Auburn Retail Centre Dublin Road', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '814', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Midland Regional Hospital Tullamore"', 'town' => 'Arden Road', 'state' => 'Tullamore'),
            array('id' => '815', 'pharmacy_name' => 'Stock Health Pharmacy', 'address' => 'Distillery Bridge', 'town' => 'Bandon', 'state' => 'CORK
'),
            array('id' => '816', 'pharmacy_name' => 'MacNamara\'s Pharmacy', 'address' => 'Unit 4 Swords Retail Centre Dublin Road', 'town' => '"Dublin Road', 'state' => ' Swords"'),
            array('id' => '817', 'pharmacy_name' => 'Staunton\'s Pharmacy', 'address' => 'Unit 1 Johnstown Village', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '818', 'pharmacy_name' => 'Kilminchy Pharmacy', 'address' => 'Kilminchy Court Dublin Road', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '819', 'pharmacy_name' => 'Maple Pharmacy', 'address' => 'Unit 3 The Maple Centre Navan Road Dublin 7', 'town' => 'Cabra', 'state' => 'DUBLIN
'),
            array('id' => '820', 'pharmacy_name' => 'Claregalway Pharmacy', 'address' => 'Unit 1 Hughes Supermarket', 'town' => 'Claregalway', 'state' => 'GALWAY
'),
            array('id' => '821', 'pharmacy_name' => 'Loughrey\'s Pharmacy', 'address' => '20 Dublin Street', 'town' => 'Longford', 'state' => 'LONGFORD
'),
            array('id' => '822', 'pharmacy_name' => 'Collins Pharmacy', 'address' => 'Main Street Ballina', 'town' => 'Killaloe Post Office', 'state' => 'TIPPERARY
'),
            array('id' => '823', 'pharmacy_name' => 'Mulvey\'s Pharmacy', 'address' => 'Unit 2 The Village', 'town' => 'Stepaside', 'state' => 'DUBLIN
'),
            array('id' => '824', 'pharmacy_name' => 'Foley\'s Pharmacy', 'address' => 'Applewood Village', 'town' => 'Swords', 'state' => 'DUBLIN
'),
            array('id' => '825', 'pharmacy_name' => 'Merlin Pharmacy', 'address' => 'Doughiska Retail Centre', 'town' => 'Doughiska', 'state' => 'GALWAY
'),
            array('id' => '826', 'pharmacy_name' => 'McGuire\'s Pharmacy', 'address' => 'Unit 7 Market Square Centre', 'town' => 'Carrickmacross', 'state' => 'MONAGHAN
'),
            array('id' => '827', 'pharmacy_name' => 'Horgan\'s Pharmacy', 'address' => 'Mount Oval Village', 'town' => 'Rochestown', 'state' => 'CORK
'),
            array('id' => '828', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => 'Unit 1 Corbally Centre Corbally Road', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '829', 'pharmacy_name' => 'Walsh\'s Pharmacy', 'address' => 'Unit 1 Orantown Centre', 'town' => 'Oranmore', 'state' => 'GALWAY
'),
            array('id' => '830', 'pharmacy_name' => 'O\'Regan\'s Pharmacy', 'address' => 'Ballea Road', 'town' => 'Carrigaline', 'state' => 'CORK
'),
            array('id' => '831', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => 'Westmount Clinic Church Hill', 'town' => '', 'state' => 'WICKLOW
'),
            array('id' => '832', 'pharmacy_name' => 'Corduff Pharmacy', 'address' => 'Unit 1 Corduff Shopping Centre Dublin 15', 'town' => 'Blanchardstown', 'state' => 'DUBLIN
'),
            array('id' => '833', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' University Hospital Galway"', 'town' => 'University Hospital Galway Newcastle Road', 'state' => 'Galway'),
            array('id' => '834', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Units 15 - 17 Fairgreen Shopping Centre', 'town' => 'Carlow', 'state' => 'CARLOW
'),
            array('id' => '835', 'pharmacy_name' => 'Murtagh\'s Life Pharmacy - Ballinagh', 'address' => 'Main Street', 'town' => 'Ballinagh', 'state' => 'CAVAN
'),
            array('id' => '836', 'pharmacy_name' => 'McKee Pharmacy', 'address' => '2 Mc Kee Road Dublin 11', 'town' => 'Finglas', 'state' => 'DUBLIN
'),
            array('id' => '837', 'pharmacy_name' => 'Glencar Pharmacy Ltd', 'address' => 'Glencar Shopping Centre', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '838', 'pharmacy_name' => 'Your Local Pharmacy', 'address' => '310 Ballyfermot Road Dublin 10', 'town' => 'Ballyfermot', 'state' => 'DUBLIN
'),
            array('id' => '839', 'pharmacy_name' => 'Hilton\'s Pharmacy', 'address' => '3 Hilson House Magic Carpet Mall Dublin 18', 'town' => 'Cornelscourt', 'state' => 'DUBLIN
'),
            array('id' => '840', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Market Cross Shopping Centre', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '841', 'pharmacy_name' => 'Quirke\'s Pharmacy', 'address' => '11 Kilkenny Street', 'town' => 'Castlecomer', 'state' => 'KILKENNY
'),
            array('id' => '842', 'pharmacy_name' => 'Murphy\'s totalhealth Medical Hall', 'address' => 'Main Street', 'town' => 'Ballinasloe', 'state' => 'GALWAY
'),
            array('id' => '843', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '47 Main Street Dublin 11', 'town' => 'Finglas', 'state' => 'DUBLIN
'),
            array('id' => '844', 'pharmacy_name' => 'Leahy\'s Pharmacy', 'address' => 'Dunkellin Street', 'town' => 'Loughrea', 'state' => 'GALWAY
'),
            array('id' => '845', 'pharmacy_name' => 'Sandymount Pharmacy', 'address' => '1a Sandymount Green Dublin 4', 'town' => 'Sandymount', 'state' => 'DUBLIN
'),
            array('id' => '846', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Rotunda Hospital"', 'town' => 'Parnell Square Dublin 1', 'state' => ''),
            array('id' => '847', 'pharmacy_name' => 'Trant\'s Pharmacy', 'address' => 'Park Road', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '848', 'pharmacy_name' => 'Patrick Street Pharmacy', 'address' => '7 Ardilaun Court Dublin 8', 'town' => 'Patrick Street', 'state' => 'DUBLIN
'),
            array('id' => '849', 'pharmacy_name' => 'St. Brendan\'s Hospital c/o St. Mary\'s Hospital', 'address' => 'St. Mary\'s Hospital Phoenix Park Dublin 20', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '850', 'pharmacy_name' => 'The Temple Bar Pharmacy', 'address' => '21 Essex Street East Dublin 2', 'town' => 'Temple Bar', 'state' => 'DUBLIN
'),
            array('id' => '851', 'pharmacy_name' => 'Duleek Pharmacy', 'address' => 'Main Street', 'town' => 'Duleek', 'state' => 'MEATH
'),
            array('id' => '852', 'pharmacy_name' => 'Malone\'s totalhealth Pharmacy ', 'address' => 'Frances Street', 'town' => 'Kilrush', 'state' => 'CLARE
'),
            array('id' => '853', 'pharmacy_name' => 'MacNamara\'s Pharmacy', 'address' => 'Macnamara\'s Pharmacy Dublin 5', 'town' => 'Raheny Shopping Centre', 'state' => 'DUBLIN
'),
            array('id' => '854', 'pharmacy_name' => 'The Ashford Pharmacy', 'address' => 'Unit 2 Mount Usher Court Main Street', 'town' => 'Ashford', 'state' => 'WICKLOW
'),
            array('id' => '855', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Castlecourt Shopping Centre Dublin 15', 'town' => 'Castleknock', 'state' => 'DUBLIN
'),
            array('id' => '856', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Church Road', 'town' => 'Greystones', 'state' => 'WICKLOW
'),
            array('id' => '857', 'pharmacy_name' => 'Pharmacy Department - Cappagh Hospital', 'address' => 'Finglas Dublin 11', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '858', 'pharmacy_name' => 'Callagy\'s Pharmacy', 'address' => 'Glenroyal Shopping Centre', 'town' => 'Maynooth', 'state' => 'KILDARE
'),
            array('id' => '859', 'pharmacy_name' => 'O\'Shea\'s Pharmacy', 'address' => 'Unit 4 Dunnes Shopping Centre Market Yard', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '860', 'pharmacy_name' => 'Joanne Hynes totalhealth Pharmacy', 'address' => 'Cornmarket', 'town' => 'Ballinrobe', 'state' => 'MAYO
'),
            array('id' => '861', 'pharmacy_name' => 'Ballinacurra Pharmacy Ltd', 'address' => 'Greenpark S. Centre Punch\'s Cross', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '862', 'pharmacy_name' => 'Castletroy Pharmacy', 'address' => 'Unit 4 University Court', 'town' => 'Castletroy', 'state' => 'LIMERICK
'),
            array('id' => '863', 'pharmacy_name' => 'Kingswood Pharmacy', 'address' => 'Ut. 6 Kingswood Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '864', 'pharmacy_name' => 'Jocelyn Pharmacy', 'address' => '19 Jocelyn Street', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '865', 'pharmacy_name' => 'Diarmuid O\'Sullivan (Pharmacy) Ltd', 'address' => 'Mill Road', 'town' => 'Killorglin', 'state' => 'KERRY
'),
            array('id' => '866', 'pharmacy_name' => 'Dolan\'s Pharmacy Limited Bridge Centre', 'address' => 'Unit 9/10 The Bridge Centre', 'town' => 'Tullamore', 'state' => 'OFFALY
'),
            array('id' => '867', 'pharmacy_name' => 'Askea Pharmacy', 'address' => 'Tullow Road', 'town' => 'Carlow', 'state' => 'CARLOW
'),
            array('id' => '868', 'pharmacy_name' => 'Harrington\'s Pharmacy Ballincollig', 'address' => 'Main Street', 'town' => 'Ballincollig', 'state' => 'CORK
'),
            array('id' => '869', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => 'Market Place Superquinn Shopping Centre', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '870', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Spar Shopping Centre Carpenterstown Road Dublin 15', 'town' => 'Castleknock', 'state' => 'DUBLIN
'),
            array('id' => '871', 'pharmacy_name' => 'Ratoath Pharmacy ', 'address' => 'Main Street', 'town' => 'Ratoath', 'state' => 'MEATH
'),
            array('id' => '872', 'pharmacy_name' => 'Ryans Pharmacy', 'address' => '1 River Court', 'town' => 'Rathangan', 'state' => 'KILDARE
'),
            array('id' => '873', 'pharmacy_name' => 'McDaid\'s Pharmacy', 'address' => 'Newcourt Shopping Centre Church Street', 'town' => 'Cavan', 'state' => 'CAVAN
'),
            array('id' => '874', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. Joseph\'s Hospital Ennis"', 'town' => '', 'state' => 'Ennis'),
            array('id' => '875', 'pharmacy_name' => 'Cleaboy Pharmacy', 'address' => 'Cleaboy Shopping Centre', 'town' => 'Waterford', 'state' => 'WATERFORD
'),
            array('id' => '876', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => 'Units 251-252 Blanchardstown Shopping Centre Dublin 15', 'town' => 'Blanchardstown', 'state' => 'DUBLIN
'),
            array('id' => '877', 'pharmacy_name' => 'City Pharmacy', 'address' => '14 Dame Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '878', 'pharmacy_name' => 'Boots', 'address' => 'Unit 9 & 10 Jervis Street Shopping Centre Dublin 1', 'town' => 'Mary Street', 'state' => 'DUBLIN
'),
            array('id' => '879', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Our Lady\'s Hospital For Sick Children"', 'town' => ' Dublin 12', 'state' => 'Crumlin'),
            array('id' => '880', 'pharmacy_name' => 'McGrath\'s Pharmacy Limited', 'address' => 'The Square', 'town' => 'Sixmilebridge', 'state' => 'CLARE
'),
            array('id' => '881', 'pharmacy_name' => 'Rochford\'s Pharmacy', 'address' => '21 Parnell Street', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '882', 'pharmacy_name' => 'University Pharmacy', 'address' => 'Units 1-2 University Halls Newcastle Road', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '883', 'pharmacy_name' => 'Deasy\'s Pharmacy', 'address' => 'Ballymakeera', 'town' => '', 'state' => 'CORK
'),
            array('id' => '884', 'pharmacy_name' => 'Pharmacy First Plus (Tower)', 'address' => 'Tower Shopping Centre Tower', 'town' => 'Blarney', 'state' => 'CORK
'),
            array('id' => '885', 'pharmacy_name' => 'Burns Pharmacy', 'address' => 'Unit 2 O\'Donnell\'s Business Park Mounthawk', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '886', 'pharmacy_name' => 'Boots', 'address' => 'Units 3-4 Bloomfield Shopping Centre', 'town' => 'Dun Laoghaire', 'state' => 'DUBLIN
'),
            array('id' => '887', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Children\'s University Hospital"', 'town' => 'Temple Street Dublin 1', 'state' => ''),
            array('id' => '888', 'pharmacy_name' => 'Gray\'s totalhealth Pharmacy', 'address' => '3 Castletroy Court Castletroy', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '889', 'pharmacy_name' => 'Bon Secours Hospital Tralee', 'address' => 'Pharmacy Department Bon Secours Hospital Strand Road', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '890', 'pharmacy_name' => 'Foley\'s Pharmacy', 'address' => 'Ballyowen Castle S. Centre', 'town' => 'Lucan', 'state' => 'DUBLIN
'),
            array('id' => '891', 'pharmacy_name' => 'O\'Meara\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Borrisokane', 'state' => 'TIPPERARY
'),
            array('id' => '892', 'pharmacy_name' => 'St. James\'s Late Night Pharmacy', 'address' => 'The Concourse St. James\'s Hospital Dublin 8', 'town' => 'James\'s Street', 'state' => 'DUBLIN
'),
            array('id' => '893', 'pharmacy_name' => 'Boots', 'address' => 'Unit B3 Golden Island Shopping Centre', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '894', 'pharmacy_name' => 'Drinagh Pharmacy', 'address' => 'Market Street', 'town' => 'Skibbereen', 'state' => 'CORK
'),
            array('id' => '895', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. Brigid\'s Hospital"', 'town' => '', 'state' => 'Ballinasloe'),
            array('id' => '896', 'pharmacy_name' => 'Boots', 'address' => 'Harbour Place Shopping Centre', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '897', 'pharmacy_name' => 'Eglinton Street Pharmacy', 'address' => '15 Eglinton Street', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '898', 'pharmacy_name' => 'McQuillan\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Blackrock', 'state' => 'LOUTH
'),
            array('id' => '899', 'pharmacy_name' => 'Green Park Pharmacy', 'address' => 'Green Park Shopping Centre Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '900', 'pharmacy_name' => 'Crowley\'s Allcare Pharmacy', 'address' => 'Unit 3 Mahon Shopping Centre Avenue De Rennes', 'town' => 'Mahon', 'state' => 'CORK
'),
            array('id' => '901', 'pharmacy_name' => 'Monread Pharmacy', 'address' => 'Monread Avenue Monread', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '902', 'pharmacy_name' => 'Boots', 'address' => 'Units 1 And 2 Dublin Road', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '903', 'pharmacy_name' => 'Boots', 'address' => '36-38 High Street', 'town' => '', 'state' => 'KILKENNY
'),
            array('id' => '904', 'pharmacy_name' => 'O\'Reilly\'s Fermoy Allcare Pharmacy ', 'address' => '17 Pearse Square', 'town' => 'Fermoy', 'state' => 'CORK
'),
            array('id' => '905', 'pharmacy_name' => 'Raheen Pharmacy Limited', 'address' => '3 Courtfields Sc Raheen', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '906', 'pharmacy_name' => 'Molloys Pharmacy', 'address' => 'Garden Street', 'town' => 'Ballina', 'state' => 'MAYO
'),
            array('id' => '907', 'pharmacy_name' => 'Hunters Pharmacy Windy Arbour Limited', 'address' => '5 Olivemount Terrace Windy Arbour Dublin 14', 'town' => 'Dundrum', 'state' => 'DUBLIN
'),
            array('id' => '908', 'pharmacy_name' => 'Bergin\'s Pharmacy', 'address' => 'Courtyard Shopping Centre', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '909', 'pharmacy_name' => 'Healy Pharmacies', 'address' => '24 Main Street', 'town' => 'Bagenalstown', 'state' => 'CARLOW
'),
            array('id' => '910', 'pharmacy_name' => 'Dowling\'s Pharmacy', 'address' => '147 Church Street Dublin 7', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '911', 'pharmacy_name' => 'MacManus Pharmacy', 'address' => '12 Townhall Street', 'town' => 'Cavan', 'state' => 'CAVAN
'),
            array('id' => '912', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Royal Victoria Eye And Ear Hospital"', 'town' => 'Royal Victoria Eye And Ear Hospital Dublin 2', 'state' => ''),
            array('id' => '913', 'pharmacy_name' => 'Boots', 'address' => 'Liffey Valley Shopping Centre Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '914', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Mayo General Hospital"', 'town' => '', 'state' => 'Castlebar'),
            array('id' => '915', 'pharmacy_name' => 'Clonee Pharmacy Limited', 'address' => 'Unit 2 The Clonee Centre Main Street', 'town' => 'Clonee', 'state' => 'MEATH
'),
            array('id' => '916', 'pharmacy_name' => 'Pillbox Pharmacy', 'address' => 'Main Street', 'town' => 'Bundoran', 'state' => 'DONEGAL
'),
            array('id' => '917', 'pharmacy_name' => 'Duffy\'s Pharmacy', 'address' => 'Maginn Avenue', 'town' => 'Buncrana', 'state' => 'DONEGAL
'),
            array('id' => '918', 'pharmacy_name' => 'Boots', 'address' => '15-16 Monaghan Shopping Centre', 'town' => 'Monaghan Town', 'state' => 'MONAGHAN
'),
            array('id' => '919', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Unit 2a Douglas Court Shopping Centre Douglas', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '920', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Portiuncula Public Hospital"', 'town' => '', 'state' => 'Ballinasloe'),
            array('id' => '921', 'pharmacy_name' => 'Boots', 'address' => '4 George\'s Court Barron Strand Street', 'town' => '', 'state' => 'WATERFORD
'),
            array('id' => '922', 'pharmacy_name' => 'Hickeys Pharmacy', 'address' => 'Wheaton Hall Medical Centre Dublin Road', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '923', 'pharmacy_name' => 'Cloughjordan totalhealth Pharmacy', 'address' => 'Main Street', 'town' => 'Cloughjordan', 'state' => 'TIPPERARY
'),
            array('id' => '924', 'pharmacy_name' => 'McKay\'s Pharmacy', 'address' => '33 Shanard Road Dublin 9', 'town' => 'Santry', 'state' => 'DUBLIN
'),
            array('id' => '925', 'pharmacy_name' => 'Haven Pharmacy Brennans', 'address' => 'Ti Phurseil', 'town' => 'Barna', 'state' => 'GALWAY
'),
            array('id' => '926', 'pharmacy_name' => 'Youghal Pharmacy', 'address' => '149 North Main Street', 'town' => 'Youghal', 'state' => 'CORK
'),
            array('id' => '927', 'pharmacy_name' => 'Clonsilla Pharmacy', 'address' => 'The Thatch (Unit 1) Weavers Row Dublin 15', 'town' => 'Clonsilla', 'state' => 'DUBLIN
'),
            array('id' => '928', 'pharmacy_name' => 'Downey\'s Pharmacy', 'address' => '3 Tesco Centre Vevay Road', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '929', 'pharmacy_name' => 'Boots', 'address' => '35 Shop Street', 'town' => '', 'state' => 'GALWAY
'),
            array('id' => '930', 'pharmacy_name' => 'Carrigart Pharmacy Ltd.', 'address' => 'Main Street', 'town' => 'Carrigart', 'state' => 'DONEGAL
'),
            array('id' => '931', 'pharmacy_name' => 'McSorley Pharmacy', 'address' => '21 Main Street', 'town' => 'Emyvale', 'state' => 'MONAGHAN
'),
            array('id' => '932', 'pharmacy_name' => 'Leahy\'s Pharmacy', 'address' => 'Dunlo Street', 'town' => 'Ballinasloe', 'state' => 'GALWAY
'),
            array('id' => '933', 'pharmacy_name' => 'Altheir Ltd. Pharmacy', 'address' => 'Ballygar Road', 'town' => 'Mountbellew', 'state' => 'GALWAY
'),
            array('id' => '934', 'pharmacy_name' => 'Pharmacy First Plus (Northside)', 'address' => 'Glenwood Drive Onslow Gardens', 'town' => 'Commons Road', 'state' => 'CORK
'),
            array('id' => '935', 'pharmacy_name' => 'Haven Pharmacy Moloneys', 'address' => 'Grange Cross Dublin 10', 'town' => 'Ballyfermot', 'state' => 'DUBLIN
'),
            array('id' => '936', 'pharmacy_name' => 'Kearney Chemist Ltd', 'address' => 'Main Street', 'town' => 'Castlerea', 'state' => 'ROSCOMMON
'),
            array('id' => '937', 'pharmacy_name' => 'Kinsealy Pharmacy', 'address' => 'Unit 10 Feltrim Shopping Centre Drynam Road', 'town' => 'Swords', 'state' => 'DUBLIN
'),
            array('id' => '938', 'pharmacy_name' => 'Caherconlish Pharmacy', 'address' => 'Big Tree House Main Street', 'town' => 'Caherconlish', 'state' => 'LIMERICK
'),
            array('id' => '939', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => '19-20 Sarsfield Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '940', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Coolock Village Shopping Centre Dublin 5', 'town' => 'Coolock', 'state' => 'DUBLIN
'),
            array('id' => '941', 'pharmacy_name' => 'Parnell Pharmacy', 'address' => '35-41 Parnell Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '942', 'pharmacy_name' => 'Meath Street Pharmacy Ltd.', 'address' => '39 Meath Street Dublin 8', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '943', 'pharmacy_name' => 'Sam McCauley Chemists ', 'address' => 'Blackpool Shopping Centre', 'town' => 'Blackpool', 'state' => 'CORK
'),
            array('id' => '944', 'pharmacy_name' => 'Corr\'s Pharmacy (Clare Hall) Ltd.', 'address' => 'Elmfield Rise Dublin 13', 'town' => 'Clare Hall', 'state' => 'DUBLIN
'),
            array('id' => '945', 'pharmacy_name' => 'Rochford\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Corofin', 'state' => 'CLARE
'),
            array('id' => '946', 'pharmacy_name' => 'Farrell\'s Pharmacy Ballivor Ltd', 'address' => 'Main Street', 'town' => 'Ballivor', 'state' => 'MEATH
'),
            array('id' => '947', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => 'Superquinn Shopping Centre Tramore Road', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '948', 'pharmacy_name' => 'Remedi Pharmacy', 'address' => 'Unit 8 Custom House Square Dublin 1', 'town' => 'Irish Financial Services Centre', 'state' => 'DUBLIN
'),
            array('id' => '949', 'pharmacy_name' => 'Bettystown Pharmacy', 'address' => 'Bettystown', 'town' => '', 'state' => 'MEATH
'),
            array('id' => '950', 'pharmacy_name' => 'Ryan\'s Pharmacy', 'address' => 'Derrinturn', 'town' => 'Carbury', 'state' => 'KILDARE
'),
            array('id' => '951', 'pharmacy_name' => 'Littlepace Pharmacy', 'address' => 'Littlepace Shopping Centre Dublin 15', 'town' => 'Clonee', 'state' => 'DUBLIN
'),
            array('id' => '952', 'pharmacy_name' => 'Boots', 'address' => 'Unit G06 The Pavillions Shopping Centre', 'town' => 'Swords', 'state' => 'DUBLIN
'),
            array('id' => '953', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Merlin Park Hospital"', 'town' => 'Merlin Park Hospital Merlin Park', 'state' => ''),
            array('id' => '954', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Mid-West Regional Hospital"', 'town' => '', 'state' => 'Dooradoyle'),
            array('id' => '955', 'pharmacy_name' => 'Nobber Pharmacy Ltd', 'address' => 'Main Street', 'town' => 'Nobber', 'state' => 'MEATH
'),
            array('id' => '956', 'pharmacy_name' => 'Phelan\'s Pharmacy', 'address' => '6 Crestfield Centre', 'town' => 'Glanmire', 'state' => 'CORK
'),
            array('id' => '957', 'pharmacy_name' => 'Crosshaven Pharmacy Ltd.', 'address' => 'Point Road', 'town' => 'Crosshaven', 'state' => 'CORK
'),
            array('id' => '958', 'pharmacy_name' => 'Sam McCauley Chemists ', 'address' => 'Broad Street', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '959', 'pharmacy_name' => 'Newtown Pharmacy', 'address' => '1 Shauna Court Main Street', 'town' => 'Newtowncunningham', 'state' => 'DONEGAL
'),
            array('id' => '960', 'pharmacy_name' => 'O\'Driscoll\'s Pharmacy', 'address' => 'Unit 3 Beechmount Shopping Centre', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '961', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. Columcille\'s Hospital"', 'town' => '', 'state' => 'Loughlinstown'),
            array('id' => '962', 'pharmacy_name' => 'Darndale Village Pharmacy', 'address' => 'Unit 2 Darndale Belcamp Village Centre Dublin 17', 'town' => 'Darndale', 'state' => 'DUBLIN
'),
            array('id' => '963', 'pharmacy_name' => 'Blake\'s Pharmacy', 'address' => 'The Ideal Shopping Centre', 'town' => 'Prosperous', 'state' => 'KILDARE
'),
            array('id' => '964', 'pharmacy_name' => 'McGreal Pharmacare', 'address' => 'Lower Main Street', 'town' => 'Blessington', 'state' => 'WICKLOW
'),
            array('id' => '965', 'pharmacy_name' => 'Flynn\'s Pharmacy', 'address' => 'Gort Road', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '966', 'pharmacy_name' => 'Newcastle-Lyons Pharmacy Ltd', 'address' => 'Unit 4 Cornerpark', 'town' => 'Newcastle', 'state' => 'DUBLIN
'),
            array('id' => '967', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' South Infirmary - Victoria Hospital Ltd"', 'town' => 'Old Blackrock Road', 'state' => 'Cork'),
            array('id' => '968', 'pharmacy_name' => 'Kilbarrack Pharmacy (Stack\'s)', 'address' => 'Units 17 - 18 Kilbarrack Shopping Centre Dublin 5', 'town' => 'Kilbarrack', 'state' => 'DUBLIN
'),
            array('id' => '969', 'pharmacy_name' => 'Stack\'s Pharmacy (Ratoath)', 'address' => 'Units 2 / 3 Supervalu Shopping Centre', 'town' => 'Ratoath', 'state' => 'MEATH
'),
            array('id' => '970', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => 'Unit 1 Dutch Village Shopping Centre Woodford Walk Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '971', 'pharmacy_name' => 'Moynihan\'s Pharmacy', 'address' => 'Main Street Watergrasshill', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '972', 'pharmacy_name' => 'Howard\'s Pharmacy', 'address' => '12 An Fuaran', 'town' => 'Moycullen', 'state' => 'GALWAY
'),
            array('id' => '973', 'pharmacy_name' => 'Janet Dillon Pharmacy', 'address' => 'Unit 2 Norseman Court Dublin 7', 'town' => 'Manor Street', 'state' => 'DUBLIN
'),
            array('id' => '974', 'pharmacy_name' => 'Boots', 'address' => '31 O\'Connell Street', 'town' => 'Sligo Town', 'state' => 'SLIGO
'),
            array('id' => '975', 'pharmacy_name' => 'Corbally Pharmacy', 'address' => 'Shannon Banks', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '976', 'pharmacy_name' => 'Pharmacy O\'Reilly', 'address' => '38 Tonlegee Road Dublin 5', 'town' => 'Coolock', 'state' => 'DUBLIN
'),
            array('id' => '977', 'pharmacy_name' => 'Connolly\'s Chemist ', 'address' => 'Flemings Department Store Church Square', 'town' => 'Monaghan Town', 'state' => 'MONAGHAN
'),
            array('id' => '978', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'North Gate Medical Centre John Street', 'town' => 'New Ross', 'state' => 'WEXFORD
'),
            array('id' => '979', 'pharmacy_name' => 'Adrian Dunne Pharmacy', 'address' => 'Unit 11 Tesco Shopping Centre', 'town' => 'Ashbourne', 'state' => 'MEATH
'),
            array('id' => '980', 'pharmacy_name' => 'Corr\'s Pharmacy (Clogherhead) Ltd', 'address' => '82 Main Street', 'town' => 'Clogherhead', 'state' => 'LOUTH
'),
            array('id' => '981', 'pharmacy_name' => 'Boots', 'address' => '5 - 6 Gladstone Street', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '982', 'pharmacy_name' => 'Whelan\'s Pharmacy', 'address' => 'Kildare Shopping Centre Claregate Street', 'town' => 'Kildare Town', 'state' => 'KILDARE
'),
            array('id' => '983', 'pharmacy_name' => 'Pharmacy Department', 'address' => 'Monaghan Hospital', 'town' => '', 'state' => 'MONAGHAN
'),
            array('id' => '984', 'pharmacy_name' => 'Halley\'s Pharmacy', 'address' => 'Newtown Shopping Centre', 'town' => 'Annacotty', 'state' => 'LIMERICK
'),
            array('id' => '985', 'pharmacy_name' => 'Magner\'s Pharmacy', 'address' => 'Old Swiss Cottage Building Swords Road Dublin 9', 'town' => 'Santry', 'state' => 'DUBLIN
'),
            array('id' => '986', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Letterkenny General Hospital"', 'town' => '', 'state' => 'Letterkenny'),
            array('id' => '987', 'pharmacy_name' => 'Ryan\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Rhode', 'state' => 'OFFALY
'),
            array('id' => '988', 'pharmacy_name' => 'Pharmacy O\'Reilly', 'address' => '2 Mornington Park Malahide Road Dublin 5', 'town' => 'Artane', 'state' => 'DUBLIN
'),
            array('id' => '989', 'pharmacy_name' => 'Trinity Pharmacy', 'address' => '40 Westland Row Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '990', 'pharmacy_name' => 'Moorefield Pharmacy', 'address' => 'Moorefield Business Centre Moorefield Road', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '991', 'pharmacy_name' => 'Markievicz Pharmacy', 'address' => 'Holborn Hill', 'town' => 'Sligo', 'state' => 'SLIGO
'),
            array('id' => '992', 'pharmacy_name' => 'Jobstown Pharmacy', 'address' => 'Unit 2 Kiltalawn Shopping Centre Jobstown Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '993', 'pharmacy_name' => 'Kilmuckridge Pharmacy', 'address' => 'Kilmuckridge', 'town' => 'Gorey', 'state' => 'WEXFORD
'),
            array('id' => '994', 'pharmacy_name' => 'Ferbane Pharmacy', 'address' => 'Athlone Road', 'town' => 'Ferbane', 'state' => 'OFFALY
'),
            array('id' => '995', 'pharmacy_name' => 'Mac Sherry\'s Pharmacy Ltd', 'address' => 'Whitethorn Centre', 'town' => 'Kilcoole', 'state' => 'WICKLOW
'),
            array('id' => '996', 'pharmacy_name' => 'Madigan\'s Pharmacy', 'address' => 'Green Street', 'town' => 'Callan', 'state' => 'KILKENNY
'),
            array('id' => '997', 'pharmacy_name' => 'Holly\'s Pharmacy', 'address' => '7a Marina Point', 'town' => 'Ballinasloe', 'state' => 'GALWAY
'),
            array('id' => '998', 'pharmacy_name' => 'Health Express Pharmacy', 'address' => 'Unit 6 Aylesbury Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '999', 'pharmacy_name' => 'Health Express Pharmacy', 'address' => 'Units 13-14 The Charlesland Centre', 'town' => 'Greystones', 'state' => 'WICKLOW
'),
            array('id' => '1000', 'pharmacy_name' => 'Rochfortbridge Pharmacy', 'address' => 'Centre Shopping Centre', 'town' => 'Rochfortbridge', 'state' => 'WESTMEATH
'),
            array('id' => '1001', 'pharmacy_name' => 'Gowran Pharmacy', 'address' => 'Main Street', 'town' => 'Gowran', 'state' => 'KILKENNY
'),
            array('id' => '1002', 'pharmacy_name' => 'Boots', 'address' => '40-42 O\'Connell Street', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '1003', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Units A5-A8 Skycourt Shopping Centre', 'town' => 'Shannon', 'state' => 'CLARE
'),
            array('id' => '1004', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Dungarvan Shopping Centre', 'town' => 'Dungarvan', 'state' => 'WATERFORD
'),
            array('id' => '1005', 'pharmacy_name' => 'Temperature Controlled Pharmaceuticals Limited', 'address' => '15-16 Willow Business Park Knockmitten Lane Dublin 12', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1006', 'pharmacy_name' => 'Nolan\'s Pharmacy', 'address' => 'High Street', 'town' => 'Bagenalstown', 'state' => 'CARLOW
'),
            array('id' => '1007', 'pharmacy_name' => 'Natural Options totalhealth Pharmacy', 'address' => 'Supervalu Centre Elphin Street', 'town' => 'Boyle', 'state' => 'ROSCOMMON
'),
            array('id' => '1008', 'pharmacy_name' => 'Boots', 'address' => '54 North Main Street', 'town' => '', 'state' => 'WEXFORD
'),
            array('id' => '1009', 'pharmacy_name' => 'Donabate Pharmacy', 'address' => 'Unit 1 Ballalease North Portrane Road', 'town' => 'Donabate', 'state' => 'DUBLIN
'),
            array('id' => '1010', 'pharmacy_name' => 'McCartan\'s Pharmacy', 'address' => 'Unit 4 Carrickhills S.C.', 'town' => 'Portmarnock', 'state' => 'DUBLIN
'),
            array('id' => '1011', 'pharmacy_name' => 'Murphy\'s Abbey Pharmacy', 'address' => 'Brigown', 'town' => 'Mitchelstown', 'state' => 'CORK
'),
            array('id' => '1012', 'pharmacy_name' => 'Chapelizod Pharmacy', 'address' => 'Main Street Dublin 20', 'town' => 'Chapelizod', 'state' => 'DUBLIN
'),
            array('id' => '1013', 'pharmacy_name' => 'Boots', 'address' => '302 Lower Rathmines Road Dublin 6', 'town' => 'Rathmines', 'state' => 'DUBLIN
'),
            array('id' => '1014', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => 'Unit 2 The Crescent Dublin 15', 'town' => 'Mulhuddart', 'state' => 'DUBLIN
'),
            array('id' => '1015', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => '2a Fortfield Road Dublin 6W', 'town' => 'Kimmage', 'state' => 'DUBLIN
'),
            array('id' => '1016', 'pharmacy_name' => 'Nevin\'s Pharmacy Limited', 'address' => '', 'town' => 'Roscam', 'state' => 'GALWAY
'),
            array('id' => '1017', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 254 The Square Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '1018', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Aldi Shopping Centre Newlands Cross Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '1019', 'pharmacy_name' => 'MacManus Pharmacy', 'address' => 'Main Street', 'town' => 'Ballyconnell', 'state' => 'CAVAN
'),
            array('id' => '1020', 'pharmacy_name' => 'Daly\'s Pharmacy', 'address' => 'Unit 4 Market Mall Church Street', 'town' => 'Gort', 'state' => 'GALWAY
'),
            array('id' => '1021', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Hazlemere Shopping Centre', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '1022', 'pharmacy_name' => 'Carrick Pharmacy', 'address' => 'Units1 2 & 3 Carrickmacross Shopping Centre Main Street', 'town' => 'Carrickmacross', 'state' => 'MONAGHAN
'),
            array('id' => '1023', 'pharmacy_name' => 'Greendale Pharmacy', 'address' => '3 Kish House Greendale Road Dublin 5', 'town' => 'Raheny', 'state' => 'DUBLIN
'),
            array('id' => '1024', 'pharmacy_name' => 'Rathcoole Pharmacy', 'address' => 'Unit 1 Rathcoole Shopping Centre', 'town' => 'Rathcoole', 'state' => 'DUBLIN
'),
            array('id' => '1025', 'pharmacy_name' => 'Murphy\'s Pharmacy', 'address' => 'Unit 1 Riverdale Shopping Centre Mill Road', 'town' => 'Midleton', 'state' => 'CORK
'),
            array('id' => '1026', 'pharmacy_name' => 'Touchstone Pharmacy', 'address' => 'Main Street Dublin 15', 'town' => 'Mulhuddart', 'state' => 'DUBLIN
'),
            array('id' => '1027', 'pharmacy_name' => 'Finnstown Pharmacy', 'address' => 'Unit 4 Finnstown Centre', 'town' => 'Lucan', 'state' => 'DUBLIN
'),
            array('id' => '1028', 'pharmacy_name' => 'Burke\'s Pharmacy', 'address' => '2 Hillcrest', 'town' => 'Kilcullen', 'state' => 'KILDARE
'),
            array('id' => '1029', 'pharmacy_name' => 'The Galway Clinic', 'address' => 'Doughiska', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '1030', 'pharmacy_name' => 'Keating\'s Careplus Pharmacy', 'address' => 'St. Nessan\'s Road', 'town' => 'Dooradoyle', 'state' => 'LIMERICK
'),
            array('id' => '1031', 'pharmacy_name' => 'Health Express Pharmacy', 'address' => 'Unit 6 Artane Castle Shopping Centre Dublin 5', 'town' => 'Artane', 'state' => 'DUBLIN
'),
            array('id' => '1032', 'pharmacy_name' => 'Fermoy Medical Hall', 'address' => '61-63 Mc Curtain Street', 'town' => 'Fermoy', 'state' => 'CORK
'),
            array('id' => '1033', 'pharmacy_name' => 'Magner\'s Pharmacy', 'address' => 'Unit 24 Edenmore Shopping Centre Dublin 5', 'town' => 'Edenmore', 'state' => 'DUBLIN
'),
            array('id' => '1034', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Unit 11 Poppyfield Retail Park', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '1035', 'pharmacy_name' => 'Green Cross Pharmacy', 'address' => 'Unit 8 Convent Hill Development Convent Hill', 'town' => 'Killaloe', 'state' => 'CLARE
'),
            array('id' => '1036', 'pharmacy_name' => 'Curran\'s Pharmacy', 'address' => 'Church Street', 'town' => 'Ennistymon', 'state' => 'CLARE
'),
            array('id' => '1037', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => 'Unit 2 The Park Edward Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1038', 'pharmacy_name' => 'Health Express Pharmacy', 'address' => 'Units 120-121 Level 1 The Square Shopping CentreD24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '1039', 'pharmacy_name' => 'Ryan\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Daingean', 'state' => 'OFFALY
'),
            array('id' => '1040', 'pharmacy_name' => 'Newpark Pharmacy', 'address' => 'Newpark Shopping Centre', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '1041', 'pharmacy_name' => 'Stack\'s Pharmacy', 'address' => 'Units 4 - 5 Harts Corner Dublin 9', 'town' => 'Glasnevin', 'state' => 'DUBLIN
'),
            array('id' => '1042', 'pharmacy_name' => 'Coachford Pharmacy', 'address' => 'Coachford', 'town' => '', 'state' => 'CORK
'),
            array('id' => '1043', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Units A1 - A2 Market Green Shopping Centre', 'town' => 'Midleton', 'state' => 'CORK
'),
            array('id' => '1044', 'pharmacy_name' => 'Grant\'s Pharmacy Arklow', 'address' => 'Old Wexford Road', 'town' => 'Arklow', 'state' => 'WICKLOW
'),
            array('id' => '1045', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '11 Braemor Road Dublin 14', 'town' => 'Churchtown', 'state' => 'DUBLIN
'),
            array('id' => '1046', 'pharmacy_name' => 'MacManus Pharmacy', 'address' => '2 Newline', 'town' => 'Manorhamilton', 'state' => 'LEITRIM
'),
            array('id' => '1047', 'pharmacy_name' => 'St. Luke\'s Pharmacy', 'address' => '38 Wellington Road St. Luke\'s Cross', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '1048', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Unit 7 High Street', 'town' => 'Dungarvan', 'state' => 'WATERFORD
'),
            array('id' => '1049', 'pharmacy_name' => 'Ticknock Pharmacy', 'address' => 'Supervalu Centre Ticknock', 'town' => 'Cobh', 'state' => 'CORK
'),
            array('id' => '1050', 'pharmacy_name' => 'Togher Pharmacy', 'address' => 'Unit 2 Togher Village Centre Togher Road', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '1051', 'pharmacy_name' => 'Newtown Pharmacy', 'address' => 'Londis Shopping Centre Newtown', 'town' => 'Cobh', 'state' => 'CORK
'),
            array('id' => '1052', 'pharmacy_name' => 'The Pharmacy Railway Road', 'address' => '1 - 2 Railway Road', 'town' => 'Cavan', 'state' => 'CAVAN
'),
            array('id' => '1053', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '1 Chaplains Place Dublin 22', 'town' => 'Rowlagh', 'state' => 'DUBLIN
'),
            array('id' => '1054', 'pharmacy_name' => 'Duggan\'s Pharmacy Ltd', 'address' => '1 Renmore Road Renmore', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '1055', 'pharmacy_name' => 'Mulligan\'s Pharmacy ', 'address' => 'Ballybricken', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '1056', 'pharmacy_name' => 'Blanchardstown Village Pharmacy', 'address' => 'Unit 2 Mill House Main Street Dublin 15', 'town' => 'Blanchardstown', 'state' => 'DUBLIN
'),
            array('id' => '1057', 'pharmacy_name' => 'Ballyragget Pharmacy', 'address' => 'Castle Street', 'town' => 'Ballyragget', 'state' => 'KILKENNY
'),
            array('id' => '1058', 'pharmacy_name' => 'Murphy\'s Pharmacy', 'address' => 'Roslevan Shopping Centre Tulla Road', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '1059', 'pharmacy_name' => 'Molloy\'s Lifestyle Pharmacy and Healthstore', 'address' => 'Bunree Road', 'town' => 'Ballina', 'state' => 'MAYO
'),
            array('id' => '1060', 'pharmacy_name' => 'Clare Street Pharmacy', 'address' => 'Clare Street', 'town' => 'Nenagh', 'state' => 'TIPPERARY
'),
            array('id' => '1061', 'pharmacy_name' => 'Molloy\'s Lifestyle Pharmacy and Healthstore', 'address' => 'Harrison Centre', 'town' => 'Roscommon Town', 'state' => 'ROSCOMMON
'),
            array('id' => '1062', 'pharmacy_name' => 'O\'Hanlon Pharmacy', 'address' => '1 Main Street', 'town' => 'Ballymahon', 'state' => 'LONGFORD
'),
            array('id' => '1063', 'pharmacy_name' => 'Frawley\'s Pharmacy', 'address' => '11 Main Street', 'town' => 'Roscrea', 'state' => 'TIPPERARY
'),
            array('id' => '1064', 'pharmacy_name' => 'Cara Pharmacy Quayside ', 'address' => 'Unit 30 Quayside Shopping Centre', 'town' => 'Sligo', 'state' => 'SLIGO
'),
            array('id' => '1065', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Unit 2 Mahon Point Mahon Point Shopping Centre', 'town' => 'Mahon', 'state' => 'CORK
'),
            array('id' => '1066', 'pharmacy_name' => 'Rose Finlay Pharmacy', 'address' => 'Main Street', 'town' => 'Tullamore', 'state' => 'OFFALY
'),
            array('id' => '1067', 'pharmacy_name' => 'Churchtown Pharmacy', 'address' => '121 Braemor Road Dublin 14', 'town' => 'Churchtown', 'state' => 'DUBLIN
'),
            array('id' => '1068', 'pharmacy_name' => 'O\'Connor\'s Pharmacy', 'address' => 'Unit 6 Blackcastle Shopping Centre', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '1069', 'pharmacy_name' => 'Banagher totalhealth Pharmacy', 'address' => 'Upper Main Street', 'town' => 'Banagher', 'state' => 'OFFALY
'),
            array('id' => '1070', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Navan Medical Centre Abbey Road', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '1071', 'pharmacy_name' => 'McSharry\'s Pharmacy (Castlerea) Ltd', 'address' => 'Kelly Henry Medical Centre Knock Road', 'town' => 'Castlerea', 'state' => 'ROSCOMMON
'),
            array('id' => '1072', 'pharmacy_name' => 'Gallery Quay Pharmacy', 'address' => 'Unit G6 Gallery Quay Grand Canal Dock Dublin 2', 'town' => 'Pearse Street', 'state' => 'DUBLIN
'),
            array('id' => '1073', 'pharmacy_name' => 'Health Express Pharmacy', 'address' => 'Unit G16 Scotch Hall Shopping Centre', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '1074', 'pharmacy_name' => 'Leo Walsh Pharmacy', 'address' => 'Joyce\'s Shopping Centre Knocknacarra', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '1075', 'pharmacy_name' => 'Keatinge\'s Pharmacy', 'address' => '3 Tyrconnell Road Dublin 8', 'town' => 'Inchicore', 'state' => 'DUBLIN
'),
            array('id' => '1076', 'pharmacy_name' => 'Brookfield Pharmacy', 'address' => 'Unit 3 Sundale Shopping Centre Fortunestown Way Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '1077', 'pharmacy_name' => 'Murray\'s Pharmacy', 'address' => 'Cpi Centre', 'town' => 'Castlefinn', 'state' => 'DONEGAL
'),
            array('id' => '1078', 'pharmacy_name' => 'Daarwood Pharmacy', 'address' => 'Unit 4 Daarwood Crescent Gortboy', 'town' => 'Newcastle West', 'state' => 'LIMERICK
'),
            array('id' => '1079', 'pharmacy_name' => 'Drumlish Pharmacy', 'address' => 'Longford Road', 'town' => 'Drumlish', 'state' => 'LONGFORD
'),
            array('id' => '1080', 'pharmacy_name' => 'Duane\'s Pharmacy', 'address' => '4 Strand Street', 'town' => 'Kanturk', 'state' => 'CORK
'),
            array('id' => '1081', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 16 Ballincollig Shopping Centre', 'town' => 'Ballincollig', 'state' => 'CORK
'),
            array('id' => '1082', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 11 Manor Mills Shopping Centre', 'town' => 'Maynooth', 'state' => 'KILDARE
'),
            array('id' => '1083', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 2 Dublin 15', 'town' => 'Tyrrelstown Town Centre', 'state' => 'DUBLIN
'),
            array('id' => '1084', 'pharmacy_name' => 'Mulligan\'s Pharmacy ', 'address' => 'Main Street', 'town' => 'Piltown', 'state' => 'KILKENNY
'),
            array('id' => '1085', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => 'Western Road', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '1086', 'pharmacy_name' => 'McNally\'s Pharmacy365 ', 'address' => 'Market Square', 'town' => 'Kingscourt', 'state' => 'CAVAN
'),
            array('id' => '1087', 'pharmacy_name' => 'Sweeney\'s Pharmacy', 'address' => '1 Riveroaks Shopping Centre', 'town' => 'Claregalway', 'state' => 'GALWAY
'),
            array('id' => '1088', 'pharmacy_name' => 'Martin\'s Pharmacy ', 'address' => 'Johnstownbridge', 'town' => 'Enfield', 'state' => 'MEATH
'),
            array('id' => '1089', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Units 1-2 Woodview Court Tandy\'s Lane', 'town' => 'Lucan', 'state' => 'DUBLIN
'),
            array('id' => '1090', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Unit 16 Jetland Shopping Centre Ennis Road', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1091', 'pharmacy_name' => 'Costigan\'s Pharmacy', 'address' => 'Unit 3 Kyle Court Blind Street', 'town' => 'Tipperary Town', 'state' => 'TIPPERARY
'),
            array('id' => '1092', 'pharmacy_name' => 'McCartan\'s Pharmacy', 'address' => 'Unit 11 Block B Castlemill Shopping Centre', 'town' => 'Balbriggan', 'state' => 'DUBLIN
'),
            array('id' => '1093', 'pharmacy_name' => 'Berehaven Pharmacy', 'address' => 'Main Street', 'town' => 'Castletownbere', 'state' => 'CORK
'),
            array('id' => '1094', 'pharmacy_name' => 'Fadden\'s Pharmacy', 'address' => 'Abbeylands Centre', 'town' => 'Clane', 'state' => 'KILDARE
'),
            array('id' => '1095', 'pharmacy_name' => 'Your Local Pharmacy', 'address' => 'Unit 2 Main Street', 'town' => 'Dunboyne', 'state' => 'MEATH
'),
            array('id' => '1096', 'pharmacy_name' => 'Giltenane\'s Pharmacy Limited', 'address' => '38 Main Street', 'town' => 'Rathkeale', 'state' => 'LIMERICK
'),
            array('id' => '1097', 'pharmacy_name' => 'Hilton\'s Pharmacy (Rathfarnham) Ltd.', 'address' => '11 Main Street Dublin 14', 'town' => 'Rathfarnham', 'state' => 'DUBLIN
'),
            array('id' => '1098', 'pharmacy_name' => 'Healthwise Pharmacy', 'address' => 'Unit 1 Milligan Place Connaughton Road', 'town' => 'Sligo', 'state' => 'SLIGO
'),
            array('id' => '1099', 'pharmacy_name' => 'Ballyraine Pharmacy', 'address' => 'Unit 1 Park House Ramelton Road', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '1100', 'pharmacy_name' => 'Your Local Pharmacy', 'address' => 'Unit 2 Mc Govern\'s Corner Dublin 8', 'town' => 'Cork Street', 'state' => 'DUBLIN
'),
            array('id' => '1101', 'pharmacy_name' => 'Ballyphehane Pharmacy', 'address' => '66 Tory Top Road Ballyphehane', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1102', 'pharmacy_name' => 'Flanagan\'s Berkeley Road Pharmacy Ltd', 'address' => '18 Berkeley Road Dublin 7', 'town' => 'Phibsboro', 'state' => 'DUBLIN
'),
            array('id' => '1103', 'pharmacy_name' => 'Edward Mac Manus Pharmacy', 'address' => 'Civic Centre Dublin 9', 'town' => 'Ballymun', 'state' => 'DUBLIN
'),
            array('id' => '1104', 'pharmacy_name' => 'Green Cross Pharmacy', 'address' => 'Castle Centre', 'town' => 'Castleconnell', 'state' => 'LIMERICK
'),
            array('id' => '1105', 'pharmacy_name' => 'Medipharm Pharmacy', 'address' => '16 South Great George\'s Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1106', 'pharmacy_name' => 'Kilmacud totalhealth Pharmacy', 'address' => '1a Drummartin Road Dublin 14', 'town' => 'Kilmacud', 'state' => 'DUBLIN
'),
            array('id' => '1107', 'pharmacy_name' => 'O\'Donnell\'s Pharmacy', 'address' => 'Unit 4 Garden City Shopping Centre', 'town' => 'Ashbourne', 'state' => 'MEATH
'),
            array('id' => '1108', 'pharmacy_name' => 'Convoy Pharmacy', 'address' => 'Main Street', 'town' => 'Convoy', 'state' => 'DONEGAL
'),
            array('id' => '1109', 'pharmacy_name' => 'Horgan\'s Pharmacy', 'address' => 'Unit 13 Market Square', 'town' => 'Mallow', 'state' => 'CORK
'),
            array('id' => '1110', 'pharmacy_name' => 'Cox\'s Pharmacy', 'address' => 'Unit 5 Hartley Business Park', 'town' => 'Carrick-On-Shannon', 'state' => 'LEITRIM
'),
            array('id' => '1111', 'pharmacy_name' => 'Varden\'s Pharmacy', 'address' => 'Unit 1 Suan', 'town' => 'Quin', 'state' => 'CLARE
'),
            array('id' => '1112', 'pharmacy_name' => 'Molloys Lifestyle Pharmacy and Healthstore', 'address' => 'New Street', 'town' => 'Ballaghaderreen', 'state' => 'ROSCOMMON
'),
            array('id' => '1113', 'pharmacy_name' => 'Brennan\'s Pharmacy Clonmany', 'address' => 'The Square', 'town' => 'Clonmany', 'state' => 'DONEGAL
'),
            array('id' => '1114', 'pharmacy_name' => 'Meagher\'s Pharmacy (Castletymon)', 'address' => '5 Castletymon Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '1115', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'College Medical Centre Ballinalee Road', 'town' => 'Longford Town', 'state' => 'LONGFORD
'),
            array('id' => '1116', 'pharmacy_name' => 'Castlebridge Pharmacy', 'address' => 'No 1 The Square', 'town' => 'Castlebridge', 'state' => 'WEXFORD
'),
            array('id' => '1117', 'pharmacy_name' => 'Strandhill Life Pharmacy', 'address' => 'Buenos Aires Drive', 'town' => 'Strandhill', 'state' => 'SLIGO
'),
            array('id' => '1118', 'pharmacy_name' => 'Stack\'s Pharmacy', 'address' => 'Lusk Shopping Centre Station Road', 'town' => 'Lusk', 'state' => 'DUBLIN
'),
            array('id' => '1119', 'pharmacy_name' => 'Boots', 'address' => 'Unit 3-4 North Mall Navan Shopping Centre', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '1120', 'pharmacy_name' => 'Scannell\'s Riverview Pharmacy', 'address' => 'Unit 4 Riverview Shopping Centre', 'town' => 'Bandon', 'state' => 'CORK
'),
            array('id' => '1121', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => 'Cloughabrody Shopping Centre', 'town' => 'Thomastown', 'state' => 'KILKENNY
'),
            array('id' => '1122', 'pharmacy_name' => 'Blackglen Pharmacy', 'address' => 'Unit 1 Blackglen Village Centre Simonsridge Dublin 18', 'town' => 'Sandyford', 'state' => 'DUBLIN
'),
            array('id' => '1123', 'pharmacy_name' => 'Rathmines Pharmacy', 'address' => '114 Lower Rathmines Road Dublin 6', 'town' => 'Rathmines', 'state' => 'DUBLIN
'),
            array('id' => '1124', 'pharmacy_name' => 'Martin Walsh Allcare Pharmacy', 'address' => 'Unit 7-7a Carrigaline Shopping Centre Main Street', 'town' => 'Carrigaline', 'state' => 'CORK
'),
            array('id' => '1125', 'pharmacy_name' => 'Mount Merrion Pharmacy', 'address' => '71 Deerpark Road', 'town' => 'Mount Merrion', 'state' => 'DUBLIN
'),
            array('id' => '1126', 'pharmacy_name' => 'Leighlin Pharmacy', 'address' => 'St. Lazerian\'s Street', 'town' => 'Leighlinbridge', 'state' => 'CARLOW
'),
            array('id' => '1127', 'pharmacy_name' => 'Ward Pharmacy', 'address' => 'Hazelwood Centre', 'town' => 'Longford Town', 'state' => 'LONGFORD
'),
            array('id' => '1128', 'pharmacy_name' => 'Phelans Pharmacy', 'address' => '22 Lower Clanbrassil Street Dublin 8', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1129', 'pharmacy_name' => 'Palace Fields Pharmacy', 'address' => 'Tullinadaly Road', 'town' => 'Tuam', 'state' => 'GALWAY
'),
            array('id' => '1130', 'pharmacy_name' => 'Keating\'s Pharmacy', 'address' => 'Unit 6 Westbury Centre Corbally', 'town' => '', 'state' => 'CLARE
'),
            array('id' => '1131', 'pharmacy_name' => 'Hilton\'s Pharmacy (Parnell Street) Ltd.', 'address' => 'Unit 4 Greencourt Dublin 1', 'town' => 'Parnell Street', 'state' => 'DUBLIN
'),
            array('id' => '1132', 'pharmacy_name' => 'Roundwood Pharmacy', 'address' => '8 Main Street Clara House', 'town' => 'Roundwood', 'state' => 'WICKLOW
'),
            array('id' => '1133', 'pharmacy_name' => 'Murphy\'s Pharmacy', 'address' => 'The Square', 'town' => 'Ballaghaderreen', 'state' => 'ROSCOMMON
'),
            array('id' => '1134', 'pharmacy_name' => 'Boots ', 'address' => 'St. Laurence Shopping Centre', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '1135', 'pharmacy_name' => 'Phelans Midnight Pharmacy', 'address' => 'Kinsale Road Commercial Centre', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1136', 'pharmacy_name' => 'Southside Pharmacy', 'address' => 'Unit 5 Quality Retail Park Roxboro', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1137', 'pharmacy_name' => 'Janet Dillon Pharmacy', 'address' => 'Unit 3 Moorefield Shopping Centre', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '1138', 'pharmacy_name' => 'Rathvilly Pharmacy', 'address' => 'Main Street', 'town' => 'Rathvilly', 'state' => 'CARLOW
'),
            array('id' => '1139', 'pharmacy_name' => 'Maher Pharmacy', 'address' => '30 Liberty Square', 'town' => 'Thurles', 'state' => 'TIPPERARY
'),
            array('id' => '1140', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Leopardstown Shopping Centre Ballyogan Road Dublin 18', 'town' => 'Leopardstown', 'state' => 'DUBLIN
'),
            array('id' => '1141', 'pharmacy_name' => 'McElwee Pharmacy', 'address' => 'The Cedar Clinic Mountmellick Road', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '1142', 'pharmacy_name' => 'Walsh\'s Pharmacy', 'address' => 'Spiddal Medical Centre River Road', 'town' => 'Spiddal', 'state' => 'GALWAY
'),
            array('id' => '1143', 'pharmacy_name' => 'Ballycummin Pharmacy', 'address' => 'Ballycummin Village Raheen', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1144', 'pharmacy_name' => 'Rosedale Pharmacy', 'address' => 'Dooradoyle Road', 'town' => 'Dooradoyle', 'state' => 'LIMERICK
'),
            array('id' => '1145', 'pharmacy_name' => 'Michael Collins Pharmacy', 'address' => 'Wentworth Villas', 'town' => 'Wicklow Town', 'state' => 'WICKLOW
'),
            array('id' => '1146', 'pharmacy_name' => 'Haven Pharmacy Murphy\'s', 'address' => 'Clonard Road', 'town' => 'Wexford', 'state' => 'WEXFORD
'),
            array('id' => '1147', 'pharmacy_name' => 'Avoca Pharmacy', 'address' => 'Main Street', 'town' => 'Avoca', 'state' => 'WICKLOW
'),
            array('id' => '1148', 'pharmacy_name' => 'Pharmacy Plus (Birr)', 'address' => 'Emmet Square', 'town' => 'Birr', 'state' => 'OFFALY
'),
            array('id' => '1149', 'pharmacy_name' => 'Donal McGoey Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Dunleer', 'state' => 'LOUTH
'),
            array('id' => '1150', 'pharmacy_name' => 'T. A. Dolan Pharmacy Ltd', 'address' => 'The Medical Hall Church Street', 'town' => 'Moate', 'state' => 'WESTMEATH
'),
            array('id' => '1151', 'pharmacy_name' => 'McGranes Pharmacy', 'address' => 'Patrick Street', 'town' => 'Trim', 'state' => 'MEATH
'),
            array('id' => '1152', 'pharmacy_name' => 'Haven Pharmacy Farmers', 'address' => 'Unit 34 The Mall Beacon Court Dublin 18', 'town' => 'Sandyford', 'state' => 'DUBLIN
'),
            array('id' => '1153', 'pharmacy_name' => 'Gorey Pharmacy', 'address' => 'St. Michael\'s Road', 'town' => 'Gorey', 'state' => 'WEXFORD
'),
            array('id' => '1154', 'pharmacy_name' => 'Killinarden Pharmacy', 'address' => 'Unit 4 Killinarden Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '1155', 'pharmacy_name' => 'Blackhall Pharmacy', 'address' => 'Unit 4 Ellis Court Business Centre Dublin 7', 'town' => '13 Ellis Quay', 'state' => 'DUBLIN
'),
            array('id' => '1156', 'pharmacy_name' => 'Boots ', 'address' => 'The Marshes Shopping Centre Rampart Road', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1157', 'pharmacy_name' => 'Fair Street Pharmacy', 'address' => '29 Fair Street', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '1158', 'pharmacy_name' => 'Pharmhealth Integrative Pharmacy', 'address' => 'Henry Grattan Building Dublin City University Dublin 9', 'town' => 'Glasnevin', 'state' => 'DUBLIN
'),
            array('id' => '1159', 'pharmacy_name' => 'Boots', 'address' => 'Unit 2b Ashbourne Town Centre', 'town' => 'Ashbourne', 'state' => 'MEATH
'),
            array('id' => '1160', 'pharmacy_name' => 'Liberty Pharmacy Ltd', 'address' => '36 Lower Liberty Square', 'town' => 'Thurles', 'state' => 'TIPPERARY
'),
            array('id' => '1161', 'pharmacy_name' => 'Pharmacy O\'Regan', 'address' => '67 Vernon Aveune Dublin 3', 'town' => 'Clontarf', 'state' => 'DUBLIN
'),
            array('id' => '1162', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' University Hospital Waterford"', 'town' => 'Dunmore Road', 'state' => 'Waterford'),
            array('id' => '1163', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Wexford General Hospital"', 'town' => 'Wexford ', 'state' => ''),
            array('id' => '1164', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Cork University Hospital"', 'town' => 'Wilton', 'state' => 'Cork'),
            array('id' => '1165', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Mercy University Hospital"', 'town' => 'Grenville Place', 'state' => 'Cork'),
            array('id' => '1166', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St Luke\'s General Hospital"', 'town' => 'Freshford Road', 'state' => 'Kilkenny'),
            array('id' => '1167', 'pharmacy_name' => '"Department of Pharmacy', 'address' => ' St. John\'s Hospital"', 'town' => 'John\'s Square', 'state' => 'Limerick'),
            array('id' => '1168', 'pharmacy_name' => 'Currid\'s Pharmacy', 'address' => 'Lord Edward Street', 'town' => 'Ballymote', 'state' => 'SLIGO
'),
            array('id' => '1169', 'pharmacy_name' => 'Kinnegad Pharmacy', 'address' => 'Unit 5 Supervalu Shopping Centre', 'town' => 'Kinnegad', 'state' => 'WESTMEATH
'),
            array('id' => '1170', 'pharmacy_name' => 'Poppintree Pharmacy', 'address' => 'Unit 6 Poppintree Neighbourhood Centre Poppintree Parade Dublin 11', 'town' => 'Ballymun', 'state' => 'DUBLIN
'),
            array('id' => '1171', 'pharmacy_name' => 'Abbeyknockmoy Pharmacy Ltd', 'address' => 'Unit 1 Cois Na Habhainn Abbeyknockmoy', 'town' => 'Tuam', 'state' => 'GALWAY
'),
            array('id' => '1172', 'pharmacy_name' => 'Park Road Pharmacy ', 'address' => 'Countess Centre Park Road', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '1173', 'pharmacy_name' => 'MacNamara\'s Pharmacy', 'address' => 'Boroimhe Shopping Centre Boroimhe Swords', 'town' => '"Boroimhe', 'state' => ' Swords"'),
            array('id' => '1174', 'pharmacy_name' => 'Cromcastle Pharmacy', 'address' => '69 Cromcastle Road Dublin 5', 'town' => 'Coolock', 'state' => 'DUBLIN
'),
            array('id' => '1175', 'pharmacy_name' => 'Castletown Pharmacy', 'address' => '133-135 Castletown Road', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1176', 'pharmacy_name' => 'Meagher\'s Pharmacy', 'address' => '22 - 24 Sandford Road Dublin 6', 'town' => 'Ranelagh', 'state' => 'DUBLIN
'),
            array('id' => '1177', 'pharmacy_name' => 'Mari Mina Pharmacy ', 'address' => 'Main Street Toomevara', 'town' => 'Nenagh', 'state' => 'TIPPERARY
'),
            array('id' => '1178', 'pharmacy_name' => 'Inish Pharmacy', 'address' => 'Carndonagh Shopping Centre', 'town' => 'Carndonagh', 'state' => 'DONEGAL
'),
            array('id' => '1179', 'pharmacy_name' => 'Haven Pharmacy Gildea\'s', 'address' => 'Main Street', 'town' => 'Killucan', 'state' => 'WESTMEATH
'),
            array('id' => '1180', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St Luke\'s Hospital"', 'town' => 'Highfield Road Dublin 6', 'state' => 'Rathgar'),
            array('id' => '1181', 'pharmacy_name' => 'Railway View Pharmacy', 'address' => 'Railway View', 'town' => 'Macroom', 'state' => 'CORK
'),
            array('id' => '1182', 'pharmacy_name' => 'Coole Pharmacy', 'address' => 'Castlepollard Road', 'town' => 'Coole', 'state' => 'WESTMEATH
'),
            array('id' => '1183', 'pharmacy_name' => 'Lynch\'s Pharmacy', 'address' => 'Virginia Shopping Centre', 'town' => 'Virginia', 'state' => 'CAVAN
'),
            array('id' => '1184', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Cavan General Hospital"', 'town' => '', 'state' => 'Cavan Town'),
            array('id' => '1185', 'pharmacy_name' => 'Brennan\'s Pharmacy', 'address' => 'Units 2 - 3 Supervalu Shopping Centre', 'town' => 'Carndonagh', 'state' => 'DONEGAL
'),
            array('id' => '1186', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. Fintan\'s Hospital"', 'town' => '', 'state' => 'Portlaoise'),
            array('id' => '1187', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => '39-40 Kickham Street', 'town' => 'Carrick-On-Suir', 'state' => 'TIPPERARY
'),
            array('id' => '1188', 'pharmacy_name' => 'McGorisks Pharmacy', 'address' => 'Unit 53 Athlone Town Centre', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '1189', 'pharmacy_name' => 'Kavanagh\'s Pharmacy Ratoath', 'address' => 'Unit C Old Post Office Main Street', 'town' => 'Ratoath', 'state' => 'MEATH
'),
            array('id' => '1190', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Beacon Hospital"', 'town' => ' Dublin 18', 'state' => 'Sandyford'),
            array('id' => '1191', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Unit 7 The Village Centre Rathborne Dublin 15', 'town' => 'Ashtown', 'state' => 'DUBLIN
'),
            array('id' => '1192', 'pharmacy_name' => 'Cunningham\'s Pharmacy', 'address' => 'Unit 2a Block C River Village Monksland', 'town' => 'Athlone', 'state' => 'ROSCOMMON
'),
            array('id' => '1193', 'pharmacy_name' => 'Glasson Pharmacy', 'address' => '', 'town' => 'Glasson Village', 'state' => 'WESTMEATH
'),
            array('id' => '1194', 'pharmacy_name' => 'Foster\'s Pharmacy', 'address' => 'Carrigallen', 'town' => '', 'state' => 'LEITRIM
'),
            array('id' => '1195', 'pharmacy_name' => 'Collon Pharmacy', 'address' => 'Drogheda Street', 'town' => 'Collon', 'state' => 'LOUTH
'),
            array('id' => '1196', 'pharmacy_name' => 'Medipharm', 'address' => '7 Arbourfield Terrace Dundrum Road Dublin 14', 'town' => 'Dundrum', 'state' => 'DUBLIN
'),
            array('id' => '1197', 'pharmacy_name' => 'Bangor Erris Pharmacy', 'address' => 'Chapel Lane', 'town' => 'Bangor Erris', 'state' => 'MAYO
'),
            array('id' => '1198', 'pharmacy_name' => 'Lilly\'s Pharmacy', 'address' => 'Unit 5 Corballis Shopping Centre', 'town' => 'Ratoath', 'state' => 'MEATH
'),
            array('id' => '1199', 'pharmacy_name' => 'Your Local Pharmacy', 'address' => 'Unit C6 Beacon South Quarter Sandyford Industrial Estate Dublin 18', 'town' => 'Sandyford', 'state' => 'DUBLIN
'),
            array('id' => '1200', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Midland Regional Hospital"', 'town' => 'Mullingar', 'state' => ''),
            array('id' => '1201', 'pharmacy_name' => 'Hynes Pharmacy', 'address' => 'Castle Street', 'town' => 'Roscommon Town', 'state' => 'ROSCOMMON
'),
            array('id' => '1202', 'pharmacy_name' => 'Fahy\'s Pharmacy', 'address' => 'Unit 7 Blacklion Retail Centre', 'town' => 'Greystones', 'state' => 'WICKLOW
'),
            array('id' => '1203', 'pharmacy_name' => 'Abbeydorney Pharmacy', 'address' => 'Abbeydorney', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '1204', 'pharmacy_name' => 'Burke\'s Pharmacy', 'address' => 'The Anchorage Eastham Road', 'town' => 'Bettystown', 'state' => 'MEATH
'),
            array('id' => '1205', 'pharmacy_name' => 'Life Pharmacy Knock', 'address' => 'Main Street', 'town' => 'Knock', 'state' => 'MAYO
'),
            array('id' => '1206', 'pharmacy_name' => 'Matt O\'Flaherty Chemists', 'address' => 'An Cearnog Nua', 'town' => 'Moycullen', 'state' => 'GALWAY
'),
            array('id' => '1207', 'pharmacy_name' => 'Briarhill Pharmacy Limited', 'address' => 'Briarhill Shopping Centre Doughiska', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '1208', 'pharmacy_name' => 'Ballyhaise Pharmacy', 'address' => 'The Square', 'town' => 'Ballyhaise', 'state' => 'CAVAN
'),
            array('id' => '1209', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 18 Gorey Town Centre', 'town' => 'Gorey', 'state' => 'WEXFORD
'),
            array('id' => '1210', 'pharmacy_name' => 'Meagher\'s Pharmacy', 'address' => 'The Gasworks Building Dublin 4', 'town' => 'Barrow Street', 'state' => 'DUBLIN
'),
            array('id' => '1211', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => 'The Brand Store Main Street', 'town' => 'Blackrock', 'state' => 'LOUTH
'),
            array('id' => '1212', 'pharmacy_name' => 'McElwee Pharmacy Ltd.', 'address' => 'Carnmore Road', 'town' => 'Dungloe', 'state' => 'DONEGAL
'),
            array('id' => '1213', 'pharmacy_name' => 'Rathgar Pharmacy', 'address' => '5-7 Terenure Road East Dublin 6', 'town' => 'Rathgar', 'state' => 'DUBLIN
'),
            array('id' => '1214', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Unit 3 Whitemill Road', 'town' => 'Clonard', 'state' => 'WEXFORD
'),
            array('id' => '1215', 'pharmacy_name' => 'Slievemore Pharmacy', 'address' => 'Old Dublin Road', 'town' => 'Stillorgan', 'state' => 'DUBLIN
'),
            array('id' => '1216', 'pharmacy_name' => 'Boots', 'address' => 'Unit 3 Carrick-On-Shannon Shopping Centre', 'town' => 'Carrick-On-Shannon', 'state' => 'LEITRIM
'),
            array('id' => '1217', 'pharmacy_name' => 'Boots', 'address' => '26-27 Main Street', 'town' => 'Midleton', 'state' => 'CORK
'),
            array('id' => '1218', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Kerry General Hospital"', 'town' => '', 'state' => 'Tralee'),
            array('id' => '1219', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Mallow General Hospital"', 'town' => 'Limerick Road', 'state' => 'Mallow'),
            array('id' => '1220', 'pharmacy_name' => 'Neighbourhood Pharmacy', 'address' => 'Unit 1b Northwood Park Dublin 9', 'town' => 'Santry', 'state' => 'DUBLIN
'),
            array('id' => '1221', 'pharmacy_name' => 'Boots', 'address' => 'Unit 6 Charlestown Shopping Centre Dublin 11', 'town' => 'Finglas', 'state' => 'DUBLIN
'),
            array('id' => '1222', 'pharmacy_name' => 'Boots', 'address' => '18 Ballymahon Street', 'town' => 'Longford', 'state' => 'LONGFORD
'),
            array('id' => '1223', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Our Lady\'s Hospital"', 'town' => '', 'state' => 'Navan'),
            array('id' => '1224', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Roscommon County Hospital"', 'town' => 'Athlone Road', 'state' => 'Roscommon Town'),
            array('id' => '1225', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Louth County Hospital"', 'town' => 'Dublin Road', 'state' => 'Dundalk'),
            array('id' => '1226', 'pharmacy_name' => 'Pharmacy Department - Leopardstown Park Hospital', 'address' => 'Foxrock Dublin 18', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1227', 'pharmacy_name' => 'South Circular Pharmacy', 'address' => '80  South Circular Road Dublin 8', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1228', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Unit 12 Charleville Town Centre', 'town' => 'Charleville', 'state' => 'CORK
'),
            array('id' => '1229', 'pharmacy_name' => 'HealthWest Community Pharmacy', 'address' => 'Lugalisheen North', 'town' => 'Ballindine', 'state' => 'MAYO
'),
            array('id' => '1230', 'pharmacy_name' => 'South Terrace Pharmacy', 'address' => '2 Trinity Chambers South Terrace', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1231', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Bantry General Hospital"', 'town' => 'Bantry', 'state' => ''),
            array('id' => '1232', 'pharmacy_name' => 'totalhealth Bryanstown Pharmacy', 'address' => 'Bryanstown Centre Dublin Road', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '1233', 'pharmacy_name' => 'McCartan\'s Pharmacy', 'address' => 'Unit 1 Superquinn Shopping Centre Dublin 13', 'town' => 'Sutton', 'state' => 'DUBLIN
'),
            array('id' => '1234', 'pharmacy_name' => 'Kelly\'s Pharmacy', 'address' => 'Unit 9 Barrow Valley Retail Park Sleaty Road', 'town' => 'Graiguecullen', 'state' => 'CARLOW
'),
            array('id' => '1235', 'pharmacy_name' => 'Boots', 'address' => 'Units 3-4 Westport Centre Ballinrobe Road', 'town' => 'Westport', 'state' => 'MAYO
'),
            array('id' => '1236', 'pharmacy_name' => 'Classes Lake Pharmacy', 'address' => 'Unit 3 Classes Lake Retail Centre Bridewood', 'town' => 'Ovens', 'state' => 'CORK
'),
            array('id' => '1237', 'pharmacy_name' => 'Dennehy\'s Cross Pharmacy', 'address' => 'Wilton Road', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '1238', 'pharmacy_name' => 'Boots', 'address' => 'Units 10-11 Deerpark Retail Centre', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '1239', 'pharmacy_name' => 'Lally\'s LloydsPharmacy', 'address' => 'Unit 1 Mill House Mill Street', 'town' => 'Westport', 'state' => 'MAYO
'),
            array('id' => '1240', 'pharmacy_name' => 'Quinn\'s Pharmacy', 'address' => 'Beech Unit Granary Court', 'town' => 'Edenderry', 'state' => 'OFFALY
'),
            array('id' => '1241', 'pharmacy_name' => 'Healys Pharmacy', 'address' => 'Unit 3 Drogheda Retail & Leisure Centre Rathmullen Road', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '1242', 'pharmacy_name' => 'Rosslare Pharmacy', 'address' => 'Station Road', 'town' => 'Rosslare Strand', 'state' => 'WEXFORD
'),
            array('id' => '1243', 'pharmacy_name' => 'Clonakilty Pharmacy', 'address' => '29 Pearse Street', 'town' => 'Clonakilty', 'state' => 'CORK
'),
            array('id' => '1244', 'pharmacy_name' => 'Tully\'s totalhealth Pharmacy', 'address' => '439  Howth Road Dublin 5', 'town' => 'Raheny', 'state' => 'DUBLIN
'),
            array('id' => '1245', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' South Tipperary General Hospital"', 'town' => 'Western Road', 'state' => 'Clonmel'),
            array('id' => '1246', 'pharmacy_name' => 'Cottage Pharmacy', 'address' => 'Unit 1 Sandyford House Scarlett Street', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '1247', 'pharmacy_name' => 'Boots', 'address' => '75 Morehampton Road Dublin 4', 'town' => 'Donnybrook', 'state' => 'DUBLIN
'),
            array('id' => '1248', 'pharmacy_name' => 'Clonminch Pharmacy', 'address' => 'Clonminch Road', 'town' => 'Tullamore', 'state' => 'OFFALY
'),
            array('id' => '1249', 'pharmacy_name' => 'The Village Pharmacy', 'address' => '19 Main Street Dublin 5', 'town' => 'Coolock Village', 'state' => 'DUBLIN
'),
            array('id' => '1250', 'pharmacy_name' => 'Valu + Pharmacy and Healthfood Ltd', 'address' => 'Loughtree Business Park Drumalee', 'town' => 'Cavan', 'state' => 'CAVAN
'),
            array('id' => '1251', 'pharmacy_name' => 'Boots', 'address' => 'Living Health Centre Fermoy Road', 'town' => 'Mitchelstown', 'state' => 'CORK
'),
            array('id' => '1252', 'pharmacy_name' => 'O\'Dwyer\'s Pharmacy', 'address' => 'Unit 9 Cashel Town Shopping Centre Cahir Road', 'town' => 'Cashel', 'state' => 'TIPPERARY
'),
            array('id' => '1253', 'pharmacy_name' => 'Keane\'s Care Plus Pharmacy', 'address' => 'Market Point Medical Park Patrick Street', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '1254', 'pharmacy_name' => 'Brady\'s Pharmacy', 'address' => 'Unit 3 Skerries Point Shopping Centre Kelly\'s Bay', 'town' => 'Skerries', 'state' => 'DUBLIN
'),
            array('id' => '1255', 'pharmacy_name' => 'Tullyallen Pharmacy Limited', 'address' => 'Main Road', 'town' => 'Tullyallen', 'state' => 'LOUTH
'),
            array('id' => '1256', 'pharmacy_name' => 'Healthwise Pharmacy', 'address' => 'Greenes Corner Gweedore Road', 'town' => 'Dungloe', 'state' => 'DONEGAL
'),
            array('id' => '1257', 'pharmacy_name' => 'Kinlough Pharmacy', 'address' => 'Main Street', 'town' => 'Kinlough', 'state' => 'LEITRIM
'),
            array('id' => '1258', 'pharmacy_name' => 'Grant\'s Pharmacy', 'address' => 'The Palms Medical Centre The Avenue', 'town' => 'Gorey', 'state' => 'WEXFORD
'),
            array('id' => '1259', 'pharmacy_name' => 'Tipp Town Pharmacy', 'address' => 'Tipp Town Shopping Centre Limerick Road', 'town' => 'Tipperary Town', 'state' => 'TIPPERARY
'),
            array('id' => '1260', 'pharmacy_name' => 'Leeview Pharmacy', 'address' => 'Eastside Centre', 'town' => 'Ballincollig', 'state' => 'CORK
'),
            array('id' => '1261', 'pharmacy_name' => 'Ward\'s Family Pharmacy', 'address' => 'Main Street', 'town' => 'St. Johnston', 'state' => 'DONEGAL
'),
            array('id' => '1262', 'pharmacy_name' => 'Ballycasey Pharmacy', 'address' => 'Ballycasey Crescent Ballycasey', 'town' => 'Shannon', 'state' => 'CLARE
'),
            array('id' => '1263', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Our Lady\'s Hospice"', 'town' => 'Harold\'s Cross Dublin 6W', 'state' => ''),
            array('id' => '1264', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Milford Care Centre"', 'town' => 'Plassey Park Road', 'state' => 'Castletroy'),
            array('id' => '1265', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. Loman\'s Hospital"', 'town' => '', 'state' => 'Mullingar'),
            array('id' => '1266', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' Whitfield Clinic"', 'town' => 'Butlerstown North', 'state' => 'Waterford'),
            array('id' => '1267', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. Francis Hospice"', 'town' => 'Station Road Dublin 5', 'state' => 'Raheny'),
            array('id' => '1268', 'pharmacy_name' => 'Old Windmill Pharmacy', 'address' => 'Unit 3 Old Windmill Court Lower Gerald Griffin Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1269', 'pharmacy_name' => 'Hermitage Medical Clinic Limited', 'address' => 'Hermitage Medical Clinic Old Lucan Road', 'town' => 'Dublin 20', 'state' => 'DUBLIN
'),
            array('id' => '1270', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' UL Hospitals', 'town' => ' Ennis Hospital"', 'state' => ''),
            array('id' => '1271', 'pharmacy_name' => 'First Choice Pharmacy', 'address' => 'Tesco Arklow Square Wexford Road', 'town' => 'Arklow', 'state' => 'WICKLOW
'),
            array('id' => '1272', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. Vincent\'s Psychiatric Hospital"', 'town' => 'Convent Avenue Richmond Road Dublin 3', 'state' => 'Fairview'),
            array('id' => '1273', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => '6 Bridge Street', 'town' => 'Milltown', 'state' => 'KERRY
'),
            array('id' => '1274', 'pharmacy_name' => 'Fethard Pharmacy', 'address' => 'Main Street Fethard-on-Sea', 'town' => 'Fethard', 'state' => 'WEXFORD
'),
            array('id' => '1275', 'pharmacy_name' => 'The Village Pharmacy', 'address' => 'Strand Street', 'town' => 'Castlegregory', 'state' => 'KERRY
'),
            array('id' => '1276', 'pharmacy_name' => 'Rowland\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Castlebar', 'state' => 'MAYO
'),
            array('id' => '1277', 'pharmacy_name' => 'Southcrest Limited (Dunmore Pharmacy)', 'address' => '3 High Street', 'town' => 'Dunmore', 'state' => 'GALWAY
'),
            array('id' => '1278', 'pharmacy_name' => 'Cooney\'s Pharmacy', 'address' => 'Unit 2 Arcadia Neighbourhood Centre Arcadia', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '1279', 'pharmacy_name' => 'Ryan\'s Pharmacy', 'address' => 'Abbeytown ', 'town' => 'Boyle', 'state' => 'ROSCOMMON
'),
            array('id' => '1280', 'pharmacy_name' => 'Haven Pharmacy Killybegs', 'address' => 'Shore Road', 'town' => 'Killybegs', 'state' => 'DONEGAL
'),
            array('id' => '1281', 'pharmacy_name' => 'Station Road Pharmacy Limited', 'address' => 'Station Road', 'town' => 'Portarlington', 'state' => 'LAOIS
'),
            array('id' => '1282', 'pharmacy_name' => 'Rochford\'s Pharmacy', 'address' => '6 Westgate Business Park Kilrush Road', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '1283', 'pharmacy_name' => 'Boots', 'address' => 'Unit 8 Letterkenny Retail Park Loop Road', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '1284', 'pharmacy_name' => 'Blackpool Late Night Pharmacy', 'address' => 'Unit 4 City Square Watercourse Road', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1285', 'pharmacy_name' => 'Garrett O\'Donnell Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Glenties', 'state' => 'DONEGAL
'),
            array('id' => '1286', 'pharmacy_name' => 'McSweeney Pharmacy', 'address' => 'Kenmare Shopping Centre Unit 7 Railway Road', 'town' => 'Kenmare', 'state' => 'KERRY
'),
            array('id' => '1287', 'pharmacy_name' => 'Kelly\'s Pharmacy', 'address' => 'Abbeyside', 'town' => 'Dungarvan', 'state' => 'WATERFORD
'),
            array('id' => '1288', 'pharmacy_name' => 'Waterford Health Park Pharmacy', 'address' => 'Waterford Health Park Slievekeale Road', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '1289', 'pharmacy_name' => 'Silverbridge Pharmacy', 'address' => 'Unit 1 Silverbridge Shopping Centre', 'town' => 'Claremorris', 'state' => 'MAYO
'),
            array('id' => '1290', 'pharmacy_name' => 'Sam McCauley Chemists (Loughboy) Limited', 'address' => 'Kilkenny Shopping Centre Loughboy', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '1291', 'pharmacy_name' => 'Boots', 'address' => 'Unit 95B Omni Park Shopping Centre Dublin 9', 'town' => 'Santry', 'state' => 'DUBLIN
'),
            array('id' => '1292', 'pharmacy_name' => 'Carrignavar Pharmacy', 'address' => 'Units 3 - 4  Main Street', 'town' => 'Carrignavar', 'state' => 'CORK
'),
            array('id' => '1293', 'pharmacy_name' => 'Hayes Pharmacy', 'address' => '16 Hogan Place Grand Canal Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1294', 'pharmacy_name' => 'Rockfield Pharmacy', 'address' => 'Unit 2 Rockfield Central Rockfield Shopping Centre Sandyford Road Dublin 14', 'town' => 'Dundrum', 'state' => 'DUBLIN
'),
            array('id' => '1295', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Rice\'s Corner Thomondgate', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1296', 'pharmacy_name' => 'Renmore Pharmacy', 'address' => '17 Renmore Road', 'town' => 'Renmore', 'state' => 'GALWAY
'),
            array('id' => '1297', 'pharmacy_name' => 'Marley Park Pharmacy', 'address' => 'Unit 3 Grange Road Retail Centre Dublin 16', 'town' => 'Rathfarnham', 'state' => 'DUBLIN
'),
            array('id' => '1298', 'pharmacy_name' => 'College Road Pharmacy', 'address' => '63 College Road', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1299', 'pharmacy_name' => 'Pophams Road Pharmacy', 'address' => '12 Pophams Road', 'town' => 'Farranree', 'state' => 'CORK
'),
            array('id' => '1300', 'pharmacy_name' => 'Fred Matthews Pharmacy', 'address' => '64-65 Park Street', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1301', 'pharmacy_name' => 'Pharmacy First Plus (Grenagh)', 'address' => 'Grenagh Commercial Centre', 'town' => 'Grenagh', 'state' => 'CORK
'),
            array('id' => '1302', 'pharmacy_name' => 'Lombard Pharmacy', 'address' => '32 Lombard Street East Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1303', 'pharmacy_name' => 'Kennelly\'s Chemists & Opticians', 'address' => '46 Main Street', 'town' => 'Castleisland', 'state' => 'KERRY
'),
            array('id' => '1304', 'pharmacy_name' => 'Hannon\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Moville', 'state' => 'DONEGAL
'),
            array('id' => '1305', 'pharmacy_name' => 'Cara Pharmacy (Ballinamore)', 'address' => 'Railway Road', 'town' => 'Ballinamore', 'state' => 'LEITRIM
'),
            array('id' => '1306', 'pharmacy_name' => 'The Corner Pharmacy', 'address' => 'Malone\'s Corner Main Street', 'town' => 'Castleblayney', 'state' => 'MONAGHAN
'),
            array('id' => '1307', 'pharmacy_name' => 'Boots ', 'address' => '1 Half Moon Street', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1308', 'pharmacy_name' => 'HSQ Pharmacy', 'address' => 'Unit 1 Block 7 Heuston South Quarter Dublin 8', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1309', 'pharmacy_name' => 'Osborne\'s Pharmacy', 'address' => 'Lansdowne Ennis Road', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1310', 'pharmacy_name' => 'Osborne\'s Pharmacy', 'address' => 'Caherdavin Shopping Centre Ennis Road', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1311', 'pharmacy_name' => 'Tony O\'Brien\'s Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Patrickswell', 'state' => 'LIMERICK
'),
            array('id' => '1312', 'pharmacy_name' => 'Grange Pharmacy', 'address' => '', 'town' => 'Grange', 'state' => 'SLIGO
'),
            array('id' => '1313', 'pharmacy_name' => 'Annagry Pharmacy', 'address' => 'Unit 4 Ionad Ano', 'town' => 'Annagry', 'state' => 'DONEGAL
'),
            array('id' => '1314', 'pharmacy_name' => 'Scotstown Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Scotstown', 'state' => 'MONAGHAN
'),
            array('id' => '1315', 'pharmacy_name' => 'Scanlon\'s Pharmacy', 'address' => 'Unit 5 Northtown S.C. Ennis Road', 'town' => 'Limerick City', 'state' => 'LIMERICK
'),
            array('id' => '1316', 'pharmacy_name' => 'Colm\'s Life Pharmacy & Health Food Store', 'address' => '1 Cúirt na Trá', 'town' => 'Upper Salthill', 'state' => 'GALWAY
'),
            array('id' => '1317', 'pharmacy_name' => 'Abbey Healthcare', 'address' => 'Unit 1 Pottery Road Industrial Estate Pottery Road', 'town' => 'Dun Laoghaire', 'state' => 'DUBLIN
'),
            array('id' => '1318', 'pharmacy_name' => 'Kinvara Pharmacy', 'address' => '41 Kinvara Park Navan Road Dublin 7', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1319', 'pharmacy_name' => 'Clonroche Pharmacy', 'address' => 'Main Street Clonroche', 'town' => 'Enniscorthy', 'state' => 'WEXFORD
'),
            array('id' => '1320', 'pharmacy_name' => 'J. O\'Brien Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Lanesboro', 'state' => 'LONGFORD
'),
            array('id' => '1321', 'pharmacy_name' => 'Strand Street Pharmacy', 'address' => '88A Strand Street', 'town' => 'Skerries', 'state' => 'DUBLIN
'),
            array('id' => '1322', 'pharmacy_name' => 'Pharmacy Department Peamount Hospital', 'address' => '', 'town' => 'Newcastle', 'state' => 'DUBLIN
'),
            array('id' => '1323', 'pharmacy_name' => 'Green Street Pharmacy Limited', 'address' => 'Green Street', 'town' => 'Castlepollard', 'state' => 'WESTMEATH
'),
            array('id' => '1324', 'pharmacy_name' => 'Daly\'s Pharmacy', 'address' => '109 Cabra Road Dublin 7', 'town' => 'Cabra', 'state' => 'DUBLIN
'),
            array('id' => '1325', 'pharmacy_name' => 'Riverstick Pharmacy', 'address' => 'Unit 24 Riverside Grove', 'town' => 'Riverstick', 'state' => 'CORK
'),
            array('id' => '1326', 'pharmacy_name' => 'McDevitt\'s Pharmacy', 'address' => 'High Street', 'town' => 'Ballinamore', 'state' => 'LEITRIM
'),
            array('id' => '1327', 'pharmacy_name' => 'Eske Pharmacy', 'address' => 'Main Street', 'town' => 'Donegal Town', 'state' => 'DONEGAL
'),
            array('id' => '1328', 'pharmacy_name' => 'Dooley\'s Pharmacy Newcastle West Limited', 'address' => 'The Square', 'town' => 'Newcastle West', 'state' => 'LIMERICK
'),
            array('id' => '1329', 'pharmacy_name' => 'Galway Hospice ', 'address' => 'Renmore', 'town' => '', 'state' => 'GALWAY
'),
            array('id' => '1330', 'pharmacy_name' => 'Belarmine Pharmacy', 'address' => 'Unit 22 Belarmine Plaza Belarmine Avenue Dublin 18', 'town' => 'Stepaside', 'state' => 'DUBLIN
'),
            array('id' => '1331', 'pharmacy_name' => 'Healthwise Pharmacy (Ballinasloe)', 'address' => 'Harbour Road Poolboy', 'town' => 'Ballinasloe', 'state' => 'GALWAY
'),
            array('id' => '1332', 'pharmacy_name' => 'Mallow Community Pharmacy Limited', 'address' => 'Mallow Primary Care Centre Gouldshill', 'town' => 'Mallow', 'state' => 'CORK
'),
            array('id' => '1333', 'pharmacy_name' => 'Mulligans Pharmacy', 'address' => '6 Summerhill Centre Summerhill', 'town' => 'Tramore', 'state' => 'WATERFORD
'),
            array('id' => '1334', 'pharmacy_name' => 'Parkwest Pharmacy', 'address' => 'The Plaza Parkwest Business Park Dublin 12', 'town' => 'Nangor Road', 'state' => 'DUBLIN
'),
            array('id' => '1335', 'pharmacy_name' => 'Elmwood Pharmacy', 'address' => 'Elmwood Medical Centre Frankfield', 'town' => 'Douglas', 'state' => 'CORK
'),
            array('id' => '1336', 'pharmacy_name' => 'O\'Connor\'s Pharmacy', 'address' => 'Pearse Street', 'town' => 'Kinsale', 'state' => 'CORK
'),
            array('id' => '1337', 'pharmacy_name' => 'Stradbally Pharmacy', 'address' => 'Main Street', 'town' => 'Stradbally', 'state' => 'LAOIS
'),
            array('id' => '1338', 'pharmacy_name' => 'Mari Mina Pharmacy (Rathcormac) Limited', 'address' => 'Main Street', 'town' => 'Rathcormac', 'state' => 'CORK
'),
            array('id' => '1339', 'pharmacy_name' => 'Williams Pharmacy', 'address' => 'Circular Road', 'town' => 'Kilkee', 'state' => 'CLARE
'),
            array('id' => '1340', 'pharmacy_name' => 'F. & M. Reen Pharmacy Limited', 'address' => 'College Square', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '1341', 'pharmacy_name' => 'The Peoples Pharmacy', 'address' => 'Watch House Shopping Centre Watch House Cross', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1342', 'pharmacy_name' => 'Naylor\'s Pharmacy', 'address' => '23 Pearse Street', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '1343', 'pharmacy_name' => 'Johnston\'s Pharmacy', 'address' => 'Unit 2  High Street', 'town' => 'Ballygar', 'state' => 'GALWAY
'),
            array('id' => '1344', 'pharmacy_name' => 'O\'Connor\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Stamullen', 'state' => 'MEATH
'),
            array('id' => '1345', 'pharmacy_name' => 'Cooney\'s Pharmacy', 'address' => 'Unit 00 Ground Floor Athlone Town Centre', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '1346', 'pharmacy_name' => 'Cooney\'s Pharmacy', 'address' => 'The Crescent', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '1347', 'pharmacy_name' => 'Mari Mina (Mullinahone) Limited', 'address' => 'Kickham Street', 'town' => 'Mullinahone', 'state' => 'TIPPERARY
'),
            array('id' => '1348', 'pharmacy_name' => 'Erris Pharmacy', 'address' => 'Church Road', 'town' => 'Belmullet', 'state' => 'MAYO
'),
            array('id' => '1349', 'pharmacy_name' => 'O\'Connell\'s Pharmacy', 'address' => 'St. Brendan\'s Park', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '1350', 'pharmacy_name' => 'Village Pharmacy', 'address' => 'Dundalk Street', 'town' => 'Carlingford', 'state' => 'LOUTH
'),
            array('id' => '1351', 'pharmacy_name' => 'Selskar Pharmacy Limited', 'address' => '27 - 28 Selskar Street', 'town' => 'Wexford Town', 'state' => 'WEXFORD
'),
            array('id' => '1352', 'pharmacy_name' => 'Rathnew Pharmacy', 'address' => 'Unit 5  The Merrymeeting Centre', 'town' => 'Rathnew', 'state' => 'WICKLOW
'),
            array('id' => '1353', 'pharmacy_name' => 'Boots', 'address' => 'Unit 3 Childers Road Retail Park Dublin Road', 'town' => 'Limerick City', 'state' => 'LIMERICK
'),
            array('id' => '1354', 'pharmacy_name' => 'Jenkinstown Pharmacy', 'address' => 'Jenkinstown', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1355', 'pharmacy_name' => 'Pure Pharmacy', 'address' => 'Terminal 2 Dublin Airport', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1356', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => 'Kevin Barry Street', 'town' => 'Ballina', 'state' => 'MAYO
'),
            array('id' => '1357', 'pharmacy_name' => 'Nolan\'s Pharmacy ', 'address' => 'Convent Road Athlumney', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '1358', 'pharmacy_name' => 'Hamilton Long Allcare Pharmacy', 'address' => 'Unit 5 Lower O\'Connell Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1359', 'pharmacy_name' => 'Boots', 'address' => 'Units 23 - 24 Carton Retail Park', 'town' => 'Maynooth', 'state' => 'KILDARE
'),
            array('id' => '1360', 'pharmacy_name' => 'Keane\'s Care Plus Pharmacy', 'address' => 'Aldi Unit 4 Longford Road', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '1361', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => '81 New Street', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '1362', 'pharmacy_name' => 'Yvonne Martyns Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Kilcormac', 'state' => 'OFFALY
'),
            array('id' => '1363', 'pharmacy_name' => 'Ruth\'s Pharmacy', 'address' => 'Pearse Road', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '1364', 'pharmacy_name' => 'Haven Pharmacy Kennellys', 'address' => 'The Reeks Gateway Rock Road', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '1365', 'pharmacy_name' => 'Haven Pharmacy Murrays', 'address' => 'Unit 13 Killiney Shopping Centre Rochestown Avenue', 'town' => 'Killiney', 'state' => 'DUBLIN
'),
            array('id' => '1366', 'pharmacy_name' => 'Hilltop Pharmacy', 'address' => 'Hilltop Shopping Centre Station Road Dublin 5', 'town' => 'Raheny', 'state' => 'DUBLIN
'),
            array('id' => '1367', 'pharmacy_name' => 'Cogaslann Agatha', 'address' => '', 'town' => 'Carna', 'state' => 'GALWAY
'),
            array('id' => '1368', 'pharmacy_name' => 'O\'Dwyer\'s Pharmacy', 'address' => 'Ladyswell Street', 'town' => 'Cashel', 'state' => 'TIPPERARY
'),
            array('id' => '1369', 'pharmacy_name' => 'Dan McCarthy\'s Pharmacy', 'address' => '91 Patrick Street', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1370', 'pharmacy_name' => 'Sneem Pharmacy', 'address' => 'South Square', 'town' => 'Sneem', 'state' => 'KERRY
'),
            array('id' => '1371', 'pharmacy_name' => 'Olivia Lavelle Pharmacy Limited', 'address' => 'Church Street', 'town' => 'Killala', 'state' => 'MAYO
'),
            array('id' => '1372', 'pharmacy_name' => 'Sean McElroy\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Dunboyne', 'state' => 'MEATH
'),
            array('id' => '1373', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => 'Dock Road', 'town' => 'Dunmore East', 'state' => 'WATERFORD
'),
            array('id' => '1374', 'pharmacy_name' => 'Shannon\'s Pharmacy', 'address' => 'Rosemount Shopping Centre Marian Road Dublin 14', 'town' => 'Rathfarnham', 'state' => 'DUBLIN
'),
            array('id' => '1375', 'pharmacy_name' => 'Shannon\'s Templeogue Pharmacy', 'address' => 'Templeogue Village Dublin 6W', 'town' => 'Templeogue', 'state' => 'DUBLIN
'),
            array('id' => '1376', 'pharmacy_name' => 'Boots', 'address' => 'Unit 26 - 29 Thurles Shopping Centre', 'town' => 'Thurles', 'state' => 'TIPPERARY
'),
            array('id' => '1377', 'pharmacy_name' => 'Sutton Cross Pharmacy', 'address' => ' Dublin 13', 'town' => 'Sutton', 'state' => 'DUBLIN
'),
            array('id' => '1378', 'pharmacy_name' => 'Mulcair Pharmacy', 'address' => 'Church Street', 'town' => 'Newport', 'state' => 'TIPPERARY
'),
            array('id' => '1379', 'pharmacy_name' => 'Central Pharmacy', 'address' => 'Justice Walsh Road', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '1380', 'pharmacy_name' => 'Cloghroe Pharmacy Limited', 'address' => 'Cloghroe', 'town' => 'Blarney', 'state' => 'CORK
'),
            array('id' => '1381', 'pharmacy_name' => 'Marion P. Hendrick B. Sc. Pharm. MPSI', 'address' => 'C/oTesco Dunlo Town Centre', 'town' => 'Ballinasloe', 'state' => 'GALWAY
'),
            array('id' => '1382', 'pharmacy_name' => 'First Choice Pharmacy Limited', 'address' => 'Tesco Store Distillery Road', 'town' => 'Wexford', 'state' => 'WEXFORD
'),
            array('id' => '1383', 'pharmacy_name' => 'Phelan\'s Pharmacy', 'address' => 'Unit 1 Mount Saint Anne\'s Dublin 6', 'town' => 'Milltown', 'state' => 'DUBLIN
'),
            array('id' => '1384', 'pharmacy_name' => 'Staunton\'s Allcare Pharmacy', 'address' => '148 Lower Salthill', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '1385', 'pharmacy_name' => 'Bridge Street Pharmacy Limited', 'address' => 'Bridge Street', 'town' => 'Abbeyfeale', 'state' => 'LIMERICK
'),
            array('id' => '1386', 'pharmacy_name' => 'Callan Pharmacy', 'address' => 'Friary Walk Shopping Centre', 'town' => 'Callan', 'state' => 'KILKENNY
'),
            array('id' => '1387', 'pharmacy_name' => 'Kelly\'s Pharmacy', 'address' => 'Unit 2B College House College Heights', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1388', 'pharmacy_name' => 'Martin\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Athboy', 'state' => 'MEATH
'),
            array('id' => '1389', 'pharmacy_name' => 'Cara Pharmacy Donegal Town', 'address' => 'Units 5 - 6 The Glebe Shopping Centre', 'town' => 'Donegal Town', 'state' => 'DONEGAL
'),
            array('id' => '1390', 'pharmacy_name' => 'Roberts Pharmacy & Optician', 'address' => '105 O\'Connell Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1391', 'pharmacy_name' => 'Grants Pharmacy Enniscorthy Limited', 'address' => '21-22 Duffry Gate', 'town' => 'Enniscorthy', 'state' => 'WEXFORD
'),
            array('id' => '1392', 'pharmacy_name' => 'Inish Pharmacy', 'address' => 'Main Street', 'town' => 'Muff', 'state' => 'DONEGAL
'),
            array('id' => '1393', 'pharmacy_name' => 'Burke\'s Life Pharmacy', 'address' => 'Wine Street', 'town' => 'Sligo', 'state' => 'SLIGO
'),
            array('id' => '1394', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Unit 1 Ground Floor Williamstown Centre Williamstown', 'town' => '"Williamstown', 'state' => ' Waterford"'),
            array('id' => '1395', 'pharmacy_name' => 'Boots', 'address' => 'The Harlequin Centre Lannagh Road', 'town' => 'Castlebar', 'state' => 'MAYO
'),
            array('id' => '1396', 'pharmacy_name' => 'Firgrove Pharmacy', 'address' => 'The Cornfields Curraheen Road', 'town' => 'Bishopstown', 'state' => 'CORK
'),
            array('id' => '1397', 'pharmacy_name' => 'Boots', 'address' => 'Unit C Blackpool Retail Park', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '1398', 'pharmacy_name' => 'Boots', 'address' => 'Unit 1 Monread Centre', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '1399', 'pharmacy_name' => 'Phelan\'s Pharmacy', 'address' => '633 South Circular Road Dublin 8', 'town' => 'Kilmainham', 'state' => 'DUBLIN
'),
            array('id' => '1400', 'pharmacy_name' => 'Moore\'s Pharmacy', 'address' => '6 Duke Street', 'town' => 'Athy', 'state' => 'KILDARE
'),
            array('id' => '1401', 'pharmacy_name' => 'The Rye Pharmacy', 'address' => 'Barnhall Shopping Centre', 'town' => 'Leixlip', 'state' => 'KILDARE
'),
            array('id' => '1402', 'pharmacy_name' => 'Barry\'s CarePlus Pharmacy', 'address' => '6 Cypress Park Dublin 6W', 'town' => 'Templeogue', 'state' => 'DUBLIN
'),
            array('id' => '1403', 'pharmacy_name' => 'Louth Village Pharmacy', 'address' => 'Main Street Louth Village', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1404', 'pharmacy_name' => 'Boots', 'address' => '9 Main Street', 'town' => 'Roscommon Town', 'state' => 'ROSCOMMON
'),
            array('id' => '1405', 'pharmacy_name' => 'Slane Pharmacy', 'address' => 'Collon Road', 'town' => 'Slane', 'state' => 'MEATH
'),
            array('id' => '1406', 'pharmacy_name' => 'Johnston\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Lanesboro', 'state' => 'LONGFORD
'),
            array('id' => '1407', 'pharmacy_name' => 'Advance Pharmacy', 'address' => '14 Lower Drumcondra Road Dublin 9', 'town' => 'Drumcondra', 'state' => 'DUBLIN
'),
            array('id' => '1408', 'pharmacy_name' => 'Boots', 'address' => 'Units 11 - 12 Millfield Shopping Centre', 'town' => 'Balbriggan', 'state' => 'DUBLIN
'),
            array('id' => '1409', 'pharmacy_name' => 'Phelan\'s Late Night Pharmacy', 'address' => '9 Patrick Street', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1410', 'pharmacy_name' => 'Frawley\'s Pharmacy', 'address' => 'Pound Street', 'town' => 'Rathdowney', 'state' => 'LAOIS
'),
            array('id' => '1411', 'pharmacy_name' => 'McElwee Pharmacy', 'address' => 'Davitt Shopping Centre Connolly Street', 'town' => 'Mountmellick', 'state' => 'LAOIS
'),
            array('id' => '1412', 'pharmacy_name' => 'Old Quarter Pharmacy', 'address' => 'Old Quarter', 'town' => 'Ballincollig', 'state' => 'CORK
'),
            array('id' => '1413', 'pharmacy_name' => 'Morrissey\'s Pharmacy', 'address' => 'Church Place', 'town' => 'Tullow', 'state' => 'CARLOW
'),
            array('id' => '1414', 'pharmacy_name' => 'Foody\'s Pharmacy', 'address' => 'Market Square', 'town' => 'Ballina', 'state' => 'MAYO
'),
            array('id' => '1415', 'pharmacy_name' => 'Thornhill Pharmacy', 'address' => 'Main Street', 'town' => 'Kildorrery', 'state' => 'CORK
'),
            array('id' => '1416', 'pharmacy_name' => 'Freshco Pharmacy', 'address' => 'Beechview Dublin Road', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '1417', 'pharmacy_name' => 'Boots', 'address' => 'Laois Shopping Centre', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '1418', 'pharmacy_name' => 'The Strand Pharmacy Limited', 'address' => 'Unit 1 149 North Strand Road Dublin 3', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1419', 'pharmacy_name' => 'Pharmacy Department - Marymount University Hospital & Hospice Limited', 'address' => 'Curraheen', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1420', 'pharmacy_name' => 'Ayrfield Pharmacy', 'address' => 'Granges Road', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '1421', 'pharmacy_name' => 'McCormack\'s Pharmacy', 'address' => '14 Selskar Street', 'town' => 'Wexford Town', 'state' => 'WEXFORD
'),
            array('id' => '1422', 'pharmacy_name' => 'Care Pharmacy', 'address' => '51 Main Street', 'town' => 'Ballybay', 'state' => 'MONAGHAN
'),
            array('id' => '1423', 'pharmacy_name' => 'Townparks Pharmacy', 'address' => 'Unit 2 Canessa Building Townparks', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1424', 'pharmacy_name' => 'Boots', 'address' => '91 Main Street', 'town' => 'Cavan Town', 'state' => 'CAVAN
'),
            array('id' => '1425', 'pharmacy_name' => 'Boots', 'address' => 'Units 2-3 Fair Green Plaza', 'town' => 'Macroom', 'state' => 'CORK
'),
            array('id' => '1426', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => '85 Terenure Road North Dublin 6', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1427', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 6 Johnstown Shopping Centre', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '1428', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 10 Main Street Dublin 15', 'town' => 'Ongar Village', 'state' => 'DUBLIN
'),
            array('id' => '1429', 'pharmacy_name' => 'Cleary\'s Pharmacy', 'address' => 'Unit 1 Strand Centre Strand Road', 'town' => 'Portmarnock', 'state' => 'DUBLIN
'),
            array('id' => '1430', 'pharmacy_name' => 'Tesco Pharmacy', 'address' => 'Millfield Shopping Centre Naul Road', 'town' => 'Balbriggan', 'state' => 'DUBLIN
'),
            array('id' => '1431', 'pharmacy_name' => 'Tesco Pharmacy', 'address' => 'Monread Road', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '1432', 'pharmacy_name' => 'Boots', 'address' => '134-135 Lower Baggot Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1433', 'pharmacy_name' => 'Flynn\'s Medical Hall', 'address' => 'Main Street', 'town' => 'Rathdowney', 'state' => 'LAOIS
'),
            array('id' => '1434', 'pharmacy_name' => 'Kinsella\'s Pharmacy', 'address' => 'Willow Court Primrose Gate Donaghcumper', 'town' => 'Celbridge', 'state' => 'KILDARE
'),
            array('id' => '1435', 'pharmacy_name' => 'McSharry\'s Pharmacy Westside', 'address' => 'Unit 1 Westside Shopping Centre Westside', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '1436', 'pharmacy_name' => 'McSharry\'s Pharmacy Knocknacarra', 'address' => 'Unit 5 Gateway Shopping Centre Knocknacarra', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '1437', 'pharmacy_name' => 'McSharry\'s Pharmacy Terryland', 'address' => 'Units 2 -3 Terryland Shopping Centre Headford Road', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '1438', 'pharmacy_name' => 'Boots', 'address' => '85-86 Main Street', 'town' => 'Gorey', 'state' => 'WEXFORD
'),
            array('id' => '1439', 'pharmacy_name' => 'Boots', 'address' => 'Units 14 - 15 Whitewater Shopping Centre', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '1440', 'pharmacy_name' => 'Crowley\'s Pharmacy', 'address' => 'Supervalue Shopping Centre Fax Bridge Cork Road', 'town' => 'Clonakilty', 'state' => 'CORK
'),
            array('id' => '1441', 'pharmacy_name' => 'Irwin\'s Pharmacies', 'address' => 'Mayfield Shopping Centre Mayfield', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1442', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => '4 Landscape Road Dublin 14', 'town' => 'Churchtown', 'state' => 'DUBLIN
'),
            array('id' => '1443', 'pharmacy_name' => 'Granard Pharmacy', 'address' => '47 Main Street', 'town' => 'Granard', 'state' => 'LONGFORD
'),
            array('id' => '1444', 'pharmacy_name' => 'Tesco Pharmacy', 'address' => 'Portlaoise Shopping Centre James Fintan Lawlor Avenue', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '1445', 'pharmacy_name' => 'Glenheights Pharmacy', 'address' => '4 College Shopping Centre', 'town' => 'Ballyvolane', 'state' => 'CORK
'),
            array('id' => '1446', 'pharmacy_name' => 'Haughey\'s Pharmacy', 'address' => 'Units 2 - 3 Demesne Shopping Centre', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1447', 'pharmacy_name' => 'Palmerstown Pharmacy', 'address' => 'Unit 3 Aldi Complex Old Lucan Road Dublin 20', 'town' => 'Palmerstown', 'state' => 'DUBLIN
'),
            array('id' => '1448', 'pharmacy_name' => 'Arthur Kennedy Chemist Limited', 'address' => 'Main Street', 'town' => 'Hacketstown', 'state' => 'CARLOW
'),
            array('id' => '1449', 'pharmacy_name' => 'Deasy\'s Pharmacy', 'address' => 'The Old Dispensary Middle Square', 'town' => 'Macroom', 'state' => 'CORK
'),
            array('id' => '1450', 'pharmacy_name' => 'Boots', 'address' => '105 Main Street', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '1451', 'pharmacy_name' => 'Kenny\'s Pharmacy', 'address' => 'Elm Park Ring Road', 'town' => 'Tramore', 'state' => 'WATERFORD
'),
            array('id' => '1452', 'pharmacy_name' => 'Lynch\'s Pharmacy', 'address' => '9 Lower Main Street', 'town' => 'Castleisland', 'state' => 'KERRY
'),
            array('id' => '1453', 'pharmacy_name' => 'Haven Pharmacy O\'Connell\'s', 'address' => '89 High Street', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '1454', 'pharmacy_name' => 'Guerin\'s Pharmacy Limited', 'address' => '7 Mitchel Street', 'town' => 'Nenagh', 'state' => 'TIPPERARY
'),
            array('id' => '1455', 'pharmacy_name' => 'McSharry\'s Pharmacy', 'address' => 'Golden Island', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '1456', 'pharmacy_name' => 'Ardfallen Late Night Pharmacy', 'address' => 'Unit 2 Ardfallen Mall Douglas Road', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1457', 'pharmacy_name' => 'Riverstown Pharmacy', 'address' => 'Ardkeeran', 'town' => 'Riverstown', 'state' => 'SLIGO
'),
            array('id' => '1458', 'pharmacy_name' => 'Lalor\'s Pharmacy', 'address' => '69 Collins Avenue West Dublin 9', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1459', 'pharmacy_name' => 'Tierney\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Rathdrum', 'state' => 'WICKLOW
'),
            array('id' => '1460', 'pharmacy_name' => 'Foley\'s of Clontarf', 'address' => '63 Clontarf Road Dublin 3', 'town' => 'Clontarf', 'state' => 'DUBLIN
'),
            array('id' => '1461', 'pharmacy_name' => 'Cahill\'s Pharmacy', 'address' => 'St. Mary\'s Road', 'town' => 'Newcastle West', 'state' => 'LIMERICK
'),
            array('id' => '1462', 'pharmacy_name' => 'Boots', 'address' => 'Units 1 - 3 Block B Phibsboro Place 149-158 Dublin 7', 'town' => 'Phibsboro', 'state' => 'DUBLIN
'),
            array('id' => '1463', 'pharmacy_name' => 'Monksland Pharmacy', 'address' => 'Unit 1 Block B Monksland Business Park', 'town' => 'Athlone', 'state' => 'ROSCOMMON
'),
            array('id' => '1464', 'pharmacy_name' => 'MacAuliffe\'s Pharmacy', 'address' => 'Church Street', 'town' => 'Strokestown', 'state' => 'ROSCOMMON
'),
            array('id' => '1465', 'pharmacy_name' => 'Bridgetown Pharmacy', 'address' => 'Bridgetown South', 'town' => 'Bridgetown', 'state' => 'WEXFORD
'),
            array('id' => '1466', 'pharmacy_name' => 'H. & M. Curley Limited', 'address' => 'Main Street', 'town' => 'Ballyhaunis', 'state' => 'MAYO
'),
            array('id' => '1467', 'pharmacy_name' => 'Athenry Pharmacy', 'address' => 'Old Church Street', 'town' => 'Athenry', 'state' => 'GALWAY
'),
            array('id' => '1468', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => 'Kings Island Medical Centre Kings Island', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1469', 'pharmacy_name' => 'Ardee Pharmacy', 'address' => 'Unit 1 Ashwalk Mews Ashwalk', 'town' => 'Ardee', 'state' => 'LOUTH
'),
            array('id' => '1470', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Unit 18 The Showgrounds Shopping Centre', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '1471', 'pharmacy_name' => 'Boots', 'address' => '21 Pearse Street', 'town' => 'Ballina', 'state' => 'MAYO
'),
            array('id' => '1472', 'pharmacy_name' => 'Dunaree Pharmacy', 'address' => 'Lisaniskey Kells Road', 'town' => 'Kingscourt', 'state' => 'CAVAN
'),
            array('id' => '1473', 'pharmacy_name' => 'The Rise Pharmacy', 'address' => 'Unit 1 The Rise Dublin 9', 'town' => 'Glasnevin', 'state' => 'DUBLIN
'),
            array('id' => '1474', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Unit 1 Davis Road Shopping Centre', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '1475', 'pharmacy_name' => 'Cara Pharmacy', 'address' => 'Main Street', 'town' => 'Killybegs', 'state' => 'DONEGAL
'),
            array('id' => '1476', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => 'Knightsbridge Nursing Home', 'town' => 'Trim', 'state' => 'MEATH
'),
            array('id' => '1477', 'pharmacy_name' => 'Kelly\'s Allcare Pharmacy', 'address' => '9 The Mall', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '1478', 'pharmacy_name' => 'Flanagan\'s Instore Pharmacy', 'address' => 'Clearwater Shopping Centre Dublin 11', 'town' => 'Finglas', 'state' => 'DUBLIN
'),
            array('id' => '1479', 'pharmacy_name' => 'Castletroy Park Pharmacy Retail Limited', 'address' => 'Unit 5 Castletroy Park Business Centre Plassey Road', 'town' => 'Castletroy', 'state' => 'LIMERICK
'),
            array('id' => '1480', 'pharmacy_name' => 'Johnston\'s Express Pharmacy', 'address' => 'Leader House Teffia Park', 'town' => 'Longford Town', 'state' => 'LONGFORD
'),
            array('id' => '1481', 'pharmacy_name' => 'Rathmullan Pharmacy', 'address' => 'Pier Road', 'town' => 'Rathmullan', 'state' => 'DONEGAL
'),
            array('id' => '1482', 'pharmacy_name' => 'Friary Pharmacy', 'address' => '12 Main Street', 'town' => 'Cashel', 'state' => 'TIPPERARY
'),
            array('id' => '1483', 'pharmacy_name' => 'McMenamin\'s Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Killeshandra', 'state' => 'CAVAN
'),
            array('id' => '1484', 'pharmacy_name' => 'Maxwell\'s Pharmacy', 'address' => 'Unit 6  Orwell Shopping Centre Dublin 6', 'town' => 'Templeogue', 'state' => 'DUBLIN
'),
            array('id' => '1485', 'pharmacy_name' => 'Blackbull Pharmacy', 'address' => 'Colpe Road', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '1486', 'pharmacy_name' => 'Haven Pharmacy Burke\'s', 'address' => 'North Square', 'town' => 'Macroom', 'state' => 'CORK
'),
            array('id' => '1487', 'pharmacy_name' => 'Varden\'s Pharmacy', 'address' => '', 'town' => 'Newmarket-on-Fergus', 'state' => 'CLARE
'),
            array('id' => '1488', 'pharmacy_name' => 'Allcare Pharmacy Crumlin', 'address' => '66 St Agnes Road Crumlin Dublin 12', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1489', 'pharmacy_name' => 'Brett\'s Allcare Pharmacy', 'address' => '49 Connaught Street', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '1490', 'pharmacy_name' => 'Saggart Pharmacy', 'address' => '12 Slade Castle Court', 'town' => 'Saggart', 'state' => 'DUBLIN
'),
            array('id' => '1491', 'pharmacy_name' => 'McCormack\'s Pharmacy', 'address' => '23 Bolton Street & 27 William Street', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '1492', 'pharmacy_name' => 'MacAuliffe\'s Pharmacy Castlebar', 'address' => 'Station Road', 'town' => 'Castlebar', 'state' => 'MAYO
'),
            array('id' => '1493', 'pharmacy_name' => 'Boots', 'address' => 'Unit 27  The Mill Shopping Centre Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '1494', 'pharmacy_name' => 'Faythe Pharmacy', 'address' => '178 The Faythe', 'town' => 'Wexford Town', 'state' => 'WEXFORD
'),
            array('id' => '1495', 'pharmacy_name' => 'Ros Med Pharmacy', 'address' => 'Golf Links Road', 'town' => 'Roscommon', 'state' => 'ROSCOMMON
'),
            array('id' => '1496', 'pharmacy_name' => 'Tesco Pharmacy', 'address' => 'Newbridge Moorfield Cork Road', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '1497', 'pharmacy_name' => 'Thomas Street Pharmacy', 'address' => '55 Thomas Street Dublin 8', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1498', 'pharmacy_name' => 'The Burren Pharmacy', 'address' => 'The Square', 'town' => 'Lisdoonvarna', 'state' => 'CLARE
'),
            array('id' => '1499', 'pharmacy_name' => 'Boots', 'address' => 'Units 223-224 Blanchardstown Centre Dublin 15', 'town' => 'Blanchardstown', 'state' => 'DUBLIN
'),
            array('id' => '1500', 'pharmacy_name' => 'Dromahair Pharmacy', 'address' => 'Church Road', 'town' => 'Dromahair', 'state' => 'LEITRIM
'),
            array('id' => '1501', 'pharmacy_name' => 'Cassidy\'s Pharmacy', 'address' => '6 - 10 O\'Connell Street', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '1502', 'pharmacy_name' => 'Charlotte Quay Pharmacy', 'address' => 'Charlotte Quay', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1503', 'pharmacy_name' => 'Tohers the Chemists', 'address' => '24 O\'Connell Street', 'town' => 'Sligo', 'state' => 'SLIGO
'),
            array('id' => '1504', 'pharmacy_name' => 'Collooney Pharmacy', 'address' => 'Main Street', 'town' => 'Collooney', 'state' => 'SLIGO
'),
            array('id' => '1505', 'pharmacy_name' => 'O\'Hara\'s Pharmacy', 'address' => '14-16 Redmond\'s Hill Aungier Street Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1506', 'pharmacy_name' => 'Cleary\'s Pharmacy', 'address' => '5 Irish Life Mall Talbot Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1507', 'pharmacy_name' => 'Bermingham\'s Pharmacy', 'address' => '8 Patrick Street', 'town' => 'Fermoy', 'state' => 'CORK
'),
            array('id' => '1508', 'pharmacy_name' => 'O\'Riordan\'s Pharmacy Ballingarry', 'address' => 'Main Street', 'town' => 'Ballingarry', 'state' => 'LIMERICK
'),
            array('id' => '1509', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Unit 4 Shamrock Plaza', 'town' => 'Carlow', 'state' => 'CARLOW
'),
            array('id' => '1510', 'pharmacy_name' => 'Procare Pharmacy U.C.D.', 'address' => 'U.C.D. Student Centre U.C.D. Dublin 4', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1511', 'pharmacy_name' => 'Pure Pharmacy', 'address' => '4 Bakers\'s Yard Portland Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1512', 'pharmacy_name' => 'Baxter Healthcare', 'address' => '7 Deansgrange Business Park', 'town' => 'Blackrock', 'state' => 'DUBLIN
'),
            array('id' => '1513', 'pharmacy_name' => 'Kilmeaden Pharmacy', 'address' => '', 'town' => 'Kilmeaden', 'state' => 'WATERFORD
'),
            array('id' => '1514', 'pharmacy_name' => 'Walsh\'s Pharmacy', 'address' => '256 Old Youghal Road Dillon\'s Cross', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '1515', 'pharmacy_name' => 'Thurles Pharmacy', 'address' => 'Unit 5  Thurles Shopping Centre', 'town' => 'Thurles', 'state' => 'TIPPERARY
'),
            array('id' => '1516', 'pharmacy_name' => 'Boots', 'address' => 'Ground Floor 108 - 109 Davis Street', 'town' => 'Mallow', 'state' => 'CORK
'),
            array('id' => '1517', 'pharmacy_name' => 'Swords Castle Pharmacy', 'address' => 'Bridge Street Castle Shopping Centre', 'town' => 'Swords', 'state' => 'DUBLIN
'),
            array('id' => '1518', 'pharmacy_name' => 'Boots', 'address' => 'Units 36 - 39 Galway Shopping Centre Headford Road', 'town' => '"Headford Road', 'state' => ' Galway"'),
            array('id' => '1519', 'pharmacy_name' => 'Fennell\'s Pharmacy', 'address' => 'O\'Connell Square', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '1520', 'pharmacy_name' => 'Clontarf Hospital Pharmacy', 'address' => 'Castle Avenue Dublin 3', 'town' => 'Clontarf', 'state' => 'DUBLIN
'),
            array('id' => '1521', 'pharmacy_name' => 'Clarina Pharmacy Limited', 'address' => 'Clarina Village', 'town' => 'Clarina', 'state' => 'LIMERICK
'),
            array('id' => '1522', 'pharmacy_name' => 'The Village Pharmacy', 'address' => 'Main Street', 'town' => 'Mountcharles', 'state' => 'DONEGAL
'),
            array('id' => '1523', 'pharmacy_name' => 'H.S.E. Pharmacy', 'address' => 'St. Stephen\'s Hospital', 'town' => 'Glanmire', 'state' => 'CORK
'),
            array('id' => '1524', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '292 Ballyfermot Road Dublin 10', 'town' => 'Ballyfermot', 'state' => 'DUBLIN
'),
            array('id' => '1525', 'pharmacy_name' => 'Ryan\'s Pharmacy G.S.C.', 'address' => 'Unit 1 Greendale Shopping Centre Dublin 5', 'town' => 'Kilbarrack', 'state' => 'DUBLIN
'),
            array('id' => '1526', 'pharmacy_name' => 'Fallon\'s Pharmacy', 'address' => '47 John Street', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '1527', 'pharmacy_name' => 'Drom Pharmacy', 'address' => 'North Road', 'town' => 'Dromcollogher', 'state' => 'LIMERICK
'),
            array('id' => '1528', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => 'Unit 4 Connolly Court Hillside', 'town' => 'Cavan', 'state' => 'CAVAN
'),
            array('id' => '1529', 'pharmacy_name' => 'Brett\'s Pharmacy', 'address' => 'Teeling Street Tubbercurry  Co. Sligo', 'town' => 'Tubbercurry', 'state' => 'SLIGO
'),
            array('id' => '1530', 'pharmacy_name' => 'Dromore West Pharmacy', 'address' => '', 'town' => 'Dromore West', 'state' => 'SLIGO
'),
            array('id' => '1531', 'pharmacy_name' => 'Grange Pharmacy', 'address' => '2 Clonkeen Road', 'town' => 'Deansgrange', 'state' => 'DUBLIN
'),
            array('id' => '1532', 'pharmacy_name' => 'Berney\'s Chemist', 'address' => 'Main Street', 'town' => 'Kilcullen', 'state' => 'KILDARE
'),
            array('id' => '1533', 'pharmacy_name' => 'Sheridan\'s Pharmacy', 'address' => 'Unit 0 Roselawn Shopping Centre Roselawn Dublin 15', 'town' => 'Blanchardstown', 'state' => 'DUBLIN
'),
            array('id' => '1534', 'pharmacy_name' => 'Tracey\'s Pharmacy', 'address' => '18 Eden Quay Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1535', 'pharmacy_name' => 'Kill Pharmacy', 'address' => 'Clarendon Court Main Street', 'town' => 'Kill', 'state' => 'KILDARE
'),
            array('id' => '1536', 'pharmacy_name' => 'Michael Hanley Chemists Limited', 'address' => '20 Shannon Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1537', 'pharmacy_name' => 'Farrell\'s Pharmacy Longwood Limited', 'address' => 'The Health Centre', 'town' => 'Longwood', 'state' => 'MEATH
'),
            array('id' => '1538', 'pharmacy_name' => 'O.D.C. Pharmacy', 'address' => 'Kilnamanagh Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '1539', 'pharmacy_name' => 'Staunton\'s Pharmacy ', 'address' => 'Main Street', 'town' => 'Castlebar', 'state' => 'MAYO
'),
            array('id' => '1540', 'pharmacy_name' => 'Staunton\'s Allcare Pharmacy', 'address' => 'New Antrim Street', 'town' => 'Castlebar', 'state' => 'MAYO
'),
            array('id' => '1541', 'pharmacy_name' => 'Breslin\'s Pharmacy', 'address' => '86 Main Street', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '1542', 'pharmacy_name' => 'Drinagh Pharmacy', 'address' => 'Sackville Street', 'town' => 'Dunmanway', 'state' => 'CORK
'),
            array('id' => '1543', 'pharmacy_name' => 'Griffin\'s Life Pharmacy', 'address' => '79  Oaklawn 0', 'town' => 'Leixlip', 'state' => 'KILDARE
'),
            array('id' => '1544', 'pharmacy_name' => 'Aghada Pharmacy', 'address' => '1 Lower Aghada', 'town' => 'Aghada', 'state' => 'CORK
'),
            array('id' => '1545', 'pharmacy_name' => 'Breslin & McGreal Pharmacy', 'address' => 'Primary Care Centre', 'town' => 'Portarlington', 'state' => 'LAOIS
'),
            array('id' => '1546', 'pharmacy_name' => 'Griffin\'s Pharmacy Limited', 'address' => '1  The Mall0', 'town' => 'Lucan', 'state' => 'DUBLIN
'),
            array('id' => '1547', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => 'Unit 10 Meakstown Neighbourhood Centre Meakstown Dublin 11', 'town' => '"Meakstown', 'state' => ' Finglas"'),
            array('id' => '1548', 'pharmacy_name' => 'Staunton\'s Link Pharmacy', 'address' => 'Hopkins Road', 'town' => 'Castlebar', 'state' => 'MAYO
'),
            array('id' => '1549', 'pharmacy_name' => 'Scanlon\'s Late Night Pharmacy', 'address' => 'Unit 6 Chawkes  Castletroy', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1550', 'pharmacy_name' => 'Health 1st Pharmacy', 'address' => '7 - 8 Church Square', 'town' => 'Monaghan Town', 'state' => 'MONAGHAN
'),
            array('id' => '1551', 'pharmacy_name' => 'Blessington Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Blessington', 'state' => 'WICKLOW
'),
            array('id' => '1552', 'pharmacy_name' => 'Gleeson\'s Pharmacy', 'address' => 'The Mall Vicar Street', 'town' => 'Tuam', 'state' => 'GALWAY
'),
            array('id' => '1553', 'pharmacy_name' => 'Mangan\'s Allcare Pharmacy', 'address' => 'Station Road', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '1554', 'pharmacy_name' => 'Bellview Pharmacy', 'address' => 'Old County Library', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '1555', 'pharmacy_name' => 'Glengarriff Pharmacy', 'address' => 'Main Street', 'town' => 'Glengarriff', 'state' => 'CORK
'),
            array('id' => '1556', 'pharmacy_name' => 'Reilly\'s Pharmacy', 'address' => 'Unit 2 Bertram Court Cornmarket Dublin 8', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1557', 'pharmacy_name' => 'Chemco Pharmacy', 'address' => 'New Road', 'town' => 'Bandon', 'state' => 'CORK
'),
            array('id' => '1558', 'pharmacy_name' => 'Brecan Pharmacy', 'address' => 'Unit 2 Brecan House', 'town' => 'Balbriggan', 'state' => 'DUBLIN
'),
            array('id' => '1559', 'pharmacy_name' => 'MacMahon\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Kildysart', 'state' => 'CLARE
'),
            array('id' => '1560', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => '3 Cardiffsbridge Road Dublin 11', 'town' => 'Finglas', 'state' => 'DUBLIN
'),
            array('id' => '1561', 'pharmacy_name' => 'O\'Flynn\'s Allcare Pharmacy', 'address' => 'Castle Street', 'town' => 'Ardee', 'state' => 'LOUTH
'),
            array('id' => '1562', 'pharmacy_name' => 'Pure Pharmacy', 'address' => 'Unit 2 Phoenix Shopping Centre Dublin 10', 'town' => 'Ballyfermot', 'state' => 'DUBLIN
'),
            array('id' => '1563', 'pharmacy_name' => 'Total Care Pharmacy', 'address' => 'Old McCabes Building Castle Street', 'town' => 'Ardee', 'state' => 'LOUTH
'),
            array('id' => '1564', 'pharmacy_name' => 'Go West Pharmacy', 'address' => 'Unit 4 West City Centre Seamus Quirke Road', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '1565', 'pharmacy_name' => 'Lynch\'s totalhealth Pharmacy', 'address' => 'Farrell Street', 'town' => 'Kells', 'state' => 'MEATH
'),
            array('id' => '1566', 'pharmacy_name' => 'Walsh\'s Allcare Pharmacy ', 'address' => 'The Bridge Main Street', 'town' => 'Carrigaline', 'state' => 'CORK
'),
            array('id' => '1567', 'pharmacy_name' => 'Matt O\'Flaherty Pharmacy', 'address' => 'An Creagan', 'town' => 'Barna', 'state' => 'GALWAY
'),
            array('id' => '1568', 'pharmacy_name' => 'Roche\'s Allcare Pharmacy', 'address' => '14 Main Street', 'town' => 'Gorey', 'state' => 'WEXFORD
'),
            array('id' => '1569', 'pharmacy_name' => 'Dalton\'s Pharmacy', 'address' => 'Teach an Chuinne Barrick Street', 'town' => 'Fethard', 'state' => 'TIPPERARY
'),
            array('id' => '1570', 'pharmacy_name' => 'Kelleher\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Ballincollig', 'state' => 'CORK
'),
            array('id' => '1571', 'pharmacy_name' => 'Kenlis totalhealth Pharmacy', 'address' => 'Cannon Street', 'town' => 'Kells', 'state' => 'MEATH
'),
            array('id' => '1572', 'pharmacy_name' => 'Bourke\'s Pharmacy', 'address' => 'Iona Park  Mayfield', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1573', 'pharmacy_name' => 'Clonaslee Pharmacy', 'address' => 'Main Street', 'town' => 'Clonaslee', 'state' => 'LAOIS
'),
            array('id' => '1574', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => 'Tesco Ardkeen Farrohenshannon Ardkeen', 'town' => 'Waterford', 'state' => 'WATERFORD
'),
            array('id' => '1575', 'pharmacy_name' => 'Mulligan\'s Pharmacy ', 'address' => 'Mulligan\'s Pharmacy Tesco Ballybeg Ballybeg Link Road', 'town' => 'Ballybeg', 'state' => 'WATERFORD
'),
            array('id' => '1576', 'pharmacy_name' => 'Fairgreen Pharmacy', 'address' => 'Fairgreen', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '1577', 'pharmacy_name' => 'Cara Pharmacy Longford', 'address' => '12 Main Street', 'town' => 'Longford', 'state' => 'LONGFORD
'),
            array('id' => '1578', 'pharmacy_name' => 'Mullagh Pharmacy', 'address' => 'Main Street', 'town' => 'Mullagh', 'state' => 'CAVAN
'),
            array('id' => '1579', 'pharmacy_name' => 'McSharry\'s Pharmacy', 'address' => 'Athenry Primary Care Unit Raheen', 'town' => 'Athenry', 'state' => 'GALWAY
'),
            array('id' => '1580', 'pharmacy_name' => 'Holly\'s Pharmacy', 'address' => 'Unit 8 Centrepoint Liosban Industrial Estate Tuam Road', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '1581', 'pharmacy_name' => 'Windmill Pharmacy', 'address' => '15-17 New Street Windmill Lane', 'town' => 'Skerries', 'state' => 'DUBLIN
'),
            array('id' => '1582', 'pharmacy_name' => 'McGreal\'s Pharmacy', 'address' => 'Curragh Grange', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '1583', 'pharmacy_name' => 'Quirke\'s Pharmacy', 'address' => '53 O\'Connell Street', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '1584', 'pharmacy_name' => 'Boots', 'address' => 'Units 48-49 Mahon Point Shopping Centre', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '1585', 'pharmacy_name' => 'Whelan\'s Pharmacy', 'address' => 'Unit 1 & 5 Puigin Court St. Michael\'s Road', 'town' => 'Gorey', 'state' => 'WEXFORD
'),
            array('id' => '1586', 'pharmacy_name' => 'Abbey Street Pharmacy Limited', 'address' => '42 Abbey Street', 'town' => 'Wexford Town', 'state' => 'WEXFORD
'),
            array('id' => '1587', 'pharmacy_name' => 'Murroe Pharmacy', 'address' => 'Main Street', 'town' => 'Murroe', 'state' => 'LIMERICK
'),
            array('id' => '1588', 'pharmacy_name' => 'Cappagh Pharmacy', 'address' => 'Unit 5 The Shops Barry Avenue Dublin 11', 'town' => 'Finglas', 'state' => 'DUBLIN
'),
            array('id' => '1589', 'pharmacy_name' => 'Boots', 'address' => 'Unit 1 Ground Floor Grange Clinic Grange Road Dublin 13', 'town' => 'Donaghmede', 'state' => 'DUBLIN
'),
            array('id' => '1590', 'pharmacy_name' => 'McDaid\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Kilnaleck', 'state' => 'CAVAN
'),
            array('id' => '1591', 'pharmacy_name' => 'Dalton\'s Pharmacy', 'address' => 'Unit 11 -12 North Main Street Shopping Centre North Main Street', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '1592', 'pharmacy_name' => 'Noreen Collins Pharmacy', 'address' => 'Killarney Road', 'town' => 'Abbeyfeale', 'state' => 'LIMERICK
'),
            array('id' => '1593', 'pharmacy_name' => 'Cara Pharmacy Galway', 'address' => '35  Barrack Lane William Street', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '1594', 'pharmacy_name' => 'A & A Pharmacy', 'address' => '21 William Street', 'town' => 'Athy', 'state' => 'KILDARE
'),
            array('id' => '1595', 'pharmacy_name' => 'Young\'s Life Pharmacy', 'address' => '1 Charlotte Street', 'town' => 'Newbridge', 'state' => 'KILDARE
'),
            array('id' => '1596', 'pharmacy_name' => 'Mullins Pharmacy', 'address' => 'O\'Brien Street', 'town' => 'Kanturk', 'state' => 'CORK
'),
            array('id' => '1597', 'pharmacy_name' => 'Castle Pharmacy', 'address' => 'Main Street', 'town' => 'Castlemartyr', 'state' => 'CORK
'),
            array('id' => '1598', 'pharmacy_name' => 'Woods Pharmacy', 'address' => 'Dominick Street', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '1599', 'pharmacy_name' => 'Tesco Pharmacy', 'address' => 'The Square Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '1600', 'pharmacy_name' => 'Haven Pharmacy Greenes', 'address' => '36 Main Street Dublin 14', 'town' => 'Rathfarnham', 'state' => 'DUBLIN
'),
            array('id' => '1601', 'pharmacy_name' => 'Pillbox Express Pharmacy', 'address' => 'Station Road', 'town' => 'Bundoran', 'state' => 'DONEGAL
'),
            array('id' => '1602', 'pharmacy_name' => 'Boots', 'address' => 'Unit 245 Level 2 The Square Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '1603', 'pharmacy_name' => 'Ballybane Pharmacy', 'address' => 'Unit 4 Ballybane Shopping Centre Ballybane', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '1604', 'pharmacy_name' => 'Hickey\'s Pharmacy', 'address' => '290 Harold\'s Cross Road Dublin 6', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1605', 'pharmacy_name' => 'Austin Friars Pharmacy', 'address' => 'The Dispensary Austin Friars Street', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '1606', 'pharmacy_name' => 'Castletown Pharmacy', 'address' => 'Main Street', 'town' => 'Celbridge', 'state' => 'KILDARE
'),
            array('id' => '1607', 'pharmacy_name' => 'Brosnan\'s Pharmacy', 'address' => '36 Main Street', 'town' => 'Midleton', 'state' => 'CORK
'),
            array('id' => '1608', 'pharmacy_name' => 'Boots ', 'address' => 'Unit 12B Abbey Court Central Plaza', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '1609', 'pharmacy_name' => 'Hamilton\'s Pharmacy', 'address' => '74 Bridge Street', 'town' => 'Skibbereen', 'state' => 'CORK
'),
            array('id' => '1610', 'pharmacy_name' => 'Boots', 'address' => '12-13 South Main Street', 'town' => 'Bandon', 'state' => 'CORK
'),
            array('id' => '1611', 'pharmacy_name' => 'Ryan\'s Pharmacy (Thurles) Limited', 'address' => 'Kickham Street', 'town' => 'Thurles', 'state' => 'TIPPERARY
'),
            array('id' => '1612', 'pharmacy_name' => 'Irishtown Pharmacy', 'address' => '15 The Irishtown', 'town' => 'New Ross', 'state' => 'WEXFORD
'),
            array('id' => '1613', 'pharmacy_name' => 'O\'Flaherty\'s Pharmacy', 'address' => 'Units 14 - 15 Athenry Shopping Centre', 'town' => 'Athenry', 'state' => 'GALWAY
'),
            array('id' => '1614', 'pharmacy_name' => 'Healthwave', 'address' => 'Unit 2.4 Dundrum Office Retail Park Sandyford Road Dublin 16', 'town' => 'Dundrum', 'state' => 'DUBLIN
'),
            array('id' => '1615', 'pharmacy_name' => 'Clockgate Pharmacy', 'address' => '76 North Main Street', 'town' => 'Youghal', 'state' => 'CORK
'),
            array('id' => '1616', 'pharmacy_name' => 'McGorisk\'s Pharmacy', 'address' => 'Athlone Primary Care Centre Clonbrusk', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '1617', 'pharmacy_name' => 'Mary Street Pharmacy', 'address' => 'Mary Street Pharmacy Mary Street', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '1618', 'pharmacy_name' => 'Mihealth Pharmacy', 'address' => 'Unit 4A The Kyle Centre', 'town' => 'Portlaoise', 'state' => 'LAOIS
'),
            array('id' => '1619', 'pharmacy_name' => 'Douglas Road Pharmacy', 'address' => 'Douglas Road', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1620', 'pharmacy_name' => 'Chemco Pharmacy', 'address' => 'Supervalu Shopping Centre Dublin Road', 'town' => 'Celbridge', 'state' => 'KILDARE
'),
            array('id' => '1621', 'pharmacy_name' => 'Craughwell Pharmacy', 'address' => 'Main Street.', 'town' => 'Craughwell', 'state' => 'GALWAY
'),
            array('id' => '1622', 'pharmacy_name' => 'Backhouse Pharmacy Limited', 'address' => '71 Clanbrassil Street', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1623', 'pharmacy_name' => 'Gaffney\'s Allcare Pharmacy', 'address' => '46 Main Street', 'town' => 'Leixlip', 'state' => 'KILDARE
'),
            array('id' => '1624', 'pharmacy_name' => 'Sallins Pharmacy', 'address' => 'Clane Road', 'town' => 'Sallins', 'state' => 'KILDARE
'),
            array('id' => '1625', 'pharmacy_name' => 'Kildare Pharmacy', 'address' => 'Unit 2 Tesco Centre Monasterevin Road', 'town' => 'Kildare Town', 'state' => 'KILDARE
'),
            array('id' => '1626', 'pharmacy_name' => 'Naas Pharmacy Limited', 'address' => 'The Crossings Dublin Road', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '1627', 'pharmacy_name' => 'O\'Donoghue\'s Pharmacy', 'address' => '64 Boherbee', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '1628', 'pharmacy_name' => 'Laune Pharmacy', 'address' => 'Market Street', 'town' => 'Killorglin', 'state' => 'KERRY
'),
            array('id' => '1629', 'pharmacy_name' => 'Tesco Pharmacy', 'address' => 'Tesco Extra Ramstown Lower Wexford Road', 'town' => 'Gorey', 'state' => 'WEXFORD
'),
            array('id' => '1630', 'pharmacy_name' => 'McFadden\'s Pharmacy', 'address' => '1A Prussia Street Dublin 7', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1631', 'pharmacy_name' => 'Phelan\'s Pharmacy', 'address' => '3 Lower Kilmacud Road', 'town' => 'Stillorgan', 'state' => 'DUBLIN
'),
            array('id' => '1632', 'pharmacy_name' => 'Doon Pharmacy', 'address' => 'Bank Place Main Street', 'town' => 'Doon', 'state' => 'LIMERICK
'),
            array('id' => '1633', 'pharmacy_name' => 'Dodd\'s Pharmacy', 'address' => 'Mountkennedy Town Centre', 'town' => 'Newtownmountkennedy', 'state' => 'WICKLOW
'),
            array('id' => '1634', 'pharmacy_name' => 'Ward\'s Pharmacy', 'address' => '48 O\'Connell Street', 'town' => 'Sligo Town', 'state' => 'SLIGO
'),
            array('id' => '1635', 'pharmacy_name' => 'Burns Pharmacy', 'address' => 'Balloonagh Medical Centre Balloonagh Estate', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '1636', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Unit 8 Centrepoint Castletroy Shopping Centre', 'town' => 'Castletroy', 'state' => 'LIMERICK
'),
            array('id' => '1637', 'pharmacy_name' => 'Treacy\'s Pharmacy Westport', 'address' => 'James Street', 'town' => 'Westport', 'state' => 'MAYO
'),
            array('id' => '1638', 'pharmacy_name' => 'Mary Street Pharmacy', 'address' => '26 Mary Street', 'town' => 'Clonmel', 'state' => 'TIPPERARY
'),
            array('id' => '1639', 'pharmacy_name' => 'Reens Pharmacy', 'address' => 'Main Street', 'town' => 'Millstreet', 'state' => 'CORK
'),
            array('id' => '1640', 'pharmacy_name' => 'Prescription Services Limited (Reddy\'s Pharmacy)', 'address' => '167 St. Mobhi Road Dublin 9', 'town' => 'Glasnevin', 'state' => 'DUBLIN
'),
            array('id' => '1641', 'pharmacy_name' => 'Monasterevin Pharmacy Limited', 'address' => 'Unit 3 Watermill Place', 'town' => 'Monasterevin', 'state' => 'KILDARE
'),
            array('id' => '1642', 'pharmacy_name' => 'Walsh\'s Pharmacy Midleton', 'address' => '50 Main Street', 'town' => 'Midleton', 'state' => 'CORK
'),
            array('id' => '1643', 'pharmacy_name' => 'Haven Pharmacy', 'address' => 'Supervalu Complex Austin Friars Street', 'town' => 'Mullingar', 'state' => 'WESTMEATH
'),
            array('id' => '1644', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Rosslare Shopping Centre', 'town' => 'Rosslare Harbour', 'state' => 'WEXFORD
'),
            array('id' => '1645', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '', 'town' => 'Wellingtonbridge', 'state' => 'WEXFORD
'),
            array('id' => '1646', 'pharmacy_name' => 'Rossfield Pharmacy', 'address' => 'Unit 2-3  Brookfield Enterprise Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '1647', 'pharmacy_name' => 'Donal McGoey Pharmacy Limited', 'address' => 'Main Street', 'town' => 'Drumconrath', 'state' => 'MEATH
'),
            array('id' => '1648', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Supervalu Shopping Centre The Glen New Road', 'town' => 'Kinsale', 'state' => 'CORK
'),
            array('id' => '1649', 'pharmacy_name' => 'Boots', 'address' => 'Unit 7 Owenabue Mall', 'town' => 'Carrigaline', 'state' => 'CORK
'),
            array('id' => '1650', 'pharmacy_name' => 'Lakeshore Pharmacy Limited', 'address' => 'Barrack Street', 'town' => 'Loughrea', 'state' => 'GALWAY
'),
            array('id' => '1651', 'pharmacy_name' => 'Boots', 'address' => 'Unit 20 Ilac Shopping Centre Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1652', 'pharmacy_name' => 'Jordan\'s Pharmacy', 'address' => '43 Sundrive Road Dublin 12', 'town' => 'Kimmage', 'state' => 'DUBLIN
'),
            array('id' => '1653', 'pharmacy_name' => 'Phelan\'s Pharmacy', 'address' => '11-13 Grand Parade', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1654', 'pharmacy_name' => 'Boots', 'address' => 'Unit 5 - 7 Park Point Shopping Centre', 'town' => 'Upper Glenageary Road', 'state' => 'DUBLIN
'),
            array('id' => '1655', 'pharmacy_name' => 'Andrew Buckley\'s totalhealth Pharmacy', 'address' => '5 St. Enda\'s Drive Dublin 14', 'town' => 'Rathfarnham', 'state' => 'DUBLIN
'),
            array('id' => '1656', 'pharmacy_name' => 'Concannon\'s Pharmacy', 'address' => '11 Mardyke Street', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '1657', 'pharmacy_name' => 'Capel Street Pharmacy Limited', 'address' => '138  Capel Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1658', 'pharmacy_name' => 'McGrath Chemists Limited', 'address' => 'Main Street', 'town' => 'Tallow', 'state' => 'WATERFORD
'),
            array('id' => '1659', 'pharmacy_name' => 'Markey\'s Pharmacy', 'address' => '24 Bridge Street', 'town' => 'Cootehill', 'state' => 'CAVAN
'),
            array('id' => '1660', 'pharmacy_name' => 'Boots', 'address' => 'Unit 13 - 14 Frascati Shopping Centre', 'town' => 'Blackrock', 'state' => 'DUBLIN
'),
            array('id' => '1661', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'The Meath Primary Care Centre Dublin 8', 'town' => 'Heytesbury Street', 'state' => 'DUBLIN
'),
            array('id' => '1662', 'pharmacy_name' => 'Crumlin Road Pharmacy', 'address' => '251 Crumlin Road Dublin 12', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1663', 'pharmacy_name' => 'Hanover Quay Pharmacy', 'address' => 'Unit 4 Forbes Street Dublin 2', 'town' => 'Sir John Rogerson Quay', 'state' => 'DUBLIN
'),
            array('id' => '1664', 'pharmacy_name' => 'Weaver\'s Court Pharmacy', 'address' => 'Weaver\'s Court Car Park Main Street', 'town' => 'Loughrea', 'state' => 'GALWAY
'),
            array('id' => '1665', 'pharmacy_name' => 'Corrigan\'s Pharmacy', 'address' => '80 Malahide Road Dublin 3', 'town' => 'Clontarf', 'state' => 'DUBLIN
'),
            array('id' => '1666', 'pharmacy_name' => 'Median Healthcare Pharmacy', 'address' => 'Unit 5 The Westway Centre Ballymount Avenue Dublin 12', 'town' => 'Ballymount', 'state' => 'DUBLIN
'),
            array('id' => '1667', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Main Street', 'town' => 'Baltinglass', 'state' => 'WICKLOW
'),
            array('id' => '1668', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Crookstown Ballytore', 'town' => 'Athy', 'state' => 'KILDARE
'),
            array('id' => '1669', 'pharmacy_name' => 'Tesco Pharmacy', 'address' => 'Tesco Extra Dundalk Shopping Centre Stapleton Drive', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1670', 'pharmacy_name' => 'Crowley\'s Pharmacy', 'address' => 'Market Square', 'town' => 'Dunmanway', 'state' => 'CORK
'),
            array('id' => '1671', 'pharmacy_name' => 'Kerr\'s Pharmacy', 'address' => '21 Main Street', 'town' => 'Dunmanway', 'state' => 'CORK
'),
            array('id' => '1672', 'pharmacy_name' => 'North Road Pharmacy', 'address' => 'North Road', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '1673', 'pharmacy_name' => 'O\'Reilly\'s Pharmacy', 'address' => '28-29 North Main Street', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '1674', 'pharmacy_name' => 'Foody\'s Pharmacy', 'address' => 'Harcourt Building Harcourt Road Dublin 2', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1675', 'pharmacy_name' => 'LloydsPharmacy Ringsend - Niamh Murphy MPSI', 'address' => 'Unit 2 The Bottleworks Fitzwilliam Street Dublin 4', 'town' => 'Ringsend', 'state' => 'DUBLIN
'),
            array('id' => '1676', 'pharmacy_name' => 'Allcare Pharmacy Kill', 'address' => 'Oakland Centre Main Street', 'town' => 'Kill', 'state' => 'KILDARE
'),
            array('id' => '1677', 'pharmacy_name' => 'Cogaslann Chasla', 'address' => 'Derrynea (Doire an Fheich)', 'town' => 'Costelloe (Casla)', 'state' => 'GALWAY
'),
            array('id' => '1678', 'pharmacy_name' => 'Duffy\'s Pharmacy', 'address' => 'Main Street Castletownroche', 'town' => 'Mallow', 'state' => 'CORK
'),
            array('id' => '1679', 'pharmacy_name' => 'Kieran\'s Avenue Road Pharmacy', 'address' => 'Unit 2 Avenue Centre Avenue Road', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1680', 'pharmacy_name' => 'Kevin Davison Pharmacy Limited', 'address' => 'West Square', 'town' => 'Askeaton', 'state' => 'LIMERICK
'),
            array('id' => '1681', 'pharmacy_name' => 'Fennell\'s Pharmacy Clare Abbey', 'address' => 'Vision House Clare Abbey', 'town' => 'Clarecastle', 'state' => 'CLARE
'),
            array('id' => '1682', 'pharmacy_name' => 'Rivervalley Pharmacy', 'address' => 'Unit 1 Rivervalley Shopping Centre Rivervalley', 'town' => 'Swords', 'state' => 'DUBLIN
'),
            array('id' => '1683', 'pharmacy_name' => 'Reens Pharmacy', 'address' => 'West End', 'town' => 'Rathmore', 'state' => 'KERRY
'),
            array('id' => '1684', 'pharmacy_name' => 'Hayes & Hayes totalhealth Pharmacy', 'address' => 'St. Brendan\'s Street', 'town' => 'Portumna', 'state' => 'GALWAY
'),
            array('id' => '1685', 'pharmacy_name' => 'Homecare Pharmacy', 'address' => 'Pearse Road', 'town' => 'Sligo', 'state' => 'SLIGO
'),
            array('id' => '1686', 'pharmacy_name' => 'Boots', 'address' => 'Unit 1 35 MacDonagh Junction Shopping Centre', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '1687', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '13 Forster Street', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '1688', 'pharmacy_name' => 'Life Pharmacy Ballymun', 'address' => 'Unit 2a Alliance Row Dublin 9', 'town' => 'Ballymun', 'state' => 'DUBLIN
'),
            array('id' => '1689', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Fairie\'s Cross', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '1690', 'pharmacy_name' => 'LloydsPharmacy', 'address' => '10-11 Ashe Street', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '1691', 'pharmacy_name' => 'O\'Beirn\'s Pharmacy', 'address' => '11 Henry Street', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '1692', 'pharmacy_name' => 'Scanlons Express Late Night Pharmacy', 'address' => 'Unit 3 Mount Kenneth Shannon Bridge', 'town' => '"Dock Road', 'state' => ' Limerick"'),
            array('id' => '1693', 'pharmacy_name' => 'Dromiskin Pharmacy', 'address' => 'Chapel Road', 'town' => 'Dromiskin', 'state' => 'LOUTH
'),
            array('id' => '1694', 'pharmacy_name' => 'Boots', 'address' => 'Units 1 & 3  Exchange House Main Street', 'town' => 'Ballincollig', 'state' => 'CORK
'),
            array('id' => '1695', 'pharmacy_name' => 'Dun Laoghaire Pharmacy', 'address' => '56 Upper George\'s Street', 'town' => 'Dun Laoghaire', 'state' => 'DUBLIN
'),
            array('id' => '1696', 'pharmacy_name' => 'Life Pharmacy Mell', 'address' => 'Upper Mell', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '1697', 'pharmacy_name' => 'Clarecastle Pharmacy', 'address' => 'Barrack Street', 'town' => 'Clarecastle', 'state' => 'CLARE
'),
            array('id' => '1698', 'pharmacy_name' => 'Shine\'s Pharmacy', 'address' => 'Unit 4 Horan Centre Clash', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '1699', 'pharmacy_name' => 'Leahy\'s Pharmacy Ballinorig', 'address' => 'Unit 1(b) Ballinorig Business Park', 'town' => 'Tralee', 'state' => 'KERRY
'),
            array('id' => '1700', 'pharmacy_name' => 'Blake\'s Pharmacy', 'address' => 'Pound Street', 'town' => 'Leixlip', 'state' => 'KILDARE
'),
            array('id' => '1701', 'pharmacy_name' => 'The Mill Pharmacy', 'address' => 'The Mill Centre', 'town' => 'Coolaney', 'state' => 'SLIGO
'),
            array('id' => '1702', 'pharmacy_name' => 'Omeath Pharmacy', 'address' => 'Station Road', 'town' => 'Omeath', 'state' => 'LOUTH
'),
            array('id' => '1703', 'pharmacy_name' => 'Riverchapel Pharmacy', 'address' => 'Main Street Riverchapel Village', 'town' => 'Gorey', 'state' => 'WEXFORD
'),
            array('id' => '1704', 'pharmacy_name' => 'Balally Pharmacy', 'address' => 'Unit 9 Balally Shopping Centre Dublin 16', 'town' => 'Sandyford Road', 'state' => 'DUBLIN
'),
            array('id' => '1705', 'pharmacy_name' => 'Belturbet Pharmacy', 'address' => 'Bridge Street Belturbet', 'town' => '', 'state' => 'CAVAN
'),
            array('id' => '1706', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Unit 4 Letterkenny Town Centre Pearse Road', 'town' => 'Letterkenny', 'state' => 'DONEGAL
'),
            array('id' => '1707', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => 'Units 1 - 2 Dano\'s Supervalu Bellevue', 'town' => 'Mallow', 'state' => 'CORK
'),
            array('id' => '1708', 'pharmacy_name' => 'Matt O\'Flaherty Chemists', 'address' => 'NUI Galway University Road', 'town' => '', 'state' => 'GALWAY
'),
            array('id' => '1709', 'pharmacy_name' => 'Lanes Haven Pharmacy', 'address' => 'Old Windmill Court Lower Gerald Griffin Street', 'town' => '', 'state' => 'LIMERICK
'),
            array('id' => '1710', 'pharmacy_name' => 'Mulligan\'s Pharmacy', 'address' => 'Cedar House Ardkeen', 'town' => 'Dunmore Road', 'state' => 'WATERFORD
'),
            array('id' => '1711', 'pharmacy_name' => 'Lakelands Pharmacy', 'address' => '7 Lakelands Road Blackrock', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1712', 'pharmacy_name' => 'Foxrock Pharmacy', 'address' => '1 Brighton Road Foxrock Dublin 18', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1713', 'pharmacy_name' => 'Ballinteer Pharmacy', 'address' => 'Unit 7 Ballinteer Shopping Centre Ballinteer Avenue Dublin 16', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1714', 'pharmacy_name' => 'C&F Pharmacy', 'address' => 'Casey\'s Lane Market Place', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '1715', 'pharmacy_name' => 'Woodbine Pharmacy Limited', 'address' => '6 Woodbine Park Blackrock', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1716', 'pharmacy_name' => 'Duddy\'s Pharmacy', 'address' => 'St Brendan Street Portumna', 'town' => '', 'state' => 'GALWAY
'),
            array('id' => '1717', 'pharmacy_name' => 'McCaffrey\'s Pharmacy', 'address' => '69 Upper George\'s Street Dun Laoghaire', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1718', 'pharmacy_name' => 'Sionhill Pharmacy', 'address' => '40a Unit 1 Calderwood Road Dublin 9', 'town' => 'Drumcondra', 'state' => 'DUBLIN
'),
            array('id' => '1719', 'pharmacy_name' => 'Lackagh Pharmacy', 'address' => 'Lackagh Turloughmore', 'town' => 'Athenry', 'state' => 'GALWAY
'),
            array('id' => '1720', 'pharmacy_name' => 'Polonia Pharmacy', 'address' => 'Unit 4 King Street Complex Dublin 7', 'town' => 'Smithfield', 'state' => 'DUBLIN
'),
            array('id' => '1721', 'pharmacy_name' => 'Walsh\'s Allcare Pharmacy', 'address' => 'Unit 4 Blarney Shopping Centre', 'town' => 'Blarney', 'state' => 'CORK
'),
            array('id' => '1722', 'pharmacy_name' => 'Mari Mina Pharmacy Ardmore Limited', 'address' => 'Dungarvan Road Ardmore', 'town' => '', 'state' => 'WATERFORD
'),
            array('id' => '1723', 'pharmacy_name' => 'Pharmacy Express ', 'address' => 'Unit 3 Connolly Station Amiens Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1724', 'pharmacy_name' => 'Balbriggan Allcare Pharmacy', 'address' => 'Unit 5 Drogheda Street', 'town' => 'Balbriggan', 'state' => 'DUBLIN
'),
            array('id' => '1725', 'pharmacy_name' => 'Mari Mina Pharmacy Youghal Limited', 'address' => '97 North Main Street', 'town' => '', 'state' => 'CORK
'),
            array('id' => '1726', 'pharmacy_name' => '"Phelan\'s', 'address' => ' Blackrock Hall"', 'town' => 'Blackrock Avenue Skehard Road Blackrock', 'state' => 'Cork'),
            array('id' => '1727', 'pharmacy_name' => 'Slevin\'s Pharmacy', 'address' => 'Bridge Street0', 'town' => 'Lifford', 'state' => 'DONEGAL
'),
            array('id' => '1728', 'pharmacy_name' => 'Prescription Centre', 'address' => '41 Cruises Street / 14 William Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1729', 'pharmacy_name' => 'Miller\'s Pharmacy', 'address' => '2 Aylesbury ManorJohnstown', 'town' => 'Waterford City', 'state' => 'WATERFORD
'),
            array('id' => '1730', 'pharmacy_name' => 'Mangan\'s Allcare Pharmacy', 'address' => 'Arais Slainte Primary Care CentreNavan RoadDublin 7', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1731', 'pharmacy_name' => 'O\'Connell\'s Pharmacy Corrandulla', 'address' => 'Gort Na Carraige0', 'town' => 'Corrandulla', 'state' => 'GALWAY
'),
            array('id' => '1732', 'pharmacy_name' => 'Knockrobin Pharmacy Limited', 'address' => 'Wicklow Primary Care Centre0', 'town' => 'Wicklow Town', 'state' => 'WICKLOW
'),
            array('id' => '1733', 'pharmacy_name' => 'Lonergan\'s Pharmacy Limited', 'address' => '3 Harty AvenueDublin 12', 'town' => 'Walkinstown', 'state' => 'DUBLIN
'),
            array('id' => '1734', 'pharmacy_name' => 'Loughrey\'s Pharmacy', 'address' => 'Harbour Row0', 'town' => 'Longford Town', 'state' => 'LONGFORD
'),
            array('id' => '1735', 'pharmacy_name' => 'Castle Pharmacy', 'address' => 'Unit 8Ballinakill Shopping CentreDunmore Road', 'town' => 'Waterford', 'state' => 'WATERFORD
'),
            array('id' => '1736', 'pharmacy_name' => 'Santry\'s Washington Street Pharmacy', 'address' => '25a Washington Street West', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1737', 'pharmacy_name' => 'McCartan\'s Pharmacy Northside', 'address' => 'Unit 7 & 8 Northside Shopping Centre Dublin 17', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1738', 'pharmacy_name' => 'Mellerick\'s Pharmacy', 'address' => '24 Patrick Street', 'town' => 'Fermoy', 'state' => 'CORK
'),
            array('id' => '1739', 'pharmacy_name' => 'Stack\'s Family Pharmacy Limited', 'address' => 'Market Square', 'town' => 'Monasterevin', 'state' => 'KILDARE
'),
            array('id' => '1740', 'pharmacy_name' => 'Haven Pharmacy McAleers', 'address' => '"7', 'town' => ' Fitzmaurice Road Ballygall Dublin 11"', 'state' => 'Finglas East'),
            array('id' => '1741', 'pharmacy_name' => 'Portarlington Pharmacy', 'address' => 'Eglington House Park Lane', 'town' => 'Portarlington', 'state' => 'LAOIS
'),
            array('id' => '1742', 'pharmacy_name' => 'Grogan\'s Pharmacy Poitigeir', 'address' => 'Spa Road0', 'town' => 'Dingle', 'state' => 'KERRY
'),
            array('id' => '1743', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => 'Bank Place', 'town' => 'Ennis', 'state' => 'CLARE
'),
            array('id' => '1744', 'pharmacy_name' => 'Newport Mayo Pharmacy', 'address' => 'Main Street', 'town' => 'Newport', 'state' => 'MAYO
'),
            array('id' => '1745', 'pharmacy_name' => 'Connolly\'s Pharmacy', 'address' => 'The Square', 'town' => 'Kildare Town', 'state' => 'KILDARE
'),
            array('id' => '1746', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => 'The Diamond', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1747', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => '148 Blanchardstown Shopping Centre Dublin 15', 'town' => 'Blanchardstown', 'state' => 'DUBLIN
'),
            array('id' => '1748', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => 'Unit 3 Adelphi Court Longwalk', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1749', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => 'Ridgewood Avenue', 'town' => 'Swords', 'state' => 'DUBLIN
'),
            array('id' => '1750', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => '"Unit 2', 'town' => ' The Griffeen CentreGriffeen Avenue"', 'state' => '"Griffeen Avenue'),
            array('id' => '1751', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => '8 College ViewBallymun Road Dublin 11', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1752', 'pharmacy_name' => 'McCabes Pharmacy', 'address' => '2 Sandyford Hall CentreKilgobbin Road Dublin 18', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1753', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => '312 Lower Kimmage Road Dublin 6W', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1754', 'pharmacy_name' => 'Sherwood\'s Pharmacy', 'address' => '2 North Main StreetWexford Town', 'town' => '', 'state' => 'WEXFORD
'),
            array('id' => '1755', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => '"Unit 1', 'town' => ' Malahide Shopping Centre Main Street"', 'state' => 'Malahide'),
            array('id' => '1756', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => 'Unit 2 Yellow Walls Road', 'town' => 'Malahide Rd', 'state' => 'DUBLIN
'),
            array('id' => '1757', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => 'J C\'s SupermarketRathbeale Road', 'town' => 'Swords', 'state' => 'DUBLIN
'),
            array('id' => '1758', 'pharmacy_name' => 'Healthwave', 'address' => 'Unit 5 Mulvoy ParkSean Mulvoy Road', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '1759', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Friar Street', 'town' => 'Thurles', 'state' => 'TIPPERARY
'),
            array('id' => '1760', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'The Lough Shopping CentreTogher', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1761', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Unit 102 North Main Street', 'town' => 'Youghal', 'state' => 'CORK
'),
            array('id' => '1762', 'pharmacy_name' => 'LloydsPharmacy', 'address' => 'Units 6 & 7 Supervalu Shopping Centre West End', 'town' => 'Ballincollig', 'state' => 'CORK
'),
            array('id' => '1763', 'pharmacy_name' => 'McEvoy\'s Pharmacy', 'address' => '30 Main Street', 'town' => 'Shercock', 'state' => 'CAVAN
'),
            array('id' => '1764', 'pharmacy_name' => 'Life Pharmacy Janet Dillon', 'address' => '"Unit 10 ', 'town' => ' Carrick Retail Park0"', 'state' => 'Carrick-on-Shannon'),
            array('id' => '1765', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => '46 Main Street', 'town' => 'Arklow', 'state' => 'WICKLOW
'),
            array('id' => '1766', 'pharmacy_name' => 'O\'Reilly\'s Pharmacy', 'address' => 'Curraheen Road0', 'town' => 'Bishopstown', 'state' => 'CORK
'),
            array('id' => '1767', 'pharmacy_name' => 'Laverty\'s Pharmacy Limited', 'address' => 'Unit 2C Shangan HallDublin 9', 'town' => 'Ballymun', 'state' => 'DUBLIN
'),
            array('id' => '1768', 'pharmacy_name' => 'Christine\'s Pharmacy', 'address' => '33 Brews Hill0', 'town' => 'Navan', 'state' => 'MEATH
'),
            array('id' => '1769', 'pharmacy_name' => '"Pharmacy Department', 'address' => ' St. Francis Hospice"', 'town' => 'Navan RoadDublin 15', 'state' => 'Blanchardstown'),
            array('id' => '1770', 'pharmacy_name' => 'Adamstown Pharmacy', 'address' => 'Adamstown0', 'town' => 'Enniscorthy', 'state' => 'WEXFORD
'),
            array('id' => '1771', 'pharmacy_name' => 'Baltinglass Pharmacy', 'address' => 'Unit 13 Mill Street', 'town' => 'Baltinglass', 'state' => 'WICKLOW
'),
            array('id' => '1772', 'pharmacy_name' => 'The Marian Pharmacy', 'address' => 'Friar\'s Walk', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1773', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => '"Unit 1-2', 'town' => ' Clare Hall Shopping Centre Dublin 17"', 'state' => 'Malahide Road'),
            array('id' => '1774', 'pharmacy_name' => 'McCabes Pharmacy', 'address' => '282 Glasnevin Avenue Dublin 11', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1775', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => 'Unit G24 The Pavilions Shopping Centre', 'town' => 'Swords', 'state' => 'DUBLIN
'),
            array('id' => '1776', 'pharmacy_name' => 'McCabes Pharmacy', 'address' => 'Unit 5 The Crescent Shopping Centre Dooradoyle', 'town' => '', 'state' => 'LIMERICK
'),
            array('id' => '1777', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => 'Units 6-8 Citywest Shopping Centre Dublin 24', 'town' => 'Citywest', 'state' => 'DUBLIN
'),
            array('id' => '1778', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => '"Level 3', 'town' => ' Units 17 - 19 Dundrum Town Centre Dublin 16"', 'state' => 'Dundrum'),
            array('id' => '1779', 'pharmacy_name' => 'McCauley\'s Pharmacy ', 'address' => '69 Main Street', 'town' => '', 'state' => 'WEXFORD
'),
            array('id' => '1780', 'pharmacy_name' => 'McCabe\'s Pharmacy', 'address' => 'Lis Na Dara Medical Centre Lis Na Dara Carrick Road', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1781', 'pharmacy_name' => 'Walsh\'s Pharmacy', 'address' => 'Units 1 - 2 Corrib Centre Eyre Street', 'town' => 'Galway City', 'state' => 'GALWAY
'),
            array('id' => '1782', 'pharmacy_name' => 'Keane\'s Care Plus Pharmacy', 'address' => 'Unit 1 Enfield Court Johnstown Road', 'town' => 'Enfield', 'state' => 'MEATH
'),
            array('id' => '1783', 'pharmacy_name' => 'Newtown Pharmacy', 'address' => 'Glengarriff Road', 'town' => 'Bantry', 'state' => 'CORK
'),
            array('id' => '1784', 'pharmacy_name' => 'Coen\'s Pharmacy', 'address' => 'Wolfe Tone Square', 'town' => 'Bantry', 'state' => 'CORK
'),
            array('id' => '1785', 'pharmacy_name' => 'Sam McCauley Chemists', 'address' => '"30 & 31 ', 'town' => ' High Street"', 'state' => 'Kilkenny'),
            array('id' => '1786', 'pharmacy_name' => 'Donnelly\'s Pharmacy Limited', 'address' => 'Unit 3 Kingsford Cross Strand Road', 'town' => 'Portmarnock', 'state' => 'DUBLIN
'),
            array('id' => '1787', 'pharmacy_name' => 'Vista Pharmacy', 'address' => 'Vista Primary Care Centre Ballymore Eustace Road', 'town' => 'Naas', 'state' => 'KILDARE
'),
            array('id' => '1788', 'pharmacy_name' => 'Dargle Pharmacies', 'address' => ' Castle Street Shopping Centre Castle Street ', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '1789', 'pharmacy_name' => 'Dargle Pharmacies', 'address' => 'Novara Avenue', 'town' => 'Bray', 'state' => 'WICKLOW
'),
            array('id' => '1790', 'pharmacy_name' => 'Conlon\'s Chemist', 'address' => 'Unit 5Main Street', 'town' => 'Athleague', 'state' => 'ROSCOMMON
'),
            array('id' => '1791', 'pharmacy_name' => '"H.S.E. Pharmacy', 'address' => ' St. Camillus Hospital"', 'town' => '', 'state' => 'Limerick'),
            array('id' => '1792', 'pharmacy_name' => 'Galvin\'s Pharmacy', 'address' => '"Unit 2 Ground Floor Block B', 'town' => '  The Smithsland Centre"', 'state' => 'Kilkenny'),
            array('id' => '1793', 'pharmacy_name' => 'Boots', 'address' => 'Unit 3ADrimnagh Road Retail ParkDublin 12', 'town' => 'Drimnagh', 'state' => 'Dublin
'),
            array('id' => '1794', 'pharmacy_name' => 'McDermott\'s Pharmacy', 'address' => 'Ballyfin HouseMain Street', 'town' => 'Borrisokane', 'state' => 'TIPPERARY
'),
            array('id' => '1795', 'pharmacy_name' => 'Duffy\'s Pharmacy', 'address' => 'The Square', 'town' => 'Tuam', 'state' => 'GALWAY
'),
            array('id' => '1796', 'pharmacy_name' => 'Conway\'s Pharmacy', 'address' => '95 Swords Road Dublin 9', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1797', 'pharmacy_name' => 'Concannon\'s totalhealth Pharmacy', 'address' => 'Supervalu CentreBallymahon Road', 'town' => 'Athlone', 'state' => 'WESTMEATH
'),
            array('id' => '1798', 'pharmacy_name' => 'McManus Pharmacy', 'address' => 'Main Street', 'town' => 'Clara', 'state' => 'OFFALY
'),
            array('id' => '1799', 'pharmacy_name' => 'Boots', 'address' => '2 Church Road', 'town' => 'Malahide', 'state' => 'DUBLIN
'),
            array('id' => '1800', 'pharmacy_name' => 'Shankill Pharmacy', 'address' => 'Violet HouseMain Street', 'town' => 'Shankill', 'state' => 'DUBLIN
'),
            array('id' => '1801', 'pharmacy_name' => 'Pure Pharmacy', 'address' => '"Unit 2', 'town' => ' Southgate Shopping Centre Colpe Cross Dublin Road"', 'state' => 'Drogheda'),
            array('id' => '1802', 'pharmacy_name' => 'Chemist Connect', 'address' => '5 Devlin Complex', 'town' => 'Bridgend', 'state' => 'DONEGAL
'),
            array('id' => '1803', 'pharmacy_name' => 'Stack\'s Pharmacy', 'address' => '"Unit 13', 'town' => ' Main StreetClongriffin Town CentreDublin 13"', 'state' => 'Clongriffin'),
            array('id' => '1804', 'pharmacy_name' => 'Meade\'s Medical Hall', 'address' => '83 Main Street', 'town' => 'Carrick-on-Suir', 'state' => 'TIPPERARY
'),
            array('id' => '1805', 'pharmacy_name' => 'Clarinbridge Pharmacy Limited', 'address' => 'The Bridge Centre', 'town' => 'Clarinbridge', 'state' => 'GALWAY
'),
            array('id' => '1806', 'pharmacy_name' => 'Clancy\'s Pharmacy', 'address' => '4 College Way Kilcock Road', 'town' => 'Clane', 'state' => 'KILDARE
'),
            array('id' => '1807', 'pharmacy_name' => 'Milltown totalhealth Pharmacy', 'address' => 'Unit 2 Milltown Shopping Centre Dublin 6', 'town' => 'Milltown', 'state' => 'DUBLIN
'),
            array('id' => '1808', 'pharmacy_name' => '"Guide Pharmacy', 'address' => ' St James Hospital"', 'town' => '', 'state' => ''),
            array('id' => '1809', 'pharmacy_name' => 'Thomond Pharmacy', 'address' => '76 Sexton Street NorthThomondgate', 'town' => 'Limerick City', 'state' => 'LIMERICK
'),
            array('id' => '1810', 'pharmacy_name' => 'PRJS Pharmacy Limited', 'address' => '"205C & 207 ', 'town' => ' Emmet Road Dublin 8"', 'state' => 'Inchicore'),
            array('id' => '1811', 'pharmacy_name' => 'Gorry\'s Pharmacy', 'address' => 'Gonzaga HouseWeafer Street', 'town' => 'Enniscorthy', 'state' => 'WEXFORD
'),
            array('id' => '1812', 'pharmacy_name' => 'Agatha\'s Pharmacy', 'address' => 'Renvyle', 'town' => 'Renvyle', 'state' => 'GALWAY
'),
            array('id' => '1813', 'pharmacy_name' => 'Farrell\'s Pharmacy Trim Limited', 'address' => 'Finnegan\'s Way', 'town' => 'Trim', 'state' => 'MEATH
'),
            array('id' => '1814', 'pharmacy_name' => 'Boots', 'address' => 'Unit 12 - 13 Bridgewater Shopping Centre', 'town' => 'Arklow', 'state' => 'WICKLOW
'),
            array('id' => '1815', 'pharmacy_name' => 'Conroy\'s Pharmacy', 'address' => 'Unit 30B Carton Park Tesco Shopping Centre', 'town' => 'Maynooth', 'state' => 'KILDARE
'),
            array('id' => '1816', 'pharmacy_name' => 'Daly\'s Pharmacy', 'address' => 'Abbey Street', 'town' => 'Cong', 'state' => 'MAYO
'),
            array('id' => '1817', 'pharmacy_name' => 'Keating\'s Careplus Pharmacy', 'address' => 'Lord Edward Street', 'town' => 'Kilmallock', 'state' => 'LIMERICK
'),
            array('id' => '1818', 'pharmacy_name' => 'McCabes Pharmacy', 'address' => '"Unit D1 Ab', 'town' => ' Gulliver\'s Neighhourhood CentreNorthwood"', 'state' => 'Santry'),
            array('id' => '1819', 'pharmacy_name' => 'Chemco Pharmacy', 'address' => 'Supervalu Shopping Centre', 'town' => 'Bunclody', 'state' => 'WEXFORD
'),
            array('id' => '1820', 'pharmacy_name' => 'Chemco Pharmacy', 'address' => 'Supervalu Shopping Centre', 'town' => 'Stradbally', 'state' => 'LAOIS
'),
            array('id' => '1821', 'pharmacy_name' => 'Chemco Pharmacy', 'address' => 'The Medical Centre St. Coman\'s Park', 'town' => 'Roscommon', 'state' => 'ROSCOMMON
'),
            array('id' => '1822', 'pharmacy_name' => 'Chemco Pharmacy', 'address' => 'Supervalu Shopping Centre Hackettstown Road', 'town' => 'Carlow', 'state' => 'CARLOW
'),
            array('id' => '1823', 'pharmacy_name' => 'Kieran\'s totalhealth Pharmacy', 'address' => 'Main Street', 'town' => 'Mohill', 'state' => 'LEITRIM
'),
            array('id' => '1824', 'pharmacy_name' => 'Kieran\'s totalhealth Pharmacy', 'address' => 'Main Street', 'town' => 'Carrick-on-Shannon', 'state' => 'LEITRIM
'),
            array('id' => '1825', 'pharmacy_name' => 'Lucan Village Pharmacy', 'address' => '4 Main Street', 'town' => 'Lucan', 'state' => 'DUBLIN
'),
            array('id' => '1826', 'pharmacy_name' => 'Kerins Pharmacy', 'address' => '20 Main Street', 'town' => 'Blackrock', 'state' => 'DUBLIN
'),
            array('id' => '1827', 'pharmacy_name' => 'McNally\'s Pharmacy 365 (Carlanstown)', 'address' => 'Main StreetCarlanstown', 'town' => 'Kells', 'state' => 'MEATH
'),
            array('id' => '1828', 'pharmacy_name' => 'Chemco Pharmacy', 'address' => 'Aldi Shopping Centre Cranmore Road', 'town' => 'Sligo Town', 'state' => 'SLIGO
'),
            array('id' => '1829', 'pharmacy_name' => 'McKeever\'s Chemists', 'address' => 'Main Street', 'town' => 'Castleblaney', 'state' => 'MONAGHAN
'),
            array('id' => '1830', 'pharmacy_name' => 'O\'Riordan\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Enniskeane', 'state' => 'CORK
'),
            array('id' => '1831', 'pharmacy_name' => 'Kerins Pharmacy', 'address' => 'Lower Main Street', 'town' => 'Duleek', 'state' => 'MEATH
'),
            array('id' => '1832', 'pharmacy_name' => 'Oola Pharmacy', 'address' => 'Kylemore CentreMain Street', 'town' => 'Oola', 'state' => 'LIMERICK
'),
            array('id' => '1833', 'pharmacy_name' => 'Boots Retail (Ire) Ltd', 'address' => '"Units 10-12 ', 'town' => ' Johnston Court Shopping Centre"', 'state' => 'Sligo'),
            array('id' => '1834', 'pharmacy_name' => 'Bradley\'s Pharmacy', 'address' => '13 New Street', 'town' => 'Killarney', 'state' => 'KERRY
'),
            array('id' => '1835', 'pharmacy_name' => '"Whelan\'s Pharmacy', 'address' => ' Cill Dara"', 'town' => 'Cill Dara Primary Care CentreDublin Road', 'state' => 'Kildare Town'),
            array('id' => '1836', 'pharmacy_name' => 'T. N. Feerick & Company Limited', 'address' => 'Main Street', 'town' => 'Cappoquin', 'state' => 'WATERFORD
'),
            array('id' => '1837', 'pharmacy_name' => 'B. MacEneaney Limited', 'address' => '42 High Street', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '1838', 'pharmacy_name' => 'Mark Ellis Pharmacy', 'address' => 'Unit 9 Springfield Shopping Centre Dublin 24', 'town' => 'Tallaght', 'state' => 'DUBLIN
'),
            array('id' => '1839', 'pharmacy_name' => 'Mark Ellis Pharmacy', 'address' => 'Units 1-2 Woodstown Shopping Centre Ballycullen Road Dublin 16', 'town' => 'Knocklyon', 'state' => 'DUBLIN
'),
            array('id' => '1840', 'pharmacy_name' => 'O\'Rourke\'s Pharmacy', 'address' => 'Main Street', 'town' => 'Mountrath', 'state' => 'LAOIS
'),
            array('id' => '1841', 'pharmacy_name' => 'McCabes Pharmacy', 'address' => 'Unit 1 Station Road', 'town' => 'Lusk', 'state' => 'DUBLIN
'),
            array('id' => '1842', 'pharmacy_name' => 'McCabes Pharmacy', 'address' => 'Veronica House Unit 1 Skerries Corner Lower Main Street', 'town' => 'Rush', 'state' => 'DUBLIN
'),
            array('id' => '1843', 'pharmacy_name' => 'CHC Pharmacy', 'address' => 'Charleville Primary Healthcare CentreRathgobbin South', 'town' => 'Charleville', 'state' => 'CORK
'),
            array('id' => '1844', 'pharmacy_name' => 'Tully\'s totalhealth Pharmacy', 'address' => 'Main Street', 'town' => 'Castlerea', 'state' => 'ROSCOMMON
'),
            array('id' => '1845', 'pharmacy_name' => 'Harbour Pharmacy Ltd', 'address' => 'The Harbour', 'town' => 'Kilcock', 'state' => 'KILDARE
'),
            array('id' => '1846', 'pharmacy_name' => 'Molloys Lifestyle Pharmacy', 'address' => 'Shangort', 'town' => 'Knocknacarra', 'state' => 'GALWAY
'),
            array('id' => '1847', 'pharmacy_name' => 'Declan Hickey Chemists Limited', 'address' => '1 John\'s Square', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1848', 'pharmacy_name' => 'Ballisodare Pharmacy', 'address' => 'Unit 52 Ballisodare Town Centre', 'town' => 'Ballisodare', 'state' => 'SLIGO
'),
            array('id' => '1849', 'pharmacy_name' => 'Lannon Late Night Pharmacy', 'address' => 'Cannings Spar Pearse Road', 'town' => 'Carraroe', 'state' => 'SLIGO
'),
            array('id' => '1850', 'pharmacy_name' => 'Fairgreen Pharmacy', 'address' => 'Church Road', 'town' => 'Bagenalstown', 'state' => 'CARLOW
'),
            array('id' => '1851', 'pharmacy_name' => 'Gurteen Pharmacy', 'address' => 'Main Street', 'town' => 'Gurteen', 'state' => 'SLIGO
'),
            array('id' => '1852', 'pharmacy_name' => 'Frederick Pharmacy', 'address' => '19 North Frederick Street Dublin 1', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1853', 'pharmacy_name' => 'Halley\'s CarePlus Pharmacy', 'address' => 'Station Road', 'town' => 'Adare', 'state' => 'LIMERICK
'),
            array('id' => '1854', 'pharmacy_name' => 'Wicklow Pharmacy', 'address' => 'Units 5 - 6 Supervalu Centre', 'town' => 'Wicklow Town', 'state' => 'WICKLOW
'),
            array('id' => '1855', 'pharmacy_name' => 'Ferrybank Pharmacy Limited', 'address' => 'Unit 1 Ferrybank Mall Ferrybank', 'town' => 'Arklow', 'state' => 'WICKLOW
'),
            array('id' => '1856', 'pharmacy_name' => 'O\'Sullivan\'s Pharmacy', 'address' => '25 Bank Place', 'town' => 'Mallow', 'state' => 'CORK
'),
            array('id' => '1857', 'pharmacy_name' => 'Keady\'s Pharmacy Ltd', 'address' => 'The Square', 'town' => 'Headford', 'state' => 'GALWAY
'),
            array('id' => '1858', 'pharmacy_name' => 'Doherty\'s Pharmacy', 'address' => 'High Street', 'town' => 'Westport', 'state' => 'MAYO
'),
            array('id' => '1859', 'pharmacy_name' => 'Maher\'s totalheath Chemist', 'address' => '105 West Street', 'town' => 'Drogheda', 'state' => 'LOUTH
'),
            array('id' => '1860', 'pharmacy_name' => 'Medwell Pharmacy', 'address' => 'Tuam Shopping CentreAbbeytrinity', 'town' => 'Tuam', 'state' => 'GALWAY
'),
            array('id' => '1861', 'pharmacy_name' => 'Manor Pharmacy', 'address' => '21 Manor Street Dublin 7', 'town' => '', 'state' => 'DUBLIN
'),
            array('id' => '1862', 'pharmacy_name' => 'Ballyfermot Pharmacy', 'address' => 'Unit 3 Tesco Shopping Centre Dublin 10', 'town' => 'Ballyfermot', 'state' => 'DUBLIN
'),
            array('id' => '1863', 'pharmacy_name' => 'McSweeney Pharmacy Limited', 'address' => 'Clybaun Road Knocknacarra', 'town' => 'Galway', 'state' => 'GALWAY
'),
            array('id' => '1864', 'pharmacy_name' => 'Dempsey\'s Allcare Pharmacy', 'address' => '47 Parnell Street', 'town' => 'Limerick', 'state' => 'LIMERICK
'),
            array('id' => '1865', 'pharmacy_name' => 'Coffey\'s Allcare Pharmacy', 'address' => 'Castle Street', 'town' => 'Roscrea', 'state' => 'TIPPERARY
'),
            array('id' => '1866', 'pharmacy_name' => 'Abbey Allcare Pharmacy ', 'address' => 'Lord Edward Street', 'town' => 'Kilmallock', 'state' => 'LIMERICK
'),
            array('id' => '1867', 'pharmacy_name' => 'Ballintemple Allcare Pharmacy', 'address' => '1 Maryville', 'town' => 'Ballintemple', 'state' => 'CORK
'),
            array('id' => '1868', 'pharmacy_name' => 'Blake\'s Allcare Pharmacy', 'address' => 'Main Street', 'town' => 'Celbridge', 'state' => 'KILDARE
'),
            array('id' => '1869', 'pharmacy_name' => 'Donaghmede Allcare Pharmacy', 'address' => 'Units 5-6 Donaghmede Shopping Centre Dublin 13', 'town' => 'Donaghmede', 'state' => 'DUBLIN
'),
            array('id' => '1870', 'pharmacy_name' => 'Douglas Allcare Pharmacy', 'address' => 'Clermont Douglas Road', 'town' => 'Douglas', 'state' => 'CORK
'),
            array('id' => '1871', 'pharmacy_name' => 'Goresbridge Allcare Pharmacy', 'address' => 'Main Street', 'town' => 'Goresbridge', 'state' => 'KILKENNY
'),
            array('id' => '1872', 'pharmacy_name' => 'Keane\'s Allcare Pharmacy', 'address' => '50c John Street', 'town' => 'Kilkenny', 'state' => 'KILKENNY
'),
            array('id' => '1873', 'pharmacy_name' => 'Life Pharmacy Fogartys', 'address' => 'Sarsfield Street', 'town' => 'Kilmallock', 'state' => 'LIMERICK
'),
            array('id' => '1874', 'pharmacy_name' => 'Matthews Allcare Pharmacy', 'address' => '37 Park Street', 'town' => 'Dundalk', 'state' => 'LOUTH
'),
            array('id' => '1875', 'pharmacy_name' => 'O\'Carrolls Allcare Pharmacy ', 'address' => 'Orchard Court', 'town' => 'Blackpool', 'state' => 'CORK
'),
            array('id' => '1876', 'pharmacy_name' => 'Pettit\'s Allcare Pharmacy', 'address' => 'The Square', 'town' => 'Clara', 'state' => 'OFFALY
'),
            array('id' => '1877', 'pharmacy_name' => 'Allcare Late Night Pharmacy Wilton', 'address' => '4 Cardinal WayWilton', 'town' => 'Cork City', 'state' => 'CORK
'),
            array('id' => '1878', 'pharmacy_name' => 'Stack\'s Allcare Pharmacy', 'address' => '1 MacCurtain Street', 'town' => 'Fermoy', 'state' => 'CORK
'),
            array('id' => '1879', 'pharmacy_name' => 'Turner\'s Cross Allcare Pharmacy', 'address' => '1 Ossory Place Turner\'s Cross', 'town' => 'Cork', 'state' => 'CORK
'),
            array('id' => '1880', 'pharmacy_name' => 'Mangan\'s Allcare Pharmacy', 'address' => 'Unit 3 Block D The Waterways', 'town' => 'Sallins', 'state' => 'KILDARE
'),
            array('id' => '1881', 'pharmacy_name' => 'Kellys Allcare Pharmacy', 'address' => 'The Nangor Centre Cherrywood Dublin 22', 'town' => 'Clondalkin', 'state' => 'DUBLIN
'),
            array('id' => '1882', 'pharmacy_name' => 'Plaza Pharmacy', 'address' => 'Unit 2The Plaza', 'town' => 'Swords', 'state' => 'DUBLIN')
        );

        foreach ($pharmacy as $p) {
            DB::connection($this->connection)->table('pharmacy')->insert($p);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)->drop('pharmacy');
    }
}
