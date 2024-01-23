function uploadFile() {
    var fileInput = document.getElementById('pdfFile');
    var uploadStatus = document.getElementById('uploadStatus');
  
    if (fileInput.files.length > 0) {
      var file = fileInput.files[0];
      var formData = new FormData();
      formData.append('pdfFile', file);
  
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'upload.php', true);
  
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          if (response.success) {
            uploadStatus.innerHTML = 'File uploaded successfully.';
            window.location.href = 'preview.php?filename=' + response.filename;
          } else {
            uploadStatus.innerHTML = 'File upload failed. Please try again.';
          }
        }
      };
  
      xhr.send(formData);
    } else {
      uploadStatus.innerHTML = 'Please choose a PDF file to upload.';
    }
  }
  