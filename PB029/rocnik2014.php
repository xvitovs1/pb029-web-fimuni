#!/packages/run/php/bin/php
<?php
	$title = 'PB029 - Filmový festival FI 2014';  
	include 'header.php';
?> 
    <h1>Ročník 2014</h1>

	<h2 id="info">Základní informace</h2>    

	      <table class="info-table">
			<tr>
				<td>Začátek</td>
				<td>15.&nbsp;5.&nbsp;2014&nbsp;19:30</td>
			</tr>
			<tr>
				<td>Místo konání</td>
				<td>Botanická&nbsp;68A, FI&nbsp;MUNI Brno</td>
			</tr>
	      </table>
	      <br/>

	      <a href="galerie/poster2014.png" data-lightbox="poster">
		<img src="galerie/poster_mini2014.png" alt="Plakát festivalu">
	      </a>

	      <p>
		  Webová stránka festivalu: <a href="http://festival.fi.muni.cz/2014/index.html">zde</a> 
	          <br/>
		  Festivalová brožura ke stažení: <a href="http://festival.fi.muni.cz/2014/f/brozura.pdf">zde</a> 
	      </p> 	

    <h2 id="porota">Porota</h2>    
      <ul>
         <li>Jiří Vanýsek</li>
         <li>Josef Víšek</li>
         <li>Miroslav Maixner</li>
         <li>Kristýna Bartošová</li>
         <li>Jana Francová</li>
      </ul>
       
      <h2 id="program">Program</h2>    
        <table class="program-table">
          <tr>
            <th colspan="2">Zahájení festivalu</th>
          </tr>
          <tr>
            <td>Let it Roll</td>
            <td>1:57</td>
          </tr>
          <tr>
            <td>Výjimka v&nbsp;překladu</td>
            <td>8:15</td>
          </tr>
          <tr>
            <td>The Choice</td>
            <td>1:08</td>
          </tr>
          <tr>
            <td>Other Inside</td>
            <td>7:38</td>
          </tr>
          <tr>
            <td>The Path of Life</td>
            <td>3:13</td>
          </tr>
          <tr>
            <td>Patálie kocourka Ojocha</td>
            <td>4:47</td>
          </tr>
          <tr>
            <td>Ze silnice na okruh</td>
            <td>3:03</td>
          </tr>
          <tr>
            <td>Hranice reality</td>
            <td>6:21</td>
          </tr>
          <tr>
            <th>Přestávka</th>
            <th>20 min</th>
          </tr>
          <tr>
            <td>NL's feeling&nbsp;II</td>
            <td>1:29</td>
          </tr>
          <tr>
            <td>Cestující</td>
            <td>9:35</td>
          </tr>
          <tr>
            <td>Fallen Angel</td>
            <td>5:43</td>
          </tr>
          <tr>
            <td>Půlnoční rozhovor</td>
            <td>5:26</td>
          </tr>
          <tr>
            <td>Přežít</td>
            <td>5:52</td>
          </tr>
          <tr>
            <td>Lajna</td>
            <td>1:49</td>
          </tr>
          <tr>
            <td>Energy</td>
            <td>6:29</td>
          </tr>
          <tr>
            <th>Přestávka</th>
            <th>10 min</th>
          </tr>
          <tr>
            <th colspan="2">Bonusové filmy</th>
          </tr>
          <tr>
            <td>Nuka Cola Commercial</td>
            <td>0:45</td>
          </tr>
          <tr>
            <td>The Charisma Project&nbsp;14</td>
            <td>3:21</td>
          </tr>          
          <tr>
            <td>Blíž, než bys čekal</td>
            <td>2:35</td>
          </tr>
         <tr>
            <td>Pracovní morálka</td>
            <td>3:50</td>
          </tr>
         <tr>
            <td>Fallout LARP 2014</td>
            <td>4:08</td>
          </tr>
          <tr>
            <td>24 minut</td>
            <td>4:34</td>
          </tr>
          <tr>
            <td>Bunny Fighters</td>
            <td>0:59</td>
          </tr>
          <tr>
            <th colspan="2">Vyhlášení výsledků hlasování</th>
          </tr>
       </table>
    
    <h2 id="vysledky">Výsledky</h2>
    <h3>Výsledky hodnocení odborné poroty:</h3>
    <ol>
        <li>Výjimka v&nbsp;překladu</li>
        <li>Fallen Angel</li>
        <li>Energy</li>
        <li>Other inside</li>
        <li>Půlnoční rozhovor</li>
    </ol>
    <br>
    <h3>Výsledky hodnocení diváků:</h3>
    <ol>
        <li>Výjimka v&nbsp;překladu</li>
        <li>Energy</li>
        <li>Patálie kocourka Ojocha</li>
        <li>Fallen Angel</li>
        <li>Cestující</li>
    </ol>

	<h2 id="galerie">Fotogalerie</h2>
	<?php
		$year = 2014;
		include '_galerie.php';
	?>

<?php include 'footer.php'; ?> 
