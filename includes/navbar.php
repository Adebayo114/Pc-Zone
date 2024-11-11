  <!-- NavBar Section -->
  <div class="nav">
        <img src="../Images/icons/134216_menu_lines_hamburger_icon.png" alt="Menu-icon" class="menu-icon"
            onclick="toggleMenu()" />
        <h2 class="ts">Top Sell</h2>
        <div class="nav-center">
            <div class="search" onclick="openSearch()">
                <img id="s-imge" src="./Images/icons/search.png" alt="Search-icon" />
                <input type="search" placeholder="What product are you buying" id="srch" />
            </div>
        </div>
        <div class="nav-icons">
            <!-- <div class="nav-icons-kids">
                <a href="./cart.php">
                    <img src="./Images/icons/shopping-cart.png" alt="Shopping-icon" />
                </a>
            </div> -->
            <div class="nav-icons-kids">
                <img src="./Images/icons/brand-identity (1).png" alt="Brand-icon" />
            </div>
            <div class="nav-icons-kids">
                <img src="./Images/icons/heart.png" alt="Heart-icon" />
            </div>

            <?php if(isset($_SESSION['loggedIn'])) : ?>
                <div class="nav-icons-kids">
                    <a href="./logout.php" style="text-decoration: none; color: white;"><img src="./Images/icons/user (2).png" alt="User-icon" /> Logout</a>
                </div>
                <?php else : ?>
                <div class="nav-icons-kids">
                    <a href="./login.php" style="text-decoration: none; color: white;"><img src="./Images/icons/user (2).png" alt="User-icon" /> Login</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Menu Overlay -->
    <div id="menuOverlay" class="menu-overlay" onclick="toggleMenu()">
        <div class="menu-dropdown" onclick="event.stopPropagation()">
            <a href="./index.php" class="menu-item">Home</a>
            <a href="./cart.php" class="menu-item">Cart</a>
            <a href="./login.php" class="menu-item">Sign Up/Login</a>
            <a href="#" class="menu-item">Products</a>
        </div>
    </div>

    <!-- Search Overlay -->
    <div id="searchOverlay" class="search-overlay" onclick="closeSearch()">
        <div class="search-modal" onclick="event.stopPropagation()">
            <input type="search" placeholder="What product are you buying?" autofocus />
            <button onclick="closeSearch()">Close</button>
        </div>
    </div>