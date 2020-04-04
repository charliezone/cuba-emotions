document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const subject = document.querySelector('input[name="subject"]');
    subject.value = urlParams.get('subject');
});