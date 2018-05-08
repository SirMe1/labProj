<!DOCTYPE html>
<?php
//force PHP to display error - useful for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//takes a flag that defines what kind of errors that are visible e.g E_ALL
error_reporting(E_ALL);
 ?>
<html>
  <head>
    <title>Wambua's</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  </head>
  <body>
<?php

$wambua_corrupted_samples = "N3AmE,JO9b TitlE32s,Department,Full or= Pa+rt-Time,Salary or Hourly,Typi4>/>cal Hours,Annual Sal>ary,Hou)(rly Rate
A%5A%ROo4N,  M YREFFEJ,SERGEA%NT,POoLICE,F,SA%lA%ry,,&euro;10144290,
A%45A%5ROoN,   %ANIR%AK ,POoLICE OoFFICER (&commat;A%SSIGNED A%S DETECTIVE),POoLICE,F,SA%lA%ry,,KES9412299,
A%A%4ROoN,  R IELR%SEKEBMIK,CHIEF COoNTRA%CT EXPEDITER,GENERA%L SERVICES,F,SA%lA%ry,,KES10159290,
A%BA%4D JR,  M ETNECIV,CIVIL ENGINEER IV,WA%TER MGMNT,F,SA%lA%ry,,KESd11006^-4.00,
A%B4A%SCA%L,  REECE E,TRA%FFIC COoNTROoL A%IDE-HOoURLY,OoEMC,P,HOourly,20,,KES19.86^-
A%BBOoTT,  L YTTEB,FOoSTER GRA%NDPA%RENT,FA%M6^-ILY & SUPPOoRT,P,HOourly,20,,KES2.6^-5
A%BDA%LLA%H,  DI4%AZ ,POoLICE OoFFICER,POoLICE,F,SA%lA%ry,,KESd8405434,
A%B4DELHA%DI,  A%BDA%L4MA%HD ,POoLICE &amp; OoFFICER,POoLICE,F,SA%lA%ry,,$87006^-.00,
A%BDELLA%TIF,  DH%AM4L%ADB%A,FIREFIGHTER (PER A%RBITRA%TOoRS A%WA%RD)-PA%RA%MEDIC,FIRE,F,SA%lA%ry,,$102228.00,
A%BDELMA%JEID,  ZIZ%A ,POoLICE OoFFICER,POoLICE,F,SA%lA%ry,,KES8405434,
ZYMANTAS,  E KRAM,POLICE OFFICER,POLICE,F,Salary,,KES9002499,
ZYRKOWSKI,  E OLRAC,POLICE OFFICER,POLICE,F,Salary,,KES9335412,
A%BDOoLLA%HZA%DEH,  IL%A  ,FIREFIGHTER/PA%RA%MEDIC,FIRE,F,SA%lA%ry,,KES9127234,
A%BDUL-KA%RIM, %A D%AMM%AHUM,ENGINEERING &amp; POOL TECHNICIA%N VI,WA%TER MGMNT,F,SA%lA%ry,,KES11149287,
A%BDULLA%H,  N LEIN%AD,FIREFIGHTER-EMT,FIRE,F,SA%lA%ry,,KES9548487,
A%BDULLA%H,  N %AYNEK%AL,CROoSSING GUA%RD,OoEMC,P,HOourly,20,,KES17.98^-8332?2?2
A%BDULLA%H,  D%AHS%AR ,ELECTRICA%L MECHA%NIC (A%UTOoMOoTIVE),GENERA%L SERVICES,F,HOourly,40,,$46^-.10
A%BDULSA%TTA%R,  R%AHD4UM ,CIVIL ENGINEER II,WA%TER MGMNT,F,SA%lA%ry,,KESd6^-54488723,
A%BDUL-SHA%KUR,  R0IH%AT ,GENERA%L LA%BOoRER - DSS,STREETS & SA%N,F,HOourly,40,,KES2143
A%BEJEROo,  V N)oOS%AJ,POoLICE OoFFICER,POoLICE,F,SA%lA%ry,,KES9002403,
A%BERCROoMBIE IV,  S LR%AE,PA%RA%MEDIC I/C,FIRE,F,SA%lA%ry,,KES826^-1406,
RAM6^-IREZ,  RODOLFO ,GENERAL LABORER &commat; DSS,STREETS & SAN,F,Hourly,40,,KES2012
RAM6^-IREZ,  ROG%6^-ELIO ,STATION LABORER,WATER MGMNT,F,Salary,,KES4513920,
A%BBA%SI,   REHPoOTSIRHC,STA%FF A%SST TOo THE A%LDERMA%N,CITY COoUNCIL,F,SA%lA%ry,,KESK50436^-50,
A%B4BA%TA%COoLA%,  J TREBoOR,ELECTRICA%L MECHA%NIC,A%VIA%TIOoN,F,HOourly,40,,KES46^-.10
A%BBA%TE,  J TREBoOR,POoOoL MOoTOoR TRUCK DRIVER,STREETS & SA%N,F,HOourly,40,,KES35.6^-0
A%B4BA%TEMA%RCOo,  J SEM%AJ,FIRE ENGINEER-EMT,FIRE,F,SA%lA%ry,,KES10335056,
A%BBA%TE,  M YRRET,POoLICE OoFFICER,POoLICE,F,SA%lA%ry,,KES93354.00,
RAM6^-IREZ-RO6^-SA,  D SOLRAC ,ALDERMAN,CITY COUNCIL,F,Salary,,&euro;11783292,
RAM6^-IREZ, R NEB-^6UR,POLICE OFFICER,POLICE,F,Salary,,KES9335400,
RAM6^-IREZ,   OHPLODUR,MOTOR TRUCK DRIVER,STREETS & SAN,F,Hourly,40,,&euro;356^-030
WALK></OSZ,   KECAJ,POLICE OFFICER,POLICE,F,Salary,,KES90024090,";

