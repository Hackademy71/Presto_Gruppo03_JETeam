const img=document.querySelector("#imgNav2");

document.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
      nav.classList.add('bg-sec')
      nav.style.transition = ".2s"
    } else {
      nav.classList.remove('bg-sec')
    }
  })