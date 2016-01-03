#!/packages/run/php/bin/php
<?php
	$title = 'PB029 - Filmový festival FI 2013';  
	include 'header.php';
?> 
	<h1>Ročník 2013</h1>
      <h2 id="info">Základní informace</h2>    
        <table class="info-table">
          <tr>
            <td>Začátek</td>
            <td>16.&nbsp;5.&nbsp;2013&nbsp;19:30</td>
          </tr>
          <tr>
            <td>Místo konání</td>
            <td>Botanická&nbsp;68A, FI&nbsp;MUNI Brno</td>
          </tr>
       </table>
      <br/>

      <a href="galerie/poster2013.jpg" data-lightbox="poster">
	<img src="galerie/poster_mini2013.jpg" alt="Plakát festivalu">
      </a>

      <p>
	 Webová stránka festivalu: <a href="http://festival.fi.muni.cz/archiv/13/">zde</a> 
      </p>
    
    <h2 id="porota">Porota</h2>    
           <ul>
               <li>Jiří Vanýsek</li>
               <li>Jana Francová</li>
               <li>Petr Baran</li>
           </ul>
       
      <h2 id="program">Program</h2>    
        <table class="program-table">
          <tr>
            <th colspan="2">Zahájení festivalu</th>
          </tr>
          <tr>
            <td>Katedra optiky UP: Najkrajšia vec</td>
            <td>2:45</td>
          </tr>
          <tr>
            <td>Obrazárium</td>
            <td>9:04</td>
          </tr>
          <tr>
            <td>Navigace</td>
            <td>6:23</td>
          </tr>
          <tr>
            <td>Hořící sníh</td>
            <td>5:52</td>
          </tr>
          <tr>
            <td>Informace</td>
            <td>1:00</td>
          </tr>
          <tr>
            <td>Shit Happened</td>
            <td>5:05</td>
          </tr>
          <tr>
            <td>Jana</td>
            <td>8:00</td>
          </tr>
          <tr>
            <th>Přestávka</th>
            <th>20 min</th>
          </tr>
          <tr>
            <td>Kybersvět</td>
            <td>6:10</td>
          </tr>
          <tr>
            <td>Java and Smoke</td>
            <td>5:40</td>
          </tr>
          <tr>
            <td>Život půllitru</td>
            <td>4:15</td>
          </tr>
          <tr>
            <td>Cesta slávy</td>
            <td>7:30</td>
          </tr>
          <tr>
            <td>Príbehy ZKM</td>
            <td>4:00</td>
          </tr>
          <tr>
            <td>8&nbsp;minut pornografie</td>
            <td>9:00</td>
          </tr>
          <tr>
            <th>Přestávka</th>
            <th>10 min</th>
          </tr>
          <tr>
            <th colspan="2">Bonusové filmy</th>
          </tr>
          <tr>
            <td>Já nebudu žrát salát (alias Skejt)</td>
            <td>7:56</td>
          </tr>
          <tr>
            <td>Das Burstverfolgungungsjagd</td>
            <td>6:17</td>
          </tr>          
          <tr>
            <td>Ďáblova oprava</td>
            <td>5:15</td>
          </tr>
         <tr>
            <td>Pre-párování</td>
            <td>1:46</td>
          </tr>
         <tr>
            <td>Facultas Artis Deformaticae</td>
            <td>2:06</td>
          </tr>
          <tr>
            <td>ProFIbalet Labutí jezero &ndash; sen stařičkého pana plukowníka</td>
            <td>4:32</td>
          </tr>
          <tr>
            <th colspan="2">Vyhlášení výsledků hlasování</th>
          </tr>
       </table>
    
    <h2 id="vysledky">Výsledky</h2>
    <h3>Výsledky hodnocení odborné poroty:</h3>
    <ol>
        <li>Jana</li>
        <li>8&nbsp;minut pornografie</li>
        <li>Cesta slávy</li>
        <li>Obrazárium</li>
        <li>Kybersvět, Príbehy ZKM</li>
    </ol>
    <br>
    <h3>Výsledky hodnocení diváků:</h3>
    <ol>
        <li>Shit happened</li>
        <li>Jana</li>
        <li>Kybersvět</li>
        <li>8&nbsp;minut pornografie</li>
        <li>Cesta slávy</li>
    </ol>

	<h2 id="galerie">Fotogalerie</h2>
	<?php
		$year = 2013;
		include '_galerie.php';
	?>
  
<?php include 'footer.php'; ?> 
