<?php
/*
Template Name: Challenge Quiz
*/
?>

    <html>

    <head>

        <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/wp-content/custom/css/fish.css" />
        <link rel="stylesheet" type="text/css" href="/wp-content/custom/css/footer.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
            .fa {
                padding: 10px;
                font-size: 20px;
                width: 20px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
                border-radius: 50%;
            }
            
            .fa:hover {
                opacity: 0.7;
            }
            
            .fa-facebook {
                background: #3B5998;
                color: white;
            }
            
            .fa-twitter {
                background: #55ACEE;
                color: white;
            }
            
            .fa-google {
                background: #dd4b39;
                color: white;
            }
            
            .radio-toolbar input[type="radio"] {
                display: none;
            }
            
            .error {
                color: #FF0000;
            }
            
            .radio-toolbar label {
                display: inline-block;
                background-color: #ddd;
                color: black;
                padding: 4px 11px;
                font-family: 'Love Ya Like A Sister';
                font-size: 25px;
                cursor: pointer;
                border-radius: 8px;
                box-shadow: 0 9px #999;
            }
            
            .radio-toolbar input[type="radio"]:checked+label {
                background-color: #bbb;
            }
            
            li {
                list-style: none;
            }
            
            :root .css3-radios label,
            :root .css3-radios input[type="radio"] + span,
            :root .css3-radios input[type="radio"] + span::before,
            :root .css3-checkboxes label,
            :root .css3-checkboxes input[type="checkbox"] + span,
            :root .css3-checkboxes input[type="checkbox"] + span::before {
                display: inline-block;
                vertical-align: middle;
            }
            
            :root .css3-radios,
            :root .css3-checkboxes {
                position: relative;
                display: inline-block;
            }
            
            :root .css3-radios label *,
            :root .css3-checkboxes label * {
                cursor: pointer;
            }
            
            :root .css3-radios input[type="radio"],
            :root .css3-checkboxes input[type="checkbox"] {
                opacity: 0;
                position: absolute;
            }
            
            :root .css3-radios input[type="radio"] + span,
            :root .css3-checkboxes input[type="checkbox"] + span {
                font: normal;
                font-size: 20px;
                font-family: 'Love Ya Like A Sister';
                color: #333;
            }
            
            :root .css3-radios label:hover span::before,
            :root .css3-checkboxes label:hover span::before {
                -moz-box-shadow: 0 0 2px #ccc;
                -webkit-box-shadow: 0 0 2px #ccc;
                box-shadow: 0 0 2px #ccc;
            }
            
            :root .css3-radios label:hover span,
            :root .css3-checkboxes label:hover span {
                color: #000;
            }
            
            :root .css3-radios input[type="radio"] + span::before,
            :root .css3-checkboxes input[type="checkbox"] + span::before {
                content: "";
                width: 12px;
                height: 12px;
                margin: 0 4px 0 0;
                border: solid 1px #a8a8a8;
                line-height: 14px;
                text-align: center;
                -moz-border-radius: 100%;
                -webkit-border-radius: 100%;
                border-radius: 100%;
                background: #f6f6f6;
                background: -moz-radial-gradient(#f6f6f6, #dfdfdf);
                background: -webkit-radial-gradient(#f6f6f6, #dfdfdf);
                background: -ms-radial-gradient(#f6f6f6, #dfdfdf);
                background: -o-radial-gradient(#f6f6f6, #dfdfdf);
                background: radial-gradient(#f6f6f6, #dfdfdf);
            }
            
            :root .css3-radios input[type="radio"]:checked + span::before,
            :root .css3-checkboxes input[type="checkbox"]:checked + span::before {
                color: #666;
            }
            
            :root .css3-radios input[type="radio"]:disabled + span,
            :root .css3-checkboxes input[type="checkbox"]:disabled + span {
                cursor: default;
                -moz-opacity: .4;
                -webkit-opacity: .4;
                opacity: .4;
            }
            
            :root .css3-checkboxes input[type="checkbox"] + span::before {
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
            }
            
            :root .css3-radios input[type="radio"]:checked + span::before {
                content: "\2022";
                font-size: 24px;
            }
            
            :root .css3-checkboxes input[type="checkbox"]:checked + span::before {
                content: "\2714";
                font-size: 12px;
            }
            
            .block {
                display: inline-block;
                vertical-align: top;
            }
            
            .container {
                position: relative;
            }
            
            .center {
                position: absolute;
                left: 0;
                top: 30%;
                width: 100%;
                text-align: center;
                font-size: 12px;
            }
            
            img {
                width: 40%;
                height: auto;
            }
            
            .my_text {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
                font-weight: normal;
                color: #A52A2A;
                font-style: italic;
            }
            
            #q2 {
                display: none;
            }
            
            #q2:target {
                display: block;
            }
            
            #q3 {
                display: none;
            }
            
            #q3:target {
                display: block;
            }
            
            #q4 {
                display: none;
            }
            
            #q4:target {
                display: block;
            }
            
            #q5 {
                display: none;
            }
            
            #q5:target {
                display: block;
            }
            
            #q6 {
                display: none;
            }
            
            #q6:target {
                display: block;
            }
            
            #q7 {
                display: none;
            }
            
            #q7:target {
                display: block;
            }
            
            #q8 {
                display: none;
            }
            
            #q8:target {
                display: block;
            }
            
            #q9 {
                display: none;
            }
            
            #q9:target {
                display: block;
            }
            
            #q10 {
                display: none;
            }
            
            #q10:target {
                display: block;
            }
            
            #User_Details {
                display: none;
            }
            
            #User_Details:target {
                display: block;
            }
            
            #result {
                display: none;
            }
            
            #result:target {
                display: block;
            }
            
            .container2 {
                width: 100%;
                height: auto;
                padding: 1%;
            }
            
            .text2 {
                margin: 0px;
            }
            
            .img_ben {
                margin: auto;
                width: 120%;
            }
            
            .img_face {
                margin: auto;
                width: 100%;
            }
        </style>

        <script type="text/javascript">
            /*The functions below will disable the radio button when the user enters his/her choice*/
            var score = 0;

            function disableq1() {
                document.getElementById('before-select').style.display = "none";
                document.getElementById('after-select').style.display = "block";
            }

            function disableq2() {
                document.getElementById('q2-before').style.display = "none";
                document.getElementById('q2-after').style.display = "block";
            }

            function disableq3() {
                document.getElementById('q3-before').style.display = "none";
                document.getElementById('q3-after').style.display = "block";
            }

            function disableq4() {
                document.getElementById('q4-before').style.display = "none";
                document.getElementById('q4-after').style.display = "block";
            }

            function disableq5() {
                document.getElementById('q5-before').style.display = "none";
                document.getElementById('q5-after').style.display = "block";
            }

            function disableq6() {
                document.getElementById('q6-before').style.display = "none";
                document.getElementById('q6-after').style.display = "block";
            }

            function disableq7() {
                document.getElementById('q7-before').style.display = "none";
                document.getElementById('q7-after').style.display = "block";
            }

            function disableq8() {
                document.getElementById('q8-before').style.display = "none";
                document.getElementById('q8-after').style.display = "block";
            }

            function disableq9() {
                document.getElementById('q9-before').style.display = "none";
                document.getElementById('q9-after').style.display = "block";
            }

            function disableq10() {
                document.getElementById('q10-before').style.display = "none";
                document.getElementById('q10-after').style.display = "block";
            }

            function check() {
                document.body.scrollTop = document.documentElement.scrollTop = 0;
            }

            /*The functions below will display the justifications behind each correct option*/
            function answer1() {

                q1choice = document.querySelector('input[name="q1"]:checked').value;
                if (q1choice == 4) {

                    var str1 = "Holy Bananas!! I didn't expect you to know that !!";
                    document.getElementById("output1").innerHTML = str1.fontcolor("green").bold();
                    score++;

                } else {
                    var str1 = "Sorry ,the correct answer is 1 hamburger.";

                    var dv = document.getElementById('image_output1');
                    while (dv.hasChildNodes()) {
                        dv.removeChild(dv.lastChild);
                    }

                    var elem = document.createElement("img");
                    elem.src = '/wp-content/uploads/2017/05/1-1.gif';
                    elem.width = '300%';
                    document.getElementById("image_output1").appendChild(elem);
                    var yourImg = document.getElementById('image_output1');

                    document.getElementById("output1").innerHTML = str1.fontcolor("red").bold();

                }

                document.getElementById("comments1").innerHTML = "" + '<p>2400 litres of water for one hamburger! Most of the water is needed for producing the beef contained in the hamburger. </p>';
                document.getElementById('A1').style.display = "block";

            }

            function answer2() {

                document.getElementById("qcount").innerHTML = "Question 2/10";
                document.getElementById('A1').style.display = "none";
                document.getElementById('q1').style.display = "none";
                document.getElementById('q2').style.display = "block";

                q2choice = document.querySelector('input[name="q2"]:checked').value;
                if (q2choice == 1) {
                    var str2 = "Well Done,Correct Answer !!";
                    document.getElementById("output2").innerHTML = str2.fontcolor("green").bold();
                    score++;
                } else {
                    var str2 = "Sorry ,the correct answer is Australia";

                    var dv = document.getElementById('image_output2');
                    while (dv.hasChildNodes()) {
                        dv.removeChild(dv.lastChild);
                    }
                    var elem = document.createElement("img");
                    elem.src = '/wp-content/uploads/2017/05/1-1.gif';
                    document.getElementById("image_output2").appendChild(elem);
                    document.getElementById("output2").innerHTML = str2.fontcolor("red").bold();

                }

                document.getElementById("comments2").innerHTML = "" + '<p> Australia is the driest populated continent with average rainfall of 469mm per year, whereas the global average is 746mm per year. Antarctica is drier but is not populated in the same numbers as Australia (having no permanent residents).<p>';

                document.getElementById('A2').style.display = "block";

            }

            function answer3() {

                document.getElementById("qcount").innerHTML = "Question 3/10";
                document.getElementById('A2').style.display = "none";
                document.getElementById('q2').style.display = "none";
                document.getElementById('q3').style.display = "block";

                q3choice = document.querySelector('input[name="q3"]:checked').value;
                if (q3choice == 3) {

                    var str3 = "Bravo!! It is indeed correct."
                    document.getElementById("output3").innerHTML = str3.fontcolor("green").bold();

                    score++;
                } else {
                    var str3 = "Sorry ,the correct answer is 200 Litres";
                    var dv = document.getElementById('image_output3');
                    while (dv.hasChildNodes()) {
                        dv.removeChild(dv.lastChild);
                    }
                    var elem = document.createElement("img");
                    elem.src = '/wp-content/uploads/2017/05/1-1.gif';
                    document.getElementById("image_output3").appendChild(elem);
                    document.getElementById("output3").innerHTML = str3.fontcolor("red").bold();

                }

                document.getElementById("comments3").innerHTML = "" + '<p> Most people\'s first thought is that the majority of a latte\'s water footprint is from the brewing process itself.</p>' + "Sure, it takes water to brew the coffee (0.05 litres), but even more to make the plastic lid (2.5 litres) as well as the paper cup and sleeve (5.6 litres). It takes water to process the coffee and grow the sugar (7.6 litres). But it takes the most water to produce the milk (49.4 litres) and actually grow the coffee beans (142.8 litres) needed to make that single drink.";
                document.getElementById('A3').style.display = "block";

            }

            function answer4() {

                document.getElementById("qcount").innerHTML = "Question 4/10";
                document.getElementById('A3').style.display = "none";
                document.getElementById('q3').style.display = "none";
                document.getElementById('q4').style.display = "block";

                q4choice = document.querySelector('input[name="q4"]:checked').value;
                if (q4choice == 1) {

                    var str4 = "Great Choice!! It is correct.";
                    document.getElementById("output4").innerHTML = str4.fontcolor("green").bold();
                    score++;
                } else {
                    var str4 = "Sorry ,the correct answer is Morning .";
                    document.getElementById("output4").innerHTML = str4.fontcolor("red").bold();
                    var dv = document.getElementById('image_output4');
                    while (dv.hasChildNodes()) {
                        dv.removeChild(dv.lastChild);
                    }
                    var elem = document.createElement("img");
                    elem.src = '/wp-content/uploads/2017/05/1-1.gif';
                    document.getElementById("image_output4").appendChild(elem);
                }
                document.getElementById("comments4").innerHTML = "" + '<p>The best time to water plants is either in the very early morning or late afternoon.</p>' +
                    "If you water at night you can create fungal problems for your plants because the excess moisture is not given a chance to evaporate.Watering in the early morning is great, as it will penetrate down through the plant and gives the plant a kick on before the heat of the day sets in.";

                document.getElementById('A4').style.display = "block";

            }

            function answer5() {

                document.getElementById("qcount").innerHTML = "Question 5/10";
                document.getElementById('A4').style.display = "none";
                document.getElementById('q4').style.display = "none";
                document.getElementById('q5').style.display = "block";

                q5choice = document.querySelector('input[name="q5"]:checked').value;
                if (q5choice == 3) {

                    var str5 = "Yes,you nailed it!!"
                    document.getElementById("output5").innerHTML = str5.fontcolor("green").bold();
                    score++;

                } else {
                    var str5 = "Sorry ,the correct answer is a leaky toilet";
                    document.getElementById("output5").innerHTML = str5.fontcolor("red").bold();
                    var dv = document.getElementById('image_output5');
                    while (dv.hasChildNodes()) {
                        dv.removeChild(dv.lastChild);
                    }
                    var elem = document.createElement("img");
                    elem.src = '/wp-content/uploads/2017/05/1-1.gif';
                    document.getElementById("image_output5").appendChild(elem);

                }

                document.getElementById("comments5").innerHTML = "" + '<p>A leaky toilet can wastes about 757 litres of water every day! Ask to help your parents test your toilets for leaks. Place a drop of food coloring in the tank and if the color shows in the bowl for flushing, you have a leak. </p>';
                document.getElementById('A5').style.display = "block";

            }

            function answer6() {

                document.getElementById("qcount").innerHTML = "Question 6/10";
                document.getElementById('A5').style.display = "none";
                document.getElementById('q5').style.display = "none";
                document.getElementById('q6').style.display = "block";

                q6choice = document.querySelector('input[name="q6"]:checked').value;
                if (q6choice == 4) {

                    var str6 = "Well done!!Looks like some one has done their home work.";
                    document.getElementById("output6").innerHTML = str6.fontcolor("green").bold();
                    score++;

                } else {
                    var str6 = "Sorry ,the correct answer is 5 people";
                    document.getElementById("output6").innerHTML = str6.fontcolor("red").bold();
                    var dv = document.getElementById('image_output6');
                    while (dv.hasChildNodes()) {
                        dv.removeChild(dv.lastChild);
                    }
                    var elem = document.createElement("img");
                    elem.src = '/wp-content/uploads/2017/05/1-1.gif';
                    document.getElementById("image_output6").appendChild(elem);

                }

                document.getElementById("comments6").innerHTML = "" + '<p>Water consumption levels vary throughout Australia. Average daily water use ranges from as little as 100 litres per person in some coastal areas to more than 800 litres per person in the dry inland areas. The current average daily water consumption is 340 litres per person, or 900 litres per household. </p>';
                document.getElementById('A6').style.display = "block";

            }

            function answer7() {

                document.getElementById("qcount").innerHTML = "Question 7/10";
                document.getElementById('A6').style.display = "none";
                document.getElementById('q6').style.display = "none";
                document.getElementById('q7').style.display = "block";

                q7choice = document.querySelector('input[name="q7"]:checked').value;
                if (q7choice == 4) {

                    var str7 = "Good Job,Keep Going!!";
                    document.getElementById("output7").innerHTML = str7.fontcolor("green").bold();
                    score++;

                } else {
                    var str7 = "Sorry ,the correct answer is 15Litres/Min";
                    document.getElementById("output7").innerHTML = str7.fontcolor("red").bold();
                    var dv = document.getElementById('image_output7');
                    while (dv.hasChildNodes()) {
                        dv.removeChild(dv.lastChild);
                    }
                    var elem = document.createElement("img");
                    elem.src = '/wp-content/uploads/2017/05/1-1.gif';
                    document.getElementById("image_output7").appendChild(elem);

                }

                document.getElementById("comments7").innerHTML = "" + '<p>Washing your bike with a bucket and sponge will not only get your bike extra clean, it will also save water. Hoses can waste more than 23 Litres a minute while a bucket only uses a few Litres for a whole wash. Use a bucket and sponge when you help your parents wash the car, too!  </p>';

                document.getElementById('A7').style.display = "block";

            }

            function answer8() {

                document.getElementById("qcount").innerHTML = "Question 9/10";
                document.getElementById('A7').style.display = "none";
                document.getElementById('q7').style.display = "none";
                document.getElementById('q8').style.display = "block";

                q8choice = document.querySelector('input[name="q8"]:checked').value;
                if (q8choice == 2) {

                    var str8 = "Yes,That's correct !!";
                    document.getElementById("output8").innerHTML = str8.fontcolor("green").bold();
                    score++;

                } else {
                    var str8 = "Sorry ,the correct answer is False";
                    document.getElementById("output8").innerHTML = str8.fontcolor("red").bold();
                    var dv = document.getElementById('image_output8');
                    while (dv.hasChildNodes()) {
                        dv.removeChild(dv.lastChild);
                    }
                    var elem = document.createElement("img");
                    elem.src = '/wp-content/uploads/2017/05/1-1.gif';
                    document.getElementById("image_output8").appendChild(elem);

                }

                document.getElementById("comments8").innerHTML = "" + '<p> Although there is a lot of water on earth (75 percent of the earth\'s surface!), most of it is salt water so you can\'t drink it. It is very important to save the water we use every day because less than 1 percent of the earth\'s water can be used by people!  </p>';
                document.getElementById('A8').style.display = "block";

            }

            function answer9() {

                document.getElementById("qcount").innerHTML = "Question 9/10";
                document.getElementById('A8').style.display = "none";
                document.getElementById('q8').style.display = "none";
                document.getElementById('q9').style.display = "block";

                q9choice = document.querySelector('input[name="q9"]:checked').value;
                if (q9choice == 4) {

                    var str9 = "Whoa!! That's correct";
                    document.getElementById("output9").innerHTML = str9.fontcolor("green").bold();
                    score++;

                } else {
                    var str9 = "Sorry ,the correct answer is All of the above";
                    document.getElementById("output9").innerHTML = str9.fontcolor("red").bold();
                    var dv = document.getElementById('image_output9');
                    while (dv.hasChildNodes()) {
                        dv.removeChild(dv.lastChild);
                    }
                    var elem = document.createElement("img");
                    elem.src = '/wp-content/uploads/2017/05/1-1.gif';
                    document.getElementById("image_output9").appendChild(elem);

                }

                document.getElementById("comments9").innerHTML = "" + '<p>Put a bucket under the tap while you make the water the right temperature. The water you collect can be used to water plants or fill up a squirt gun. Use a clock to keep your showers under 5 minutes. Use a broom instead of the hose to clean your driveway or sidewalk. </p>';

                document.getElementById('A9').style.display = "block";

            }

            function answer10() {

                document.getElementById("qcount").innerHTML = "Question 10/10";
                document.getElementById('A9').style.display = "none";
                document.getElementById('q9').style.display = "none";
                document.getElementById('q10').style.display = "block";

                q10choice = document.querySelector('input[name="q10"]:checked').value;
                if (q10choice == 3) {

                    var str10 = "Your answer is correct.";
                    document.getElementById("output10").innerHTML = str10.fontcolor("green").bold();
                    score++;

                } else {
                    var str10 = "Sorry ,the correct answer is take it through a car wash"
                    document.getElementById("output10").innerHTML = str10.fontcolor("red").bold();
                    var dv = document.getElementById('image_output10');
                    while (dv.hasChildNodes()) {
                        dv.removeChild(dv.lastChild);
                    }
                    var elem = document.createElement("img");
                    elem.src = '/wp-content/uploads/2017/05/1-1.gif';
                    document.getElementById("image_output10").appendChild(elem);

                }

                document.getElementById("comments10").innerHTML = "" + '<p>Many car washes save more water than if you wash your car at home. They do this by recycling the water that they use instead of letting it run down the sewer drains. Tell your parents to search online to find a "water-efficient" car wash near your house. </p>';
                document.getElementById('A10').style.display = "block";

            }

            //It gets the User details which will be used for printing the certificate
            function enter_user_details() {
                document.body.scrollTop = document.documentElement.scrollTop = 0;
                document.getElementById("qcount").style.display = "none";
                document.getElementById('A10').style.display = "none";
                document.getElementById('q10').style.display = "none";
                document.getElementById('User_Details').style.display = "block";

            }

            //It ensures that the user enters a name 
            /*function check_name() {
                name = document.getElementById("Name").value;
                if (name.length > 1) {
                    calculate_result();
                }

            }*/

            //Calculate and display the score of the User
            function calculate_result() {
                document.body.scrollTop = document.documentElement.scrollTop = 0;
                document.getElementById("sidemenu1").style.display = "none";
                //document.getElementById("sidemenu2").style.display = "block";
                document.getElementById('User_Details').style.display = "none";
                name = document.getElementById("Name").value;

                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth() + 1; //January is 0!

                var yyyy = today.getFullYear();
                if (dd < 10) {
                    dd = '0' + dd;
                }
                if (mm < 10) {
                    mm = '0' + mm;
                }
                var today = dd + '/' + mm + '/' + yyyy;

                document.getElementById("certificate").innerHTML = '<br/>' + "This Certificate is Hereby Awarded to " + '<br/>' + '<br/>' + '<center>' + name.bold() + '</center>' +
                    '<br/>' + "For Scoring " + score + " /10 in Watertarget Challenge" + '<br/>' + '<br/>' + "on " + today;

                if (score > 5) {
                    document.getElementById('result').style.display = "block";
                } else {
                    var str = "Oh Snap!! It didn't go well is it?" + '<br/>' + "Don't worry.You can always come back and give it a try !!" + '<br/>' + '<center>' + '<a href="http://watertarget.azurewebsites.net/">' + '<input type="button" value="Home" id="button1"/>' + '</a>' + '</center>';
                    document.getElementById("suggestion").innerHTML = str.fontsize(5);
                    document.getElementById('Low_Score').style.display = "block";

                }

            }

            //It validates the data entered by the User in Name field
            function validate() {
                if (document.challenge.Name.value == "") {
                    alert("Enter a name");
                    document.challenge.Name.focus();
                    return false;
                }
                if (!/^[a-zA-Z]*$/g.test(document.challenge.Name.value)) {
                    alert("Please remove spaces,number or special characters from your name");
                    document.challenge.Name.focus();
                    return false;
                } else {
                    calculate_result();
                }
            }

            function clearAll() {
                window.localStorage.clear();
                window.sessionStorage.clear();
            }
        </script>

    </head>
    <header>
        <ul class="my-list-style">
            <li><a href="http://watertarget.azurewebsites.net/home/">Home</a></li>
            <li><a href="http://watertarget.azurewebsites.net/water-calculator#Bathroom" onclick="clearAll()">Water Calculator</a></li>
            <li><a class="active" href="javascript:window.location.href=window.location.href">Challenge</a></li>
            <li><a href="http://watertarget.azurewebsites.net/wp-content/themes/shapely/page-templates/contact.php">Contact</a></li>

        </ul>
        <h2>Consumption Quiz</h2>

    </header>

    <body>
        <div id="form">
            <div id="fb-root"></div>
            <div id="container"></div>
            <div id="sidemenu1">
                <ul style="float:right">
                    <a href="http://watertarget.azurewebsites.net/home/" onclick="return confirm('Are you sure to exit the quiz?')">
                        <img src="/wp-content/uploads/2017/05/15766.png" style="width:50px;height:50px;" alt="Home" />
                    </a>
                </ul>
            </div>

            <!--<div id="sidemenu2" style="display:none">
