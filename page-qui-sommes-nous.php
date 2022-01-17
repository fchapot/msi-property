<?php
/**
 *
 * @package msi-property
 */

get_header();
?>
<main>
  <section class="content content-not-front-page square">
    <div class="parent">
      <div class="div1 column-left">
        <img class="logo-mini" src="<?= get_template_directory_uri().'/img/logo-MSI-PROPERTY-w.png' ?>" alt="Logo MSI">
        <h3>Qui sommes-nous ?</h3>
        <h2>Agence immobilière</h2>
        <p>Accompagne ses clients français et étrangers dans leur projet d’achat ou<br>
          de vente immobilière.<br>
          Nous garantissons un accompagnement<br>
          sur-mesure dans tous vos projets immobiliers.</p>
        <ul>
          <li>Une expérience reconnue en transaction immobilière</li>
          <li>Une connaissance du secteur et des conseils avisés</li>
          <li>Une sélection des acquéreurs et une optimisation<br>
            du temps de commercialisation</li>
        </ul>
        <p>Nous sommes situés à 30 km au nord<br>
          de l’aéroport Paris-Charles-de-Gaulle.</p>
        <h2>Aménagement foncier et promotion immobilière</h2>
        <p>Nous développons également des opérations d’aménagement foncier et de promotion immobilière en Ile-de-France
          et dans l’Oise, de manière autonome ou en partenariat avec des acteurs nationaux et locaux.</p>
        <p>Nos projets s’inscrivent dans une logique de qualité durable en s’entourant d’intervenants reconnus pour
          leurs compétences.</p>
      </div>
      <div class="div2 column-right">
        <img class="profil" src="<?= get_template_directory_uri().'/img/profil.jpg' ?>" alt="">
        <div class="infos-contact">
          <h4>ANTOINE<br>
            HAINSSELIN<br>
            <span>MSI <span>PROPERTY</span></span>
          </h4>
          <ul>
            <li class="tel" >(+33) 3 44 57 76 26</li>
            <li class="mob">(+33) 6 76 34 51 71</li>
            <li class="mail"><a href="mailto:antoine@msi-property.com">antoine@msi-property.com</a></li>
          </ul>
        </div>
      </div>
        <div class="div3 sectionNumbers__item">
          <div class="sectionNumbers__number number1">8</div>
          <p>PROJETS À L’ÉTUDE</p>
          <img src="<?= get_template_directory_uri().'/img/picto_01.svg' ?>" alt="" class="picto">
        </div>
        <div class="div4 sectionNumbers__item">
          <div class="sectionNumbers__number number2">15</div>
          <p>PARTENAIRES<br>&nbsp;</p>
          <img src="<?= get_template_directory_uri().'/img/picto_02.svg' ?>" alt="" class="picto">

        </div>
        <div class="div5 sectionNumbers__item">
          <div class="sectionNumbers__number number3">9</div>
          <p>ANNÉES D’EXPÉRIENCE</p>
          <img src="<?= get_template_directory_uri().'/img/picto_03.svg' ?>" alt="" class="picto">

        </div>  
    </div>
  </section>
</main>
<?php
get_sidebar();
get_footer();