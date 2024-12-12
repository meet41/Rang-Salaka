// // class App{}
//     var num = document.getElementById("num");
//     num.addEventListener("click", () => {
//       alert("This is number : "+num); 
//     });


document.addEventListener('DOMContentLoaded', () => {
  const letterCells = document.querySelectorAll('.letter-cell');
  const alertBox = document.getElementById('alert-box');
  const alertMessage = document.getElementById('alert-message');
  const closeAlertButton = document.getElementById('close-alert');

  letterCells.forEach(cell => {
      cell.addEventListener('click', () => {
          const letter = cell.textContent;
          showAlert(`You clicked on letter: ${letter}`);
      });
  });

  closeAlertButton.addEventListener('click', () => {
      hideAlert();
  });

  document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
          hideAlert();
      }
  });

  function showAlert(message) {
      alertMessage.textContent = message;
      alertBox.style.display = 'block';
  }

  function hideAlert() {
      alertBox.style.display = 'none';
  }
});