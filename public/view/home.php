<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jujutsu Kaisen Fan Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            height: 100%;
        }

        /* Hero Section */
        .hero {
            background-image: url('/project/public/images/jjk.webp'); /* Reference to your image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.4); /* Darkens the background */
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        /* Remove underline from the buttons */
        .cta-button {
            text-decoration: none; /* Remove the default underline */
            background-color: #ff4081;
            color: white;
            font-size: 1.2rem;
            padding: 12px 25px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            text-transform: uppercase;
            margin: 10px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #e0306b;
        }

        /* Buttons Section */
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .cta-buttons .cta-button {
            background-color: #2196F3; /* Blue for "Login" */
        }

        .cta-buttons .cta-button.join {
            background-color: #4CAF50; /* Green for "Join Now" */
        }

        .cta-buttons .cta-button:hover {
            background-color: #1976D2; /* Darker blue on hover */
        }

        .cta-buttons .cta-button.join:hover {
            background-color: #388E3C; /* Darker green on hover */
        }

        /* Footer Section */
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 20px;
        }

        footer p {
            font-size: 1rem;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to the Jujutsu Kaisen World!</h1>
        <p>Join the fight against curses and become a Jujutsu Sorcerer!</p>

        <!-- Login and Join Now Buttons -->
        <div class="cta-buttons">
            <a href="" class="cta-button">Login</a>
            <a href="" class="cta-button join">Join Now</a>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Jujutsu Kaisen Fanpage. All Rights Reserved.</p>
    </footer>

</body>
</html>
