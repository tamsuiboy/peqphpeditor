  <table class="edit_form">
    <tr>
      <td class="edit_form_header">Change NPC Levels</td>
    </tr>
    <tr>
      <td class="edit_form_content">
        <form name="npc_level" method="post" action="index.php?editor=npc&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&action=46">
          <table width="100%">
            <tr>
              <th>Version:</th>
              <th>Level Diff:</th>
            </tr>
            <tr>
              <td><input type="text" size="7" name="npc_version" value="0"></td>
              <td><input type="text" size="7" name="npc_level" value="0"></td>
            </tr>
          </table><br>
          <center>
            <input type="submit" value="Submit">&nbsp;&nbsp;
            <input type="button" value="Cancel" onClick="history.back();"><br><br>
          </center>
        </form>
      </td>
    </tr>
  </table>
