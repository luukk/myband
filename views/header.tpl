<body>
<div class="jumbotron">
  <nav class="navbar">
      <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li {if $currpage eq home} class="selected"{/if}><a href="?action=home">home</a></li>
            <li {if $currpage eq tour} class="selected"{/if}><a href="?action=tour">tour</a></li>
            <li {if $currpage eq bio} class="selected"{/if}><a href="?action=bio">bio</a></li>
            <li {if $currpage eq contact} class="selected"{/if}><a href="?action=contact">contact</a></li>
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
</div>
</body>
