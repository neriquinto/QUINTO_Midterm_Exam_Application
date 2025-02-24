<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Fantasy Romance Books</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background: linear-gradient(to right, #fcefee, #e8f0ff);
            color: #4a235a;
            text-align: center;
            margin: 0;
            padding: 0;
            cursor: url('https://cur.cursors-4u.net/nature/nat-7/nat678.cur'), auto; 
        }

        h1 {
            font-size: 2.5rem;
            margin-top: 30px;
            text-shadow: 2px 2px 5px rgba(74, 35, 90, 0.3);
        }

        .book-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 30px auto;
            max-width: 1200px;
        }

        .book-card {
            width: 220px;
            background: white;
            border-radius: 12px;
            padding: 15px;
            text-align: center;
            box-shadow: 4px 4px 15px rgba(74, 35, 90, 0.2);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .book-card:hover {
            transform: scale(1.05);
            box-shadow: 6px 6px 20px rgba(74, 35, 90, 0.3);
        }

        .book-card .image-container {
            width: 100%;
            height: 280px; 
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 8px;
            background-color: #f4f4f4;
        }

        .book-card img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }

        .book-card h3 {
            font-size: 1.2rem;
            margin: 10px 0 5px;
            color: #5a2c6d;
        }

        .book-card p {
            font-size: 1rem;
            margin: 5px 0;
        }

        .price {
            font-weight: bold;
            color: #c0392b;
        }

        .sparkle {
            position: absolute;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            pointer-events: none;
            animation: fadeOut 0.5s ease-out;
            opacity: 0.8;
        }

        .sparkle:nth-child(3n) {
            background-color: rgba(255, 192, 203, 0.9); 
            box-shadow: 0 0 10px rgba(255, 192, 203, 0.7);
        }
        .sparkle:nth-child(3n+1) {
            background-color: rgba(186, 85, 211, 0.9); 
            box-shadow: 0 0 10px rgba(186, 85, 211, 0.7);
        }
        .sparkle:nth-child(3n+2) {
            background-color: rgba(255, 255, 255, 0.9); 
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
        }

        @keyframes fadeOut {
            from {
                transform: scale(1);
                opacity: 1;
            }
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
    </style>
</head>
<script>
    document.addEventListener("mousemove", function (e) {
        let sparkle = document.createElement("div");
        sparkle.classList.add("sparkle");
        document.body.appendChild(sparkle);
        
        sparkle.style.left = `${e.clientX}px`;
        sparkle.style.top = `${e.clientY}px`;

        setTimeout(() => sparkle.remove(), 500);
    });
</script>
<body>
    <h1>Popular Fantasy Romance Books</h1>
    <div class="book-container">
        @foreach ($books as $book)
            <div class="book-card">
                <div class="image-container">
                    <img src="{{ $book['image'] }}" alt="{{ $book['title'] }}">
                </div>
                <h3>{{ $book['title'] }}</h3>
                <p>by {{ $book['author'] }}</p>
                <p class="price">{{ $book['price'] }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
