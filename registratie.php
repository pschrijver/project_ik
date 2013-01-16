<?php include 'templates/header.php'; ?>
<?php include 'templates/nav.php'; ?>

	<div id="content">		
			<div id="formulier">
			<h1>Registratieformulier</h1>
            <table title="Formulier">
               <tr>
                   <td colspan="2"><h2>Persoonsgegevens</h2></td>
               </tr>
               <tr>
               <td>Aanhef:</td><td><input type="text" name="aanhef" /></td>
               </tr>
               <tr>
               <td>Achternaam:</td><td><input type="text" name="achternaam" /></td>
               </tr>
               <tr>
               <td>Voorletter(s):</td><td><input type="text" name="voorletters" /></td>
               </tr>
               <tr>
               <td>Geslacht:</td><td>
                   <label for="man">Man</label>
                   <input type="radio" name="geslacht" id="man" value="man" />
                   <label for="vrouw">Vrouw</label>
                   <input type="radio" name="geslacht" id="vrouw" value="vrouw" /></td>
               </tr>
               <tr>
                   <td colspan="2"><h2>Contactgegevens</h2></td>
               </tr>
               <tr>
               <td>Telefoonnummer:</td><td><input type="text" name="telefoonnummer" /></td>
               </tr>
               <tr>
               <td>Postcode:</td><td><input type="text" name="postcode" /></td>
               </tr>
               <tr>
               <td>Huisnummer:</td><td><input type="text" name="huisnummer" /></td>
               </tr>
               <tr>
               <td>Plaats:</td><td><input type="text" name="plaats" /></td>
               </tr>
               <tr>
               <td>Provincie:</td>
               <td>
                   <select name="Provincies">
                   <option value="drenthe">Drenthe</option>
                   <option value="flevoland">Flevoland</option>
                   <option value="friesland">Friesland</option>
                   <option value="gelderland">Gelderland</option>
                   <option value="groningen">Groningen</option>
                   <option value="limburg">Limburg</option>
                   <option value="noordbrabant">Noord-Brabant</option>
                   <option value="noordholland">Noord-Holland</option>
                   <option value="overijssel">Overijssel</option>
                   <option value="utrecht">Utrecht</option>
                   <option value="zeeland">Zeeland</option>
                   <option value="zuidholland">Zuid-Holland</option>
                   </select>
               </td>
               </tr>
               <tr>
                   <td colspan="2"><h2>Accountgegevens</h2></td>
               </tr>
               <tr>
               <td>E-mailadres:</td><td><input type="text" name="email" /></td>
               </tr>
               <tr><td>Herhaal E-mailadres:</td><td><input type="text" name="email" />
               </td></tr>
               <tr><td>Wachtwoord:</td><td><input type="password" name="wachtwoord" /></td>
               </tr>
               <tr>
               <td>Wachtwoord herhalen:</td><td><input type="password" name="wachtwoord" /></td>
               </tr>
               <tr>
               <td><input type="checkbox" name="voorwaarden" value="akkoord" /> Ik ga akkoord met de voorwaarden</td>
               </tr>



               <tr><td><input type="button" value="Registreren" /></td>
               </tr>
           </table>
       </div>
	<div>

<?php include 'templates/footer.php'; ?>