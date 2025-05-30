<!DOCTYPE html>
<html>
<head>
    <style>
        /* Order button styles */
        .order-btn {
            position: relative;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(45deg, #ff3d00, #ff1744);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(255, 61, 0, 0.4);
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .order-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 61, 0, 0.6);
        }

        .order-btn:active {
            transform: translateY(1px);
        }

        .order-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .order-btn:hover::before {
            left: 100%;
        }

        .order-btn span {
            position: relative;
            z-index: 1;
        }

        .order-btn .icon {
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .order-btn:hover .icon {
            transform: translateX(5px);
        }

        /* Modal styles - Enhanced */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modal.show {
            opacity: 1;
        }

        .modal-content {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            margin: 5% auto;
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            transform: translateY(-50px);
            transition: transform 0.4s ease, opacity 0.4s ease;
            opacity: 0;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .modal.show .modal-content {
            transform: translateY(0);
            opacity: 1;
        }

        .close-btn {
            float: right;
            font-size: 28px;
            font-weight: bold;
            color: #666;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .close-btn:hover {
            color: #ff1744;
            transform: rotate(90deg);
            transition: transform 0.3s ease;
        }

        /* Form styles */
        #orderForm {
            margin-top: 20px;
        }

        #orderForm label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
        }

        #orderForm input[type="text"],
        #orderForm input[type="submit"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        #orderForm input[type="text"]:focus {
            border-color: #ff3d00;
            box-shadow: 0 0 0 3px rgba(255, 61, 0, 0.2);
            outline: none;
        }

        #orderForm input[type="submit"] {
            background: linear-gradient(45deg, #ff3d00, #ff1744);
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        #orderForm input[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 61, 0, 0.4);
        }

        /* Response message */
        #responseMsg {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
            animation: fadeIn 0.5s ease;
            display: none;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Modal header */
        .modal-header {
            text-align: center;
            margin-bottom: 25px;
            position: relative;
        }

        .modal-header h2 {
            color: #333;
            margin: 0;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .modal-header::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background: linear-gradient(45deg, #ff3d00, #ff1744);
            margin: 10px auto 0;
            border-radius: 3px;
        }

        /* Floating animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }

        /* Error message */
        #errorMessage {
            color: red;
            font-size: 14px;
            display: none;
        }
    </style>
</head>
<body>

<!-- Order Button -->
<button class="order-btn" onclick="openModal()">
    <span>Order Now</span>
    <span class="icon">→</span>
</button>

<!-- Modal -->
<div id="orderModal" class="modal">
    <div class="modal-content floating">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        
        <div class="modal-header">
            <h2>Place Your Order</h2>
        </div>
        
        <form id="orderForm">
            <label>Full Name:</label>
            <input type="text" name="name" required placeholder="John Doe">

            <label>Item Name:</label>
            <input type="text" name="item" required placeholder="Product Name">

            <label>Delivery Address:</label>
            <input type="text" name="address" required placeholder="123 Main St, City">

            <label>Phone Number:</label>
            <input type="text" name="phone" id="phone" required placeholder="+1 (123) 456-7890">
            <div id="errorMessage">Please enter a valid phone number (digits only).</div>

            <input type="submit" value="Place Order" id="submitBtn" disabled>
        </form>

        <div id="responseMsg"></div>
    </div>
</div>

<script>
    function openModal() {
        const modal = document.getElementById('orderModal');
        modal.style.display = 'block';
        
        // Trigger animations
        setTimeout(() => {
            modal.classList.add('show');
        }, 10);
    }

    function closeModal() {
        const modal = document.getElementById('orderModal');
        modal.classList.remove('show');
        
        // Wait for animation to complete before hiding
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    }

    // Close modal when clicking outside content
    window.onclick = function(event) {
        const modal = document.getElementById('orderModal');
        if (event.target == modal) {
            closeModal();
        }
    }

    // Phone number validation
    document.addEventListener("DOMContentLoaded", function () {
        const phoneInput = document.getElementById("phone");
        const submitBtn = document.getElementById("submitBtn");
        const errorMessage = document.getElementById("errorMessage");

        function validatePhone() {
            const phone = phoneInput.value.trim();
            if (/^\d+$/.test(phone)) {
                submitBtn.disabled = false;
                errorMessage.style.display = 'none';
            } else {
                submitBtn.disabled = true;
                errorMessage.style.display = 'block';
            }
        }

        phoneInput.addEventListener("input", validatePhone);
        validatePhone(); // run on load to handle prefilled values
    });

    // Handle form submission via AJAX
    document.getElementById("orderForm").addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const responseMsg = document.getElementById('responseMsg');

        // Show loading state
        responseMsg.style.display = 'block';
        responseMsg.innerHTML = '<div style="color: #ff3d00;">Processing your order...</div>';
        responseMsg.style.backgroundColor = 'rgba(255, 61, 0, 0.1)';

        fetch('orderl.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.text())
        .then(data => {
            responseMsg.innerHTML = data;
            responseMsg.style.backgroundColor = 'rgba(0, 200, 0, 0.1)';

            // Close modal after 2 seconds
            setTimeout(() => {
                closeModal();
                responseMsg.style.display = 'none';
                document.getElementById("orderForm").reset();
            }, 2000);
        })
        .catch(err => {
            responseMsg.innerHTML = 'There was an error. Please try again.';
            responseMsg.style.backgroundColor = 'rgba(255, 0, 0, 0.1)';
        });
    });
</script>

</body>
</html>
