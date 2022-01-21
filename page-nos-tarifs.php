<?php
/**
 *
 * @package msi-property
 */

get_header();
?>
<main>
  <section class="content">
    <div class="bandes">
      <div class="left beige"></div>
      <div class="center darkgrey"></div>
      <div class="right beige"></div>
    </div>

    <div id="off" class="content-nos-tarifs">
      <div class="div1-tarifs tab">
        <a id="transactions" class="menu-tarif menu-tarif-on" href="#transactions">BARÊME <span>DES TRANSACTIONS</span></a>
      </div>
      <div class="div2-tarifs tab">
        <a id="locations" class="menu-tarif menu-tarif-off" href="#locations">BARÊME <span>DES LOCATIONS</span></a>
      </div>
      <div class="div3-tarifs"><img src="<?= get_template_directory_uri().'/img/picto_07.svg' ?>" alt=""
          class="picto-nos-tarifs"></div>
      <div class="div4-tarifs">
        <table class="table-tarifs">
          <tbody>
            <tr>
              <td class="border-all right">MONTANT DE LA VENTE<br>
                (MAISON, APPARTEMENT)</td>
              <td class="center">&nbsp;</td>
              <td class="border-all left">HONORAIRES</td>
            </tr>
            <tr>
              <td class="border-bottom">≤ 120 000 €</td>
              <td class="border-bottom">&nbsp;</td>
              <td class="border-bottom">5 000 € TTC</td>
            </tr>
            <tr>
              <td class="border-bottom">> 120 000 € – 300 000 €</td>
              <td class="border-bottom">&nbsp;</td>
              <td class="border-bottom">4,20 % TTC</td>
            </tr>
            <tr>
              <td class="border-bottom">> 300 000 €</td>
              <td class="border-bottom">&nbsp;</td>
              <td class="border-bottom">3,80 % TTC</td>
            </tr>
            <tr>
              <td colspan="3" class="minitext-tarifs border-bottom-w">Mandat de recherche – 5 % TTC à la charge de
                l’acquéreur</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" class="minitext-tarifs">Foncier constructible (promotion immobilière / aménagement) – 5%
                TTC à la charge de l’acquéreur</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
      </div>  <!-- #div4-tarifs -->
    </div>  <!-- #content-nos-tarifs -->




    <div id="on" class="content-nos-tarifs">
      <div class="div1-tarifs tab">
        <a id="transactions" class="menu-tarif menu-tarif-on" href="#transactions">BARÊME <span>DES TRANSACTIONS</span></a>
      </div>
      <div class="div2-tarifs tab">
        <a id="locations" class="menu-tarif menu-tarif-off" href="#locations">BARÊME <span>DES LOCATIONS</span></a>
      </div>
      <div class="div3-tarifs"><img src="<?= get_template_directory_uri().'/img/picto_09.svg' ?>" alt=""
          class="picto-nos-tarifs"></div>
      <div class="div4-tarifs">
        <section>
          <p class="charge">A LA CHARGE DU LOCATAIRE</p>
          <p>Recherche du locataire, visites, constitution du dossier et rédaction du bail</p>
          <p class="prixTTC underscore">8 € TTC / m<sup>2</sup></p>
          <p>Honoraires pour l’état des lieux : 3 € TTC / m<sup>2</sup></p>
        </section>
        <section>
          <p class="charge">A LA CHARGE DU LOCATAIRE</p>
          <p>Recherche du locataire, visites, constitution du dossier et rédaction du bail</p>
          <p class="prixTTC underscore">8 € TTC / m<sup>2</sup></p>
          <p>Honoraires pour l’état des lieux : 3 € TTC / m<sup>2</sup></p>
        </section>
      </div> <!-- #div4-tarifs -->
    </div>  <!-- #content-nos-tarifs -->


    





  </section>
</main>
<?php
get_sidebar();
get_footer();