<% if Children %>
  <% loop Children %>
    <a href="{$Link}">
      <h2>{$MenuTitle}</h2>
      <p>{$Summary}</p>
    </a>
  <% end_loop %>
<% else %>
  <p>There are currently no posts</p>
<% end_if %>