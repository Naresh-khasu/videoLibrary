<?php include('admin/admin-login.php');
?><!doctype html><html><head><meta charset="utf-8"><title>ABOUT US</title><style>
.left {
    background-color: rgb(190, 186, 186);
}

p {
    text-align: justify;
}

* {
    margin: 0;
    font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
    font-size: 20px;
}

.content a:active {
    color: aqua;
}

.banner {
    width: 100%;
    height: 10px;
    background: #D0A960;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    margin-left: 20px;
}

nav a {
    text-decoration: none;
    /*text-align: center;*/
    color: aliceblue;
    display: block;
    padding: 10px;
    text-transform: uppercase;
}

nav a:hover {
    background: aliceblue;
    color: #333333;
}

.current a {
    background: aliceblue;
    color: #333;
}

@media screen and (min-width: 500px) {
    nav ul {
        display: flex;
    }
    nav li {
        flex: 1 1 0;
    }
}

nav {
    display: flex;
    justify-content: space-between;
}

#head-section {
    height: 150px;
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    clear: left;
}

#container {
    background: -webkit-linear-gradient(top, #6783e0 0%, #8f8f9b 20%, #d7aaee 100%);
    background: linear-gradient(top, #6783e0 0%, #8f8f9b 20%, #d7aaee 100%);
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    border-bottom-width: 0px;
    padding-left: 0px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    height: 1000px;
}

.admin li input[type=text],
.admin li input[type=password] {
    margin: 5px 0px;
}

* {
    margin: 0px;
    padding: 0px;
    font-family: Helvetica, Arial, sans-serif;
}


/* Full-width input fields */

.modal input[type=text],
.modal input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 16px;
}


/* Set a style for all buttons */

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
    font-size: 20px;
}

button:hover {
    opacity: 0.8;
}


/* Center the image and position the close button */

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

.avatar {
    width: 200px;
    height: 200px;
    border-radius: 50%;
}


/* The Modal (background) */

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}


/* Modal Content Box */

.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%;
    padding-bottom: 30px;
}


/* The Close Button (x) */

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}


/* Add Zoom Animation */

.animate {
    animation: zoom 0.6s
}

@keyframes zoom {
    from {
        transform: scale(0)
    }
    to {
        transform: scale(1)
    }
}

#student,
#teacher {
    float: left;
    background: #eee;
    width: 35%;
    padding: 1%;
    height: 60%;
    margin: 20px 6%;
}

#logo,
#banner {
    margin: 0;
    padding: 0;
    float: left;
    height: 100%
}

#logo {
    width: 100%;
    background-image: url(vlogo.png);
    background-repeat: no-repeat;
    background-position: center;
}

#banner {
    width: 75%;
    background-image: url(banner2.png);
}

#admin-text {
    color: aliceblue;
    margin-top: 10px;
}

.left,
.right {
    float: left;
    width: 46%;
    padding: 1%;
    margin: 1%;
    background: #F8F3F3;
}

.container .left h3 {
    color: #717070;
    font-weight: bold;
    text-transform: uppercase;
}

.container .left p {
    padding-left: 5%;
    padding-right: 5%;
    text-align: justify;
    line-height: 30px;
    margin-top: 30px;
    margin-bottom: 15px;
    color: #B3B3B3;
}

.placeholder {
    /* [disabled]max-width: 400px;
*/
    /* [disabled]max-height: 200px;
*/
    width: 100%;
    padding-top: 30px;
    /* [disabled]padding-left: 19px;
*/
    padding-bottom: 30px;
    height: 100%;
}

</style></head><body><div id="container"><div id="head-section"><div id="logo"></div></div><div id="navbar">
	<nav class="wrapper"><ul class="content"><li><a href="index.php">Home</a></li><li class="current"><a href="about.php">About</a></li><li><a href="login.php">login</a></li><li><a href="register.php">register</a></li></ul><ul class="admin"><span id="admin-text">ADMIN LOGIN</span><li><form method="post" action="about.php"><input type="text" name="username" placeholder="Admin username"/><input type="password" name="password" placeholder="Admin password"/><input type="submit" value="login" name="admin-login"/></form></li></ul></nav></div><div id="main-content"></div><section><article class="left" style="background: rgb(190, 186, 186)"><h3>VIDEO LIBRARY</h3><p>A Video library is a special library with a collection of academic tutorials that include video stored as electronic media formats,
along with means for organizing,
storing,
and retrieving the files and media contained in the library collection. In this age of blooming technology,
nowadays many institutions are using computer system because it is very much sophisticated to use and apply.</p>
<p>Video library can vary immensely in size and scope,
and can be maintained by individuals,
organizations,
or affiliated with established Physical library or with academic institutions. 
A video library is a type of information retrieval system. 
These information retrieval systems are able to exchange information with 
each other through interoperability and sustainability. The video library aims to provide the needed 
academic tutorials to anyone who wants to get benefited. Video library is the collection of videos or
 study tutorials for anyone.</p></article><aside class="right" style="background: rgb(190, 186, 186)">
 <img src="banner1.png" width="400" height="200" class="placeholder"/></aside></section></div></body></html>