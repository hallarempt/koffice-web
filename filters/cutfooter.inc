<?php  if (isset($contactemail)) {
       
      } else {
        $contactemail='koffice@kde.org';
      }
?>
<?php  if (isset($contactname)) {
       
      } else {
        $contactname='the KOffice web team';
      }
?>
      <br />
      <hr noshade="noshade" size="1" />
      <p><font size="-1">Maintained by <a href="mailto:<?php echo $contactemail; ?>"><?php echo $contactname; ?></a>. <?php echo "Last modified ".date( "F d Y H:i:s.", getlastmod() ); ?></font></p>

</td></tr>
</table>
<!--<p class="trademark">KDE and K Desktop Environment are trademarks of
KDE e.v.</p>-->
</body>


