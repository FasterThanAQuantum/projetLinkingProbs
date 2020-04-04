<form id="ajout_form" action="ajouter_aliment.php" method="POST">
<table>
<tr>
<th>Nom aliment:</th>
<td><input type="text" name="nom_aliment"></td>
</tr>
<tr>
<th>Ratio glucide:</th>
<td><input type="number" step="0.01" name="ratio_glucide"></td>
</tr>
<tr>
<th>Ratio Lipide:</th>
<td><input type="number" step="0.01" name="ratio_lipide"></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="Ajouter" /></td>
</tr>
</table>
</form>
