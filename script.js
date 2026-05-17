// Mobiles Menü
document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.nav-toggle');
  const links = document.querySelector('.nav-links');

  if (toggle && links) {
    toggle.addEventListener('click', () => {
      links.classList.toggle('open');
    });
    // Menü schließen beim Klick auf Link (Mobile)
    links.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => links.classList.remove('open'));
    });
  }

  // Jahr im Footer dynamisch setzen
  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Formular-Status aus URL-Parameter anzeigen
  const formStatus = document.getElementById('form-status');
  if (formStatus) {
    const params = new URLSearchParams(window.location.search);
    const status = params.get('status');
    if (status === 'erfolg') {
      formStatus.className = 'form-success';
      formStatus.textContent = 'Vielen Dank! Ihre Nachricht wurde erfolgreich gesendet. Ich melde mich so bald wie möglich bei Ihnen.';
      formStatus.scrollIntoView({ behavior: 'smooth', block: 'center' });
    } else if (status === 'fehler') {
      formStatus.className = 'form-error';
      formStatus.textContent = 'Leider ist beim Senden ein Fehler aufgetreten. Bitte versuchen Sie es erneut oder kontaktieren Sie mich direkt per Telefon oder E-Mail.';
      formStatus.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
  }

  // Scroll-Animation: alle Sektionen und Karten beim Scrollen einblenden
  const animEls = document.querySelectorAll('.section, .card, .info-block, .contact-tile, .feature-grid, .about-grid, .duo-grid');
  animEls.forEach(el => el.classList.add('fade-in'));

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });

  animEls.forEach(el => observer.observe(el));
});
