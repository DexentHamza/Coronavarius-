<style>

    .row{
        margin-left: 0 !important;
        margin-right: 0 !important;
    }
 h3{
        text-transform: uppercase;
        letter-spacing: 1pt;
        font-size: 20pt;
        text-align: center;
        margin-top: 10px;
        display: none;
        font-weight: bold;
        color: deepskyblue;
    }

/* #hide{
    text-align: center;
    text-align: left;
    display: none;
    text-transform: lowercase;
    font-size: 10pt;
    font-weight: 900;
    width: 50%;
    display: none;
} */



#table{
    display: table;
    width: 100%;
    height: 100%;
}

#centeralign{
    display: table-cell;
    vertical-align: middle;
}

html{
    scroll-behavior: smooth;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Muli', sans-serif;
}
.style {
    background-color: #5F9EA0!important;
    
}

.style a{
    color: white;
}

.collapse ul li a{
    color: white;
    font-weight: 500;
}

.collapse ul li a:hover{
    color: rgb(114, 45, 45);
    background-color: rgb(82, 82, 82);
    border-radius: 5px;
}

/* -------------------- main-header ---------------------- */
.main-header{
    width: 100%;
    height: 400px;
}

.Section_footer{
    background-color: #F0F8FF;
}

.rightside h1{
    font-size: 2.8rem;
}

.corona img{
    animation: Go 3s linear infinite;
}

@keyframes Go{
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}
}

.leftside img{
    animation: StayHome 3s linear infinite;
}

@keyframes StayHome{
    0% {
        transform: scale(.75);
    }

    20% {
        transform: scale(1);
    }

    40% {
        transform: scale(.75);
    }

    60% {
        transform: scale(1);
    }

    80% {
        transform: scale(.75);
    }

    100% {
        transform: scale(.75);
    }
}

.corona_update{
    margin: 0 0 30px 0;
}

.corona_update h3{
    color: #FF7F50;
}

.corona_update h1{
    font-size: 2rem;
    text-align: center;
}

#videoPlay{
    position: fixed;
    z-index: -1;
    opacity: 0.2;
}

@media (min-aspect-ratio: 16/9) {
    #videoPlay {
        width: 100%;
        height: auto;
    }
}

@media (max-aspect-ratio: 16/9) {
    #videoPlay {
        width: auto;
        height: 100%;
    }
}

.sub_section{
    background-color: #F8F8FF;
}

.subs_section{
    background-color: #FFFFF0;
}

.pre_aga{
    background-color: #FFF0F5;
}

.footer_style{
    background-color: #5F9EA0!important;
}

.footer_style p{
    margin-bottom: 0!important;
}

/* --------------- border -------------- */
.section_header{
    border: 2px solid #37233c;
}

/* ---------------------- Svg Content Style -------------------- */
.page-content {
    position: relative;
    background: #fafafa;
     width: 100%;
  padding:15px 0px;
}

svg
{
  padding:10px;
  background-color:white;
      box-shadow: 0 0 25px rgba(40,47,60,.05), 0 20px 25px rgba(40,47,60,.05), 0 3px 4px rgba(40,47,60,.05);
  border-radius:5px;
}

.container{width:100%; }

#l5
{
    cursor: pointer;
    animation: swing ease-in-out 1.5s infinite alternate;
    transform-origin: bottom;
    transform-box: fill-box;
}

#leaf2
{
  cursor: pointer;
    animation: swing ease-in-out 1.7s infinite alternate;
    transform-origin: bottom;
    transform-box: fill-box;
}

#l3
{
  cursor: pointer;
    animation: swingreverse ease-in-out 1.7s infinite alternate;
    transform-origin: bottom;
    transform-box: fill-box;
}

#l4
{
  cursor: pointer;
    animation: swingreverse ease-in-out 1.6s infinite alternate;
    transform-origin: bottom;
    transform-box: fill-box;
}

