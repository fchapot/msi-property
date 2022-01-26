<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package msi-property
 */

?>

<footer>
  <div class="infos-footer">
    <ul>
      <li>© MSI Property. Tous droits réservés.</li>
      <li>Carte professionnelle de « Transactions sur immeubles et fonds de commerce »: N° CPI 6003 2020 000 044 869
      </li>
      <li>Responsabilité civile professionnelle : MMA IARD 14 Boulevard MARIE ET ALEXANDRE OYON 72030 LE MANS CEDEX 9
      </li>
      <li>RCS de Compiègne : 884 201 021</li>
      <li>Mentions Légales – Réalisation : Iconic Design / Fabrice Chapot</li>
    </ul>
  </div>
  <img class="logo logo-linkedin" src="<?= get_template_directory_uri().'/img/logo_linkedin.png' ?>" alt="">
  <img class="logo logo-fnaim" src="<?= get_template_directory_uri().'/img/logo_fnaim.png' ?>" alt="">
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>