<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

    <div class="content-contact">

      <div class="content-contact-left-column">
        <img src="<?= get_template_directory_uri().'/img/visuel-contact.jpg' ?>" alt="">
        <div class="content-contact-infos">
          <h4>ANTOINE HAINSSELIN<br>
            <span>MSI <span>PROPERTY</span></span>
          </h4>
          <ul>
            <li class="tel">(+33) 3 44 57 76 26</li>
            <li class="mob">(+33) 6 76 34 51 71</li>
            <li class="mail"><a href="mailto:antoine@msi-property.com">antoine@msi-property.com</a></li>
          </ul>
          <div class="cel3">
            <p><span>Notre localisation</span><br>
              23 rue du Moulin<br>
              60300 Montlognon<br>
              France</p>
          </div>
          <div class="cel4">
            <p>Dispositif de médiation des litiges de consommation</p>
          </div>
        </div>
      </div> <!-- #content-contact-left-column -->

      <div class="content-contact-right-column">
        <div class="newsletter">
          <p>INSCRIPTION À LA NEWS LETTER<br>MSI PROPERTY</p>
        </div>
        <div>
          <?php the_content() ?>

          <!-- <div class="wpforms-container wpforms-container-full" id="wpforms-66">
            <form id="wpforms-form-66" class="wpforms-validate wpforms-form wpforms-ajax-form" data-formid="66"
              method="post" enctype="multipart/form-data" action="/contact/"
              data-token="11b094bcdac9d6bcefad982942befe62"><noscript class="wpforms-error-noscript">Please enable
                JavaScript in your browser to complete this form.</noscript>
                
              <div class="wpforms-field-container">

                <div id="wpforms-66-field_1-container" class="wpforms-field wpforms-field-text" data-field-id="1">
                  <label class="wpforms-field-label" for="wpforms-66-field_1">JE CHERCHE</label>
                  <input type="text" id="wpforms-66-field_1" class="wpforms-field-medium" name="wpforms[fields][1]">
                </div>

                <div id="wpforms-66-field_2-container" class="wpforms-field wpforms-field-text" data-field-id="2"><label
                    class="wpforms-field-label" for="wpforms-66-field_2">SUR LE SECTEUR</label><input type="text"
                    id="wpforms-66-field_2" class="wpforms-field-medium" name="wpforms[fields][2]"></div>

                <div id="wpforms-66-field_3-container" class="wpforms-field wpforms-field-number" data-field-id="3">
                  <label class="wpforms-field-label" for="wpforms-66-field_3">MON BUDGET</label><input type="number"
                    pattern="\d*" id="wpforms-66-field_3" class="wpforms-field-medium" name="wpforms[fields][3]"></div>

                <div id="wpforms-66-field_4-container" class="wpforms-field wpforms-field-email" data-field-id="4">
                  <label class="wpforms-field-label" for="wpforms-66-field_4">ADRESSE MAIL <span
                      class="wpforms-required-label">*</span></label><input type="email" id="wpforms-66-field_4"
                    class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][4]" required></div>

                <div id="wpforms-66-field_5-container" class="wpforms-field wpforms-field-number" data-field-id="5">
                  <label class="wpforms-field-label" for="wpforms-66-field_5">TÉLÉPHONE</label><input type="number"
                    pattern="\d*" id="wpforms-66-field_5" class="wpforms-field-medium" name="wpforms[fields][5]"></div>

                <div id="wpforms-66-field_6-container" class="wpforms-field wpforms-field-textarea" data-field-id="6">
                  <label class="wpforms-field-label" for="wpforms-66-field_6">MESSAGE</label><textarea
                    id="wpforms-66-field_6" class="wpforms-field-medium" name="wpforms[fields][6]"></textarea></div>
              </div>

              <div class="wpforms-submit-container">
                <input type="hidden" name="wpforms[id]" value="66">
                <input type="hidden" name="wpforms[nonce]" value="069fe7a488" />
                <input type="hidden" name="wpforms[author]" value="0">
                <input type="hidden" name="wpforms[post_id]" value="63">
                <button type="submit" name="wpforms[submit]" id="wpforms-submit-66" class="wpforms-submit" data-alt-text="Sending..." data-submit-text="Submit" aria-live="assertive" value="wpforms-submit">Submit</button>
                  <img src="http://localhost:10064/wp-content/plugins/wpforms-lite/assets/images/submit-spin.svg"
                  class="wpforms-submit-spinner" style="display: none;" width="26" height="26" alt="">
              </div>
            </form>
          </div> -->

        </div>




      
    </div> <!-- #content-contact-right-column -->

    </div> <!-- #content-contact -->
  </section> <!-- #content -->
</main>

<?php
get_sidebar();
get_footer();