<ul style="float:right">

<div class="fb-share-button" data-layout="icon" data-size="large" data-mobile-iframe="false">
 <a class="fa fa-facebook" target="_blank"  href="javascript:void(0);" onclick="openFbPopUp();" ></a></div>

<a href="http://twitter.com/share?&text=Some%20good%20quiz%20here" class="fa fa-twitter" target="_blank"></a><br/>

</ul>
</div>-->

            <script>
                window.fbAsyncInit = function() {
                    FB.init({
                        appId: '1099498370196935',
                        status: true,
                        cookie: true,
                        xfbml: true
                    });

                };
                (function() {
                    var e = document.createElement('script');
                    e.async = true;
                    e.src = document.location.protocol +
                        '//connect.facebook.net/en_US/all.js';
                    document.getElementById('fb-root').appendChild(e);
                }());
            </script>
            <script>
                function openFbPopUp() {
                    document.body.scrollTop = document.documentElement.scrollTop = 0;
                    if (score > 5) {
                        var caption = 'I Just scored ' + score + '/10 in a Quiz on Water Conservation';
                    } else {
                        var caption = 'Try testing your knowledge on Water Conservation by clicking the link below';
                    }
                    FB.ui({
                            method: 'feed',
                            name: caption,
                            link: 'http://watertarget.azurewebsites.net/challenge/',
                            picture: 'http://fbrell.com/f8.jpg',
                            caption: ' WaterTarget is an initiative to create awareness among Teenagers about the importance of water and how to use it wisely',
                            description: 'Do you Think you can beat me?Click on the link and have a try'

                        } //,
                        /* function(response) {
                           if (response && !response.error_message ) {
                             alert('Post was published.');
                           } 
                           else {
                             alert('Post was not published.');
                           }
                         }*/
                    );
                }
            </script>

            <form id="waterform" name="challenge" onsubmit="return false" method="post">
                <div id="qcount" class="formgroup"> Question 1/10</div>

                <div id="q1">
                    <div class="formgroup">

                        <center>
                            <div id="image_output1" class="img_ben">
                                <img src="/wp-content/uploads/2017/05/2-1.gif" alt="Happy_Ben" />
                            </div>
                        </center>

                        <p>1. Which product requires the most water to create it?</p>
                        <div style="text-align: left;margin-top:1%;margin-left: 30px;">
                            <div id="before-select">
                                <ul class="css3-radios">
                                    <li>
                                        <label>
                                            <input type="radio" id="radio1" name="q1" value="1" onclick="answer1();disableq1()" />
                                            <span> 1 cotton t-shirt</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio2" name="q1" value="2" onclick="answer1();disableq1()" />
                                            <span>1 microchip</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio3" name="q1" value="3" onclick="answer1();disableq1()" />
                                            <span>1 cup of coffee</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio4" name="q1" value="4" onclick="answer1();disableq1()" />
                                            <span>1 hamburger</span></label>
                                    </li>
                                </ul>
                            </div>

                            <div id="after-select" style="display:none">
                                <ul class="css3-radios">
                                    <li>
                                        A.&nbsp; 1 cotton t-shirt
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        B.&nbsp; 1 microchip
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        C.&nbsp; 1 cup of coffee
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        D.&nbsp; 1 hamburger
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <br/>
                <br/>

                <div id="A1" style="display:none">
                    <div id="output1"></div>
                    <div id="comments1" class="my_text"></div>
                    <center>
                        <input id="button1" type="button" value="Proceed" onclick="check();answer2();" />
                    </center>
                </div>

                <div id="q2">
                    <div class="formgroup">
                        <center>
                            <div id="image_output2" class="img_ben">
                                <img src="/wp-content/uploads/2017/05/2-1.gif" alt="Happy_Ben" />
                            </div>
                        </center>

                        <p>2. Where is the driest permanently occupied continent on Earth?</p>

                        <div style="text-align: left;margin-top:1%;margin-left: 30px;">
                            <div id="q2-before">
                                <ul class="css3-radios">
                                    <li>
                                        <label>
                                            <input type="radio" id="radio5" name="q2" value="1" onclick="answer2();disableq2()" />
                                            <span>  Australia</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio6" name="q2" value="2" onclick="answer2();disableq2()" />
                                            <span>Antarctica</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio7" name="q2" value="3" onclick="answer2();disableq2()" />
                                            <span>Africa</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio8" name="q2" value="4" onclick="answer2();disableq2()" />
                                            <span>South America</span></label>
                                    </li>
                                </ul>
                            </div>

                            <div id="q2-after" style="display:none">
                                <ul class="css3-radios">
                                    <li>
                                        A.&nbsp; Australia
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        B.&nbsp; Antarctica
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        C.&nbsp; Africa
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        D.&nbsp; South America
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="A2" style="display:none">
                    <div id="output2"></div>
                    <div id="comments2" class="my_text"></div>
                    <center>
                        <input id="button1" type="button" value="Proceed" onclick="check();answer3();" />

                    </center>
                </div>

                <div id="q3">
                    <div class="formgroup">

                        <center>
                            <div id="image_output3" class="img_ben">
                                <img src="/wp-content/uploads/2017/05/2-1.gif" alt="Happy_Ben" />
                            </div>
                        </center>

                        <p>3.How much litres of water does a cup of coffee take to create ?</p>

                        <div style="text-align: left;margin-top:1%;margin-left: 30px;">
                            <div id="q3-before">
                                <ul class="css3-radios">
                                    <li>
                                        <label>
                                            <input type="radio" id="radio9" name="q3" value="1" onclick="answer3();disableq3()" />
                                            <span>  100</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio10" name="q3" value="2" onclick="answer3();disableq3()" />
                                            <span>150</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio11" name="q3" value="3" onclick="answer3();disableq3()" />
                                            <span>200</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio12" name="q3" value="4" onclick="answer3();disableq3()" />
                                            <span>250</span></label>
                                    </li>
                                </ul>
                            </div>

                            <div id="q3-after" style="display:none">
                                <ul class="css3-radios">
                                    <li>
                                        A.&nbsp; 100
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        B.&nbsp; 150
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        C.&nbsp; 200
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        D.&nbsp; 250
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>

                <div id="A3" style="display:none">
                    <div id="output3"></div>
                    <div id="comments3" class="my_text"></div>
                    <center>
                        <input type="button" id="button1" value="Proceed" onclick="check();answer4();" />

                    </center>
                </div>

                <div id="q4">
                    <div class="formgroup">
                        <center>
                            <div id="image_output4" class="img_ben">
                                <img src="/wp-content/uploads/2017/05/2-1.gif" alt="Happy_Ben" />
                            </div>
                        </center>

                        <p>4.What time should you water the garden ?</p>

                        <div style="text-align: left;margin-top:1%;margin-left: 30px;">
                            <div id="q4-before">
                                <ul class="css3-radios">
                                    <li>
                                        <label>
                                            <input type="radio" id="radio13" name="q4" value="1" onclick="answer4();disableq4()" />
                                            <span>Morning</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio14" name="q4" value="2" onclick="answer4();disableq4()" />
                                            <span>Afternoon</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio15" name="q4" value="3" onclick="answer4();disableq4();" />
                                            <span>Evening</span></label>
                                    </li>

                                </ul>
                            </div>

                            <div id="q4-after" style="display:none">
                                <ul class="css3-radios">
                                    <li>
                                        A.&nbsp; Morning
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        B.&nbsp; Afternoon
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        C.&nbsp; Evening
                                    </li>
                                    <br/>
                                    <br/>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="A4" style="display:none">
                    <div id="output4"></div>
                    <div id="comments4" class="my_text"></div>
                    <center>
                        <input type="button" id="button1" value="Proceed" onclick="check();answer5();" />

                    </center>
                </div>

                <div id="q5">
                    <div class="formgroup">
                        <center>
                            <div id="image_output5" class="img_ben">
                                <img src="/wp-content/uploads/2017/05/2-1.gif" alt="Happy_Ben" />
                            </div>
                        </center>

                        <p>5.Which of these activities wastes the <b>MOST</b> water per day in the average home?</p>

                        <div style="text-align: left;margin-top:1%;margin-left: 30px;">

                            <div id="q5-before">
                                <ul class="css3-radios">
                                    <li>
                                        <label>
                                            <input type="radio" id="radio16" name="q5" value="1" onclick="answer5();disableq5()" />
                                            <span>Using a garbage disposal </span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio17" name="q5" value="2" onclick="answer5();disableq5()" />
                                            <span>Long  Showers</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio18" name="q5" value="3" onclick="answer5();disableq5()" />
                                            <span>A leaky toilet</span></label>
                                    </li>
                                </ul>
                            </div>

                            <div id="q5-after" style="display:none">
                                <ul class="css3-radios">
                                    <li>
                                        A.&nbsp; Using a garbage disposal
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        B.&nbsp; Long Showers
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        C.&nbsp; A Leaky Toilet
                                    </li>
                                    <br/>
                                    <br/>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="A5" style="display:none">
                    <div id="output5"></div>
                    <div id="comments5" class="my_text"></div>
                    <center>
                        <input id="button1" type="button" value="Proceed" onclick="check();answer6();" />

                    </center>
                </div>

                <div id="q6">
                    <div class="formgroup">
                        <center>
                            <div id="image_output6" class="img_ben">
                                <img src="/wp-content/uploads/2017/05/2-1.gif" alt="Happy_Ben" />
                            </div>
                        </center>

                        <p>6.On average, how large of a family uses 1000 litres a day?</p>

                        <div style="text-align: left;margin-top:1%;margin-left: 30px;">
                            <div id="q6-before">
                                <ul class="css3-radios">
                                    <li>
                                        <label>
                                            <input type="radio" id="radio19" name="q6" value="1" onclick="answer6();disableq6()" />
                                            <span>2 People</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio20" name="q6" value="2" onclick="answer6();disableq6()" />
                                            <span>3 People</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio21" name="q6" value="3" onclick="answer6();disableq6()" />
                                            <span>4 People</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio22" name="q6" value="4" onclick="answer6();disableq6()" />
                                            <span>5 People</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div id="q6-after" style="display:none">
                                <ul class="css3-radios">
                                    <li>
                                        A.&nbsp; 2 People
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        B.&nbsp; 3 People
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        C.&nbsp; 4 People
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        D.&nbsp; 5 People
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="A6" style="display:none">
                    <div id="output6"></div>
                    <div id="comments6" class="my_text"></div>
                    <center>
                        <input type="button" id="button1" value="Proceed" onclick="check();answer7();" />

                    </center>
                </div>

                <div id="q7">
                    <div class="formgroup">
                        <center>
                            <div id="image_output7" class="img_ben">
                                <img src="/wp-content/uploads/2017/05/2-1.gif" alt="Happy_Ben" />
                            </div>
                        </center>

                        <p>7.How much water could you save by washing your bike with a bucket and sponge rather than letting the hose run? </p>

                        <div style="text-align: left;margin-top:1%;margin-left: 30px;">
                            <div id="q7-before">
                                <ul class="css3-radios">
                                    <li>
                                        <label>
                                            <input type="radio" id="radio23" name="q7" value="1" onclick="answer7();disableq7()" />
                                            <span>3 Litres /Min</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio24" name="q7" value="2" onclick="answer7();disableq7()" />
                                            <span>9 Litres /Min</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio25" name="q7" value="3" onclick="answer7();disableq7()" />
                                            <span>12 Litres/Min</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio26" name="q7" value="4" onclick="answer7();disableq7()" />
                                            <span>15 Litres/Min</span></label>
                                    </li>
                                </ul>
                            </div>

                            <div id="q7-after" style="display:none">
                                <ul class="css3-radios">
                                    <li>
                                        A.&nbsp; 3 Litres/Min
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        B.&nbsp; 9 Litres/Min
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        C.&nbsp; 12 Litres/Min
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        D.&nbsp; 15 Litres/Min
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="A7" style="display:none">
                    <div id="output7"></div>
                    <div id="comments7" class="my_text"></div>
                    <center>
                        <input type="button" id="button1" value="Proceed" onclick="check();answer8();" />

                    </center>
                </div>

                <div id="q8">
                    <div class="formgroup">
                        <center>
                            <div id="image_output8" class="img_ben">
                                <img src="/wp-content/uploads/2017/05/2-1.gif" alt="Happy_Ben" />
                            </div>
                        </center>

                        <p>8. True or False: It isn't important to save water because there is so much of it on Earth.</p>

                        <div style="text-align: left;margin-top:1%;margin-left: 30px;">

                            <div id="q8-before">
                                <ul class="css3-radios">
                                    <li>
                                        <label>
                                            <input type="radio" id="radio27" name="q8" value="1" onclick="answer8();disableq8()" />
                                            <span>True</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio28" name="q8" value="2" onclick="answer8();disableq8()" />
                                            <span>False</span></label>
                                    </li>
                                </ul>
                            </div>

                            <div id="q8-after" style="display:none">
                                <ul class="css3-radios">
                                    <li>
                                        A.&nbsp; True
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        B.&nbsp; False
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="A8" style="display:none">
                    <div id="output8"></div>
                    <div id="comments8" class="my_text"></div>
                    <center>
                        <input type="button" id="button1" value="Proceed" onclick="check();answer9();" />
                    </center>
                </div>

                <div id="q9">
                    <div class="formgroup">
                        <center>
                            <div id="image_output9" class="img_ben">
                                <img src="/wp-content/uploads/2017/05/2-1.gif" alt="Happy_Ben" />
                            </div>
                        </center>

                        <p>9.Which of these everyday objects is a water-saving tool?</p>

                        <div style="text-align: left;margin-top:1%;margin-left: 30px;">
                            <div id="q9-before">
                                <ul class="css3-radios">
                                    <li>
                                        <label>
                                            <input type="radio" id="radio29" name="q9" value="1" onclick="answer9();disableq9()" />
                                            <span>A Bucket</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio30" name="q9" value="2" onclick="answer9();disableq9()" />
                                            <span>A Clock</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio31" name="q9" value="3" onclick="answer9();disableq9()" />
                                            <span>A Broom</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio32" name="q9" value="4" onclick="answer9();disableq9()" />
                                            <span>All of the above</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div id="q9-after" style="display:none">
                                <ul class="css3-radios">
                                    <li>
                                        A.&nbsp; A Bucket
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        B.&nbsp; A Clock
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        C.&nbsp; A Broom
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        D.&nbsp; All of the above
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="A9" style="display:none">
                    <div id="output9"></div>
                    <div id="comments9" class="my_text"></div>
                    <center>
                        <input type="button" id="button1" value="Proceed" onclick="check();answer10();" />

                    </center>
                </div>

                <div id="q10">
                    <div class="formgroup">
                        <center>
                            <div id="image_output10" class="img_ben">
                                <img src="/wp-content/uploads/2017/05/2-1.gif" alt="Happy_Ben" />
                            </div>
                        </center>

                        <p>10.Which of these ways to wash the car saves the most water? </p>

                        <div style="text-align: left;margin-top:1%;margin-left: 30px;">
                            <div id="q10-before">
                                <ul class="css3-radios">
                                    <li>
                                        <label>
                                            <input type="radio" id="radio33" name="q10" value="1" onclick="answer10();disableq10()" />
                                            <span>Wash it in the driveway with a hose </span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio34" name="q10" value="2" onclick="answer10();disableq10()" />
                                            <span>Drive it into the lake</span></label>
                                    </li>
                                    <br/>
                                    <li>
                                        <label>
                                            <input type="radio" id="radio35" name="q10" value="3" onclick="answer10();disableq10()" />
                                            <span>Take it through a car wash that recycles water </span></label>
                                    </li>
                                </ul>
                            </div>
                            <div id="q10-after" style="display:none">
                                <ul class="css3-radios">
                                    <li>
                                        A.&nbsp;Wash it in the driveway with a hose
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        B.&nbsp; Drive it into the lake
                                    </li>
                                    <br/>
                                    <br/>
                                    <li>
                                        C.&nbsp;Take it through a car wash that recycles water
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="A10" style="display:none">
                    <div id="output10"></div>
                    <div id="comments10" class="my_text"></div>
                    <center>
                        <input type="button" value="Submit" onclick="enter_user_details()" />
                    </center>
                </div>

                <div id="User_Details" class="formgroup">

                    <p> Well Done There !! Just one more step to Go!!
                        <br/>
                        <br/> Name *:
                        <input type="text" name="Name" id="Name" width="50%"></input>
                        <br/> Suburb/City :
                        <input type="text" name="suburb" id="subrub" width="50%">
                        <br/>

                        <input type="Submit" value="Done" id="btn_submit" onclick="validate()" />
                        <div id="status_text"></div>

                </div>

                <div id="result">
                    <div class="container" id="highscore" style="font-weight:normal;font-family:Arial;color:black">

                        <center>
                            <div id="button1">
                                <a href="javascript:void(0);" onclick="openFbPopUp();">
                                    <img src="/wp-content/uploads/2017/05/download.png" class="img_face"></img>
                                </a>
                            </div>
                            &nbsp; &nbsp;
                            <a href="http://twitter.com/share?&text=Some%20good%20quiz%20here" class="twitter-share-button" data-size="large" data-hashtags="SaveWater" data-show-count="false">Tweet</a>
                            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            <br/>
                            <br/>

                            <img src="/wp-content/uploads/2017/05/Certificate_Template.jpg" alt="certificate" style="width:400px;height:400px" />
                        </center>
                        <div class="center" id="certificate"></div>
                        <br/>
                        <center>
                            <a href="http://watertarget.azurewebsites.net/">
                                <input type="button" value="Home" id="button1" />
                            </a>
                        </center>

                    </div>

                </div>

                <div id="Low_Score" style="display:none">

                    <center>
                        <div id="button1">
                            <a href="javascript:void(0);" onclick="openFbPopUp();">
                                <img src="/wp-content/uploads/2017/05/download.png" class="img_face"></img>
                            </a>
                        </div>
                        &nbsp; &nbsp;
                        <a href="http://twitter.com/share?&text=Some%20good%20quiz%20here" class="twitter-share-button" data-size="large" data-hashtags="SaveWater" data-show-count="false">Tweet</a>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <br/>
                        <br/>

                        <img src="/wp-content/uploads/2017/05/depress.gif" style="float:left;width:300px" alt="depressed_ben"></img>
                        <br/>
                        <div id="suggestion" style="color:black;float:left;"></div>
                        <br/>
                    </center>

                </div>

            </form>
        </div>
        <footer class="footer-distributed">

            <div class="footer-left">

                <img src="/wp-content/uploads/2017/05/logo.png" alt="logo" style="width:100px;"></img>

                <p class="footer-links">
                    <a href="http://watertarget.azurewebsites.net/">Home</a> ·
                    <a href="http://watertarget.azurewebsites.net/about-us/">About</a> ·
                    <a href="http://watertarget.azurewebsites.net/wp-content/themes/shapely/page-templates/contact.php">Contact</a>
                </p>

                <p class="footer-company-name">Water Target &copy; 2017</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>900 Dandenong Rd, </span> Caulfield East VIC 3145</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>(03) 9903 2000</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:contact.watertarget@yahoo.com">contact.watertarget@yahoo.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the company</span> We are the Blue Can Do's with a "Together We Can Do attitude"
                </p>
        </footer>

    </body>

    </html>