<!DOCTYPE html>
<html>
<head>
  <title>Notification</title>
  

</head>
<body>

<a href="#"  id="notificationButton" class="button"><button>Notification</button></a>

<script type="text/javascript">
// Using array for multiple notications for different different products
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
icon: 'https://lh3.googleusercontent.com/E2Vs50vHekZ8r5n8WLWTy5i3f_V4jbn2NvZbXkxHT9aeuVCPa1KiDKygwB-uYAi6q-fGSt1xC4VUBMy-aiDiN7IgVKeQm729veDY6e1Q8vWrIKTM_0Z_yGZI_opDqT2xBLf_61UGhvaLROD9e-3j2R4vd3aXTU_xttB0NdHF1QOAoPponk5-RmmCnPFxRbndQWhBiiYw3D_pomsmV-OkwCZTNEUP84goW-gKestxmIaW3yLGUA_EtY8ltpoP-Vfz1jM8I3URf56riSefdgwK4_nHGX0LL6_aWOdS3N2w8Ai0-KxI_X0JH-5AiklW-7B1RF-oQ0S5hO43BVIxm9aZ5PXrJc3XEyePEOkXTTeVgyY90jTpsM5C5dIzaRqyAV43nHgJFWPc0XS6NSTND1Rl3VYrDXKnY1lfqvt-tIHQ2bRx9dnxL2ouOIISLeBbF41rG0IaQ6mKh6dCrL7qLQEPqkSmTFSWs4vM26cMUxq4nRqLhLTA2u9LWD5qER20B0G1LxPG_7dhHnWvLV0Aso7ESTTYARqTpxrc-dZJuaLDguaBWNgd4JOM9tgFDjqtqJqpOb4kkfopucTm9BAaZzGQ3PTltVCMGZuU7WKt4RwQRw8=w100-h102-no',
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