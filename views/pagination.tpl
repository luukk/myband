<ul class="pagination">
{if $pagenum != 1}
  <li><a href=?action=home&pagenum={$pagenum -1}>vorige</a></li>
{/if}
{for $i=1 to $to}
  <li {if $number eq $i} class="active"{/if}><a href=?action=home&pagenum={$i}>{$i}</a></li>
{/for}
{if $pagenum <$to}
  <li><a href=?action=home&pagenum={$pagenum +1}>volgende</a></li>
{/if}
</ul>
