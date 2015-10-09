  <div class="container">
    {foreach from=$tour item=getTour}
    <div class="row tourRow">
      <h1 class="tourDate">{$getTour.dat}</h1>
      <div class="line"></div>
      <div class="info">
        <div class="location">
          {$getTour.location}
          <div class="horizontal-line">|</div>
        </div>
        <div class="venue">{$getTour.venue}</div>
      </div>

  </div>
    {/foreach}
  </div>
</div>
