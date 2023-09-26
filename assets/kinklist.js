document.addEventListener("DOMContentLoaded", function() {
  try {
    const userId = document.getElementById('user_id') ? document.getElementById('user_id').value : null;
    const userName = document.getElementById('user_name') ? document.getElementById('user_name').value : null;
    const userEmail = document.getElementById('user_email') ? document.getElementById('user_email').value : null;
    let kinkData = {};

    const kinkListTextArea = document.getElementById('Kinks') ? document.getElementById('Kinks').value : null;
    if (kinkListTextArea) {
      const kinkListLines = kinkListTextArea.split('\n');
      kinkListLines.forEach((line, index) => {
        kinkData[`line_${index + 1}`] = line;
      });
    }
    
    // Debugging: Print key variables to console
    console.log("User ID:", userId);
    console.log("User Name:", userName);
    console.log("User Email:", userEmail);

    // AJAX call to save data
    $.ajax({
      url: 'save_to_database.php',
      type: 'POST',
      data: JSON.stringify({
        userId: userId,
        userName: userName,
        userEmail: userEmail,
        kinkData: kinkData
      }),
      contentType: 'application/json; charset=utf-8',
      success: function(response) {
        console.log("Data saved successfully: ", response);
      },
      error: function(error) {
        console.error("Error saving data: ", error);
      }
    });
  } catch (error) {
    console.error("An error occurred: ", error);
  }
});
