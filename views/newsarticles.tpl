<div class="container">

{foreach from=$data item=newsItems}
{if $newsItems@index <1}
<div class="row">
  <div class="col-md-9">
    <article>
      <h1>{$newsItems.title}</h1>
      <div class="date_created">
        <span class="glyphicon glyphicon-time"></span>
        {$newsItems.date_created}
      </div>
      <content>{$newsItems.content}</content>
      <img src="{$newsItems.image}">
  </article>
  <div class="row">
  <div class="col-md-12">
  {/if}
  {if $newsItems@index >0 And $newsItems@index <4}
        <div class="col-md-4">
          <article>
            <h4>{$newsItems.title}</h4>
            <div class="date_created">
              <span class="glyphicon glyphicon-time"></span>
              {$newsItems.date_created}
            </div>
            <content>{$newsItems.content}</content>
            <img src="{$newsItems.image}" ALIGN="Top">
          </article>
        </div>
        {/if}
{if $newsItems@index ==3}
</div>
</div>
</div>
<div class="col-md-3">
  <a class="twitter-timeline" href="https://twitter.com/Slash" data-widget-id="651109152278872065">Tweets door @Slash</a>
</div>
</div>
{/if}
{if $newsItems@index ==4}
  <div class="row">
{/if}
{if $newsItems@index >3 And $newsItems@index <9}
<div class="col-md-3">
  <article>
    <h4>{$newsItems.title}</h4>
    <div class="date_created">
      <span class="glyphicon glyphicon-time"></span>
      {$newsItems.date_created}
    </div>
    <content>{$newsItems.content}</content>
    <img src="{$newsItems.image}">
</article>
</div>
{/if}
{if $newsItems@index ==8}
</div>
{/if}
{/foreach}

</div>
{include file='pagination.tpl'}
</div>
