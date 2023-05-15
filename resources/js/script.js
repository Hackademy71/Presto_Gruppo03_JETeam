const img=document.querySelector("#imgNav2");

document.addEventListener('scroll', () => {
    if (window.scrollY > 70) {
      img.classList.remove('d-none')
      img.style.transition = ".4s"
    } else {
      img.classList.add('d-none')
    }
  })