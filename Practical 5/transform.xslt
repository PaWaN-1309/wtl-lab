<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" indent="yes" />
    
    <xsl:template match="/">
        <html>
            <head>
                <title>Cars Data</title>
            </head>
            <body>
                <h1>Cars Information</h1>
                <table border="1">
                    <tr>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Color</th>
                        <th>Price</th>
                    </tr>
                    <xsl:for-each select="Cars/Car">
                        <tr>
                            <td><xsl:value-of select="Make" /></td>
                            <td><xsl:value-of select="Model" /></td>
                            <td><xsl:value-of select="Year" /></td>
                            <td><xsl:value-of select="Color" /></td>
                            <td><xsl:value-of select="Price" /></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="Cars">
        <xsl:output method="text" />
        <xsl:for-each select="Car">
            Make: <xsl:value-of select="Make" />, 
            Model: <xsl:value-of select="Model" />, 
            Year: <xsl:value-of select="Year" />, 
            Color: <xsl:value-of select="Color" />, 
            Price: <xsl:value-of select="Price" />
            <xsl:text>&#10;</xsl:text>
        </xsl:for-each>
    </xsl:template>

    <xsl:template match="Cars">
        <xsl:output method="xml" indent="yes" />
        <ExportedCars>
            <xsl:for-each select="Car">
                <Vehicle>
                    <Brand><xsl:value-of select="Make" /></Brand>
                    <Type><xsl:value-of select="Model" /></Type>
                    <ManufactureYear><xsl:value-of select="Year" /></ManufactureYear>
                    <Shade><xsl:value-of select="Color" /></Shade>
                    <Cost><xsl:value-of select="Price" /></Cost>
                </Vehicle>
            </xsl:for-each>
        </ExportedCars>
    </xsl:template>
</xsl:stylesheet>