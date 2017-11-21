<!DOCTYPE html>
<html>
<head>
  <title>Notification</title>
  

</head>
<body>

<a href="#"  id="notificationButton" class="button"><button>Notification</button></a>

<script type="text/javascript">

  var products = [
["Neem Oil 500 ml.","https://mynearshop.com/index.php?path=product/store"],
["Vermicompost 10 kg.","https://mynearshop.com/index.php?path=product/store"],
["Garden Shovel","https://mynearshop.com/index.php?path=product/store"],
["Facebook Page","https://www.facebook.com/MyNearShop/"],
["Beetroot","https://mynearshop.com/index.php?path=product/category&category=56_61"],
["My Dream Garden Potting Mix – 35 Kg.","https://mynearshop.com/index.php?path=product/category&category=54_57"],
["Garden hand Spray 1ltr","https://mynearshop.com/index.php?path=product/category&category=55_58"],
["Amaranthus.","https://mynearshop.com/index.php?path=product/category&category=56_60"],
["Garden Cotton Glove.","https://mynearshop.com/index.php?path=product/category&category=55_59"],
["Sign Up and get Discount.","https://mynearshop.com/index.php?path=account/login"]
];


setTimeout(function(){ 
var x = Math.floor((Math.random() * 10) + 1);
var title=products[x][0];
var desc='Most popular Product.';
var url=products[x][1];
notifyBrowser(title,desc,url);
}, 20000);
  
  // requesting permission on page load
document.addEventListener('DOMContentLoaded', function () 
{
    
if (Notification.permission !== "granted")
{
Notification.requestPermission();
}

document.querySelector("#notificationButton").addEventListener("click", function(e)
{
var x = Math.floor((Math.random() * 10) + 1);
var title=products[x][0];
var desc='Most popular Products.';
var url=products[x][1];
notifyMe(title,desc,url);
e.preventDefault();
});

});

function notifyMe(title,desc,url) 
{
if (!Notification) {
console.log('Desktop notifications not available in your browser..'); 
return;
}
if (Notification.permission !== "granted")
{
Notification.requestPermission();
}
else {
var notification = new Notification(title, {
icon: 'https://lh3.googleusercontent.com/bwzk1jgODRPnYmtfIQvCmkANHKPPETp_FPHGhg6zaYtjR1CKBlcrIcZwZphaNoS_6_dtMLzqVu4jLCXkWeL9fYpaqxRIBEufDA3nmgN9C7S6f11Bea2vT-SH5iD8VfSoc8zwThfjyWvofVVguNMW1jnIB3DgOjSkouxHPoHZTkYxWGdubO8m5kgpb3oKFHusqS3gEtOq1jIMx3PQwhNL2zEXtg_XWDP1gETlp6n6xrJprRgEHESr-PfNSw4xv0dTI0Legvk7DgyI8y29LhX09AT2-FV7sDQ2gVdKTNK6qFJo1G2Jz-5wQnBPExouUXsNWf2ZtdBAV7kSEoheKqu-FTIlmS5Py7jd2ArlOJobpWlUDA2tC9Uqujr1PN8Sv9YuB4Lc3S8_4unHnrYvYie41eg9a1-cw5Q4AyN59uNiiEwmlFdhEQCyJZA0WfcqnGoeCxLpcbKUBLJy6eVC88siu4XYtcauoW8d-6Rx1O5BWDO1O4KXP_-_Q2dpxiigckukcUXIUvpszyfIz9wXpd8kBa9F4j4_W1ZaCEcS9BR_5FCGd9HdbdH1QGUQdXEjPwBoRlglGBXvitunH47bt5O0WtW2XWqeLOROUjysu5dRUs4=w299-h306-no',
body: desc,
});
    notification.onclick = function() {
  
  window.open(url);
};
notification.onclose = function () {
console.log('Notification closed');
};
  }
}
</script>
</body>
</html>