let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".side-bar");

btn.onclick = function () {
	sidebar.classList.toggle("active");
};
