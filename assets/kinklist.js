document.addEventListener("DOMContentLoaded", function() {
  const userId = document.getElementById('user_id').value;
  const userName = document.getElementById('user_name').value;
  const userEmail = document.getElementById('user_email').value;
});
const dataToSave = {
  userId,
  userName,
  userEmail,
  // ... KinkList data
};
fetch('../save_to_database.php', {
  method: 'POST',
  body: JSON.stringify(dataToSave),
})
.then(response => response.json())
.then(data => console.log(data));
