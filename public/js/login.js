document.getElementById('form-group').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    fetch('http://localhost:8000/api/login', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        email: email,
        password: password,
      }),
    })
    .then(response => response.json())
    .then(data => {
      console.log('Success:', data);
      // Save the token in localStorage or cookies
      localStorage.setItem('token', data.token);
      // Redirect or update UI as needed
    })
    .catch((error) => {
      console.error('Error:', error);
    });
  });
