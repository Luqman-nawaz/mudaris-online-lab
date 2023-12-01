<!DOCTYPE html>
<html>
<head>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
  
  </div>
  <div class="popup">
  
  <div class="popup-content">
    <button class="close-btn">&times;</button>
    <h2>Alert Question</h2>
    
    <p>write syntax of for loop:</p>
    <input type="text" id="answer2">
    <br><br>
    <button class="btn btn-success" id="submitBtn">Submit</button>
    <button class="btn btn-danger" id="cancelBtn">Cancel</button>
  </div>
    
</div>

  <script src="script.js"></script>



<script>
// Get the necessary elements
const showPopupBtn = document.getElementById('showPopupBtn');
const popup = document.querySelector('.popup');
const submitBtn = document.getElementById('submitBtn');
const cancelBtn = document.getElementById('cancelBtn');
const closeBtn = document.querySelector('.close-btn');

// Function to show the popup
function showPopup() {
  popup.style.display = 'block';
}

// Function to close the popup
function closePopup() {
  popup.style.display = 'none';
}

// Show the popup after 10 seconds
setTimeout(showPopup, 10000);

// Close the popup after an additional 10 seconds
setTimeout(closePopup, 20000);

// Handle the submit button click event
submitBtn.addEventListener('click', () => {
  const answer1 = document.getElementById('answer1').value;
  const answer2 = document.getElementById('answer2').value;

  // Do something with the answers (e.g., send them to a server)

  // Close the popup
  closePopup();
});

// Handle the cancel button click event
cancelBtn.addEventListener('click', () => {
  // Close the popup
  closePopup();
});

// Handle the close button click event
closeBtn.addEventListener('click', () => {
  // Close the popup
  closePopup();
});


</script>

</body>
</html>



<style>

.popup {
  display: none;
  position: fixed;
  z-index: 999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.popup-content {
  background-color: white;
  margin: 10% auto;
  padding: 20px;
  width: 50%;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.popup-content h2 {
  margin-top: 0;
}

.popup-content p {
  margin-bottom: 5px;
}

.popup-content input {
  width: 100%;
  margin-bottom: 10px;
}

.popup-content button {
  margin-top: 10px;
}
</style>