#leaf1
{
  cursor: pointer;
    animation: swingreverse ease-in-out 1.9s infinite alternate;
    transform-origin: bottom;
    transform-box: fill-box;
}

#l1
{
  cursor: pointer;
    animation: swingreverse ease-in-out 1.5s infinite alternate;
    transform-origin: bottom;
    transform-box: fill-box;
}

#facemain
{
    cursor: pointer;
    animation: girlface ease-in-out 1.8s infinite alternate;
    transform-origin: bottom;
    transform-box: fill-box;
}


#book
{
  cursor: pointer;
    animation: book ease-in-out 2.5s infinite alternate;
    transform-origin: bottom;
    transform-box: fill-box;
}


#dogt
{
  cursor: pointer;
    animation: swingreverse ease-in-out 0.9s infinite alternate;
    transform-origin: bottom;
    transform-box: fill-box;
}

#oldhand
{
    cursor: pointer;
    animation: oldhand ease-in-out 1.5s infinite alternate;
    transform-origin: 34px bottom;
    transform-box: fill-box;
}

#oldface12
{
  cursor: pointer;
    animation: oldhand ease-in-out 1.3s infinite alternate;
    transform-origin: bottom;
    transform-box: fill-box;
}


@keyframes girlface
{
  0% {transform: rotate(2deg);}
  100% { transform: rotate(-3deg); }
}

@keyframes oldhand {
    0% { transform: rotate(5deg); }
    100% { transform: rotate(-5deg); }
}

@keyframes swing {
    0% { transform: rotate(5deg); }
    100% { transform: rotate(-5deg); }
}


@keyframes swingreverse {
    0% { transform: rotate(-6deg); }
    100% { transform: rotate(6deg); }
}


@keyframes book {
    0% { transform: rotate(-4deg); }
    100% { transform: rotate(4deg); }
}


svg #Home {
  stroke:#37233c;
  stroke-width:1px;
  fill:#fd1b0b;
}


#Vector_62, #Vector_61, #Vector_60, #Vector_59, #Vector_63, #Vector_64{
  transform-box:fill-box;
  transform-origin:center;
}

/* ---------------------- Scroll Top -------------------- */

#myBtn{
    position: fixed;
    display: none;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #5F9EA0;
    color: white;
    cursor: pointer;
    border-radius: 10px;
    padding: 10px;
}

#myBtn:hover{
    background: darkgrey;
}

.gradient-text.blue {
    background-image: linear-gradient(35deg, #17EAD9 0%, #6078EA 100%);
    text-transform: uppercase;
}

.normal {
    font-weight: bold !important;
}

.gradient-text {
    /* font-weight: bold; */
    display: inline-block;
    /* background-image: linear-gradient(135deg, #846FF4 0%, #F17674 100%); */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    /* background-clip: text;
    text-fill-color: transparent; */
}

/* ******************************* Collapse Button css ************************** */

.accordion>.card-header {
    border-radius: 75;
    border-radius: 44px;
    margin-bottom: -1px;
}

.card-header,gradient-text.blue {

    background-image: linear-gradient(35deg, #3CB371 0%, #6078EA 100%);
    text-transform: uppercase;
}

.card-header,normal {
    font-weight: bold !important;
}

.accordion>(:last-of-type) {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.card-header{
    padding: 5px;
    margin: 10px;
}

.btn{
    color: white;
    font-weight: bold;
}

.btn:hover{
    color: white;
}

dd {
    display: block;
    margin-inline-start: 40px;
}

dd, p{
    margin-left: 15px;
}

dd ul li{
    margin-left:10px;
}

/* ************************ Frequently ************************** */
.text-center{
    font-weight: bold;
}

/* ***************************** Responsive ************************* */

@media(max-width:780px){
    .main-header{height: 700px; text-align: center; }

    .main-header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 40px;
        
    }

    .count_style{
        display: inline !important;
    }

    .count_style p{
        text-align: center;
        font-weight: bold;
    }
}
</style>