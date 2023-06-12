import Menu from "./menu";
import Animations from "./animations";
import Embla from "./embla";

class Index {
   init() {
      this.menu();
      this.animations();
      this.embla();
      this.mobile();
   }

   menu () {
      const menu = new Menu();

      let btn = document.querySelector(".menu-btn")
      if (btn) {
         menu.toggle_nav(btn);
         menu.toggle_menu(btn);
      }

      let info = document.querySelector(".infobar")
      if (info) {
         menu.toggle_info(info);
      }
   }

   animations() {
      const anim = new Animations();
      this.go(anim.logo, ".logo")
   }

   embla() {
      const embla = new Embla();
      this.go(embla.slide, ".embla")
   }

   mobile() {
      let on_mobile = window.matchMedia("(max-width: 768px)")
      on_mobile.addListener((e) => {
         if (e.matches) {
            console.log("mobile")
         }
      })
   }

   go(fn, div) {
      let items = document.querySelectorAll(div)
      if (items[0]){
         items.forEach(item => {
            fn(item)
         })
      }
   }
}

window.addEventListener("load", () => {
   const index = new Index();
   index.init();
});
