<?xml version="1.0"?>
<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema">

<xs:element name="YAZARLAR">
  <xs:complexType>
    <xs:sequence>
      <xs:element name="yazarID" type="xs:string"/>
      <xs:element name="kitapID" type="xs:string"/>
      <xs:element name="yazarAd" type="xs:string"/>
      <xs:element name="yazarSoyad" type="xs:string"/>
      <xs:element name="dogumYili" type="xs:string"/>
    </xs:sequence>
  </xs:complexType>
</xs:element>
<xs:element name="KITAPLAR">
  <xs:complexType>
    <xs:sequence>
      <xs:element name="kitapID" type="xs:string"/>
      <xs:element name="yazarID" type="xs:string"/>
      <xs:element name="yayinciID" type="xs:string"/>
      <xs:element name="kitapAdi" type="xs:string"/>
      <xs:element name="ISBNno" type="xs:string"/>
      <xs:element name="baskiTarihi" type="xs:string"/>
      <xs:element name="sayfaSayisi" type="xs:string"/>
    </xs:sequence>
  </xs:complexType>
</xs:element>
<xs:element name="YAYINCILAR">
  <xs:complexType>
    <xs:sequence>
      <xs:element name="yayinciID" type="xs:string"/>
      <xs:element name="kitapID" type="xs:string"/>
      <xs:element name="yayinciAdi" type="xs:string"/>
      <xs:element name="yeri" type="xs:string"/>  
    </xs:sequence>
  </xs:complexType>
</xs:element>

</xs:schema>    
   
