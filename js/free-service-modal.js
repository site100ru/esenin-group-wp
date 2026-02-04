// Подставляет название услуги в модальное окно при его открытии

document.addEventListener('DOMContentLoaded', function () {
    const freeServiceModal = document.getElementById('freeServiceModal');

    if (!freeServiceModal) return;

    freeServiceModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        if (!button) return;

        const serviceTitle = button.getAttribute('data-service-title');

        const modalTitle = freeServiceModal.querySelector('#modalServiceTitle');
        const hiddenInput = freeServiceModal.querySelector('#hiddenServiceTitle');

        if (modalTitle) modalTitle.textContent = serviceTitle;
        if (hiddenInput) hiddenInput.value = serviceTitle;
    });
});