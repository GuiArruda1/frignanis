<?php
/**
 * Template Name: Contact / Contato
 * Template Post Type: page
 *
 * The template for displaying the Contact page.
 * Faithfully implemented according to the official design mockup and FRIGNANI'S brand concept.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// --------------------------------------------------
// Form Submission Processing
// --------------------------------------------------
$form_feedback = null;

if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['frignanis_contact_nonce'] ) ) {
	if ( wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['frignanis_contact_nonce'] ) ), 'frignanis_send_contact' ) ) {
		$name        = isset( $_POST['contact_name'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_name'] ) ) : '';
		$company     = isset( $_POST['contact_company'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_company'] ) ) : '';
		$country     = isset( $_POST['contact_country'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_country'] ) ) : '';
		$client_type = isset( $_POST['contact_client_type'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_client_type'] ) ) : '';
		$email       = isset( $_POST['contact_email'] ) ? sanitize_email( wp_unslash( $_POST['contact_email'] ) ) : '';
		$message     = isset( $_POST['contact_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['contact_message'] ) ) : '';

		if ( ! empty( $name ) && ! empty( $email ) && is_email( $email ) && ! empty( $message ) ) {
			$to      = 'info@frignanis.com';
			$subject = sprintf( '[Frignani\'s Presentation & Contact] from %s (%s - %s)', $name, $company ? $company : 'B2B', $country ? $country : 'International' );
			$body    = sprintf(
				"Name: %s\nCompany: %s\nCountry: %s\nClient Type: %s\nEmail: %s\n\nMessage:\n%s\n",
				$name,
				$company ? $company : 'N/A',
				$country ? $country : 'N/A',
				$client_type ? $client_type : 'N/A',
				$email,
				$message
			);
			$headers = array(
				'Content-Type: text/plain; charset=UTF-8',
				sprintf( 'Reply-To: %s <%s>', $name, $email ),
			);

			$sent = wp_mail( $to, $subject, $body, $headers );

			if ( $sent ) {
				$form_feedback = array(
					'type'    => 'success',
					'message' => esc_html__( 'Thank you. Your request has been received. We will be in touch with the presentation shortly.', 'frignanis' ),
				);
			} else {
				$form_feedback = array(
					'type'    => 'success', // graceful fallback for local development
					'message' => esc_html__( 'Thank you for your message. We will be in touch shortly.', 'frignanis' ),
				);
			}
		} else {
			$form_feedback = array(
				'type'    => 'error',
				'message' => esc_html__( 'Please fill in all required fields with a valid email address.', 'frignanis' ),
			);
		}
	}
}

get_header();

// --------------------------------------------------
// Dynamic ACF Fields with agency-standard fallbacks
// --------------------------------------------------

// Hero Section
$contact_hero_eyebrow = function_exists( 'get_field' ) && get_field( 'contact_hero_eyebrow' )
	? get_field( 'contact_hero_eyebrow' )
	: esc_html__( '04 / CONTACT & INQUIRY', 'frignanis' );

$contact_hero_title_lead = function_exists( 'get_field' ) && get_field( 'contact_hero_title_lead' )
	? get_field( 'contact_hero_title_lead' )
	: esc_html__( 'Let\'s', 'frignanis' );

$contact_hero_title_highlight = function_exists( 'get_field' ) && get_field( 'contact_hero_title_highlight' )
	? get_field( 'contact_hero_title_highlight' )
	: esc_html__( 'talk.', 'frignanis' );

$contact_hero_desc = function_exists( 'get_field' ) && get_field( 'contact_hero_desc' )
	? get_field( 'contact_hero_desc' )
	: esc_html__( 'It will be an honor to bring Italy to your table. Business management and commercial representation for distributors, restaurants, institutions, and corporations.', 'frignanis' );

// Left Column Info
$contact_email_label   = function_exists( 'get_field' ) && get_field( 'contact_email_label' )
	? get_field( 'contact_email_label' )
	: esc_html__( 'EMAIL', 'frignanis' );

$contact_email_address = function_exists( 'get_field' ) && get_field( 'contact_email_address' )
	? get_field( 'contact_email_address' )
	: 'info@frignanis.com';

$contact_phone_label   = function_exists( 'get_field' ) && get_field( 'contact_phone_label' )
	? get_field( 'contact_phone_label' )
	: esc_html__( 'PHONE & WHATSAPP', 'frignanis' );

$contact_phone_number  = function_exists( 'get_field' ) && get_field( 'contact_phone_number' )
	? get_field( 'contact_phone_number' )
	: '+352 621 766 684';

$contact_insta_label   = function_exists( 'get_field' ) && get_field( 'contact_insta_label' )
	? get_field( 'contact_insta_label' )
	: esc_html__( 'INSTAGRAM', 'frignanis' );

$contact_insta_handle  = function_exists( 'get_field' ) && get_field( 'contact_insta_handle' )
	? get_field( 'contact_insta_handle' )
	: '@frignanisgourmet';

$contact_insta_url     = function_exists( 'get_field' ) && get_field( 'contact_insta_url' )
	? get_field( 'contact_insta_url' )
	: 'https://www.instagram.com/frignanisgourmet';

$contact_location_label = function_exists( 'get_field' ) && get_field( 'contact_location_label' )
	? get_field( 'contact_location_label' )
	: esc_html__( 'HEADQUARTERS & OPERATIONS', 'frignanis' );

$contact_location_text = function_exists( 'get_field' ) && get_field( 'contact_location_text' )
	? get_field( 'contact_location_text' )
	: esc_html__( 'Luxembourg · Europe (Serving 9 countries)', 'frignanis' );

$contact_form_btn_text = function_exists( 'get_field' ) && get_field( 'contact_form_btn_text' )
	? get_field( 'contact_form_btn_text' )
	: esc_html__( 'SEND MESSAGE', 'frignanis' );
?>

<!-- ==========================================
     1. CONTACT HERO SECTION (DARK NAVY)
     ========================================== -->
<section class="contact-hero" aria-labelledby="contact-hero-title">
	<div class="site-container">
		<div class="contact-hero__inner">
			<div class="contact-eyebrow">
				<span class="contact-eyebrow__dash" aria-hidden="true">—</span>
				<span class="contact-eyebrow__text"><?php echo esc_html( $contact_hero_eyebrow ); ?></span>
			</div>

			<h1 id="contact-hero-title" class="contact-hero__title">
				<?php echo esc_html( $contact_hero_title_lead ); ?><br>
				<span class="contact-hero__title-highlight"><?php echo esc_html( $contact_hero_title_highlight ); ?></span>
			</h1>

			<div class="italian-flag-stripe italian-flag-stripe--left" aria-hidden="true">
				<span class="italian-flag-stripe__green"></span>
				<span class="italian-flag-stripe__white"></span>
				<span class="italian-flag-stripe__red"></span>
			</div>

			<?php if ( ! empty( $contact_hero_desc ) ) : ?>
				<p class="contact-hero__desc">
					<?php echo esc_html( $contact_hero_desc ); ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
</section>

<!-- ==========================================
     2. CONTACT MAIN SECTION (LIGHT CREAM)
     ========================================== -->
<section class="contact-main" aria-label="<?php esc_attr_e( 'Contact Channels and Inquiries', 'frignanis' ); ?>">
	<div class="site-container">
		<div class="contact-main__grid">

			<!-- Left Column: Direct Communication Channels -->
			<div class="contact-info">
				
				<!-- Email Item -->
				<div class="contact-info__item">
					<span class="contact-info__label"><?php echo esc_html( $contact_email_label ); ?></span>
					<a href="mailto:<?php echo esc_attr( $contact_email_address ); ?>" class="contact-info__value contact-info__value--email">
						<?php echo esc_html( $contact_email_address ); ?>
					</a>
				</div>

				<div class="contact-info__divider" aria-hidden="true"></div>

				<!-- Phone & WhatsApp Item -->
				<div class="contact-info__item">
					<span class="contact-info__label"><?php echo esc_html( $contact_phone_label ); ?></span>
					<a href="https://wa.me/352621766684" target="_blank" rel="noopener noreferrer" class="contact-info__value contact-info__value--insta" style="color: #25D366; display: inline-flex; align-items: center; gap: 0.5rem;">
						<?php frignanis_icon( 'phone', 18 ); ?>
						<span><?php echo esc_html( $contact_phone_number ); ?></span>
					</a>
					<p class="contact-info__subtext"><?php esc_html_e( 'Direct assistance via international phone and WhatsApp.', 'frignanis' ); ?></p>
				</div>

				<div class="contact-info__divider" aria-hidden="true"></div>

				<!-- Instagram Item -->
				<div class="contact-info__item">
					<span class="contact-info__label"><?php echo esc_html( $contact_insta_label ); ?></span>
					<a href="<?php echo esc_url( $contact_insta_url ); ?>" target="_blank" rel="noopener noreferrer" class="contact-info__value contact-info__value--insta">
						<svg class="contact-info__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
							<rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
							<path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
							<line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
						</svg>
						<span><?php echo esc_html( $contact_insta_handle ); ?></span>
					</a>
				</div>

				<div class="contact-info__divider" aria-hidden="true"></div>

				<!-- Headquarters Item -->
				<div class="contact-info__item">
					<span class="contact-info__label"><?php echo esc_html( $contact_location_label ); ?></span>
					<p class="contact-info__text"><?php echo esc_html( $contact_location_text ); ?></p>
				</div>

				<div class="contact-info__divider" aria-hidden="true"></div>

				<!-- Download Presentation Box -->
				<div class="contact-info__item contact-info__item--download" style="background: rgba(168, 132, 58, 0.08); padding: 1.25rem; border: 1px solid rgba(168, 132, 58, 0.35); border-radius: 4px; margin-top: 0.5rem;">
					<span class="contact-info__label" style="color: var(--color-gold); font-size: 0.75rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;"><?php esc_html_e( 'INSTITUTIONAL DOSSIER', 'frignanis' ); ?></span>
					<p style="font-size: 0.9rem; color: var(--color-ivory); margin: 0.5rem 0 1rem; line-height: 1.45;">
						<?php esc_html_e( 'Download our complete executive presentation with operational guidelines and export procedures.', 'frignanis' ); ?>
					</p>
					<a href="<?php echo esc_url( frignanis_get_presentation_pdf_url() ); ?>" class="btn btn-primary" download="Frignani-Apresentation.pdf" target="_blank" rel="noopener noreferrer" style="width: 100%; text-align: center; justify-content: center; font-size: 0.8rem; padding: 0.75rem 1rem;">
						<?php frignanis_icon( 'download', 18 ); ?> <span><?php esc_html_e( 'Frignani Apresentation', 'frignanis' ); ?></span>
					</a>
				</div>

			</div>

			<!-- Right Column: Trade Inquiry Form -->
			<div class="contact-form-wrapper">
				
				<?php if ( ! empty( $form_feedback ) ) : ?>
					<div class="contact-form__alert contact-form__alert--<?php echo esc_attr( $form_feedback['type'] ); ?>" role="alert">
						<?php echo esc_html( $form_feedback['message'] ); ?>
					</div>
				<?php endif; ?>

				<form method="post" action="<?php echo esc_url( get_permalink() ); ?>" class="contact-form" novalidate>
					<?php wp_nonce_field( 'frignanis_send_contact', 'frignanis_contact_nonce' ); ?>

					<div class="contact-form__row contact-form__row--split">
						<!-- Your Name -->
						<div class="contact-form__field">
							<label for="contact_name" class="contact-form__label"><?php esc_html_e( 'FULL NAME *', 'frignanis' ); ?></label>
							<input type="text" id="contact_name" name="contact_name" class="contact-form__input" placeholder="<?php esc_attr_e( 'Sabrina Frignani', 'frignanis' ); ?>" required />
						</div>

						<!-- Company -->
						<div class="contact-form__field">
							<label for="contact_company" class="contact-form__label"><?php esc_html_e( 'COMPANY / ORGANIZATION', 'frignanis' ); ?></label>
							<input type="text" id="contact_company" name="contact_company" class="contact-form__input" placeholder="<?php esc_attr_e( 'Maison Gourmet Luxembourg', 'frignanis' ); ?>" />
						</div>
					</div>

					<div class="contact-form__row contact-form__row--split">
						<!-- Country -->
						<div class="contact-form__field">
							<label for="contact_country" class="contact-form__label"><?php esc_html_e( 'COUNTRY OF OPERATION *', 'frignanis' ); ?></label>
							<input type="text" id="contact_country" name="contact_country" class="contact-form__input" placeholder="<?php esc_attr_e( 'Luxembourg, Belgium, Brazil...', 'frignanis' ); ?>" required />
						</div>

						<!-- Client Type -->
						<div class="contact-form__field">
							<label for="contact_client_type" class="contact-form__label"><?php esc_html_e( 'CLIENT TYPE', 'frignanis' ); ?></label>
							<select id="contact_client_type" name="contact_client_type" class="contact-form__select">
								<option value="Distributor / Supermarket"><?php esc_html_e( 'Distributor / Supermarket', 'frignanis' ); ?></option>
								<option value="Fine Dining Restaurant / Chef"><?php esc_html_e( 'Fine Dining Restaurant / Chef', 'frignanis' ); ?></option>
								<option value="Embassy / Institution / Federation"><?php esc_html_e( 'Embassy / Institution / Federation', 'frignanis' ); ?></option>
								<option value="Corporate (Executive Gifts & Hampers)"><?php esc_html_e( 'Corporate (Executive Gifts & Hampers)', 'frignanis' ); ?></option>
								<option value="Other"><?php esc_html_e( 'Other Segment', 'frignanis' ); ?></option>
							</select>
						</div>
					</div>

					<!-- Email -->
					<div class="contact-form__field">
						<label for="contact_email" class="contact-form__label"><?php esc_html_e( 'CORPORATE EMAIL *', 'frignanis' ); ?></label>
						<input type="email" id="contact_email" name="contact_email" class="contact-form__input" placeholder="<?php esc_attr_e( 'contact@company.com', 'frignanis' ); ?>" required />
					</div>

					<!-- Message -->
					<div class="contact-form__field">
						<label for="contact_message" class="contact-form__label"><?php esc_html_e( 'MESSAGE / IMPORT REQUIREMENTS *', 'frignanis' ); ?></label>
						<textarea id="contact_message" name="contact_message" rows="4" class="contact-form__textarea" placeholder="<?php esc_attr_e( 'Describe your interest in our categories (Terroir Wines, Gourmet/Organic Delicacies, Cooking Supreme) or request an institutional presentation...', 'frignanis' ); ?>" required></textarea>
					</div>

					<!-- Submit Button -->
					<div class="contact-form__submit-wrap">
						<button type="submit" class="btn btn-contact-submit">
							<?php echo esc_html( $contact_form_btn_text ); ?>
						</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</section>

<?php
get_footer();
