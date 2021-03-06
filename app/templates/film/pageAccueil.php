<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div class="wraper">

	<div class="iso-nav">
		<!-- Liste des icônes de groupes pour tri rapide -->
		<ul>
			<li class="active" data-filter="*">Tous les thèmes !</li>
			<li data-filter=".recompenses"><img src="<?= $this->assetUrl('img/accueil/icones/recompenses.png') ?>" alt=""><p>Récompenses</p></li>
			<li data-filter=".genres"><img src="<?= $this->assetUrl('img/accueil/icones/clap.png') ?>" alt=""><p>Genres</p></li>
			<li data-filter=".selectionsPerso"><img src="<?= $this->assetUrl('img/accueil/icones/selectionsPerso.png') ?>" alt=""><p>Perso</p></li>
			<li data-filter=".autres"><img src="<?= $this->assetUrl('img/accueil/icones/points.png') ?>" alt=""><p>Autres</p></li>
		</ul>
	</div>

	<div class="main-iso">

		<!-- Groupe des récompenses (Palmes d'Or, Césars, Oscars, Ours d'Or, etc ...)              -->
		<!-- Groupe des sélections personnelles (vus, à voir, préférés, ...)                       -->
		<!-- Groupe des genres (aventure, comédie dramatique, comédie, policier, drame, etc ...)   -->
		<!-- Groupe des autres présélections (classiques, cultes, UGC, etc ...)                    -->


		<div class="item autres">
			<img src="<?= $this->assetUrl('img/accueil/autres/007.png') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pageSelections', ['theme' => "007", 'p' => 1]) ?>" class="taille_a couleur_autres">
				<span class="affichage_titre">
					007
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>

		<div class="item genres">
			<img src="<?= $this->assetUrl('img/accueil/genres/comDra.jpg') ?>" alt="" class="taille_img">
			<a href="#" class="taille_a couleur_genres">
				<span class="affichage_titre">
					Comédies dramatiques
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>

		<div class="item recompenses">
			<img src="<?= $this->assetUrl('img/accueil/recompenses/palmesOr.png') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pageSelections', ['theme' => "palmesOr", 'p' => 1]) ?>" class="taille_a couleur_recompenses">
				<span class="affichage_titre">
					Palmes d'Or
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>

		<div class="item autres">
			<img src="<?= $this->assetUrl('img/accueil/autres/sf.jpg') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pageSelections', ['theme' => "sf", 'p' => 1]) ?>" class="taille_a couleur_autres">
				<span class="affichage_titre">
					S.F.
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>

		<div class="item recompenses">
			<img src="<?= $this->assetUrl('img/accueil/recompenses/cesars.jpg') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pageSelections', ['theme' => "cesars", 'p' => 1]) ?>" class="taille_a couleur_recompenses">
				<span class="affichage_titre">
					Césars
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>

		<div class="item autres">
			<img src="<?= $this->assetUrl('img/accueil/autres/cdc.png') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pageSelections', ['theme' => "cdc", 'p' => 1]) ?>" class="taille_a couleur_autres">
				<span class="affichage_titre">
					Sélection Cahiers du Cinéma 2016
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>

		<?php if( ! empty($_SESSION) ) : ?>
		<div class="item selectionsPerso">
			<img src="<?= $this->assetUrl('img/accueil/selectionsPerso/vus.jpg') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pagePersos', ['perso' => "pr", 'p' => 1]) ?>" class="taille_a couleur_selectionsPerso">
				<span class="affichage_titre">
					Films préférés
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>
		<?php endif ?>

		<div class="item recompenses">
			<img src="<?= $this->assetUrl('img/accueil/recompenses/oscars.jpg') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pageSelections', ['theme' => "oscars", 'p' => 1]) ?>" class="taille_a couleur_recompenses">
				<span class="affichage_titre">
					Oscars
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>

		<div class="item recompenses">
			<img src="<?= $this->assetUrl('img/accueil/recompenses/oursOr.jpg') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pageSelections', ['theme' => "oursOr", 'p' => 1]) ?>" class="taille_a couleur_recompenses">
				<span class="affichage_titre">
					Ours d'Or
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>

		<?php if( ! empty($_SESSION) ) : ?>
		<div class="item selectionsPerso">
			<img src="<?= $this->assetUrl('img/accueil/selectionsPerso/vus.jpg') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pagePersos', ['perso' => "av", 'p' => 1]) ?>" class="taille_a couleur_selectionsPerso">
				<span class="affichage_titre">
					Films à voir
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>
		<?php endif ?>

		<div class="item autres">
			<img src="<?= $this->assetUrl('img/accueil/autres/ugc.jpg') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pageSelections', ['theme' => "ugc", 'p' => 1]) ?>" class="taille_a couleur_autres">
				<span class="affichage_titre">
					Sélection UGC 2016
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>

		<div class="item recompenses">
			<img src="<?= $this->assetUrl('img/accueil/recompenses/lionsOr.jpg') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pageSelections', ['theme' => "lionsOr", 'p' => 1]) ?>" class="taille_a couleur_recompenses">
				<span class="affichage_titre">
					Lions d'Or
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>

		<div class="item autres">
			<img src="<?= $this->assetUrl('img/accueil/autres/hollywood.jpg') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pageSelections', ['theme' => "hollywood", 'p' => 1]) ?>" class="taille_a couleur_autres">
				<span class="affichage_titre">
					Hollywood's 100
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>

		<?php if( ! empty($_SESSION) ) : ?>
		<div class="item selectionsPerso">
			<img src="<?= $this->assetUrl('img/accueil/selectionsPerso/vus.jpg') ?>" alt="" class="taille_img">
			<a href="<?= $this->url('pagePersos', ['perso' => "vu", 'p' => 1]) ?>" class="taille_a couleur_selectionsPerso">
				<span class="affichage_titre">
					Films vus
				</span>
				<span class="affichage_text">
					<!--  -->
				</span>
			</a>
		</div>
		<?php endif ?>

	</div>
</div>

<?php $this->stop('main_content') ?>

