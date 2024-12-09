<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>FOOD</h1>
            <p>WHAT DO YOU WANT TO EAT?</p>
            <div class="header-icons">
                <span class="icon">❤️</span>
                <span class="icon">🔔</span>
            </div>
        </div>

        <div class="search-bar">
            <span class="search-icon">🔍</span>
            <input type="search" class="input-field" placeholder="SEARCH FOODS">
        </div>

        <div class="food-options">
            <div class="food-option-card">
                <img src="{{ asset('gambar/jco.jpeg')}}" alt="Indonesia" class="food-option-icon">
                <p>INDONESIA</p>
            </div>
            <div class="food-option-card">
                <img src="{{ asset('gambar/gacoan.jpeg')}}" alt="Thailand" class="food-option-icon">
                <p>THAILAND</p>
            </div>
            {{-- <div class="food-option-card">
                <img src="{{ asset('gambar/japan.jpeg')}}" alt="Japan" class="food-option-icon">
                <p>JAPAN</p>
            </div>
            <div class="food-option-card">
                <img src="{{ asset('gambar/korea.jpeg')}}" alt="Korea" class="food-option-icon">
                <p>KOREA</p>
            </div>
            <div class="food-option-card">
                <img src="{{ asset('gambar/india.jpeg')}}" alt="India" class="food-option-icon">
                <p>INDIA</p>
            </div>
            <div class="food-option-card">
                <img src="{{ asset('gambar/western.jpeg')}}" alt="Western" class="food-option-icon">
                <p>WESTERN</p>
            </div> --}}
        </div>

        <div class="recommendations">
            <h2>FOOD RECOMMENDATION</h2>
            <div class="recommendation-scroll">
                <div class="recommendation-card">
                    <img src="{{ asset('gambar/gacoan.jpeg')}}" alt="Food 1" class="recommendation-img">
                </div>
                <div class="recommendation-card">
                    <img src="{{ asset('gambar/kopken.jpeg')}}" alt="Food 2" class="recommendation-img">
                </div>
                <div class="recommendation-card">
                    <img src="{{ asset('gambar/janjiw.jpeg')}}" alt="Food 3" class="recommendation-img">
                </div>
                <div class="recommendation-card">
                    <img src="{{ asset('gambar/jco.jpeg')}}" alt="Food 4" class="recommendation-img">
                </div>
            </div>

            <h2>DRINK RECOMMENDATION</h2>
            <div class="recommendation-scroll">
                <div class="recommendation-card" onclick="navigateToOrderDetails('Kopi Kenangan', 20000)">
                    <img src="{{ asset('gambar/kopken.jpeg')}}" alt="Drink 1" class="recommendation-img">
                </div>
                <div class="recommendation-card">
                    <img src="{{ asset('gambar/tea.jpeg')}}" alt="Drink 2" class="recommendation-img">
                </div>
                <div class="recommendation-card">
                    <img src="{{ asset('gambar/smoothie.jpeg')}}" alt="Drink 3" class="recommendation-img">
                </div>
                <div class="recommendation-card">
                    <img src="{{ asset('gambar/juice.jpeg')}}" alt="Drink 4" class="recommendation-img">
                </div>
            </div>

            <h2>DESSERT RECOMMENDATION</h2>
            <div class="recommendation-scroll">
                <div class="recommendation-card">
                    <img src="{{ asset('gambar/cake.jpeg')}}" alt="Dessert 1" class="recommendation-img">
                </div>
                <div class="recommendation-card">
                    <img src="{{ asset('gambar/ice-cream.jpeg')}}" alt="Dessert 2" class="recommendation-img">
                </div>
                <div class="recommendation-card">
                    <img src="{{ asset('gambar/pudding.jpeg')}}" alt="Dessert 3" class="recommendation-img">
                </div>
                <div class="recommendation-card">
                    <img src="{{ asset('gambar/cookies.jpeg')}}" alt="Dessert 4" class="recommendation-img">
                </div>
            </div>
        </div>

        <nav class="navigation">
            <div class="nav-item">Home</div>
            <div class="nav-item">Promo</div>
            <div class="nav-item">Activity</div>
            <div class="nav-item">Chat</div>
            <div class="nav-item">Profile</div>
        </nav>
    </div>
    <script src="{{ asset('js/navigation.js')}}"></script>
</body>
</html>