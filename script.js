   const uploadImage = document.getElementById("uploadImage");
    const preview = document.getElementById("preview");

    uploadImage.addEventListener("change", function () {
      const file = this.files[0];
      if (file) {
        const fileType = file.type;
        const fileSize = file.size / 1024 / 1024; // MB

        if (!["image/png", "image/jpeg", "image/jpg"].includes(fileType)) {
          alert("Only PNG, JPG, and JPEG formats are allowed!");
          this.value = "";
          preview.style.display = "none";
          return;
        }

        if (fileSize > 1) {
          alert("File size must be less than 1MB!");
          this.value = "";
          preview.style.display = "none";
          return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
          preview.src = e.target.result;
          preview.style.display = "block";
        };
        reader.readAsDataURL(file);
      }
    });
    