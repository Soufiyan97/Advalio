<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style8.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>Contact Us</title>
</head>
<body>
    <div id="sideNav">
        <nav>
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">PRODUCTS AND SOULTIONS</a></li>
            <li><a href="#">CLIENTS</a></li>
            <li><a href="#">PARTNERS</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">CONTACT US</a></li>
          </ul>
        </nav>
      </div>
      <div id="manuBtn">
          <img src="images/menu.png" id="menu">
      </div>
    <div class="background"></div>
    <header>
        <div class="container">
            <ul>
                <li>
                    <a href="#" class="logo">
                        <div class="images">
                            <img src="images/advalio-removebg-preview.png">
                        </div>
                    </a>
                </li>
                <li>
                    <i class="fa-brands fa-facebook-f nav-link"></i>
                </li>
                <li>
                    <i class="fa-brands fa-instagram nav-link"></i>
                </li>
                <li>
                    <i class="fa-brands fa-twitter nav-link"></i>
                </li>
                <li>
                    <i class="fa-brands fa-linkedin-in nav-link"></i>
                </li>
                <li>
                    <span class="theme-toggle">
                         <i class="fa-solid fa-sun nav-link"></i>
                         <i class="fa-solid fa-moon nav-link"></i>
                    </span>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <section class="contact">
            <div class="container">
                <div class="left">
                    <div class="form-wrapper">
                        <div class="contact-heading">
                            <h1>Let's work together<span>.</span></h1>
                        </div>
                        <form action="contactForm.php" method="post" class="contact-form">
                            <div class="input-wrapper">
                                <input class="contact-input" autocomplete="off" type="text" name="FirstName">
                                <label>First Name</label>
                                <i class="icon fa-solid fa-address-card"></i>
                            </div>

                            <div class="input-wrapper">
                                <input class="contact-input" autocomplete="off" type="text" name="LastName">
                                <label>Last Name</label>
                                <i class="icon fa-solid fa-address-card"></i>
                            </div>

                            <div class="input-wrapper w-100">
                                <input class="contact-input" autocomplete="off" type="text" name="Email">
                                <label>Email</label>
                                <i class="icon fa-solid fa-envelope"></i>
                            </div>

                            <div class="input-wrapper textarea w-100">
                               <textarea name="Message" autocomplete="off" class="contact-input"></textarea>
                                <label>Message</label>
                                <i class="icon fa-solid fa-inbox"></i>
                            </div>

                            <div class="contact-button w-100">
                                  <input type="submit" name="submit" value="Send message" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="image-wrapper">
                        <img src="images/new-york-1745089_1280.jpg" class="img">
                        <div class="wave-wrap">
                            <svg class="wave" viewBox="0 0 783 1536" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="wave" 
                                d="M236.705 1356.18C200.542 1483.72 64.5004 1528.54 1
                                1535V1H770.538C793.858 63.1213 797.23 196.197 624.165 231.531C407.833 275.698 274.374 331.715 450.884 568.709C627.393
                                805.704 510.079 815.399 347.561 939.282C185.043 1063.17 281.908 1196.74 236.705 1356.18Z" />
                            </svg>
                        </div>
                        <svg class="dashed-wave" viewBox="0 0 345 877" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path id="dashed-wave"
                               d="M0.5 876C25.6667 836.167 73.2 739.8 62 673C48 589.5 35.5 499.5
                               125.5 462C215.5 424.5 150 365 87 333.5C24 302 44 237.5 125.5 
                               213.5C207 189.5 307 138.5 246 87C185 35.5 297 1 344.5 1"
                             />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script>
        const inputs=document.querySelectorAll(".contact-input");
        const toggleBtn = document.querySelector(".theme-toggle");
        const allElements = document.querySelectorAll("*");

        toggleBtn.addEventListener("click",() =>{
            document.body.classList.toggle("dark");
            allElements.forEach(el =>{
                el.classList.add("transition");
                setTimeout(() =>{
                    el.classList.remove("transition")
                },1000);
            })
        })

        inputs.forEach((ipt)=>{
            ipt.addEventListener("focus", () =>{
            ipt.parentNode.classList.add("focus");
            ipt.parentNode.classList.add("not-empty");
            });
            ipt.addEventListener("blur", () =>{
                if(ipt.value ==""){
                    ipt.parentNode.classList.remove("not-empty");
                }
            ipt.parentNode.classList.remove("focus");
            });
        });
    </script>
        <script>
            var manuBtb = document.getElementById("manuBtn");
            var sideNav = document.getElementById("sideNav");
            var menu = document.getElementById("menu");
            
            sideNav.style.right="-250px"
            manuBtb.onclick= function(){
                if(sideNav.style.right=="-250px"){
                  sideNav.style.right="0";
                  menu.src="images/close.png";
                }
                else{
                  sideNav.style.right="-250px";
                  menu.src="images/menu.png";
                }
            }
          </script>
</body>
</html>