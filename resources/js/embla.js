import EmblaCarousel from 'embla-carousel'

export default class Embla {
   slide(div) {
      let options = { loop: false, align: "start", containScroll: "trimSnaps" }
      let slide = EmblaCarousel(div, options)

      let next = div.parentElement.querySelector(".embla-next")
      if (next) {
         next.addEventListener("click", () => {
            slide.scrollNext();
         })
      }

      let prev = div.parentElement.querySelector(".embla-prev")
      if (prev) {
         prev.addEventListener("click", () => {
            slide.scrollPrev();
         })
      }
   }
}
