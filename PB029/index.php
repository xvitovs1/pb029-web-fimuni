#!/packages/run/php/bin/php
<?php
	$title = 'PB029 - webová prezentace';
	$noSubMenu = true;
	include 'header.php';
?>

    <h1>Filmový festival Fakulty informatiky</h1>
    <p>Na této stránce naleznete přehled o&nbsp;posledních třech ročnících Filmového festivalu FI&nbsp;MU.</p>
    <p>Filmový festival probíhá na Fakultě informatiky každoročně již od roku 2001. Promítané filmy jsou převážně práce studentů předmětů PV110&nbsp;Základy filmové řeči a&nbsp;PV113&nbsp;Produkce audiovizuálního díla. 
       Ty nejlepší filmy jsou pak vybrány odbornou nebo diváckou porotou a&nbsp;oceněny.</p>
    <p>Stránka vznikla jako zápočtový úkol do předmětu PB029&nbsp;Elektronická příprava dokumentů na FI&nbsp;MU. Zadání úkolu: <a href="http://www.fi.muni.cz/lemma/PB029/finalwork/#web">zde</a></p>

      <a href="rocnik2014.php">
	<img src="galerie/poster_mini2014.png" alt="Plakát festivalu 2014" class="posterhref">
      </a>
      <a href="rocnik2013.php">
	<img src="galerie/poster_mini2013.jpg" alt="Plakát festivalu 2013" class="posterhref">
      </a>
      <a href="rocnik2012.php">
	<img src="galerie/poster_mini2012.jpg" alt="Plakát festivalu 2012" class="posterhref">
      </a>

<?php include 'footer.php'; ?>
