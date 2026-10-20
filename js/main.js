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
 * Header and Navigation Translations Dictionary for all 6 official languages
 */
const FRIGNANIS_NAV_TRANSLATIONS = {
  home: {
    en: 'Home',
    pt: 'Início',
    it: 'Home',
    fr: 'Accueil',
    es: 'Inicio',
    de: 'Startseite'
  },
  mission: {
    en: 'Mission & Services',
    pt: 'Missão e Serviços',
    it: 'Missione e Servizi',
    fr: 'Mission et Services',
    es: 'Misión y Servicios',
    de: 'Mission & Dienstleistungen'
  },
  categories: {
    en: 'Categories',
    pt: 'Categorias',
    it: 'Categorie',
    fr: 'Catégories',
    es: 'Categorías',
    de: 'Kategorien'
  },
  about: {
    en: 'About Us',
    pt: 'Sobre Nós',
    it: 'Chi Siamo',
    fr: 'À Propos',
    es: 'Sobre Nosotros',
    de: 'Über Uns'
  },
  contact: {
    en: 'Contact',
    pt: 'Contato',
    it: 'Contatto',
    fr: 'Contact',
    es: 'Contacto',
    de: 'Kontakt'
  },
  cta: {
    en: 'REQUEST A PRESENTATION',
    pt: 'SOLICITAR UMA APRESENTAÇÃO',
    it: 'RICHIEDI UNA PRESENTAZIONE',
    fr: 'DEMANDER UNE PRÉSENTATION',
    es: 'SOLICITAR UNA PRESENTACIÓN',
    de: 'PRÄSENTATION ANFORDERN'
  }
};

/**
 * Updates Header navigation labels and CTA button immediately in DOM
 */
function updateHeaderNavLabels(lang) {
  const supported = ['en', 'pt', 'it', 'fr', 'es', 'de'];
  if (!supported.includes(lang)) return;

  // 1. Navigation links
  const navLinks = document.querySelectorAll('.site-header__nav-link, #menu-primary-menu a, .site-header__nav a');
  navLinks.forEach((link) => {
    const href = (link.getAttribute('href') || '').toLowerCase();
    const txt = (link.textContent || '').trim().toLowerCase();

    if (href === '/' || href.endsWith('/preview.html') || href === '#' || txt === 'home' || txt === 'início' || txt === 'inicio' || txt === 'accueil' || txt === 'startseite') {
      link.textContent = FRIGNANIS_NAV_TRANSLATIONS.home[lang] || 'Home';
    } else if (href.includes('mission') || href.includes('missao') || txt.includes('mission') || txt.includes('missão')) {
      link.textContent = FRIGNANIS_NAV_TRANSLATIONS.mission[lang] || 'Mission & Services';
    } else if (href.includes('categor') || txt.includes('categor')) {
      link.textContent = FRIGNANIS_NAV_TRANSLATIONS.categories[lang] || 'Categories';
    } else if (href.includes('about') || href.includes('sobre') || href.includes('quem-somos') || txt.includes('about') || txt.includes('sobre') || txt.includes('chi siamo') || txt.includes('propos') || txt.includes('über uns')) {
      link.textContent = FRIGNANIS_NAV_TRANSLATIONS.about[lang] || 'About Us';
    } else if (href.includes('contact') || href.includes('contat') || txt.includes('contact') || txt.includes('contat') || txt.includes('kontakt')) {
      link.textContent = FRIGNANIS_NAV_TRANSLATIONS.contact[lang] || 'Contact';
    }
  });

  // 2. Header action CTA button
  const ctaBtns = document.querySelectorAll('.btn-header-contact');
  ctaBtns.forEach((btn) => {
    btn.textContent = FRIGNANIS_NAV_TRANSLATIONS.cta[lang] || FRIGNANIS_NAV_TRANSLATIONS.cta.en;
  });

  // 3. Footer navigation links
  const footerNavLinks = document.querySelectorAll('.site-footer__link');
  footerNavLinks.forEach((link) => {
    const href = (link.getAttribute('href') || '').toLowerCase();
    const txt = (link.textContent || '').trim().toLowerCase();
    if (href === '/' || href.endsWith('/preview.html') || txt === 'home' || txt === 'início' || txt === 'inicio' || txt === 'accueil' || txt === 'startseite') {
      link.textContent = FRIGNANIS_NAV_TRANSLATIONS.home[lang] || 'Home';
    } else if (href.includes('mission') || href.includes('missao') || txt.includes('mission') || txt.includes('missão')) {
      link.textContent = FRIGNANIS_NAV_TRANSLATIONS.mission[lang] || 'Mission & Services';
    } else if (href.includes('about') || href.includes('sobre') || txt.includes('about') || txt.includes('sobre') || txt.includes('chi siamo') || txt.includes('propos') || txt.includes('über uns')) {
      link.textContent = FRIGNANIS_NAV_TRANSLATIONS.about[lang] || 'About Us';
    } else if (href.includes('contact') || href.includes('contat') || txt.includes('contact') || txt.includes('contat') || txt.includes('kontakt')) {
      link.textContent = FRIGNANIS_NAV_TRANSLATIONS.contact[lang] || 'Contact';
    }
  });
}

