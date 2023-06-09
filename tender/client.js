// Function to send a notification
function sendNotification(message) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "backend.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log("Notification sent successfully!");
      }
    };
    const data = "message=" + encodeURIComponent(message) + "&sender=PageName&timestamp=" + new Date().toISOString();
    xhr.send(data);
  }
  
  // Handle form submission
  document.getElementById("notificationForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const message = document.getElementById("messageInput").value;
    sendNotification(message);
    document.getElementById("messageInput").value = "";
  });
  