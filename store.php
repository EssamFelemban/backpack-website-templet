<!DOCTYPE html>
<html>
    <head>
        <title>Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="store.php">STORE</a></li>
                    <li><a href="log-in.php">Log in</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">backpacks</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">backpacks</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">purpole Backpack</span>
                    <img class="shop-item-image" src="Images/bag7.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$80.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">green Backpack</span>
                    <img class="shop-item-image" src="Images/bag4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$60.00</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">black Backpack</span>
                    <img class="shop-item-image" src="Images/bag5.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$70.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">dark blue Backpack</span>
                    <img class="shop-item-image" src="Images/bag6.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$90.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">best seller</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">dark blue Backpack</span>
                    <img class="shop-item-image" src="Images/bag6.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$90.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">purpole Backpack</span>
                    <img class="shop-item-image" src="Images/bag7.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$80.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>

    </body>
</html>