# ip-detector

Using WebRTC vulnerability to detect the real IP of users of web resources

index.html mimics a web resource when accessed, will try to retreive the real IP address of user using WebRTC and save it into a txt file.

Using code snippet from https://github.com/VoidSec/WebRTC-Leak/blob/master/exploit.js, index.html is developed including other functionalies as explained below.

receive.php is at the server side that will receive the IP address obtained from user and save it using the current timestamp as the filename.

noscript.html is displayed if NoScript is enabled as WebRTC requires Javascript to work.

If WebRTC is disabled like in Firefox browser through about:config then "WebRTC Disabled" will be logged at the backend server.

More information on the IP obtained is done through API call to https://ipapi.co/json/ and is also logged down.

Other information logged includes the user agent, language and date done through the available Javascript API calls.
