
const postDetails = document.querySelector(".main-left");
const postSidebar = document.querySelector(".sidebar");
const postSidebarContent = document.querySelector(".sidebar > div");


const controller = new ScrollMagic.Controller();


const scene = new ScrollMagic.Scene({
  triggerElement: postSidebar,
  triggerHook: 0,
  duration: getDuration
}).addTo(controller);


if (window.matchMedia("(min-width: 768px)").matches) {
  scene.setPin(postSidebar, { pushFollowers: false });
}


window.addEventListener("resize", () => {
  if (window.matchMedia("(min-width: 768px)").matches) {
    scene.setPin(postSidebar, { pushFollowers: false });
  } else {
    scene.removePin(postSidebar, true);
  }
});

function getDuration() {
  return postDetails.offsetHeight - postSidebarContent.offsetHeight;
}