/**
 * Custom Language Switcher:
 * - PT: Preserves authentic human-written noble briefing text (served directly by WordPress/PHP)
 * - EN: Preserves authentic human-written international trade text (served directly by WordPress/PHP)
 * - FR, IT, ES, DE: Clean translated navigation & server endpoints across all 6 languages.
 */
function initLanguageSwitcher() {
  const langSelects = document.querySelectorAll('.lang-select');
  if (!langSelects.length) return;

  const supported = ['en', 'pt', 'it', 'fr', 'es', 'de'];
  const serverLang = (document.body.getAttribute('data-server-lang') || 'en').toLowerCase();
  const bodyTargetLang = (document.body.getAttribute('data-target-lang') || serverLang).toLowerCase();

  // Helper to read cookie
  function getCookie(name) {
    const match = document.cookie.match(new RegExp('(^|;\\s*)(' + name + ')=([^;]*)'));
    return match ? decodeURIComponent(match[3]).toLowerCase() : null;
  }

  // Helper to set cookie
  function setCookie(name, value, days) {
    const expires = days ? '; max-age=' + (days * 86400) : '';
    document.cookie = name + '=' + encodeURIComponent(value) + '; path=/' + expires + '; SameSite=Lax';
  }

  // Helper to clear machine translation cookies
  function clearGTCookies() {
    const hostname = window.location.hostname;
    const domains = [hostname, '.' + hostname.replace(/^www\./, ''), ''];
    domains.forEach((d) => {
      document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;' + (d ? ' domain=' + d + ';' : '');
      document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=' + window.location.pathname + ';' + (d ? ' domain=' + d + ';' : '');
    });
    try {
      localStorage.removeItem('__GT_TRANSLATE_LANGS');
    } catch (e) {}
  }

  // Active language resolution
  let initialLang = bodyTargetLang;
  const cookieLang = getCookie('frignanis_lang');
  if (cookieLang && supported.includes(cookieLang)) {
    initialLang = cookieLang;
  }

  // Synchronize all selects to the active language
  langSelects.forEach((select) => {
    select.value = initialLang;
  });

  // Immediately synchronize header labels in DOM
  updateHeaderNavLabels(initialLang);

  // If initial language is PT or EN, clear any lingering translation cookies
  if (initialLang === 'pt' || initialLang === 'en') {
    clearGTCookies();
  }

  // Handle user selecting a language
  function handleLanguageChange(targetLang) {
    targetLang = (targetLang || 'en').toLowerCase();
    if (!supported.includes(targetLang)) return;

    // Immediately update header labels in DOM
    updateHeaderNavLabels(targetLang);

    // Update all selects
    langSelects.forEach((s) => {
      s.value = targetLang;
    });

    // Persist choice in cookie and localStorage
    setCookie('frignanis_lang', targetLang, 365);
    try {
      localStorage.setItem('frignanis_lang', targetLang);
    } catch (e) {}

    // Check if running on static preview file
    const isStaticPreview = window.location.pathname.endsWith('.html') || window.location.protocol === 'file:';
    if (isStaticPreview) {
      document.documentElement.lang = targetLang;
      return;
    }

    // Clear machine translation cookies for native languages (PT/EN)
    if (targetLang === 'pt' || targetLang === 'en') {
      clearGTCookies();
    }

    // In WordPress environment, reload with target language query parameter
    const url = new URL(window.location.href);
    if (url.searchParams.get('lang') !== targetLang) {
      url.searchParams.set('lang', targetLang);
      window.location.href = url.toString();
    } else {
      window.location.reload();
    }
  }

  // Attach event listeners
  langSelects.forEach((select) => {
    select.addEventListener('change', (e) => {
      handleLanguageChange(e.target.value);
    });
  });
}
