<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Log In or Sign Up</title>
    <?php include "./bootstrap.php" ?>
    <link rel="stylesheet" href="index.css">
</head>

<body>


<?php session_start();
    
    
    if(isset($_SESSION['username']))
    {
        header('Location: https://localhost/facebook/home.php');
    }
    else{
        
    }
    
    ?>


    <div class="container mt-5" style="padding-top: 60px;">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 d-none d-lg-block">
                <h1 class="logo mb-0">facebook</h1>
                <h2 class="fs-3 w-75">Facebook helps you connect and share with the people in your life.</h2>
            </div>
            <div class="col-lg-6">
                <div class="login-container mx-auto">
                    <div class="card p-4 mb-3">
                        <form id="loginForm">
                            <div class="mb-3">
                                <input type="text" name="logMail" class="form-control form-control-lg" placeholder="Email address or phone number">
                            </div>
                            <div class="mb-3 password-container">
                                <input type="password" name="logPass" class="form-control form-control-lg" id="loginPassword" placeholder="Password">
                                <button type="button" class="password-toggle" data-target="loginPassword">
                                    <i class="fa-regular fa-eye-slash"></i>
                                </button>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-facebook mb-3">Log In</button>
                            </div>
                            <div class="text-center mb-3">
                                <a href="#" class="text-decoration-none">Forgotten password?</a>
                            </div>
                            <div class="divider"></div>
                            <div class="text-center">
                                <button type="button" class="btn btn-new-account btn-lg" data-bs-toggle="modal" data-bs-target="#registerModal">
                                    Create new account
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        <p><strong>Create a Page</strong> for a celebrity, brand or business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h2 class="modal-title fs-4">Sign Up</h2>
                        <p class="mb-0 text-muted">It's quick and easy.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="registerForm" action="get-users.php" method="POST">
                        <div class="mb-3">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email address" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="phone" placeholder="Mobile number" required>
                        </div>
                        <div class="mb-3 password-container">
                            <input type="password" name="password" class="form-control" id="registerPassword" placeholder="New password" required>
                            <button type="button" class="password-toggle" data-target="registerPassword">
                                <i class="fa-regular fa-eye-slash"></i>
                            </button>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small">Date of birth</label>
                            <input type="date" name="dob" required style="width: 100%; padding: 8px 12px;  border: 1px solid #dddfe2;  border-radius: 6px;  font-size: 15px;  color: #1c1e21;  background-color: #ffffff; cursor: pointer;">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small">Gender</label>
                            <div class="row">
                                <div class="col">
                                    <div class="border rounded p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="border rounded p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="border rounded p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="custom" value="custom" required>
                                            <label class="form-check-label" for="custom">Custom</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="small text-muted">
                            People who use our service may have uploaded your contact information to Facebook. Learn more.
                        </p>
                        <p class="small text-muted">
                            By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy.
                        </p>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-new-account btn-lg">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('registerForm').addEventListener('submit', handleFormSubmit);
        // Password toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Function to toggle password visibility
            function setupPasswordToggles() {
                const toggleButtons = document.querySelectorAll('.password-toggle');

                toggleButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        // Get the target password input
                        const targetId = this.getAttribute('data-target');
                        const passwordInput = document.getElementById(targetId);
                        const icon = this.querySelector('i');

                        // Toggle password visibility
                        if (passwordInput.type === 'password') {
                            passwordInput.type = 'text';
                            icon.classList.remove('fa-eye-slash');
                            icon.classList.add('fa-eye');
                        } else {
                            passwordInput.type = 'password';
                            icon.classList.remove('fa-eye');
                            icon.classList.add('fa-eye-slash');
                        }
                    });
                });
            }

            // Form submission handlers
            function handleFormSubmit(event) {
                event.preventDefault();
                // Add your form validation and submission logic here
                console.log('Form submitted:', event.target.id);
            }

            // Set up password toggles
            setupPasswordToggles();

            // Set up form submission handlers
            document.getElementById('loginForm').addEventListener('submit', handleFormSubmit);
            document.getElementById('registerForm').addEventListener('submit', handleFormSubmit);
        });
    </script>
</body>

</html>