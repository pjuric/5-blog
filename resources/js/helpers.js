const imageInput   = document.querySelector('.image-input');
const previewImage = document.querySelector('.preview-image');

if (imageInput) {
  imageInput.addEventListener('change', function (e) {
    const file = e.target.files[0];

    if (file) {
      const reader  = new FileReader();

      reader.onload = function (event) {
        previewImage.src = event.target.result;
      };

      reader.readAsDataURL(file);
    } else {
      previewImage.src = "";
    }
  });
}