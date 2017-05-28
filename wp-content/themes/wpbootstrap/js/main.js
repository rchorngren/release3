var portfolioPostsBtn = document.getElementById("portfolio-posts");
var portfolioPostsContainer = document.getElementById("portfolio-posts-container");

if (portfolioPostsBtn) {
  portfolioPostsBtn.addEventListener("click", function() {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', '/wp-json/wp/v2/posts?categories=3');
    ourRequest.onload = function() {
      if (ourRequest.status >= 200 && ourRequest.status < 400) {
        var data = JSON.parse(ourRequest.responseText);
        createHTML(data);
        portfolioPostsBtn.remove();
      } else {
        console.log("Något gick väldigt, väldigt fel D:");
      }
    };

    ourRequest.onerror = function() {
      console.log("Gick inte att ansluta ;_;");
    };

    ourRequest.send();
  });
}

function createHTML(postsData) {
  var ourHTMLString = '';
  for (i = 0; i < postsData.length; i++) {
    ourHTMLString += '<h2>' + postsData[i].title.rendered + '</h2>';
    ourHTMLString += postsData[i].content.rendered;
  }
  portfolioPostsContainer.innerHTML = ourHTMLString;
}