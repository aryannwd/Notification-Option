<!DOCTYPE html>
<html>
<head>
  <title>Notification</title>
</head>
<body>
 
  <!-- Click to get the notifications-->
  <button onclick="notifyMe()">Send Notifications</button>

</body>

<script>
  
  // requesting permission on page load
document.addEventListener('DOMContentLoaded', function () {
  if (!Notification) {
    alert('This is not working in your browser, Try using other browser'); 
    return;
  }
// asking for permission
  if (Notification.permission !== "granted")
    Notification.requestPermission();
});

function notifyMe() {
  if (Notification.permission !== "granted")
    Notification.requestPermission();
  else {
    var notification = new Notification('Shop This Product', {
      icon: 'https://lh3.googleusercontent.com/bwzk1jgODRPnYmtfIQvCmkANHKPPETp_FPHGhg6zaYtjR1CKBlcrIcZwZphaNoS_6_dtMLzqVu4jLCXkWeL9fYpaqxRIBEufDA3nmgN9C7S6f11Bea2vT-SH5iD8VfSoc8zwThfjyWvofVVguNMW1jnIB3DgOjSkouxHPoHZTkYxWGdubO8m5kgpb3oKFHusqS3gEtOq1jIMx3PQwhNL2zEXtg_XWDP1gETlp6n6xrJprRgEHESr-PfNSw4xv0dTI0Legvk7DgyI8y29LhX09AT2-FV7sDQ2gVdKTNK6qFJo1G2Jz-5wQnBPExouUXsNWf2ZtdBAV7kSEoheKqu-FTIlmS5Py7jd2ArlOJobpWlUDA2tC9Uqujr1PN8Sv9YuB4Lc3S8_4unHnrYvYie41eg9a1-cw5Q4AyN59uNiiEwmlFdhEQCyJZA0WfcqnGoeCxLpcbKUBLJy6eVC88siu4XYtcauoW8d-6Rx1O5BWDO1O4KXP_-_Q2dpxiigckukcUXIUvpszyfIz9wXpd8kBa9F4j4_W1ZaCEcS9BR_5FCGd9HdbdH1QGUQdXEjPwBoRlglGBXvitunH47bt5O0WtW2XWqeLOROUjysu5dRUs4=w299-h306-no',
      body: "Hey there! You've been notified for this product offer. You can buy it now to get more discount.",
      dir: 'auto',
    });
    notification.onclick = function(event) {
  event.preventDefault(); // prevent the browser from focusing the Notification's tab
  window.open('https://mynearshop.com');
}


  }

}
</script>
</html>
