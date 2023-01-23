<!DOCTYPE html>
<html>
<head>
  <title>QR Code Generator II</title>
  <link rel="stylesheet" type="text/css" href="resources/styles.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div id="form-container">
    <form method="post" action="resources/generate.php">
      <h2><b>QR Code Generator II</b></h2><hr>
      <h3><u>INSTRUCTIONS</u></h3>
      <h4>Fill in the text, select the color<br>and watch the magic happens.</h4>
      <label>Enter Text:</label>
      <input type="text" name="text" id="text-input">
      <br>
      <label>Select Color:</label>
      <select name="color" id="color-select">
        <option value="FFFFFF">Default White</option>
        <option value="FFD966">Bright Yellow</option>
        <option value="8FCE00">Apple Green</option>
        <option value="FF8040">Mighty Orange</option>
      </select>
      <br><br><hr><br>
      <b>Made with <span class="heart">♥</span> by Ikmal Said</b>
      <br>
    </form>
  </div>
  <div id="preview-container">
    <h2>Preview:</h2>
    <div id="preview"></div>
  </div>

  <script>
    $(document).ready(function(){
      // function to update preview
      function updatePreview() {
        var text = $('#text-input').val();
        var color = $('#color-select').val();
        var size = 250;
        var src = "resources/generate.php?text=" + text + "&color=" + color + "&size=" + size;
        $('#preview').html('<img src="' + src + '">');
      }
      
      // update preview on input change
      $('#text-input, #color-select, #size-select').on('change', updatePreview);
    });
  </script>
</body>
</html>
