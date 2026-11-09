// Theme: follow system, allow manual toggle
const root = document.documentElement;
const saved = localStorage.getItem('theme');
root.dataset.theme = saved || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
document.getElementById('theme').addEventListener('click', () => {
  root.dataset.theme = root.dataset.theme === 'dark' ? 'light' : 'dark';
  localStorage.setItem('theme', root.dataset.theme);
});

// Mobile menu
const btn = document.querySelector('.menu-btn'), nav = document.querySelector('.nav nav');
btn.addEventListener('click', () => btn.setAttribute('aria-expanded', nav.classList.toggle('open')));
nav.addEventListener('click', e => { if (e.target.tagName === 'A') { nav.classList.remove('open'); btn.setAttribute('aria-expanded', 'false'); } });

// Typing role
const roles = ['Junior Software Developer', 'DevOps & cloud learner', 'Python developer'];
const el = document.getElementById('role');
let r = 0, c = 0, del = false;
(function type() {
  const word = roles[r];
  el.textContent = word.slice(0, c += del ? -1 : 1);
  let wait = del ? 45 : 90;
  if (!del && c === word.length) { del = true; wait = 1400; }
  else if (del && c === 0) { del = false; r = (r + 1) % roles.length; wait = 350; }
  setTimeout(type, wait);
})();

// Skill bars fill when visible
const io = new IntersectionObserver(entries => entries.forEach(e => {
  if (e.isIntersecting) { e.target.style.width = e.target.dataset.w + '%'; io.unobserve(e.target); }
}), { threshold: .4 });
document.querySelectorAll('.bar i').forEach(b => io.observe(b));

// Visitor counter: the original site's count came from a backend.
// Replace this with a fetch() to your own counter endpoint.
const visits = document.getElementById('visits');
visits.parentElement.hidden = true;
// fetch('/api/visits').then(r => r.json()).then(d => { visits.textContent = d.count; visits.parentElement.hidden = false; });

// Gentle parallax on the side art (wide screens, no reduced motion)
const art = document.querySelectorAll('.art svg');
if (art.length && !matchMedia('(prefers-reduced-motion: reduce)').matches) {
  let ticking = false;
  addEventListener('scroll', () => {
    if (ticking) return; ticking = true;
    requestAnimationFrame(() => {
      const y = scrollY;
      art[0].style.transform = `translateY(${-y * 0.08}px)`;
      art[1].style.transform = `translateY(${-y * 0.12}px)`;
      ticking = false;
    });
  }, { passive: true });
}
