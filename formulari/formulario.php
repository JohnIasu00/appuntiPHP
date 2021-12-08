<form method="post" action="trattamentodati.php">

	<fieldset> 	<!--Riquadro opzionale formulario-->
		<legend>Titolo del nostro formulario</legend>
		<p>Uso autofocus per mettere gia il cursore nella prima sezzione di inserimento </p>
		<p>Uso required per selezzionare i campi obbligatori</p>
		<p>Inserimento nome utente<br>
		<input type="tesx" name="User" autofocus  required />	<!--Uso autofocus per mettere gia il cursore nella prima sezzione di inserimento -->
		</p>
		<p>Selezione tra un intervallo di numeri a step di 10 <br>
		<input type="number" name="Voto"  min="10" max="90" step="10"> 
		</p>
		<p>Selezione tra un intervallo tramite potenziometro lineare<br>
		<input type="range" name="Voto"  min="10" max="90" step="10"> 
		</p>
		<p>Selezzionare un colore<br>
		<input type="color" >
		</p>
		<p>Selezzionare una data<br>
		<input type="date" >
		</p>
		<p>Campo di ricerca<br>
		<input type="search" >
		</p>
		<p>Casella da selezzionare<br>
		<input type="checkbox" ><label>casella</label>
		</p>
		<p>Casella gia selezzionata per default ma desselezzionabile<br>
		<input type="checkbox" checked ><label>casella</label>
		</p>
		<p>Selezzionare una sola casella tra tante (le caselle devono avere lo stesso nome)<br>	
		<input type="radio" name="solo1" value="b1"><label>b1</label><br>
		<input type="radio" name="solo1" value="b2"><label>b2</label><br>
		<input type="radio" name="solo1" value="b3" checked ><label>b3 questa verra selezionata per default</label><br>
		<input type="radio" name="solo1" value="b4"><label>b4</label>
		</p>

		<p>Lista da selezzionare<br>
		<select name="localita" id="loc">
			<option value="francia">Francia</option>
			<option value="danimarca">Danimarca</option>
			<option value="belgio">Bbelgio</option>
			<option value="italia" selected >Italia (selezionata per default)</option>
			<option value="germania">Germania</option>
			<option value="spagna">Spagna</option>
			
		</select>
		</p>


	

		<br>
		<p>Bottone!!!<br>
			<input type="submit" value="Invio">
		</p>

		<br>

		<br>

	</fieldset>
	
</form>









