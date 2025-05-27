document.addEventListener('DOMContentLoaded', () => {
    const composebtn = document.querySelector('.js-compose-btn');
    const closebtn = document.querySelector('.js-close-modal');
    const overlay = document.querySelector('.js-compose-mail');
    const modalBox = document.getElementById('compose-modal');

    composebtn.addEventListener('click', () => {
        toggleModal();
    })
    closebtn.addEventListener('click', () => {
        toggleModal();
    })
    overlay.addEventListener('click', () => {
        toggleModal();
    })
    modalBox.addEventListener('click', (e) => e.stopPropagation()); // 🛑 prevents toggle
})

function toggleModal() {
    const modal = document.querySelector('.js-compose-mail');
    modal.classList.toggle('active');
}
