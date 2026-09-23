/**
 * Frignani's - Main Vanilla JavaScript
 * Pure Vanilla JS, zero dependencies, strictly adhering to agency-wp-boilerplate standards.
 */

document.addEventListener('DOMContentLoaded', () => {
  initSplashScreen();
  initHeaderScroll();
  initMobileNav();
  initSmoothScroll();
});

/**
 * Luxury Splash Screen / Welcome Curtain
 */
function initSplashScreen() {
  const splash = document.getElementById('splash-screen');
  if (!splash) return;

  const urlParams = new URLSearchParams(window.location.search);
  const forceSplash = urlParams.has('splash') || urlParams.has('preview');
  const alreadySeen = sessionStorage.getItem('frignanis_splash_seen');

  // If already seen in this session and not forced, hide immediately
  if (alreadySeen && !forceSplash) {
    splash.style.display = 'none';
    return;
  }

  let isDismissed = false;

  const dismissSplash = () => {
    if (isDismissed) return;
    isDismissed = true;

    sessionStorage.setItem('frignanis_splash_seen', 'true');
    splash.classList.add('is-hidden');

    setTimeout(() => {
      splash.style.display = 'none';
    }, 1350);
  };

  // 1. Enter button click
  const enterBtn = document.getElementById('splash-enter-btn');
  if (enterBtn) {
    enterBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      dismissSplash();
    });
  }

  // 2. Click anywhere on splash backdrop
  splash.addEventListener('click', () => {
    dismissSplash();
  });

  // 3. Escape key to dismiss
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !isDismissed) {
      dismissSplash();
    }
  });

  // 4. Auto dismiss after 3.2 seconds
  setTimeout(() => {
    dismissSplash();
  }, 3200);
}

/**
 * Sticky Header backdrop blur on scroll
 */
function initHeaderScroll() {
  const header = document.querySelector('.site-header');
  if (!header) return;

  const handleScroll = () => {
    if (window.scrollY > 40) {
      header.classList.add('is-scrolled');
    } else {
      header.classList.remove('is-scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll(); // Initial check
}

/**
 * Mobile Navigation Toggle & Keyboard Accessibility
 */
function initMobileNav() {
  const toggleBtn = document.querySelector('.site-header__nav-toggle');
  const nav = document.querySelector('.site-header__nav');
  if (!toggleBtn || !nav) return;

  toggleBtn.addEventListener('click', () => {
    const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
    toggleBtn.setAttribute('aria-expanded', String(!isExpanded));
    nav.classList.toggle('is-open');

    if (!isExpanded) {
      document.body.style.overflow = 'hidden';
    } else {
      document.body.style.overflow = '';
    }
  });

  // Close on Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && nav.classList.contains('is-open')) {
      toggleBtn.setAttribute('aria-expanded', 'false');
      nav.classList.remove('is-open');
      document.body.style.overflow = '';
      toggleBtn.focus();
    }
  });
}

/**
 * Smooth scrolling for internal anchor links
 */
function initSmoothScroll() {
  const internalLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');

  internalLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
      const targetId = link.getAttribute('href');
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        e.preventDefault();
        const headerOffset = 80;
        const elementPosition = targetElement.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth',
        });

        // Close mobile nav if open
        const nav = document.querySelector('.site-header__nav');
        const toggleBtn = document.querySelector('.site-header__nav-toggle');
        if (nav && nav.classList.contains('is-open')) {
          nav.classList.remove('is-open');
          if (toggleBtn) toggleBtn.setAttribute('aria-expanded', 'false');
          document.body.style.overflow = '';
        }
      }
    });
  });
}
