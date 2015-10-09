
<div class="container" id="contact">
  {foreach from=$data  item=info}
    <h1>{$info.title}</h1>
    <content>{$info.text}<img src="{$info.picture}" id="image"></content>

    <div id="media"><iframe width="420" height="315"
    src="{$info.media}" frameborder="0" allowfullscreen>
    </iframe></div>
  {/foreach}
</div>
