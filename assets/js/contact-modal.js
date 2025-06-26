
//Modal Close Button
const closeModalButton = document.createElement("span");
closeModalButton.appendChild(document.createTextNode("\u00D7"));
closeModalButton.classList.add("close");
closeModalButton.classList.add("close-contact-modal");

function openModal (id) {
    const modal = document.getElementById(id);
    modal.firstElementChild.insertAdjacentElement("afterbegin", closeModalButton);
    closeModalButton.addEventListener("click", e => {
        e.preventDefault();
        closeModal(id);
    });

    modal.style.display = "block";
}

function closeModal (id) {
    const modal = document.getElementById(id);
    modal.style.display = "none";
}