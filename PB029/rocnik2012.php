#!/packages/run/php/bin/php
<?php
	$title = 'PB029 - Filmový festival FI 2012';  
	include 'header.php';
?> 
    <h1>Ročník 2012</h1>
      <h2 id="info">Základní informace</h2>    
        <table class="info-table">
          <tr>
            <td>Začátek</td>
            <td>17.&nbsp;5.&nbsp;2012&nbsp;19:30</td>
          </tr>
          <tr>
            <td>Místo konání</td>
            <td>Botanická&nbsp;68A, FI&nbsp;MUNI Brno</td>
          </tr>
       </table>
      <br/>

      <a href="galerie/poster2012.jpg" data-lightbox="poster">
	<img src="galerie/poster_mini2012.jpg" alt="Plakát festivalu">
      </a>

      <p>
	 Webová stránka festivalu: <a href="http://festival.fi.muni.cz/archiv/12/">zde</a> 
         <br/>
         Festivalová brožura ke stažení: <a href="http://festival.fi.muni.cz/archiv/12/f/brozurka.pdf">zde</a> 
      </p>
    
    <h2 id="porota">Porota</h2>    
           <ul>
               <li>Jiří Vanýsek</li>
               <li>Lukáš Horáček</li>
               <li>Josef Štrubl</li>
           </ul>
       
      <h2 id="program">Program</h2>    
        <table class="program-table">
          <tr>
            <th colspan="2">Zahájení festivalu</th>
          </tr>
          <tr>
            <td>Remote Control</td>
            <td>6:05</td>
          </tr>
          <tr>
            <td>Epic Quest&nbsp;I.</td>
            <td>5:15</td>
          </tr>
          <tr>
            <td>Dlouhá chvíle</td>
            <td>5:16</td>
          </tr>
          <tr>
            <td>Narcis</td>
            <td>6:30</td>
          </tr>
          <tr>
            <td>Infomnia: Information Overdose</td>
            <td>7:07</td>
          </tr>
          <tr>
            <td>Již brzy</td>
            <td>8:21</td>
          </tr>
          <tr>
            <th>Přestávka</th>
            <th>20 min</th>
          </tr>
          <tr>
            <td>Nebojte se do knihovny</td>
            <td>2:02</td>
          </tr>
          <tr>
            <td>3.&nbsp;10.&nbsp;2011</td>
            <td>6:10</td>
          </tr>
          <tr>
            <td>První jarní den</td>
            <td>2:08</td>
          </tr>
          <tr>
            <td>lež.org</td>
            <td>3:27</td>
          </tr>
          <tr>
            <td>Dvířka</td>
            <td>7:54</td>
          </tr>
          <tr>
            <td>Ultrakontinuum</td>
            <td>5:42</td>
          </tr>
          <tr>
            <td>Servant Man</td>
            <td>7:45</td>
          </tr>
          <tr>
            <th>Přestávka</th>
            <th>10 min</th>
          </tr>
          <tr>
            <th colspan="2">Bonusové filmy</th>
          </tr>
          <tr>
            <td>Casa Carnivora</td>
            <td>8:15</td>
          </tr>
          <tr>
            <td>Dárek</td>
            <td>5:00</td>
          </tr>          
          <tr>
            <td>Špionka s&nbsp;koulema</td>
            <td>7:45</td>
          </tr>
         <tr>
            <td>Prostý život</td>
            <td>6:00</td>
          </tr>
         <tr>
            <td>Pro FI divadlo</td>
            <td>8:00</td>
          </tr>
          <tr>
            <td>Očekávání</td>
            <td>2:45</td>
          </tr>
          <tr>
            <th colspan="2">Vyhlášení výsledků hlasování</th>
          </tr>
       </table>
    
    <h2 id="vysledky">Výsledky</h2>
    <h3>Výsledky hodnocení odborné poroty:</h3>
    <ol>
        <li>lež.org</li>
        <li>Již brzy</li>
        <li>Ultrakontinuum</li>
        <li>Epic Quest&nbsp;I.</li>
        <li>Nebojte se do knihovny</li>
    </ol>
    <br>
    <h3>Výsledky hodnocení diváků:</h3>
    <ol>
        <li>Epic Quest I.</li>
        <li>Nebojte se do knihovny</li>
        <li>lež.org</li>
        <li>Ultrakontinuum</li>
        <li>První jarní den</li>
    </ol>

	<h2 id="galerie">Fotogalerie</h2>
	<?php
		$year = 2012;
		include '_galerie.php';
	?>
     
<?php include 'footer.php'; ?> 
