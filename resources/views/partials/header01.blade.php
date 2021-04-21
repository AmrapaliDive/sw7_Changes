<style>
   	a {
	  color: #40AD00;
	}
	
	.padded {
	  padding-left: 50px;
	  padding-right: 50px;
	}
	
	#sidebar a {
	  color: #BFBFBF;
	}
	
	#sidebar a:hover {
	  color: #40AD00;
	  text-decoration: none;
	}
	
	#sidebar hr {
	  border-color: #444;
	}
	
	html {
	  overflow: hidden;
	  overflow-y: auto;
	}
	
	html,
	body {
	  height: 100%;
	  min-height: 100%;
	  padding: 0;
	  margin: 0;
	}
	
	body {
	  /* overflow: hidden; */
	  position: relative;
	  height: auto;
	}
	
	.dashboard-btn {
	  float: left;
	  margin-right: 20px;
	  padding: 8px 0;
	  margin: 11px 15px 0 0;
	  background-color: transparent;
	}
	
	.dashboard-btn span {
	  margin-bottom: 3px;
	  display: block;
	  width: 21px;
	  height: 2px;
	  border-radius: 0px;
	  background-color: #7B7777;
	}
	/* dashboard sidebar */
	
	#sidebar {
	  box-sizing: border-box;
	  border-right: 1px solid #333;
	  background-color: #383838;
	  width: 225px;
	  height: 100%;
	  position: fixed;
	  top: 0px;
	  left: -225px;
	  bottom: 0;
	  z-index: 1;
	  -moz-box-shadow: 1px 0 1px rgba(0, 0, 0, 0.07);
	  -webkit-box-shadow: 1px 0 1px rgba(0, 0, 0, 0.07);
	  box-shadow: 1px 0 1px rgba(0, 0, 0, 0.07);
	  -moz-transition: -moz-transform 0.3s ease-in-out 0s;
	  -o-transition: -o-transform 0.3s ease-in-out 0s;
	  -webkit-transition: -webkit-transform 0.3s ease-in-out;
	  -webkit-transition-delay: 0s;
	  transition: transform 0.3s ease-in-out 0s;
	  -moz-backface-visibility: hidden;
	  -webkit-backface-visibility: hidden;
	  backface-visibility: hidden;
	}
	
	.sidebar-visible {
	  -ms-transform: translate(225px, 0);
	  -webkit-transform: translate(225px, 0);
	  transform: translate(225px, 0);
	}
	
	.sidebar-hidden {
	  -ms-transform: translate(0, 0);
	  -webkit-transform: translate(0, 0);
	  transform: translate(0, 0);
	}
	
	#sidebar .sidebar-body {
	  padding-left: 35px;
	  padding-right: 15px;
	  padding-top: 12px;
	  position: absolute;
	  overflow: auto;
	  overflow-x: hidden;
	  bottom: 0;
	  right: 0;
	  left: 0;
	  top: 0;
	}
	
	#sidebar .sidebar-body a {
	  font-size: 1em;
	  display: inline-block;
	  padding: 2px 0;
	}
	
	#sidebar .sidebar-body h5 {
	  font-size: 12px;
	  text-transform: uppercase;
	  display: inline-block;
	  color: #777;
	}
	
	#sidebar .sidebar-close-btn {
	  color: #B9B9B9;
	  background: transparent;
	  padding: 2px 12px;
	  border: 0;
	  font-size: 19px;
	  font-weight: 300;
	  float: right;
	}
	
	#sidebar .sidebar-close-btn:hover {
	  background-color: #585858;
	  color: #40AD00;
	}
</style>


<nav class="navbar navbar-default padded">
    <div class="container-fluid">
      <div class="row">
        <div class="navbar-header">
          <button class="btn dashboard-btn">
                <span></span>
                <span></span>
                <span></span>
              </button>
          <a class="navbar-brand" href="home.html">
            <span class="brand-color">Brand</span>
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="">Settings</a></li>
          <li><a href="">Sign Out</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div id="sidebar" class="sidebar-hidden">
    <ul class="list-unstyled sidebar-body">
      <li>
        <h5>Menu</h5><button class="btn sidebar-close-btn">X</button></li>
      <li><a href="">Link One</a></li>
      <li><a href="">Link Two</a></li>
      <li><a href="">Link Three</a></li>
      <li><a href="">Link Four</a></li>
      <hr>
      <li>
        <h5>Account</h5></li>
      <li><a href="">Account Settings</a></li>
      <li><a href="">Sign Out</a></li>
      <hr>
      <li>
        <h5>Resources</h5></li>
      <li><a href="">Docs</a></li>
      <li><a href="">Blog</a></li>
      <li><a href="">Contact Us</a></li>
    </ul>
  </div>

  <script>
          $('.dashboard-btn, .sidebar-close-btn').on('click', function() {
      $('#sidebar').toggleClass('sidebar-hidden');
      $('#sidebar').toggleClass('sidebar-visible');
    });
</script>