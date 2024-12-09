<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>WELCOME!</h1>
                <p>HOW CAN I HELP YOU TODAY?</p>
                <div class="header-icons">
                    <span class="icon">❤️</span>
                    <span class="icon">🔔</span>
                </div>
            </div>

            <div class="search-bar">
                <span class="search-icon">🔍</span>
                <input
                    type="search"
                    class="input-field"
                    placeholder="SEARCH FOOD/MART"
                />
            </div>

            <div class="category-grid">
                <a href="{{route('pelanggan.create')}}" class="category-card">
                    <img
                        src="{{asset('gambar/hamburger.png')}}"
                        alt="Food"
                        class="category-icon"
                    />
                    <p>FOOD</p>
                </a>
                <div class="category-card">
                    <img
                        src="{{asset('gambar/shopping-cart.png')}}"
                        alt="Mart"
                        class="category-icon"
                    />
                    <p>MART</p>
                </div>
            </div>

            <div class="quickpay-section">
                <div class="quickpay-card">
                    <span class="star-icon">⭐</span>
                    <span>QUICKPAY</span>
                    <div class="quickpay-actions">
                        <div class="action-item">
                            <span class="action-icon">💳</span>
                            <span>PAY</span>
                        </div>
                        <div class="action-item">
                            <span class="action-icon">⬇️</span>
                            <span>TOP UP</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recommendations">
                <h2>FOOD RECOMMENDATION</h2>
                <div class="recommendation-scroll">
                    <div class="recommendation-card">
                        <img
                            src="{{ asset('gambar/gacoan.jpeg')}}"
                            alt="Food 1"
                            class="recommendation-img"
                        />
                    </div>
                    <div class="recommendation-card">
                        <img
                            src="{{ asset('gambar/kopken.jpeg')}}"
                            alt="Food 2"
                            class="recommendation-img"
                        />
                    </div>
                    <div class="recommendation-card">
                        <img
                            src="{{ asset('gambar/janjiw.jpeg')}}"
                            alt="Food 3"
                            class="recommendation-img"
                        />
                    </div>
                    <div class="recommendation-card">
                        <img
                            src="{{asset('gambar/jco.jpeg')}}"
                            alt="Food 4"
                            class="recommendation-img"
                        />
                    </div>
                </div>

                <h2>MART RECOMMENDATION</h2>
                <div class="recommendation-scroll">
                    <div class="recommendation-card">
                        <img
                            src="{{ asset('gambar/indomaret.jpeg')}}"
                            alt="Mart 1"
                            class="recommendation-img"
                        />
                    </div>
                    <div class="recommendation-card">
                        <img
                            src="{{ asset('gambar/superindo.jpeg')}}"
                            alt="Mart 2"
                            class="recommendation-img"
                        />
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
        <script src="{{asset('js/navigation.js')}}"></script>
    </body>
</html>
