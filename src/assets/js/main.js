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

// headerの高さとfooterの高さをCSS変数にセット
function setLayoutHeights() {
  const header = document.querySelector(".l-header");
  const footer = document.querySelector(".l-footer");

  if (header) {
    const headerHeight = header.offsetHeight;
    document.documentElement.style.setProperty(
      "--header-height",
      `${headerHeight}px`
    );
  }

  if (footer) {
    const footerHeight = footer.offsetHeight;
    document.documentElement.style.setProperty(
      "--footer-height",
      `${footerHeight}px`
    );
  }
}
