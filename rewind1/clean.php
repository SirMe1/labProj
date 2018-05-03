<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<?php
		/***
Consider the following string(bbit3b.txt)                                                                                                                    *
It contains a quote,the author(surname,first_name second_name),date and the url_reference                                                                    *
@Required                                                                                                                                                    *
1. Create a new branch from the develop branch called feature-rewind-1                                                                                       *
2. Display the following data as follows (NB: The author's  first_name can be clicked to open the url_reference on a new tab)                                *
																																																																														 *
		(a). "Quote" - first_name second_name,surname (YEAR).                                                                                                    *
		(b). .......                                                                                                                                             *
		(c). .......                                                                                                                                             *
		(For example                                                                                                  *                                          *
			a) "The worth and excellency of a soul is to be measured by the object of its love." -  HENRY P,SCOUGAL (1678).                                      * *
		)                                                                                                                                                        *
	Summary                                                                                                                                                    *
	 -- Total quotes : total.                                                                                                                                  *
	 -- Total unique authors : total(list of author surnames - comma separated)                                                                                *
3. Commit changes of the new branch                                                                                                                          *
4. Merge changes with the development branch                                                                                                                 *
5. Push the changes to your repo.                                                                                                                            *
6. Submit the github url on google classroom (Check Quiz 1 3B)                                                                                               *
**/
	$strings = "'Joy is the serious business of heaven.'.LEWIS,CLIVE STAPLES.1964-01-01.https://bit.ly/2HwPJd6
 |'We were not meant to be somebody--we were meant to know Somebody'.PIPER,JOHN STEPHEN.2011-07-17.https://bit.ly/2r31InJ|'He who sings prays twice.'.Hipponensis,Aurelius Augustinus.430-02-30.https://bit.ly/2JwSHuH
 |'The task of the modern educator is not to cut down jungles but to irrigate deserts.'.LEWIS,CLIVE STAPLES.1943-09-23.https://bit.ly/2HwPJd6
 |'There is not one blade of grass, there is no color in this world that is not intended to make us rejoice.'.Calvin,John C.1530-10-09.https://www.brainyquote.com/authors/john_calvin|
 'The worth and excellency of a soul is to be measured by the object of its love.'.SCOUGAL,HENRY P.1678-08-23.https://bit.ly/2Kh1VMR
 |'It is not the strength of your faith but the object of your faith that actually saves you.'.KELLER,TIMOTHY J.2013-01-14.https://bit.ly/2I0WocO
 |'Truth is the agreement of our ideas with the ideas of God.'.Edwards,Jonathan Prtn.1703-09-23.https://bit.ly/2HSMz2U
 |'Each day we are becoming a creature of splendid glory or one of unthinkable horror.'.LEWIS,CLIVE STAPLES.1952-02-01.https://bit.ly/2HwPJd6|'At your right hand are pleasures evermore..'.David,Jesse soun.1200-09-29.https://www.google.com|'Tolerance is not about not having beliefs. It is about how your beliefs lead you to treat people who disagree with you.'.KELLER,TIMOTHY J.2015-10-23.https://bit.ly/2I0WocO
 |'It is better to lose your life than to waste it.'.PIPER,JOHN STEPHEN.2000-05-33.https://bit.ly/2r31InJ|
 'It is not opinions that man needs: it is TRUTH...'.Bonar Horatius B.1885-02-12.https://www.goodreads.com/author/quotes/133605.Horatius_Bonar|
 'Nothing could be more irrational than the idea that something comes from nothing.'.SPROUL,CHARLES ROBERT.2006-03-23.https://bit.ly/2HQ4TJV
 |'He is no fool who gives what he cannot keep to gain that which he cannot lose.'.Elliot,James Phillip.1944-07-26.https://www.brainyquote.com/authors/jim_elliot";
	//echo $data;
	// Counter variable is use to keep track of strings in the sentence such as qoute and names
	$counter = 1;
	// URL varialbe is used to hold the broken url strings and later used to combine them
	$urlArray = array();
	$totalQuotes = 0;
	$totalAuthors = 0;
	// The $authorArray hold the all author names even duplicate ones
	$authorArray = array();
	// $replacedData is used to replace character of ".'" with emplty character in the strings
	$replacedData = str_replace(".'", "", $strings);
	// $replacedData2 is used to replace "'"
	$replacedData2 = str_replace("'", "", $replacedData);
	// $replacedData3 is used to replace "..." with "."
	$replacedData3 = str_replace("...", ".", $replacedData2);
	// $replacedData4 is used to replace ".." with "."
	$replacedData4 = str_replace("..", ".", $replacedData3);
	// $replacedData5 is used to replace ". " with ","
	$replacedData5 = str_replace(". ", ", ", $replacedData4);
	// Explode the data of character "|"
	$explodedData = explode("|", $replacedData5);
// Ordered list element
	echo "<ol type = 'a'>";
	// For loop for each sentence
	for ($i=0; $i < sizeof($explodedData); $i++) {
		// List element starts from here
		echo "<li>";
		// Explde all of the "." character including for the url which will be combined later
		$explodedData2 = explode(".", $explodedData[$i]);
		// For loop for each exploded string of the sentence
		for ($j=0; $j < sizeof($explodedData2); $j++) {
			// If counter == 1, this is the qoute string
			if ($counter == 1) {
				echo '"'.$explodedData2[$j].'" - ';
				// Add the counter to move to the next string
				$counter = $counter + 1;
				// Used to get the total number of quotes
				$totalQuotes = $totalQuotes + 1;
			}elseif ($counter == 2) {
				// If Counter == 2, this is the author name string
				echo $explodedData2[$j]." ";
				$counter = $counter + 1;
				// Push the author names for each sentence to an array so as to get the number of all author also duplicates
				array_push($authorArray, $explodedData2[$j]);
			}elseif ($counter == 3) {
				// // If Counter == 3, this is the year string
				echo "(".$explodedData2[$j].") ";
				$counter = $counter + 1;
			}else {
				// The last else statement holds the urls
				// The url strings are passed to an array so as to combine them this is because
				// the urls where broken apart by the explode in line 78
				array_push($urlArray, $explodedData2[$j]);
			}
		}
		// Combine the broken urls in the array using the implode function
		// and output the full sentence for each quote
		echo '<a href ='.implode(".", $urlArray).'>Link to quote</a><br>';
		// End of list element
		echo "</li>";
		// Put the counter to 1 after every sentence is
		// complete to repeate process untill finished
		$counter = 1;
		// Also empty the url array for the next sentence
		$urlArray = array();
		echo "<br><br>";
	}
	echo "</ol>";
	// Output the total number of qoutes
	echo "<h1>The total number of quotes are ".$totalQuotes."</h1>";
	// Remove the duplicate author names in the array $authorArray
	$uniqueArray = array_unique($authorArray);
	for ($k=0; $k < sizeof($uniqueArray); $k++) {
		// Loop through the un-duplicated number of authors
		$totalAuthors = $totalAuthors + 1;
	}
	// Output the precise number of authors
	echo "<h1>The total number of authors are ".$totalAuthors."</h1>";
	// END OF PHP
	?>

	</body>
</html>
