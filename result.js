 const cnicInput = document.getElementById("cnic");
    const cnicPreview = document.getElementById("cnic-preview");
    const resultForm = document.getElementById("resultForm");
    const modal = document.getElementById("resultModal");
    const closeModal = document.getElementById("closeModal");

    cnicInput.addEventListener("input", () => {
      cnicPreview.textContent = cnicInput.value || "----";
    });

    resultForm.addEventListener("submit", (e) => {
      e.preventDefault();
      modal.style.display = "flex";
    });

    closeModal.addEventListener("click", () => {
      modal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
      if (e.target === modal) modal.style.display = "none";
    });