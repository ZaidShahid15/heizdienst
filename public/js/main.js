// // TOC collapse/expand + rotate chevron
// (function(){
//   const card = document.getElementById('tocCard');
//   const toggle = document.getElementById('tocToggle');
//   const head = document.getElementById('tocHead');
//   if(!card || !toggle || !head) return;

//   const svg = toggle.querySelector('svg');
//   function setExpanded(exp){
//     head.setAttribute('aria-expanded', exp ? 'true':'false');
//     toggle.setAttribute('aria-expanded', exp ? 'true':'false');
//     card.classList.toggle('is-collapsed', !exp);
//     if(svg) svg.style.transform = exp ? 'rotate(180deg)' : 'rotate(0deg)';
//   }
//   setExpanded(false);
//   head.addEventListener('click', ()=> setExpanded(card.classList.contains('is-collapsed')));
//   head.addEventListener('keydown', (e)=>{ if(e.key==='Enter' || e.key===' ') { e.preventDefault(); setExpanded(card.classList.contains('is-collapsed')); }});
// })();

// // Smooth scroll for same-page anchors
// (function(){
//   document.addEventListener('click', (e)=>{
//     const a = e.target.closest('a');
//     if(!a) return;
//     const href = a.getAttribute('href') || '';
//     if(!href.startsWith('#')) return;
//     const target = document.querySelector(href);
//     if(!target) return;
//     e.preventDefault();
//     target.scrollIntoView({behavior:'smooth', block:'start'});
//     history.pushState(null,'',href);
//   });
// })();
