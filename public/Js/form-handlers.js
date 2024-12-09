function handleSignUp(event) {
    event.preventDefault();
    
    const username = document.getElementById('signup-username').value;
    const email = document.getElementById('signup-email').value;
    const password = document.getElementById('signup-password').value;
    
    // Basic validation
    if (!username || !email || !password) {
        alert('Please fill in all fields');
        return;
    }
    
    // Store user data (you might want to send this to a server in a real app)
    localStorage.setItem('userData', JSON.stringify({ username, email, password }));
    
    // Redirect to sign in page
    window.location.href = 'signin.html';
}

function handleSignIn(event) {
    event.preventDefault();
    
    const username = document.getElementById('signin-username').value;
    const password = document.getElementById('signin-password').value;
    
    // Basic validation
    if (!username || !password) {
        alert('Please fill in all fields');
        return;
    }
    
    // Very basic authentication (replace with proper authentication in a real app)
    const userData = JSON.parse(localStorage.getItem('userData') || '{}');
    if (userData.username === username && userData.password === password) {
        // Store login state
        localStorage.setItem('isLoggedIn', 'true');
        // Redirect to home page
        window.location.href = 'home.html';
    } else {
        alert('Invalid credentials');
    }
}