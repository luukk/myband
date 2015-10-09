<div class="container">
{foreach from=$hoi item=foo}
  <div id="item">
    <h4>
      {$foo.title}
    </h4>
        <content>{$foo.content}</content>
        <img src="{$foo.image}">
  </div>

{/foreach}
</div>