/**
 * The first thing we need to do is to split the above string into rows
 */

/**
 * An array of $wambua_corrupted_samples
 * @var array
 *
 * @description
 * --- If you notice the above string - rows are separated using a new
 * --- PHP_EOL returns the correct 'End Of Line' symbol for this platform (windows/linux etc).
 * --- explode($separator, $str [, $limit] - optional) - returns an array of the split string
 */
$wce_array = explode(PHP_EOL, $wambua_corrupted_samples);

/**
 * A multidimensional array containing the rows and cells (2d)
 * @var array
 * @description
 * --- array_map($callback, $arrays...) - returns all elements of array after applying the callback function to each one.
 * --- explode / str_getcsv -  Parses a string input for fields in CSV format and returns an array containing the fields read.
 */

$wce_array_multi = array_map(
  function($v){
    return explode(',',$v);
  },$wce_array);

//start the table
echo '<table class="highlight" border="1" cellspacing="0" cellpadding="7">';
//row counter
$counter = 0;

foreach($wce_array_multi as $row):
  //shorthand if else
  echo ($counter == 0) ? '<thead><tr>' : '<tr>';
  //cell counter
  $cell_counter = 0;

  $str_joiner = "";
  foreach($row as $cell):
    if( $counter == 0 ):
      $cell = camelize(sanitizeWords($cell,true));
      echo "<th>{$cell}</th>";
    else:
      //we want to clean the first string(name)
      //then clean and reverse the second(other names), then join them
      $fullname = "";
      //surname
      if( $cell_counter == 0 ):
        $surname = camelize(sanitizeWords($cell));
      //othernames - display them as one with the above
      elseif( $cell_counter == 1 ):
        $fullname = $surname.', '.sanitizeWords(strrev($cell),true);
        echo "<td>{$fullname}</td>";
      //Typical hours
      elseif( $cell_counter == 6):
        echo "<td>{$cell}</td>";
      //Annual salary
      elseif( $cell_counter == 7):
        $cell = sanitizeCurrencies($cell,true);
        echo "<td>{$cell}</td>";
      //hourly rate
      elseif( $cell_counter == 8):
        $cell = sanitizeCurrencies($cell,true);
        echo "<td>{$cell}</td>";
      //all the rest
      else:
        $cell = sanitizeWords($cell,true,true);
        echo "<td>{$cell}</td>";
      endif;

    endif;
    $cell_counter++;
  endforeach;
  echo ($counter == 0) ? '</tr></thead>' : '</tr>';
$counter++;
endforeach;

//end table
echo '</tbody></table>';
/**
 * Simple function that removes all non letters except spaces,dashes(when specified)
 * @param  string  $string
 * @param  boolean $allow_space
 * @param  boolean $allow_hyphen
 * @return string
 */
function sanitizeWords($string,$allow_space = false,$allow_hyphen = false){
  //Rejex 101
  //(condition) ? true : false;
  //rejex - allow only letters and spaces if allowed
  //if letters are allowed check if allow_hypen also to allow hyphens
  $rejex = ($allow_space) ? ($allow_hyphen) ? '/[^A-Za-z -()\-]/' :'/[^A-Za-z \-]/' : '/[^A-Za-z\-]/';
  // Removes special chars.
  $string = preg_replace($rejex, '', $string);
  //remove double oo's
  $string = str_replace('oo','o',strtolower($string));
  //remove $commat
  $string = str_replace('&commat','&commat; ',$string);
  //remove percentage sign
  return camelize(str_replace('%','',$string));
}
/**
 * Converts the first words of the string to uppercase
 * @param  string $string non-camelized string
 * @return string         camelized string
 */
function camelize($string){
  return ucwords(strtolower($string));
}
/**
 * Clean up the currency string
 * @param  string  $string
 * @param  boolean $add_decimal
 * @return string
 */
function sanitizeCurrencies($string,$add_decimal = false){
  //replace all non-currency words/symbols
  $rejex = '/[^0-9&euro$KES;]/';
  $string = preg_replace($rejex,'',$string);
  //replace KESK
  $string = str_replace('KESK','KES',$string);
  //get the numbers only
  $number_value = preg_replace('/[^0-9]/','',$string);
  //get the currency string (KES,dollar and euro)
  //We use substr($str, $start [, $length])
  $currency = substr($string, 0,-strlen($number_value));
  //shorthand if
  //if decimal format then join the currency and number else show the initial string
  $string = ($add_decimal) ? $currency.number_format((float)($number_value/100),2) : $string;

  //remove 0.00 and return string
  return ($string == "0.00") ? '' : $string;
}
?>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>
