*{
    box-sizing: border-box;
    }
    body{ 
    
          font-family: "Nunito", sans-serif;
          font-optical-sizing: auto;
          font-weight: weight;
          font-style: normal;
          margin: 0px;
    }
    #menu{
        height: 80px;
        padding: 0 20px;
        background-color: rgb(255, 255, 255);
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);  
    
        
    }
    #logo{
        font-size: 40px;
        line-height: 80px;
        color:midnightblue;
        float: left; 
        width: 190px;
    
    
    }
    #logo1{
        width: 100%;
        height: auto;
        margin-left: 1px;
        margin-top: 10px;
    
    }
    nav{
        float: right;
        line-height: 80px;
        margin-top: 10px;
        
    }
    nav a:link{
    text-decoration: none;
    margin-right: 20px;
    color: midnightblue;
    }
    nav a:hover{
    border-bottom: 3px solid #003666;
    
    }
    nav a:visited{
    text-decoration: none;
    margin-right: 20px;
    color: midnightblue;
    
    }
    .ikon{
        margin-right: 5px;
        font-size: 20px;
    }
    #anasayfa{
        height: 600px;
        background-image: url("images/icerik.jpg");
        background-position: center;
        background-attachment: fixed;
        background-size:contain;   
    }
    #black{
        height: 600px;
        background-color: black;
        opacity: 0.5;
    }
    #icerik{
        position: absolute;
        top:50%;
        left:40%;
        transform: translate(-50%,-50%);
        color: rgb(240, 237, 245);
        font-size: 20px;
    }
    #hakkimizda{
        background-color:rgb(202, 200, 200);
        padding: 50px;
        text-align: center;
        text-transform: capitalize;
        font-weight: 600;
    } 
    h3{
    font-size: 55px;
    color: midnightblue;
    font-weight: 600;
    }
    #container{
        width: 1100px;
        height: auto;
        margin: auto;
    
    }
    #sol{
        float: left;
        border-right:3px solid midnightblue;
        font-size: 30px;
        width: 400px;
        color: rgb(80, 78, 78);
    }
    #h5sol{
        line-height: 1.5;
        font-size: 25px;
        font-weight: 800;
    }
    #h5sol,#sag{
        margin: 0;
        padding: 0;
        margin-top: 40px;
        margin-left: 100px;
    }
    
    #sag{
    width: 950px;
    color: rgb(80, 78, 78);
    text-align: center;
    letter-spacing: 1px;
    font-size: 15px;
    line-height: 1.8;
    font-weight: 300;
    margin-left: 100px;
    }
    .img-fluid{
        max-width: 100%;
        height: auto;
    }
    .mt100{
        margin-top: 100px;
        border-radius: 50px;
    
    
    }
    #pson{
        color: rgb(80, 77, 77);
        letter-spacing: 1px;
        font-size: 20px;
        line-height: 1.8;
        margin-top: 30px;
        font-weight: 300;
    }
    #hizmetler{
    background-color: rgb(202, 200, 200);
    padding: 50px;
    text-align: center;
    height: 700px;
    }
    .card{
        width: 320px;
        height: 300px;
        border: 1px solid rgb(65, 65, 65);
        padding: 0px;
        display: inline block;
        border-radius:0% 0% 10% 10%;
    }
    .baslikcard{
        font-size: 17px;
        margin-top: auto;
    }
    #ekip{
        background-color: #003666;
        padding: 230px;
        height: auto;
        text-align: center;
        background-image: url("images/gezi6.jpg");
        background-position: center;
        background-attachment:fixed;
        background-size:cover;   
    }
    #opak{
        background-color: black;
        opacity: 0.5;
    }
    #ekiph3{
            color: rgb(254, 254, 255);
            margin-bottom: 50px;
            font-size: 80px;
    }
    .sutun-sol-sag{
        width: 350px;
        float: left;
        padding: 50px;
    }
    .oval{
        border-radius:50%;
    }
    .ekipisim{
        color: black;
        font-style:italic;
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 12px;
    
    }
    .ekipp{
        color: black;
        font-size: 20;
        font-weight: 200;
    }
    .social{
        color: black;
        border: 1px solid white;
        padding: 7px;
        width: auto;
        border-radius: 5px;
        margin: 5px 10px;
    }
    .social:hover{
        background-color:gray;
    opacity: 0.5;
    }
    .sutun{
        width: 350px;
        float: left;
        padding: 10px; 
    }
    .clear{
        clear: both;
    }
    #iletisim{
        background: url(images/gezi4.jpg);
        background-size: cover;
        padding: 50px;
        height: auto;
        text-align: center;
    
    
    }
    #h3iletisim{
        color: rgb(255, 255, 255);
        margin-top: 5px;
    }
    #iletisimopak{
        background: grey;
        padding: 30px 20px ;
        border-radius: 51px;
        margin-bottom: 50px;
        height: 600px;
        opacity: 0.5;
    }
    #formgroup{
        width: 700px;
        float: left;
        height: 500px;
        text-align: left;
    
    }
    #solform{
        width: 50%;
        float: left;
        padding-right: 5px;
    
    }
    #sagform{
        width: 50%;
        float: right; 
    }
    .form-control{
        width: 100%;
        padding:10px;
        font-size: 15px;
        line-height: 1.5;
        color:rgb(0, 0, 0);
        background-color: rgb(255, 255, 255);
        margin: 8px;
        border-radius: 5px;
        border: 2px solid black;
    }
    #adres{
    width: auto;
    padding: 30px;
    
    }
    textarea{
        font-family: Arial;
    }
    input[type="submit"]{
        cursor: pointer;
        background-color: white;
        font-size: 15px;
        letter-spacing: 1px;
        padding: 10px 30px;
        color: black;
        border: 2px solid black;
        border-radius: 5px;             
        margin-left: 10px;
        margin-top: 10px;
    }adresp{
        color: #ddd;
        font-size: 15px;
        letter-spacing: 2px;
        margin-bottom: 15px;
    }
    #copyright{
        color: white;
        font-size: 15px;
        letter-spacing: 2px;
    }
    #up{
        color: white;
        border: 1px solid white;
        border-radius: 50%;
        font-size: 15px;
        padding: 9px 12px;
        margin-top: 20px;
    }