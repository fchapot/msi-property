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
    <div class="content-nos-tarifs-transactions">


      <div class="div1-tarifs"><p class="menu-tarif menu-tarif-on">BARÊME <span>DES TRANSACTIONS</span></p></div>
      <div class="div2-tarifs"><p class="menu-tarif menu-tarif-off">BARÊME <span>DES LOCATIONS</span></p></div>
      <div class="div3-tarifs"><img src="<?= get_template_directory_uri().'/img/picto_07.svg' ?>" alt=""
          class="picto-nos-tarifs-transactions"></div>
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
              <td colspan="3" class="minitext-tarifs border-bottom-w">Mandat de recherche – 5 % TTC à la charge de l’acquéreur</td>
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
      </div> <!-- #div4-tarifs -->
    


    </div> <!-- #content-nos-tarifs-transactions -->
  </section>
</main>
<?php
get_sidebar();
get_footer();