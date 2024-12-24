<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: #ff4b6d;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin-bottom: 10px;
            font-size: 2.5rem;
        }

        header p {
            font-size: 1rem;
        }

        .container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .hotel-details {
            flex: 2;
            padding: 20px;
        }

        .hotel-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .hotel-title {
            font-size: 2rem;
            margin: 10px 0;
            color: #333;
        }

        .hotel-location {
            font-size: 1rem;
            color: #888;
        }

        .hotel-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ff4b6d;
            margin: 10px 0;
        }

        .description {
            margin: 20px 0;
            font-size: 1rem;
            color: #555;
        }

        .book-button {
            display: inline-block;
            padding: 12px 25px;
            background-color: #ff4b6d;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .book-button:hover {
            background-color: #ff2b4d;
        }

        .review-section {
            flex: 1;
            padding: 20px;
            border-left: 1px solid #e0e0e0;
        }

        .review-title {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #333;
        }

        .review {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #fafafa;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .reviewer-name {
            font-weight: bold;
            color: #333;
        }

        .review-text {
            margin-top: 5px;
            color: #555;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #f8f9fa;
            color: #333;
            margin-top: 20px;
        }

        footer button {
            padding: 10px 20px;
            background-color: #ff4b6d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        footer button:hover {
            background-color: #ff2b4d;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .hotel-details,
            .review-section {
                padding: 15px;
            }

            .book-button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>{{ $post->title }}</h1>
        <p>By {{ $post->author }} | {{ $post->published_at }}</p>
    </header>

    <main class="container">
        <div class="hotel-details">
            <img src="{{ $post->image }}" alt="Post Image" class="hotel-image">
            <h2 class="hotel-title">Grand Hyatt Hotel</h2>
            <p class="hotel-location">San Francisco</p>
            <p class="hotel-price">Starts from $2500</p>
            <div class="description">
                <p>Fast & Secure, No Booking or Cancellation Fees. Book Your Hotel Online with Over 200 Countries and Hundreds of Properties in Over 200 Countries, Check Hotels, Travel Guides, Exclusive Deals, Luxury Hotels.</p>
            </div>
            <a href="#" class="book-button">Book Now</a>
        </div>

        <div class="review-section">
            <h2 class="review-title">Reviews</h2>
            <div class="review">
                <span class="reviewer-name">Rab Davis</span>
                <p class="review-text">Amazing experience, highly recommend!</p>
            </div>
            <div class="review">
                <span class="reviewer-name">Maria Kayi</span>
                <p class="review-text">Great service and location!</p>
            </div>
        </div>
    </main>

    <footer>
        <h3>Join our team to be a part of our story</h3>
        <p>Subscribe to our newsletter to get the latest updates and news.</p>
        <button>Subscribe</button>
    </footer>
</body>
</html>