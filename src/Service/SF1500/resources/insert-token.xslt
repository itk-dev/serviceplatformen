<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:assertion="urn:oasis:names:tc:SAML:2.0:assertion">
  <xsl:param name="token-path"/>

  <xsl:template match="assertion:insert-token-here">
    <xsl:if test="$token-path">
      <xsl:copy-of select="document($token-path)"/>
    </xsl:if>
  </xsl:template>

  <xsl:template match="@*|node()">
    <xsl:copy>
      <xsl:apply-templates select="@*|node()"/>
    </xsl:copy>
  </xsl:template>
</xsl:stylesheet>
