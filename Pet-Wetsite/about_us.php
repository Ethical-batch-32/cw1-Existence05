<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Playfair Display', serif;
    display: grid;
    background-color:beige;
    align-content: center;
    min-height: 100vh;
}
section{
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 90vh;
    width: 85vw;
    margin: 0 auto;
}
.image{
    background: url("https://github.com/prabinmagar/contact-page-html-css/blob/master/person.jpg?raw=true") center/cover no-repeat;
}
.content{
    background: #fff;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
.content h2{
    text-transform: uppercase;
    font-size: 36px;
    letter-spacing: 6px;
    opacity: 0.9;
}
.content span{
    height: 0.5px;
    width: 80px;
    background: #777;
    margin: 30px 0;
}
.content p{
    padding-bottom: 15px;
    font-weight: 300;
    opacity: 0.7;
    width: 60%;
    text-align: center;
    margin: 0 auto;
    line-height: 1.7;
}
.links{
    margin: 15px 0;
}
.links li{
    border: 0.5px solid #777;
    list-style: none;
    border-radius: 5px;
    padding: 10px 15px;
    width: 160px;
    text-align: center;
}
.links li a{
    text-transform: uppercase;
    color: #777;
    text-decoration: none;
}
.links li:hover{
    border-color: #06d6a0;
}
.links li:hover a{
    color :#06d6a0;
}
.vertical-line{
    height: 30px;
    width: 0.5px;
    background: #777;
    margin: 0 auto;
}
.icons{
    display: flex;
    padding: 15px 0;
}
.icons li{
    display: block;
    padding: 5px;
    margin: 5px;
}
.icons li i{
    font-size: 26px;
    opacity: 0.8;
}
.icons li i:hover{
    color: #06d6a0;
}


/*******/

@media(max-width: 992px){
    section{
        grid-template-columns: 1fr;
        width: 100%;
    }
    .image{
        height: 100vh;
    }
    .content{
        height: 100vh;
    }
    .content h2{
        font-size: 20px;
        margin-top: 50px;
    }
    .content span{
        margin: 20px 0;
    }
    .content p{
        font-size: 14px;
    }
    .links li a{
        font-size: 14px;
    }
    .links{
        margin: 5px 0;
    }
    .links li{
        padding: 6px 10px;
    }
    .icons li i{
        font-size: 15px;
    }
}
   </style>     
        
        
        
        
    </head>
    <body>
        <section>
            <div class = "image">
                <!-- image here -->
            </div>

            <div class = "content">
                <h2>About Us</h2>
                <span><!-- line here --></span>

                <p>Welcome to PawTrails. Shop on our website to avail exciting offers exclusively for your pet friend. Earn points and get Coupons for additional discounts. We deal in Dog Toys, Tasty Snacks, Collars , Leashes, Harness with latest designs that you and your pet will fall in love with. Want to stay in touch? No problem – the page also features useful links to social media pages, as well as our online shop.</p>

                <ul class = "links">
                    <li><a href = "#">work</a></li>

                    <div class = "vertical-line"></div>

                    <li><a href = "#services">service</a></li>

                    <div class = "vertical-line"></div>
                    
                    <li><a href = "contact_us.html">contact</a></li>
                </ul>

                <ul class = "icons">
                    <li>
                        <i class = "fa fa-twitter"></i>
                    </li>
                    <li>
                        <i class = "fa fa-facebook"></i>
                    </li>
                    <li>
                        <i class = "fa fa-github"></i>
                    </li>
                    <li>
                        <i class = "fa fa-pinterest"></i>
                    </li>
                </ul>
            </div>
        </section>
        
    </body>
</html>