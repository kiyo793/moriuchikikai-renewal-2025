//viewport設定
function viewportSet() {
  const wsw = window.screen.width;
  if (wsw <= 375) {
    // デバイス横幅375以下
    document
      .querySelector("meta[name='viewport']")
      .setAttribute("content", "width=375,initial-scale=1.0");
  } else {
    // それ以外
    document
      .querySelector("meta[name='viewport']")
      .setAttribute("content", "width=device-width, initial-scale=1");
  }
}
window.addEventListener("DOMContentLoaded", viewportSet, false);
window.addEventListener("resize", viewportSet, false);
window.addEventListener("orientationchange", viewportSet, false);

//リンククリック後のスクロール挙動
document.addEventListener("DOMContentLoaded", () => {
  const links = document.querySelectorAll("a[href^='#'], a[href^='/#']");

  links.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const targetId = link.getAttribute("href").split("#")[1];
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });
});


function setLayoutHeights() {
  const header = document.querySelector(".l-header");
  const footer = document.querySelector(".l-footer");

  if (header) {
    document.documentElement.style.setProperty(
      "--header-height",
      `${header.offsetHeight}px`
    );
  }

  if (footer) {
    document.documentElement.style.setProperty(
      "--footer-height",
      `${footer.offsetHeight}px`
    );
  }
}

window.addEventListener("load", setLayoutHeights);
window.addEventListener("resize", setLayoutHeights);


document.addEventListener("DOMContentLoaded", () => {
  const drawerIcon = document.querySelector(".c-drawer-icon");
  const drawer = document.querySelector(".p-drawer");
  const drawerNavItem = document.querySelectorAll(
    '.p-drawer__link[href^="#"], .p-drawer__link[href^="/#"]'
  );
  const header = document.querySelector(".l-header");
  const breakpoint = 768;
  let isMenuOpen = false;
  let isMenuOpenAtBreakpoint = false;
  let scrollY = 0;

  const openMenu = () => {
    scrollY = window.scrollY;
    drawer.classList.add("js-show");
    drawerIcon.classList.add("js-show");
    header.classList.add("js-show");
    document.body.classList.add("is-fixed");
    document.body.style.top = `-${scrollY}px`;
  };

  const closeMenu = () => {
    drawer.classList.remove("js-show");
    drawerIcon.classList.remove("js-show");
    header.classList.remove("js-show");
    document.body.classList.remove("is-fixed");
    document.body.style.top = "";
    window.scrollTo(0, scrollY);
    isMenuOpen = false;
  };

  const toggleMenu = () => {
    if (!drawer.classList.contains("js-show")) {
      openMenu();
    } else {
      closeMenu();
    }
  };

  const handleResize = () => {
    const windowWidth = window.innerWidth;
    if (windowWidth > breakpoint && isMenuOpenAtBreakpoint) {
      closeMenu();
    } else if (
      windowWidth <= breakpoint &&
      drawer.classList.contains("js-show")
    ) {
      isMenuOpenAtBreakpoint = true;
    }
  };

  const clickOuter = (event) => {
    if (
      drawer.classList.contains("js-show") &&
      !drawer.contains(event.target) &&
      isMenuOpen
    ) {
      closeMenu();
    } else if (
      drawer.classList.contains("js-show") &&
      !drawer.contains(event.target)
    ) {
      isMenuOpen = true;
    }
  };

  const linkScroll = (target) => {
    const headerHeight = header.offsetHeight;
    if (target) {
      const targetPosition =
        target.getBoundingClientRect().top + window.scrollY;
      const offsetPosition = targetPosition - headerHeight;
      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
      });
    }
  };

  drawerIcon.addEventListener("click", toggleMenu);
  window.addEventListener("resize", handleResize);
  document.addEventListener("click", clickOuter);

  drawerNavItem.forEach((item) => {
    item.addEventListener("click", (event) => {
      event.preventDefault();
      const href = item.getAttribute("href");
      const id = href.split("#")[1];
      const targetItem = document.getElementById(id);
      closeMenu();
      linkScroll(targetItem);
    });
  });
});

//お問い合わせ送信ボタン
document.addEventListener("DOMContentLoaded", function () {

  const form = document.querySelector(".p-contact__form");
  const requiredFields = form.querySelectorAll("[required]");
  const submitBtn = form.querySelector("button[type='submit']");

  function checkRequired() {
    let allFilled = true;
    
    requiredFields.forEach(field => {

      if (field.type === 'checkbox') {
        if (!field.checked) {
          allFilled = false;
        }
      } else {

        if (!field.value.trim()) {
          allFilled = false;
        }
      }
    });

    submitBtn.disabled = !allFilled;
  }


  submitBtn.disabled = true;


  requiredFields.forEach(field => {
    if (field.type === 'checkbox') {

      field.addEventListener("change", checkRequired);
    } else {

      field.addEventListener("input", checkRequired);
    }
  });
});

//アニメーション
class FadeAnimationObserver {
    constructor() {
        this.observer = new IntersectionObserver(
            this.handleIntersection.bind(this),
            {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            }
        );
        this.init();
    }

    init() {
        const animationElements = document.querySelectorAll('[data-animation]');
        animationElements.forEach(el => {
            this.observer.observe(el);
        });
    }

    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-animated');
                this.observer.unobserve(entry.target);
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new FadeAnimationObserver();
});
