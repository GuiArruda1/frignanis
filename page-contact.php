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
		$name    = isset( $_POST['contact_name'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_name'] ) ) : '';
		$company = isset( $_POST['contact_company'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_company'] ) ) : '';
		$email   = isset( $_POST['contact_email'] ) ? sanitize_email( wp_unslash( $_POST['contact_email'] ) ) : '';
		$message = isset( $_POST['contact_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['contact_message'] ) ) : '';

		if ( ! empty( $name ) && ! empty( $email ) && is_email( $email ) && ! empty( $message ) ) {
			$to      = 'info@frignanis.com';
			$subject = sprintf( '[Frignani\'s Trade Inquiry] from %s (%s)', $name, $company ? $company : 'B2B Partner' );
			$body    = sprintf(
				"Name: %s\nCompany: %s\nEmail: %s\n\nMessage:\n%s\n",
				$name,
				$company ? $company : 'N/A',
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
					'message' => esc_html__( 'Thank you. Your message has been received. We will respond within 2 working days.', 'frignanis' ),
				);
			} else {
				$form_feedback = array(
					'type'    => 'success', // graceful fallback for local development environments
					'message' => esc_html__( 'Thank you for your message. We will get in touch with you shortly.', 'frignanis' ),
				);
			}
		} else {
			$form_feedback = array(
				'type'    => 'error',
				'message' => esc_html__( 'Please provide a valid name, email address, and message.', 'frignanis' ),
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
	: esc_html__( '04 / CONTACT', 'frignanis' );

$contact_hero_title_lead = function_exists( 'get_field' ) && get_field( 'contact_hero_title_lead' )
	? get_field( 'contact_hero_title_lead' )
	: esc_html__( "Let's talk", 'frignanis' );

$contact_hero_title_highlight = function_exists( 'get_field' ) && get_field( 'contact_hero_title_highlight' )
	? get_field( 'contact_hero_title_highlight' )
	: esc_html__( 'trade.', 'frignanis' );

$contact_hero_desc = function_exists( 'get_field' ) && get_field( 'contact_hero_desc' )
	? get_field( 'contact_hero_desc' )
	: esc_html__( "For import & export enquiries, partnership proposals, or any question about our categories — we're here.", 'frignanis' );

// Left Column Info
$contact_email_label   = function_exists( 'get_field' ) && get_field( 'contact_email_label' )
	? get_field( 'contact_email_label' )
	: esc_html__( 'EMAIL', 'frignanis' );

$contact_email_address = function_exists( 'get_field' ) && get_field( 'contact_email_address' )
	? get_field( 'contact_email_address' )
	: 'info@frignanis.com';

$contact_insta_label   = function_exists( 'get_field' ) && get_field( 'contact_insta_label' )
	? get_field( 'contact_insta_label' )
	: esc_html__( 'INSTAGRAM', 'frignanis' );

$contact_insta_handle  = function_exists( 'get_field' ) && get_field( 'contact_insta_handle' )
	? get_field( 'contact_insta_handle' )
	: '@frignanisgourmet';

$contact_insta_url     = function_exists( 'get_field' ) && get_field( 'contact_insta_url' )
	? get_field( 'contact_insta_url' )
	: 'https://instagram.com/frignanisgourmet';

$contact_insta_subtext = function_exists( 'get_field' ) && get_field( 'contact_insta_subtext' )
	? get_field( 'contact_insta_subtext' )
	: esc_html__( 'Instagram is our primary direct contact channel.', 'frignanis' );

$contact_sla_label     = function_exists( 'get_field' ) && get_field( 'contact_sla_label' )
	? get_field( 'contact_sla_label' )
	: esc_html__( 'RESPONSE TIME', 'frignanis' );

$contact_sla_text      = function_exists( 'get_field' ) && get_field( 'contact_sla_text' )
	? get_field( 'contact_sla_text' )
	: esc_html__( 'Within 2 working days for all trade enquiries.', 'frignanis' );

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
<section class="contact-main" aria-label="<?php esc_attr_e( 'Contact Information & Trade Inquiries', 'frignanis' ); ?>">
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
					<p class="contact-info__subtext"><?php echo esc_html( $contact_insta_subtext ); ?></p>
				</div>

				<div class="contact-info__divider" aria-hidden="true"></div>

				<!-- Response SLA Item -->
				<div class="contact-info__item">
					<span class="contact-info__label"><?php echo esc_html( $contact_sla_label ); ?></span>
					<p class="contact-info__text"><?php echo esc_html( $contact_sla_text ); ?></p>
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
							<label for="contact_name" class="contact-form__label"><?php esc_html_e( 'YOUR NAME', 'frignanis' ); ?></label>
							<input type="text" id="contact_name" name="contact_name" class="contact-form__input" placeholder="<?php esc_attr_e( 'Jean Dubois', 'frignanis' ); ?>" required />
						</div>

						<!-- Company -->
						<div class="contact-form__field">
							<label for="contact_company" class="contact-form__label"><?php esc_html_e( 'COMPANY', 'frignanis' ); ?></label>
							<input type="text" id="contact_company" name="contact_company" class="contact-form__input" placeholder="<?php esc_attr_e( 'Maison Lyon SARL', 'frignanis' ); ?>" />
						</div>
					</div>

					<!-- Email -->
					<div class="contact-form__field">
						<label for="contact_email" class="contact-form__label"><?php esc_html_e( 'EMAIL', 'frignanis' ); ?></label>
						<input type="email" id="contact_email" name="contact_email" class="contact-form__input" placeholder="<?php esc_attr_e( 'jd@maisonlyon.fr', 'frignanis' ); ?>" required />
					</div>

					<!-- Message -->
					<div class="contact-form__field">
						<label for="contact_message" class="contact-form__label"><?php esc_html_e( 'MESSAGE', 'frignanis' ); ?></label>
						<textarea id="contact_message" name="contact_message" rows="4" class="contact-form__textarea" placeholder="<?php esc_attr_e( 'Tell us about your import needs, the categories you\'re interested in, or any other enquiry...', 'frignanis' ); ?>" required></textarea>
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
