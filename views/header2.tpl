<div id="tourBody">
<nav class="navbar">
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="?action=home">home</a></li>
          <li class="selected"><a href="?action=tour">tour</a></li>
          <li><a href="?action=bio">bio</a></li>
          <li><a href="?action=contact">contact</a></li>
        </ul>
        <ul>
            <form class="navbar-form" method="get">
              <div class="form-group">
                <input type="hidden" name="action" value="search" />
                <input type="text" name="query" id="search" placeholder="search" onkeyup="showHint(this.value)" autocomplete="off">
                <span class=" glyphicon glyphicon-search"></span>
                <div id="output"></div>
              </div>

            </form>
        </ul>
          </div>
</nav>
