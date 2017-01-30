Contenu de l'ancienne pageSelection.php :

		<?php foreach($resultat[1] as $film) : ?>
			<p>
				<a href="<?= $this->url('pageFilm', ['id' => $film['id']]) ?>">
					<img src="">
					<?php  //<?= $this->assetUrl("img/affichesFilms/" . $film['urlAffiche'] ) ?>
					<?= ( $film['anneeSel'] != 0 ) ? $film['anneeSel'] . " - " . $film['titreFr'] : $film['titreFr'] ." (". $film['anneeProd'] . ") " ?>
				</a>
					<?php
						// nb de cases cochées : $nbSelPerso
						$nbSelPerso = count($film['perso']);

						// initialisation des booléens qui servent à repérer les cases cochées :
						$vuOK = false; // vu
						$avOK = false; // à voir
						$prOK = false; // préféré

						if( $nbSelPerso > 0 ){
							foreach( $film['perso'] as $selPerso ){
								switch( $selPerso['libelle'] ){
									case 'vu' :
										$vuOK = true;
										break;
									case 'av' :
										$avOK = true;
										break;
									case 'pr' :
										$prOK = true;
										break;
								}
							}
						}

					?>

				<label for="<?= "vu" . $film['id'] ?>">vu</label>
					<input type="checkbox"
								id="<?= "vu" . $film['id'] ?>"
								name="<?= $film['id'] . "[]" ?>"
								<?= ( $vuOK ) ? "checked" : "value='vu'" ?> >
				<label for="<?= "av" . $film['id'] ?>">à voir</label>
					<input type="checkbox"
								id="<?= "av" . $film['id'] ?>"
								name="<?= $film['id'] . "[]" ?>"
								<?= ( $avOK ) ? "checked" : "value='av'" ?> >
				<label for="<?= "pr" . $film['id'] ?>">préféré</label>
					<input type="checkbox"
								id="<?= "pr" . $film['id'] ?>"
								name="<?= $film['id'] . "[]" ?>"
								<?= ( $prOK ) ? "checked" : "value='pr'" ?> >
			</p>
		<?php endforeach ?>
	</form>

	<?php else : // cas où personne n'est connecté ?>
		<?php foreach($resultat[1] as $film) : ?>
			<p>
				<a href="<?= $this->url('pageConnexion') ?>">
					<img src="<?= $film['urlAffiche'] ?>" >
					<?= ( $film['anneeSel'] != 0 ) ? $film['anneeSel'] . " - " . $film['titreFr'] : $film['titreFr'] ." (". $film['anneeProd'] . ") " ?>
				</a>
			</p>
		<?php endforeach ?>