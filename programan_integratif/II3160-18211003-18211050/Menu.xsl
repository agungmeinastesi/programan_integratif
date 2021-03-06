<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="Menu">
  <html>
  <body>
  <h2>Menu Nasi</h2>
    <table border="1">
      <tr bgcolor="#9acd32">
        <th>Kode</th>
        <th>Nama</th>
      </tr>
      <xsl:for-each select="Nasi">
      <tr>
        <td><xsl:value-of select="kode"/></td>
        <td><xsl:value-of select="nama"/></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>
