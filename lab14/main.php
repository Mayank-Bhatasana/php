<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Incredible India</title>
    <link href="./main.css" rel="stylesheet" type="text/css">
    <style>
        .hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1524492412937-b28074a5d7da');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            margin-bottom: 40px;
        }
        
        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .hero-content p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .features {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto 40px;
        }
        
        .feature-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            width: 30%;
            min-width: 300px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-card h3 {
            color: #007bff;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <?php include_once 'header.php'; ?>
    
    <div class="hero">
        <div class="hero-content">
            <h1>Discover the Wonders of India</h1>
            <p>Explore the rich culture, breathtaking landmarks, and delicious cuisine of this incredible country.</p>
        </div>
    </div>
    
    <div class="features">
        <div class="feature-card">
            <h3>Iconic Landmarks</h3>
            <p>From the Taj Mahal to the Golden Temple, discover India's most famous landmarks that tell the story of its rich history.</p>
        </div>
        
        <div class="feature-card">
            <h3>Diverse Cuisine</h3>
            <p>Experience the flavors of India with its wide variety of regional dishes, each with unique spices and cooking techniques.</p>
        </div>
        
        <div class="feature-card">
            <h3>Vibrant Culture</h3>
            <p>Learn about India's festivals, traditions, arts, and customs that vary from region to region.</p>
        </div>
    </div>
    
    <div class="content-container">
        <h2 class="heading">Why Visit India?</h2>
        <p class="paratext">India is a land of contrasts where ancient traditions coexist with modern innovations. With its diverse landscapes ranging from the Himalayan mountains to tropical beaches, bustling cities to serene villages, India offers something for every traveler. The country's rich history spanning thousands of years has left behind architectural marvels, while its living culture continues to evolve in fascinating ways.</p>
        
        <div class="img-text">
            <img src="https://images.unsplash.com/photo-1582972236019-e3d10fc7ce63" alt="Indian culture">
            <div>
                <h3>Cultural Heritage</h3>
                <p>India's cultural heritage includes classical dance forms, music, textiles, and crafts that have been preserved for generations. Each state has its own distinct traditions and art forms.</p>
            </div>
        </div>
    </div>
    
    <?php include_once 'footer.php'; ?>
</body>
</html>