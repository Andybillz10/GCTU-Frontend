<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF Preview</title>
</head>
<body>
  <h2>PDF Preview</h2>
  <center><h2>Timetable Preview</h2></center>

  <div id="pdfViewer"></div>
  

  <script>
    // var filename = new URLSearchParams(window.location.search).get('filename');
    // var pdfViewer = document.getElementById('pdfViewer');

    // if (filename) {
    //   pdfViewer.innerHTML = '<iframe src="uploads/' + filename + '" type="application/pdf" width="100%" height="600px" sandbox="allow-same-origin allow-scripts allow-popups"></iframe>';
    // } else {
    //   pdfViewer.innerHTML = 'No PDF file specified for preview.';
    // }
    // var filename = new URLSearchParams(window.location.search).get('filename');
    // var pdfViewer = document.getElementById('pdfViewer');

    // if (filename) {
    //   // Use Google Docs Viewer to embed the PDF
    //   var viewerUrl = 'https://docs.google.com/viewer?url=' + encodeURIComponent('uploads/' + filename);
    //   pdfViewer.innerHTML = '<iframe src="' + viewerUrl + '" width="100%" height="600px" style="border: none;"></iframe>';
    // } else {
    //   pdfViewer.innerHTML = 'No PDF file specified for preview.';
    // }
     // Fetch the latest uploaded file name
     fetch('getLatestFile.php')
      .then(response => response.json())
      .then(data => {
        var filename = data.filename;
        var pdfViewer = document.getElementById('pdfViewer');

        if (filename) {
          pdfViewer.innerHTML = '<iframe src="uploads/' + filename + '" type="application/pdf" width="100%" height="600px" sandbox="allow-same-origin allow-scripts allow-popups"></iframe>';
        } else {
          pdfViewer.innerHTML = 'No PDF file specified for preview.';
        }
      })
      .catch(error => {
        console.error('Error fetching latest file:', error);
        pdfViewer.innerHTML = 'Error fetching latest file.';
      });

  </script>
  

</body>
</html>
