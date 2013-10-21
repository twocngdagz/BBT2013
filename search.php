<?
include('mchn.config.php');
ob_start();
include (MCHN_DIR_HTML . 'html.header.php');
$buffer = ob_get_contents();
ob_end_clean();

$searchTerms = '';
if(!empty($_GET['search']))
{
	$searchTerms = mysql_real_escape_string($_GET['search']);
	$titleText = ucwords($searchTerms);
}
else
{
	$titleText = 'Search Page';
}
$buffer = str_replace("%BBT2013%", "Search Result for '$titleText' at BabyBeddingTown.com", $buffer);
echo $buffer;


echo '<h1>Baby Bedding Town Search Page</h1>';
if(empty($searchTerms))
{
	html::alert('warning', '', 'Please fill out the serach form to search for products.');
}
else
{
	if(strlen($_GET['search']) < 3)
	{
		html::alert('warning', '', 'The search text must be at least 3 characters');
	}
	else
	{
		//let's start  the search
		echo "<h2>Search Results for: <b>$searchTerms</b></h2>";

		$page = 1;
		//which page are we on
		if(!empty($_GET['page']) && is_int(intval($_GET['page'], 10)) === TRUE && intval($_GET['page'], 10) > 0)
		{
			$page = intval($_GET['page'], 10);
		}
		
		$products = products::searchAllProducts($searchTerms, $page);
		//get number of pages
		$countItems = products::countSearchAllProducts($searchTerms);
		$numItems = $countItems[0]['count(id)'];		
		//generate the pagination links
		$next = '';
		$previous = '';
		$numPages = ceil($numItems/30);
		if($page > 1)
		{
			$previous = $page - 1;
			$previous = '<a href="/search.php?search=' . $_GET['search'] . '&page=' . $previous . '">[previous]</a> ';
		}
		if($page < $numPages)
		{
			$next = $page + 1;
			$next = ' <a href="/search.php?search=' . $_GET['search'] . '&page=' . $next . '">[next]</a>';
		}
		
		
		$pagintaionLinks = $previous . 'Page ' . $page . ' of ' . $numPages . $next;
		if($numItems == 0)
		{
			$pagintaionLinks = '';
		}
		echo 'We found ' . $numItems . ' matches for "' . $searchTerms . '"<br>';
		echo $pagintaionLinks;
		echo '<table border="0">';
		

		//display the results
		foreach($products as $key=>$value)
		{
			$img = $products[$key]['image_thumbnail'];
			$link = '/products.php?id=' . $products[$key]['id'];
			$title = $products[$key]['name_short'];
			$strippedDescription = strip_tags($products[$key]['description_long']);
			$description = substr($strippedDescription, 0, 250);

			if(strlen($strippedDescription) > 250)
			{
				$description = $description . '... <a href="' . $link . '">[read more]</a>';
			}
			echo '<tr>';
			echo '<td valign="top"><a href="' . $link . '"><img src="' . $img . '" border="0" width="75" height="75"></td></a>';
			echo '<td valign="top"><a href="' . $link . '"><b>' . $title . '</b></a><br>' . $description . '</td>';
			echo '<tr>';
			echo '<tr><td colspan="2">&nbsp;</td></tr>';
		}
		echo '</table>';
		echo $pagintaionLinks;
	}
}

include (MCHN_DIR_HTML . 'html.footer.php');
?>