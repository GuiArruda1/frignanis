/**
 * Frignani's - Main Vanilla JavaScript
 * Pure Vanilla JS, zero dependencies, strictly adhering to agency-wp-boilerplate standards.
 */

document.addEventListener('DOMContentLoaded', () => {
  initSplashScreen();
  initHeaderScroll();
  initMobileNav();
  initSmoothScroll();
  initLanguageSwitcher();
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

  // Synchronize tagline text according to active user language (prevents duplication)
  const taglineEl = splash.querySelector('.splash-screen__tagline-phrase');
  if (taglineEl && taglineEl.dataset) {
    let activeLang = 'en';
    try {
      const gtSaved = JSON.parse(localStorage.getItem('__GT_TRANSLATE_LANGS'));
      if (gtSaved && gtSaved.tgtLang) {
        activeLang = gtSaved.tgtLang.toLowerCase();
      } else {
        activeLang = localStorage.getItem('frignanis_lang') || (navigator.language && navigator.language.toLowerCase().startsWith('pt') ? 'pt' : 'en');
      }
    } catch (e) {
      activeLang = localStorage.getItem('frignanis_lang') || (navigator.language && navigator.language.toLowerCase().startsWith('pt') ? 'pt' : 'en');
    }

    if (taglineEl.dataset[activeLang]) {
      taglineEl.textContent = taglineEl.dataset[activeLang];
    }
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

  // 4. Auto dismiss after 4.2 seconds (allowing the luxury Italy-Luxembourg bridge animation to complete)
  setTimeout(() => {
    dismissSplash();
  }, 4200);
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

/**
 * Custom Language Switcher integration with GTranslate
 * Automatically translates the entire site via GTranslate lib without manual translation effort.
 */
function initLanguageSwitcher() {
  const langSelects = document.querySelectorAll('.lang-select');
  if (!langSelects.length) return;

  const defaultLang = 'en';

  // Load GTranslate Translation Engine Lib dynamically if not already loaded
  function loadGTLib(callback) {
    if (window.__GT && window.__GT.translator) {
      callback && callback();
      return;
    }

    if (!window.gt_translate_script) {
      window.gt_translate_script = document.createElement('script');
      window.gt_translate_script.src = 'https://cdn.gtranslate.net/widgets/latest/lib.min.js';
      window.gt_translate_script.async = true;
      document.body.appendChild(window.gt_translate_script);
      window.gt_translate_script.addEventListener('load', () => {
        callback && callback();
      }, { once: true });
    } else {
      callback && callback();
    }
  }

  // Translate function wrapper
  function switchLanguage(targetLang) {
    targetLang = (targetLang || defaultLang).toLowerCase();
    
    // Store in localStorage for GTranslate and theme persistence
    try {
      localStorage.setItem('__GT_TRANSLATE_LANGS', JSON.stringify({ srcLang: defaultLang, tgtLang: targetLang }));
      localStorage.setItem('frignanis_lang', targetLang);
    } catch (e) {}

    // Update all select dropdowns across headers (desktop and mobile)
    langSelects.forEach((select) => {
      select.value = targetLang;
    });

    loadGTLib(() => {
      if (window.__GT && window.__GT.translator) {
        window.__GT.translator.translate(defaultLang, targetLang);
      } else if (typeof window.doGTranslate === 'function') {
        window.doGTranslate(defaultLang + '|' + targetLang);
      }
    });
  }

  // Pre-fetch on user interaction (hover/focus) for instant translation
  langSelects.forEach((select) => {
    select.addEventListener('pointerenter', () => loadGTLib(), { once: true });
    select.addEventListener('focusin', () => loadGTLib(), { once: true });

    // Handle change event
    select.addEventListener('change', (e) => {
      const selected = e.target.value;
      switchLanguage(selected);
    });
  });

  // Restore active language from saved session/localStorage
  let savedLang = defaultLang;
  try {
    const gtSaved = JSON.parse(localStorage.getItem('__GT_TRANSLATE_LANGS'));
    if (gtSaved && gtSaved.tgtLang) {
      savedLang = gtSaved.tgtLang.toLowerCase();
    } else {
      savedLang = localStorage.getItem('frignanis_lang') || defaultLang;
    }
  } catch (e) {
    savedLang = localStorage.getItem('frignanis_lang') || defaultLang;
  }

  if (savedLang && savedLang !== defaultLang) {
    langSelects.forEach((select) => {
      select.value = savedLang;
    });
    // Trigger auto-translate for returning visitors
    loadGTLib(() => {
      switchLanguage(savedLang);
    });
  }
}
