document.addEventListener('DOMContentLoaded', function() {
    const chatRoom = document.getElementById('chatRoom');
    const chatUsername = document.getElementById('chatUsername');
    const backButton = document.getElementById('backButton');
    const messageInput = document.getElementById('messageInput');
    const sendButton = document.getElementById('sendButton');
    const chatMessages = document.getElementById('chatMessages');
    const chatItems = document.querySelectorAll('.chat-item');

    // Open chat room when clicking on a chat item
    chatItems.forEach(item => {
        item.addEventListener('click', function() {
            const username = this.getAttribute('data-username');
            chatUsername.textContent = username;
            chatRoom.classList.add('active');
        });
    });

    // Close chat room when clicking back button
    backButton.addEventListener('click', function() {
        chatRoom.classList.remove('active');
    });

    // Send message function
    function sendMessage() {
        const message = messageInput.value.trim();
        if (message) {
            // Create message element
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', 'sent');
            messageElement.textContent = message;
            
            // Add message to chat
            chatMessages.appendChild(messageElement);
            
            // Clear input
            messageInput.value = '';
            
            // Scroll to bottom
            chatMessages.scrollTop = chatMessages.scrollHeight;

            // Simulate received message (for demo purposes)
            setTimeout(() => {
                const receivedMessage = document.createElement('div');
                receivedMessage.classList.add('message', 'received');
                receivedMessage.textContent = `This is a response to: "${message}"`;
                chatMessages.appendChild(receivedMessage);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }, 1000);
        }
    }

    // Send message when clicking send button
    sendButton.addEventListener('click', sendMessage);

    // Send message when pressing Enter
    messageInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
});