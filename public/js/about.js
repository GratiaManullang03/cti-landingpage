document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("trialForm");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        if (validateForm()) {
            // Redirect ke thank-you page jika validasi sukses
            window.location.href = "/thank-you";
        }
    });

    function validateForm() {
        let isValid = true;

        // Reset previous validation states
        form.querySelectorAll(".is-invalid").forEach((element) => {
            element.classList.remove("is-invalid");
        });
        form.querySelectorAll(".invalid-feedback").forEach((element) => {
            element.remove();
        });

        // Validate email format
        const emailInput = form.querySelector("#email");
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value)) {
            showError(emailInput, "Please enter a valid email address");
            isValid = false;
        }

        // Validate required fields
        form.querySelectorAll("[required]").forEach((element) => {
            if (!element.value.trim()) {
                showError(element, "This field is required");
                isValid = false;
            }
        });

        // Validate phone number
        const phoneInput = form.querySelector("#phone");
        const phoneRegex = /^[0-9+\-\s()]{10,20}$/;
        if (!phoneRegex.test(phoneInput.value)) {
            showError(phoneInput, "Please enter a valid phone number");
            isValid = false;
        }

        return isValid;
    }

    function showError(element, message) {
        element.classList.add("is-invalid");
        const feedback = document.createElement("div");
        feedback.className = "invalid-feedback";
        feedback.textContent = message;
        element.parentNode.appendChild(feedback);
    }
});
