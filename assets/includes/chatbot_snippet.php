<!-- Chatbot Widget -->
<div class="chatbot-widget">
    <div class="chatbot-window" id="chatbotWindow">
        <div class="chatbot-header">
            <h4>Support Assistant</h4>
            <span class="chatbot-close" onclick="toggleChatbot()"><i class="fas fa-times"></i></span>
        </div>
        <div class="chatbot-body" id="chatbotBody">
            <div class="chatbot-msg received">
                Hello! 👋 <br> How can I help you regarding our medical billing services today?
            </div>
        </div>
        <div class="chatbot-footer">
            <input type="text" class="chatbot-input" id="chatbotInput" placeholder="Type a message..." onkeypress="handleChatInput(event)">
            <button class="chatbot-send" onclick="sendChatMsg()"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>
    <div class="chatbot-toggler" onclick="toggleChatbot()">
        <i class="fas fa-comment-dots"></i>
    </div>
</div>

<script>
    function toggleChatbot() {
        var window = document.getElementById('chatbotWindow');
        if (window.style.display === 'none' || window.style.display === '') {
            window.style.display = 'flex';
        } else {
            window.style.display = 'none';
        }
    }

    function handleChatInput(e) {
        if (e.key === 'Enter') {
            sendChatMsg();
        }
    }

    function sendChatMsg() {
        var input = document.getElementById('chatbotInput');
        var msg = input.value.trim();
        if (msg) {
            var body = document.getElementById('chatbotBody');

            // Add user message
            var userDiv = document.createElement('div');
            userDiv.className = 'chatbot-msg sent';
            userDiv.textContent = msg;
            body.appendChild(userDiv);

            input.value = '';
            body.scrollTop = body.scrollHeight;

            // Show typing indicator (optional or simple delay)
            var typingDiv = document.createElement('div');
            typingDiv.className = 'chatbot-msg received';
            typingDiv.innerHTML = '<i>Typing...</i>';
            body.appendChild(typingDiv);
            body.scrollTop = body.scrollHeight;

            // Send to backend
            fetch('chatbot_backend.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        message: msg
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    // Remove typing indicator
                    body.removeChild(typingDiv);

                    // Add bot response
                    var replyDiv = document.createElement('div');
                    replyDiv.className = 'chatbot-msg received';
                    replyDiv.innerHTML = data.answer;
                    body.appendChild(replyDiv);
                    body.scrollTop = body.scrollHeight;
                })
                .catch((error) => {
                    body.removeChild(typingDiv);
                    var errorDiv = document.createElement('div');
                    errorDiv.className = 'chatbot-msg received';
                    errorDiv.textContent = "Sorry, I'm having trouble connecting. Please call us.";
                    body.appendChild(errorDiv);
                });
        }
    }
</script>