document.addEventListener('DOMContentLoaded', () => {
    const composebtn = document.querySelector('.js-compose-btn');
    const closebtn = document.querySelector('.js-close-modal');
    composebtn.addEventListener('click', () => {
        toggleModal();
    })
    closebtn.addEventListener('click', () => {
        toggleModal();
    })
})


function toggleModal() {
    const modal = document.querySelector('.js-compose-mail');

    modal.classList.toggle('active');

}
