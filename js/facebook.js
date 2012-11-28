window.fbAsyncInit = function() {
  FB.init({ appId: '201312886547808', 
	    status: true, 
	    cookie: true,
	    xfbml: true,
	    oauth: true});

  function updateButton(response) {
    var button = document.getElementById('fb-auth');
		
    if (response.authResponse) {
      //user is already logged in and connected
 var accessToken = response.authResponse.accessToken;
      
      var userInfo = document.getElementById('user-info');
      FB.api('/me', function(response) {
        userInfo.innerHTML = '<img src="https://graph.facebook.com/'
 + response.id + '/picture">' + response.name;

      });
      
      var userName = document.getElementById('user-name');
      
      FB.api('/me', function(respond) {
        userName.innerHTML = respond.name + '! ' + '<img src="https://graph.facebook.com/' + respond.id + '/picture" width="20">';
      });
      
      var user = document.getElementById('user');
      FB.api('/me/home?access_token=' + accessToken, function(respon) {
        //user.innerHTML = respon.education[0].school.name +  respon.education[1].school.name;
          user.innerHTML = respon.data[0].id;
      });
      
    } else {
      //user is not connected to your app or logged out
      button.innerHTML = 'Login';
      button.onclick = function() {
        FB.login(function(response) {
	  if (response.authResponse) {
            FB.api('/me', function(response) {
	      var userInfo = document.getElementById('user-info');
	      userInfo.innerHTML = 
                '<img src="https://graph.facebook.com/' 
	        + response.id + '/picture" style="margin-right:5px"/>' 
	        + response.name;
	    });	   
          } else {
            //user cancelled login or did not grant authorization
          }
        }, {scope:'email'});  	
      }
    }
  }

  // run once with current status and whenever the status changes
  FB.getLoginStatus(updateButton);
  FB.Event.subscribe('auth.statusChange', updateButton);	
};
	
(function() {
  var e = document.createElement('script'); e.async = true;
  e.src = document.location.protocol 
    + '//connect.facebook.net/en_US/all.js';
  document.getElementById('fb-root').appendChild(e);
}());