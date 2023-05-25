<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link rel="stylesheet" href="../../CSS/faq.css">
    <link rel="stylesheet" href="../../CSS/faq_sidenav.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>
<body>
      <h2>Frequently Asked Questions (FAQs)</h2>

      <h3>

      <button class="accordion">WHAT IS SRI TEL ?</button>
      <div class="panel">
        <p>SRI TEL is Sri Lanka's 2nd largest network operator with an island wide digital wireless network.</p>
      </div>

      <button class="accordion">WHAT ARE THE PRODUCTS AND SERVICES WHICH SRI TEL OFFERS ?</button>
      <div class="panel">
        <ul>
          <li>Fixed Phone Services</li>
          <li>Internet</li>
          <li>Internet Data Center Facilities</li>
          <li>Managed Services</li>
          <li>Corporate Data Networks</li>
        </ul>
      </div>

      <button class="accordion">DO I NEED TO CREATE AN ACCOUNT BEFORE GET SERVICES FROM SRI TEL ?</button>
      <div class="panel">
        <p>Yes! All clients must create an account in order to purchase connections and packages. To create an account click on "Sign In"<a href="../User/login.php">Click Here</a></p>
      </div>

      <button class="accordion">HOW DO I PURCHASE A CONNECTION ?</button>
      <div class="panel">
        <p>To purchase a new connection, you have to order it online. Go to "Purchase New" and submit the form after filling accurately.<a href="../Views/connectionForm.php">Click Here</a></p>
      </div>

      <button class="accordion">WHAT ARE THE PACKAGES YOU HAVE ?</button>
      <div class="panel">
        <p>You can view all package details by click on "Packages"<a href="../../Packages.html">Click Here</a></p>
      </div>

      <button class="accordion">HOW DO I REPORT A PROBLEM ?</button>
      <div class="panel">
        <p>You can report any complaint by click on "Add Complaint".SRI TEL will respond you within 24 hours. <a href="../View/com_form.php">Click Here</a></p>
      </div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

</body>
</html>
