<?php $this->layout('layout', ['title' => $resultat[0]['titre']]) ?>

	<!-- <?php debug($resultat) ?> -->


	<!-- à faire : ajouter la possibilité, pour un utilisateur connecté, de cocher des cases :
					- "vu"
					- "à voir"
					- "ajouter à mes films préférés / sélection perso"
	-->

<?php $this->start('main_content') ?>

	<h1><?= $resultat[0]['titre'] ?> ...</h1>
	<p>
		<?= $resultat[0]['description'] ?>
	</p>

	<?php foreach($resultat[1] as $film) : ?>
		<p>
			<a href="<?= $this->url('pageFilm', ['id' => $film['id']]) ?>">
				<img src="<?= $film['urlAffiche'] ?>" >
				<?= ( $film['anneeSel'] != 0 ) ? $film['anneeSel'] . " - " : "" ?>
				<?=
					$film['titreFr']
					." (".
					$film['anneeProd']
					.") "
				?>
			</a>
		</p>
	<?php endforeach ?>

<?php $this->stop('main_content') ?>