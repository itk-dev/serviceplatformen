<?xml version="1.0" encoding="utf-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:fjernprint="urn:oio:fjernprint:1.0.0"
                version="1.0">
    <xsl:output method="xml"/>

    <!-- Use "fjernprint" as prefix for the "urn:oio:fjernprint:1.0.0" namespace. -->
    <xsl:template match="fjernprint:*">
        <xsl:element name="fjernprint:{local-name()}">
            <xsl:apply-templates select="@*|node()"/>
        </xsl:element>
    </xsl:template>

    <xsl:template match="@fjernprint:*">
        <xsl:attribute name="fjernprint:{local-name()}" namespace="urn:oio:fjernprint:1.0.0">
            <xsl:value-of select="."/>
        </xsl:attribute>
    </xsl:template>

    <xsl:template match="@*|node()">
        <xsl:copy copy-namespaces="no">
            <xsl:apply-templates select="@*|node()"/>
        </xsl:copy>
    </xsl:template>
</xsl:stylesheet>
