<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panorama travel</title>
    <link rel="stylesheet" href="izgled.css" type="text/css" />
    <link rel="icon" type="image/png" href="travel.png">
    <script>
        function openLoginPopup() {
            window.open('login.html', 'LoginWindow', 'width=400,height=300');
        }
    </script>
</head>
<body>
    <header>
        <nav>
            <div class="login-button">
                <a href="login.php" class="button" onclick="openLoginPopup()">Log in</a>
            <img src="" alt="Login Icon">
            </div>
            <div class="boksovi">
                <div class="box">
					<img src="onama.jpg" alt="Image 1">
					<h2>O NAMA</h2>
					<p>Naš tim iskusnih stručnjaka za putovanja posvećen je tome da vaše snove pretvori u stvarnost.</p>
                    <a href="onama.php" class="button">SAZNAJTE VIŠE</a>
                </div>
                <div class="box tall-box">
					<img src="destinacije.jpg" alt="Image 1">
					<h2>DESTINACIJE</h2>
					<p>Naše pažljivo odabrane destinacije protežu se od prekrasnih pejzaža 
						švicarskih Alpa do kulturnog blaga Kjota, osiguravajući da vaša puotovanja
						 budu jedinstvena.</p>
                    <a href="destinacije.php" class="button">SAZNAJTE VIŠE</a>
                </div>
                <div class="box">
					<img src="booking.jpg" alt="Image 1">
					<h2>BOOKING</h2>
					<p>Naša online platforma prilagođena korisnicima i posvećeni tim za podršku su tu da vam pomognu da s lakoćom osigurate vašu sljedeću avanturu.</p>
                    <a href="booking.php" class="button">REZEVIŠI</a>
                
                
                
                </div>
            </div>
            
                
            
        </nav>
        <div class="destination-selection">
            <h2>IZABERITE DESTINACIJU</h2>
            <form id="destinationForm">
                <select id="destinationSelect" onchange="redirectToDestination()">
                    <option value="">Izaberite destinaciju</option>
                    <option value="italija.booking">Italija</option>
                    <option value="turska_booking">Turska</option>
                    <option value="grcka_booking">Grčka</option>
                    <option value="njemacka_booking">Njemačka</option>
                </select>
            </form>
        </div>
            
             
            
            
        
        </header>
        <br>
        <br>
        <footer>
            <br>
            <div class="contact">
            <h2>KONTAKTIRAJTE NAS</h2>
            <div class="ftr">
                <div class="ftr-image">
                    <img src="loc.png" alt="Image 11">
                    <p>Turalibegova 43, Tuzla 75000</p>
                </div>
                <div class="ftr-image">
                    <img src="phone.png" alt="Image 12">
                    <p>+387 35 294-046</p>
                </div>
                <div class="ftr-image">
                    <img src="email.png" alt="Image 13">
                    <p>panorama.travels@info.gmail</p>
                </div>
            
            </div>
            </div>
            
        </div>
        </footer>
        <script>
            function redirectToDestination() {
                var selectBox = document.getElementById("destinationSelect");
                var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    
                if (selectedValue) {
                    window.location = selectedValue + ".php";
                }
            }
        </script>
        </body>
</html>