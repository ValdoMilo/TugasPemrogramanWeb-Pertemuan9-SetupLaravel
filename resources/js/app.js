import './theme.js';

const initCopyButtons = () => {
  const buttons = document.querySelectorAll('[data-copy]');
  if (!buttons.length) return;
  const toast = document.getElementById('toast');

  const showToast = (msg) => {
    if (!toast) return;
    toast.textContent = msg;
    toast.classList.add('is-visible');
    clearTimeout(showToast._t);
    showToast._t = setTimeout(() => toast.classList.remove('is-visible'), 2000);
  };

  buttons.forEach((btn) => {
    btn.addEventListener('click', async () => {
      const text = btn.dataset.copy;
      if (!text) return;
      try {
        await navigator.clipboard.writeText(text);
        btn.classList.add('is-copied');
        showToast('✓ Perintah disalin');
        setTimeout(() => btn.classList.remove('is-copied'), 1500);
      } catch {
        showToast('Gagal menyalin');
      }
    });
  });
};

const initSmoothScroll = () => {
  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener('click', (e) => {
      const id = link.getAttribute('href');
      if (id === '#') return;
      const target = document.querySelector(id);
      if (!target) return;
      e.preventDefault();
      const top = target.getBoundingClientRect().top + window.scrollY - 88;
      window.scrollTo({ top, behavior: 'smooth' });
    });
  });
};

const initReveal = () => {
  const els = document.querySelectorAll('.feature-card, .install-step, .stack-card');
  if (!els.length || !('IntersectionObserver' in window)) return;

  els.forEach((el) => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
  });

  const obs = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  els.forEach((el, i) => {
    el.style.transitionDelay = `${(i % 3) * 60}ms`;
    obs.observe(el);
  });
};

const init = () => {
  initCopyButtons();
  initSmoothScroll();
  initReveal();
};

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', init);
} else {
  init();
}