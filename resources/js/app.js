import "./bootstrap";

// const addmenu = document.querySelector("#add-menu", () => {
//     console.log("add-menu");
// }); 

// function addMenu() {
//     document.getElementById("add-menu", () => {
//         console.log("add-menu");
//     });
// }

// let addMenu = document.getElementById("add-menu");
// addMenu.addEventListener("click", () => {
//     console.log("add-menu");
// });

document.addEventListener("click", () => {
    if (event.target.id === "add-menu") {
        console.log("add-menu");
    }
});


