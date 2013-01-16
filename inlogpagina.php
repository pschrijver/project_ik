<?php include 'templates/header.php'; ?>
<?php include 'templates/nav.php'; ?>

	<div id="content">
		<div id="inlogformulier">
				<table width="960">
					<tr>
					<h1> Log hier in </h1>
						<form>
							<table>
							<tr>
								<td><b>Username:</b></td>
								<td><input type="text" name="username" size="25" /></td>
							</tr>
							<tr>
								<td><b>Wachtwoord:</b></td>
								<td><input type="password" name="password" size="25" /></td>     </tr>
							<tr>
								<td><input type="submit" value="Log in" /></td>
							</tr>
							</table>
						</form>
					</tr>
				</table>
			</div>
		</div>

<?php include 'templates/footer.php'; ?>